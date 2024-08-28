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
 * Information on resource management system installation package list
 *
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getInstallTime() Obtain Installation time
 * @method void setInstallTime(string $InstallTime) Set Installation time
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getMachineIp() Obtain Host IP
 * @method void setMachineIp(string $MachineIp) Set Host IP
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether newly added [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether newly added [0: no|1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getUuid() Obtain Agent Id
 * @method void setUuid(string $Uuid) Set Agent Id
 */
class AssetSystemPackageInfo extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Installation time
     */
    public $InstallTime;

    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Host IP
     */
    public $MachineIp;

    /**
     * @var string Operating system
     */
    public $OsInfo;

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
     */
    public $MachineExtraInfo;

    /**
     * @var string Host ID
     */
    public $Quuid;

    /**
     * @var string Agent Id
     */
    public $Uuid;

    /**
     * @param string $Name Database name
     * @param string $Desc Description
     * @param string $Version Version
     * @param string $InstallTime Installation time
     * @param string $Type Type
     * @param string $MachineName Host name
     * @param string $MachineIp Host IP
     * @param string $OsInfo Operating system
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether newly added [0: no|1: yes]
     * @param MachineExtraInfo $MachineExtraInfo Additional information
     * @param string $Quuid Host ID
     * @param string $Uuid Agent Id
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
