<?php

/* usuariosBundle:Carpeta_User:mostrarUsers.html.twig */
class __TwigTemplate_9cb4e7a35b2fbac7470a7ec4cb5e05cf60ad8462ea78177ffcc42e1dc6becafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:mostrarUsers.html.twig", 1);
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
        $__internal_6829014b77cbac4cebc5364d49415db891ae59da01ebcf78b10de33c9ff0cf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6829014b77cbac4cebc5364d49415db891ae59da01ebcf78b10de33c9ff0cf5d->enter($__internal_6829014b77cbac4cebc5364d49415db891ae59da01ebcf78b10de33c9ff0cf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:mostrarUsers.html.twig"));

        $__internal_6ece5ffcdd6cca37bf044af6c14994dfce00a70a2c5df708b1587b5ceee4f5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ece5ffcdd6cca37bf044af6c14994dfce00a70a2c5df708b1587b5ceee4f5f8->enter($__internal_6ece5ffcdd6cca37bf044af6c14994dfce00a70a2c5df708b1587b5ceee4f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:mostrarUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6829014b77cbac4cebc5364d49415db891ae59da01ebcf78b10de33c9ff0cf5d->leave($__internal_6829014b77cbac4cebc5364d49415db891ae59da01ebcf78b10de33c9ff0cf5d_prof);

        
        $__internal_6ece5ffcdd6cca37bf044af6c14994dfce00a70a2c5df708b1587b5ceee4f5f8->leave($__internal_6ece5ffcdd6cca37bf044af6c14994dfce00a70a2c5df708b1587b5ceee4f5f8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0771ceb63612952c3be4a7eacd87484c920a127f962ef720ed420b831c3e9314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0771ceb63612952c3be4a7eacd87484c920a127f962ef720ed420b831c3e9314->enter($__internal_0771ceb63612952c3be4a7eacd87484c920a127f962ef720ed420b831c3e9314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fee425244d3a0be65f0cf1981a166f9943519fbf792968c5c5e4f967151730f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee425244d3a0be65f0cf1981a166f9943519fbf792968c5c5e4f967151730f1->enter($__internal_fee425244d3a0be65f0cf1981a166f9943519fbf792968c5c5e4f967151730f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<hr>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TablaUser"] ?? $this->getContext($context, "TablaUser")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "      <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</h1>
      <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</h3>
      - <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualizar_usuarios", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Actualizar</a>
      - <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_usuario", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Borrar</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fee425244d3a0be65f0cf1981a166f9943519fbf792968c5c5e4f967151730f1->leave($__internal_fee425244d3a0be65f0cf1981a166f9943519fbf792968c5c5e4f967151730f1_prof);

        
        $__internal_0771ceb63612952c3be4a7eacd87484c920a127f962ef720ed420b831c3e9314->leave($__internal_0771ceb63612952c3be4a7eacd87484c920a127f962ef720ed420b831c3e9314_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:mostrarUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  65 => 7,  61 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
  {% for user in TablaUser %}
      <h1>{{user.username}}</h1>
      <h3>{{user.email}}</h3>
      - <a href=\"{{ path('actualizar_usuarios', {'id': user.id} ) }}\"> Actualizar</a>
      - <a href=\"{{ path('eliminar_usuario', {'id': user.id} ) }}\"> Borrar</a>
  {% endfor %}
{% endblock %}
", "usuariosBundle:Carpeta_User:mostrarUsers.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/mostrarUsers.html.twig");
    }
}
