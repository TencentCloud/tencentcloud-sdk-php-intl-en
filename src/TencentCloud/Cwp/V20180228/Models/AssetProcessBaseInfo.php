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
 * Basic information on the resource management process
 *
 * @method string getMachineIp() Obtain Host private IP address
 * @method void setMachineIp(string $MachineIp) Set Host private IP address
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getOsInfo() Obtain Operating System Information
 * @method void setOsInfo(string $OsInfo) Set Operating System Information
 * @method integer getProjectId() Obtain Host business group ID
 * @method void setProjectId(integer $ProjectId) Set Host business group ID
 * @method array getTag() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Process name
 * @method void setName(string $Name) Set Process name
 * @method string getDesc() Obtain Process description
 * @method void setDesc(string $Desc) Set Process description
 * @method string getPath() Obtain Process path
 * @method void setPath(string $Path) Set Process path
 * @method string getPid() Obtain Process ID
 * @method void setPid(string $Pid) Set Process ID
 * @method string getUser() Obtain Running user
 * @method void setUser(string $User) Set Running user
 * @method string getStartTime() Obtain Startup time
 * @method void setStartTime(string $StartTime) Set Startup time
 * @method string getParam() Obtain Startup parameter
 * @method void setParam(string $Param) Set Startup parameter
 * @method string getTty() Obtain Process TTY
 * @method void setTty(string $Tty) Set Process TTY
 * @method string getVersion() Obtain Process version
 * @method void setVersion(string $Version) Set Process version
 * @method string getGroupName() Obtain Process user group
 * @method void setGroupName(string $GroupName) Set Process user group
 * @method string getMd5() Obtain Process MD5
 * @method void setMd5(string $Md5) Set Process MD5
 * @method string getPpid() Obtain Parent process ID
 * @method void setPpid(string $Ppid) Set Parent process ID
 * @method string getParentProcessName() Obtain Parent process name
 * @method void setParentProcessName(string $ParentProcessName) Set Parent process name
 * @method string getStatus() Obtain Process status
 * @method void setStatus(string $Status) Set Process status
 * @method integer getHasSign() Obtain Digital signature. 0: no; 1: yes; 999: null (Windows only).
 * @method void setHasSign(integer $HasSign) Set Digital signature. 0: no; 1: yes; 999: null (Windows only).
 * @method integer getInstallByPackage() Obtain Whether to install the package. 0: no; 1: yes; 999: null (Linux only).
 * @method void setInstallByPackage(integer $InstallByPackage) Set Whether to install the package. 0: no; 1: yes; 999: null (Linux only).
 * @method string getPackageName() Obtain Software package name
 * @method void setPackageName(string $PackageName) Set Software package name
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether new [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether new [0: no|1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetProcessBaseInfo extends AbstractModel
{
    /**
     * @var string Host private IP address
     */
    public $MachineIp;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Operating System Information
     */
    public $OsInfo;

    /**
     * @var integer Host business group ID
     */
    public $ProjectId;

    /**
     * @var array Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Process name
     */
    public $Name;

    /**
     * @var string Process description
     */
    public $Desc;

    /**
     * @var string Process path
     */
    public $Path;

    /**
     * @var string Process ID
     */
    public $Pid;

    /**
     * @var string Running user
     */
    public $User;

    /**
     * @var string Startup time
     */
    public $StartTime;

    /**
     * @var string Startup parameter
     */
    public $Param;

    /**
     * @var string Process TTY
     */
    public $Tty;

    /**
     * @var string Process version
     */
    public $Version;

    /**
     * @var string Process user group
     */
    public $GroupName;

    /**
     * @var string Process MD5
     */
    public $Md5;

    /**
     * @var string Parent process ID
     */
    public $Ppid;

    /**
     * @var string Parent process name
     */
    public $ParentProcessName;

    /**
     * @var string Process status
     */
    public $Status;

    /**
     * @var integer Digital signature. 0: no; 1: yes; 999: null (Windows only).
     */
    public $HasSign;

    /**
     * @var integer Whether to install the package. 0: no; 1: yes; 999: null (Linux only).
     */
    public $InstallByPackage;

    /**
     * @var string Software package name
     */
    public $PackageName;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var integer Whether new [0: no|1: yes]
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp Host private IP address
     * @param string $MachineWanIp Host public IP address
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $OsInfo Operating System Information
     * @param integer $ProjectId Host business group ID
     * @param array $Tag Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Process name
     * @param string $Desc Process description
     * @param string $Path Process path
     * @param string $Pid Process ID
     * @param string $User Running user
     * @param string $StartTime Startup time
     * @param string $Param Startup parameter
     * @param string $Tty Process TTY
     * @param string $Version Process version
     * @param string $GroupName Process user group
     * @param string $Md5 Process MD5
     * @param string $Ppid Parent process ID
     * @param string $ParentProcessName Parent process name
     * @param string $Status Process status
     * @param integer $HasSign Digital signature. 0: no; 1: yes; 999: null (Windows only).
     * @param integer $InstallByPackage Whether to install the package. 0: no; 1: yes; 999: null (Linux only).
     * @param string $PackageName Software package name
     * @param string $MachineName Host name
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether new [0: no|1: yes]
     * @param MachineExtraInfo $MachineExtraInfo Additional information

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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Tty",$param) and $param["Tty"] !== null) {
            $this->Tty = $param["Tty"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Ppid",$param) and $param["Ppid"] !== null) {
            $this->Ppid = $param["Ppid"];
        }

        if (array_key_exists("ParentProcessName",$param) and $param["ParentProcessName"] !== null) {
            $this->ParentProcessName = $param["ParentProcessName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HasSign",$param) and $param["HasSign"] !== null) {
            $this->HasSign = $param["HasSign"];
        }

        if (array_key_exists("InstallByPackage",$param) and $param["InstallByPackage"] !== null) {
            $this->InstallByPackage = $param["InstallByPackage"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
