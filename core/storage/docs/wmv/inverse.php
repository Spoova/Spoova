<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/spoova/res/main/images/icons/favicon.png">
    <title>WMV - Errors</title>
    
    <link  rel="stylesheet" type="text/css" href="http://localhost/spoova/res/main/css/res.css" x-debug="res-css"><script src='http://localhost/spoova/res/main/js/jquery-3.6.0.js'></script><script src='http://localhost/spoova/res/main/css/bootstrap/js/bootstrap.min.js'></script><link  rel="stylesheet" type="text/css" href="http://localhost/spoova/res/main/css/mdb5/css/mdb.min.css"><script src='http://localhost/spoova/res/main/js/config.js'></script><script src='http://localhost/spoova/res/main/js/core.js'></script><script src='http://localhost/spoova/res/main/js/onLoaded.js'></script><script src='http://localhost/spoova/res/main/js/custom.js'></script><script src='http://localhost/spoova/res/main/js/device.js'></script><script src='http://localhost/spoova/res/main/js/loadImages.js'></script><script src='http://localhost/spoova/res/main/js/formValidator.js'></script><script src='http://localhost/spoova/res/main/js/jquery.mousewheel.js'></script><script src='http://localhost/spoova/res/main/js/anime.js'></script><script src='http://localhost/spoova/res/main/js/init.js'></script> 
    <style rel="build.css.tutorial"> 

     body{
          color: rgb(111, 110, 110);
          background-color : rgba(var(--white-dd));
     }

     .tutorial{
          min-height:100vh;
     }

     .pre-area{
          font: menu;
          font-size: .85em;
          display: inline-block;
          width:100%;
      }

     .pre-area:not([class*="bc-"]){
          background-color : rgba(var(--white-dd));
      }
  
     .pre-area.fix {
         font-size: 1em;
    }
     
     pre.pre-code {
          overflow: auto hidden;
          font-size: .95em; 
          margin-bottom:0;
          padding-top:1em;
     } 
     
     pre.pre-code:not([class*="c-"]) {
          color: #4f58a0;
     } 
     
     pre .comment {
          color: #909090;
     }
  
     .lacier.active {
          background-color: #3ecb32;
          color: white;
          box-shadow: 0 0 2px 3px #32bc27 inset;
     }
  
     .lacier.active .c-lime-dd{
          color: white;
     }  

     ul > li > a{
          color:inherit;
     }   

     ul > li > a:hover{
          color:inherit;
     }  

     [class*="foot-note"] {
         color: rgb(32, 130, 130);
     }

     :where(.d85){
          font-size: .85em;
     }
     :where(.d87){
          font-size: .87em;
     }
     :where([class*="foot-note"]){
          font-size: .87em;
     }
     :where([class*="foot-note"] .head){
          font-weight: 600;
     }

     [class*="rule-dashed"] {
          border-bottom: dashed .1em;
     }   
     
     [class*="hyperlink"] {
          border-bottom: dashed .1em;
     }

     .olist {
          font-family: calibri;
          color:#9d6216;
     }

     .control{
          right: 10px;
          top: 10px;
          opacity: 1;
          display: inline-block;
          transition: opacity .8s ease-in-out;
          z-index: 10;
      }

      .control .controller.fade-out{
          transition: transform .2s ease-in-out, opacity .3s ease-in-out ;
          transform: rotate(360deg);
      }

      .control .controller:not(.bi-x).fade-out{
          opacity: 0;
      }
      
      .blurry{
          z-index: 0;
      }

      @media (min-width: 1001px){

          .control{
               display: none;
          }

          .nav-left{
               left: 0;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
          .blurry{
               display: none !important;
           }
     }


 </style><style rel="build.css.headers"> 
.--theme-dark > * {
   --white-dd: 11, 10, 28;
   --white:  21, 15, 39;
   --off-white: 22, 23, 62;
   --black-ll: 179, 179, 179; 
   --silver: 23, 28, 56;       
   --silver-d: 21, 25, 49;       
   --silver-dd: 23, 28, 56;       
}

.--theme-dark .--theme-esc{
   --white-dd: 240, 240, 240;
   --white:  255, 255, 255;
   --black-ll: 79, 79, 79;
}

.--theme-dark .bc-white-d.--theme-esc{
    --white-d: 21, 24, 51;
    --white-dd: 23, 28, 56;
    --silver-d: var(--white-dd);
    color: rgb(203, 198, 198);
}

.--theme-dark .bc-white-d.--theme-esc .flex-full > *{
    --white: 255, 255, 255;
    --white-d: 250, 250, 250;
    --white-dd: 240, 240, 240;
    --black-ll: 79, 79, 79;
    --silver: 230, 230, 230;
    --silver-d: 220, 220, 220;
    --silver-dd: 200, 200, 200;
}

body.--theme-dark{
    color: rgb(125, 125, 125);
    background-color : rgba(21, 15, 39);
}
 </style><style rel="build.css.navbars"> 

     .nav-left{
          min-height: 100vh;
          width: 300px;
          background-color: rgba(var(--white-dd));
          /* box-shadow: 0px 1px 1px 1px rgba(var(--white-dd)); */
          display: inline-block;
          left: -300px;
          transition: left .2s ease-in-out;
          z-index: 1;
     }

     .nav-left.in{
          left: 0;
     }

     .nav-left ul > li:hover{
          color: var(--orange-dd);
          cursor:pointer;
     }

     .nav-left ul a{
         color: rgb(114, 110, 105);
         list-style: none; 
     }

     .nav-left ul li {
         list-style: none;
     }

     .nav-left ul li:hover .ico:before {
         content: "◈";
         display: inline-block;
         padding: 4px;
         color: #bebebe;
     }

     .nav-left ul li a.active {
          color: orange;
     }

     .tutorial{
          width: 100%;
          transition: width .2s ease-in-out;
     }

     @media (min-width: 1001px){

          .nav-left{
               left: 0 !important;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
     }
 </style>
    
    
    <script src='http://localhost/spoova/res/main/js/switcher.js'></script>
    
</head>
<body class="--theme-dark">

    <script>
        $(document).ready(function(){
            $('.control').click(function(){
                $btn = $(this).find('.controller')
                $isActive = $btn.hasClass('active');

                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    if(!$isActive) { 
                        $btn.removeClass('bi-list').addClass('active bi-x') 
                    }else{
                        $btn.removeClass('active bi-x').addClass('bi-list') 
                    }
                });
            }) 
            $('.blurry').click(function(){
                $btn = $('.controller')
                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    $btn.removeClass('active bi-x').addClass('bi-list')
                });
            });

            function runHash() {
                setTimeout(() => {
                    let hash = hashRunner(':get')
                    $('.lacier').removeClass('active');
                    $('#'+hash+' .lacier').addClass('active')  
                });                 
            }
            runHash();
            setTimeout(() => {

                $(window).bind('hashchange', function() {
                   runHash()
                })

            });

        })
    </script>
    
    <script> 
