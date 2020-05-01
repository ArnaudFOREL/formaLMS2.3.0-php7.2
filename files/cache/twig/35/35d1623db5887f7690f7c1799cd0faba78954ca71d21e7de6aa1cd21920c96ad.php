<?php

/* show.html.twig */
class __TwigTemplate_4965197629017deca7a60851d78c282a1d54663f6d61636d7129c4818698a75b extends Twig_Template
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
        echo "<div class=\"homepage__row homepage__row--login homepage__row--gray no-padding\">

    <div class=\"visible-xs\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::get_catalogue"));
        echo "
    </div>
    ";
        // line 6
        if ( !($context["under_maintenence"] ?? null)) {
            // line 7
            echo "        ";
            if (array_key_exists("baseLogin", $context)) {
                // line 8
                echo "            <div class=\"col-xs-12 col-sm-6";
                if ( !array_key_exists("socialLogin", $context)) {
                    echo " col-sm-offset-3";
                }
                echo "\">
                ";
                // line 9
                if ((($context["block_attempts"] ?? null) == false)) {
                    // line 10
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["baseLogin"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                        // line 11
                        echo "                        ";
                        echo $this->getAttribute($context["login"], "form", array());
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "                    ";
                    if ((($context["done"] ?? null) != false)) {
                        // line 14
                        echo "                        <div>
                            <b class=\"logout\">";
                        // line 15
                        echo twig_escape_filter($this->env, ($context["done"] ?? null), "html", null, true);
                        echo "</b>
                        </div>
                    ";
                    }
                    // line 18
                    echo "                    ";
                    if ((($context["msg"] ?? null) != false)) {
                        // line 19
                        echo "                        <div id=\"service_msg\">
                            <b class=\"login_failed\">";
                        // line 20
                        echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                        echo "</b>
                        </div>
                    ";
                    }
                    // line 23
                    echo "                ";
                } else {
                    // line 24
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ACCESS_LOCK", "login")), "html", null, true);
                    echo "</h3>
                    <p>";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["block_attempts"] ?? null), "html", null, true);
                    echo "</p>
                ";
                }
                // line 27
                echo "                ";
                if ( !array_key_exists("socialLogin", $context)) {
                    // line 28
                    echo "                    <nav class=\"homepage__links\">
                        ";
                    // line 29
                    if ((($context["isSelfRegistrationActive"] ?? null) != false)) {
                        // line 30
                        echo "                            <a href=\"";
                        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
                        echo "/index.php?r=";
                        echo twig_escape_filter($this->env, twig_constant("_register_"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_REGISTER", "login")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 32
                    echo "                        <a href=\"";
                    echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
                    echo "/index.php?r=";
                    echo twig_escape_filter($this->env, twig_constant("_lostpwd_"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOG_LOSTPWD", "login")), "html", null, true);
                    echo "</a>
                    </nav>
                ";
                }
                // line 35
                echo "            </div>
        ";
            }
            // line 37
            echo "        ";
            if (array_key_exists("socialLogin", $context)) {
                // line 38
                echo "            <div class=\"col-xs-12 col-sm-6\">
                <div class=\"social-login\">
                    <p class=\"social-login__title\">
                        <span>";
                // line 41
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SOCIAL_LOGIN", "login")), "html", null, true);
                echo "</span>
                    </p>
                    <div class=\"social-login__list\">
                        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["socialLogin"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                    // line 45
                    echo "                            ";
                    echo $this->getAttribute($context["login"], "form", array());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </div>
                </div>
                <nav class=\"homepage__links\">
                    ";
                // line 50
                if ((($context["isSelfRegistrationActive"] ?? null) != false)) {
                    // line 51
                    echo "                        <a href=\"";
                    echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
                    echo "/index.php?r=";
                    echo twig_escape_filter($this->env, twig_constant("_register_"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_REGISTER", "login")), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 53
                echo "                    <a href=\"";
                echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
                echo "/index.php?r=";
                echo twig_escape_filter($this->env, twig_constant("_lostpwd_"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOG_LOSTPWD", "login")), "html", null, true);
                echo "</a>
                </nav>
            </div>
        ";
            }
            // line 57
            echo "    ";
        } else {
            // line 58
            echo "        <div class=\"box\">
            <h3>";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MAINTENANCE", "configuration")), "html", null, true);
            echo "</h3>
            <div class=\"text\">
                ";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MAINTENANCE_TEXT", "login")), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        // line 65
        echo "</div>
<div class=\"homepage__row\">
    <br/>
    <h3>";
        // line 68
        echo ($context["intro_text_header"] ?? null);
        echo "</h3>
</div>
<div class=\"homepage__row\">
    <br/>
    <div class=\"collapse homepage__collapsed-text js-collapsed-text\" id=\"description\">
        <p style=\"line-height: 26px;\">";
        // line 73
        echo ($context["intro_text_body"] ?? null);
        echo "</p>
    </div>
    <div class=\"collapse-wrapper\" data-toggle=\"collapse\" data-target=\"#description\">
        <a class=\"forma-button forma-button--orange is-hidden js-show-collapsed-text\" href=\"#\">
            ";
        // line 77
        echo ($context["read_all"] ?? null);
        echo "
        </a>
        <span class=\"glyphicon glyphicon-remove icon icon--close\">";
        // line 79
        echo ($context["close"] ?? null);
        echo "</span>
        <br/><br/>
    </div>
</div>
<div class=\"homepage__row homepage__row--footer\">
    <nav class=\"homepage__links\">
        ";
        // line 85
        if (array_key_exists("externalPages", $context)) {
            // line 86
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["externalPage"]) {
                // line 87
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "title", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['externalPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        ";
        }
        // line 90
        echo "    </nav>
</div>

<script>
    \$(document).ready(function () {
        var \$elem = \$('.js-collapsed-text');
        var _textHeight = \$elem.children('p').height();
        var _containerHeight = \$elem.height();
        var \$btn = \$('.js-show-collapsed-text');

        if (_textHeight > _containerHeight) {
            \$btn.removeClass('is-hidden');
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 90,  253 => 89,  242 => 87,  237 => 86,  235 => 85,  226 => 79,  221 => 77,  214 => 73,  206 => 68,  201 => 65,  194 => 61,  189 => 59,  186 => 58,  183 => 57,  171 => 53,  161 => 51,  159 => 50,  154 => 47,  145 => 45,  141 => 44,  135 => 41,  130 => 38,  127 => 37,  123 => 35,  112 => 32,  102 => 30,  100 => 29,  97 => 28,  94 => 27,  89 => 25,  84 => 24,  81 => 23,  75 => 20,  72 => 19,  69 => 18,  63 => 15,  60 => 14,  57 => 13,  48 => 11,  43 => 10,  41 => 9,  34 => 8,  31 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "show.html.twig", "/var/www/html/templates/boostrap4/layout/appCore/homepage/show.html.twig");
    }
}
