<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group rule
 *
 * @method string getAction() Obtain Policy, which can be `ACCEPT` or `DROP`
 * @method void setAction(string $Action) Set Policy, which can be `ACCEPT` or `DROP`
 * @method string getCidrIp() Obtain Source IP or source IP range, such as 192.168.0.0/16
 * @method void setCidrIp(string $CidrIp) Set Source IP or source IP range, such as 192.168.0.0/16
 * @method string getPortRange() Obtain Port
 * @method void setPortRange(string $PortRange) Set Port
 * @method string getIpProtocol() Obtain Network protocol, such as UDP and TCP
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol, such as UDP and TCP
 * @method string getServiceModule() Obtain Protocol port ID or protocol port group ID.
 * @method void setServiceModule(string $ServiceModule) Set Protocol port ID or protocol port group ID.
 * @method string getAddressModule() Obtain IP address ID or IP address group ID.
 * @method void setAddressModule(string $AddressModule) Set IP address ID or IP address group ID.
 * @method string getId() Obtain id
 * @method void setId(string $Id) Set id
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 */
class PolicyRule extends AbstractModel
{
    /**
     * @var string Policy, which can be `ACCEPT` or `DROP`
     */
    public $Action;

    /**
     * @var string Source IP or source IP range, such as 192.168.0.0/16
     */
    public $CidrIp;

    /**
     * @var string Port
     */
    public $PortRange;

    /**
     * @var string Network protocol, such as UDP and TCP
     */
    public $IpProtocol;

    /**
     * @var string Protocol port ID or protocol port group ID.
     */
    public $ServiceModule;

    /**
     * @var string IP address ID or IP address group ID.
     */
    public $AddressModule;

    /**
     * @var string id
     */
    public $Id;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @param string $Action Policy, which can be `ACCEPT` or `DROP`
     * @param string $CidrIp Source IP or source IP range, such as 192.168.0.0/16
     * @param string $PortRange Port
     * @param string $IpProtocol Network protocol, such as UDP and TCP
     * @param string $ServiceModule Protocol port ID or protocol port group ID.
     * @param string $AddressModule IP address ID or IP address group ID.
     * @param string $Id id
     * @param string $Desc Description
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

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
