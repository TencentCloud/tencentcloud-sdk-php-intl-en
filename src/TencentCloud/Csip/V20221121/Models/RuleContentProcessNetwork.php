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
 * Content structure of process network rules for reverse shell allowlist scenarios. Filtering is supported by process matching combined with IP address or port.
 *
 * @method RuleContentProcessInfo getProcess() Obtain <p>Current process</p>
 * @method void setProcess(RuleContentProcessInfo $Process) Set <p>Current process</p>
 * @method string getDstIP() Obtain <p>Destination IP (required): enable individually IP/IP range/CIDR. Both IPv4 and IPv6 are supported.</p>
 * @method void setDstIP(string $DstIP) Set <p>Destination IP (required): enable individually IP/IP range/CIDR. Both IPv4 and IPv6 are supported.</p>
 * @method RuleContentProcessInfo getParentProcess() Obtain <p>Parent process</p>
 * @method void setParentProcess(RuleContentProcessInfo $ParentProcess) Set <p>Parent process</p>
 * @method array getDstPorts() Obtain <p>Destination port list (optional): supports 1-65535, being empty indicates no port limit</p>
 * @method void setDstPorts(array $DstPorts) Set <p>Destination port list (optional): supports 1-65535, being empty indicates no port limit</p>
 */
class RuleContentProcessNetwork extends AbstractModel
{
    /**
     * @var RuleContentProcessInfo <p>Current process</p>
     */
    public $Process;

    /**
     * @var string <p>Destination IP (required): enable individually IP/IP range/CIDR. Both IPv4 and IPv6 are supported.</p>
     */
    public $DstIP;

    /**
     * @var RuleContentProcessInfo <p>Parent process</p>
     */
    public $ParentProcess;

    /**
     * @var array <p>Destination port list (optional): supports 1-65535, being empty indicates no port limit</p>
     */
    public $DstPorts;

    /**
     * @param RuleContentProcessInfo $Process <p>Current process</p>
     * @param string $DstIP <p>Destination IP (required): enable individually IP/IP range/CIDR. Both IPv4 and IPv6 are supported.</p>
     * @param RuleContentProcessInfo $ParentProcess <p>Parent process</p>
     * @param array $DstPorts <p>Destination port list (optional): supports 1-65535, being empty indicates no port limit</p>
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
        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new RuleContentProcessInfo();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = new RuleContentProcessInfo();
            $this->ParentProcess->deserialize($param["ParentProcess"]);
        }

        if (array_key_exists("DstPorts",$param) and $param["DstPorts"] !== null) {
            $this->DstPorts = $param["DstPorts"];
        }
    }
}
