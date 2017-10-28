<?php

/* MMMainBundle:Article:index.html.twig */
class __TwigTemplate_237201e79659ecc8e26ad8b463669442394db5a1fd556ac32b8fae4ceb70d941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MMCoreBundle::layout.html.twig", "MMMainBundle:Article:index.html.twig", 3);
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Liste des articles</h2>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "
    <article class=\"post\">
                  <header>
                    <div class=\"title\">
                      <h2><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
                      <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "resume", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"meta\">
                       <time class=\"published\" datetime=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d M Y"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d M Y"), "html", null, true);
            echo "</time>
                      <a href=\"#\" class=\"author\"><span class=\"name\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</span>
                      ";
            // line 24
            if ( !(null === $this->getAttribute($this->getAttribute($context["article"], "author", array()), "avatar", array()))) {
                // line 25
                echo "                  <img
                  src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "author", array()), "avatar", array()), "webPath", array())), "my_thumb"), "html", null, true);
                echo "\"
                  alt=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "author", array()), "avatar", array()), "alt", array()), "html", null, true);
                echo "\"
                  />
               ";
            }
            // line 29
            echo "</a> 
                    </div>
                  </header>
                  <a href=\"#\" class=\"image featured\">
                ";
            // line 33
            if ( !(null === $this->getAttribute($context["article"], "image", array()))) {
                // line 34
                echo "                  <img
                  src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
                  alt=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                  />
               ";
            }
            // line 38
            echo "</a>
                  <footer>
                    <ul class=\"actions\">
                      <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"button big\">Continue Reading</a></li>
                    </ul>
                    <ul class=\"stats\">
                        ";
            // line 44
            if ( !$this->getAttribute($this->getAttribute($context["article"], "categories", array()), "empty", array())) {
                // line 45
                echo "                      <li>
                      ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 47
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo " <em>,</em> ";
                    }
                    // line 48
                    echo "                      ";
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
                // line 49
                echo "                      </li>
                      ";
            }
            // line 51
            echo "                      ";
            // line 52
            echo "                      <li><a href=\"\" class=\"icon fa-comment\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listThreads"]) ? $context["listThreads"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "numComments", array()), "html", null, true);
            echo "</a></li>
                    </ul>
                  </footer>
                </article>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "      Pas (encore !) d'articles
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  <ul class=\"actions pagination\">
    ";
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 63
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : null))) {
                echo " class=\"disabled\"";
            }
            echo ">
        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_home", array("page" => $context["p"])), "html", null, true);
            echo "\" class=\"button big\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </ul>

";
    }

    // line 71
    public function block_sidebar($context, array $blocks = array())
    {
        // line 72
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
        // line 88
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
        // line 97
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
        return "MMMainBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 97,  269 => 88,  251 => 72,  248 => 71,  242 => 67,  231 => 64,  224 => 63,  219 => 62,  215 => 59,  208 => 57,  189 => 52,  187 => 51,  183 => 49,  169 => 48,  163 => 47,  146 => 46,  143 => 45,  141 => 44,  135 => 41,  130 => 38,  124 => 36,  120 => 35,  117 => 34,  115 => 33,  109 => 29,  103 => 27,  99 => 26,  96 => 25,  94 => 24,  90 => 23,  84 => 22,  78 => 19,  72 => 18,  66 => 14,  48 => 13,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMMainBundle:Article:index.html.twig", "/Users/palyndiel/PhpstormProjects/cri_tube/src/MM/MainBundle/Resources/views/Article/index.html.twig");
    }
}
