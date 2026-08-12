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
 * Fixable host information
 *
 * @method array getVulIds() Obtain <p>Vulnerability ID list, grouped by SupportAutoFix dimension: repairable vulnerability IDs when SupportAutoFix=1, non-repairable vulnerability IDs when SupportAutoFix=0</p>
 * @method void setVulIds(array $VulIds) Set <p>Vulnerability ID list, grouped by SupportAutoFix dimension: repairable vulnerability IDs when SupportAutoFix=1, non-repairable vulnerability IDs when SupportAutoFix=0</p>
 * @method string getInstanceId() Obtain <p>Host instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Host instance ID.</p>
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getMachineIp() Obtain <p>Host IP address.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Host IP address.</p>
 * @method string getPublicIp() Obtain <p>public IP address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>public IP address</p>
 * @method string getOsType() Obtain <p>OS type<br>Enumeration value:<br>linux: Linux operating system<br>windows: Windows operating system</p>
 * @method void setOsType(string $OsType) Set <p>OS type<br>Enumeration value:<br>linux: Linux operating system<br>windows: Windows operating system</p>
 * @method string getOsName() Obtain <p>Operating system name.</p>
 * @method void setOsName(string $OsName) Set <p>Operating system name.</p>
 * @method string getMachineStatus() Obtain <p>Host online status<br>Enumeration value:<br>ONLINE: online<br>OFFLINE: offline</p>
 * @method void setMachineStatus(string $MachineStatus) Set <p>Host online status<br>Enumeration value:<br>ONLINE: online<br>OFFLINE: offline</p>
 * @method integer getSupportAutoFix() Obtain <p>Is auto-repair supported<br>Enumeration value:<br>0: No support<br>1: Support</p>
 * @method void setSupportAutoFix(integer $SupportAutoFix) Set <p>Is auto-repair supported<br>Enumeration value:<br>0: No support<br>1: Support</p>
 * @method integer getFixStatus() Obtain <p>Current remediation status<br>Enumeration value:<br>0: Unfixed<br>1: In remediation<br>2: Fix failure<br>3: Repair successful<br>4: Timeout</p>
 * @method void setFixStatus(integer $FixStatus) Set <p>Current remediation status<br>Enumeration value:<br>0: Unfixed<br>1: In remediation<br>2: Fix failure<br>3: Repair successful<br>4: Timeout</p>
 * @method string getLatestFixTime() Obtain <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setLatestFixTime(string $LatestFixTime) Set <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getNotFixableReason() Obtain <p>Non-repairable reason. Returned when SupportAutoFix is 0.</p>
 * @method void setNotFixableReason(string $NotFixableReason) Set <p>Non-repairable reason. Returned when SupportAutoFix is 0.</p>
 * @method array getFixCommands() Obtain <p>Fix command list, returned when SupportAutoFix is 1</p>
 * @method void setFixCommands(array $FixCommands) Set <p>Fix command list, returned when SupportAutoFix is 1</p>
 * @method array getComponents() Obtain <p>Associated component list</p>
 * @method void setComponents(array $Components) Set <p>Associated component list</p>
 * @method array getTagItems() Obtain <p>Asset tag list</p>
 * @method void setTagItems(array $TagItems) Set <p>Asset tag list</p>
 * @method integer getAppId() Obtain <p>Account AppId</p>
 * @method void setAppId(integer $AppId) Set <p>Account AppId</p>
 * @method string getPayVersion() Obtain <p>Paid edition info<br>Enumeration value:<br>BASIC: Basic version<br>PRO: Pro edition<br>ULTIMATE: Flagship edition</p>
 * @method void setPayVersion(string $PayVersion) Set <p>Paid edition info<br>Enumeration value:<br>BASIC: Basic version<br>PRO: Pro edition<br>ULTIMATE: Flagship edition</p>
 */
class VulFixableMachineItem extends AbstractModel
{
    /**
     * @var array <p>Vulnerability ID list, grouped by SupportAutoFix dimension: repairable vulnerability IDs when SupportAutoFix=1, non-repairable vulnerability IDs when SupportAutoFix=0</p>
     */
    public $VulIds;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Host name.</p>
     */
    public $MachineName;

