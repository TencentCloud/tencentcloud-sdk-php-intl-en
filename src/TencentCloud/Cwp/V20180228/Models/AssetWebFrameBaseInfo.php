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
 * Resource management Web application list information
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
 * @method string getLang() Obtain Language
 * @method void setLang(string $Lang) Set Language
 * @method string getServiceType() Obtain Service type
 * @method void setServiceType(string $ServiceType) Set Service type
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUpdateTime() Obtain Data update time
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether new [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether new [0: no|1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Application path
 * @method void setPath(string $Path) Set Application path
 */
class AssetWebFrameBaseInfo extends AbstractModel
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
     * @var string Language
     */
    public $Lang;

    /**
     * @var string Service type
     */
    public $ServiceType;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Data update time
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
     * @var string Application path
     */
    public $Path;

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
     * @param string $Lang Language
     * @param string $ServiceType Service type
     * @param string $MachineName Host name
     * @param string $UpdateTime Data update time
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether new [0: no|1: yes]
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Application path
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

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
