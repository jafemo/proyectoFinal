<?php

/* controlBundle:Carpeta_Jornada:mostrarJornada.html.twig */
class __TwigTemplate_30f66365decd2ad336361502f3ef9db87b6b99749e84d298499f9ffd9f6119bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Jornada:mostrarJornada.html.twig", 1);
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
        $__internal_38025e02a6e9042a7e8d360b090cb4098ba63cee7357998528fc284888065edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38025e02a6e9042a7e8d360b090cb4098ba63cee7357998528fc284888065edf->enter($__internal_38025e02a6e9042a7e8d360b090cb4098ba63cee7357998528fc284888065edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:mostrarJornada.html.twig"));

        $__internal_2c37a4049075841a017608ffd5c992e7f2ae5fe50e1f52accee060a524c21282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c37a4049075841a017608ffd5c992e7f2ae5fe50e1f52accee060a524c21282->enter($__internal_2c37a4049075841a017608ffd5c992e7f2ae5fe50e1f52accee060a524c21282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Jornada:mostrarJornada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38025e02a6e9042a7e8d360b090cb4098ba63cee7357998528fc284888065edf->leave($__internal_38025e02a6e9042a7e8d360b090cb4098ba63cee7357998528fc284888065edf_prof);

        
        $__internal_2c37a4049075841a017608ffd5c992e7f2ae5fe50e1f52accee060a524c21282->leave($__internal_2c37a4049075841a017608ffd5c992e7f2ae5fe50e1f52accee060a524c21282_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec94ef37a4bb83a32bd0f7e0ac30fdb64c991588dbf422089a0334cc56e7dfe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec94ef37a4bb83a32bd0f7e0ac30fdb64c991588dbf422089a0334cc56e7dfe6->enter($__internal_ec94ef37a4bb83a32bd0f7e0ac30fdb64c991588dbf422089a0334cc56e7dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9674f3b24b9e5ce8f06d42f448bd699a6ae4b8246dfb59df3e33543794454d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9674f3b24b9e5ce8f06d42f448bd699a6ae4b8246dfb59df3e33543794454d00->enter($__internal_9674f3b24b9e5ce8f06d42f448bd699a6ae4b8246dfb59df3e33543794454d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<hr>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TablaJornada"] ?? $this->getContext($context, "TablaJornada")));
        foreach ($context['_seq'] as $context["_key"] => $context["jornada"]) {
            // line 6
            echo "  <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jornada"], "nombre", array()), "html", null, true);
            echo "</h1>
  <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["jornada"], "rival", array()), "html", null, true);
            echo "</h3>
  - <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualizar_jornada", array("id" => $this->getAttribute($context["jornada"], "id", array()))), "html", null, true);
            echo "\"> Actualizar</a>
                        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_campo_jornada", array("id" => $this->getAttribute($context["jornada"], "id", array()))), "html", null, true);
            echo "\"> Borrar</a>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jornada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9674f3b24b9e5ce8f06d42f448bd699a6ae4b8246dfb59df3e33543794454d00->leave($__internal_9674f3b24b9e5ce8f06d42f448bd699a6ae4b8246dfb59df3e33543794454d00_prof);

        
        $__internal_ec94ef37a4bb83a32bd0f7e0ac30fdb64c991588dbf422089a0334cc56e7dfe6->leave($__internal_ec94ef37a4bb83a32bd0f7e0ac30fdb64c991588dbf422089a0334cc56e7dfe6_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Jornada:mostrarJornada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 8,  62 => 7,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

<hr>
  {% for jornada in TablaJornada %}
  <h1>{{jornada.nombre}}</h1>
  <h3>{{jornada.rival}}</h3>
  - <a href=\"{{ path('actualizar_jornada', {'id': jornada.id} ) }}\"> Actualizar</a>
                        - <a href=\"{{ path('eliminar_campo_jornada', {'id': jornada.id} ) }}\"> Borrar</a>

  {% endfor %}
{% endblock %}
", "controlBundle:Carpeta_Jornada:mostrarJornada.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Jornada/mostrarJornada.html.twig");
    }
}
