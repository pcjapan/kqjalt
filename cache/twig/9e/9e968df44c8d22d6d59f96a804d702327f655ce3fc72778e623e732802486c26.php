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

/* @Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/02._news */
class __TwigTemplate_41b9d7fe2809c847f6facdc47b9984b135f5edb244fa9fe5f2387f22a36736aa extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/02._news"));

        // line 1
        echo "<div class=\"modular-row features \">
    <div class=\"container\">
        <h2>Other Events</h2> 
<p>Listings of our previous chapter events can be found in the <a href=\"schedule/archive\">events archive</a>.
For information on social or other special events, see below.</p>

        <div class=\"feature-items\">
            <div class=\"row\">
                                            </div>
        </div>
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/02._news";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row features \">
    <div class=\"container\">
        <h2>Other Events</h2> 
<p>Listings of our previous chapter events can be found in the <a href=\"schedule/archive\">events archive</a>.
For information on social or other special events, see below.</p>

        <div class=\"feature-items\">
            <div class=\"row\">
                                            </div>
        </div>
    </div>
</div>
", "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/02._news", "");
    }
}
