<?php

/* controlBundle:Carpeta_Plantilla:formulario.html.twig */
class __TwigTemplate_e56856301757133df5580cd8c692421c887118a66581e7c1796ab7b415137a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Plantilla:formulario.html.twig", 1);
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
        $__internal_d4dfde89de9e5ecfbcc3cdec95e7db16f8e13618e3be887cd8bea2b7361207f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dfde89de9e5ecfbcc3cdec95e7db16f8e13618e3be887cd8bea2b7361207f7->enter($__internal_d4dfde89de9e5ecfbcc3cdec95e7db16f8e13618e3be887cd8bea2b7361207f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:formulario.html.twig"));

        $__internal_ddf45625a2300fdaf31c422b5ad83b9f903e46379bf99c46e5fde32035a61f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf45625a2300fdaf31c422b5ad83b9f903e46379bf99c46e5fde32035a61f17->enter($__internal_ddf45625a2300fdaf31c422b5ad83b9f903e46379bf99c46e5fde32035a61f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4dfde89de9e5ecfbcc3cdec95e7db16f8e13618e3be887cd8bea2b7361207f7->leave($__internal_d4dfde89de9e5ecfbcc3cdec95e7db16f8e13618e3be887cd8bea2b7361207f7_prof);

        
        $__internal_ddf45625a2300fdaf31c422b5ad83b9f903e46379bf99c46e5fde32035a61f17->leave($__internal_ddf45625a2300fdaf31c422b5ad83b9f903e46379bf99c46e5fde32035a61f17_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe89c2fbc71dc65b5f654ebd7016e2ed9d7a9f2736ac2b3a94ff40c599929938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe89c2fbc71dc65b5f654ebd7016e2ed9d7a9f2736ac2b3a94ff40c599929938->enter($__internal_fe89c2fbc71dc65b5f654ebd7016e2ed9d7a9f2736ac2b3a94ff40c599929938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c15251f64009223a31587433e6a38c0b8a8dab2d469adae209f15febaabe9b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15251f64009223a31587433e6a38c0b8a8dab2d469adae209f15febaabe9b1e->enter($__internal_c15251f64009223a31587433e6a38c0b8a8dab2d469adae209f15febaabe9b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c15251f64009223a31587433e6a38c0b8a8dab2d469adae209f15febaabe9b1e->leave($__internal_c15251f64009223a31587433e6a38c0b8a8dab2d469adae209f15febaabe9b1e_prof);

        
        $__internal_fe89c2fbc71dc65b5f654ebd7016e2ed9d7a9f2736ac2b3a94ff40c599929938->leave($__internal_fe89c2fbc71dc65b5f654ebd7016e2ed9d7a9f2736ac2b3a94ff40c599929938_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Plantilla:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
  {{ form_start(form) }}
  {{ form_widget(form) }}
  {{ form_end(form) }}
{% endblock %}
", "controlBundle:Carpeta_Plantilla:formulario.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Plantilla/formulario.html.twig");
    }
}
