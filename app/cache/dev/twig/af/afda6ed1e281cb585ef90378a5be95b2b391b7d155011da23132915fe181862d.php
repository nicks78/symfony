<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c499d877f0cd51ae89c471ce5fa7bdf44ddae3b0182222638d2fe296f4d4a96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34ebf530b58298d682c6dffffd609bdb45bf09e9bc890bffab553a0b8aae3b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ebf530b58298d682c6dffffd609bdb45bf09e9bc890bffab553a0b8aae3b54->enter($__internal_34ebf530b58298d682c6dffffd609bdb45bf09e9bc890bffab553a0b8aae3b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34ebf530b58298d682c6dffffd609bdb45bf09e9bc890bffab553a0b8aae3b54->leave($__internal_34ebf530b58298d682c6dffffd609bdb45bf09e9bc890bffab553a0b8aae3b54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42b2f9fb2ca0963223c9119974806b28c87a52775e5451274582e8b3290555db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2f9fb2ca0963223c9119974806b28c87a52775e5451274582e8b3290555db->enter($__internal_42b2f9fb2ca0963223c9119974806b28c87a52775e5451274582e8b3290555db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42b2f9fb2ca0963223c9119974806b28c87a52775e5451274582e8b3290555db->leave($__internal_42b2f9fb2ca0963223c9119974806b28c87a52775e5451274582e8b3290555db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d784d9bf6720183ed709a012cedc4ecd48d56a4ca7ef61f328ae01a0016aee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d784d9bf6720183ed709a012cedc4ecd48d56a4ca7ef61f328ae01a0016aee7->enter($__internal_6d784d9bf6720183ed709a012cedc4ecd48d56a4ca7ef61f328ae01a0016aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d784d9bf6720183ed709a012cedc4ecd48d56a4ca7ef61f328ae01a0016aee7->leave($__internal_6d784d9bf6720183ed709a012cedc4ecd48d56a4ca7ef61f328ae01a0016aee7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_752323e3bed422eaba55f272ad316668abc719b84ff58a47705cc496b2ee2b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752323e3bed422eaba55f272ad316668abc719b84ff58a47705cc496b2ee2b45->enter($__internal_752323e3bed422eaba55f272ad316668abc719b84ff58a47705cc496b2ee2b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_752323e3bed422eaba55f272ad316668abc719b84ff58a47705cc496b2ee2b45->leave($__internal_752323e3bed422eaba55f272ad316668abc719b84ff58a47705cc496b2ee2b45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/GroupAutoApi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
