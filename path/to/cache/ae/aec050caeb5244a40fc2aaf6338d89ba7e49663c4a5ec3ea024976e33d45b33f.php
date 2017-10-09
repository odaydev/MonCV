<?php

/* layout.phtml */
class __TwigTemplate_3caee4f94b89060267758cdd14270d5116d4ed35a6f8508d4908bf2c0fc08e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <title>Slim 3</title>

        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link href=\"/css/style.css\" rel=\"stylesheet\"/>
        <link href=\"/css/stars.css\" rel=\"stylesheet\"/>
        <link href=\"/bootstrap/dist/css/normalize.css\" rel=\"stylesheet\"/>
        <link href=\"/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->

    </head>
  
       <body>

        <div class=\"container-fluid\">
          <div class=\"row\">
          <div class=\"col-sm-3 col-lg-2\">
              <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>
            <nav class=\"navbar navbar-inverse sidebar\" role=\"navigation\">
              <div class=\"container-fluid\"> 
                <div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-home\"></span></a></li>
                    <li ><a href=\"#\">Profile<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-user\"></span></a></li>
                    <li ><a href=\"#\">Messages<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-envelope\"></span></a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- 
             <nav class=\"navbar \" id=\"sidenav-left\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
 -->
          </div>
          <div class=\"col-sm-9 col-lg-10\">
            <?php if (isset(\$data['bodyParse'])) :
           
            include(\$data['bodyParse']); endif ?>

          </div>
          </div>
        </div>
             
            
           
       <script
       src=\"js/jquery/jquery.min.js\"></script>
       <script src=\"/bootstrap/dist/js/bootstrap.min.js\"></script>

       </body>

  
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.phtml", "C:\\Users\\DEV_'Oday'\\Desktop\\sites\\MonCV\\templates\\layout.phtml");
    }
}
