<?php

/* LiipSearchBundle:Search:search_box.html.twig */
class __TwigTemplate_abd9d136c8dcffa663bf85e1d474d9a20a47baeca6e1dcb2d7cb14a3c9cbf0ec extends Twig_Template
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
        // line 1
        echo "<form class=\"";
        echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) ? $context["search_url"] : null), "html", null, true);
        echo "\">
    <label for=\"";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("field_id", $context)) ? (_twig_default_filter((isset($context["field_id"]) ? $context["field_id"] : null), "query")) : ("query")), "html", null, true);
        echo "\" class=\"search-label\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("search_site", array(), "LiipSearchBundle");
        echo "</label>
    <input type=\"text\" class=\"search-input\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("field_id", $context)) ? (_twig_default_filter((isset($context["field_id"]) ? $context["field_id"] : null), "query")) : ("query")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["query_param_name"]) ? $context["query_param_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("query", $context)) ? (_twig_default_filter((isset($context["query"]) ? $context["query"] : null), "")) : ("")), "html", null, true);
        echo "\" />
    <input type=\"submit\" class=\"button search-button\" value=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send", array(), "LiipSearchBundle");
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "LiipSearchBundle:Search:search_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  32 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LiipSearchBundle:Search:search_box.html.twig", "/home/ycrpingf/public_html/vendor/liip/search-bundle/Resources/views/Search/search_box.html.twig");
    }
}
