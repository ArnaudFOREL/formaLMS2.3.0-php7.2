<?php

/* profile.html.twig */
class __TwigTemplate_0b102b7d3024a9ec8d1ac987c4b12c0fbb238ab33f4f49766a015a7d567a96ee extends Twig_Template
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
        echo "<li class=\"green_menu\">
    ";
        // line 2
        if (($context["profile"] ?? null)) {
            // line 3
            echo "         ";
            list($context["profil"], $context["notif"]) =             array($this->getAttribute(($context["profile"] ?? null), "homeUserProfile", array(0 => "normal", 1 => false, 2 => false), "method"), $this->getAttribute(($context["profile"] ?? null), "notifMsg", array(), "method"));
            // line 4
            echo "    ";
        }
        echo "    
    ";
        // line 5
        echo ($context["notif"] ?? null);
        echo "                                
    <div id=\"o-wrapper\" class=\"o-wrapper\">
        <button id=\"c-button--slide-right\" class=\"c-button\" >
            <a data-toggle=\"dropdown\" href=\"#\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "menu_course")), "html", null, true);
        echo "\">
                <span class=\"username icon--profile\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getUserName", array(), "method"), "html", null, true);
        echo "</span>
            </a>
        </button>
    </div>
</li>
<div id=\"c-menu--slide-right\" class=\"c-menu c-menu--slide-right user-panel\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <a href=\"javascript:void(0)\" class=\"c-menu__close\"><span class=\"glyphicon glyphicon-remove\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "organization")), "html", null, true);
        echo "</span></a>
            </div>
            <div class=\"col-xs-6\">
                <a title=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOGOUT", "standard")), "html", null, true);
        echo "\" href=\"";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
        echo "/index.php?r=";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("constant", array(0 => "_logout_")));
        echo "\">
                    <span class=\"glyphicon glyphicon-off\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOGOUT", "standard")), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
        <div class=\"tabnav js-tabnav\">
            ";
        // line 27
        if ((($context["profile"] ?? null) || ($context["credits"] ?? null))) {
            // line 28
            echo "                <div class=\"tabnav__label-wrapper\">
                ";
            // line 29
            if (($context["profile"] ?? null)) {
                // line 30
                echo "                    <div class=\"tabnav__label selected\" data-tab=\"profile\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "standard")), "html", null, true);
                echo "</div>
                ";
            }
            // line 32
            echo "                ";
            if (($context["credits"] ?? null)) {
                // line 33
                echo "                    <div class=\"tabnav__label";
                if ( !($context["profile"] ?? null)) {
                    echo " selected";
                }
                echo "\" data-tab=\"credits\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TIME_PERIODS", "standard")), "html", null, true);
                echo "</div>
                ";
            }
            // line 35
            echo "                </div>
            ";
        }
        // line 37
        echo "        </div>
        <div class=\"tabnav__content-wrapper\">
        ";
        // line 39
        if (($context["profile"] ?? null)) {
            // line 40
            echo "            <div class=\"tabnav__content tabnav__content--profile is-visible\">";
            echo ($context["profil"] ?? null);
            echo "</div>
        ";
        }
        // line 42
        echo "        ";
        if (($context["credits"] ?? null)) {
            // line 43
            echo "            <div class=\"tabnav__content tabnav__content--profile";
            if ( !($context["profile"] ?? null)) {
                echo " is-visible";
            }
            echo "\">
                <div class=\"row credits\">
                    <div class=\"col-xs-12\">
                        <div class=\"js-credits-ajax-container\">";
            // line 46
            echo ($context["credits"] ?? null);
            echo "</div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 51
        echo "        </div>
        <div class=\"row course-subscription\">
            <div class=\"col-xs-12\">
                ";
        // line 54
        echo ($context["subscribeCourse"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"row news\">
            <div class=\"col-xs-12\">
                ";
        // line 59
        echo ($context["news"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 62
        if ((call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("count", array(0 => ($context["languages"] ?? null)))) > 1)) {
            // line 63
            echo "        <div class=\"row lang\">
            <div class=\"col-xs-6\">
                <p>";
            // line 65
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CHANGELANG", "register")), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-xs-6\">
                ";
            // line 68
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::buildLanguages"));
            echo "
            </div>
        </div>
        ";
        }
        // line 72
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 72,  169 => 68,  163 => 65,  159 => 63,  157 => 62,  151 => 59,  143 => 54,  138 => 51,  130 => 46,  121 => 43,  118 => 42,  112 => 40,  110 => 39,  106 => 37,  102 => 35,  92 => 33,  89 => 32,  83 => 30,  81 => 29,  78 => 28,  76 => 27,  68 => 22,  60 => 21,  54 => 18,  42 => 9,  38 => 8,  32 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.html.twig", "/var/www/html/templates/standard/layout/appLms/profile.html.twig");
    }
}
