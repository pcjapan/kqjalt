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
        echo "
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
";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 12
            echo "    <h5>Related Posts</h5>
    ";
            // line 13
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 13)->display($context);
        }
        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 17
            echo "    <div class=\"sidebar-content\">
        <h5>Random Article</h5>
        <a class=\"btn\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
";
        }
        // line 22
        echo "
<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 29
            echo "    <div class=\"sidebar-content\">
        <h5>Popular Tags</h5>
        ";
            // line 31
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 31)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 32
            echo "    </div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 36
            echo "    <div class=\"sidebar-content\">
        <h5>Archives</h5>
        ";
            // line 38
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 38)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 39
            echo "    </div>
";
        }
        // line 41
        echo "
";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 43
            echo "    <div class=\"sidebar-content\">
        <h5>Syndicate</h5>
        <div class=\"btn-group\">
            <a class=\"btn btn-warning\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"btn btn-warning\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
";
        }
        
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
        return array (  127 => 47,  123 => 46,  118 => 43,  116 => 42,  113 => 41,  109 => 39,  107 => 38,  103 => 36,  101 => 35,  98 => 34,  94 => 32,  92 => 31,  88 => 29,  86 => 28,  78 => 22,  72 => 19,  68 => 17,  66 => 16,  63 => 15,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
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

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        <h5>Search</h5>
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h5>Related Posts</h5>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}

{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h5>Random Article</h5>
        <a class=\"btn\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
{% endif %}

<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h5>Popular Tags</h5>
        {% include 'partials/taxonomylist.html.twig' with {'base_url': new_base_url, 'taxonomy': 'tag'} %}
    </div>
{% endif %}

{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h5>Archives</h5>
        {% include 'partials/archives.html.twig' with {'base_url': new_base_url} %}
    </div>
{% endif %}

{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content\">
        <h5>Syndicate</h5>
        <div class=\"btn-group\">
            <a class=\"btn btn-warning\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"btn btn-warning\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/partials/sidebar.html.twig");
    }
}
