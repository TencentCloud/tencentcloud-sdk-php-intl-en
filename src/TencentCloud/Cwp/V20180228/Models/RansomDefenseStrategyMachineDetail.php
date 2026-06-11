<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address
 * @method array getCloudTags() Obtain Cloud Tag
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag
 * @method RegionInfo getRegionInfo() Obtain Availability zone information
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Availability zone information
 * @method array getTag() Obtain Host security tag
 * @method void setTag(array $Tag) Set Host security tag
 * @method integer getStatus() Obtain Protection status: 0 Disabled, 1 Enabled.
 * @method void setStatus(integer $Status) Set Protection status: 0 Disabled, 1 Enabled.
 * @method integer getStrategyId() Obtain Policy ID. 0 indicates no binding to any policy.
 * @method void setStrategyId(integer $StrategyId) Set Policy ID. 0 indicates no binding to any policy.
 * @method string getDiskInfo() Obtain Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
 * @method void setDiskInfo(string $DiskInfo) Set Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
 * @method integer getHostVersion() Obtain Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
 * @method void setHostVersion(integer $HostVersion) Set Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method string getMachineType() Obtain Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
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
     */
    public $MachineWanIp;

    /**
     * @var array Cloud Tag
     */
    public $CloudTags;

    /**
     * @var RegionInfo Availability zone information
     */
    public $RegionInfo;

    /**
     * @var array Host security tag
     */
    public $Tag;

    /**
     * @var integer Protection status: 0 Disabled, 1 Enabled.
     */
    public $Status;

    /**
     * @var integer Policy ID. 0 indicates no binding to any policy.
     */
    public $StrategyId;

    /**
     * @var string Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
     */
    public $DiskInfo;

    /**
     * @var integer Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
     */
    public $HostVersion;

    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var string Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $MachineName Host name
     * @param string $InstanceId Host Instance ID
     * @param string $MachineIp Private IP address
     * @param string $MachineWanIp Public IP address
     * @param array $CloudTags Cloud Tag
     * @param RegionInfo $RegionInfo Availability zone information
     * @param array $Tag Host security tag
     * @param integer $Status Protection status: 0 Disabled, 1 Enabled.
     * @param integer $StrategyId Policy ID. 0 indicates no binding to any policy.
     * @param string $DiskInfo Hard disk information, all hard disks take effect when left blank:
Separate diskId1|diskName1;diskId2|diskName2
     * @param integer $HostVersion Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
     * @param string $StrategyName Policy name
     * @param string $MachineType Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
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

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