window.onload = function() {
    

    let switchBox = new Switcher;

    $('.theme-btn').click(function() {

        $('body').toggleClass('--theme-dark');

        if($('body').hasClass('--theme-dark')){                
            switchBox.set('spoovaTheme', '--theme-dark')
        }else{
            switchBox.set('spoovaTheme', '')    
        }

    })

    switchBox.bind('spoovaTheme', function(value){
        $('body').addClass(value)
    })


 
}
</script>

    <section class="">
        <div class="control font-em-2 fixed c-orange box">
            <div class="flex px-40 mid rad-r shadow anc-btn-link bc-white">
                <span class="bi-list controller flex"></span>
            </div>
        </div>
         

    

     

     

     <nav class="nav-left fixed">

          <div class="flex pxv-10">
               <div class="flex-icon theme-btn box bd bd-silver rad-r anc-btn-link flow-hide bc-silver ripple relative" style="transition: none">
                    <div class="px-40 b-cover ico-spin" data-src="http://localhost/spoova/res/main/images/icons/favicon.png" style="transition: none"></div>
                    <div class="font-em-1d5 px-40 flex mid overlay fb-9 calibri" style="top:-2px; left:.4px; z-index: 1; color:#202dd5;">
                         s 
                    </div>
               </div>
               <a href="<?= DomUrl('') ?>" class="flex">
                    <div class="flex midv mxl-8 fb-9 font-menu font-em-1d2" style="color: #202dd5">POOVA</div>
               </a>
          </div> <br>

          <ul class="list-square">
               <li> <a href="<?= DomUrl('docs/installation') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Installation</a> </li>
               <li> <a href="<?= DomUrl('docs/wmv') ?>" class="<?= inPath('active') ?>" ><span class="ico ico-spin"></span><span class="fb-6 pointer" title="Windows Models View">WMV</span> PATTERN</a></li>
               <li> <a href="<?= DomUrl('docs/live-server') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Live Server</a></li>
               <li> <a href="<?= DomUrl('docs/database') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Database</a> </li>
               <li> <a href="<?= DomUrl('docs/resource') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Resource class</a> </li>
               <li> <a href="<?= DomUrl('docs/routings') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Routing System</a> </li>
               <li> <a href="<?= DomUrl('docs/sessions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Sessions</a> </li>
               <li> <a href="<?= DomUrl('docs/forms') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Forms</a> </li>
               <li> <a href="<?= DomUrl('docs/useraccounts') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Users</a> </li>
               <li> <a href="<?= DomUrl('docs/database/data-model') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling DBModels</a> </li>
               <li> <a href="<?= DomUrl('docs/database/migrations') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Migrations</a> </li>
               <li> <a href="<?= DomUrl('docs/classes') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Classes</a> </li>
               <li> <a href="<?= DomUrl('docs/functions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Functions</a> </li>
               <li> <a href="<?= DomUrl('docs/template') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Template Engine</a> </li>
               <li> <a href="<?= DomUrl('docs/setters') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Global Setters</a> </li>
               <li> <a href="<?= DomUrl('docs/mails') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Mails</a> </li>
               <li> <a href="<?= DomUrl('docs/cli') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Cli Commands</a> </li>         
               <li> <a href="<?= DomUrl('docs/plugins') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Composer and Plugins</a></li>
               <li> <a href="<?= DomUrl('docs/libraries') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Third-Party Libraries</a> </li>
               <li> <a href="<?= DomUrl('docs/other-features') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Other Features</a> </li>
          </ul>
      
     </nav>



    <div class="box-full pxl-2 bc-white-dd pull-right">
    
        <section class="pxv-10 tutorial bc-white">
            <div class="font-em-1d2">

                
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/wmv">Wmv</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/wmv/inverse">Inverse</a>  </div>


                <div class="start font-em-d8">

                    <div class="font-em-1d5 c-orange">Window Inverse</div> <br>  
                    
                    <div class="resource-intro">
                        <div class="">
                            Spoova is a url-loose framework because it handles url comparison as a non-strict type. 
                            This means that a url <code class="calibri">"Home"</code> and <code class="calibri">"home"</code> are regarded to mean the same thing. 
                            There are certain situations that developers may want to be strict in defining window urls, especially 
                            in situations where urls are generated using <code class="calibri">base64_encode()</code> function. In this case,
                            handling case sensitive urls might be an issue. In order to fix this issue, spoova introduces two approaches which can be used to define 
                            case sensitive urls. 
                        </div> 
                    </div> <br>

                    <div class="">

                        <div class="c-olive">SELF::STRICT</div>

                        <div class="mvt-10">
                            The <code class="calibri">SELF::STRICT</code> key, when defined on a shutter, will set all urls to case sensitive. The value must be 
                            set as a boolean of <code class="calibri">true</code>. Once declared within a shutter, the shutter will remember to set all urls to case sensitive 
                            unless an inverse is declared which naturally negates the <code class="calibri">SELF::STRICT</code> key.
                        </div>

                        <div class="pre-area mvt-10">
