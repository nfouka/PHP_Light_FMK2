<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/home.html.twig */
class __TwigTemplate_fd2b1c308ec52ec269ddbae6dcb57f70f79b821a887ff69a1f9f53690a6ebd3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/base/base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Application With Twig Extention 2 ";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link href=\"/public/css/style.cs\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $context["i"] = 0;
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 11
            echo "
        ";
            // line 12
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 13
            echo "        <div class=\"post-preview\">
            <a href=\"post.html\">
                <h2 class=\"post-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo " , id : ";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</h2>
                <h3 class=\"post-subtitle\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "text", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
            </a>
            <p class=\"post-meta\">
                Posted by
                <a href=\"#!\" class=\"nadir\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo " </a>
                on ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "date", [], "any", false, false, false, 21), "html", null, true);
            echo "
            </p>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <tr>
            <td colspan=\"3\">You don't have this!</td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  106 => 21,  102 => 20,  95 => 16,  89 => 15,  85 => 13,  83 => 12,  80 => 11,  74 => 10,  71 => 9,  67 => 8,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/base/base.html.twig\" %}

{% block title %}Application With Twig Extention 2 {% endblock %}
{% block head %}
    {{ parent() }}
    <link href=\"/public/css/style.cs\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    {%  set i=0  %}
    {% for student in all %}

        {%  set i = i + 1  %}
        <div class=\"post-preview\">
            <a href=\"post.html\">
                <h2 class=\"post-title\">{{     student.name    }} , id : {{ i }}</h2>
                <h3 class=\"post-subtitle\">{{  student.text }}</h3>
            </a>
            <p class=\"post-meta\">
                Posted by
                <a href=\"#!\" class=\"nadir\">{{  student.name }} </a>
                on {{     student.date    }}
            </p>
        </div>
    {% else %}
        <tr>
            <td colspan=\"3\">You don't have this!</td>
        </tr>

    {% endfor %}
{% endblock %}
", "home/home.html.twig", "/var/www/html/src/Bundles/AppBundle/Templates/home/home.html.twig");
    }
}
