<?php

/* controlBundle:Carpeta_Jornada:formulario.html.twig */
class __TwigTemplate_b66cd8c7d51611078344d5f6638dc90eec92496397cced0a438ff7340b19cd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Jornada:formulario.html.twig", 1);
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
        $__internal_0afe274507e3b65122902bb5fe6da392dbc94951e0abf1d97b326a8e3e065159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afe274507e3b65122902bb5fe6da392dbc94951e0abf1d97b326a8e3e065159->enter($__internal_0afe274507e3b65122902bb5fe6da392dbc94951e0abf1d97b326a8e3e065159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:formulario.html.twig"));

        $__internal_6685e06251594a4f889ce635cb3dae8d3b4cd37e6ce543166056b011fb554e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6685e06251594a4f889ce635cb3dae8d3b4cd37e6ce543166056b011fb554e96->enter($__internal_6685e06251594a4f889ce635cb3dae8d3b4cd37e6ce543166056b011fb554e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0afe274507e3b65122902bb5fe6da392dbc94951e0abf1d97b326a8e3e065159->leave($__internal_0afe274507e3b65122902bb5fe6da392dbc94951e0abf1d97b326a8e3e065159_prof);

        
        $__internal_6685e06251594a4f889ce635cb3dae8d3b4cd37e6ce543166056b011fb554e96->leave($__internal_6685e06251594a4f889ce635cb3dae8d3b4cd37e6ce543166056b011fb554e96_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e8c8fb58bda2934849ecc80275b66c5e6766792ac9c07e7dab7cd645d2a5ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8c8fb58bda2934849ecc80275b66c5e6766792ac9c07e7dab7cd645d2a5ffe->enter($__internal_0e8c8fb58bda2934849ecc80275b66c5e6766792ac9c07e7dab7cd645d2a5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_463383b4ccf7fe2ee4819b4a23160357bfa7ffb1574b11824aa4f74be3cbe9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463383b4ccf7fe2ee4819b4a23160357bfa7ffb1574b11824aa4f74be3cbe9ec->enter($__internal_463383b4ccf7fe2ee4819b4a23160357bfa7ffb1574b11824aa4f74be3cbe9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_463383b4ccf7fe2ee4819b4a23160357bfa7ffb1574b11824aa4f74be3cbe9ec->leave($__internal_463383b4ccf7fe2ee4819b4a23160357bfa7ffb1574b11824aa4f74be3cbe9ec_prof);

        
        $__internal_0e8c8fb58bda2934849ecc80275b66c5e6766792ac9c07e7dab7cd645d2a5ffe->leave($__internal_0e8c8fb58bda2934849ecc80275b66c5e6766792ac9c07e7dab7cd645d2a5ffe_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Jornada:formulario.html.twig";
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
", "controlBundle:Carpeta_Jornada:formulario.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Jornada/formulario.html.twig");
    }
}
