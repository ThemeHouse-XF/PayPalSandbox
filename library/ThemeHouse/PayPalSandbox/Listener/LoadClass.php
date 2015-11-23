<?php

class ThemeHouse_PayPalSandbox_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_PayPalSandbox' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Account',
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_PayPalSandbox' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_PayPalSandbox_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}