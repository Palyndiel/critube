<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_a227a97a499e8e6a2923076619485dc1750196ab0e4fc9e0a8e5558ee52b531a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMCoreBundle::layout.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
  ";
        // line 12
        echo "    
    <h1>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "</h1>
    <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo "</h3>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corriger l'erreur.
  </div>

    ";
    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        // line 23
        echo "
<!-- Sidebar -->
          <section id=\"sidebar\">

            <!-- Intro -->
              <section id=\"intro\">
                <!-- <a href=\"#\" class=\"logo\"><img src=\"images/logo.jpg\" alt=\"\" /></a> -->
                <header>
                  <h2>YCR</h2>
                  <p>Youtube Channel Reviews</a></p>
                </header>
              </section>

            <!-- Posts List -->
              <section>
                <div class=\"mini-posts\">
                  ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MMMainBundle:Article:menu", array("limit" => 3)));
        echo "
                </div>
              </section>

            <!-- About -->
              <section class=\"blurb\">
                <h2>A propos</h2>
                <p>Youtube Channel Reviews est un site de critique de chaines Youtube.</p>
                <ul class=\"actions\">
                  <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_core_about");
        echo "\" class=\"button\">En savoir plus</a></li>
                </ul>
              </section>

            <!-- Footer -->
              <section id=\"footer\">
                <ul class=\"icons\">
                  <li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                  <li><a href=\"#\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                  <li><a href=\"#\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                  <li><a href=\"#\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
                  <li><a href=\"#\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
                </ul>
                <p class=\"copyright\">&copy; Palyndiel Corp.</p>
              </section>

          </section>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  85 => 39,  67 => 23,  64 => 22,  53 => 14,  49 => 13,  46 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/home/ycrpingf/public_html/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
