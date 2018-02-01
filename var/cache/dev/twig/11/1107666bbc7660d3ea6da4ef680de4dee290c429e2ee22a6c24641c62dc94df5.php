<?php

/* controlBundle:Default:index.html.twig */
class __TwigTemplate_b24da35b796e1dbf28e7e630c25c8d632c192a06af9e166ca27bbff4f85c2264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "controlBundle:Default:index.html.twig", 1);
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
        $__internal_496f3ff3228058c445f0605cff7a5145039e649a78f0fc991167fc827f37b4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496f3ff3228058c445f0605cff7a5145039e649a78f0fc991167fc827f37b4f4->enter($__internal_496f3ff3228058c445f0605cff7a5145039e649a78f0fc991167fc827f37b4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Default:index.html.twig"));

        $__internal_afc80f1bdfae8d100f996fecf347090ae401241c8bc4b1feedb3d7ac4b4927bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc80f1bdfae8d100f996fecf347090ae401241c8bc4b1feedb3d7ac4b4927bc->enter($__internal_afc80f1bdfae8d100f996fecf347090ae401241c8bc4b1feedb3d7ac4b4927bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "controlBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496f3ff3228058c445f0605cff7a5145039e649a78f0fc991167fc827f37b4f4->leave($__internal_496f3ff3228058c445f0605cff7a5145039e649a78f0fc991167fc827f37b4f4_prof);

        
        $__internal_afc80f1bdfae8d100f996fecf347090ae401241c8bc4b1feedb3d7ac4b4927bc->leave($__internal_afc80f1bdfae8d100f996fecf347090ae401241c8bc4b1feedb3d7ac4b4927bc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4250bb6707a7ee921ee1d38f8196e855e5d4e6e99f537f395efc5c05ed6363de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4250bb6707a7ee921ee1d38f8196e855e5d4e6e99f537f395efc5c05ed6363de->enter($__internal_4250bb6707a7ee921ee1d38f8196e855e5d4e6e99f537f395efc5c05ed6363de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bba42f612e2131577d3653703d0bdbab3233050bcf8df2b1b0b9a26f0c504d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba42f612e2131577d3653703d0bdbab3233050bcf8df2b1b0b9a26f0c504d85->enter($__internal_bba42f612e2131577d3653703d0bdbab3233050bcf8df2b1b0b9a26f0c504d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_bba42f612e2131577d3653703d0bdbab3233050bcf8df2b1b0b9a26f0c504d85->leave($__internal_bba42f612e2131577d3653703d0bdbab3233050bcf8df2b1b0b9a26f0c504d85_prof);

        
        $__internal_4250bb6707a7ee921ee1d38f8196e855e5d4e6e99f537f395efc5c05ed6363de->leave($__internal_4250bb6707a7ee921ee1d38f8196e855e5d4e6e99f537f395efc5c05ed6363de_prof);

    }

    public function getTemplateName()
    {
        return "controlBundle:Default:index.html.twig";
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


{% endblock %}
", "controlBundle:Default:index.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/controlBundle/Resources/views/Default/index.html.twig");
    }
}
