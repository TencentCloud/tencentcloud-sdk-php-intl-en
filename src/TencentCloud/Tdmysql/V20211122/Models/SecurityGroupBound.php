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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Inbound and outbound rules.
 *
 * @method string getCidrIp() Obtain Source IP or IP range, such as 192.168.0.0/16.
 * @method void setCidrIp(string $CidrIp) Set Source IP or IP range, such as 192.168.0.0/16.
 * @method string getAction() Obtain Policy, ACCEPT or DROP.
 * @method void setAction(string $Action) Set Policy, ACCEPT or DROP.
 * @method string getPortRange() Obtain Port.
 * @method void setPortRange(string $PortRange) Set Port.
 * @method string getIpProtocol() Obtain Network protocol, supports UDP, TCP.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol, supports UDP, TCP.
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string Source IP or IP range, such as 192.168.0.0/16.
     */
    public $CidrIp;

    /**
     * @var string Policy, ACCEPT or DROP.
     */
    public $Action;

    /**
     * @var string Port.
     */
    public $PortRange;

    /**
     * @var string Network protocol, supports UDP, TCP.
     */
    public $IpProtocol;

    /**
     * @param string $CidrIp Source IP or IP range, such as 192.168.0.0/16.
     * @param string $Action Policy, ACCEPT or DROP.
     * @param string $PortRange Port.
     * @param string $IpProtocol Network protocol, supports UDP, TCP.
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
        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }
    }
}
