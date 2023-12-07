<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/pagination.html.twig */
class __TwigTemplate_f643830dcd3de23bde01950d55c429d4b9f6cf839ddd10f255fc5ee1bd391b78 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/pagination.html.twig"));

        // line 1
        $context["pagination"] = ((array_key_exists("pagination", $context)) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", [])));
        // line 2
        $context["base_url"] = ((array_key_exists("base_url", $context)) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "    <ul class=\"pagination\">
        ";
            // line 6
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 7
                echo "            ";
                $context["url"] = (($context["base_url"] ?? null) . twig_replace_filter(($this->getAttribute(($context["pagination"] ?? null), "params", []) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]));
                // line 8
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
            } else {
                // line 15
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </li>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 22
                echo "            ";
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 23
                    echo "                <li class=\"page-item active\">
                    <span class=\"page-link\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</span>
                    <span class=\"sr-only\">(current)</span>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 27
$context["paginate"], "isInDelta", [])) {
                    // line 28
                    echo "                ";
                    $context["url"] = (($context["base_url"] ?? null) . twig_replace_filter(($this->getAttribute(($context["pagination"] ?? null), "params", []) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]));
                    // line 29
                    echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 34
$context["paginate"], "isDeltaBorder", [])) {
                    // line 35
                    echo "                <li class=\"page-item gap\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            ";
                }
                // line 39
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
        ";
            // line 41
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 42
                echo "            ";
                $context["url"] = (($context["base_url"] ?? null) . twig_replace_filter(($this->getAttribute(($context["pagination"] ?? null), "params", []) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]));
                // line 43
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"next\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
            } else {
                // line 50
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </li>
        ";
            }
            // line 55
            echo "    </ul>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 55,  140 => 50,  131 => 44,  128 => 43,  125 => 42,  123 => 41,  120 => 40,  114 => 39,  108 => 35,  106 => 34,  100 => 31,  96 => 30,  93 => 29,  90 => 28,  88 => 27,  82 => 24,  79 => 23,  76 => 22,  72 => 21,  69 => 20,  62 => 15,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}
    <ul class=\"pagination\">
        {% if pagination.hasPrev %}
            {% set url = base_url ~ (pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"prev\" href=\"{{ url }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </li>
        {% endif %}

        {% for paginate in pagination %}
            {% if paginate.isCurrent %}
                <li class=\"page-item active\">
                    <span class=\"page-link\">{{ paginate.number }}</span>
                    <span class=\"sr-only\">(current)</span>
                </li>
            {% elseif paginate.isInDelta %}
                {% set url = base_url ~ (pagination.params ~ paginate.url)|replace({'//':'/'}) %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ url }}\">
                        {{ paginate.number }}
                    </a>
                </li>
            {% elseif paginate.isDeltaBorder %}
                <li class=\"page-item gap\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            {% endif %}
        {% endfor %}

        {% if pagination.hasNext %}
            {% set url = base_url ~ (pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"next\" href=\"{{ url }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "partials/pagination.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/partials/pagination.html.twig");
    }
}