    /**
     * @var string <p>Host IP address.</p>
     */
    public $MachineIp;

    /**
     * @var string <p>public IP address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>OS type<br>Enumeration value:<br>linux: Linux operating system<br>windows: Windows operating system</p>
     */
    public $OsType;

    /**
     * @var string <p>Operating system name.</p>
     */
    public $OsName;

    /**
     * @var string <p>Host online status<br>Enumeration value:<br>ONLINE: online<br>OFFLINE: offline</p>
     */
    public $MachineStatus;

    /**
     * @var integer <p>Is auto-repair supported<br>Enumeration value:<br>0: No support<br>1: Support</p>
     */
    public $SupportAutoFix;

    /**
     * @var integer <p>Current remediation status<br>Enumeration value:<br>0: Unfixed<br>1: In remediation<br>2: Fix failure<br>3: Repair successful<br>4: Timeout</p>
     */
    public $FixStatus;

    /**
     * @var string <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $LatestFixTime;

    /**
     * @var string <p>Non-repairable reason. Returned when SupportAutoFix is 0.</p>
     */
    public $NotFixableReason;

    /**
     * @var array <p>Fix command list, returned when SupportAutoFix is 1</p>
     */
    public $FixCommands;

    /**
     * @var array <p>Associated component list</p>
     */
    public $Components;

    /**
     * @var array <p>Asset tag list</p>
     */
    public $TagItems;

    /**
     * @var integer <p>Account AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Paid edition info<br>Enumeration value:<br>BASIC: Basic version<br>PRO: Pro edition<br>ULTIMATE: Flagship edition</p>
     */
    public $PayVersion;

    /**
     * @param array $VulIds <p>Vulnerability ID list, grouped by SupportAutoFix dimension: repairable vulnerability IDs when SupportAutoFix=1, non-repairable vulnerability IDs when SupportAutoFix=0</p>
     * @param string $InstanceId <p>Host instance ID.</p>
     * @param string $MachineName <p>Host name.</p>
     * @param string $MachineIp <p>Host IP address.</p>
     * @param string $PublicIp <p>public IP address</p>
     * @param string $OsType <p>OS type<br>Enumeration value:<br>linux: Linux operating system<br>windows: Windows operating system</p>
     * @param string $OsName <p>Operating system name.</p>
     * @param string $MachineStatus <p>Host online status<br>Enumeration value:<br>ONLINE: online<br>OFFLINE: offline</p>
     * @param integer $SupportAutoFix <p>Is auto-repair supported<br>Enumeration value:<br>0: No support<br>1: Support</p>
     * @param integer $FixStatus <p>Current remediation status<br>Enumeration value:<br>0: Unfixed<br>1: In remediation<br>2: Fix failure<br>3: Repair successful<br>4: Timeout</p>
     * @param string $LatestFixTime <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $NotFixableReason <p>Non-repairable reason. Returned when SupportAutoFix is 0.</p>
     * @param array $FixCommands <p>Fix command list, returned when SupportAutoFix is 1</p>
     * @param array $Components <p>Associated component list</p>
     * @param array $TagItems <p>Asset tag list</p>
     * @param integer $AppId <p>Account AppId</p>
     * @param string $PayVersion <p>Paid edition info<br>Enumeration value:<br>BASIC: Basic version<br>PRO: Pro edition<br>ULTIMATE: Flagship edition</p>
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
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("SupportAutoFix",$param) and $param["SupportAutoFix"] !== null) {
            $this->SupportAutoFix = $param["SupportAutoFix"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("NotFixableReason",$param) and $param["NotFixableReason"] !== null) {
            $this->NotFixableReason = $param["NotFixableReason"];
        }

        if (array_key_exists("FixCommands",$param) and $param["FixCommands"] !== null) {
            $this->FixCommands = $param["FixCommands"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }
    }
}
