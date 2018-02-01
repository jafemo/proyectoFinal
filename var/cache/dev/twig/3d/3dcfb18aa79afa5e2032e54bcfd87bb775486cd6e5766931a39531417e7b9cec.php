<?php

/* controlBundle:Carpeta_Jornada:actualizar.html.twig */
class __TwigTemplate_15bd189dc7a55fd936b044a25037d830332860868e9ed5e39ca8b54c7f55dfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Jornada:actualizar.html.twig", 1);
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
        $__internal_6175e461ef1c6a467742588d699be77121d45e6ee50ce97ad2861d3e345334df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6175e461ef1c6a467742588d699be77121d45e6ee50ce97ad2861d3e345334df->enter($__internal_6175e461ef1c6a467742588d699be77121d45e6ee50ce97ad2861d3e345334df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:actualizar.html.twig"));

        $__internal_e99c536974a3837bfcb94e7b89fdaf01d19fceaeef0f2dad2aaca92c0f7f97aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99c536974a3837bfcb94e7b89fdaf01d19fceaeef0f2dad2aaca92c0f7f97aa->enter($__internal_e99c536974a3837bfcb94e7b89fdaf01d19fceaeef0f2dad2aaca92c0f7f97aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:actualizar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6175e461ef1c6a467742588d699be77121d45e6ee50ce97ad2861d3e345334df->leave($__internal_6175e461ef1c6a467742588d699be77121d45e6ee50ce97ad2861d3e345334df_prof);

        
        $__internal_e99c536974a3837bfcb94e7b89fdaf01d19fceaeef0f2dad2aaca92c0f7f97aa->leave($__internal_e99c536974a3837bfcb94e7b89fdaf01d19fceaeef0f2dad2aaca92c0f7f97aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f97e50cac5258caf2b33cb26cfbef5cb7485397b1706413e2dbf46cf11011fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f97e50cac5258caf2b33cb26cfbef5cb7485397b1706413e2dbf46cf11011fb->enter($__internal_6f97e50cac5258caf2b33cb26cfbef5cb7485397b1706413e2dbf46cf11011fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f631c2b644b981f1e5cfc61cd9a049bc713b01b321bb86d9d9fff7e0aa50d301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f631c2b644b981f1e5cfc61cd9a049bc713b01b321bb86d9d9fff7e0aa50d301->enter($__internal_f631c2b644b981f1e5cfc61cd9a049bc713b01b321bb86d9d9fff7e0aa50d301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f631c2b644b981f1e5cfc61cd9a049bc713b01b321bb86d9d9fff7e0aa50d301->leave($__internal_f631c2b644b981f1e5cfc61cd9a049bc713b01b321bb86d9d9fff7e0aa50d301_prof);

        
        $__internal_6f97e50cac5258caf2b33cb26cfbef5cb7485397b1706413e2dbf46cf11011fb->leave($__internal_6f97e50cac5258caf2b33cb26cfbef5cb7485397b1706413e2dbf46cf11011fb_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Jornada:actualizar.html.twig";
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
", "controlBundle:Carpeta_Jornada:actualizar.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Jornada/actualizar.html.twig");
    }
}
