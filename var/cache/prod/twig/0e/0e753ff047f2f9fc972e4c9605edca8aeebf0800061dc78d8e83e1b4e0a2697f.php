<?php

/* MMCoreBundle:Core:contact.html.twig */
class __TwigTemplate_056c55fd2597aff26fc860d4d230ad77bee912030580130e6b2d4b811bceec8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMCoreBundle::layout.html.twig", "MMCoreBundle:Core:contact.html.twig", 1);
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
        echo "  About - ";
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
        // line 9
        echo twig_include($this->env, $context, "MMCoreBundle:Core:form.html.twig");
        echo "

";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
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
        // line 30
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
        return "MMCoreBundle:Core:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  56 => 14,  53 => 13,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMCoreBundle:Core:contact.html.twig", "/home/ycrpingf/public_html/src/MM/CoreBundle/Resources/views/Core/contact.html.twig");
    }
}
