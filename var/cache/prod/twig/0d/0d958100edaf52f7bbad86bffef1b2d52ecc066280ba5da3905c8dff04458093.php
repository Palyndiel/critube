<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_d04d565fbbf9e8eec6cf67d16eeb434c2a668f50706126e2c4206e4b03fca43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) ? $context["image_path"] : null)) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) ? $context["link_url"] : null)) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) ? $context["link_filter"] : null)) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["link_url"]) ? $context["link_url"] : null), (isset($context["link_filter"]) ? $context["link_filter"] : null))) : ((isset($context["link_url"]) ? $context["link_url"] : null))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) ? $context["link_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["image_path"]) ? $context["image_path"] : null), (isset($context["image_filter"]) ? $context["image_filter"] : null)), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) ? $context["image_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) ? $context["link_url"] : null)) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  85 => 16,  81 => 14,  77 => 12,  75 => 11,  58 => 9,  55 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LiipImagineBundle:Form:form_div_layout.html.twig", "/home/ycrpingf/public_html/vendor/liip/imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}