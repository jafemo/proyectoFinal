<?php

/* usuariosBundle:Carpeta_User:actualizarUser.html.twig */
class __TwigTemplate_ed2c4570c081fec92b34c764b230fe569e89657893952f2e98a8286bf372d656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:actualizarUser.html.twig", 1);
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
        $__internal_7d6400d7b530f78a4a8e7a9d8054331aaf41961d2ea140324e3283019b493dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6400d7b530f78a4a8e7a9d8054331aaf41961d2ea140324e3283019b493dd8->enter($__internal_7d6400d7b530f78a4a8e7a9d8054331aaf41961d2ea140324e3283019b493dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:actualizarUser.html.twig"));

        $__internal_edef242cda9022e7a780b1f8f94ab12c8448389d90a87e1415030150d68e4089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edef242cda9022e7a780b1f8f94ab12c8448389d90a87e1415030150d68e4089->enter($__internal_edef242cda9022e7a780b1f8f94ab12c8448389d90a87e1415030150d68e4089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:actualizarUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6400d7b530f78a4a8e7a9d8054331aaf41961d2ea140324e3283019b493dd8->leave($__internal_7d6400d7b530f78a4a8e7a9d8054331aaf41961d2ea140324e3283019b493dd8_prof);

        
        $__internal_edef242cda9022e7a780b1f8f94ab12c8448389d90a87e1415030150d68e4089->leave($__internal_edef242cda9022e7a780b1f8f94ab12c8448389d90a87e1415030150d68e4089_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d8e78ada862a57964a425a193890a03379a94c94789bb4fbf16baa3c062bdcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8e78ada862a57964a425a193890a03379a94c94789bb4fbf16baa3c062bdcd->enter($__internal_5d8e78ada862a57964a425a193890a03379a94c94789bb4fbf16baa3c062bdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e94916500cbc873f05284e569da18ebf4c8d4ecd1fc7d80bda360e06f25c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e94916500cbc873f05284e569da18ebf4c8d4ecd1fc7d80bda360e06f25c01->enter($__internal_e0e94916500cbc873f05284e569da18ebf4c8d4ecd1fc7d80bda360e06f25c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0e94916500cbc873f05284e569da18ebf4c8d4ecd1fc7d80bda360e06f25c01->leave($__internal_e0e94916500cbc873f05284e569da18ebf4c8d4ecd1fc7d80bda360e06f25c01_prof);

        
        $__internal_5d8e78ada862a57964a425a193890a03379a94c94789bb4fbf16baa3c062bdcd->leave($__internal_5d8e78ada862a57964a425a193890a03379a94c94789bb4fbf16baa3c062bdcd_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:actualizarUser.html.twig";
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
", "usuariosBundle:Carpeta_User:actualizarUser.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/actualizarUser.html.twig");
    }
}
