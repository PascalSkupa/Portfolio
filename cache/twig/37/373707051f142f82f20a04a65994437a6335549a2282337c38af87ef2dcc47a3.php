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
class __TwigTemplate_7098fd9adb8e1e79ff0cdab92217e86fdf2434b0bc49d10a1b50796872974381 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if ($this->getAttribute(($context["uri"] ?? null), "param", [0 => "category"], "method")) {
            // line 4
            $context["page_title"] = ("Category: " . $this->getAttribute(($context["uri"] ?? null), "param", [0 => "category"], "method"));
        } else {
            // line 6
            $context["page_title"] = "Posts";
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        echo ($context["page_title"] ?? null);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "
";
        // line 14
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => "@self.children", "pagination" => true, "order" => ["by" => "date", "dir" => "desc"], "limit" => $this->getAttribute($this->getAttribute(        // line 18
($context["theme_config"] ?? null), "pagination", []), "count", [])]], "method");
        // line 20
        $context["itemsInCollection"] = twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "items", [])]], "method"));
        // line 21
        $context["currentPage"] = (($this->getAttribute(($context["uri"] ?? null), "param", [0 => "page"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uri"] ?? null), "param", [0 => "page"], "method"), "1")) : ("1"));
        // line 22
        $context["itemsPerPage"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "limit", []);
        // line 23
        $context["pagesInCollection"] = twig_round((($context["itemsInCollection"] ?? null) / ($context["itemsPerPage"] ?? null)), 0, "ceil");
        // line 24
        echo "
\t<section class=\"container list\">

\t\t";
        // line 28
        echo "\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Projects</h1>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 35
        echo "\t\t<div class=\"page-content\">
\t\t\t";
        // line 36
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
            // line 37
            echo "\t\t\t    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 37)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 38
            echo "\t\t\t";
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
        echo "      
\t\t</div>

\t\t";
        // line 42
        echo "\t\t";
        if ((($context["itemsInCollection"] ?? null) > ($context["itemsPerPage"] ?? null))) {
            // line 43
            echo "\t\t\t<div>
\t\t\t\t";
            // line 44
            if ((($context["currentPage"] ?? null) != "1")) {
                // line 45
                echo "\t\t\t\t\t<div class=\"float-left\">
\t\t\t\t\t\t<i class=\"far fa-hand-point-left\"></i> <a href=\"";
                // line 46
                echo ((($this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method") . "/page") . $this->getAttribute(($context["system"] ?? null), "param_sep", [])) . (($context["currentPage"] ?? null) - 1));
                echo "\">Newer</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
            if (((($context["currentPage"] ?? null) + 1) <= ($context["pagesInCollection"] ?? null))) {
                // line 50
                echo "\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"";
                // line 51
                echo ((($this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method") . "/page") . $this->getAttribute(($context["system"] ?? null), "param_sep", [])) . (($context["currentPage"] ?? null) + 1));
                echo "\">Older</a> 
\t\t\t\t\t\t<i class=\"far fa-hand-point-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t</div>
\t\t";
        }
        // line 57
        echo "
\t</section>

";
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
        return array (  162 => 57,  158 => 55,  151 => 51,  148 => 50,  145 => 49,  139 => 46,  136 => 45,  134 => 44,  131 => 43,  128 => 42,  110 => 38,  107 => 37,  90 => 36,  87 => 35,  79 => 28,  74 => 24,  72 => 23,  70 => 22,  68 => 21,  66 => 20,  64 => 18,  63 => 14,  60 => 12,  57 => 11,  49 => 9,  44 => 1,  41 => 6,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% if uri.param('category') %}
\t{% set page_title = \"Category: \" ~ uri.param('category') %}
{% else %}
\t{% set page_title = \"Posts\" %}
{% endif %}

{% block title %}{{ page_title }} | {{ parent()  }}{% endblock %}

{% block body %}

{# Variables for pagination #}
{% set collection = page.collection({
    'items': '@self.children', 
    'pagination': true, 
    'order': {'by': 'date', 'dir': 'desc'}, 
    'limit': theme_config.pagination.count})
%}
{% set itemsInCollection = page.collection({'items': collection.params.items})|length %}
{% set currentPage = uri.param('page')|default('1') %}
{% set itemsPerPage = collection.params.limit %}
{% set pagesInCollection = (itemsInCollection / itemsPerPage)|round(0, 'ceil') %}

\t<section class=\"container list\">

\t\t{# Header #}
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Projects</h1>
\t\t\t</div>
\t\t</div>

\t\t{# Listing #}
\t\t<div class=\"page-content\">
\t\t\t{% for child in collection %}
\t\t\t    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
\t\t\t{% endfor %}      
\t\t</div>

\t\t{# Pagination #}
\t\t{% if itemsInCollection > itemsPerPage %}
\t\t\t<div>
\t\t\t\t{% if currentPage != '1' %}
\t\t\t\t\t<div class=\"float-left\">
\t\t\t\t\t\t<i class=\"far fa-hand-point-left\"></i> <a href=\"{{ page.url(true) ~ '/page' ~ system.param_sep ~ (currentPage - 1) }}\">Newer</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if (currentPage + 1) <= pagesInCollection %}
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"{{ page.url(true) ~ '/page' ~ system.param_sep ~ (currentPage + 1) }}\">Older</a> 
\t\t\t\t\t\t<i class=\"far fa-hand-point-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}

\t</section>

{% endblock %}", "blog.html.twig", "/var/www/html/grav-admin/user/themes/grav-coder/templates/blog.html.twig");
    }
}
