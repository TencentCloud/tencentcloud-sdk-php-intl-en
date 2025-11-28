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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQVipInstance request structure.
 *
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method string getSpec() Obtain Cluster specification. Supported specifications: 1. 	General: rocket-vip-basic-0; 2. Basic: rocket-vip-basic-1; 3. Standard: rocket-vip-basic-2; 4. Advanced I: rocket-vip-basic-3; 5. Advanced II: rocket-vip-basic-4.
 * @method void setSpec(string $Spec) Set Cluster specification. Supported specifications: 1. 	General: rocket-vip-basic-0; 2. Basic: rocket-vip-basic-1; 3. Standard: rocket-vip-basic-2; 4. Advanced I: rocket-vip-basic-3; 5. Advanced II: rocket-vip-basic-4.
 * @method integer getNodeCount() Obtain Number of nodes. Value range: 2–20.
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes. Value range: 2–20.
 * @method integer getStorageSize() Obtain Single-node storage space, in GB. The minimum space is 200 GB.
 * @method void setStorageSize(integer $StorageSize) Set Single-node storage space, in GB. The minimum space is 200 GB.
 * @method array getZoneIds() Obtain The zone ID list for node deployment. For example, the ID of Guangzhou Zone 1 is 100001. For details, see the official website of the cloud platform.
 * @method void setZoneIds(array $ZoneIds) Set The zone ID list for node deployment. For example, the ID of Guangzhou Zone 1 is 100001. For details, see the official website of the cloud platform.
 * @method VpcInfo getVpcInfo() Obtain Describes the VPC information.
 * @method void setVpcInfo(VpcInfo $VpcInfo) Set Describes the VPC information.
 * @method integer getTimeSpan() Obtain Purchase duration, in months.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration, in months.
 * @method boolean getSupportsMigrateToCloud() Obtain Whether it is used for cloud migration. The default value is false.
 * @method void setSupportsMigrateToCloud(boolean $SupportsMigrateToCloud) Set Whether it is used for cloud migration. The default value is false.
 * @method boolean getEnablePublic() Obtain Specifies whether public network access is enabled.
 * @method void setEnablePublic(boolean $EnablePublic) Set Specifies whether public network access is enabled.
 * @method integer getBandwidth() Obtain Public network bandwidth, a required field when the public network is enabled.
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth, a required field when the public network is enabled.
 * @method array getIpRules() Obtain Public network allowlist.
 * @method void setIpRules(array $IpRules) Set Public network allowlist.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class CreateRocketMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var string Cluster specification. Supported specifications: 1. 	General: rocket-vip-basic-0; 2. Basic: rocket-vip-basic-1; 3. Standard: rocket-vip-basic-2; 4. Advanced I: rocket-vip-basic-3; 5. Advanced II: rocket-vip-basic-4.
     */
    public $Spec;

    /**
     * @var integer Number of nodes. Value range: 2–20.
     */
    public $NodeCount;

    /**
     * @var integer Single-node storage space, in GB. The minimum space is 200 GB.
     */
    public $StorageSize;

    /**
     * @var array The zone ID list for node deployment. For example, the ID of Guangzhou Zone 1 is 100001. For details, see the official website of the cloud platform.
     */
    public $ZoneIds;

    /**
     * @var VpcInfo Describes the VPC information.
     */
    public $VpcInfo;

    /**
     * @var integer Purchase duration, in months.
     */
    public $TimeSpan;

    /**
     * @var boolean Whether it is used for cloud migration. The default value is false.
     */
    public $SupportsMigrateToCloud;

    /**
     * @var boolean Specifies whether public network access is enabled.
     */
    public $EnablePublic;

    /**
     * @var integer Public network bandwidth, a required field when the public network is enabled.
     */
    public $Bandwidth;

    /**
     * @var array Public network allowlist.
     */
    public $IpRules;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $Name Instance name
     * @param string $Spec Cluster specification. Supported specifications: 1. 	General: rocket-vip-basic-0; 2. Basic: rocket-vip-basic-1; 3. Standard: rocket-vip-basic-2; 4. Advanced I: rocket-vip-basic-3; 5. Advanced II: rocket-vip-basic-4.
     * @param integer $NodeCount Number of nodes. Value range: 2–20.
     * @param integer $StorageSize Single-node storage space, in GB. The minimum space is 200 GB.
     * @param array $ZoneIds The zone ID list for node deployment. For example, the ID of Guangzhou Zone 1 is 100001. For details, see the official website of the cloud platform.
     * @param VpcInfo $VpcInfo Describes the VPC information.
     * @param integer $TimeSpan Purchase duration, in months.
     * @param boolean $SupportsMigrateToCloud Whether it is used for cloud migration. The default value is false.
     * @param boolean $EnablePublic Specifies whether public network access is enabled.
     * @param integer $Bandwidth Public network bandwidth, a required field when the public network is enabled.
     * @param array $IpRules Public network allowlist.
     * @param array $Tags Tag.
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

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new VpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("SupportsMigrateToCloud",$param) and $param["SupportsMigrateToCloud"] !== null) {
            $this->SupportsMigrateToCloud = $param["SupportsMigrateToCloud"];
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
