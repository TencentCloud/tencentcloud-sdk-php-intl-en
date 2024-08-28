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
 * Anti-Ransomware Host List
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getInstanceId() Obtain Host Instance ID
 * @method void setInstanceId(string $InstanceId) Set Host Instance ID
 * @method string getMachineIp() Obtain Private IP address
 * @method void setMachineIp(string $MachineIp) Set Private IP address
 * @method string getMachineWanIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCloudTags() Obtain Cloud tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudTags(array $CloudTags) Set Cloud tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RegionInfo getRegionInfo() Obtain Availability zone information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Availability zone information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain CWPP tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set CWPP tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Protection status: 0 Disabled, 1 Enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Protection status: 0 Disabled, 1 Enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyId() Obtain Policy ID. 0 indicates no binding to any policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(integer $StrategyId) Set Policy ID. 0 indicates no binding to any policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskInfo() Obtain Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskInfo(string $DiskInfo) Set Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostVersion() Obtain Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostVersion(integer $HostVersion) Set Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyName() Obtain Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyName(string $StrategyName) Set Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RansomDefenseStrategyMachineDetail extends AbstractModel
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
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Host Instance ID
     */
    public $InstanceId;

    /**
     * @var string Private IP address
     */
    public $MachineIp;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineWanIp;

    /**
     * @var array Cloud tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudTags;

    /**
     * @var RegionInfo Availability zone information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionInfo;

    /**
     * @var array CWPP tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var integer Protection status: 0 Disabled, 1 Enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Policy ID. 0 indicates no binding to any policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var string Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskInfo;

    /**
     * @var integer Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostVersion;

    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyName;

    /**
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $MachineName Host name
     * @param string $InstanceId Host Instance ID
     * @param string $MachineIp Private IP address
     * @param string $MachineWanIp Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CloudTags Cloud tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RegionInfo $RegionInfo Availability zone information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tag CWPP tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Protection status: 0 Disabled, 1 Enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyId Policy ID. 0 indicates no binding to any policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskInfo Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostVersion Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyName Policy name
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

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }

        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }
    }
}
