<?php

/* base.html */
class __TwigTemplate_8944b57466f08564caa53a1988261ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        echo " - Одевают, кормят, радуют ...</title>
    <base href=\"/\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"Одевают, кормят, радуют\" />
    <meta name=\"author\" content=\"Саша Андреев\" />

    <link href=\"bootstrap/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"img/css.css\" rel=\"stylesheet\" />
    <link href=\"bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

</head>

<body>

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">

            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"/\">Школьный проект по биологии</a>

            <div class=\"nav-collapse\">
                <ul class=\"nav\">
                    <li ";
        // line 37
        if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
        if (($_currentPage_ == "main")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Главная</a></li>
                    <li ";
        // line 38
        if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
        if (($_currentPage_ == "dress")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"dress/\">Одевают</a></li>
                    <li ";
        // line 39
        if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
        if (($_currentPage_ == "feed")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"feed/\">Кормят</a></li>
                    <li ";
        // line 40
        if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
        if (($_currentPage_ == "gladden")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"gladden/\">Радуют</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    
    <hr />

    <footer>
        <p>&copy; 2012 Саша Андреев - Это тест</p>
    </footer>

</div>

</body>
</html>";
    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 5,  98 => 50,  96 => 49,  81 => 40,  74 => 39,  67 => 38,  60 => 37,  25 => 5,  19 => 1,);
    }
}
