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
 * Reverse Shell data details
 *
 * @method integer getId() Obtain ID primary key
 * @method void setId(integer $Id) Set ID primary key
 * @method string getUuid() Obtain Yunjing UUID
 * @method void setUuid(string $Uuid) Set Yunjing UUID
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getHostIp() Obtain Host private IP address
 * @method void setHostIp(string $HostIp) Set Host private IP address
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
 * @method string getUserName() Obtain User for execution
 * @method void setUserName(string $UserName) Set User for execution
 * @method string getUserGroup() Obtain User group for execution
 * @method void setUserGroup(string $UserGroup) Set User group for execution
 * @method string getParentProcName() Obtain Parent process name
 * @method void setParentProcName(string $ParentProcName) Set Parent process name
 * @method string getParentProcUser() Obtain Parent process user
 * @method void setParentProcUser(string $ParentProcUser) Set Parent process user
 * @method string getParentProcGroup() Obtain Parent process user group
 * @method void setParentProcGroup(string $ParentProcGroup) Set Parent process user group
 * @method string getParentProcPath() Obtain Parent process path
 * @method void setParentProcPath(string $ParentProcPath) Set Parent process path
 * @method integer getStatus() Obtain Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
 * @method void setStatus(integer $Status) Set Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method integer getDetectBy() Obtain Detection method
 * @method void setDetectBy(integer $DetectBy) Set Detection method
 * @method string getPsTree() Obtain Process tree json; pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPsTree(string $PsTree) Set Process tree json; pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestScheme() Obtain Recommended solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
 * @method string getHarmDescribe() Obtain Description
 * @method void setHarmDescribe(string $HarmDescribe) Set Description
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method array getReferences() Obtain Reference link
 * @method void setReferences(array $References) Set Reference link
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getMachineStatus() Obtain Host online status: OFFLINE; ONLINE
 * @method void setMachineStatus(string $MachineStatus) Set Host online status: OFFLINE; ONLINE
 * @method string getModifyTime() Obtain Processing time
 * @method void setModifyTime(string $ModifyTime) Set Processing time
 */
class ReverseShellEventInfo extends AbstractModel
{
    /**
     * @var integer ID primary key
     */
    public $Id;

    /**
     * @var string Yunjing UUID
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
     * @var string User for execution
     */
    public $UserName;

    /**
     * @var string User group for execution
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
     * @var integer Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
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
     * @var integer Detection method
     */
    public $DetectBy;

    /**
     * @var string Process tree json; pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PsTree;

    /**
     * @var string Recommended solution
     */
    public $SuggestScheme;

    /**
     * @var string Description
     */
    public $HarmDescribe;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @var array Reference link
     */
    public $References;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host online status: OFFLINE; ONLINE
     */
    public $MachineStatus;

    /**
     * @var string Processing time
     */
    public $ModifyTime;

    /**
     * @param integer $Id ID primary key
     * @param string $Uuid Yunjing UUID
     * @param string $Quuid Host ID
     * @param string $HostIp Host private IP address
     * @param string $DstIp Target IP
     * @param integer $DstPort Target port
     * @param string $ProcessName Process name
     * @param string $FullPath Process path
     * @param string $CmdLine Command details
     * @param string $UserName User for execution
     * @param string $UserGroup User group for execution
     * @param string $ParentProcName Parent process name
     * @param string $ParentProcUser Parent process user
     * @param string $ParentProcGroup Parent process user group
     * @param string $ParentProcPath Parent process path
     * @param integer $Status Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Host name
     * @param integer $DetectBy Detection method
     * @param string $PsTree Process tree json; pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: ssh service IP, ssh_source: log-in source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuggestScheme Recommended solution
     * @param string $HarmDescribe Description
     * @param array $Tags Tag
     * @param array $References Reference link
     * @param string $MachineWanIp Host public IP address
     * @param string $MachineStatus Host online status: OFFLINE; ONLINE
     * @param string $ModifyTime Processing time
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

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
