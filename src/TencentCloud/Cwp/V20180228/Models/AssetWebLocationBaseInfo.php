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
 * Asset management Web site list information
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getMachineIp() Obtain Private IP address
 * @method void setMachineIp(string $MachineIp) Set Private IP address
 * @method string getMachineWanIp() Obtain Public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method string getName() Obtain Domain name
 * @method void setName(string $Name) Set Domain name
 * @method string getPort() Obtain Site port
 * @method void setPort(string $Port) Set Site port
 * @method string getProto() Obtain Site protocol
 * @method void setProto(string $Proto) Set Site protocol
 * @method string getServiceType() Obtain Service type
 * @method void setServiceType(string $ServiceType) Set Service type
 * @method integer getPathCount() Obtain Number of site paths
 * @method void setPathCount(integer $PathCount) Set Number of site paths
 * @method string getUser() Obtain Running user
 * @method void setUser(string $User) Set Running user
 * @method string getMainPath() Obtain Home directory
 * @method void setMainPath(string $MainPath) Set Home directory
 * @method string getMainPathOwner() Obtain Home directory owner
 * @method void setMainPathOwner(string $MainPathOwner) Set Home directory owner
 * @method string getPermission() Obtain Owner permissions
 * @method void setPermission(string $Permission) Set Owner permissions
 * @method integer getProjectId() Obtain Host business group ID
 * @method void setProjectId(integer $ProjectId) Set Host business group ID
 * @method array getTag() Obtain Host tag
 * @method void setTag(array $Tag) Set Host tag
 * @method string getId() Obtain Web site ID
 * @method void setId(string $Id) Set Web site ID
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether the web service is newly added [0 - no|1 - yes]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNew(integer $IsNew) Set Whether the web service is newly added [0 - no|1 - yes]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetWebLocationBaseInfo extends AbstractModel
{
    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Private IP address
     */
    public $MachineIp;

    /**
     * @var string Public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Operating system
     */
    public $OsInfo;

    /**
     * @var string Domain name
     */
    public $Name;

    /**
     * @var string Site port
     */
    public $Port;

    /**
     * @var string Site protocol
     */
    public $Proto;

    /**
     * @var string Service type
     */
    public $ServiceType;

    /**
     * @var integer Number of site paths
     */
    public $PathCount;

    /**
     * @var string Running user
     */
    public $User;

    /**
     * @var string Home directory
     */
    public $MainPath;

    /**
     * @var string Home directory owner
     */
    public $MainPathOwner;

    /**
     * @var string Owner permissions
     */
    public $Permission;

    /**
     * @var integer Host business group ID
     */
    public $ProjectId;

    /**
     * @var array Host tag
     */
    public $Tag;

    /**
     * @var string Web site ID
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
     * @var integer Whether the web service is newly added [0 - no|1 - yes]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $MachineIp Private IP address
     * @param string $MachineWanIp Public IP address
     * @param string $MachineName Host name
     * @param string $OsInfo Operating system
     * @param string $Name Domain name
     * @param string $Port Site port
     * @param string $Proto Site protocol
     * @param string $ServiceType Service type
     * @param integer $PathCount Number of site paths
     * @param string $User Running user
     * @param string $MainPath Home directory
     * @param string $MainPathOwner Home directory owner
     * @param string $Permission Owner permissions
     * @param integer $ProjectId Host business group ID
     * @param array $Tag Host tag
     * @param string $Id Web site ID
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether the web service is newly added [0 - no|1 - yes]
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("PathCount",$param) and $param["PathCount"] !== null) {
            $this->PathCount = $param["PathCount"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("MainPath",$param) and $param["MainPath"] !== null) {
            $this->MainPath = $param["MainPath"];
        }

        if (array_key_exists("MainPathOwner",$param) and $param["MainPathOwner"] !== null) {
            $this->MainPathOwner = $param["MainPathOwner"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
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

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
