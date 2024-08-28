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
 * List information on resource management Web service 
 *
 * @method string getMachineIp() Obtain Private IP address of a host
 * @method void setMachineIp(string $MachineIp) Set Private IP address of a host
 * @method string getMachineWanIp() Obtain Public IP address of a host
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address of a host
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
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getBinPath() Obtain Binary path
 * @method void setBinPath(string $BinPath) Set Binary path
 * @method string getUser() Obtain Startup user
 * @method void setUser(string $User) Set Startup user
 * @method string getInstallPath() Obtain Installation path
 * @method void setInstallPath(string $InstallPath) Set Installation path
 * @method string getConfigPath() Obtain Configuration path
 * @method void setConfigPath(string $ConfigPath) Set Configuration path
 * @method integer getProcessCount() Obtain Number of associated processes
 * @method void setProcessCount(integer $ProcessCount) Set Number of associated processes
 * @method string getId() Obtain Web Service ID
 * @method void setId(string $Id) Set Web Service ID
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether newly added [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether newly added [0: no|1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetWebServiceBaseInfo extends AbstractModel
{
    /**
     * @var string Private IP address of a host
     */
    public $MachineIp;

    /**
     * @var string Public IP address of a host
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
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Binary path
     */
    public $BinPath;

    /**
     * @var string Startup user
     */
    public $User;

    /**
     * @var string Installation path
     */
    public $InstallPath;

    /**
     * @var string Configuration path
     */
    public $ConfigPath;

    /**
     * @var integer Number of associated processes
     */
    public $ProcessCount;

    /**
     * @var string Web Service ID
     */
    public $Id;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Description
     */
    public $Desc;

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
     * @var integer Whether newly added [0: no|1: yes]
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp Private IP address of a host
     * @param string $MachineWanIp Public IP address of a host
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $OsInfo Operating System Information
     * @param integer $ProjectId Host business group ID
     * @param array $Tag Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Database name
     * @param string $Version Version
     * @param string $BinPath Binary path
     * @param string $User Startup user
     * @param string $InstallPath Installation path
     * @param string $ConfigPath Configuration path
     * @param integer $ProcessCount Number of associated processes
     * @param string $Id Web Service ID
     * @param string $MachineName Host name
     * @param string $Desc Description
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether newly added [0: no|1: yes]
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("BinPath",$param) and $param["BinPath"] !== null) {
            $this->BinPath = $param["BinPath"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("InstallPath",$param) and $param["InstallPath"] !== null) {
            $this->InstallPath = $param["InstallPath"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
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
