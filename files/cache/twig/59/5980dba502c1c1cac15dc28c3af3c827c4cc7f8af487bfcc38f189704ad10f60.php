<?php

/* coursereport.html.twig */
class __TwigTemplate_be5a5decd1f3309c40ade4846f9bcd446097a66870684cd1fa90e8819d5bd044 extends Twig_Template
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
        echo "<div class=\"page-header\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_COURSEREPORT", "menu_course")), "html", null, true);
        echo "</h1>
</div>

<ul class=\"nav nav-tabs navbar--coursereport\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#overview\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_OVERVIEW", "coursereport")), "html", null, true);
        echo "</a></li>
    <li><a data-toggle=\"tab\" href=\"#details\" class=\"js-details\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_DETAILS", "coursereport")), "html", null, true);
        echo "</a></li>
</ul>

<div class=\"tab-content\">
    <div id=\"overview\" class=\"tab-pane active\">
        ";
        // line 12
        $this->loadTemplate("overview.html.twig", "coursereport.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div id=\"details\" class=\"tab-pane\">
        ";
        // line 15
        $this->loadTemplate("details.html.twig", "coursereport.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "coursereport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  47 => 15,  43 => 13,  41 => 12,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coursereport.html.twig", "/var/www/html/appLms/views/coursereport/coursereport.html.twig");
    }
}
