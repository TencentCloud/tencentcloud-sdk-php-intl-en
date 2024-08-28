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
 * Reverse Shell data
 *
 * @method integer getId() Obtain ID primary key
 * @method void setId(integer $Id) Set ID primary key
 * @method string getUuid() Obtain CWPP UUID
 * @method void setUuid(string $Uuid) Set CWPP UUID
 * @method string getQuuid() Obtain Server ID
 * @method void setQuuid(string $Quuid) Set Server ID
 * @method string getHostip() Obtain Host private IP address
 * @method void setHostip(string $Hostip) Set Host private IP address
 * @method string getDstIp() Obtain Target IP
 * @method void setDstIp(string $DstIp) Set Target IP
 * @method integer getDstPort() Obtain Target port
 * @method void setDstPort(integer $DstPort) Set Target port
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getFullPath() Obtain Process path
 * @method void setFullPath(string $FullPath) Set Process path
 * @method string getCmdLine() Obtain Command details
 * @method void setCmdLine(string $CmdLine) Set Command details
 * @method string getUserName() Obtain Executing user
 * @method void setUserName(string $UserName) Set Executing user
 * @method string getUserGroup() Obtain Executing user group
 * @method void setUserGroup(string $UserGroup) Set Executing user group
 * @method string getParentProcName() Obtain Parent process name
 * @method void setParentProcName(string $ParentProcName) Set Parent process name
 * @method string getParentProcUser() Obtain Parent process user
 * @method void setParentProcUser(string $ParentProcUser) Set Parent process user
 * @method string getParentProcGroup() Obtain Parent process user group
 * @method void setParentProcGroup(string $ParentProcGroup) Set Parent process user group
 * @method string getParentProcPath() Obtain Parent process path
 * @method void setParentProcPath(string $ParentProcPath) Set Parent process path
 * @method integer getStatus() Obtain Processing status: 0 - pending; 2 - allowlisted; 3 - processed; 4 - ignored
 * @method void setStatus(integer $Status) Set Processing status: 0 - pending; 2 - allowlisted; 3 - processed; 4 - ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getProcTree() Obtain Process tree
 * @method void setProcTree(string $ProcTree) Set Process tree
 * @method integer getDetectBy() Obtain Detection method: 0: behavior analysis; 1 command feature detection
 * @method void setDetectBy(integer $DetectBy) Set Detection method: 0: behavior analysis; 1 command feature detection
 * @method MachineExtraInfo getMachineExtraInfo() Obtain  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPid() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskLevel() Obtain Threat level: 0 - medium-risk; 1 - high-risk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(integer $RiskLevel) Set Threat level: 0 - medium-risk; 1 - high-risk
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReverseShell extends AbstractModel
{
    /**
     * @var integer ID primary key
     */
    public $Id;

    /**
     * @var string CWPP UUID
     */
    public $Uuid;

    /**
     * @var string Server ID
     */
    public $Quuid;

    /**
     * @var string Host private IP address
     */
    public $Hostip;

    /**
     * @var string Target IP
     */
    public $DstIp;

    /**
     * @var integer Target port
     */
    public $DstPort;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process path
     */
    public $FullPath;

    /**
     * @var string Command details
     */
    public $CmdLine;

    /**
     * @var string Executing user
     */
    public $UserName;

    /**
     * @var string Executing user group
     */
    public $UserGroup;

    /**
     * @var string Parent process name
     */
    public $ParentProcName;

    /**
     * @var string Parent process user
     */
    public $ParentProcUser;

    /**
     * @var string Parent process user group
     */
    public $ParentProcGroup;

    /**
     * @var string Parent process path
     */
    public $ParentProcPath;

    /**
     * @var integer Processing status: 0 - pending; 2 - allowlisted; 3 - processed; 4 - ignored
     */
    public $Status;

    /**
     * @var string Occurrence time
     */
    public $CreateTime;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Process tree
     */
    public $ProcTree;

    /**
     * @var integer Detection method: 0: behavior analysis; 1 command feature detection
     */
    public $DetectBy;

    /**
     * @var MachineExtraInfo  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var integer Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var integer Threat level: 0 - medium-risk; 1 - high-risk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @param integer $Id ID primary key
     * @param string $Uuid CWPP UUID
     * @param string $Quuid Server ID
     * @param string $Hostip Host private IP address
     * @param string $DstIp Target IP
     * @param integer $DstPort Target port
     * @param string $ProcessName Process name
     * @param string $FullPath Process path
     * @param string $CmdLine Command details
     * @param string $UserName Executing user
     * @param string $UserGroup Executing user group
     * @param string $ParentProcName Parent process name
     * @param string $ParentProcUser Parent process user
     * @param string $ParentProcGroup Parent process user group
     * @param string $ParentProcPath Parent process path
     * @param integer $Status Processing status: 0 - pending; 2 - allowlisted; 3 - processed; 4 - ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Server name
     * @param string $ProcTree Process tree
     * @param integer $DetectBy Detection method: 0: behavior analysis; 1 command feature detection
     * @param MachineExtraInfo $MachineExtraInfo  Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pid Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskLevel Threat level: 0 - medium-risk; 1 - high-risk
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

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("ParentProcName",$param) and $param["ParentProcName"] !== null) {
            $this->ParentProcName = $param["ParentProcName"];
        }

        if (array_key_exists("ParentProcUser",$param) and $param["ParentProcUser"] !== null) {
            $this->ParentProcUser = $param["ParentProcUser"];
        }

        if (array_key_exists("ParentProcGroup",$param) and $param["ParentProcGroup"] !== null) {
            $this->ParentProcGroup = $param["ParentProcGroup"];
        }

        if (array_key_exists("ParentProcPath",$param) and $param["ParentProcPath"] !== null) {
            $this->ParentProcPath = $param["ParentProcPath"];
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

        if (array_key_exists("ProcTree",$param) and $param["ProcTree"] !== null) {
            $this->ProcTree = $param["ProcTree"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
