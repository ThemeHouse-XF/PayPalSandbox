<?php

class ThemeHouse_PayPalSandbox_Route_Prefix_PayPalSandbox implements XenForo_Route_Interface
{

    /**
     * Match a specific route for an already matched prefix.
     *
     * @see XenForo_Route_Interface::match()
     */
    public function match($routePath, Zend_Controller_Request_Http $request, XenForo_Router $router)
    {
        return $router->getRouteMatch('ThemeHouse_PayPalSandbox_ControllerPublic_PayPalSandbox', $routePath, 'account');
    } /* END match */
}