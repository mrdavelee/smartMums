<?php

/* /Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navcontent.htm */
class __TwigTemplate_8dc26e9b4d6192e5cb1824091686df097cdc01bbc07d052b264b5c4ab86e044f extends Twig_Template
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
        echo "<li class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
<li class=\"";
        // line 2
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
<li class=\"";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "portfolio")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
<li class=\"";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a></li>
<li class=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
<li class=\"";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "forum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("forum");
        echo "\">Forum</a></li>
";
        // line 7
        if (($context["user"] ?? null)) {
            // line 8
            echo "    <li class=\"";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">My account</a></li>
    <li><a href=\"#\" class=\"logout\" data-request=\"onLogout\">Logout</a></li>
";
        } else {
            // line 11
            echo "    <li class=\"";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Login/Register</a></li>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navcontent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  70 => 8,  68 => 7,  60 => 6,  52 => 5,  44 => 4,  36 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
<li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
<li class=\"{% if this.page.id == 'portfolio' %}active{% endif %}\"><a href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
<li class=\"{% if this.page.id == 'contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact</a></li>
<li class=\"{% if this.page.id == 'blog' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
<li class=\"{% if this.page.id == 'forum' %}active{% endif %}\"><a href=\"{{ 'forum'|page }}\">Forum</a></li>
{% if user %}
    <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">My account</a></li>
    <li><a href=\"#\" class=\"logout\" data-request=\"onLogout\">Logout</a></li>
{% else %}
    <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Login/Register</a></li>
{% endif %}", "/Applications/MAMP/htdocs/smartMums/themes/Dave/partials/pages-all/navcontent.htm", "");
    }
}
