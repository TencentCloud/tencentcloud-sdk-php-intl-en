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
 * Core file monitoring event
 *
 * @method string getHostName() Obtain Machine Name
 * @method void setHostName(string $HostName) Set Machine Name
 * @method string getHostIp() Obtain Machine IP
 * @method void setHostIp(string $HostIp) Set Machine IP
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getModifyTime() Obtain Last occurrence time
 * @method void setModifyTime(string $ModifyTime) Set Last occurrence time
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain cvm id
 * @method void setQuuid(string $Quuid) Set cvm id
 * @method integer getType() Obtain Event Type/Action. 0 - Alarm
 * @method void setType(integer $Type) Set Event Type/Action. 0 - Alarm
 * @method string getProcessExe() Obtain Process path
 * @method void setProcessExe(string $ProcessExe) Set Process path
 * @method string getProcessArgv() Obtain Process parameter
 * @method void setProcessArgv(string $ProcessArgv) Set Process parameter
 * @method string getTarget() Obtain Target file path
 * @method void setTarget(string $Target) Set Target file path
 * @method integer getStatus() Obtain Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
 * @method void setStatus(integer $Status) Set Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
 * @method integer getEventCount() Obtain Event Occurrences
 * @method void setEventCount(integer $EventCount) Set Event Occurrences
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getPstree() Obtain Event Details: JSON Format
 * @method void setPstree(string $Pstree) Set Event Details: JSON Format
 * @method integer getRuleCategory() Obtain Rule Type. 0 - System Rule; 1 - Custom Rule
 * @method void setRuleCategory(integer $RuleCategory) Set Rule Type. 0 - System Rule; 1 - Custom Rule
 * @method string getMachineStatus() Obtain Host Online Information: ONLINE, OFFLINE
 * @method void setMachineStatus(string $MachineStatus) Set Host Online Information: ONLINE, OFFLINE
 * @method string getDescription() Obtain Severity description
 * @method void setDescription(string $Description) Set Severity description
 * @method string getSuggestion() Obtain Remediation Suggestions
 * @method void setSuggestion(string $Suggestion) Set Remediation Suggestions
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getExePermission() Obtain Process permission
 * @method void setExePermission(string $ExePermission) Set Process permission
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserGroup() Obtain User group
 * @method void setUserGroup(string $UserGroup) Set User group
 * @method string getExeMd5() Obtain Process name
 * @method void setExeMd5(string $ExeMd5) Set Process name
 * @method integer getExeSize() Obtain Process File Size
 * @method void setExeSize(integer $ExeSize) Set Process File Size
 * @method integer getExeTime() Obtain Process Execution Duration
 * @method void setExeTime(integer $ExeTime) Set Process Execution Duration
 * @method integer getTargetSize() Obtain Target file size
 * @method void setTargetSize(integer $TargetSize) Set Target file size
 * @method string getTargetPermission() Obtain Target File Permissions
 * @method void setTargetPermission(string $TargetPermission) Set Target File Permissions
 * @method string getTargetModifyTime() Obtain Target File Update Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetModifyTime(string $TargetModifyTime) Set Target File Update Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetCreatTime() Obtain Target File Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetCreatTime(string $TargetCreatTime) Set Target File Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExePid() Obtain Process PID
 * @method void setExePid(integer $ExePid) Set Process PID
 * @method string getTargetName() Obtain File name
 * @method void setTargetName(string $TargetName) Set File name
 * @method string getReference() Obtain Reference link
 * @method void setReference(string $Reference) Set Reference link
 * @method integer getLevel() Obtain Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method void setLevel(integer $Level) Set Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method string getExeName() Obtain Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExeName(string $ExeName) Set Process name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileAction() Obtain File threat behavior
