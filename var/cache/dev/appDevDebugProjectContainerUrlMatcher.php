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
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Affiche')) {
            // absence_affichage
            if ('/AfficheAbs' === $pathinfo) {
                return array (  '_controller' => 'AbsenceBundle\\Controller\\AbsenceController::afficheAction',  '_route' => 'absence_affichage',);
            }

            // classe_affichage
            if ('/Afficheclasse' === $pathinfo) {
                return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::afficheAction',  '_route' => 'classe_affichage',);
            }

            // affiche_mat
            if ('/AfficheMatrs' === $pathinfo) {
                return array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::afficheAction',  '_route' => 'affiche_mat',);
            }

            // Note_affichage
            if ('/AfficheNote' === $pathinfo) {
                return array (  '_controller' => 'NoteBundle\\Controller\\NoteController::afficheAction',  '_route' => 'Note_affichage',);
            }

            // affiche_eleve
            if ('/AfficheElevs' === $pathinfo) {
                return array (  '_controller' => 'EleveBundle\\Controller\\EleveController::afficheAction',  '_route' => 'affiche_eleve',);
            }

            // affichePers
            if ('/AffichePers' === $pathinfo) {
                return array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::afficheAction',  '_route' => 'affichePers',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Ajouter')) {
            // ajouterAbs
            if ('/AjouterAbs' === $pathinfo) {
                return array (  '_controller' => 'AbsenceBundle\\Controller\\AbsenceController::ajouterAction',  '_route' => 'ajouterAbs',);
            }

            // ajouter_classe
            if ('/Ajouterclasse' === $pathinfo) {
                return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::ajouterAction',  '_route' => 'ajouter_classe',);
            }

            // ajouterMat
            if ('/AjouterMat' === $pathinfo) {
                return array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::ajouterAction',  '_route' => 'ajouterMat',);
            }

            // ajouterNote
            if ('/AjouterNote' === $pathinfo) {
                return array (  '_controller' => 'NoteBundle\\Controller\\NoteController::ajouterAction',  '_route' => 'ajouterNote',);
            }

            // ajouterElev
            if ('/AjouterElev' === $pathinfo) {
                return array (  '_controller' => 'EleveBundle\\Controller\\EleveController::ajouterAction',  '_route' => 'ajouterElev',);
            }

            // ajouterPers
            if ('/AjouterPer' === $pathinfo) {
                return array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::ajouterAction',  '_route' => 'ajouterPers',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Supprimer')) {
            // suppAbs
            if (0 === strpos($pathinfo, '/SupprimerAbs') && preg_match('#^/SupprimerAbs/(?P<numAbs>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppAbs']), array (  '_controller' => 'AbsenceBundle\\Controller\\AbsenceController::supprimerAction',));
            }

            // supp_classe
            if (0 === strpos($pathinfo, '/Supprimerclasse') && preg_match('#^/Supprimerclasse/(?P<num>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supp_classe']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::supprimerAction',));
            }

            // suppMat
            if (0 === strpos($pathinfo, '/SupprimerMat') && preg_match('#^/SupprimerMat/(?P<numMat>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppMat']), array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::supprimerAction',));
            }

            // suppNote
            if (0 === strpos($pathinfo, '/SupprimerNote') && preg_match('#^/SupprimerNote/(?P<numnote>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppNote']), array (  '_controller' => 'NoteBundle\\Controller\\NoteController::supprimerAction',));
            }

            // suppElvs
            if (0 === strpos($pathinfo, '/SupprimerElv') && preg_match('#^/SupprimerElv/(?P<num>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppElvs']), array (  '_controller' => 'EleveBundle\\Controller\\EleveController::supprimerAction',));
            }

            // suppPers
            if (0 === strpos($pathinfo, '/SupprimerPer') && preg_match('#^/SupprimerPer/(?P<cin>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppPers']), array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::supprimerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Edit')) {
            // edit_absence
            if (0 === strpos($pathinfo, '/Editabsence') && preg_match('#^/Editabsence/(?P<numAbs>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_absence']), array (  '_controller' => 'AbsenceBundle\\Controller\\AbsenceController::editAction',));
            }

            // edit_classe
            if (0 === strpos($pathinfo, '/Editclasse') && preg_match('#^/Editclasse/(?P<num>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_classe']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::editAction',));
            }

            // edit_matiere
            if (0 === strpos($pathinfo, '/EditMat') && preg_match('#^/EditMat/(?P<numMat>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_matiere']), array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::editAction',));
            }

            // edit_note
            if (0 === strpos($pathinfo, '/Editnote') && preg_match('#^/Editnote/(?P<numnote>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_note']), array (  '_controller' => 'NoteBundle\\Controller\\NoteController::editAction',));
            }

            // edit_eleve
            if (0 === strpos($pathinfo, '/EditElevs') && preg_match('#^/EditElevs/(?P<num>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_eleve']), array (  '_controller' => 'EleveBundle\\Controller\\EleveController::editAction',));
            }

            // edit_personne
            if (0 === strpos($pathinfo, '/EditPers') && preg_match('#^/EditPers/(?P<cinPersonne>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_personne']), array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::editAction',));
            }

        }

        // NbMaitre
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::NbMaitreAction',  '_route' => 'NbMaitre',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_NbMaitre;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'NbMaitre'));
            }

            return $ret;
        }
        not_NbMaitre:

        // dashboard_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::DashboardAction',  '_route' => 'dashboard_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_dashboard_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'dashboard_homepage'));
            }

            return $ret;
        }
        not_dashboard_homepage:

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::loginAction',  '_route' => 'login',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
