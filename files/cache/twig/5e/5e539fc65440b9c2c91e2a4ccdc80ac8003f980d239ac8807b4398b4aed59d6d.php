<?php

/* adm.html.twig */
class __TwigTemplate_39176a9eaa7f32748715fd0ef6941765a31c54b57b8d3ff4acd6f702632b2cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adm.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/adm.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/lms-to-review.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/reset-fonts-grids.css\" />

";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "script/jquery.smartmenus.js\"></script>        
    <script type=\"text/javascript\">
        YAHOO.util.Event.onDOMReady(function () {
            checkSelect(document.getElementById('course_type').value);

            YAHOO.util.Event.on(
                YAHOO.util.Selector.query('select#course_type'), 'change', function (e) {
                    checkSelect(this.value);
                });

        });

        function checkSelect(val) {
            if (val == 'elearning') {
                document.getElementById(\"auto_subscription\").removeAttribute(\"disabled\");
            }
            else {
                document.getElementById(\"auto_subscription\").disabled = \"disabled\";
                document.getElementById(\"auto_subscription\").checked = false;
            }
        }
         \$(function() {
          // Forma SmartMenu init
          \$('#main-menu').smartmenus({   
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
          });
          // feedback
          \$('#container-feedback').click(function(){
              \$( this ).fadeOut( 500 );
          });
        });        
        
        
    </script>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "
<!-- menu_over -->
";
        // line 51
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "menu_over")));
        echo "

<!-- blind nav -->
";
        // line 54
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "blind_navigation")));
        echo "
<!-- container -->

<div id=\"admcontainer\">

    <!-- feedback -->
    ";
        // line 60
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "feedback")));
        echo "

    <!-- content -->
    <div class=\"layout_colum_container\">
        ";
        // line 64
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "content")));
        echo "
        <div class=\"nofloat\"></div>
    </div>
</div>
<!-- footer -->
<div id=\"footer\" class=\"layout_footer\">
    ";
        // line 70
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
        echo "
        ";
        // line 71
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
        echo "
</div>

<!-- scripts -->
";
        // line 75
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
<!-- debug -->
";
        // line 77
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
<!-- def_lang -->
";
        // line 79
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "adm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 79,  147 => 77,  142 => 75,  135 => 71,  131 => 70,  122 => 64,  115 => 60,  106 => 54,  100 => 51,  96 => 49,  93 => 48,  52 => 11,  49 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adm.html.twig", "/var/www/html/templates/boostrap4/layout/adm.html.twig");
    }
}
