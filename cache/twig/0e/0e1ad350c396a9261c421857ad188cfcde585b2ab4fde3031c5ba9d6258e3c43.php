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

/* partials/blog_item.html.twig */
class __TwigTemplate_e13d1c1e28cb2318810771476639aa1f5070c84f8e12ab5a094e89db83dd6c30 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blog_item.html.twig"));

        // line 1
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 7
        echo "
    <div class=\"list-blog-header\">

<div class=\"main-meeting-title\">
              <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h3>
               </div>
<div class=\"main-meeting-speaker\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "eventspeaker", []), "html", null, true);
        echo "</div>

<div class=\"main-meeting-date\">
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "eventdate", []), "j F, Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "eventstart", []), "g:ia"), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "eventend", []), "g:ia"), "html", null, true);
        echo "
</div>
        ";
        // line 18
        if (($context["big_header"] ?? null)) {
            // line 19
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 900, 1 => 600], "method"), "html", [0 => "", 1 => "blog-header-image"], "method");
            echo "
        ";
        } else {
            // line 21
            echo "            ";
            if (($context["header_image"] ?? null)) {
                // line 22
                echo "                ";
                if (($context["header_image_file"] ?? null)) {
                    // line 23
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                    // line 24
                    echo "                ";
                } else {
                    // line 25
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                    // line 26
                    echo "                ";
                }
                // line 27
                echo "                ";
                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
                echo "
            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "    </div>

    <div class=\"list-blog-padding\">

        ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 35
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
            // line 36
            if ( !($context["truncate"] ?? null)) {
                // line 37
                echo "                ";
                $context["show_prev_next"] = true;
                // line 38
                echo "            ";
            }
            // line 39
            echo "        ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 40
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
            <p><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">Continue Reading...</a></p>
        ";
        } elseif (        // line 42
($context["truncate"] ?? null)) {
            // line 43
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 44
                echo "                <p>";
                echo twig_escape_filter($this->env, Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550), "html", null, true);
                echo "</p>
            ";
            } else {
                // line 46
                echo "                <p>";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</p>
            ";
            }
            // line 48
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">Continue Reading...</a></p>
        ";
        } else {
            // line 50
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
            // line 51
            $context["show_prev_next"] = true;
            // line 52
            echo "        ";
        }
        // line 53
        echo "
        ";
        // line 54
        if (($context["show_prev_next"] ?? null)) {
            // line 55
            echo "            <p class=\"text-center mt-4\">
                ";
            // line 56
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 57
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Meeting</a>
                ";
            }
            // line 59
            echo "
                ";
            // line 60
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 61
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\">Previous Meeting <i class=\"fa fa-chevron-right\"></i></a>
                ";
            }
            // line 63
            echo "            </p>
        ";
        }
        // line 65
        echo "
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 65,  202 => 63,  196 => 61,  194 => 60,  191 => 59,  185 => 57,  183 => 56,  180 => 55,  178 => 54,  175 => 53,  172 => 52,  170 => 51,  165 => 50,  159 => 48,  153 => 46,  147 => 44,  144 => 43,  142 => 42,  138 => 41,  133 => 40,  130 => 39,  127 => 38,  124 => 37,  122 => 36,  117 => 35,  115 => 34,  109 => 30,  106 => 29,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  76 => 19,  74 => 18,  65 => 16,  59 => 13,  54 => 11,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

<div class=\"main-meeting-title\">
              <h3>{{ page.title }}</h3>
               </div>
<div class=\"main-meeting-speaker\">{{ page.header.eventspeaker }}</div>

<div class=\"main-meeting-date\">
    {{ page.header.eventdate|date(\"j F, Y\") }} - {{ page.header.eventstart|date(\"g:ia\") }} to {{ page.header.eventend|date(\"g:ia\") }}
</div>
        {% if big_header %}
            {{ page.media.images|first.cropResize(900,600).html('','blog-header-image')|raw }}
        {% else %}
            {% if header_image %}
                {% if header_image_file %}
                    {% set header_image_media = page.media.images[header_image_file] %}
                {% else %}
                    {% set header_image_media = page.media.images|first %}
                {% endif %}
                {{ header_image_media.cropZoom(header_image_width, header_image_height).html|raw }}
            {% endif %}
        {% endif %}
    </div>

    <div class=\"list-blog-padding\">

        {% if page.header.continue_link is same as(false) %}
            <p>{{ page.content|raw }}</p>
            {% if not truncate %}
                {% set show_prev_next = true %}
            {% endif %}
        {% elseif truncate and page.summary != page.content %}
            <p>{{ page.summary|raw }}</p>
            <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
        {% elseif truncate %}
            {% if page.summary != page.content %}
                <p>{{ page.content|truncate(550) }}</p>
            {% else %}
                <p>{{ page.content|raw }}</p>
            {% endif %}
            <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
        {% else %}
            <p>{{ page.content|raw }}</p>
            {% set show_prev_next = true %}
        {% endif %}

        {% if show_prev_next %}
            <p class=\"text-center mt-4\">
                {% if not page.isFirst %}
                    <a class=\"btn btn-primary\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Meeting</a>
                {% endif %}

                {% if not page.isLast %}
                    <a class=\"btn btn-primary\" href=\"{{ page.prevSibling.url }}\">Previous Meeting <i class=\"fa fa-chevron-right\"></i></a>
                {% endif %}
            </p>
        {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/partials/blog_item.html.twig");
    }
}
