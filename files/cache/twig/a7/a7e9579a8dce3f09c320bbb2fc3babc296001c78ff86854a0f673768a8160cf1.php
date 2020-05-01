<?php

/* helpdesk_modal.html.twig */
class __TwigTemplate_6d4d3f0c6df83eaa2ecb1be4dbf33df8ffc5215afabfc986756849ef181379a2 extends Twig_Template
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
        echo "<div id=\"inline\">
    <form id=\"contact\" name=\"contact\" action=\"#\" method=\"post\" style=\"width: 470px;\" role=\"form\" style=\"display: block;\">
        <legend>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CUSTOMER_HELP", "customer_help")), "html", null, true);
        echo "</legend>
        <fieldset>
            <input type=\"hidden\" id=\"sendto\" name=\"sendto\" class=\"txt\" value=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::sett", array(0 => "customer_help_email")));
        echo "\" readonly>
            <input type=\"hidden\" id=\"authentic_request_newsletter\" name=\"authentic_request\" value=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Util::getSignature"));
        echo "\" />
            <input type=\"hidden\" id=\"username\" name=\"username\" class=\"txt\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getIdst", array(), "method"), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"msg_ok\" name=\"msg_ok\" class=\"txt\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_OPERATION_SUCCESSFUL", "standard")), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"help_req_resolution\" name=\"help_req_resolution\">
            <input type=\"hidden\" id=\"help_req_flash_installed\" name=\"help_req_flash_installed\">
            <table cellspacing=2 cellpaddin=2 width=98% border=0>
                <tr>
                    <td width=\"27%\"><label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_USER", "standard")), "html", null, true);
        echo "</label></td>
                    <td>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" class=\"txt\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getUserid", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"oggetto\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_HELPDESK_SUBJ", "configuration")), "html", null, true);
        echo "</label></td>
                    <td>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-file\"></span></span>
                            <input class=\"form-control\" type=\"oggetto\" id=\"oggetto\" name=\"oggetto\" class=\"txt\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_HELPDESK_SUBJ_PLACEHOLDER", "configuration")), "html", null, true);
        echo "\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"email\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_EMAIL", "menu")), "html", null, true);
        echo "</label> </td>
                    <td>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                            <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" class=\"txt\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userDetails"] ?? null), call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("constant", array(0 => "ACL_INFO_EMAIL"))), array(), "array"), "html", null, true);
        echo "\" placeholder=\"\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"telefono\">";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PHONE", "classroom")), "html", null, true);
        echo "</label></td>
                    <td>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-phone-alt\"></span></span>
                            <input class=\"form-control\" type=\"text\" id=\"telefono\" name=\"telefono\" class=\"txt\" placeholder=\"\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"msg\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TEXTOF", "menu")), "html", null, true);
        echo "</label></td>
                    <td><textarea id=\"msg\" name=\"msg\" class=\"txtarea\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_WRITE_ASK_A_FRIEND", "profile")), "html", null, true);
        echo "\"></textarea></td>
                </tr>
                <tr>
                    <td><label for=\"copia\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SEND_CC", "standard")), "html", null, true);
        echo "</label></td>
                    <td> <input id=\"copia\" name=\"copia\" checked data-toggle=\"toggle\" data-on=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_GROUP_FIELD_NORMAL", "admin_directory")), "html", null, true);
        echo "\"
                            data-size=\"small\" data-off=\"";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NO", "standard")), "html", null, true);
        echo "\" data-onstyle=\"success\"
                            data-offstyle=\"danger\" type=\"checkbox\">
                    </td>
                </tr>
                <tr>
                    <td><label for=\"priorita\">";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PRIORITY", "message")), "html", null, true);
        echo "</label></td>
                    <td>
                        <input id=\"priorita\" name=\"priorita\" data-size=\"small\" checked data-toggle=\"toggle\" data-on=\"";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NORMAL", "message")), "html", null, true);
        echo "\"
                            data-off=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_HIGH", "message")), "html", null, true);
        echo "\" data-onstyle=\"success\" data-offstyle=\"danger\"
                            type=\"checkbox\">
                    </td>
                </tr>
                <tr>
                    <td><label for=\"disclaimer\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CUSTOMER_HELP_DISCLAIMER_TITLE", "customer_help")), "html", null, true);
        echo "</label></td>
                    <td>
                        <p>";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CUSTOMER_HELP_DISCLAIMER", "customer_help")), "html", null, true);
        echo "</p><br>
                        <input id=\"disclaimer\" name=\"disclaimer\" data-size=\"small\" data-toggle=\"toggle\" data-on=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NORMAL", "message")), "html", null, true);
        echo "\"
                            data-off=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_HIGH", "message")), "html", null, true);
        echo "\" data-onstyle=\"success\" data-offstyle=\"danger\"
                            type=\"checkbox\">
                    </td>
                </tr>
            </table>
            <br>
            <table width=88% border=0 bgcolor=\"#ffcc99\">
                <tr>
                    <td align=center>
                        <button id=\"close\">";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CANCEL")), "html", null, true);
        echo "</button>
                    </td>
                    <td align=center>
                        <button id=\"send\" disabled=\"true\">";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CONFIRM")), "html", null, true);
        echo "</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
<div id=\"inline_no_help\">No Help Desk</div>

<style>
#inline_no_help {
    display: none;
    width: 100px;
    height: 100px;
}
</style>

<script>
\$('#navbar a[href*=\"modname=helpdesk&op=popup\"]').fancybox({href: '#";
        // line 102
        if (($context["email"] ?? null)) {
            echo "inline";
        } else {
            echo "inline_no_help";
        }
        echo "'});
\$(\"#disclaimer\").change(function() {
    \$(\"#send\").attr(\"disabled\", !\$(\"#disclaimer\").is(\":checked\"));
});
</script>
";
    }

    public function getTemplateName()
    {
        return "helpdesk_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 102,  179 => 84,  173 => 81,  161 => 72,  157 => 71,  153 => 70,  148 => 68,  140 => 63,  136 => 62,  131 => 60,  123 => 55,  119 => 54,  115 => 53,  109 => 50,  105 => 49,  93 => 40,  85 => 35,  78 => 31,  70 => 26,  63 => 22,  55 => 17,  48 => 13,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "helpdesk_modal.html.twig", "/var/www/html/templates/standard/layout/appLms/helpdesk_modal.html.twig");
    }
}
