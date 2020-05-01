<?php

/* cart.html.twig */
class __TwigTemplate_ac847fd2c1cf3c7e8668fee1a0e2c3c0799a0aa9f81304e37c7bd7add3ba92b3 extends Twig_Template
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
        if (($context["cart"] ?? null)) {
            // line 2
            echo "<li>
    <a href=\"index.php?r=cart/show\" id=\"cart_action\" title=\"";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CART", "cart")), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-shopping-cart top-menu__label\">
            <sub id=\"cart_element\" class=\"num_notify_bar\">";
            // line 5
            echo twig_escape_filter($this->env, ($context["cart"] ?? null), "html", null, true);
            echo "</sub>
        </span>
    </a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cart.html.twig", "/var/www/html/templates/boostrap4/layout/appLms/cart.html.twig");
    }
}