<pre class="pre-code c-olive">
  &lt;?php 

  use Window;

  class Home extends Window {
    
    function __construct() {

        self::call($this, [

            'home/user' => 'root',    <span class="comment no-select">// case sensitive url</span>
            
            'home/profile' => 'root', <span class="comment no-select">// case sensitive url</span>

             <span class="c-teal">SELF::STRICT => true,</span>    <span class="comment no-select">// set all urls as case sensitive</span>

        ])

    }
    
  }

</pre>
                        </div>
                    </div> <br>

                    <div class="">

                        <div class="c-olive">Inverse operator (<code class="calibri">!</code>)</div>

                        <div class="mvt-10">
                           The inverse operator, when declared upon any shutter url, defines that such url must be declared as strict type (i.e case sensitive). Since it is an inverse 
                           operator, in a situation where a <code class="calibri">SELF::STRICT</code> is already defined on a shutter, then applying the inverse <code class="calibri">!</code> operator will declare such
                           url as non-strict (or case insensitive). This relationship is explained below
                        </div>

                        <div class="pre-area mvt-10">
<pre class="pre-code c-olive">
  &lt;?php 

  use Window;

  class Home extends Window {
    
    function __construct() {

        self::call($this, [

            'home/user' => 'root',     <span class="comment no-select">// case insensitive url</span>
            
            '<span class="c-brown">!</span>home/profile' => 'root', <span class="comment no-select">// case sensitive url (inverse)</span>

        ])

    }
    
  }

