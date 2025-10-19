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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group rule
 *
 * @method string getAction() Obtain Execution policy.
- ACCEPT: allow. Access requests for the port can be released.
- DROP: reject. Data packets are discarded without any response.
 * @method void setAction(string $Action) Set Execution policy.
- ACCEPT: allow. Access requests for the port can be released.
- DROP: reject. Data packets are discarded without any response.
 * @method string getCidrIp() Obtain Inbound IP address or IP range for database access.
 * @method void setCidrIp(string $CidrIp) Set Inbound IP address or IP range for database access.
 * @method string getPortRange() Obtain Port for database access.
 * @method void setPortRange(string $PortRange) Set Port for database access.
 * @method string getIpProtocol() Obtain Transport layer protocol: TCP.
 * @method void setIpProtocol(string $IpProtocol) Set Transport layer protocol: TCP.
 * @method string getId() Obtain Security group ID.
 * @method void setId(string $Id) Set Security group ID.
 * @method string getAddressModule() Obtain Parameter template ID for the IP address or IP address group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/ip) to obtain the parameter template IP address details.
 * @method void setAddressModule(string $AddressModule) Set Parameter template ID for the IP address or IP address group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/ip) to obtain the parameter template IP address details.
 * @method string getServiceModule() Obtain Parameter template ID for the protocol port or protocol port group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/protoport) to obtain the parameter template protocol port details.
 * @method void setServiceModule(string $ServiceModule) Set Parameter template ID for the protocol port or protocol port group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/protoport) to obtain the parameter template protocol port details.
 * @method string getDesc() Obtain Security group description information.
 * @method void setDesc(string $Desc) Set Security group description information.
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string Execution policy.
- ACCEPT: allow. Access requests for the port can be released.
- DROP: reject. Data packets are discarded without any response.
     */
    public $Action;

    /**
     * @var string Inbound IP address or IP range for database access.
     */
    public $CidrIp;

    /**
     * @var string Port for database access.
     */
    public $PortRange;

    /**
     * @var string Transport layer protocol: TCP.
     */
    public $IpProtocol;

    /**
     * @var string Security group ID.
     */
    public $Id;

    /**
     * @var string Parameter template ID for the IP address or IP address group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/ip) to obtain the parameter template IP address details.
     */
    public $AddressModule;

    /**
     * @var string Parameter template ID for the protocol port or protocol port group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/protoport) to obtain the parameter template protocol port details.
     */
    public $ServiceModule;

    /**
     * @var string Security group description information.
     */
    public $Desc;

    /**
     * @param string $Action Execution policy.
- ACCEPT: allow. Access requests for the port can be released.
- DROP: reject. Data packets are discarded without any response.
     * @param string $CidrIp Inbound IP address or IP range for database access.
     * @param string $PortRange Port for database access.
     * @param string $IpProtocol Transport layer protocol: TCP.
     * @param string $Id Security group ID.
     * @param string $AddressModule Parameter template ID for the IP address or IP address group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/ip) to obtain the parameter template IP address details.
     * @param string $ServiceModule Parameter template ID for the protocol port or protocol port group. Log in to the [parameter template console](https://console.cloud.tencent.com/vpc/template/protoport) to obtain the parameter template protocol port details.
     * @param string $Desc Security group description information.
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
