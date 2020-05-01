<?php

/* coursemenu_lat.html.twig */
class __TwigTemplate_0ed8d4c6dc7966f9474436e52fbfa2abb820f7b9079d5c398823d27b22237a60 extends Twig_Template
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
        echo "<!-- container -->
";
        // line 5
        echo "
";
        // line 6
        $context["selectedArea"] = "";
        // line 7
        $context["selectedAreaSlug"] = "";
        // line 8
        $context["columnWidth"] = "";
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 11
            echo "\t";
            if ($this->getAttribute($context["dropdown_menu"], "selected", array())) {
                // line 12
                echo "\t\t";
                $context["selectedArea"] = $this->getAttribute($context["dropdown_menu"], "name", array());
                // line 13
                echo "        ";
                $context["selectedAreaSlug"] = $this->getAttribute($context["dropdown_menu"], "slug", array());
                // line 14
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<div class=\"row section-coourse\">
    <div class=\"section-coourse__header col-xs-12\">
\t\t<div class=\"row-fluid\">
            <div class=\"col-sm-3 text-center\">
                <div class=\"row\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["course_img"] ?? null), "html", null, true);
        echo "\" class=\"img-responsive section-coourse__img\">
                </div>
            </div>
            <div class=\"col-sm-9\">
                <h1 class=\"section-coourse__title\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["course_name"] ?? null), "html", null, true);
        echo "</h1>
                <div class=\"section-coourse__progress-container\">
                    <div class=\"progress section-coourse__progress\">
                        <div class=\"progress-bar progress-bar-warning";
        // line 29
        if (($this->getAttribute(($context["stats"] ?? null), "perc_completed", array()) < 25)) {
            echo " progress-bar-warning--black";
        }
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "perc_completed", array()), "html", null, true);
        echo "\"
                             aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "perc_completed", array()), "html", null, true);
        echo "%;\">
                            <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "perc_completed", array()), "html", null, true);
        echo "%</span>
                        </div>
                        <span class=\"glyphicon glyphicon-signal pull-right\" aria-hidden=\"true\" data-toggle=\"modal\" data-target=\"#myModal\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"section-coourse__menu col-xs-12\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"section-coourse__dropdown col-sm-3 text-center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"forma-dropdown\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"forma-dropdown__selected forma-button dropdown-toggle has-icon icon--coourse-menu icon--coourse-menu-";
        // line 46
        echo twig_escape_filter($this->env, ($context["selectedAreaSlug"] ?? null), "html", null, true);
        echo "\" data-toggle=\"dropdown\">";
        echo twig_escape_filter($this->env, ($context["selectedArea"] ?? null), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"forma-dropdown__toggle forma-button dropdown-toggle\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["dropdown_menu"], "link", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dropdown_menu"], "id_menu", array()), "html", null, true);
            echo "\" class=\"has-icon icon--coourse-menu icon--coourse-menu-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dropdown_menu"], "slug", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["dropdown_menu"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-9 section-coourse__menu-horizontal\">
\t\t\t\t<ul class=\"slider-menu\">
\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 70
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["dropdown_menu"], "selected", array())) {
                // line 71
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dropdown_menu"], "slider_menu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_menu"]) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t<li class=\"slider-menu__item";
                    if ($this->getAttribute($context["slider_menu"], "selected", array())) {
                        echo " is-selected";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slider_menu"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slider_menu"], "name", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
        <div class=\"clearfix\"></div>
    </div>
\t<div class=\"clearfix\"></div>

\t";
        // line 84
        echo "\t\t";
        // line 85
        echo "\t";
        // line 86
        echo "
\t<div id=\"myModal\" class=\"modal fade section-coourse-modal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\">
                        ";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_overview", "coursereport")), "html", null, true);
        echo "
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"row\">
                        ";
        // line 99
        if (($this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "user_stats", array()), "show_time", array()) != null)) {
            // line 100
            echo "\t\t\t\t\t\t\t";
            $context["columnWidth"] = "4";
            // line 101
            echo "
\t\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-4\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">
                                    ";
            // line 104
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PARTIAL_TIME", "course")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"text\">
\t\t\t\t\t\t\t\t\t";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "user_stats", array()), "show_time", array()), "partial_time", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-4\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">
                                    ";
            // line 112
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TOTAL_TIME", "standard")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"text\">
                                    ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "user_stats", array()), "show_time", array()), "total_time", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
                        ";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t";
            $context["columnWidth"] = "6";
            // line 120
            echo "\t\t\t\t\t\t";
        }
        // line 121
        echo "
