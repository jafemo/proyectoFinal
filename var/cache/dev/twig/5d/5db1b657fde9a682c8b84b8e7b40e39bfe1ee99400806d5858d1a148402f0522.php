<?php

/* controlBundle:Carpeta_Plantilla:actualizar.html.twig */
class __TwigTemplate_4e50c16560358ef3d6c96fbc753430151197d918fc7884553eb1dc8fdf4ee9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Plantilla:actualizar.html.twig", 1);
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
        $__internal_98c29c0131cb31facf97480e6a3853c6f55450c0829b9fafe13db58e3930a01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c29c0131cb31facf97480e6a3853c6f55450c0829b9fafe13db58e3930a01a->enter($__internal_98c29c0131cb31facf97480e6a3853c6f55450c0829b9fafe13db58e3930a01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:actualizar.html.twig"));

        $__internal_3ff66d2df5ed20c29e9a44ecfa41904e575f10c8ef8370b88f44ad429df444ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff66d2df5ed20c29e9a44ecfa41904e575f10c8ef8370b88f44ad429df444ed->enter($__internal_3ff66d2df5ed20c29e9a44ecfa41904e575f10c8ef8370b88f44ad429df444ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:actualizar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c29c0131cb31facf97480e6a3853c6f55450c0829b9fafe13db58e3930a01a->leave($__internal_98c29c0131cb31facf97480e6a3853c6f55450c0829b9fafe13db58e3930a01a_prof);

        
        $__internal_3ff66d2df5ed20c29e9a44ecfa41904e575f10c8ef8370b88f44ad429df444ed->leave($__internal_3ff66d2df5ed20c29e9a44ecfa41904e575f10c8ef8370b88f44ad429df444ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a13485e24ed1a70cfc146ed44b69cc66bc9f93da995f0ea54cfbdd7d9d86140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a13485e24ed1a70cfc146ed44b69cc66bc9f93da995f0ea54cfbdd7d9d86140->enter($__internal_4a13485e24ed1a70cfc146ed44b69cc66bc9f93da995f0ea54cfbdd7d9d86140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69b89cb2716917a86735215494c5c0ca5e1722c52989db590c38ff36b6aed553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b89cb2716917a86735215494c5c0ca5e1722c52989db590c38ff36b6aed553->enter($__internal_69b89cb2716917a86735215494c5c0ca5e1722c52989db590c38ff36b6aed553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69b89cb2716917a86735215494c5c0ca5e1722c52989db590c38ff36b6aed553->leave($__internal_69b89cb2716917a86735215494c5c0ca5e1722c52989db590c38ff36b6aed553_prof);

        
        $__internal_4a13485e24ed1a70cfc146ed44b69cc66bc9f93da995f0ea54cfbdd7d9d86140->leave($__internal_4a13485e24ed1a70cfc146ed44b69cc66bc9f93da995f0ea54cfbdd7d9d86140_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Plantilla:actualizar.html.twig";
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
", "controlBundle:Carpeta_Plantilla:actualizar.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Plantilla/actualizar.html.twig");
    }
}
