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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group outbound rule
 *
 * @method string getAction() Obtain Policy. Valid values: ACCEPT, DROP.
 * @method void setAction(string $Action) Set Policy. Valid values: ACCEPT, DROP.
 * @method string getAddressModule() Obtain All the addresses that the address group ID represents.
 * @method void setAddressModule(string $AddressModule) Set All the addresses that the address group ID represents.
 * @method string getCidrIp() Obtain Source IP or IP address range, such as 192.168.0.0/16.
 * @method void setCidrIp(string $CidrIp) Set Source IP or IP address range, such as 192.168.0.0/16.
 * @method string getDesc() Obtain Description.
 * @method void setDesc(string $Desc) Set Description.
 * @method string getIpProtocol() Obtain Network protocol, such as UDP and TCP.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol, such as UDP and TCP.
 * @method string getPortRange() Obtain Port.
 * @method void setPortRange(string $PortRange) Set Port.
 * @method string getServiceModule() Obtain All the protocols and ports that the service group ID represents.
 * @method void setServiceModule(string $ServiceModule) Set All the protocols and ports that the service group ID represents.
 * @method string getId() Obtain All the addresses that the security group ID represents.
 * @method void setId(string $Id) Set All the addresses that the security group ID represents.
 */
class Outbound extends AbstractModel
{
    /**
     * @var string Policy. Valid values: ACCEPT, DROP.
     */
    public $Action;

    /**
     * @var string All the addresses that the address group ID represents.
     */
    public $AddressModule;

    /**
     * @var string Source IP or IP address range, such as 192.168.0.0/16.
     */
    public $CidrIp;

    /**
     * @var string Description.
     */
    public $Desc;

    /**
     * @var string Network protocol, such as UDP and TCP.
     */
    public $IpProtocol;

    /**
     * @var string Port.
     */
    public $PortRange;

    /**
     * @var string All the protocols and ports that the service group ID represents.
     */
    public $ServiceModule;

    /**
     * @var string All the addresses that the security group ID represents.
     */
    public $Id;

    /**
     * @param string $Action Policy. Valid values: ACCEPT, DROP.
     * @param string $AddressModule All the addresses that the address group ID represents.
     * @param string $CidrIp Source IP or IP address range, such as 192.168.0.0/16.
     * @param string $Desc Description.
     * @param string $IpProtocol Network protocol, such as UDP and TCP.
     * @param string $PortRange Port.
     * @param string $ServiceModule All the protocols and ports that the service group ID represents.
     * @param string $Id All the addresses that the security group ID represents.
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

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
