<?php

/* controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig */
class __TwigTemplate_8a788dc507394c88e3b4accd1bbb1783043ad0a55a1c727709be512e03d339e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig", 1);
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
        $__internal_133534cb9c6b9c6e264f6e2c240fb45532df5882f515c96fe06f43939919c038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133534cb9c6b9c6e264f6e2c240fb45532df5882f515c96fe06f43939919c038->enter($__internal_133534cb9c6b9c6e264f6e2c240fb45532df5882f515c96fe06f43939919c038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig"));

        $__internal_cff30ffcaff2259e00858966fc9ef5d34fef4f43e1319aa694410a7d15894b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff30ffcaff2259e00858966fc9ef5d34fef4f43e1319aa694410a7d15894b2e->enter($__internal_cff30ffcaff2259e00858966fc9ef5d34fef4f43e1319aa694410a7d15894b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133534cb9c6b9c6e264f6e2c240fb45532df5882f515c96fe06f43939919c038->leave($__internal_133534cb9c6b9c6e264f6e2c240fb45532df5882f515c96fe06f43939919c038_prof);

        
        $__internal_cff30ffcaff2259e00858966fc9ef5d34fef4f43e1319aa694410a7d15894b2e->leave($__internal_cff30ffcaff2259e00858966fc9ef5d34fef4f43e1319aa694410a7d15894b2e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9e9a20eaf72535d21315f58bb790b68e4a0fb1bf571ffa4f39333edef548c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9e9a20eaf72535d21315f58bb790b68e4a0fb1bf571ffa4f39333edef548c2->enter($__internal_ab9e9a20eaf72535d21315f58bb790b68e4a0fb1bf571ffa4f39333edef548c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb91710b8c20eca7b7ab07ccc70f81d31395e23aea1c4b1ee862304a17a6951a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb91710b8c20eca7b7ab07ccc70f81d31395e23aea1c4b1ee862304a17a6951a->enter($__internal_bb91710b8c20eca7b7ab07ccc70f81d31395e23aea1c4b1ee862304a17a6951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<hr>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TablaPlantilla"] ?? $this->getContext($context, "TablaPlantilla")));
        foreach ($context['_seq'] as $context["_key"] => $context["plantilla"]) {
            // line 5
            echo "      <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantilla"], "nombre", array()), "html", null, true);
            echo "</h1>
      <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantilla"], "apellidos", array()), "html", null, true);
            echo "</h3>
      <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantilla"], "posicion", array()), "html", null, true);
            echo "</h3>
      <h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantilla"], "edad", array()), "html", null, true);
            echo "</h3>
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualizar_plantilla", array("id" => $this->getAttribute($context["plantilla"], "id", array()))), "html", null, true);
            echo "\"> Actualizar</a>
                          - <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_campo", array("id" => $this->getAttribute($context["plantilla"], "id", array()))), "html", null, true);
            echo "\"> Borrar</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plantilla'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bb91710b8c20eca7b7ab07ccc70f81d31395e23aea1c4b1ee862304a17a6951a->leave($__internal_bb91710b8c20eca7b7ab07ccc70f81d31395e23aea1c4b1ee862304a17a6951a_prof);

        
        $__internal_ab9e9a20eaf72535d21315f58bb790b68e4a0fb1bf571ffa4f39333edef548c2->leave($__internal_ab9e9a20eaf72535d21315f58bb790b68e4a0fb1bf571ffa4f39333edef548c2_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
  {% for plantilla in TablaPlantilla %}
      <h1>{{plantilla.nombre}}</h1>
      <h3>{{plantilla.apellidos}}</h3>
      <h3>{{plantilla.posicion}}</h3>
      <h3>{{plantilla.edad}}</h3>
        - <a href=\"{{ path('actualizar_plantilla', {'id': plantilla.id} ) }}\"> Actualizar</a>
                          - <a href=\"{{ path('eliminar_campo', {'id': plantilla.id} ) }}\"> Borrar</a>
  {% endfor %}
{% endblock %}
", "controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Plantilla/mostrarPlantilla.html.twig");
    }
}
