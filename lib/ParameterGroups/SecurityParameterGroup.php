<?php

namespace Heidelpay\PhpApi\ParameterGroups;

/**
 * This class provides authentification parameters
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
class SecurityParameterGroup extends AbstractParameterGroup
{
    /**
     * SecuritySender
     *
     * This parameter is the main authentification parameter
     *
     * @var string sender (mandatory)
     */
    public $sender = null;

    /**
     * SecuritySender getter
     *
     * @return string sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Setter for the security sender parameter
     *
     * This is one of the main authentication parameter
     *
     * @param string $sender authentication parameter f.e. 31HA07BC8142C5A171745D00AD63D182
     *
     * @return \Heidelpay\PhpApi\ParameterGroups\SecurityParameterGroup
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }
}
