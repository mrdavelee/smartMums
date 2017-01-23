<?php

/* /Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navigation.htm */
class __TwigTemplate_73b76c8c6c3d4f49d38d27170d1f55ba9b829e086001298be8344e29536667d1 extends Twig_Template
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
        echo "<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo white-text\">Octaskin</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">     
          ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/navcontent"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/navcontent"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </ul>
      </div>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  39 => 11,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"{{ 'home'|page }}\" class=\"brand-logo white-text\">Octaskin</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">     
          {% partial \"pages-all/navcontent\" %}
        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          {% partial \"pages-all/navcontent\" %}
        </ul>
      </div>
    </div>
  </nav>
</div>", "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navigation.htm", "");
    }
}
