<?php

class ThemeHouse_PayPalSandbox_UserUpgradeProcessor_PayPal extends XenForo_UserUpgradeProcessor_PayPal
{

    /**
     *
     * @see XenForo_UserUpgradeProcessor_PayPal::initCallbackHandling()
     */
    public function initCallbackHandling(Zend_Controller_Request_Http $request)
    {
        $this->_request = $request;
        $this->_input = new XenForo_Input($request);

        $input = $this->_input->filter(
            array(
                'cmd' => XenForo_Input::STRING,
                'currency_code' => XenForo_Input::STRING
            ));

        $this->_request->setParams(
            array(
                'receiver_email' => 'random@email.address',
                'payment_status' => 'Completed',
                'txn_id' => uniqid('', true)
            ));

        switch ($input['cmd']) {
            case '_xclick-subscriptions':
                $this->_request->setParams(
                    array(
                        'txn_type' => 'subscr_payment',
                        'mc_currency' => $input['currency_code'],
                        'mc_gross' => $this->_input->filterSingle('a3', XenForo_Input::UNUM)
                    ));
                break;
            case '_xclick':
            default:
                $this->_request->setParams(
                    array(
                        'txn_type' => 'web_accept',
                        'mc_currency' => $input['currency_code'],
                        'mc_gross' => $this->_input->filterSingle('amount', XenForo_Input::UNUM)
                    ));
                break;
        }

        parent::initCallbackHandling($request);
    } /* END initCallbackHandling */

    /**
     *
     * @see XenForo_UserUpgradeProcessor_PayPal::validateRequest()
     */
    public function validateRequest(&$errorString)
    {
        if (strtolower($this->_filtered['business']) !=
             trim(strtolower(XenForo_Application::get('options')->payPalPrimaryAccount)) && strtolower(
                $this->_filtered['receiver_email']) !=
             trim(strtolower(XenForo_Application::get('options')->payPalPrimaryAccount))) {
            $errorString = 'Invalid business or receiver_email';
            return false;
        }

        return true;
    } /* END validateRequest */
}