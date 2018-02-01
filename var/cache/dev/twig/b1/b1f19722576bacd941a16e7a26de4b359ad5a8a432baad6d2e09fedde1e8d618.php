<?php

/* ::base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c162ec78de9719bfd376af3e09e66af4b62cf602191db789669887cd288ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c162ec78de9719bfd376af3e09e66af4b62cf602191db789669887cd288ee0->enter($__internal_91c162ec78de9719bfd376af3e09e66af4b62cf602191db789669887cd288ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fe5dd713199a960a7e0d600cef5f4ffc78fafd2fee65037042c37ec136565378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5dd713199a960a7e0d600cef5f4ffc78fafd2fee65037042c37ec136565378->enter($__internal_fe5dd713199a960a7e0d600cef5f4ffc78fafd2fee65037042c37ec136565378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>Bootstrap Example</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">
    </head>
      <body>

      <header>

        <nav class=\"navbar navbar-inverse\">
          <section class=\"container-fluid\">
            <article class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </article>
            <article class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <img src=\"\" alt=\"\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_jornada");
        echo "\">Jornada</a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_plantilla");
        echo "\">Plantilla</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_usuarios");
        echo "\">Usuarios</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_user");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                <li><a href=\"/usuarios/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </article>
          </section>
        </nav>
        <div class=\"container\">
          <h1>Maristas Cullera Senior FS</h1>
        <div class=\"container\">
          <div class=\"jumbotron\">
            <h1>Pagina Oficial</h1>
            <p>Maristas Cullera FS</p>
          </div>
        </div>
      </div>
      </header>


      <section class=\"container\">
        <section class=\"main row\">
          <article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "          </article>
        </section>
      </section>

    </body>
</html>
";
        
        $__internal_91c162ec78de9719bfd376af3e09e66af4b62cf602191db789669887cd288ee0->leave($__internal_91c162ec78de9719bfd376af3e09e66af4b62cf602191db789669887cd288ee0_prof);

        
        $__internal_fe5dd713199a960a7e0d600cef5f4ffc78fafd2fee65037042c37ec136565378->leave($__internal_fe5dd713199a960a7e0d600cef5f4ffc78fafd2fee65037042c37ec136565378_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61a27720688c6bf40e29eb1354140d45a0141803a91dd375389277bf23148487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a27720688c6bf40e29eb1354140d45a0141803a91dd375389277bf23148487->enter($__internal_61a27720688c6bf40e29eb1354140d45a0141803a91dd375389277bf23148487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15bd697dc8de3b9522e3fa576903e81633bfa84677707f898ca4b2ddab791a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bd697dc8de3b9522e3fa576903e81633bfa84677707f898ca4b2ddab791a50->enter($__internal_15bd697dc8de3b9522e3fa576903e81633bfa84677707f898ca4b2ddab791a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_15bd697dc8de3b9522e3fa576903e81633bfa84677707f898ca4b2ddab791a50->leave($__internal_15bd697dc8de3b9522e3fa576903e81633bfa84677707f898ca4b2ddab791a50_prof);

        
        $__internal_61a27720688c6bf40e29eb1354140d45a0141803a91dd375389277bf23148487->leave($__internal_61a27720688c6bf40e29eb1354140d45a0141803a91dd375389277bf23148487_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6216d4019dfcd86f27b6147a98cacb6633940ced337f0dac3a1dc28213cbe8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6216d4019dfcd86f27b6147a98cacb6633940ced337f0dac3a1dc28213cbe8fc->enter($__internal_6216d4019dfcd86f27b6147a98cacb6633940ced337f0dac3a1dc28213cbe8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dae42a5d45b87d405145af346c206f357f0446d7c0be068f05ffe9e7b622eece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae42a5d45b87d405145af346c206f357f0446d7c0be068f05ffe9e7b622eece->enter($__internal_dae42a5d45b87d405145af346c206f357f0446d7c0be068f05ffe9e7b622eece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dae42a5d45b87d405145af346c206f357f0446d7c0be068f05ffe9e7b622eece->leave($__internal_dae42a5d45b87d405145af346c206f357f0446d7c0be068f05ffe9e7b622eece_prof);

        
        $__internal_6216d4019dfcd86f27b6147a98cacb6633940ced337f0dac3a1dc28213cbe8fc->leave($__internal_6216d4019dfcd86f27b6147a98cacb6633940ced337f0dac3a1dc28213cbe8fc_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf21de8aa5692f4a339021f632c6144b8caa027f257522567c75f32f8e104d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf21de8aa5692f4a339021f632c6144b8caa027f257522567c75f32f8e104d0a->enter($__internal_cf21de8aa5692f4a339021f632c6144b8caa027f257522567c75f32f8e104d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f66361287b77aa8d7b38908ca9c3eeb46d29778c80f795004b3c823d5fa696e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f66361287b77aa8d7b38908ca9c3eeb46d29778c80f795004b3c823d5fa696e->enter($__internal_1f66361287b77aa8d7b38908ca9c3eeb46d29778c80f795004b3c823d5fa696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f66361287b77aa8d7b38908ca9c3eeb46d29778c80f795004b3c823d5fa696e->leave($__internal_1f66361287b77aa8d7b38908ca9c3eeb46d29778c80f795004b3c823d5fa696e_prof);

        
        $__internal_cf21de8aa5692f4a339021f632c6144b8caa027f257522567c75f32f8e104d0a->leave($__internal_cf21de8aa5692f4a339021f632c6144b8caa027f257522567c75f32f8e104d0a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  150 => 6,  132 => 5,  116 => 60,  114 => 59,  90 => 38,  86 => 37,  80 => 34,  76 => 33,  72 => 32,  51 => 14,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <title>Bootstrap Example</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">
    </head>
      <body>

      <header>

        <nav class=\"navbar navbar-inverse\">
          <section class=\"container-fluid\">
            <article class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </article>
            <article class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <img src=\"\" alt=\"\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('mostrar_jornada') }}\">Jornada</a></li>
                <li><a href=\"{{ path('mostrar_plantilla') }}\">Plantilla</a></li>
                <li><a href=\"{{ path('mostrar_usuarios') }}\">Usuarios</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path('user_registration') }}\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"{{ path('login_user') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                <li><a href=\"/usuarios/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </article>
          </section>
        </nav>
        <div class=\"container\">
          <h1>Maristas Cullera Senior FS</h1>
        <div class=\"container\">
          <div class=\"jumbotron\">
            <h1>Pagina Oficial</h1>
            <p>Maristas Cullera FS</p>
          </div>
        </div>
      </div>
      </header>


      <section class=\"container\">
        <section class=\"main row\">
          <article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            {% block body %}{% endblock %}
          </article>
        </section>
      </section>

    </body>
</html>
", "::base.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/app/Resources/views/base.html.twig");
    }
}
