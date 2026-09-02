<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNAT rule
 *
 * @method string getIpProtocol() Obtain <p>IP protocol</p>
 * @method void setIpProtocol(string $IpProtocol) Set <p>IP protocol</p>
 * @method string getPublicIpAddress() Obtain <p>Public IP address.</p>
 * @method void setPublicIpAddress(string $PublicIpAddress) Set <p>Public IP address.</p>
 * @method integer getPublicPort() Obtain <p>Public network port</p>
 * @method void setPublicPort(integer $PublicPort) Set <p>Public network port</p>
 * @method string getPrivateIpAddress() Obtain <p>Private IP address.</p>
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set <p>Private IP address.</p>
 * @method integer getPrivatePort() Obtain <p>Private network port</p>
 * @method void setPrivatePort(integer $PrivatePort) Set <p>Private network port</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 */
class NatDnatRuleItem extends AbstractModel
{
    /**
     * @var string <p>IP protocol</p>
     */
    public $IpProtocol;

    /**
     * @var string <p>Public IP address.</p>
     */
    public $PublicIpAddress;

    /**
     * @var integer <p>Public network port</p>
     */
    public $PublicPort;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIpAddress;

    /**
     * @var integer <p>Private network port</p>
     */
    public $PrivatePort;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @param string $IpProtocol <p>IP protocol</p>
     * @param string $PublicIpAddress <p>Public IP address.</p>
     * @param integer $PublicPort <p>Public network port</p>
     * @param string $PrivateIpAddress <p>Private IP address.</p>
     * @param integer $PrivatePort <p>Private network port</p>
     * @param string $Description <p>Description.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
