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
 * Resource management database list information
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
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getPort() Obtain Listening port
 * @method void setPort(string $Port) Set Listening port
 * @method string getProto() Obtain Protocol
 * @method void setProto(string $Proto) Set Protocol
 * @method string getUser() Obtain Running user
 * @method void setUser(string $User) Set Running user
 * @method string getIp() Obtain Bound IP
 * @method void setIp(string $Ip) Set Bound IP
 * @method string getConfigPath() Obtain Configuration file path
 * @method void setConfigPath(string $ConfigPath) Set Configuration file path
 * @method string getLogPath() Obtain Log file path
 * @method void setLogPath(string $LogPath) Set Log file path
 * @method string getDataPath() Obtain Data path
 * @method void setDataPath(string $DataPath) Set Data path
 * @method string getPermission() Obtain Running permission
 * @method void setPermission(string $Permission) Set Running permission
 * @method string getErrorLogPath() Obtain Error log path
 * @method void setErrorLogPath(string $ErrorLogPath) Set Error log path
 * @method string getPlugInPath() Obtain Plugin path
 * @method void setPlugInPath(string $PlugInPath) Set Plugin path
 * @method string getBinPath() Obtain Binary path
 * @method void setBinPath(string $BinPath) Set Binary path
 * @method string getParam() Obtain Startup parameter
 * @method void setParam(string $Param) Set Startup parameter
 * @method string getId() Obtain Database ID
 * @method void setId(string $Id) Set Database ID
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether newly added [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether newly added [0: no|1: yes]
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetDatabaseBaseInfo extends AbstractModel
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
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Listening port
     */
    public $Port;

    /**
     * @var string Protocol
     */
    public $Proto;

    /**
     * @var string Running user
     */
    public $User;

    /**
     * @var string Bound IP
     */
    public $Ip;

    /**
     * @var string Configuration file path
     */
    public $ConfigPath;

    /**
     * @var string Log file path
     */
    public $LogPath;

    /**
     * @var string Data path
     */
    public $DataPath;

    /**
     * @var string Running permission
     */
    public $Permission;

    /**
     * @var string Error log path
     */
    public $ErrorLogPath;

    /**
     * @var string Plugin path
     */
    public $PlugInPath;

    /**
     * @var string Binary path
     */
    public $BinPath;

    /**
     * @var string Startup parameter
     */
    public $Param;

    /**
     * @var string Database ID
     */
    public $Id;

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
     * @var string Host name
     */
    public $MachineName;

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
     * @param string $Name Database name
     * @param string $Version Version
     * @param string $Port Listening port
     * @param string $Proto Protocol
     * @param string $User Running user
     * @param string $Ip Bound IP
     * @param string $ConfigPath Configuration file path
     * @param string $LogPath Log file path
     * @param string $DataPath Data path
     * @param string $Permission Running permission
     * @param string $ErrorLogPath Error log path
     * @param string $PlugInPath Plugin path
     * @param string $BinPath Binary path
     * @param string $Param Startup parameter
     * @param string $Id Database ID
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether newly added [0: no|1: yes]
     * @param string $MachineName Host name
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("ErrorLogPath",$param) and $param["ErrorLogPath"] !== null) {
            $this->ErrorLogPath = $param["ErrorLogPath"];
        }

        if (array_key_exists("PlugInPath",$param) and $param["PlugInPath"] !== null) {
            $this->PlugInPath = $param["PlugInPath"];
        }

        if (array_key_exists("BinPath",$param) and $param["BinPath"] !== null) {
            $this->BinPath = $param["BinPath"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
