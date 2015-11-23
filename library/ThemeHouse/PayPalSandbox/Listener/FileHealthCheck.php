<?php

class ThemeHouse_PayPalSandbox_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/PayPalSandbox/ControllerPublic/PayPalSandbox.php' => '211cce717c05af09e67024a9732641f7',
                'library/ThemeHouse/PayPalSandbox/Extend/XenForo/ControllerPublic/Account.php' => '9cb49bf1fdc8435e8e34d2603ea56b21',
                'library/ThemeHouse/PayPalSandbox/Install/Controller.php' => 'd92a3732e0dfe947a09e258138df0a8a',
                'library/ThemeHouse/PayPalSandbox/Listener/LoadClass.php' => 'd1372ea19143df9ce5fbd4cdd0f29e6c',
                'library/ThemeHouse/PayPalSandbox/Route/Prefix/PayPalSandbox.php' => '6cb484cc500151bc06aee2a600c9f5f1',
                'library/ThemeHouse/PayPalSandbox/UserUpgradeProcessor/PayPal.php' => '495e5a64dbcb03edb253e09ccf961261',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}