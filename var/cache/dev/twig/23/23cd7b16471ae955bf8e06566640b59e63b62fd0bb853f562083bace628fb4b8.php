<?php

/* controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig */
class __TwigTemplate_68ade0ef016fbcae801545d3f9c25b5db59ecbb005e9f8ea1795168712bf0e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_351f9600700b850a7c1a6ad2f802521432067fc2548cda00a624b25238785b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351f9600700b850a7c1a6ad2f802521432067fc2548cda00a624b25238785b34->enter($__internal_351f9600700b850a7c1a6ad2f802521432067fc2548cda00a624b25238785b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig"));

        $__internal_3f2eb9e2e76be467a8cd43677a44269e923f91c72a96605eac82f92897a73237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2eb9e2e76be467a8cd43677a44269e923f91c72a96605eac82f92897a73237->enter($__internal_3f2eb9e2e76be467a8cd43677a44269e923f91c72a96605eac82f92897a73237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351f9600700b850a7c1a6ad2f802521432067fc2548cda00a624b25238785b34->leave($__internal_351f9600700b850a7c1a6ad2f802521432067fc2548cda00a624b25238785b34_prof);

        
        $__internal_3f2eb9e2e76be467a8cd43677a44269e923f91c72a96605eac82f92897a73237->leave($__internal_3f2eb9e2e76be467a8cd43677a44269e923f91c72a96605eac82f92897a73237_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5884d11e6ed189be60fb6c93e3940d5ea41a0bd7f287f275b7ef4d6495a27649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5884d11e6ed189be60fb6c93e3940d5ea41a0bd7f287f275b7ef4d6495a27649->enter($__internal_5884d11e6ed189be60fb6c93e3940d5ea41a0bd7f287f275b7ef4d6495a27649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e717e930b34484a394a4d6f16008441376ce6c50a247ee265a017825e90061d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e717e930b34484a394a4d6f16008441376ce6c50a247ee265a017825e90061d6->enter($__internal_e717e930b34484a394a4d6f16008441376ce6c50a247ee265a017825e90061d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaJornada"] ?? $this->getContext($context, "TablaJornada")), "nombre", array()), "html", null, true);
        echo "
";
        
        $__internal_e717e930b34484a394a4d6f16008441376ce6c50a247ee265a017825e90061d6->leave($__internal_e717e930b34484a394a4d6f16008441376ce6c50a247ee265a017825e90061d6_prof);

        
        $__internal_5884d11e6ed189be60fb6c93e3940d5ea41a0bd7f287f275b7ef4d6495a27649->leave($__internal_5884d11e6ed189be60fb6c93e3940d5ea41a0bd7f287f275b7ef4d6495a27649_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
  {{TablaJornada.nombre }}
{% endblock %}
", "controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Jornada/ultimoInsertado.html.twig");
    }
}
