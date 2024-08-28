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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorize binding details
 *
 * @method string getMachineName() Obtain Machine Alias
 * @method void setMachineName(string $MachineName) Set Machine Alias
 * @method string getMachineWanIp() Obtain Machine Public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Machine Public IP address
 * @method string getMachineIp() Obtain Machine Private IP address
 * @method void setMachineIp(string $MachineIp) Set Machine Private IP address
 * @method string getQuuid() Obtain CVM UUID
 * @method void setQuuid(string $Quuid) Set CVM UUID
 * @method string getUuid() Obtain CWPP client UUID
 * @method void setUuid(string $Uuid) Set CWPP client UUID
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 * @method string getAgentStatus() Obtain CWPP client status: OFFLINE, ONLINE, and UNINSTALL.
 * @method void setAgentStatus(string $AgentStatus) Set CWPP client status: OFFLINE, ONLINE, and UNINSTALL.
 * @method boolean getIsUnBind() Obtain Whether unbinding is allowed: false - unbinding is not allowed.
 * @method void setIsUnBind(boolean $IsUnBind) Set Whether unbinding is allowed: false - unbinding is not allowed.
 * @method boolean getIsSwitchBind() Obtain Whether rebinding is allowed: false - rebinding is not allowed.
 * @method void setIsSwitchBind(boolean $IsSwitchBind) Set Whether rebinding is allowed: false - rebinding is not allowed.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LicenseBindDetail extends AbstractModel
{
    /**
     * @var string Machine Alias
     */
    public $MachineName;

    /**
     * @var string Machine Public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Machine Private IP address
     */
    public $MachineIp;

    /**
     * @var string CVM UUID
     */
    public $Quuid;

    /**
     * @var string CWPP client UUID
     */
    public $Uuid;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @var string CWPP client status: OFFLINE, ONLINE, and UNINSTALL.
     */
    public $AgentStatus;

    /**
     * @var boolean Whether unbinding is allowed: false - unbinding is not allowed.
     */
    public $IsUnBind;

    /**
     * @var boolean Whether rebinding is allowed: false - rebinding is not allowed.
     */
    public $IsSwitchBind;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineName Machine Alias
     * @param string $MachineWanIp Machine Public IP address
     * @param string $MachineIp Machine Private IP address
     * @param string $Quuid CVM UUID
     * @param string $Uuid CWPP client UUID
     * @param array $Tags Tag information
     * @param string $AgentStatus CWPP client status: OFFLINE, ONLINE, and UNINSTALL.
     * @param boolean $IsUnBind Whether unbinding is allowed: false - unbinding is not allowed.
     * @param boolean $IsSwitchBind Whether rebinding is allowed: false - rebinding is not allowed.
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("IsUnBind",$param) and $param["IsUnBind"] !== null) {
            $this->IsUnBind = $param["IsUnBind"];
        }

        if (array_key_exists("IsSwitchBind",$param) and $param["IsSwitchBind"] !== null) {
            $this->IsSwitchBind = $param["IsSwitchBind"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
