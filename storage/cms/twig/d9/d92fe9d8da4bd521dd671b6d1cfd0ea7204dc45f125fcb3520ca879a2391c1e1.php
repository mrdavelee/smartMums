<?php

/* /Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/catHeader.htm */
class __TwigTemplate_f63438449728f89e51f57350ed6e43188d7f21325ed40b878203b2c438d3e91d extends Twig_Template
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
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/about/header/img-01.jpg");
        echo "\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
          <div class=\"container\">
              <h2 class=\"lt-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
              <p class=\"lt-subtitle flow-text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
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
        return "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/catHeader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
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
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/about/header/img-01.jpg'|theme }}\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
          <div class=\"container\">
              <h2 class=\"lt-title\">{{ this.page.title }}</h2>
              <p class=\"lt-subtitle flow-text\">{{ this.page.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-blog/catHeader.htm", "");
    }
}