<li>read: read file</li>
<li>write: modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileAction(string $FileAction) Set File threat behavior
<li>read: read file</li>
<li>write: modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileTamperEvent extends AbstractModel
{
    /**
     * @var string Machine Name
     */
    public $HostName;

    /**
     * @var string Machine IP
     */
    public $HostIp;

    /**
     * @var string Occurrence time
     */
    public $CreateTime;

    /**
     * @var string Last occurrence time
     */
    public $ModifyTime;

    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var integer Event Type/Action. 0 - Alarm
     */
    public $Type;

    /**
     * @var string Process path
     */
    public $ProcessExe;

    /**
     * @var string Process parameter
     */
    public $ProcessArgv;

    /**
     * @var string Target file path
     */
    public $Target;

    /**
     * @var integer Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     */
    public $Status;

    /**
     * @var integer Event Occurrences
     */
    public $EventCount;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Event Details: JSON Format
     */
    public $Pstree;

    /**
     * @var integer Rule Type. 0 - System Rule; 1 - Custom Rule
     */
    public $RuleCategory;

    /**
     * @var string Host Online Information: ONLINE, OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string Severity description
     */
    public $Description;

    /**
     * @var string Remediation Suggestions
     */
    public $Suggestion;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Process permission
     */
    public $ExePermission;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string User group
     */
    public $UserGroup;

    /**
     * @var string Process name
     */
    public $ExeMd5;

    /**
     * @var integer Process File Size
     */
    public $ExeSize;

    /**
     * @var integer Process Execution Duration
     */
    public $ExeTime;

    /**
     * @var integer Target file size
     */
    public $TargetSize;

    /**
     * @var string Target File Permissions
     */
    public $TargetPermission;

    /**
     * @var string Target File Update Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetModifyTime;

    /**
     * @var string Target File Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetCreatTime;

    /**
     * @var integer Process PID
     */
    public $ExePid;

    /**
     * @var string File name
     */
    public $TargetName;

    /**
     * @var string Reference link
     */
    public $Reference;

    /**
     * @var integer Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     */
    public $Level;

    /**
     * @var string Process name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExeName;

    /**
     * @var MachineExtraInfo  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string File threat behavior
<li>read: read file</li>
<li>write: modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileAction;

    /**
     * @param string $HostName Machine Name
     * @param string $HostIp Machine IP
     * @param string $CreateTime Occurrence time
     * @param string $ModifyTime Last occurrence time
     * @param integer $Id Event ID
     * @param string $Uuid Host UUID
     * @param string $Quuid cvm id
     * @param integer $Type Event Type/Action. 0 - Alarm
     * @param string $ProcessExe Process path
     * @param string $ProcessArgv Process parameter
     * @param string $Target Target file path
     * @param integer $Status Processing Status. 0 - Pending; 1 - Allowlisted; 2 - Deleted; 3 - Ignored; 4 - Manually Processed
     * @param integer $EventCount Event Occurrences
     * @param integer $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param string $Pstree Event Details: JSON Format
     * @param integer $RuleCategory Rule Type. 0 - System Rule; 1 - Custom Rule
     * @param string $MachineStatus Host Online Information: ONLINE, OFFLINE
     * @param string $Description Severity description
     * @param string $Suggestion Remediation Suggestions
     * @param string $PrivateIp Private IP address
     * @param string $ExePermission Process permission
     * @param string $UserName Username
     * @param string $UserGroup User group
     * @param string $ExeMd5 Process name
     * @param integer $ExeSize Process File Size
     * @param integer $ExeTime Process Execution Duration
     * @param integer $TargetSize Target file size
     * @param string $TargetPermission Target File Permissions
     * @param string $TargetModifyTime Target File Update Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetCreatTime Target File Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExePid Process PID
     * @param string $TargetName File name
     * @param string $Reference Reference link
     * @param integer $Level Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     * @param string $ExeName Process name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileAction File threat behavior
<li>read: read file</li>
<li>write: modify file</li>
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProcessExe",$param) and $param["ProcessExe"] !== null) {
            $this->ProcessExe = $param["ProcessExe"];
        }

        if (array_key_exists("ProcessArgv",$param) and $param["ProcessArgv"] !== null) {
            $this->ProcessArgv = $param["ProcessArgv"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Pstree",$param) and $param["Pstree"] !== null) {
            $this->Pstree = $param["Pstree"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ExePermission",$param) and $param["ExePermission"] !== null) {
            $this->ExePermission = $param["ExePermission"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("ExeMd5",$param) and $param["ExeMd5"] !== null) {
            $this->ExeMd5 = $param["ExeMd5"];
        }

        if (array_key_exists("ExeSize",$param) and $param["ExeSize"] !== null) {
            $this->ExeSize = $param["ExeSize"];
        }

        if (array_key_exists("ExeTime",$param) and $param["ExeTime"] !== null) {
            $this->ExeTime = $param["ExeTime"];
        }

        if (array_key_exists("TargetSize",$param) and $param["TargetSize"] !== null) {
            $this->TargetSize = $param["TargetSize"];
        }

        if (array_key_exists("TargetPermission",$param) and $param["TargetPermission"] !== null) {
            $this->TargetPermission = $param["TargetPermission"];
        }

        if (array_key_exists("TargetModifyTime",$param) and $param["TargetModifyTime"] !== null) {
            $this->TargetModifyTime = $param["TargetModifyTime"];
        }

        if (array_key_exists("TargetCreatTime",$param) and $param["TargetCreatTime"] !== null) {
            $this->TargetCreatTime = $param["TargetCreatTime"];
        }

        if (array_key_exists("ExePid",$param) and $param["ExePid"] !== null) {
            $this->ExePid = $param["ExePid"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ExeName",$param) and $param["ExeName"] !== null) {
            $this->ExeName = $param["ExeName"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }
    }
}
