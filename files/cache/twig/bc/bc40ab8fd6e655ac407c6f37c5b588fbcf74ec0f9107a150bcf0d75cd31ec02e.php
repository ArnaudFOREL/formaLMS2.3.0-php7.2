<?php

/* home.html.twig */
class __TwigTemplate_5f28e690f9c06931ed011598769ed1c0a6a1271cba8a32a072114d1cf06468ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'jquery_core' => array($this, 'block_jquery_core'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'jquery_addons' => array($this, 'block_jquery_addons'),
            'css_addons' => array($this, 'block_css_addons'),
            'locale_calendar' => array($this, 'block_locale_calendar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::lang_code"));
        echo "\">
<head>
\t<!--Fix funzionamento scorm su IE9-->
\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=11\" />
\t<!--END -->

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<title>";
        // line 10
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::title"));
        echo "</title>
\t";
        // line 11
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "meta")));
        echo "
\t<link rel=\"shortcut icon\" href=\"";
        // line 12
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "images/favicon.png\" type=\"image/png\" />
\t<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "images/favicon.ico\" />
\t<!-- reset and font stylesheet -->
\t";
        // line 15
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::resetter"));
        echo "
\t<!-- common stylesheet -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/base.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-home.css\" />

    ";
        // line 20
        if (array_key_exists("custom_css_path", $context)) {
            // line 21
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_css_path"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "\t";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::rtl"));
        echo "
\t<!-- specific stylesheet -->
\t";
        // line 25
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("YuiLib::load", array(0 => "base")));
        echo "
\t<!-- printer stylesheet-->
\t";
        // line 27
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::accessibility"));
        echo "
\t<!-- Page Head area -->
\t";
        // line 29
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "page_head")));
        echo "

\t<!-- JQuery, Bootstrap  -->
\t";
        // line 32
        $this->displayBlock('jquery_core', $context, $blocks);
        // line 35
        echo "
\t";
        // line 36
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 39
        echo "
\t";
        // line 40
        $this->displayBlock('jquery_addons', $context, $blocks);
        // line 44
        echo "
\t";
        // line 45
        $this->displayBlock('css_addons', $context, $blocks);
        // line 49
        echo "    
    ";
        // line 50
        $this->displayBlock('locale_calendar', $context, $blocks);
        // line 54
        echo "
\t<!-- Restyling -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.min.css\">
\t<!--
    To use or edit the not minified css uncomment this portion of code
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.css\">
    -->
\t<script type=\"text/js\" src=\"";
        // line 61
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "static/main.js\"></script>

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css\" />
\t
</head>
<body class=\"homepage js-router--homepage\">
";
        // line 67
        if ((($context["under_maintenence"] ?? null) == false)) {
            // line 68
            echo "<!-- content -->
<main class=\"homepage__content content-margin\">
\t<div class=\"homepage__row homepage__row--header\">
\t\t<a href=\"index.php\">
\t\t\t<img class=\"left_logo\" src=\"";
            // line 72
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
            echo "images/company_logo.png\" alt=\"Left logo\" />
\t\t</a>
\t\t<div class=\"pull-right\">
            ";
            // line 75
            if ((($context["lang_number"] ?? null) > 1)) {
                echo "        
\t\t\t<div class=\"select-language\">
\t\t\t\t<span class=\"hidden-xs\">";
                // line 77
                echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Lang::t", array(0 => "_CHANGELANG", 1 => "register")));
                echo ": </span>";
                echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::change_lang"));
                echo "
\t\t\t</div>
            ";
            }
            // line 80
            echo "\t\t\t<div class=\"hidden-xs\">
\t\t\t\t";
            // line 81
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::get_catalogue"));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 85
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "content")));
            echo "
</main>
<!-- footer -->
<footer class=\"homepage__footer\">
\t";
            // line 89
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
            echo "
\t";
            // line 90
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
            echo "
</footer>
";
        }
        // line 93
        echo "<!-- def lang -->
";
        // line 94
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "
<!-- scripts -->
";
        // line 96
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
<!-- end scripts -->
";
        // line 98
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
";
        // line 99
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::analytics"));
        echo "
<script src=\"https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js\" data-cfasync=\"false\"></script>
    <script>
    window.cookieconsent.initialise({
      \"palette\": {
        \"popup\": {
          \"background\": \"#edeff5\",
          \"text\": \"#838391\"
        },
        \"button\": {
          \"background\": \"#4b81e8\"
        }
      },
      \"content\": {
        \"message\": \"Ce site utilise des cookies nécessaires pour améliorer votre expérience.\",
        \"dismiss\": \"J'ai compris\",
        \"link\": \"Politique de confidentialité\",
        \"href\": \"https://p2ea.info/politique de confidentialité.pdf\"
      }
    });
    </script>
</body>
</html>";
    }

    // line 32
    public function block_jquery_core($context, array $blocks = array())
    {
        // line 33
        echo "\t\t";
        echo ($context["jqueryLib"] ?? null);
        echo "
\t";
    }

    // line 36
    public function block_bootstrap($context, array $blocks = array())
    {
        // line 37
        echo "\t\t";
        echo ($context["boostrap"] ?? null);
        echo "
\t";
    }

    // line 40
    public function block_jquery_addons($context, array $blocks = array())
    {
        // line 41
        echo "\t\t<!-- addons: js -->
\t\t";
        // line 42
        echo ($context["jsAddons"] ?? null);
        echo "
\t";
    }

    // line 45
    public function block_css_addons($context, array $blocks = array())
    {
        // line 46
        echo "\t\t<!-- addons: css -->
\t\t";
        // line 47
        echo ($context["cssAddons"] ?? null);
        echo "
\t";
    }

    // line 50
    public function block_locale_calendar($context, array $blocks = array())
    {
        // line 51
        echo "    <!-- locale data format -->        
    ";
        // line 52
        echo ($context["locale_calendar"] ?? null);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 52,  290 => 51,  287 => 50,  281 => 47,  278 => 46,  275 => 45,  269 => 42,  266 => 41,  263 => 40,  256 => 37,  253 => 36,  246 => 33,  243 => 32,  216 => 99,  212 => 98,  207 => 96,  202 => 94,  199 => 93,  193 => 90,  189 => 89,  182 => 85,  175 => 81,  172 => 80,  164 => 77,  159 => 75,  153 => 72,  147 => 68,  145 => 67,  136 => 61,  131 => 59,  125 => 56,  121 => 54,  119 => 50,  116 => 49,  114 => 45,  111 => 44,  109 => 40,  106 => 39,  104 => 36,  101 => 35,  99 => 32,  93 => 29,  88 => 27,  83 => 25,  77 => 23,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  55 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  27 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/var/www/html/templates/boostrap4/layout/home.html.twig");
    }
}
