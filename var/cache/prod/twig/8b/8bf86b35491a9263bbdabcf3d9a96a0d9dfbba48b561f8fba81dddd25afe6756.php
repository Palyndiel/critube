<?php

/* MMMainBundle:Article:view.html.twig */
class __TwigTemplate_50f20b6ff241007fadb902698c88366e69dd5200c2187bbaff9ca8911298118a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MMMainBundle::layout.html.twig", "MMMainBundle:Article:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <article class=\"post\">
                <header>
                  <div class=\"title\">
                    <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h2>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "resume", array()), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"meta\">
                    <time class=\"published\" datetime=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date", array()), "d M Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date", array()), "d M Y"), "html", null, true);
        echo "</time>
                    <a href=\"#\" class=\"author\"><span class=\"name\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo "</span>
                    ";
        // line 20
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "avatar", array()))) {
            // line 21
            echo "                  <img
                  src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "avatar", array()), "webPath", array())), "html", null, true);
            echo "\"
                  alt=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "avatar", array()), "alt", array()), "html", null, true);
            echo "\"
                  />
               ";
        }
        // line 25
        echo "</a> 
                  </div>
                </header>
                <a href=\"#\" class=\"image featured\">
                ";
        // line 29
        if ( !(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image", array()))) {
            // line 30
            echo "                  <img
                  src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                  alt=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image", array()), "alt", array()), "html", null, true);
            echo "\"
                  />
               ";
        }
        // line 34
        echo "</a>
                <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "</p>
                <footer>
                  <ul class=\"actions\">
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_home");
        echo "\" class=\"button big\">
                    <i class=\"glyphicon glyphicon-chevron-left\"></i>
                    Retour à la liste
                    </a></li>
                    ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 43
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"button big\">
                      <i class=\"glyphicon glyphicon-edit\"></i>
                      Modifier l'article
                    </a></li>
                    <li><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"button big\">
                      <i class=\"glyphicon glyphicon-trash\"></i>
                      Supprimer l'accueil
                    </a></li>
                    ";
        }
        // line 52
        echo "                  </ul>
                  <ul class=\"stats\" ng-app=\"myApp\">
                      ";
        // line 54
        if ( !$this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "categories", array()), "empty", array())) {
            // line 55
            echo "                      <li>
                      ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "categories", array()));
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
                // line 57
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <em>,</em> ";
                }
                // line 58
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
            // line 59
            echo "                      </li>
                      ";
        }
        // line 61
        echo "                      ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 62
            echo "                          ";
            if ( !(isset($context["hasLiked"]) ? $context["hasLiked"] : null)) {
                // line 63
                echo "                            <li><a id = like class=\"icon fa-heart\" onclick=\"like()\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nbLikes", array()), "html", null, true);
                echo "</a></li>
                          ";
            } else {
                // line 65
                echo "                            <li><a id = like class=\"icon fa-heart\" onclick=\"dislike()\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nbLikes", array()), "html", null, true);
                echo "</a></li>
                          ";
            }
            // line 67
            echo "                      ";
        }
        // line 68
        echo "                    ";
        // line 69
        echo "                  </ul>
                </footer>
              </article>

    ";
        // line 73
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "MMMainBundle:Article:view.html.twig", 73)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))));
        // line 74
        echo "
    <script>
        function like()
        {
            var DATA = 'id=' + ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo ";
            \$.ajax({
            type: \"POST\",
            url: \"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_addlike");
        echo "\",
            data: DATA
            }).done(function(data){
                refreshLikes();
                document.getElementById('like').onclick = function(){ dislike(); } ;
            });
        }
        
        function dislike()
        {
            var DATA = 'id=' + ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo ";
            \$.ajax({
            type: \"POST\",
            url: \"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_removelike");
        echo "\",
            data: DATA
            }).done(function(data){
                refreshLikes();
                document.getElementById('like').onclick = function(){ like(); } ;
            });
        }
        
        function refreshLikes(){
            var DATA = 'id=' + ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo ";
            \$.ajax({
            type: \"POST\",
            url: \"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mm_main_getlikes");
        echo "\",
            data: DATA
            }).done(function(data){
                var nbLikes = data;
                document.getElementById('like').innerHTML = nbLikes;
            });
        }
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "MMMainBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 106,  262 => 103,  250 => 94,  244 => 91,  231 => 81,  225 => 78,  219 => 74,  217 => 73,  211 => 69,  209 => 68,  206 => 67,  200 => 65,  194 => 63,  191 => 62,  188 => 61,  184 => 59,  170 => 58,  164 => 57,  147 => 56,  144 => 55,  142 => 54,  138 => 52,  130 => 47,  122 => 43,  120 => 42,  113 => 38,  107 => 35,  104 => 34,  98 => 32,  94 => 31,  91 => 30,  89 => 29,  83 => 25,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  64 => 19,  58 => 18,  52 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MMMainBundle:Article:view.html.twig", "/home/ycrpingf/public_html/src/MM/MainBundle/Resources/views/Article/view.html.twig");
    }
}
