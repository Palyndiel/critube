<?php

/* MMMainBundle:Article:menu.html.twig */
class __TwigTemplate_f08822413089a8031f6a7ea69045cd0c13381d2a30225ae287da219f0c8ab7a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "    \t<article class=\"mini-post\">
\t\t\t<header>
\t\t\t\t<h3><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
\t\t\t      </a></h3>
\t\t\t</header>
\t\t</article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MMMainBundle:Article:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  37 => 9,  33 => 8,  29 => 6,  25 => 5,  22 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMMainBundle:Article:menu.html.twig", "/Users/palyndiel/PhpstormProjects/cri_tube/src/MM/MainBundle/Resources/views/Article/menu.html.twig");
    }
}
