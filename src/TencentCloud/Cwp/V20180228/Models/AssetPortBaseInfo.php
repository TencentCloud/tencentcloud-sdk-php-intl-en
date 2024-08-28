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
 * Basic information of resource management account
 *
 * @method string getMachineIp() Obtain Private IP address of the host
 * @method void setMachineIp(string $MachineIp) Set Private IP address of the host
 * @method string getMachineWanIp() Obtain Public IP address of the host
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address of the host
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
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getProcessVersion() Obtain Process version
 * @method void setProcessVersion(string $ProcessVersion) Set Process version
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getPid() Obtain Process ID
 * @method void setPid(string $Pid) Set Process ID
 * @method string getUser() Obtain Running user
 * @method void setUser(string $User) Set Running user
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getParam() Obtain Start parameter
 * @method void setParam(string $Param) Set Start parameter
 * @method string getTeletype() Obtain Process TTY
 * @method void setTeletype(string $Teletype) Set Process TTY
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method string getGroupName() Obtain User group
 * @method void setGroupName(string $GroupName) Set User group
 * @method string getMd5() Obtain Process MD5
 * @method void setMd5(string $Md5) Set Process MD5
 * @method string getPpid() Obtain Parent process ID
 * @method void setPpid(string $Ppid) Set Parent process ID
 * @method string getParentProcessName() Obtain Parent process name
 * @method void setParentProcessName(string $ParentProcessName) Set Parent process name
 * @method string getProto() Obtain Port protocol
 * @method void setProto(string $Proto) Set Port protocol
 * @method string getBindIp() Obtain Bound IP
 * @method void setBindIp(string $BindIp) Set Bound IP
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether to add [0: no | 1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether to add [0: no | 1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetPortBaseInfo extends AbstractModel
{
    /**
     * @var string Private IP address of the host
     */
    public $MachineIp;

    /**
     * @var string Public IP address of the host
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
    public $ProcessName;

    /**
     * @var string Process version
     */
    public $ProcessVersion;

    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Process ID
     */
    public $Pid;

    /**
     * @var string Running user
     */
    public $User;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string Start parameter
     */
    public $Param;

    /**
     * @var string Process TTY
     */
    public $Teletype;

    /**
     * @var string Port
     */
    public $Port;

    /**
     * @var string User group
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
     * @var string Port protocol
     */
    public $Proto;

    /**
     * @var string Bound IP
     */
    public $BindIp;

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
     * @var integer Whether to add [0: no | 1: yes]
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp Private IP address of the host
     * @param string $MachineWanIp Public IP address of the host
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $OsInfo Operating System Information
     * @param integer $ProjectId Host business group ID
     * @param array $Tag Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessName Process name
     * @param string $ProcessVersion Process version
     * @param string $ProcessPath Process path
     * @param string $Pid Process ID
     * @param string $User Running user
     * @param string $StartTime Start time
     * @param string $Param Start parameter
     * @param string $Teletype Process TTY
     * @param string $Port Port
     * @param string $GroupName User group
     * @param string $Md5 Process MD5
     * @param string $Ppid Parent process ID
     * @param string $ParentProcessName Parent process name
     * @param string $Proto Port protocol
     * @param string $BindIp Bound IP
     * @param string $MachineName Host name
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether to add [0: no | 1: yes]
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

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessVersion",$param) and $param["ProcessVersion"] !== null) {
            $this->ProcessVersion = $param["ProcessVersion"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
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

        if (array_key_exists("Teletype",$param) and $param["Teletype"] !== null) {
            $this->Teletype = $param["Teletype"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
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

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("BindIp",$param) and $param["BindIp"] !== null) {
            $this->BindIp = $param["BindIp"];
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
