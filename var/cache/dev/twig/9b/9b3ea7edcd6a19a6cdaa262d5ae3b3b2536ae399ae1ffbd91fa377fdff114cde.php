<?php

/* controlBundle:Carpeta_Plantilla:eliminar.html.twig */
class __TwigTemplate_550f4ca56a8bf26cbe64c7ee2a505e4cf79d5066e6513d4f1879f963875ebfdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Carpeta_Plantilla:eliminar.html.twig", 1);
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
        $__internal_46d49ee953e3dafe5de547825a18254c47c2ff88a101e291fafa3cdbfd4d772a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d49ee953e3dafe5de547825a18254c47c2ff88a101e291fafa3cdbfd4d772a->enter($__internal_46d49ee953e3dafe5de547825a18254c47c2ff88a101e291fafa3cdbfd4d772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:eliminar.html.twig"));

        $__internal_1767b78848db5dfd3dfdcc053d775165770e5bbfcd1e387787617cbf6b9bdd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1767b78848db5dfd3dfdcc053d775165770e5bbfcd1e387787617cbf6b9bdd91->enter($__internal_1767b78848db5dfd3dfdcc053d775165770e5bbfcd1e387787617cbf6b9bdd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Carpeta_Plantilla:eliminar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d49ee953e3dafe5de547825a18254c47c2ff88a101e291fafa3cdbfd4d772a->leave($__internal_46d49ee953e3dafe5de547825a18254c47c2ff88a101e291fafa3cdbfd4d772a_prof);

        
        $__internal_1767b78848db5dfd3dfdcc053d775165770e5bbfcd1e387787617cbf6b9bdd91->leave($__internal_1767b78848db5dfd3dfdcc053d775165770e5bbfcd1e387787617cbf6b9bdd91_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc84588aa8b720ef72a585c9411ca337e547bad00c777986d449cc48c612c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc84588aa8b720ef72a585c9411ca337e547bad00c777986d449cc48c612c75->enter($__internal_2bc84588aa8b720ef72a585c9411ca337e547bad00c777986d449cc48c612c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2affcc4a27dafab3b31c2c0a31113c7415d6dd18579f2955fabe1b41fee05bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2affcc4a27dafab3b31c2c0a31113c7415d6dd18579f2955fabe1b41fee05bb8->enter($__internal_2affcc4a27dafab3b31c2c0a31113c7415d6dd18579f2955fabe1b41fee05bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["TablaEntity"] ?? $this->getContext($context, "TablaEntity")), "nombre", array()), "html", null, true);
        echo "
";
        
        $__internal_2affcc4a27dafab3b31c2c0a31113c7415d6dd18579f2955fabe1b41fee05bb8->leave($__internal_2affcc4a27dafab3b31c2c0a31113c7415d6dd18579f2955fabe1b41fee05bb8_prof);

        
        $__internal_2bc84588aa8b720ef72a585c9411ca337e547bad00c777986d449cc48c612c75->leave($__internal_2bc84588aa8b720ef72a585c9411ca337e547bad00c777986d449cc48c612c75_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Carpeta_Plantilla:eliminar.html.twig";
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
  {{ TablaEntity.nombre}}
{% endblock %}
", "controlBundle:Carpeta_Plantilla:eliminar.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Carpeta_Plantilla/eliminar.html.twig");
    }
}
