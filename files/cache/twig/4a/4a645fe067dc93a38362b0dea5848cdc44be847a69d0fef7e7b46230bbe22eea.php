<?php

/* lms_user.html.twig */
class __TwigTemplate_09de4695f4c0da941220b84cfbd6d5f3ae7d296c876d612aeadcc6c77acc806f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lms_user.html.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-to-review.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-menu.css\"/>
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "    <script type=\"text/javascript\" src=\"";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
        echo "/lib/js_utils.js\"></script>
        <script>
            \$(function() {
                // feedback
                \$('#container-feedback').click(function(){
                   event.preventDefault();
                    \$( this ).fadeOut( 500 );
                });
            });
        </script>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <!-- blind nav -->
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "blind_navigation")));
        echo "
    <!-- container -->
    <div id=\"container\">





        <!-- menu_over -->
        <div id=\"menu_over\" class=\"layout_menu_over\">
        <!-- feedback -->
            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "feedback")));
        echo "
            ";
        // line 36
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::cart"));
        echo " <!-- ????? -->

            <!-- header -->
            <header class=\"header white-bg\">
                <nav>
                    <div class=\"row-fluid\" id=\"lms_menu_container\" >
                        <div class=\"navbar-header\">
                            ";
        // line 43
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "logo")));
        echo "
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <span class=\"glyphicon glyphicon-align-justify\"></span>
                            </button>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                ";
        // line 50
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "main-menu")));
        echo "
                                ";
        // line 51
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "cart")));
        echo " <!-- ????? -->
                                ";
        // line 52
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "profile")));
        echo "
                            </ul>
                        </div>
                        <div id=\"c-mask\" class=\"c-mask\"></div>
                    </div>
                </nav>
            </header>

            ";
        // line 61
        echo "            ";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "helpdesk")));
        echo "
            ";
        // line 63
        echo "
        </div>




        <!-- content  -->
        ";
        // line 71
        echo "        <div class=\"row lms-user-content-wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 73
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "content")));
        echo "

                <div class=\"nofloat\"></div>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <div id=\"footer\" class=\"layout_footer\">
        ";
        // line 81
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
        echo "
            ";
        // line 82
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
        echo "
    </div>




    <!-- scripts -->
    ";
        // line 89
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
    <!-- debug -->
    ";
        // line 91
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
    <!-- def_lang -->
    ";
        // line 93
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "lms_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 93,  178 => 91,  173 => 89,  163 => 82,  159 => 81,  148 => 73,  144 => 71,  135 => 63,  130 => 61,  119 => 52,  115 => 51,  111 => 50,  101 => 43,  91 => 36,  87 => 35,  73 => 24,  70 => 23,  67 => 22,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lms_user.html.twig", "/var/www/html/templates/boostrap4/layout/lms_user.html.twig");
    }
}
