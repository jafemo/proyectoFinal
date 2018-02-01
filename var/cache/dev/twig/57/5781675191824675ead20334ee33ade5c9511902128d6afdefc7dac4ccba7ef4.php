<?php

/* usuariosBundle:Carpeta_User:eliminarUser.html.twig */
class __TwigTemplate_16738f264871b091e9ca4eb20b2f3b1803844f0c0ec82e11893454f551a13f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:eliminarUser.html.twig", 1);
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
        $__internal_7b1e8d25a4147984939f1b4114f35c6dd6c8ffe33afb700db8dd87f0c3f58a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1e8d25a4147984939f1b4114f35c6dd6c8ffe33afb700db8dd87f0c3f58a40->enter($__internal_7b1e8d25a4147984939f1b4114f35c6dd6c8ffe33afb700db8dd87f0c3f58a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:eliminarUser.html.twig"));

        $__internal_e2c8c549220e2c90353643bfa891bceb1d4f7efbeb2946f185efa65f7bd7ee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c8c549220e2c90353643bfa891bceb1d4f7efbeb2946f185efa65f7bd7ee21->enter($__internal_e2c8c549220e2c90353643bfa891bceb1d4f7efbeb2946f185efa65f7bd7ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:eliminarUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1e8d25a4147984939f1b4114f35c6dd6c8ffe33afb700db8dd87f0c3f58a40->leave($__internal_7b1e8d25a4147984939f1b4114f35c6dd6c8ffe33afb700db8dd87f0c3f58a40_prof);

        
        $__internal_e2c8c549220e2c90353643bfa891bceb1d4f7efbeb2946f185efa65f7bd7ee21->leave($__internal_e2c8c549220e2c90353643bfa891bceb1d4f7efbeb2946f185efa65f7bd7ee21_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe48ccc7c1acb79d7f8e7f301ad37fadfcf554da3fd9fedbb39900e6d692d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe48ccc7c1acb79d7f8e7f301ad37fadfcf554da3fd9fedbb39900e6d692d19->enter($__internal_fbe48ccc7c1acb79d7f8e7f301ad37fadfcf554da3fd9fedbb39900e6d692d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd55c9ab794da10bff4a853c68203f4b80e72842a4436f9ae4f1b77c388528f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd55c9ab794da10bff4a853c68203f4b80e72842a4436f9ae4f1b77c388528f->enter($__internal_edd55c9ab794da10bff4a853c68203f4b80e72842a4436f9ae4f1b77c388528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaEntity"] ?? $this->getContext($context, "TablaEntity")), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_edd55c9ab794da10bff4a853c68203f4b80e72842a4436f9ae4f1b77c388528f->leave($__internal_edd55c9ab794da10bff4a853c68203f4b80e72842a4436f9ae4f1b77c388528f_prof);

        
        $__internal_fbe48ccc7c1acb79d7f8e7f301ad37fadfcf554da3fd9fedbb39900e6d692d19->leave($__internal_fbe48ccc7c1acb79d7f8e7f301ad37fadfcf554da3fd9fedbb39900e6d692d19_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:eliminarUser.html.twig";
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
  {{ TablaEntity.username}}
{% endblock %}
", "usuariosBundle:Carpeta_User:eliminarUser.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/eliminarUser.html.twig");
    }
}
