<?php

/* base.html.twig */
class __TwigTemplate_8520d4fe6ce783ad58c4676f19282809009afac12845b6e4fc2209ebb120e2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compatibility' => array($this, 'block_compatibility'),
            'jquery_core' => array($this, 'block_jquery_core'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'jsAddons' => array($this, 'block_jsAddons'),
            'css_addons' => array($this, 'block_css_addons'),
            'locale_calendar' => array($this, 'block_locale_calendar'),
            'pagehead' => array($this, 'block_pagehead'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::lang_code"));
        echo "\">

<head>
     ";
        // line 5
        $this->displayBlock('compatibility', $context, $blocks);
        // line 8
        echo "    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 11
        echo ($context["layout_title"] ?? null);
        echo "</title>
    <!-- zone  -->
    ";
        // line 13
        echo twig_escape_filter($this->env, ($context["layout_zone_meta"] ?? null), "html", null, true);
        echo "
    <!-- meta  -->
    ";
        // line 15
        echo ($context["layout_meta"] ?? null);
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "images/favicon.png\" type=\"image/png\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "images/favicon.ico\"/>

    <!-- reset and font stylesheet -->
    ";
        // line 20
        echo ($context["resetter"] ?? null);
        echo "
    
    <!-- JQuery, Bootstrap  -->
    ";
        // line 23
        $this->displayBlock('jquery_core', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 32
        echo "    
    
    ";
        // line 34
        $this->displayBlock('jsAddons', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('css_addons', $context, $blocks);
        // line 43
        echo "    
    ";
        // line 44
        $this->displayBlock('locale_calendar', $context, $blocks);
        // line 48
        echo "
    

    <!-- specific stylesheet -->    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/base.css\"/>    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/responsive.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/font-awesome/css/font-awesome.min.css\" />

    <!-- to be eliminated -->    
    ";
        // line 57
        echo twig_escape_filter($this->env, ($context["yuiLib"] ?? null), "html", null, true);
        echo "
    <!-- printer stylesheet-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/print.css\" media=\"print\"/>
    ";
        // line 60
        echo ($context["accessibility"] ?? null);
        echo "
    <!-- Page Head area -->
    ";
        // line 62
        echo ($context["layout_zone_page_head"] ?? null);
        echo "
    ";
        // line 63
        echo ($context["layout_rtl"] ?? null);
        echo "
    ";
        // line 64
        $this->displayBlock('pagehead', $context, $blocks);
        // line 66
        echo "    
    
    <!-- Custom css area -->    
    ";
        // line 69
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 71
        echo "
    <!-- Custom Javascripts area -->

    <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "script/tabnav.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.js\"></script>

  ";
        // line 77
        $this->displayBlock('javascript', $context, $blocks);
        // line 79
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css\" />

    <!-- Restyling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.min.css\">
    <!--
    To use or edit the not minified css uncomment this portion of code
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.css\">
    -->
    ";
        // line 88
        if (array_key_exists("custom_css_path", $context)) {
            // line 89
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_css_path"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 91
        echo "</head>
<body class=\"yui-skin-docebo yui-skin-sam\">

    ";
        // line 95
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "        ";
        echo ($context["layout_analytics"] ?? null);
        echo "
    ";
        // line 99
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js\" data-cfasync=\"false\"></script>
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
        \"message\": \"Ce site utilise des cookies nécessaires à son fonctionnement.\",
        \"dismiss\": \"J'ai compris\",
        \"link\": \"Politique de confidentialité\",
        \"href\": \"https://p2ea.info/politique de confidentialité.pdf\"
      }
    });
    </script>
</body>
</html>";
    }

    // line 5
    public function block_compatibility($context, array $blocks = array())
    {
        // line 6
        echo "    \t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     ";
    }

    // line 23
    public function block_jquery_core($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo ($context["jqueryLib"] ?? null);
        echo "    
    ";
    }

    // line 27
    public function block_bootstrap($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        echo ($context["boostrap"] ?? null);
        echo "
    
    <script>\$.fn.bootstrapBtn = \$.fn.button.noConflict();</script>
    ";
    }

    // line 34
    public function block_jsAddons($context, array $blocks = array())
    {
        // line 35
        echo "    <!-- addons: js -->    
    ";
        // line 36
        echo ($context["jsAddons"] ?? null);
        echo "    
    ";
    }

    // line 39
    public function block_css_addons($context, array $blocks = array())
    {
        // line 40
        echo "    <!-- addons: css -->    
    ";
        // line 41
        echo ($context["cssAddons"] ?? null);
        echo "    
    ";
    }

    // line 44
    public function block_locale_calendar($context, array $blocks = array())
    {
        // line 45
        echo "    <!-- locale data format -->        
    ";
        // line 46
        echo ($context["locale_calendar"] ?? null);
        echo "
    ";
    }

    // line 64
    public function block_pagehead($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    // line 69
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 70
        echo "    ";
    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        // line 78
        echo "    ";
    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
        // line 96
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 96,  315 => 95,  311 => 78,  308 => 77,  304 => 70,  301 => 69,  297 => 65,  294 => 64,  288 => 46,  285 => 45,  282 => 44,  276 => 41,  273 => 40,  270 => 39,  264 => 36,  261 => 35,  258 => 34,  249 => 28,  246 => 27,  239 => 24,  236 => 23,  231 => 6,  228 => 5,  203 => 99,  198 => 97,  195 => 95,  190 => 91,  184 => 89,  182 => 88,  177 => 86,  171 => 83,  165 => 79,  163 => 77,  158 => 75,  154 => 74,  149 => 71,  147 => 69,  142 => 66,  140 => 64,  136 => 63,  132 => 62,  127 => 60,  123 => 59,  118 => 57,  112 => 54,  108 => 53,  104 => 52,  98 => 48,  96 => 44,  93 => 43,  91 => 39,  88 => 38,  86 => 34,  82 => 32,  80 => 27,  77 => 26,  75 => 23,  69 => 20,  63 => 17,  59 => 16,  55 => 15,  50 => 13,  45 => 11,  40 => 8,  38 => 5,  32 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/templates/boostrap4/layout/base.html.twig");
    }
}
