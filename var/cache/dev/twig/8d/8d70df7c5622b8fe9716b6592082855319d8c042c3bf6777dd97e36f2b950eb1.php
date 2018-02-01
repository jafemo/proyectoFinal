<?php

/* usuariosBundle:Carpeta_User:login.html.twig */
class __TwigTemplate_57a2867af087305d374935855ef0e1d90a46125cdb56f2753b303c325348cd94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:login.html.twig", 2);
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
        $__internal_8b2824f0e7f4128036776ee026f1e0fbac5ba9509eb9c03942ffd80ec5e88979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2824f0e7f4128036776ee026f1e0fbac5ba9509eb9c03942ffd80ec5e88979->enter($__internal_8b2824f0e7f4128036776ee026f1e0fbac5ba9509eb9c03942ffd80ec5e88979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:login.html.twig"));

        $__internal_fc5a52700b5ca32e5b476e5e72fb883f6ab10732e5ad25a84a24aef6ebcda414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5a52700b5ca32e5b476e5e72fb883f6ab10732e5ad25a84a24aef6ebcda414->enter($__internal_fc5a52700b5ca32e5b476e5e72fb883f6ab10732e5ad25a84a24aef6ebcda414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2824f0e7f4128036776ee026f1e0fbac5ba9509eb9c03942ffd80ec5e88979->leave($__internal_8b2824f0e7f4128036776ee026f1e0fbac5ba9509eb9c03942ffd80ec5e88979_prof);

        
        $__internal_fc5a52700b5ca32e5b476e5e72fb883f6ab10732e5ad25a84a24aef6ebcda414->leave($__internal_fc5a52700b5ca32e5b476e5e72fb883f6ab10732e5ad25a84a24aef6ebcda414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f83547a5c115fe3872f46ef5cec8467749600227a3557f2b327916f3504e7871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83547a5c115fe3872f46ef5cec8467749600227a3557f2b327916f3504e7871->enter($__internal_f83547a5c115fe3872f46ef5cec8467749600227a3557f2b327916f3504e7871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bde311a64291f2b205255b1387f7a91cbcab6044b5394e89edd11ce595e9b32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde311a64291f2b205255b1387f7a91cbcab6044b5394e89edd11ce595e9b32b->enter($__internal_bde311a64291f2b205255b1387f7a91cbcab6044b5394e89edd11ce595e9b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<body>
";
        // line 8
        echo "
";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_user");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 25
        echo "
    <button type=\"submit\">login</button>
</form>
</body>
";
        
        $__internal_bde311a64291f2b205255b1387f7a91cbcab6044b5394e89edd11ce595e9b32b->leave($__internal_bde311a64291f2b205255b1387f7a91cbcab6044b5394e89edd11ce595e9b32b_prof);

        
        $__internal_f83547a5c115fe3872f46ef5cec8467749600227a3557f2b327916f3504e7871->leave($__internal_f83547a5c115fe3872f46ef5cec8467749600227a3557f2b327916f3504e7871_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::base.html.twig' %}
{% block body %}

<body>
{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login_user') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
</body>
{% endblock %}
", "usuariosBundle:Carpeta_User:login.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/login.html.twig");
    }
}
