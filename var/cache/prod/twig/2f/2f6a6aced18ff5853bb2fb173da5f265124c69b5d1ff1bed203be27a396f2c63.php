<?php

/* MMCoreBundle::layout.html.twig */
class __TwigTemplate_b89be93d9e71461cd420a88638486f9c9461c8bf3f6f5529224618a9ea62c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div id=\"wrapper\">
    <header id=\"header\">
            <h1><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_home");
        echo "\">Youtube Channel Reviews</a></h1>
            <nav class=\"links\">
              <ul>
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_core_about");
        echo "\">A propos</a></li>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_core_contact");
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_list_art");
        echo "\">Liste des articles</a></li>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_list_cat");
        echo "\">Liste par catégorie</a></li>
              </ul>
            </nav>
            <nav class=\"main\">
              <ul>
                <li class=\"search\">
                  <a class=\"fa-search\" href=\"#search\">Search</a>
                  <form id=\"search\" method=\"get\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Search\" />
                  </form>
                </li>
                <li class=\"menu\">
                  <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                </li>
              </ul>
            </nav>
          </header>

          <!-- Menu -->
          <section id=\"menu\">

            <!-- Search -->
              <section>
                <!--<form class=\"search\" method=\"get\" action=\"#\">
                  <input type=\"text\" name=\"query\" placeholder=\"Search\" />
                </form>-->
                ";
        // line 52
        echo $this->env->getExtension('Liip\SearchBundle\Twig\SearchboxExtension')->renderSearchBox("", "", "search");
        echo "
              </section>

            <!-- Links -->
              <section>
                <ul class=\"links\">
                  <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_home");
        echo "\">Accueil</a></li>
                  <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_core_about");
        echo "\">A propos</a></li>
                  <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_core_contact");
        echo "\">Contact</a></li>
                  ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 62
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_add");
            echo "\">Ajouter un article</a></li>
                  <li><a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_add_cat");
            echo "\">Ajouter une catégorie</a></li>
                  ";
        }
        // line 65
        echo "                </ul>
              </section>

            <!-- Actions -->
              <section>
                <ul class=\"actions vertical\">
                  <li>";
        // line 71
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 72
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
                    <br>
                    <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"button big fit\">Déconnexion</a>
                    ";
        } else {
            // line 76
            echo "                      <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"button big fit\">Connexion</a>
                      <br >
                      <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"button big fit\">S'enregistrer</a>
                    ";
        }
        // line 79
        echo "</li>
                </ul>
              </section>

          </section>

      <div id=\"main\">
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "      </div>

      ";
        // line 90
        $this->displayBlock('sidebar', $context, $blocks);
        // line 92
        echo "
  </div>

  ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Youtube Channel Reviews";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/main.css\" />
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        ";
    }

    // line 90
    public function block_sidebar($context, array $blocks = array())
    {
        // line 91
        echo "      ";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.min.js\"></script>
      <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/skel.min.js\"></script>
      <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/util.js\"></script>
      <!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
      <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/main.js\"></script>
      <!--<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/angular.min.js\"></script>-->
      <!--<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/like.js\"></script>-->
  ";
    }

    public function getTemplateName()
    {
        return "MMCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 102,  242 => 101,  238 => 100,  233 => 98,  229 => 97,  224 => 96,  221 => 95,  217 => 91,  214 => 90,  210 => 87,  207 => 86,  198 => 11,  195 => 10,  189 => 6,  182 => 104,  180 => 95,  175 => 92,  173 => 90,  169 => 88,  167 => 86,  158 => 79,  153 => 78,  147 => 76,  142 => 74,  136 => 72,  134 => 71,  126 => 65,  121 => 63,  116 => 62,  114 => 61,  110 => 60,  106 => 59,  102 => 58,  93 => 52,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  46 => 20,  39 => 15,  37 => 10,  30 => 6,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMCoreBundle::layout.html.twig", "/home/ycrpingf/public_html/src/MM/CoreBundle/Resources/views/layout.html.twig");
    }
}
