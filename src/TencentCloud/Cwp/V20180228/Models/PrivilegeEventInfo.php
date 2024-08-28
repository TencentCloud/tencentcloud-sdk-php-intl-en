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
 * Local privilege escalation data
 *
 * @method integer getId() Obtain Data ID
 * @method void setId(integer $Id) Set Data ID
 * @method string getUuid() Obtain Yunjing ID
 * @method void setUuid(string $Uuid) Set Yunjing ID
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getHostIp() Obtain Host private IP address
 * @method void setHostIp(string $HostIp) Set Host private IP address
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getFullPath() Obtain Process path
 * @method void setFullPath(string $FullPath) Set Process path
 * @method string getCmdLine() Obtain Execute commands
 * @method void setCmdLine(string $CmdLine) Set Execute commands
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserGroup() Obtain User group
 * @method void setUserGroup(string $UserGroup) Set User group
 * @method string getProcFilePrivilege() Obtain Process file permission
 * @method void setProcFilePrivilege(string $ProcFilePrivilege) Set Process file permission
 * @method string getParentProcName() Obtain Parent process name
 * @method void setParentProcName(string $ParentProcName) Set Parent process name
 * @method string getParentProcUser() Obtain Parent process username
 * @method void setParentProcUser(string $ParentProcUser) Set Parent process username
 * @method string getParentProcGroup() Obtain Parent process user group
 * @method void setParentProcGroup(string $ParentProcGroup) Set Parent process user group
 * @method string getParentProcPath() Obtain Parent process path
 * @method void setParentProcPath(string $ParentProcPath) Set Parent process path
 * @method string getPsTree() Obtain Process tree json pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: SSH service IP; ssh_source: log-in source
 * @method void setPsTree(string $PsTree) Set Process tree json pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: SSH service IP; ssh_source: log-in source
 * @method integer getStatus() Obtain Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
 * @method void setStatus(integer $Status) Set Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Machine name
 * @method void setMachineName(string $MachineName) Set Machine name
 * @method string getSuggestScheme() Obtain Recommended solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
 * @method string getHarmDescribe() Obtain Hazard description information
 * @method void setHarmDescribe(string $HarmDescribe) Set Hazard description information
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method array getReferences() Obtain Reference link
 * @method void setReferences(array $References) Set Reference link
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getNewCaps() Obtain Permission list (Separate multiple items with |.)
 * @method void setNewCaps(string $NewCaps) Set Permission list (Separate multiple items with |.)
 * @method string getMachineStatus() Obtain Host online status: OFFLINE; ONLINE
 * @method void setMachineStatus(string $MachineStatus) Set Host online status: OFFLINE; ONLINE
 * @method string getModifyTime() Obtain Processing time
 * @method void setModifyTime(string $ModifyTime) Set Processing time
 */
class PrivilegeEventInfo extends AbstractModel
{
    /**
     * @var integer Data ID
     */
    public $Id;

    /**
     * @var string Yunjing ID
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
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process path
     */
    public $FullPath;

    /**
     * @var string Execute commands
     */
    public $CmdLine;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string User group
     */
    public $UserGroup;

    /**
     * @var string Process file permission
     */
    public $ProcFilePrivilege;

    /**
     * @var string Parent process name
     */
    public $ParentProcName;

    /**
     * @var string Parent process username
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
     * @var string Process tree json pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: SSH service IP; ssh_source: log-in source
     */
    public $PsTree;

    /**
     * @var integer Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
     */
    public $Status;

    /**
     * @var string Occurrence time
     */
    public $CreateTime;

    /**
     * @var string Machine name
     */
    public $MachineName;

    /**
     * @var string Recommended solution
     */
    public $SuggestScheme;

    /**
     * @var string Hazard description information
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
     * @var string Permission list (Separate multiple items with |.)
     */
    public $NewCaps;

    /**
     * @var string Host online status: OFFLINE; ONLINE
     */
    public $MachineStatus;

    /**
     * @var string Processing time
     */
    public $ModifyTime;

    /**
     * @param integer $Id Data ID
     * @param string $Uuid Yunjing ID
     * @param string $Quuid Host ID
     * @param string $HostIp Host private IP address
     * @param string $ProcessName Process name
     * @param string $FullPath Process path
     * @param string $CmdLine Execute commands
     * @param string $UserName Username
     * @param string $UserGroup User group
     * @param string $ProcFilePrivilege Process file permission
     * @param string $ParentProcName Parent process name
     * @param string $ParentProcUser Parent process username
     * @param string $ParentProcGroup Parent process user group
     * @param string $ParentProcPath Parent process path
     * @param string $PsTree Process tree json pid: process ID; exe: file path; account: groups and users to which the process belongs; cmdline: execute commands; ssh_service: SSH service IP; ssh_source: log-in source
     * @param integer $Status Processing status: 0: pending; 2: allowlisted; 3: processed; 4: ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Machine name
     * @param string $SuggestScheme Recommended solution
     * @param string $HarmDescribe Hazard description information
     * @param array $Tags Tag
     * @param array $References Reference link
     * @param string $MachineWanIp Host public IP address
     * @param string $NewCaps Permission list (Separate multiple items with |.)
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

        if (array_key_exists("ProcFilePrivilege",$param) and $param["ProcFilePrivilege"] !== null) {
            $this->ProcFilePrivilege = $param["ProcFilePrivilege"];
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

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
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

        if (array_key_exists("NewCaps",$param) and $param["NewCaps"] !== null) {
            $this->NewCaps = $param["NewCaps"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
