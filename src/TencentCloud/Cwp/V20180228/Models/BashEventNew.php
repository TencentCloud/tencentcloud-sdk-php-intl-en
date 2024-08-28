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
 * High-risk command data (new)
 *
 * @method integer getId() Obtain Data ID
 * @method void setId(integer $Id) Set Data ID
 * @method string getUuid() Obtain CWPP ID
 * @method void setUuid(string $Uuid) Set CWPP ID
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getHostIp() Obtain Host private IP address
 * @method void setHostIp(string $HostIp) Set Host private IP address
 * @method string getUser() Obtain Username for execution
 * @method void setUser(string $User) Set Username for execution
 * @method integer getPlatform() Obtain Platform type
 * @method void setPlatform(integer $Platform) Set Platform type
 * @method string getBashCmd() Obtain Execute commands
 * @method void setBashCmd(string $BashCmd) Set Execute commands
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRuleLevel() Obtain Rule level: 1: high-risk 2: medium-risk; 3: low-risk
 * @method void setRuleLevel(integer $RuleLevel) Set Rule level: 1: high-risk 2: medium-risk; 3: low-risk
 * @method integer getStatus() Obtain Processing status: 0: pending; 1: processed; 2: allowlisted; 3: ignored
 * @method void setStatus(integer $Status) Set Processing status: 0: pending; 1: processed; 2: allowlisted; 3: ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method integer getDetectBy() Obtain 0: bash log; 1: real-time monitoring (Leiting edition)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectBy(integer $DetectBy) Set 0: bash log; 1: real-time monitoring (Leiting edition)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPid() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(string $Pid) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExe() Obtain Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExe(string $Exe) Set Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Processing time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Processing time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleCategory() Obtain Rule category. 0: system rule; 1: user rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleCategory(integer $RuleCategory) Set Rule category. 0: system rule; 1: user rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegexBashCmd() Obtain Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegexBashCmd(string $RegexBashCmd) Set Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMachineType() Obtain 0: normal; 1: Professional edition; 2: Ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineType(integer $MachineType) Set 0: normal; 1: Professional edition; 2: Ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional Information on Machine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional Information on Machine
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BashEventNew extends AbstractModel
{
    /**
     * @var integer Data ID
     */
    public $Id;

    /**
     * @var string CWPP ID
     */
    public $Uuid;

    /**
     * @var string Host ID
     */
    public $Quuid;

    /**
     * @var string Host private IP address
     */
    public $HostIp;

    /**
     * @var string Username for execution
     */
    public $User;

    /**
     * @var integer Platform type
     */
    public $Platform;

    /**
     * @var string Execute commands
     */
    public $BashCmd;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Rule level: 1: high-risk 2: medium-risk; 3: low-risk
     */
    public $RuleLevel;

    /**
     * @var integer Processing status: 0: pending; 1: processed; 2: allowlisted; 3: ignored
     */
    public $Status;

    /**
     * @var string Occurrence time
     */
    public $CreateTime;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var integer 0: bash log; 1: real-time monitoring (Leiting edition)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectBy;

    /**
     * @var string Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string Process name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Exe;

    /**
     * @var string Processing time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Rule category. 0: system rule; 1: user rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleCategory;

    /**
     * @var string Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegexBashCmd;

    /**
     * @var integer 0: normal; 1: Professional edition; 2: Ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineType;

    /**
     * @var MachineExtraInfo Additional Information on Machine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param integer $Id Data ID
     * @param string $Uuid CWPP ID
     * @param string $Quuid Host ID
     * @param string $HostIp Host private IP address
     * @param string $User Username for execution
     * @param integer $Platform Platform type
     * @param string $BashCmd Execute commands
     * @param integer $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param integer $RuleLevel Rule level: 1: high-risk 2: medium-risk; 3: low-risk
     * @param integer $Status Processing status: 0: pending; 1: processed; 2: allowlisted; 3: ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Host name
     * @param integer $DetectBy 0: bash log; 1: real-time monitoring (Leiting edition)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Pid Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Exe Process name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Processing time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleCategory Rule category. 0: system rule; 1: user rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegexBashCmd Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MachineType 0: normal; 1: Professional edition; 2: Ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Additional Information on Machine
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BashCmd",$param) and $param["BashCmd"] !== null) {
            $this->BashCmd = $param["BashCmd"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("RegexBashCmd",$param) and $param["RegexBashCmd"] !== null) {
            $this->RegexBashCmd = $param["RegexBashCmd"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
