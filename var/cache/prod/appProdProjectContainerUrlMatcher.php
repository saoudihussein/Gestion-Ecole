<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // classe_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ClasseBundle:Default:index',  '_route' => 'classe_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_classe_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'classe_homepage'));
            }

            return $ret;
        }
        not_classe_homepage:

        if (0 === strpos($pathinfo, '/Affiche')) {
            // mat_homepage
            if ('/AfficheMatrs' === $pathinfo) {
                return array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::afficheAction',  '_route' => 'mat_homepage',);
            }

            // eleve_homepage
            if ('/AfficheElevs' === $pathinfo) {
                return array (  '_controller' => 'EleveBundle\\Controller\\EleveController::afficheAction',  '_route' => 'eleve_homepage',);
            }

            // affichePers
            if ('/AffichePers' === $pathinfo) {
                return array (  '_controller' => 'PersonneBundle\\Controller\\PersonneController::afficheAction',  '_route' => 'affichePers',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Ajouter')) {
            // ajouterMat
            if ('/AjouterMat' === $pathinfo) {
                return array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::ajouterAction',  '_route' => 'ajouterMat',);
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
            // suppMat
            if (0 === strpos($pathinfo, '/SupprimerMat') && preg_match('#^/SupprimerMat/(?P<numMat>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'suppMat']), array (  '_controller' => 'MatiereBundle\\Controller\\MatiereController::supprimerAction',));
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

        // note_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'NoteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'note_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_note_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'note_homepage'));
            }

            return $ret;
        }
        not_note_homepage:

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
