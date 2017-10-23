<?php
/**
 * Created by PhpStorm.
 * User: Camilo
 * Date: 14/06/2017
 * Time: 14:46
 */

namespace Amd\PiperBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;


class LoginSucessHandler implements AuthenticationSuccessHandlerInterface
{

    protected $router;
    protected $securityContext;

    public function __construct(Router $router, SecurityContext $securityContext)
    {
        $this->router = $router;
        $this->securityContext = $securityContext;
    }

    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @param Request $request
     * @param TokenInterface $token
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // TODO: Implement onAuthenticationSuccess() method.
        $user = $this->securityContext->getToken()->getUser();

        if ($this->securityContext->isGranted('ROLE_USER')) {
            $response = new RedirectResponse($this->router->generate('inicio'));
        }
        elseif ($this->securityContext->isGranted('ROLE_SUPER_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('admin'));
        }

        return $response;
    }
}