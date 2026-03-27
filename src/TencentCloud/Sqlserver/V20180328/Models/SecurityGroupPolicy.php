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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security Group Policy
 *
 * @method string getAction() Obtain Policy, ACCEPT or DROP
 * @method void setAction(string $Action) Set Policy, ACCEPT or DROP
 * @method string getCidrIp() Obtain Destination IP or IP range, for example 172.16.0.0/12
 * @method void setCidrIp(string $CidrIp) Set Destination IP or IP range, for example 172.16.0.0/12
 * @method string getPortRange() Obtain port or port range
 * @method void setPortRange(string $PortRange) Set port or port range
 * @method string getIpProtocol() Obtain Network protocol supports UDP, TCP, etc.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol supports UDP, TCP, etc.
 * @method string getDir() Obtain Rule direction, OUTPUT - Outbound Rules, INPUT - Inbound Rules
 * @method void setDir(string $Dir) Set Rule direction, OUTPUT - Outbound Rules, INPUT - Inbound Rules
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var string Policy, ACCEPT or DROP
     */
    public $Action;

    /**
     * @var string Destination IP or IP range, for example 172.16.0.0/12
     */
    public $CidrIp;

    /**
     * @var string port or port range
     */
    public $PortRange;

    /**
     * @var string Network protocol supports UDP, TCP, etc.
     */
    public $IpProtocol;

    /**
     * @var string Rule direction, OUTPUT - Outbound Rules, INPUT - Inbound Rules
     */
    public $Dir;

    /**
     * @param string $Action Policy, ACCEPT or DROP
     * @param string $CidrIp Destination IP or IP range, for example 172.16.0.0/12
     * @param string $PortRange port or port range
     * @param string $IpProtocol Network protocol supports UDP, TCP, etc.
     * @param string $Dir Rule direction, OUTPUT - Outbound Rules, INPUT - Inbound Rules
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
    }
}
