<?php

/* MMCoreBundle:Core:about.html.twig */
class __TwigTemplate_575559cc15ad77c87d706cc1d6b1c640c675cc97bc7c6510c778659aa70089c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MMCoreBundle::layout.html.twig", "MMCoreBundle:Core:about.html.twig", 3);
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  About - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>A propos</h2>

    <p>Etant un gros consomateur de vidéos Youtube, je me suis dis que ce serais une bonne idée.</p>
    <p>Ce site est maintenu et alimenté par mes soins.</p>

";
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        // line 19
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
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MMMainBundle:Article:menu", array("limit" => 3)));
        echo "
                </div>
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
        return "MMCoreBundle:Core:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  56 => 19,  53 => 18,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMCoreBundle:Core:about.html.twig", "/home/ycrpingf/public_html/src/MM/CoreBundle/Resources/views/Core/about.html.twig");
    }
}
