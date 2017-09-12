<?php

/* base.html.twig */
class __TwigTemplate_2e244880c0456f2c30143a9d59caf831d8c201a17da9c7c50cd01d47bd7c12ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_276bec5205321331db926f4e837b8f43da35ec0b76b02b66eb9e09be7bcfd072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276bec5205321331db926f4e837b8f43da35ec0b76b02b66eb9e09be7bcfd072->enter($__internal_276bec5205321331db926f4e837b8f43da35ec0b76b02b66eb9e09be7bcfd072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/uikit.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/uikit.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_276bec5205321331db926f4e837b8f43da35ec0b76b02b66eb9e09be7bcfd072->leave($__internal_276bec5205321331db926f4e837b8f43da35ec0b76b02b66eb9e09be7bcfd072_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47947d1c45fcfbb89608e940c48ddac64c37cea7904aa40f40494de3c56d4b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47947d1c45fcfbb89608e940c48ddac64c37cea7904aa40f40494de3c56d4b13->enter($__internal_47947d1c45fcfbb89608e940c48ddac64c37cea7904aa40f40494de3c56d4b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47947d1c45fcfbb89608e940c48ddac64c37cea7904aa40f40494de3c56d4b13->leave($__internal_47947d1c45fcfbb89608e940c48ddac64c37cea7904aa40f40494de3c56d4b13_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73ba71d7c61c7da6e34ea4b7615ae1074246c3b5f2a904d21097c553fdf18ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ba71d7c61c7da6e34ea4b7615ae1074246c3b5f2a904d21097c553fdf18ba8->enter($__internal_73ba71d7c61c7da6e34ea4b7615ae1074246c3b5f2a904d21097c553fdf18ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73ba71d7c61c7da6e34ea4b7615ae1074246c3b5f2a904d21097c553fdf18ba8->leave($__internal_73ba71d7c61c7da6e34ea4b7615ae1074246c3b5f2a904d21097c553fdf18ba8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73dd12a1702677c431221fbe4d3607e85d9477f77d40e36f3c81c0bd013d389e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dd12a1702677c431221fbe4d3607e85d9477f77d40e36f3c81c0bd013d389e->enter($__internal_73dd12a1702677c431221fbe4d3607e85d9477f77d40e36f3c81c0bd013d389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73dd12a1702677c431221fbe4d3607e85d9477f77d40e36f3c81c0bd013d389e->leave($__internal_73dd12a1702677c431221fbe4d3607e85d9477f77d40e36f3c81c0bd013d389e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62a13a5ba0c80f89b30e8561bb39ac1dbacf0fc2f6d7417e94ddfa1df4f1360b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a13a5ba0c80f89b30e8561bb39ac1dbacf0fc2f6d7417e94ddfa1df4f1360b->enter($__internal_62a13a5ba0c80f89b30e8561bb39ac1dbacf0fc2f6d7417e94ddfa1df4f1360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62a13a5ba0c80f89b30e8561bb39ac1dbacf0fc2f6d7417e94ddfa1df4f1360b->leave($__internal_62a13a5ba0c80f89b30e8561bb39ac1dbacf0fc2f6d7417e94ddfa1df4f1360b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  94 => 11,  83 => 6,  71 => 5,  62 => 15,  60 => 14,  56 => 13,  51 => 12,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/uikit.min.css')}}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <script type=\"text/javascript\" src=\"{{asset('assets/js/uikit.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/js/uikit-icons.min.js')}}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/vagrant/GroupAutoApi/app/Resources/views/base.html.twig");
    }
}
