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

/* @Page:/var/www/html/grav-admin/user/pages/02.about */
class __TwigTemplate_80587944325120f9dec416cd486076d9d7721b4789608b811c34a58accf36b36 extends \Twig\Template
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
        // line 1
        echo "<div class=\"about\">
    <h1>About Me</h1>
    <h3>I´m not the type to tell tales about oneself but if you are interested here is some info about myself.</h3>
        <hr>
    <h2>CV</h2>
</div>
<p><span><a href=\"/grav-admin/about/Lebenslauf Pascal Skupa.pdf\">Lebenslauf Pascal Skupa.pdf</a></span></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav-admin/user/pages/02.about";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about\">
    <h1>About Me</h1>
    <h3>I´m not the type to tell tales about oneself but if you are interested here is some info about myself.</h3>
        <hr>
    <h2>CV</h2>
</div>
<p><span><a href=\"/grav-admin/about/Lebenslauf Pascal Skupa.pdf\">Lebenslauf Pascal Skupa.pdf</a></span></p>", "@Page:/var/www/html/grav-admin/user/pages/02.about", "");
    }
}
