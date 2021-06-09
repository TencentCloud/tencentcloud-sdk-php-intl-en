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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group rule
 *
 * @method string getAction() Obtain Execution rule. Valid values: `ACCEPT`, `DROP`
 * @method void setAction(string $Action) Set Execution rule. Valid values: `ACCEPT`, `DROP`
 * @method string getCidrIp() Obtain IP range
 * @method void setCidrIp(string $CidrIp) Set IP range
 * @method string getPortRange() Obtain Port range
 * @method void setPortRange(string $PortRange) Set Port range
 * @method string getIpProtocol() Obtain Transport layer protocol. Valid values: `tcp`, `udp`, `ALL`
 * @method void setIpProtocol(string $IpProtocol) Set Transport layer protocol. Valid values: `tcp`, `udp`, `ALL`
 * @method string getId() Obtain All the addresses that the security group ID represents
 * @method void setId(string $Id) Set All the addresses that the security group ID represents
 * @method string getAddressModule() Obtain All the addresses that the address group ID represents
 * @method void setAddressModule(string $AddressModule) Set All the addresses that the address group ID represents
 * @method string getServiceModule() Obtain All the protocols and ports that the service group ID represents
 * @method void setServiceModule(string $ServiceModule) Set All the protocols and ports that the service group ID represents
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string Execution rule. Valid values: `ACCEPT`, `DROP`
     */
    public $Action;

    /**
     * @var string IP range
     */
    public $CidrIp;

    /**
     * @var string Port range
     */
    public $PortRange;

    /**
     * @var string Transport layer protocol. Valid values: `tcp`, `udp`, `ALL`
     */
    public $IpProtocol;

    /**
     * @var string All the addresses that the security group ID represents
     */
    public $Id;

    /**
     * @var string All the addresses that the address group ID represents
     */
    public $AddressModule;

    /**
     * @var string All the protocols and ports that the service group ID represents
     */
    public $ServiceModule;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @param string $Action Execution rule. Valid values: `ACCEPT`, `DROP`
     * @param string $CidrIp IP range
     * @param string $PortRange Port range
     * @param string $IpProtocol Transport layer protocol. Valid values: `tcp`, `udp`, `ALL`
     * @param string $Id All the addresses that the security group ID represents
     * @param string $AddressModule All the addresses that the address group ID represents
     * @param string $ServiceModule All the protocols and ports that the service group ID represents
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
