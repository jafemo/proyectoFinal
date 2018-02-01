<?php

/* usuariosBundle:Carpeta_User:register.html.twig */
class __TwigTemplate_7bfd63cd2178ee6df981c7073749df0e49fba8c2de3bee2cca24029e46033a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:register.html.twig", 1);
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
        $__internal_e201d7f47685f567efb632f77a6bfc94398af7915d238cffa867cf0e73c156ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e201d7f47685f567efb632f77a6bfc94398af7915d238cffa867cf0e73c156ff->enter($__internal_e201d7f47685f567efb632f77a6bfc94398af7915d238cffa867cf0e73c156ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:register.html.twig"));

        $__internal_db32f9e8e07529db7ffc48f1d1d110ad7847dfd3816db5a14e197300310434da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db32f9e8e07529db7ffc48f1d1d110ad7847dfd3816db5a14e197300310434da->enter($__internal_db32f9e8e07529db7ffc48f1d1d110ad7847dfd3816db5a14e197300310434da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e201d7f47685f567efb632f77a6bfc94398af7915d238cffa867cf0e73c156ff->leave($__internal_e201d7f47685f567efb632f77a6bfc94398af7915d238cffa867cf0e73c156ff_prof);

        
        $__internal_db32f9e8e07529db7ffc48f1d1d110ad7847dfd3816db5a14e197300310434da->leave($__internal_db32f9e8e07529db7ffc48f1d1d110ad7847dfd3816db5a14e197300310434da_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc06cde7ab8178b580d0d53e2f6d3d83852f801b24a664047b7a0aea2849467c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc06cde7ab8178b580d0d53e2f6d3d83852f801b24a664047b7a0aea2849467c->enter($__internal_bc06cde7ab8178b580d0d53e2f6d3d83852f801b24a664047b7a0aea2849467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c89f626aa953a5d8c4612de9a0ac704fe880cdf4c41f6ce6fe6fd075e246994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c89f626aa953a5d8c4612de9a0ac704fe880cdf4c41f6ce6fe6fd075e246994->enter($__internal_4c89f626aa953a5d8c4612de9a0ac704fe880cdf4c41f6ce6fe6fd075e246994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Registrar", array()), 'row');
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4c89f626aa953a5d8c4612de9a0ac704fe880cdf4c41f6ce6fe6fd075e246994->leave($__internal_4c89f626aa953a5d8c4612de9a0ac704fe880cdf4c41f6ce6fe6fd075e246994_prof);

        
        $__internal_bc06cde7ab8178b580d0d53e2f6d3d83852f801b24a664047b7a0aea2849467c->leave($__internal_bc06cde7ab8178b580d0d53e2f6d3d83852f801b24a664047b7a0aea2849467c_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Registrar) }}
{{ form_end(form) }}
{% endblock %}
", "usuariosBundle:Carpeta_User:register.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/register.html.twig");
    }
}
