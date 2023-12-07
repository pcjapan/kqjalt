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

/* @Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/01._welcome */
class __TwigTemplate_66afabc6e05762b2f21bf6fc13405cb79dab5f40888520576446c0090f96e90a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/01._welcome"));

        // line 1
        echo "
  
<div class=\"header hero  modular-row showcase \" >
    <div class=\"container\">
                    <p class=\"lead\">Welcome to the Kitakyushu chapter of <a href=\"http://jalt.org\">JALT</a> - the Japan Association for Language Teaching.</p>
<h2>Our Schedule</h2> 
<p class=\"lead\">Details of our upcoming presentations will be available on our <a href=\"/chapters/kq/schedule\">programme page</a>. Find out what you can look forward to during the year and arrange your schedule accordingly. </p>
        
        
            </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/01._welcome";
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
        return new Source("
  
<div class=\"header hero  modular-row showcase \" >
    <div class=\"container\">
                    <p class=\"lead\">Welcome to the Kitakyushu chapter of <a href=\"http://jalt.org\">JALT</a> - the Japan Association for Language Teaching.</p>
<h2>Our Schedule</h2> 
<p class=\"lead\">Details of our upcoming presentations will be available on our <a href=\"/chapters/kq/schedule\">programme page</a>. Find out what you can look forward to during the year and arrange your schedule accordingly. </p>
        
        
            </div>
</div>
", "@Page:/Applications/MAMP/htdocs/kqjalt/user/pages/01.home/01._welcome", "");
    }
}
