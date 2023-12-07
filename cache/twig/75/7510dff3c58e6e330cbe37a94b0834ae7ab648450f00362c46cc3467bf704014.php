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

/* partials/base.html.twig */
class __TwigTemplate_de70301e20d74124454f7b84789346ca4dbea6ea193838dcf6a94fa0ddccab0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "    </head>

    <body class=\"";
        // line 38
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 40
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 40)->display($context);
            // line 41
            echo "        ";
        }
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 49
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">The Kitakyushu Chapter of JALT</a></p>
            </div>
        </div>

        ";
        // line 56
        $this->displayBlock('bottom', $context, $blocks);
        // line 59
        echo "    </body>
</html>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
            ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
            <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png", true), "html", null, true);
        echo "\" />

            ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
            ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('assets', $context, $blocks);
        // line 34
        echo "
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css", 1 => 99], "method");
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css", 1 => 98], "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/custom.css", 1 => 97], "method");
        // line 17
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 21
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr-custom.js", 1 => 100], "method");
        // line 22
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 23
        echo "
                ";
        // line 24
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 25
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 26
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 27
            echo "                ";
        }
        // line 28
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 30
    public function block_assets_deferred($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "assets"));

        // line 31
        echo "                ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
                ";
        // line 32
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 38
    public function block_body_classes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_classes"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 43
    public function block_header_navigation($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navigation"));

        // line 44
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 48
    public function block_pagination($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 56
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 57
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 57,  286 => 56,  275 => 48,  264 => 47,  257 => 45,  254 => 44,  248 => 43,  236 => 38,  226 => 32,  221 => 31,  215 => 30,  203 => 28,  200 => 27,  197 => 26,  194 => 25,  192 => 24,  189 => 23,  186 => 22,  183 => 21,  180 => 20,  174 => 19,  167 => 17,  164 => 16,  161 => 15,  158 => 14,  152 => 13,  144 => 34,  142 => 30,  139 => 29,  137 => 19,  134 => 18,  132 => 13,  127 => 11,  119 => 10,  116 => 9,  114 => 8,  109 => 5,  103 => 4,  93 => 59,  91 => 56,  82 => 49,  79 => 48,  77 => 47,  74 => 46,  72 => 43,  69 => 42,  66 => 41,  63 => 40,  61 => 39,  57 => 38,  53 => 36,  51 => 4,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
            {% include 'partials/metadata.html.twig' %}

            <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

            {% block stylesheets %}
                {% do assets.add('theme://css/font-awesome.min.css', 99) %}
                {% do assets.add('theme://css-compiled/theme.css', 98) %}
                {% do assets.add('theme://css/custom.css', 97) %}
            {% endblock %}

            {% block javascripts %}
                {% do assets.add('jquery', 101) %}
                {% do assets.add('theme://js/modernizr-custom.js', 100) %}
                {% do assets.add('theme://js/site.js', {group:'bottom'}) %}

                {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                    {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                    {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
                {% endif %}
            {% endblock %}

            {% block assets deferred %}
                {{ assets.css()|raw }}
                {{ assets.js()|raw }}
            {% endblock %}

        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}

        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">The Kitakyushu Chapter of JALT</a></p>
            </div>
        </div>

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/partials/base.html.twig");
    }
    private $deferred;
}
