<?php

/* menu.html.twig */
class __TwigTemplate_c3a588cf13a57e1d872093783a31d47079249d9497fa0fb349b9c4914be143b8 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            if (call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("checkRole", array(0 => $this->getAttribute($context["item"], "role", array()))))) {
                echo " ";
                // line 4
                echo "        ";
                if (call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("count", array(0 => $this->getAttribute($context["item"], "submenu", array()))))) {
                    // line 5
                    echo "            <li class=\"dropdown\" >
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    // line 6
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()), "menu_over")), "html", null, true);
                    echo "<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 9
                        echo "                    <li";
                        if ($this->getAttribute($context["subitem"], "active", array())) {
                            echo " class=\"active\"";
                        }
                        echo ">
                        <a href=\"";
                        // line 10
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()), "menu_over")), "html", null, true);
                        echo "\">
                            ";
                        // line 11
                        if ($this->getAttribute($context["item"], "image", array())) {
                            echo $this->getAttribute($context["item"], "image", array());
                        } else {
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()), "menu_over")), "html", null, true);
                        }
                        // line 12
                        echo "                        </a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "                </ul>
            </li>
        ";
                } else {
                    // line 18
                    echo "            <li";
                    if (((($this->getAttribute(($context["currentPage"] ?? null), "isMVC", array()) == true) && ($this->getAttribute($context["item"], "mvc_path", array()) == $this->getAttribute(($context["currentPage"] ?? null), "MVC", array()))) || ((($this->getAttribute(($context["currentPage"] ?? null), "isMVC", array()) == false) && ($this->getAttribute($context["item"], "module_name", array()) == $this->getAttribute(($context["currentPage"] ?? null), "modname", array()))) && ($this->getAttribute($context["item"], "default_op", array()) == $this->getAttribute(($context["currentPage"] ?? null), "op", array()))))) {
                        echo " class=\"active\"";
                    }
                    echo ">
                <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()), "menu_over")), "html", null, true);
                    echo "\">
                    ";
                    // line 20
                    if ($this->getAttribute($context["item"], "image", array())) {
                        echo $this->getAttribute($context["item"], "image", array());
                    } else {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()), "menu_over")), "html", null, true);
                    }
                    // line 21
                    echo "                </a>
            </li>
        ";
                }
                // line 24
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        // line 27
        if (((($context["perm_certificate"] ?? null) == true) && (($context["notGeneratedCertificates"] ?? null) > 0))) {
            // line 28
            echo "    <li class=\"green_menu\">
        <span class=\"badge badge-danger\">";
            // line 29
            echo twig_escape_filter($this->env, ($context["notGeneratedCertificates"] ?? null), "html", null, true);
            echo "</span>
        <a href=\"index.php?r=lms/mycertificate/show&sop=unregistercourse\" class=\"no-border-right no-before\">
            <div class=\"has-forma-tooltip\">
                <div class=\"forma-tooltip down\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CERTIFICATE_DOWNLOAD", "menu_over")), "html", null, true);
            echo "</div>
                <span class=\"glyphicon glyphicon-bell top-menu__label\">";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MY_CERTIFICATE", "menu_over")), "html", null, true);
            echo "</span>
            </div>
        </a>
    </li>
";
        }
        // line 38
        echo "
";
        // line 39
        if (call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("in_array", array(0 => $this->getAttribute(($context["user"] ?? null), "getUserLevelId", array(), "method"), 1 => array(0 => call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("constant", array(0 => "ADMIN_GROUP_GODADMIN"))), 1 => call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("constant", array(0 => "ADMIN_GROUP_ADMIN")))))))) {
            // line 40
            echo "    <li class=\"green_menu\">
        <a href=\"";
            // line 41
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "adm")));
            echo "\" class=\"no-border-right no-before\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_GO_TO_FRAMEWORK", "menu_over")), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-cog top-menu__label\">";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_GO_TO_FRAMEWORK", "menu_over")), "html", null, true);
            echo "</span>
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  141 => 41,  138 => 40,  136 => 39,  133 => 38,  125 => 33,  121 => 32,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  100 => 24,  95 => 21,  89 => 20,  83 => 19,  76 => 18,  71 => 15,  63 => 12,  57 => 11,  51 => 10,  44 => 9,  40 => 8,  35 => 6,  32 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.html.twig", "/var/www/html/templates/standard/layout/appLms/menu.html.twig");
    }
}
