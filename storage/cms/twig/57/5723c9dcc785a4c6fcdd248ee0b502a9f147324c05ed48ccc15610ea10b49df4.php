<?php

/* /Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/header.htm */
class __TwigTemplate_dae0c29fd2cbd91ba1e6a990a76238c10e9feb0cb4c423830e20ae45d15c7945 extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      ";
        // line 4
        if (twig_slice($this->env, $this->getAttribute(($context["post"] ?? null), "featured_images", array()), 0, 1)) {
            // line 5
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["post"] ?? null), "featured_images", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "      <div class=\"lt-parallax parallax\"><img data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"image\"></div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "      ";
        } else {
            // line 9
            echo "      <div class=\"lt-parallax parallax\"><img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/blog/header/blue.png");
            echo "\" alt=\"image\"></div>
      ";
        }
        // line 11
        echo "      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <div class=\"container\">
              <h2 class=\"lt-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
              <p class=\"lt-subtitle flow-text\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "summary", array()), "html", null, true);
        echo "</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  57 => 15,  51 => 11,  45 => 9,  42 => 8,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      {% if post.featured_images|slice(0, 1) %}
      {% for image in post.featured_images|slice(0, 1) %}
      <div class=\"lt-parallax parallax\"><img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"image\"></div>
      {% endfor %}
      {% else %}
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/blog/header/blue.png'|theme }}\" alt=\"image\"></div>
      {% endif %}
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <div class=\"container\">
              <h2 class=\"lt-title\">{{ post.title }}</h2>
              <p class=\"lt-subtitle flow-text\">{{ post.summary }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/header.htm", "");
    }
}
