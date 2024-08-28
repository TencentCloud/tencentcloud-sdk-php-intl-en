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
 * Details of high-risk command data (new)
 *
 * @method integer getId() Obtain Data ID
 * @method void setId(integer $Id) Set Data ID
 * @method string getUuid() Obtain CWPP ID
 * @method void setUuid(string $Uuid) Set CWPP ID
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getHostIp() Obtain Host private IP address
 * @method void setHostIp(string $HostIp) Set Host private IP address
 * @method integer getPlatform() Obtain Platform type
 * @method void setPlatform(integer $Platform) Set Platform type
 * @method string getBashCmd() Obtain Executed commands
 * @method void setBashCmd(string $BashCmd) Set Executed commands
 * @method integer getRuleId() Obtain Rule ID equals 0 indicating that the rule has been deleted or the effective scope has been modified.
 * @method void setRuleId(integer $RuleId) Set Rule ID equals 0 indicating that the rule has been deleted or the effective scope has been modified.
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRuleLevel() Obtain Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
 * @method void setRuleLevel(integer $RuleLevel) Set Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
 * @method integer getStatus() Obtain Processing status: 0: Pending; 1: Processed; 2: Whitelisted; 3: Ignored
 * @method void setStatus(integer $Status) Set Processing status: 0: Pending; 1: Processed; 2: Whitelisted; 3: Ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getExe() Obtain Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExe(string $Exe) Set Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Processing time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Processing time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleCategory() Obtain Rule category. 0 - system rule; 1 - user rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleCategory(integer $RuleCategory) Set Rule category. 0 - system rule; 1 - user rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegexBashCmd() Obtain Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegexBashCmd(string $RegexBashCmd) Set Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPsTree() Obtain Process tree json  pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: command execution; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPsTree(string $PsTree) Set Process tree json  pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: command execution; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestScheme() Obtain Recommended solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHarmDescribe() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHarmDescribe(string $HarmDescribe) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReferences() Obtain Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReferences(array $References) Set Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineWanIp() Obtain Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineStatus() Obtain Host online status: OFFLINE; ONLINE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineStatus(string $MachineStatus) Set Host online status: OFFLINE; ONLINE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain Log-in user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set Log-in user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPid() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(string $Pid) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMachineType() Obtain 0: normal; 1: professional version; 2: ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineType(integer $MachineType) Set 0: normal; 1: professional version; 2: ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDetectBy() Obtain Source of Detection: 0: bash log; 1: real-time monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectBy(integer $DetectBy) Set Source of Detection: 0: bash log; 1: real-time monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BashEventsInfoNew extends AbstractModel
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
     * @var integer Platform type
     */
    public $Platform;

    /**
     * @var string Executed commands
     */
    public $BashCmd;

    /**
     * @var integer Rule ID equals 0 indicating that the rule has been deleted or the effective scope has been modified.
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
     */
    public $RuleLevel;

    /**
     * @var integer Processing status: 0: Pending; 1: Processed; 2: Whitelisted; 3: Ignored
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
     * @var integer Rule category. 0 - system rule; 1 - user rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleCategory;

    /**
     * @var string Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegexBashCmd;

    /**
     * @var string Process tree json  pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: command execution; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PsTree;

    /**
     * @var string Recommended solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuggestScheme;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HarmDescribe;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $References;

    /**
     * @var string Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineWanIp;

    /**
     * @var string Host online status: OFFLINE; ONLINE
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineStatus;

    /**
     * @var string Log-in user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var integer 0: normal; 1: professional version; 2: ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineType;

    /**
     * @var integer Source of Detection: 0: bash log; 1: real-time monitoring
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectBy;

    /**
     * @param integer $Id Data ID
     * @param string $Uuid CWPP ID
     * @param string $Quuid Host ID
     * @param string $HostIp Host private IP address
     * @param integer $Platform Platform type
     * @param string $BashCmd Executed commands
     * @param integer $RuleId Rule ID equals 0 indicating that the rule has been deleted or the effective scope has been modified.
     * @param string $RuleName Rule name
     * @param integer $RuleLevel Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
     * @param integer $Status Processing status: 0: Pending; 1: Processed; 2: Whitelisted; 3: Ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Host name
     * @param string $Exe Process name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Processing time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleCategory Rule category. 0 - system rule; 1 - user rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegexBashCmd Automatically generated regular expression
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PsTree Process tree json  pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: command execution; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuggestScheme Recommended solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HarmDescribe Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $References Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineWanIp Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineStatus Host online status: OFFLINE; ONLINE
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User Log-in user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Pid Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MachineType 0: normal; 1: professional version; 2: ultimate edition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DetectBy Source of Detection: 0: bash log; 1: real-time monitoring
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

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }
    }
}
