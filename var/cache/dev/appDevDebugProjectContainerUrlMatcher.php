<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios_default_index
            if ('/usuarios' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'usuarios_default_index');
                }

                return array (  '_controller' => 'usuariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuarios_default_index',);
            }

            // usuarios_default_usuarios
            if ('/usuarios/usuario' === $pathinfo) {
                return array (  '_controller' => 'usuariosBundle\\Controller\\DefaultController::usuariosAction',  '_route' => 'usuarios_default_usuarios',);
            }

            // login_user
            if ('/usuarios/login' === $pathinfo) {
                return array (  '_controller' => 'usuariosBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login_user',);
            }

            // logout
            if ('/usuarios/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

            // user_registration
            if ('/usuarios/register' === $pathinfo) {
                return array (  '_controller' => 'usuariosBundle\\Controller\\DefaultController::registerAction',  '_route' => 'user_registration',);
            }

        }

        // control_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'control_default_index');
            }

            return array (  '_controller' => 'controlBundle\\Controller\\DefaultController::indexAction',  '_route' => 'control_default_index',);
        }

        // mostrar_jornada
        if ('/jornada' === $pathinfo) {
            return array (  '_controller' => 'controlBundle\\Controller\\jornadaController::mostrarPlantillaAction',  '_route' => 'mostrar_jornada',);
        }

        if (0 === strpos($pathinfo, '/CUD')) {
            // crearJornada
            if ('/CUD/crearJornada' === $pathinfo) {
                return array (  '_controller' => 'controlBundle\\Controller\\jornadaController::crearJornadaAction',  '_route' => 'crearJornada',);
            }

            // crearPlantilla
            if ('/CUD/crearPlantilla' === $pathinfo) {
                return array (  '_controller' => 'controlBundle\\Controller\\plantillaController::crearPlantillaAction',  '_route' => 'crearPlantilla',);
            }

            // actualizar_jornada
            if (0 === strpos($pathinfo, '/CUD/actualizarJornada') && preg_match('#^/CUD/actualizarJornada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_jornada')), array (  '_controller' => 'controlBundle\\Controller\\jornadaController::actualizarJornadaAction',));
            }

            // actualizar_plantilla
            if (0 === strpos($pathinfo, '/CUD/actualizarPlantilla') && preg_match('#^/CUD/actualizarPlantilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_plantilla')), array (  '_controller' => 'controlBundle\\Controller\\plantillaController::actualizarPlantillaAction',));
            }

            // eliminar_campo_jornada
            if (0 === strpos($pathinfo, '/CUD/eliminarJornada') && preg_match('#^/CUD/eliminarJornada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_campo_jornada')), array (  '_controller' => 'controlBundle\\Controller\\jornadaController::eliminarJornadaAction',));
            }

            // eliminar_campo
            if (0 === strpos($pathinfo, '/CUD/eliminarplantilla') && preg_match('#^/CUD/eliminarplantilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_campo')), array (  '_controller' => 'controlBundle\\Controller\\plantillaController::eliminarPlantillaAction',));
            }

        }

        // mostrar_plantilla
        if ('/plantilla' === $pathinfo) {
            return array (  '_controller' => 'controlBundle\\Controller\\plantillaController::mostrarPlantillaAction',  '_route' => 'mostrar_plantilla',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
