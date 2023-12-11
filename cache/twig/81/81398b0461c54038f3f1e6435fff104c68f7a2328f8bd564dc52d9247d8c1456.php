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

/* partials/sidebar.html.twig */
class __TwigTemplate_9f9e28da414de81d58195878c8c239a59a19ab536ecc3c118c6b6d68e686433d extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "<div class = \"region region-sidebar-second well\">
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "    <div class=\"sidebar-content\">
        <h5>Search</h5>
        ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
<div class=\"sidebar-content\">
    <h3>Recent News</h3>
<ul>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["content" => "news"], 1 => "or"], "method"), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 2], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []));
            echo "</a><br />
    ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), ($context["g"] ?? null)), "html", null, true);
            echo "
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
<h3>Social Media Links</h3>
<ul>
<li><a href=\"https://www.facebook.com/groups/kqjalt/\">KQJALT on Facebook</a></li>
</ul>
<h3>JALT National</h3>
<div class=\"text-center\"><a href=\"http://jalt.org/\"><img src =\"../images/JALTlogoColor.gif\" alt=\"JALT\" width=\"150\" height=\"52\" /></a>
<p><a href=\"https://jalt.org/\">The Japan Asociation for Languge Teaching</a></p>
</div>
</div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  69 => 16,  62 => 15,  58 => 14,  52 => 10,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative ~ '/' ~ blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}
<div class = \"region region-sidebar-second well\">
{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        <h5>Search</h5>
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}

<div class=\"sidebar-content\">
    <h3>Recent News</h3>
<ul>
{% for post in taxonomy.findTaxonomy({'content':'news'}, \"or\").order('date', 'desc').slice(0, 2)  %}
    <li><a href=\"{{ post.url }}\">{{ post.title|e }}</a><br />
    {{ post.date|date(g) }}
    </li>
{% endfor %}
</ul>
<h3>Social Media Links</h3>
<ul>
<li><a href=\"https://www.facebook.com/groups/kqjalt/\">KQJALT on Facebook</a></li>
</ul>
<h3>JALT National</h3>
<div class=\"text-center\"><a href=\"http://jalt.org/\"><img src =\"../images/JALTlogoColor.gif\" alt=\"JALT\" width=\"150\" height=\"52\" /></a>
<p><a href=\"https://jalt.org/\">The Japan Asociation for Languge Teaching</a></p>
</div>
</div>
</div>
", "partials/sidebar.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/partials/sidebar.html.twig");
    }
}
