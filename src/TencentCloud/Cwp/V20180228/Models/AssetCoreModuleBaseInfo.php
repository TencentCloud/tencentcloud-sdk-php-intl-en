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
 * List of information on the asset management kernel module
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getPath() Obtain Path
 * @method void setPath(string $Path) Set Path
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getMachineIp() Obtain Server IP
 * @method void setMachineIp(string $MachineIp) Set Server IP
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method integer getSize() Obtain Module size
 * @method void setSize(integer $Size) Set Module size
 * @method integer getProcessCount() Obtain Number of dependent processes
 * @method void setProcessCount(integer $ProcessCount) Set Number of dependent processes
 * @method integer getModuleCount() Obtain Number of dependent modules
 * @method void setModuleCount(integer $ModuleCount) Set Number of dependent modules
 * @method string getId() Obtain Module ID
 * @method void setId(string $Id) Set Module ID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether new [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether new [0: no|1: yes]
 * @method string getMachineWanIp() Obtain Server Public IP
 * @method void setMachineWanIp(string $MachineWanIp) Set Server Public IP
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetCoreModuleBaseInfo extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Path
     */
    public $Path;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Server IP
     */
    public $MachineIp;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Operating system
     */
    public $OsInfo;

    /**
     * @var integer Module size
     */
    public $Size;

    /**
     * @var integer Number of dependent processes
     */
    public $ProcessCount;

    /**
     * @var integer Number of dependent modules
     */
    public $ModuleCount;

    /**
     * @var string Module ID
     */
    public $Id;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

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
     * @var string Server Public IP
     */
    public $MachineWanIp;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $Name Name
     * @param string $Desc Description
     * @param string $Path Path
     * @param string $Version Version
     * @param string $MachineIp Server IP
     * @param string $MachineName Server name
     * @param string $OsInfo Operating system
     * @param integer $Size Module size
     * @param integer $ProcessCount Number of dependent processes
     * @param integer $ModuleCount Number of dependent modules
     * @param string $Id Module ID
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether new [0: no|1: yes]
     * @param string $MachineWanIp Server Public IP
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("ModuleCount",$param) and $param["ModuleCount"] !== null) {
            $this->ModuleCount = $param["ModuleCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
