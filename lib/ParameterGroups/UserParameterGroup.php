<?php

namespace Heidelpay\PhpApi\ParameterGroups;

/**
 * This classe provides authentification parameter for the payment api
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  https://dev.heidelpay.de/PhpApi
 *
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class UserParameterGroup extends AbstractParameterGroup
{
    /**
     * UserLogin
     *
     *
     * @var string login (mandatory)
     */
    public $login = null;

    /**
     * UserPwd
     *
     * The Passwort of the payment account
     *
     * @var string pwd (mandatory)
     */
    public $pwd = null;

    /**
     * user login getter
     *
     * @return string login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     *  user password getter
     *
     * @return string password
     */
    public function getPassword()
    {
        return $this->pwd;
    }

    /**
     * Setter for the user login parameter
     *
     * This is one of the main authentication parameter
     *
     * @param string $login user login f.e 31ha07bc8142c5a171744e5aef11ffd3
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\UserParameterGroup
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Setter for the user password parameter
     *
     * This is one of the main authentication parameter
     *
     * @param string $pwd user password parameter f.e. DAJapaewa434
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\UserParameterGroup
     */
    public function setPassword($pwd)
    {
        $this->pwd = $pwd;
        return $this;
    }
}