\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 122
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 124
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_WHOIS_ONLINE", "course")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "user_stats", array()), "who_is_online", array()), "user_online", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 132
        echo "
\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 133
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROGRESS_ALL", "course")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "course_stats", array()), "materials", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 142
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 144
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_COMPLETED", "standard")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "course_stats", array()), "materials_complete", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 151
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 153
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROGRESS_FAILED", "standard")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["modal_stats"] ?? null), "course_stats", array()), "materials_incomplete", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 179
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<div class=\"col-xs-6\"></div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"forma-button forma-button--orange-hover\" data-dismiss=\"modal\">";
        // line 185
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CLOSE", "standard")), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t";
        // line 194
        echo "\t";
        // line 195
        echo "\t\t";
        // line 196
        echo "\t\t";
        // line 197
        echo "\t\t\t";
        // line 198
        echo "\t\t\t\t";
        // line 199
        echo "\t\t\t\t\t";
        // line 200
        echo "\t\t\t\t\t\t";
        // line 201
        echo "\t\t\t\t\t\t\t";
        // line 202
        echo "\t\t\t\t\t\t";
        // line 203
        echo "\t\t\t\t\t";
        // line 204
        echo "\t\t\t\t\t";
        // line 205
        echo "\t\t\t\t\t\t";
        // line 206
        echo "\t\t\t\t\t\t\t";
        // line 207
        echo "\t\t\t\t\t\t\t\t";
        // line 208
        echo "\t\t\t\t\t\t\t\t\t";
        // line 209
        echo "\t\t\t\t\t\t\t\t";
        // line 210
        echo "\t\t\t\t\t\t\t";
        // line 211
        echo "\t\t\t\t\t\t\t";
        // line 212
        echo "\t\t\t\t\t\t\t\t";
        // line 213
        echo "\t\t\t\t\t\t\t\t\t";
        // line 214
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 215
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 216
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 217
        echo "\t\t\t\t\t\t\t\t\t";
        // line 218
        echo "\t\t\t\t\t\t\t\t";
        // line 219
        echo "\t\t\t\t\t\t\t";
        // line 220
        echo "\t\t\t\t\t\t\t";
        // line 221
        echo "\t\t\t\t\t\t\t\t";
        // line 222
        echo "\t\t\t\t\t\t\t\t\t";
        // line 223
        echo "\t\t\t\t\t\t\t\t";
        // line 224
        echo "\t\t\t\t\t\t\t";
        // line 225
        echo "\t\t\t\t\t\t";
        // line 226
        echo "\t\t\t\t\t";
        // line 227
        echo "\t\t\t\t";
        // line 228
        echo "\t\t\t";
        // line 229
        echo "\t\t\t";
        // line 230
        echo "\t\t\t\t";
        // line 231
        echo "\t\t\t\t";
        // line 232
        echo "\t\t\t\t\t";
        // line 233
        echo "\t\t\t\t\t\t";
        // line 234
        echo "\t\t\t\t\t\t";
        // line 235
        echo "\t\t\t\t\t\t";
        // line 236
        echo "\t\t\t\t\t";
        // line 237
        echo "\t\t\t\t";
        // line 238
        echo "\t\t\t\t";
        // line 239
        echo "\t\t\t\t";
        // line 240
        echo "\t\t\t\t\t";
        // line 241
        echo "\t\t\t\t\t\t";
        // line 242
        echo "\t\t\t\t\t\t\t";
        // line 243
        echo "\t\t\t\t\t\t";
        // line 244
        echo "\t\t\t\t\t\t";
        // line 245
        echo "\t\t\t\t\t\t\t";
        // line 246
        echo "\t\t\t\t\t\t";
        // line 247
        echo "\t\t\t\t\t\t";
        // line 248
        echo "\t\t\t\t\t\t\t";
        // line 249
        echo "\t\t\t\t\t\t";
        // line 250
        echo "\t\t\t\t\t\t";
        // line 251
        echo "\t\t\t\t\t\t\t";
        // line 252
        echo "\t\t\t\t\t\t";
        // line 253
        echo "\t\t\t\t\t\t";
        // line 254
        echo "\t\t\t\t\t\t\t";
        // line 255
        echo "\t\t\t\t\t\t";
        // line 256
        echo "\t\t\t\t\t\t";
        // line 257
        echo "\t\t\t\t\t\t\t";
        // line 258
        echo "\t\t\t\t\t\t";
        // line 259
        echo "\t\t\t\t\t\t";
        // line 260
        echo "\t\t\t\t\t\t\t";
        // line 261
        echo "\t\t\t\t\t\t";
        // line 262
        echo "\t\t\t\t\t\t";
        // line 263
        echo "\t\t\t\t\t\t\t";
        // line 264
        echo "\t\t\t\t\t\t\t\t";
        // line 265
        echo "\t\t\t\t\t\t\t\t";
        // line 266
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 267
        echo "\t\t\t\t\t\t\t\t\t";
        // line 268
        echo "\t\t\t\t\t\t\t\t\t";
        // line 269
        echo "\t\t\t\t\t\t\t\t";
        // line 270
        echo "\t\t\t\t\t\t\t\t";
        // line 271
        echo "\t\t\t\t\t\t\t\t\t";
        // line 272
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 273
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 274
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 275
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 276
        echo "\t\t\t\t\t\t\t\t\t";
        // line 277
        echo "\t\t\t\t\t\t\t\t\t";
        // line 278
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 279
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 280
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 281
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 282
        echo "\t\t\t\t\t\t\t\t\t";
        // line 283
        echo "\t\t\t\t\t\t\t\t\t";
        // line 284
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 285
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 286
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 287
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 288
        echo "\t\t\t\t\t\t\t\t\t";
        // line 289
        echo "\t\t\t\t\t\t\t\t";
        // line 290
        echo "\t\t\t\t\t\t\t";
        // line 291
        echo "\t\t\t\t\t\t";
        // line 292
        echo "\t\t\t\t\t";
        // line 293
        echo "\t\t\t\t\t";
        // line 294
        echo "\t\t\t\t\t\t";
        // line 295
        echo "\t\t\t\t\t\t\t";
        // line 296
        echo "\t\t\t\t\t\t";
        // line 297
        echo "\t\t\t\t\t\t";
        // line 298
        echo "\t\t\t\t\t\t\t";
        // line 299
        echo "\t\t\t\t\t\t";
        // line 300
        echo "\t\t\t\t\t\t";
        // line 301
        echo "\t\t\t\t\t\t\t";
        // line 302
        echo "\t\t\t\t\t\t";
        // line 303
        echo "\t\t\t\t\t\t";
        // line 304
        echo "\t\t\t\t\t\t\t";
        // line 305
        echo "\t\t\t\t\t\t";
        // line 306
        echo "\t\t\t\t\t\t";
        // line 307
        echo "\t\t\t\t\t\t\t";
        // line 308
        echo "\t\t\t\t\t\t";
        // line 309
        echo "\t\t\t\t\t\t";
        // line 310
        echo "\t\t\t\t\t\t\t";
        // line 311
        echo "\t\t\t\t\t\t";
        // line 312
        echo "\t\t\t\t\t\t";
        // line 313
        echo "\t\t\t\t\t\t\t";
        // line 314
        echo "\t\t\t\t\t\t";
        // line 315
        echo "\t\t\t\t\t\t";
        // line 316
        echo "\t\t\t\t\t\t\t";
        // line 317
        echo "\t\t\t\t\t\t\t\t";
        // line 318
        echo "\t\t\t\t\t\t\t\t";
        // line 319
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 320
        echo "\t\t\t\t\t\t\t\t\t";
        // line 321
        echo "\t\t\t\t\t\t\t\t\t";
        // line 322
        echo "\t\t\t\t\t\t\t\t";
        // line 323
        echo "\t\t\t\t\t\t\t\t";
        // line 324
        echo "\t\t\t\t\t\t\t\t\t";
        // line 325
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 326
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 327
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 328
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 329
        echo "\t\t\t\t\t\t\t\t\t";
        // line 330
        echo "\t\t\t\t\t\t\t\t\t";
        // line 331
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 332
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 333
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 334
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 335
        echo "\t\t\t\t\t\t\t\t\t";
        // line 336
        echo "\t\t\t\t\t\t\t\t\t";
        // line 337
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 338
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 339
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 340
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 341
        echo "\t\t\t\t\t\t\t\t\t";
        // line 342
        echo "\t\t\t\t\t\t\t\t";
        // line 343
        echo "\t\t\t\t\t\t\t";
        // line 344
        echo "\t\t\t\t\t\t";
        // line 345
        echo "\t\t\t\t\t";
        // line 346
        echo "\t\t\t\t\t";
        // line 347
        echo "\t\t\t\t\t\t";
        // line 348
        echo "\t\t\t\t\t\t\t";
        // line 349
        echo "\t\t\t\t\t\t";
        // line 350
        echo "\t\t\t\t\t\t";
        // line 351
        echo "\t\t\t\t\t\t\t";
        // line 352
        echo "\t\t\t\t\t\t";
        // line 353
        echo "\t\t\t\t\t\t";
        // line 354
        echo "\t\t\t\t\t\t\t";
        // line 355
        echo "\t\t\t\t\t\t";
        // line 356
        echo "\t\t\t\t\t\t";
        // line 357
        echo "\t\t\t\t\t\t\t";
        // line 358
        echo "\t\t\t\t\t\t";
        // line 359
        echo "\t\t\t\t\t\t";
        // line 360
        echo "\t\t\t\t\t\t\t";
        // line 361
        echo "\t\t\t\t\t\t";
        // line 362
        echo "\t\t\t\t\t\t";
        // line 363
        echo "\t\t\t\t\t\t\t";
        // line 364
        echo "\t\t\t\t\t\t";
        // line 365
        echo "\t\t\t\t\t\t";
        // line 366
        echo "\t\t\t\t\t\t\t";
        // line 367
        echo "\t\t\t\t\t\t";
        // line 368
        echo "\t\t\t\t\t\t";
        // line 369
        echo "\t\t\t\t\t\t\t";
        // line 370
        echo "\t\t\t\t\t\t\t\t";
        // line 371
        echo "\t\t\t\t\t\t\t\t";
        // line 372
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 373
        echo "\t\t\t\t\t\t\t\t\t";
        // line 374
        echo "\t\t\t\t\t\t\t\t\t";
        // line 375
        echo "\t\t\t\t\t\t\t\t";
        // line 376
        echo "\t\t\t\t\t\t\t\t";
        // line 377
        echo "\t\t\t\t\t\t\t\t\t";
        // line 378
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 379
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 380
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 381
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 382
        echo "\t\t\t\t\t\t\t\t\t";
        // line 383
        echo "\t\t\t\t\t\t\t\t\t";
        // line 384
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 385
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 386
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 387
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 388
        echo "\t\t\t\t\t\t\t\t\t";
        // line 389
        echo "\t\t\t\t\t\t\t\t\t";
        // line 390
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 391
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 392
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 393
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 394
        echo "\t\t\t\t\t\t\t\t\t";
        // line 395
        echo "\t\t\t\t\t\t\t\t";
        // line 396
        echo "\t\t\t\t\t\t\t";
        // line 397
        echo "\t\t\t\t\t\t";
        // line 398
        echo "\t\t\t\t\t";
        // line 399
        echo "\t\t\t\t";
        // line 400
        echo "\t\t\t";
        // line 401
        echo "\t\t";
        // line 402
        echo "\t";
        // line 403
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "coursemenu_lat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 403,  776 => 402,  774 => 401,  772 => 400,  770 => 399,  768 => 398,  766 => 397,  764 => 396,  762 => 395,  760 => 394,  758 => 393,  756 => 392,  754 => 391,  752 => 390,  750 => 389,  748 => 388,  746 => 387,  744 => 386,  742 => 385,  740 => 384,  738 => 383,  736 => 382,  734 => 381,  732 => 380,  730 => 379,  728 => 378,  726 => 377,  724 => 376,  722 => 375,  720 => 374,  718 => 373,  716 => 372,  714 => 371,  712 => 370,  710 => 369,  708 => 368,  706 => 367,  704 => 366,  702 => 365,  700 => 364,  698 => 363,  696 => 362,  694 => 361,  692 => 360,  690 => 359,  688 => 358,  686 => 357,  684 => 356,  682 => 355,  680 => 354,  678 => 353,  676 => 352,  674 => 351,  672 => 350,  670 => 349,  668 => 348,  666 => 347,  664 => 346,  662 => 345,  660 => 344,  658 => 343,  656 => 342,  654 => 341,  652 => 340,  650 => 339,  648 => 338,  646 => 337,  644 => 336,  642 => 335,  640 => 334,  638 => 333,  636 => 332,  634 => 331,  632 => 330,  630 => 329,  628 => 328,  626 => 327,  624 => 326,  622 => 325,  620 => 324,  618 => 323,  616 => 322,  614 => 321,  612 => 320,  610 => 319,  608 => 318,  606 => 317,  604 => 316,  602 => 315,  600 => 314,  598 => 313,  596 => 312,  594 => 311,  592 => 310,  590 => 309,  588 => 308,  586 => 307,  584 => 306,  582 => 305,  580 => 304,  578 => 303,  576 => 302,  574 => 301,  572 => 300,  570 => 299,  568 => 298,  566 => 297,  564 => 296,  562 => 295,  560 => 294,  558 => 293,  556 => 292,  554 => 291,  552 => 290,  550 => 289,  548 => 288,  546 => 287,  544 => 286,  542 => 285,  540 => 284,  538 => 283,  536 => 282,  534 => 281,  532 => 280,  530 => 279,  528 => 278,  526 => 277,  524 => 276,  522 => 275,  520 => 274,  518 => 273,  516 => 272,  514 => 271,  512 => 270,  510 => 269,  508 => 268,  506 => 267,  504 => 266,  502 => 265,  500 => 264,  498 => 263,  496 => 262,  494 => 261,  492 => 260,  490 => 259,  488 => 258,  486 => 257,  484 => 256,  482 => 255,  480 => 254,  478 => 253,  476 => 252,  474 => 251,  472 => 250,  470 => 249,  468 => 248,  466 => 247,  464 => 246,  462 => 245,  460 => 244,  458 => 243,  456 => 242,  454 => 241,  452 => 240,  450 => 239,  448 => 238,  446 => 237,  444 => 236,  442 => 235,  440 => 234,  438 => 233,  436 => 232,  434 => 231,  432 => 230,  430 => 229,  428 => 228,  426 => 227,  424 => 226,  422 => 225,  420 => 224,  418 => 223,  416 => 222,  414 => 221,  412 => 220,  410 => 219,  408 => 218,  406 => 217,  404 => 216,  402 => 215,  400 => 214,  398 => 213,  396 => 212,  394 => 211,  392 => 210,  390 => 209,  388 => 208,  386 => 207,  384 => 206,  382 => 205,  380 => 204,  378 => 203,  376 => 202,  374 => 201,  372 => 200,  370 => 199,  368 => 198,  366 => 197,  364 => 196,  362 => 195,  360 => 194,  349 => 185,  341 => 179,  334 => 156,  328 => 153,  323 => 151,  316 => 147,  310 => 144,  305 => 142,  298 => 138,  292 => 135,  287 => 133,  284 => 132,  277 => 127,  271 => 124,  266 => 122,  263 => 121,  260 => 120,  257 => 119,  250 => 115,  244 => 112,  236 => 107,  230 => 104,  225 => 101,  222 => 100,  220 => 99,  212 => 94,  202 => 86,  200 => 85,  198 => 84,  189 => 76,  183 => 75,  180 => 74,  165 => 72,  160 => 71,  157 => 70,  153 => 69,  143 => 61,  133 => 57,  124 => 55,  121 => 54,  117 => 53,  105 => 46,  87 => 31,  83 => 30,  75 => 29,  69 => 26,  62 => 22,  54 => 16,  47 => 14,  44 => 13,  41 => 12,  38 => 11,  34 => 10,  31 => 9,  29 => 8,  27 => 7,  25 => 6,  22 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coursemenu_lat.html.twig", "/var/www/html/templates/standard/layout/coursemenu_lat.html.twig");
    }
}
