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

/* item.html.twig */
class __TwigTemplate_dfbf06b63c7b6f52aae3ec56db8f7242809f60ae91195383b99f5b0bd836c2ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))], "method");
        // line 3
        $context["pageCollection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "children", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<section class=\"container post\">
    <article>
        <header class=\"page-header\">
            <div class=\"page-title\">
                <h1 class=\"title\">";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            </div>
            <div class=\"page-meta\">
                <span class=\"posted-on\">
                    <i class=\"far fa-calendar\"></i>
                    <time datetime='";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "'>
                        ";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
        echo "
                    </time>
                </span>
            </div>
        </header>

        <div class=\"page-content\">
            ";
        // line 23
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        </div>

        <br/>
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
            // line 28
            echo "            <div class=\"categories\">
                <i class=\"fas fa-folder\"></i>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "                   <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "blog", []), "route", []);
                echo "/category:";
                echo $context["category"];
                echo "\">";
                echo $context["category"];
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ",";
                }
                // line 32
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </div>
        ";
        }
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "post", []), "navigation", [])) {
            // line 38
            echo "            <footer class=\"page-footer\">
                <div>
                    ";
            // line 40
            if ( !$this->getAttribute(($context["pageCollection"] ?? null), "isLast", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                // line 41
                echo "                        <div class=\"float-left\">
                            <i class=\"far fa-hand-point-left\"></i> <a href=\"";
                // line 42
                echo $this->getAttribute($this->getAttribute(($context["pageCollection"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
                echo "\">Previous Article</a>
                        </div>
                    ";
            }
            // line 45
            echo "                    ";
            if ( !$this->getAttribute(($context["pageCollection"] ?? null), "isFirst", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                // line 46
                echo "                        <div class=\"float-right\">
                            <a href=\"";
                // line 47
                echo $this->getAttribute($this->getAttribute(($context["pageCollection"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
                echo "\">Next Article</a> <i class=\"far fa-hand-point-right\"></i>
                        </div>
                    ";
            }
            // line 50
            echo "                </div>
            </footer>
        ";
        }
        // line 53
        echo "
    </article>
</section>

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  167 => 50,  161 => 47,  158 => 46,  155 => 45,  149 => 42,  146 => 41,  144 => 40,  140 => 38,  137 => 37,  134 => 35,  130 => 33,  116 => 32,  105 => 31,  88 => 30,  84 => 28,  82 => 27,  75 => 23,  65 => 16,  61 => 15,  53 => 10,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set pageCollection = page.parent.children() %}

{% block body %}
<section class=\"container post\">
    <article>
        <header class=\"page-header\">
            <div class=\"page-title\">
                <h1 class=\"title\">{{ page.title }}</h1>
            </div>
            <div class=\"page-meta\">
                <span class=\"posted-on\">
                    <i class=\"far fa-calendar\"></i>
                    <time datetime='{{ page.date|date(\"c\") }}'>
                        {{ page.date|date(system.pages.dateformat.short) }}
                    </time>
                </span>
            </div>
        </header>

        <div class=\"page-content\">
            {{ page.content }}
        </div>

        <br/>
        {% if page.taxonomy.category %}
            <div class=\"categories\">
                <i class=\"fas fa-folder\"></i>
                {% for category in page.taxonomy.category %}
                   <a href=\"{{ site.blog.route }}/category:{{ category }}\">{{ category }}</a>{% if not loop.last %},{% endif %}
                {% endfor %}
            </div>
        {% endif %}

        {# Show navigation if enabled, defaults to true #}
        {% if theme_config.post.navigation %}
            <footer class=\"page-footer\">
                <div>
                    {% if not pageCollection.isLast(page.path) %}
                        <div class=\"float-left\">
                            <i class=\"far fa-hand-point-left\"></i> <a href=\"{{ pageCollection.prevSibling(page.path).url }}\">Previous Article</a>
                        </div>
                    {% endif %}
                    {% if not pageCollection.isFirst(page.path) %}
                        <div class=\"float-right\">
                            <a href=\"{{ pageCollection.nextSibling(page.path).url }}\">Next Article</a> <i class=\"far fa-hand-point-right\"></i>
                        </div>
                    {% endif %}
                </div>
            </footer>
        {% endif %}

    </article>
</section>

{% endblock %}", "item.html.twig", "/var/www/html/grav-admin/user/themes/grav-coder/templates/item.html.twig");
    }
}
