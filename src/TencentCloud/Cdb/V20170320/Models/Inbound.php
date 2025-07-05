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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group inbound rule
 *
 * @method string getAction() Obtain Policy, which can be ACCEPT or DROP
 * @method void setAction(string $Action) Set Policy, which can be ACCEPT or DROP
 * @method string getCidrIp() Obtain Source IP or IP range, such as 192.168.0.0/16
 * @method void setCidrIp(string $CidrIp) Set Source IP or IP range, such as 192.168.0.0/16
 * @method string getPortRange() Obtain Port
 * @method void setPortRange(string $PortRange) Set Port
 * @method string getIpProtocol() Obtain Network protocol. UDP and TCP are supported.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol. UDP and TCP are supported.
 * @method string getDir() Obtain The direction of the rule, which is INPUT for inbound rules
 * @method void setDir(string $Dir) Set The direction of the rule, which is INPUT for inbound rules
 * @method string getAddressModule() Obtain Address module
 * @method void setAddressModule(string $AddressModule) Set Address module
 * @method string getDesc() Obtain Rule description
 * @method void setDesc(string $Desc) Set Rule description
 */
class Inbound extends AbstractModel
{
    /**
     * @var string Policy, which can be ACCEPT or DROP
     */
    public $Action;

    /**
     * @var string Source IP or IP range, such as 192.168.0.0/16
     */
    public $CidrIp;

    /**
     * @var string Port
     */
    public $PortRange;

    /**
     * @var string Network protocol. UDP and TCP are supported.
     */
    public $IpProtocol;

    /**
     * @var string The direction of the rule, which is INPUT for inbound rules
     */
    public $Dir;

    /**
     * @var string Address module
     */
    public $AddressModule;

    /**
     * @var string Rule description
     */
    public $Desc;

    /**
     * @param string $Action Policy, which can be ACCEPT or DROP
     * @param string $CidrIp Source IP or IP range, such as 192.168.0.0/16
     * @param string $PortRange Port
     * @param string $IpProtocol Network protocol. UDP and TCP are supported.
     * @param string $Dir The direction of the rule, which is INPUT for inbound rules
     * @param string $AddressModule Address module
     * @param string $Desc Rule description
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
