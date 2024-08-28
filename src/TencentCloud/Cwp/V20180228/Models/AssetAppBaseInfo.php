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
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getProjectId() Obtain Host business group ID
 * @method void setProjectId(integer $ProjectId) Set Host business group ID
 * @method array getTag() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Application name
 * @method void setName(string $Name) Set Application name
 * @method integer getType() Obtain Application type	
1: operations
2: database
3: Security
4: suspicious application
5: system architecture
6: system application
7: web service
99: other
 * @method void setType(integer $Type) Set Application type	
1: operations
2: database
3: Security
4: suspicious application
5: system architecture
6: system application
7: web service
99: other
 * @method string getBinPath() Obtain Binary path
 * @method void setBinPath(string $BinPath) Set Binary path
 * @method string getOsInfo() Obtain Operating System Information
 * @method void setOsInfo(string $OsInfo) Set Operating System Information
 * @method integer getProcessCount() Obtain Number of associated processes
 * @method void setProcessCount(integer $ProcessCount) Set Number of associated processes
 * @method string getDesc() Obtain Application description
 * @method void setDesc(string $Desc) Set Application description
 * @method string getVersion() Obtain Version No.
 * @method void setVersion(string $Version) Set Version No.
 * @method string getConfigPath() Obtain Configuration file path
 * @method void setConfigPath(string $ConfigPath) Set Configuration file path
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsNew() Obtain Whether the web service is newly added [0: no|1: yes]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNew(integer $IsNew) Set Whether the web service is newly added [0: no|1: yes]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetAppBaseInfo extends AbstractModel
{
    /**
     * @var string Host private IP address
     */
    public $MachineIp;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

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
     * @var string Application name
     */
    public $Name;

    /**
     * @var integer Application type	
1: operations
2: database
3: Security
4: suspicious application
5: system architecture
6: system application
7: web service
99: other
     */
    public $Type;

    /**
     * @var string Binary path
     */
    public $BinPath;

    /**
     * @var string Operating System Information
     */
    public $OsInfo;

    /**
     * @var integer Number of associated processes
     */
    public $ProcessCount;

    /**
     * @var string Application description
     */
    public $Desc;

    /**
     * @var string Version No.
     */
    public $Version;

    /**
     * @var string Configuration file path
     */
    public $ConfigPath;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Whether the web service is newly added [0: no|1: yes]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp Host private IP address
     * @param string $MachineName Host name
     * @param string $MachineWanIp Host public IP address
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param integer $ProjectId Host business group ID
     * @param array $Tag Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Application name
     * @param integer $Type Application type	
1: operations
2: database
3: Security
4: suspicious application
5: system architecture
6: system application
7: web service
99: other
     * @param string $BinPath Binary path
     * @param string $OsInfo Operating System Information
     * @param integer $ProcessCount Number of associated processes
     * @param string $Desc Application description
     * @param string $Version Version No.
     * @param string $ConfigPath Configuration file path
     * @param string $FirstTime First collection time
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsNew Whether the web service is newly added [0: no|1: yes]
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BinPath",$param) and $param["BinPath"] !== null) {
            $this->BinPath = $param["BinPath"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
