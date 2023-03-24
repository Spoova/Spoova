<?php

namespace spoova\mi\core\commands;

use spoova\mi\core\classes\FileManager;

class Backup extends Entry{

    public $spack = false;

    public function __construct($args = [])
    {

        $option = $args[0]?? '';

        if((!$args) || (count($args) > 1)){

            self::commandTitle('backup');
            Cli::break().
            Cli::textView(Cli::error('Expecting exactly one(1) argument!'), 2);
            Cli::break(2).
            Cli::textView(Cli::emo('ribbon-arrow', '|1').'Syntax:'. self::mi('backup', '','','').Cli::warn('[project|:clear]', 1), 2);
            Cli::break(2);
            return false;
        }
        
        if($option != 'project' && $option != ':clear'){

            self::commandTitle('backup');
            Cli::break().
            Cli::textView(Cli::error('invalid option supplied'), 2);
            Cli::break(2).
            Cli::textView(Cli::emo('ribbon-arrow', '|1').'Syntax:'. self::mi('backup', '','','').Cli::warn('[project|:clear]', 1), 2);
            Cli::break(2);
            return false;

        }        

        self::commandTitle('backup '.$option);
        
        //save to directory...        
        if ($option == 'project') {

            Cli::textView(Cli::alert('Please input your backup folder name: '), 2, "1|");

            $folder = Cli::prompt([], null, true);

            if(!preg_match('~[a-zA-Z0-9_]+?~', $folder)){
                Cli::clearUp();
                Cli::textView(Cli::error('invalid folder name supplied.'), 2, "|1");
                Cli::textView(Cli::error('backup aborted due to invalid folder name.'), 2, "|2");
                return false;
            }

            Cli::clearUp(2);
            Cli::textView(Cli::alert('Please input your backup file name: '), 2, "1|");

            $filename = Cli::prompt([], null, true);

            if(trim($filename) && !preg_match('~[a-zA-Z0-9_]+?~', $filename)){
                Cli::clearUp();
                Cli::textView(Cli::error('invalid file name supplied.'), 2, "|1");
                Cli::textView(Cli::error('backup aborted due to invalid file name.'));
                return false;
            }

            if(!trim($filename)){
                Cli::clearUp(2);                
                Cli::textView(Cli::warn("Notice: ")." backup file name will be autogenerated.", 2, "1|3");
                $filename = 'bk-'.time();
            } 

            if(is_file(docroot.'/'.$folder."/".$filename.".zip")){
                Cli::clearUp(); 
                Cli::textView(Cli::error('backup file "'.Cli::warn($folder.'/'.$filename.'.zip').'" exist!'), 2, "|2");
                return false;                
            }
            
            Cli::runAnime([[$this, 'newBackup'], [$folder, $filename]]);
        
        } elseif ($option == ':clear') {

            Cli::runAnime([$this, 'delBackup']);   

        }
        


    }

    function newBackup($args) {

        $folder = $args[0];
        $file = $args[1];
        
        Cli::clearUp();

        yield from Cli::play(5, 2, 'initializing backup ...', 2, 2);

        Cli::clearUp(2);

        $newName = $file;
        
        $FileManager = new FileManager;
        $FileManager->setUrl(docroot);

        Cli::break(2);
        yield from Cli::play(5, 2, 'zipping project file (may take a while) ...');   
        
        if($FileManager->addDir($folder)){

            $FileManager->zipUrl($folder."/".$newName, [$folder,'.git']);
    
            Cli::clearLine();
    
            yield from Cli::play(5, 2, Cli::emo('ribbon-arrow', '|1').'finalizing backup ...', 0, 2);  
    
            Cli::clearUp();
    
            if($FileManager->zipped()){
                yield Cli::endAnime(1, 0, Cli::success("backup added to: $folder/$newName.zip"), 2);   
            }
        }

        yield Cli::endAnime(0, 0, Cli::error('backup failed!'));

    }

    function delBackup(){

        Cli::break();
        Cli::textView(Cli::alert("Please enter backup folder name: ", 2));

        $backupFol = trim(Cli::prompt([], null, true), " ");
        if(!$backupFol) $backupFol = 'backup';
        $backupDir = docroot.'/'.$backupFol;

        if(!is_dir($backupDir)){
            Cli::clearUp(2);
            Cli::textView(Cli::error('invalid directory supplied!'), 2, "|1");
            return false;
        } else {

            Cli::clearUp();
            Cli::textView(Cli::warn('Notice: ').('this will delete the entire backup folder and its contents. [Y/N] '), 2);
    
            $delete = strtolower(Cli::prompt(['y','n'], null, true));
    
            if($delete === 'n'){
                yield Cli::endAnime(0, 0, Cli::warn("Notice: ").('process aborted successfully!').br('',2), 0, );         
            }elseif($delete !== 'y'){
                Cli::clearUp(2);
                yield Cli::endAnime(0, 0, Cli::warn("Notice: ").('process exited!').br('',2), 0, );                     
            }
    
            
            Cli::break();
            
            if(file_exists($backupDir)){
        
                yield from Cli::play(10, 2, 'initializing backups removal...', 0, 2);
    
                Cli::clearUp(2);
                
                $FileManager = new FileManager;
                $FileManager->setUrl($backupDir);
        
                Cli::break(2);
        
                Cli::animeType('circle');
    
                yield from Cli::play(10, 2, 'deleting backups (may take a while) ...');   
                
                Cli::animeType('normal');
    
                if($FileManager->deleteFile()){
            
                    yield from Cli::play(10);  
            
                    Cli::clearUp();
                    yield Cli::endAnime(1, 0, Cli::success('backups removed successfully.'), 2);   
                
                }
            }
                
            Cli::textView(Cli::error('backups removal failed.'), 2);
            yield Cli::endAnime(0, 1, Cli::danger('Ensure that the root backup directory still exists and is accessible.'), 2);   

        }


    }

}