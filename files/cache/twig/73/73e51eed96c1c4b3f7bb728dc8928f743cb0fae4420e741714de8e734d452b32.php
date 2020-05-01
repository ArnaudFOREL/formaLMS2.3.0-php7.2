<?php

/* overview.html.twig */
class __TwigTemplate_20a3b2af622523e9dba3ec958dc84c05a8da9b017a559e3cf415be718639e81e extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table id=\"table-overview\" class=\"table table-bordered\">
        <colgroup>
            <col style=\"width: 30px\">
            <col style=\"width: 30px\">
            <col style=\"width: 330px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 100px\">
            <col style=\"width: 55px\">
        </colgroup>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"transparent\"></th>
            <th colspan=\"7\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_INFO", "coursereport")), "html", null, true);
        echo "</th>
            <th colspan=\"7\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_DETAILS", "standard")), "html", null, true);
        echo "</th>
            <th class=\"transparent\"></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TYPE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TEST_QUEST_MAXTESTSCORE", "test")), "html", null, true);
        echo "</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_REQUIRED_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_WEIGHT", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SHOW_TO_USER", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_USE_FOR_FINAL", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PASSED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NOT_PASSED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NOT_CHECKED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_AVERANGE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MAX_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MIN_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SHOW_IN_DETAIL", "test")), "html", null, true);
        echo "</td>
            <td></td>
        </tr>
        </thead>
        <tbody class=\"course-sortable\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["overview"] ?? null), "tests", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 51
            echo "            <tr>
                <td class=\"handle\"><i class=\"fa fa-sort\"></i></td>
                <td></td>
                <td class=\"name\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "typeString", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "max", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "required", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "weight", array()), "html", null, true);
            echo "</td>
                ";
            // line 59
            if ($this->getAttribute($context["test"], "show", array())) {
                // line 60
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 62
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 64
            echo "                ";
            if ($this->getAttribute($context["test"], "final", array())) {
                // line 65
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 67
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 69
            echo "                <td class=\"table-cell\">
                    ";
            // line 70
            if ($this->getAttribute($this->getAttribute($context["test"], "passed", array()), "active", array())) {
                // line 71
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 73
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 75
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 77
            if ($this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "active", array())) {
                // line 78
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 80
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 82
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 84
            if ($this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "active", array())) {
                // line 85
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 87
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 89
            echo "                </td>
                <td class=\"table-cell\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "average", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "max_score", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "min_score", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">
                    <input class=\"js-set-detail-visibility\" type=\"checkbox\" data-value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "idReport", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["test"], "showInDetail", array())) {
                echo "checked";
            }
            echo ">
                </td>
                <td class=\"actions\">
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["test"], "actions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 98
                echo "                        ";
                if ($this->getAttribute($context["action"], "visible", array())) {
                    // line 99
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "link", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "\"></i></a>
                        ";
                }
                // line 101
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </tbody>
        <tfoot class=\"empty\">
        <th colspan=\"17\"></th>
        </tfoot>
    </table>

</div>

<div class=\"button--add\">
    <span>";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_ACTIVITY", "coursereport")), "html", null, true);
        echo "</span>
    <ul class=\"dropdown\">
        <li><a href=\"index.php?r=lms/coursereport/addactivity\">";
        // line 116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_ACTIVITY_TITLE", "coursereport")), "html", null, true);
        echo "</a>
        </li>
        <li><a href=\"index.php?r=lms/coursereport/addscorm\">";
        // line 118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_SCORM_RESULTS", "coursereport")), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>


<div class=\"activities-container\">
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["details"] ?? null), "activities", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 126
            echo "        <div data-activityId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "\" data-activityName=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "name", array()), "html", null, true);
            echo "\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</div>


<script type=\"text/javascript\">

    activities = ";
        // line 133
        echo twig_jsonencode_filter(($context["details"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";

    \$(document).ready(function() {
        var table = \$('#table-overview').DataTable({
            paging: true,
            \"columns\": [
                { \"orderable\": false, \"searchable\": false },
                {
                    \"className\":      'details-control',
                    \"orderable\":      false,
                    \"data\":           null,
                    \"defaultContent\": ''
                },
                null,
                null,
                null,
                null,
                null,
                { \"orderable\": false, \"searchable\": false },
                { \"orderable\": false, \"searchable\": false },
                null,
                null,
                null,
                null,
                null,
                null,
                { \"orderable\": false, \"searchable\": false },
                { \"orderable\": false, \"searchable\": false }
            ],
            \"columnDefs\": [
                {
                    \"targets\": [ 4 ],
                    \"visible\": false,
                },
                {
                    \"targets\": [ 5 ],
                    \"visible\": false
                },
                {
                    \"targets\": [ 6 ],
                    \"visible\": false
                }
            ],
            \"language\": {
                \"info\": \"\",
            }
        });

        function format ( d ) {
            const label4 = '";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TEST_QUEST_MAXTESTSCORE", "test")), "html", null, true);
        echo "';
            const label5 = '";
        // line 183
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_REQUIRED_SCORE", "standard")), "html", null, true);
        echo "';
            const label6 = '";
        // line 184
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_WEIGHT", "coursereport")), "html", null, true);
        echo "';

            // `d` is the original data object for the row
            return '<table cellpadding=\"5\" cellspacing=\"0\" border=\"0\" class=\"extra-info\">'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label4+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[4]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label5+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[5]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label6+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[6]+'</td>'+
                    '</tr>'+
                '</table>';
        }

        // Add event listener for opening and closing details
        \$('#table-overview tbody').on('click', 'td.details-control', function () {
            const tr = \$(this).closest('tr');
            const row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 184,  388 => 183,  384 => 182,  332 => 133,  325 => 128,  314 => 126,  310 => 125,  300 => 118,  295 => 116,  290 => 114,  279 => 105,  271 => 102,  265 => 101,  257 => 99,  254 => 98,  250 => 97,  240 => 94,  235 => 92,  231 => 91,  227 => 90,  224 => 89,  218 => 87,  210 => 85,  208 => 84,  204 => 82,  198 => 80,  190 => 78,  188 => 77,  184 => 75,  178 => 73,  170 => 71,  168 => 70,  165 => 69,  161 => 67,  157 => 65,  154 => 64,  150 => 62,  146 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  124 => 54,  119 => 51,  115 => 50,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 36,  67 => 35,  63 => 34,  59 => 33,  49 => 26,  45 => 25,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overview.html.twig", "/var/www/html/appLms/views/coursereport/overview.html.twig");
    }
}
