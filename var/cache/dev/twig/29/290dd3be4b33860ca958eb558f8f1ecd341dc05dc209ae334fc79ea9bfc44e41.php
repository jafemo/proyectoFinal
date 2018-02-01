<?php

/* controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig */
class __TwigTemplate_f344eea062ad8d8dc031b43d0875caae3ea879cb60c2519290f517134b656f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig", 1);
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
        $__internal_cbbb54bef5c7f373823b5e28ae41eaed9e8816ab92dacd19152f482ab593d62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbb54bef5c7f373823b5e28ae41eaed9e8816ab92dacd19152f482ab593d62b->enter($__internal_cbbb54bef5c7f373823b5e28ae41eaed9e8816ab92dacd19152f482ab593d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig"));

        $__internal_b73de66d4e10650ba8808f0ddb9462fd29bf2ba1e5214e2bbb2e985349e442ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73de66d4e10650ba8808f0ddb9462fd29bf2ba1e5214e2bbb2e985349e442ea->enter($__internal_b73de66d4e10650ba8808f0ddb9462fd29bf2ba1e5214e2bbb2e985349e442ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbb54bef5c7f373823b5e28ae41eaed9e8816ab92dacd19152f482ab593d62b->leave($__internal_cbbb54bef5c7f373823b5e28ae41eaed9e8816ab92dacd19152f482ab593d62b_prof);

        
        $__internal_b73de66d4e10650ba8808f0ddb9462fd29bf2ba1e5214e2bbb2e985349e442ea->leave($__internal_b73de66d4e10650ba8808f0ddb9462fd29bf2ba1e5214e2bbb2e985349e442ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d19c4c5485e6d8293ee5f73ca9b5121a65da7b2a8ac4168be5d6e1dcce60831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d19c4c5485e6d8293ee5f73ca9b5121a65da7b2a8ac4168be5d6e1dcce60831->enter($__internal_6d19c4c5485e6d8293ee5f73ca9b5121a65da7b2a8ac4168be5d6e1dcce60831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18547d332273b5ce659cc29e9531b0092f6ab81860c97dc1f859e764ff0ad2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18547d332273b5ce659cc29e9531b0092f6ab81860c97dc1f859e764ff0ad2ae->enter($__internal_18547d332273b5ce659cc29e9531b0092f6ab81860c97dc1f859e764ff0ad2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<p>Enorabuena acabas de insertar un nuevo jugador!</p>
  <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaPlantilla"] ?? $this->getContext($context, "TablaPlantilla")), "nombre", array()), "html", null, true);
        echo "</h1>
  <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaPlantilla"] ?? $this->getContext($context, "TablaPlantilla")), "apellidos", array()), "html", null, true);
        echo "</h1>
  <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaPlantilla"] ?? $this->getContext($context, "TablaPlantilla")), "posicion", array()), "html", null, true);
        echo "</h1>
  <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaPlantilla"] ?? $this->getContext($context, "TablaPlantilla")), "edad", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_18547d332273b5ce659cc29e9531b0092f6ab81860c97dc1f859e764ff0ad2ae->leave($__internal_18547d332273b5ce659cc29e9531b0092f6ab81860c97dc1f859e764ff0ad2ae_prof);

        
        $__internal_6d19c4c5485e6d8293ee5f73ca9b5121a65da7b2a8ac4168be5d6e1dcce60831->leave($__internal_6d19c4c5485e6d8293ee5f73ca9b5121a65da7b2a8ac4168be5d6e1dcce60831_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
<p>Enorabuena acabas de insertar un nuevo jugador!</p>
  <h1>{{TablaPlantilla.nombre }}</h1>
  <h1>{{TablaPlantilla.apellidos }}</h1>
  <h1>{{TablaPlantilla.posicion }}</h1>
  <h1>{{TablaPlantilla.edad }}</h1>
{% endblock %}
", "controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Plantilla/ultimoInsertado.html.twig");
    }
}
