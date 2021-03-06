<?php

namespace Pagekit\System\Link;

use Pagekit\Application as App;

class System implements LinkInterface
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'system';
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return __('System');
    }

    /**
     * {@inheritdoc}
     */
    public function accept($route)
    {
        return in_array($route, array_keys($this->getRoutes()));
    }

    /**
     * {@inheritdoc}
     */
    public function renderForm($link, $params = [], $context = '')
    {
        $routes = $this->getRoutes();

        if (in_array($context, ['frontpage', 'urlalias'])) {
            unset($routes['/']);
        }

        return App::view('system:views/admin/link/system.razr', compact('link', 'params', 'routes'));
    }

    protected function getRoutes()
    {
        return [
            '/'                     => __('Frontpage'),
            '@user/auth/login'    => __('User Login'),
            '@user/auth/logout'   => __('User Logout'),
            '@user/registration'  => __('User Registration'),
            '@user/profile'       => __('User Profile'),
            '@user/resetpassword' => __('User Password Reset')
        ];
    }
}
