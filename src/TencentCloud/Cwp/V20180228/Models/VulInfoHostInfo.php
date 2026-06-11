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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Fix vulnerability second popup in batch
 *
 * @method string getHostName() Obtain host name
 * @method void setHostName(string $HostName) Set host name
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method array getTags() Obtain Host tag
 * @method void setTags(array $Tags) Set Host tag
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getIsSupportAutoFix() Obtain 0: Vulnerability cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Manual fixing supported for non-flagship hosts, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: Detecting, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not linux.
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) Set 0: Vulnerability cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Manual fixing supported for non-flagship hosts, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: Detecting, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not linux.
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getInstanceId() Obtain Host instance ID.
 * @method void setInstanceId(string $InstanceId) Set Host instance ID.
 * @method string getMachineType() Obtain Host type
 * @method void setMachineType(string $MachineType) Set Host type
 * @method integer getAgentStatus() Obtain agent online status; 0 for offline, 1 for online.
 * @method void setAgentStatus(integer $AgentStatus) Set agent online status; 0 for offline, 1 for online.
 */
class VulInfoHostInfo extends AbstractModel
{
    /**
     * @var string host name
     */
    public $HostName;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var array Host tag
     */
    public $Tags;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer 0: Vulnerability cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Manual fixing supported for non-flagship hosts, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: Detecting, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not linux.
     */
    public $IsSupportAutoFix;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host instance ID.
     */
    public $InstanceId;

    /**
     * @var string Host type
     */
    public $MachineType;

    /**
     * @var integer agent online status; 0 for offline, 1 for online.
     */
    public $AgentStatus;

    /**
     * @param string $HostName host name
     * @param string $HostIp Host IP address
     * @param array $Tags Host tag
     * @param string $Quuid Host QUUID
     * @param integer $IsSupportAutoFix 0: Vulnerability cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Manual fixing supported for non-flagship hosts, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: Detecting, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not linux.
     * @param string $Uuid Host UUID
     * @param string $InstanceId Host instance ID.
     * @param string $MachineType Host type
     * @param integer $AgentStatus agent online status; 0 for offline, 1 for online.
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsSupportAutoFix",$param) and $param["IsSupportAutoFix"] !== null) {
            $this->IsSupportAutoFix = $param["IsSupportAutoFix"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }
    }
}