</pre>
                        </div>

                        <div class="pre-area mvt-10">
<pre class="pre-code c-olive">
  &lt;?php 

  use Window;

  class Home extends Window {
    
    function __construct() {

        self::call($this, [

            'home/user' => 'root',     <span class="comment no-select">// case sensitive url</span>
            
            '<span class="c-brown">!</span>home/profile' => 'root', <span class="comment no-select">// case insensitive url (inverse)</span>

             <span class="c-teal">SELF::STRICT => true,</span> <span class="comment no-select">// set all urls as strict except inverse</span>

        ])

    }
    
  }

</pre>
                        </div>

                        <div class="foot-note mvt-10">
                            The examples above best explains the behavior of the inverse operator. on the urls. In the first code example, the natural 
                            shutter behavior was altered using the inverse operator. Likewise, in the second code example, the behavior of 
                            <code>SELF::STRICT</code> on urls was altered using the same operator. It is important to note that the <code>window()</code> 
                            method has also been integerated with the inverse method. Hence, the inverse operator can be used within the window method, for example, 
                            as <code>window('!:user')</code>. The window function will understand to return the value with the inverse operator as its first character.
                            For example assuming our root entry point on a window url is <code>home</code>, then while <code>window(':user')</code> will return <code>home/user</code> 
                            which will be compared as case-insensitive, 
                            <code>window('!:user')</code> will return <code>!home/user</code> which will be compared as a case-sensitive url unless this behaviour is inversely altered with 
                            <code>SELF::STRICT</code> constant. Also, note that the <code>SELF::STRICT</code> inverse behaviour only affect shutters. Function such as 
                            <code>invoke()</code>, <code>windowExcludes()</code> and <code>windowIncludes()</code> will respond in their own individual default ways.
                        </div>

                    </div>

                    
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/wmv">Wmv</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/wmv/inverse">Inverse</a>  </div>


                </div>
            </div>
        </section>
    </div>
    
    
    

         <div class="blurry page-overlay ov-d5 hide"></div>
    </section>

</body>
</html>