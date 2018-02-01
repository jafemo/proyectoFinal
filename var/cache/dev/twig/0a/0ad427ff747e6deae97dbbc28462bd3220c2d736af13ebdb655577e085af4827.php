<?php

/* controlBundle:Carpeta_Jornada:eliminar.html.twig */
class __TwigTemplate_aa63a337b231c84078918f12cf3af09a4d9fe4d69b6fc60980a968228f232528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Jornada:eliminar.html.twig", 1);
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
        $__internal_f68539cd64c0a90f63c7f93281fb9acde003a18c45d9fa37567bb7657d287396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68539cd64c0a90f63c7f93281fb9acde003a18c45d9fa37567bb7657d287396->enter($__internal_f68539cd64c0a90f63c7f93281fb9acde003a18c45d9fa37567bb7657d287396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:eliminar.html.twig"));

        $__internal_92b56f9af9cb9eda831b0bd68da97924577b51bb48acc8c982758ec044793f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b56f9af9cb9eda831b0bd68da97924577b51bb48acc8c982758ec044793f45->enter($__internal_92b56f9af9cb9eda831b0bd68da97924577b51bb48acc8c982758ec044793f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:eliminar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68539cd64c0a90f63c7f93281fb9acde003a18c45d9fa37567bb7657d287396->leave($__internal_f68539cd64c0a90f63c7f93281fb9acde003a18c45d9fa37567bb7657d287396_prof);

        
        $__internal_92b56f9af9cb9eda831b0bd68da97924577b51bb48acc8c982758ec044793f45->leave($__internal_92b56f9af9cb9eda831b0bd68da97924577b51bb48acc8c982758ec044793f45_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a3483aedc0f3e71eca58e5763d48b029e70dddc5655c494986262dbd6a6c905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3483aedc0f3e71eca58e5763d48b029e70dddc5655c494986262dbd6a6c905->enter($__internal_0a3483aedc0f3e71eca58e5763d48b029e70dddc5655c494986262dbd6a6c905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5d652e1ddf499ea2486625e1bddfe74c96c2ff8be2768cab4e7695b0d5f0dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d652e1ddf499ea2486625e1bddfe74c96c2ff8be2768cab4e7695b0d5f0dd8->enter($__internal_a5d652e1ddf499ea2486625e1bddfe74c96c2ff8be2768cab4e7695b0d5f0dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaEntity"] ?? $this->getContext($context, "TablaEntity")), "nombre", array()), "html", null, true);
        echo "
";
        
        $__internal_a5d652e1ddf499ea2486625e1bddfe74c96c2ff8be2768cab4e7695b0d5f0dd8->leave($__internal_a5d652e1ddf499ea2486625e1bddfe74c96c2ff8be2768cab4e7695b0d5f0dd8_prof);

        
        $__internal_0a3483aedc0f3e71eca58e5763d48b029e70dddc5655c494986262dbd6a6c905->leave($__internal_0a3483aedc0f3e71eca58e5763d48b029e70dddc5655c494986262dbd6a6c905_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Jornada:eliminar.html.twig";
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
  {{ TablaEntity.nombre}}
{% endblock %}
", "controlBundle:Carpeta_Jornada:eliminar.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Jornada/eliminar.html.twig");
    }
}
