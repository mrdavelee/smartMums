<?php

/* /Applications/MAMP/htdocs/smartMums/themes/Dave/pages/login.htm */
class __TwigTemplate_3247f1e68a114995acf457b2a48ec3d04a7936e77fea0088a2c07a6fb67aa9cc extends Twig_Template
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
        echo "<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-account/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>


<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 13
        if ( !($context["user"] ?? null)) {
            // line 14
            echo "
    <div class=\"row\">
    <div class=\"col m6\">
            <h3>Sign in</h3>
            ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "        </div>

        <div class=\"col m6\">
            <h3>Register</h3>
            ";
            // line 23
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "        </div>

    </div>

";
        } else {
            // line 29
            echo "
    ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
    ";
            // line 32
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 33
            echo "
    ";
            // line 34
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "
";
        }
        // line 37
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/smartMums/themes/Dave/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  88 => 35,  84 => 34,  81 => 33,  77 => 32,  74 => 31,  70 => 30,  67 => 29,  60 => 24,  56 => 23,  50 => 19,  46 => 18,  40 => 14,  38 => 13,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      {% partial \"pages-account/header\" %}
    </div>
  </div>
</section>


<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% if not user %}

    <div class=\"row\">
    <div class=\"col m6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col m6\">
            <h3>Register</h3>
            {% partial account ~ '::register' %}
        </div>

    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}
    </div>
  </div>
</section>", "/Applications/MAMP/htdocs/smartMums/themes/Dave/pages/login.htm", "");
    }
}
