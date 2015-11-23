<?php

/**
 *
 * @see XenForo_ControllerPublic_Account
 */
class ThemeHouse_PayPalSandbox_Extend_XenForo_ControllerPublic_Account extends XFCP_ThemeHouse_PayPalSandbox_Extend_XenForo_ControllerPublic_Account
{

    /**
     *
     * @see XenForo_ControllerPublic_Account::_getWrapper()
     */
    protected function _getWrapper($selectedGroup, $selectedLink, XenForo_ControllerResponse_View $subView)
    {
        if ($subView instanceof XenForo_ControllerResponse_View) {
            if (isset($subView->params['payPalUrl'])) {
                $sandboxUrl = XenForo_Application::get('options')->th_payPalSandbox_sandboxUrl;
                switch ($sandboxUrl) {
                    case 'none':
                        break;
                    case 'localhost':
                        $subView->params['payPalUrl'] = 'paypal_sandbox.php';
                        break;
                    case 'paypal':
                    default:
                        $subView->params['payPalUrl'] = 'https://www.sandbox.paypal.com/cgi-bin/websrc';
                        break;
                }
            }
        }

        return parent::_getWrapper($selectedGroup, $selectedLink, $subView);
    } /* END _getWrapper */
}