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
 * ACL target (IP/port) match rule
 *
 * @method array getDstIP() Obtain Target IP list
Input parameter limit: each item supports three formats: single IP address (for example, 10.0.0.1), CIDR block (for example, 10.0.0.1/24), and IP range (for example, 10.0.0.1-10.0.2.0).
 * @method void setDstIP(array $DstIP) Set Target IP list
Input parameter limit: each item supports three formats: single IP address (for example, 10.0.0.1), CIDR block (for example, 10.0.0.1/24), and IP range (for example, 10.0.0.1-10.0.2.0).
 * @method array getDstIPExcept() Obtain List of excluded target IPs
Input parameter limitations: The format is the same as that of DstIP.
 * @method void setDstIPExcept(array $DstIPExcept) Set List of excluded target IPs
Input parameter limitations: The format is the same as that of DstIP.
 * @method array getDstPort() Obtain Target port or port range
Input parameter limit: single port, for example, 80; port range, for example, 8000-9000.
 * @method void setDstPort(array $DstPort) Set Target port or port range
Input parameter limit: single port, for example, 80; port range, for example, 8000-9000.
 * @method array getDstPortExcept() Obtain Excluded target port list
Input parameter limitations: The format is the same as that of DstPort.
 * @method void setDstPortExcept(array $DstPortExcept) Set Excluded target port list
Input parameter limitations: The format is the same as that of DstPort.
 */
class TrafficSandboxACLDstRule extends AbstractModel
{
    /**
     * @var array Target IP list
Input parameter limit: each item supports three formats: single IP address (for example, 10.0.0.1), CIDR block (for example, 10.0.0.1/24), and IP range (for example, 10.0.0.1-10.0.2.0).
     */
    public $DstIP;

    /**
     * @var array List of excluded target IPs
Input parameter limitations: The format is the same as that of DstIP.
     */
    public $DstIPExcept;

    /**
     * @var array Target port or port range
Input parameter limit: single port, for example, 80; port range, for example, 8000-9000.
     */
    public $DstPort;

    /**
     * @var array Excluded target port list
Input parameter limitations: The format is the same as that of DstPort.
     */
    public $DstPortExcept;

    /**
     * @param array $DstIP Target IP list
Input parameter limit: each item supports three formats: single IP address (for example, 10.0.0.1), CIDR block (for example, 10.0.0.1/24), and IP range (for example, 10.0.0.1-10.0.2.0).
     * @param array $DstIPExcept List of excluded target IPs
Input parameter limitations: The format is the same as that of DstIP.
     * @param array $DstPort Target port or port range
Input parameter limit: single port, for example, 80; port range, for example, 8000-9000.
     * @param array $DstPortExcept Excluded target port list
Input parameter limitations: The format is the same as that of DstPort.
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
        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("DstIPExcept",$param) and $param["DstIPExcept"] !== null) {
            $this->DstIPExcept = $param["DstIPExcept"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("DstPortExcept",$param) and $param["DstPortExcept"] !== null) {
            $this->DstPortExcept = $param["DstPortExcept"];
        }
    }
}
