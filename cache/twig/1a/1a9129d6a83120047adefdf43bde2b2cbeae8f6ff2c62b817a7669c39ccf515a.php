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

/* blog.html.twig */
class __TwigTemplate_76695cf142596d471ec6d412b34a764a28a7196a385d3de0dedbd2925ac8664c extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "504097857")->display($context);
        // line 44
        echo "

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 44,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

    {% block content %}
        {% include 'partials/hero.html.twig' %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% for child in collection %}
                            {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                        {% endfor %}

                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_76695cf142596d471ec6d412b34a764a28a7196a385d3de0dedbd2925ac8664c___504097857 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 14
            echo "                            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 14)->display($context);
            // line 15
            echo "                        ";
        }
        // line 16
        echo "
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 18
            echo "                            ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 18)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true]));
            // line 19
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        ";
        // line 24
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 24)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_pagination($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        // line 32
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 33
            echo "            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        ";
            // line 36
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 36)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 37
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 41
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 41,  250 => 37,  248 => 36,  243 => 33,  240 => 32,  234 => 31,  223 => 25,  221 => 24,  215 => 20,  201 => 19,  198 => 18,  181 => 17,  178 => 16,  175 => 15,  172 => 14,  170 => 13,  162 => 7,  159 => 6,  153 => 5,  145 => 1,  143 => 3,  134 => 1,  35 => 44,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

    {% block content %}
        {% include 'partials/hero.html.twig' %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% for child in collection %}
                            {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                        {% endfor %}

                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/Applications/MAMP/htdocs/kqjalt/user/themes/bootstrap4/templates/blog.html.twig");
    }
}
