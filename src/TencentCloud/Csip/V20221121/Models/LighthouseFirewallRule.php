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
 * Firewall rules of a lightweight application server
 *
 * @method string getAppType() Obtain <p>Application type.</p>
 * @method void setAppType(string $AppType) Set <p>Application type.</p>
 * @method string getProtocol() Obtain <p>Protocol</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol</p>
 * @method string getPort() Obtain <p>Port</p>
 * @method void setPort(string $Port) Set <p>Port</p>
 * @method string getCidrBlock() Obtain <p>Address</p>
 * @method void setCidrBlock(string $CidrBlock) Set <p>Address</p>
 * @method string getIpv6CidrBlock() Obtain <p>ipv6 address</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set <p>ipv6 address</p>
 * @method string getAction() Obtain <p>Status.</p>
 * @method void setAction(string $Action) Set <p>Status.</p>
 * @method string getFirewallRuleDescription() Obtain <p>Description.</p>
 * @method void setFirewallRuleDescription(string $FirewallRuleDescription) Set <p>Description.</p>
 */
class LighthouseFirewallRule extends AbstractModel
{
    /**
     * @var string <p>Application type.</p>
     */
    public $AppType;

    /**
     * @var string <p>Protocol</p>
     */
    public $Protocol;

    /**
     * @var string <p>Port</p>
     */
    public $Port;

    /**
     * @var string <p>Address</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>ipv6 address</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>Status.</p>
     */
    public $Action;

    /**
     * @var string <p>Description.</p>
     */
    public $FirewallRuleDescription;

    /**
     * @param string $AppType <p>Application type.</p>
     * @param string $Protocol <p>Protocol</p>
     * @param string $Port <p>Port</p>
     * @param string $CidrBlock <p>Address</p>
     * @param string $Ipv6CidrBlock <p>ipv6 address</p>
     * @param string $Action <p>Status.</p>
     * @param string $FirewallRuleDescription <p>Description.</p>
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FirewallRuleDescription",$param) and $param["FirewallRuleDescription"] !== null) {
            $this->FirewallRuleDescription = $param["FirewallRuleDescription"];
        }
    }
}
