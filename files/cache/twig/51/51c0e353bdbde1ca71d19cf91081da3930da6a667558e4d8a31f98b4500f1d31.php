<?php

/* details.html.twig */
class __TwigTemplate_d8fab5b9ca341d8808f65fc55a40ba6dc42dc2e0b36b313f585c4d370ea8cb3a extends Twig_Template
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
        echo "<div class=\"filter-container\">
    <select class=\"filter js-user-level-filter is-disabled\" disabled>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 5
                echo "                <option value=\"false\" selected>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ALL")), "html", null, true);
                echo "</option>
            ";
            } else {
                // line 7
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("_LEVEL_" . $this->getAttribute($context["loop"], "index0", array())))), "html", null, true);
                echo "</option>
            ";
            }
            // line 9
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select>
    <div class=\"button--exportcsv\"><a href=\"index.php?r=lms/coursereport/export\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_EXPORT_CSV", "standard")), "html", null, true);
        echo "</a></div>
</div>

<div class=\"table-responsive\">
    <table id=\"table-details\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"transparent\"></th>
                <th colspan=\"100\" class=\"text-center\">
                    Voti degli studenti
                </th>
            </tr>
            <tr class=\"js-table-course-headers\">
                <th>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_STUDENTS", "coursereport")), "html", null, true);
        echo "</th>
                <th>
                    <select class=\"filter js-user-detail-filter is-disabled\" disabled>
                    </select>
                </th>
                <th class=\"js-final-score text-center\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_FINAL_SCORE", "standard")), "html", null, true);
        echo "
                    <div class=\"final-buttons-container\">
                        <a class=\"js-finals-filter round-report\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-calculator\" aria-hidden=\"true\"></i></a>
                        <a class=\"js-finals-filter redo-final\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a>
                        <a class=\"edit-final\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i></a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class=\"js-details-table\">
        </tbody>
    </table>
</div>

<div class=\"pagination pagination__initial js-pagination\">

</div>

";
    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  90 => 24,  74 => 11,  71 => 10,  57 => 9,  49 => 7,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "details.html.twig", "/var/www/html/appLms/views/coursereport/details.html.twig");
    }
}
