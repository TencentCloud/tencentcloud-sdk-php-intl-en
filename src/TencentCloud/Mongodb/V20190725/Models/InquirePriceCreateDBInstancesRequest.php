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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateDBInstances request structure.
 *
 * @method string getZone() Obtain Region and AZ information of the instance. For details, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
 * @method void setZone(string $Zone) Set Region and AZ information of the instance. For details, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
 * @method integer getNodeNum() Obtain -Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
- Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
 * @method void setNodeNum(integer $NodeNum) Set -Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
- Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
 * @method integer getMemory() Obtain Instance memory size.

 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specification, respectively.
 * @method void setMemory(integer $Memory) Set Instance memory size.

 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specification, respectively.
 * @method integer getVolume() Obtain Instance disk size.
 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.
 * @method void setVolume(integer $Volume) Set Instance disk size.
 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.
 * @method string getMongoVersion() Obtain Instance version information. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method void setMongoVersion(string $MongoVersion) Set Instance version information. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method string getMachineCode() Obtain Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk.
 * @method void setMachineCode(string $MachineCode) Set Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk.
 * @method integer getGoodsNum() Obtain Number of instances. Minimum value: 1. Maximum value: 10.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Minimum value: 1. Maximum value: 10.
 * @method string getClusterType() Obtain Instance type.

 - REPLSET: replica set.
 - SHARD: sharded cluster.
 * @method void setClusterType(string $ClusterType) Set Instance type.

 - REPLSET: replica set.
 - SHARD: sharded cluster.
 * @method integer getReplicateSetNum() Obtain  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
 * @method integer getPeriod() Obtain  - When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.
 - When pay-as-you-go is selected, that is, when <b>InstanceChargeType</b> is set to **POSTPAID_BY_HOUR**, this parameter only can be set to 1.
 * @method void setPeriod(integer $Period) Set  - When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.
 - When pay-as-you-go is selected, that is, when <b>InstanceChargeType</b> is set to **POSTPAID_BY_HOUR**, this parameter only can be set to 1.
 * @method string getInstanceChargeType() Obtain Instance payment method.
 - PREPAID: monthly subscription.
 - POSTPAID_BY_HOUR: pay-as-you-go.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance payment method.
 - PREPAID: monthly subscription.
 - POSTPAID_BY_HOUR: pay-as-you-go.
 * @method integer getMongosCpu() Obtain Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.
 * @method void setMongosCpu(integer $MongosCpu) Set Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.
 * @method integer getMongosMemory() Obtain Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.
 * @method void setMongosMemory(integer $MongosMemory) Set Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.
 * @method integer getMongosNum() Obtain Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.
 * @method void setMongosNum(integer $MongosNum) Set Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.
 * @method integer getConfigServerCpu() Obtain Specifies the number of ConfigServer CPU cores. The value is fixed as 1.
 * @method void setConfigServerCpu(integer $ConfigServerCpu) Set Specifies the number of ConfigServer CPU cores. The value is fixed as 1.
 * @method integer getConfigServerMemory() Obtain Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.
 * @method void setConfigServerMemory(integer $ConfigServerMemory) Set Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.
 * @method integer getConfigServerVolume() Obtain Specifies the ConfigServer disk size. The value is fixed as 20. Unit: GB. This parameter can be left blank.
 * @method void setConfigServerVolume(integer $ConfigServerVolume) Set Specifies the ConfigServer disk size. The value is fixed as 20. Unit: GB. This parameter can be left blank.
 */
class InquirePriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Region and AZ information of the instance. For details, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
     */
    public $Zone;

    /**
     * @var integer -Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
- Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
     */
    public $NodeNum;

    /**
     * @var integer Instance memory size.

 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specification, respectively.
     */
    public $Memory;

    /**
     * @var integer Instance disk size.
 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.
     */
    public $Volume;

    /**
     * @var string Instance version information. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     */
    public $MongoVersion;

    /**
     * @var string Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk.
     */
    public $MachineCode;

    /**
     * @var integer Number of instances. Minimum value: 1. Maximum value: 10.
     */
    public $GoodsNum;

    /**
     * @var string Instance type.

 - REPLSET: replica set.
 - SHARD: sharded cluster.
     */
    public $ClusterType;

    /**
     * @var integer  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
     */
    public $ReplicateSetNum;

    /**
     * @var integer  - When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.
 - When pay-as-you-go is selected, that is, when <b>InstanceChargeType</b> is set to **POSTPAID_BY_HOUR**, this parameter only can be set to 1.
     */
    public $Period;

    /**
     * @var string Instance payment method.
 - PREPAID: monthly subscription.
 - POSTPAID_BY_HOUR: pay-as-you-go.
     */
    public $InstanceChargeType;

    /**
     * @var integer Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.
     */
    public $MongosCpu;

    /**
     * @var integer Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.
     */
    public $MongosMemory;

    /**
     * @var integer Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.
     */
    public $MongosNum;

    /**
     * @var integer Specifies the number of ConfigServer CPU cores. The value is fixed as 1.
     */
    public $ConfigServerCpu;

    /**
     * @var integer Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.
     */
    public $ConfigServerMemory;

    /**
     * @var integer Specifies the ConfigServer disk size. The value is fixed as 20. Unit: GB. This parameter can be left blank.
     */
    public $ConfigServerVolume;

    /**
     * @param string $Zone Region and AZ information of the instance. For details, see [Regions and AZs](https://www.tencentcloud.comom/document/product/240/3637?from_cn_redirect=1).
     * @param integer $NodeNum -Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
- Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
     * @param integer $Memory Instance memory size.

 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specification, respectively.
     * @param integer $Volume Instance disk size.
 - Unit: GB.
 - For the value range, call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.
     * @param string $MongoVersion Instance version information. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     * @param string $MachineCode Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk.
     * @param integer $GoodsNum Number of instances. Minimum value: 1. Maximum value: 10.
     * @param string $ClusterType Instance type.

 - REPLSET: replica set.
 - SHARD: sharded cluster.
     * @param integer $ReplicateSetNum  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
     * @param integer $Period  - When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.
 - When pay-as-you-go is selected, that is, when <b>InstanceChargeType</b> is set to **POSTPAID_BY_HOUR**, this parameter only can be set to 1.
     * @param string $InstanceChargeType Instance payment method.
 - PREPAID: monthly subscription.
 - POSTPAID_BY_HOUR: pay-as-you-go.
     * @param integer $MongosCpu Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.
     * @param integer $MongosMemory Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.
     * @param integer $MongosNum Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.
     * @param integer $ConfigServerCpu Specifies the number of ConfigServer CPU cores. The value is fixed as 1.
     * @param integer $ConfigServerMemory Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.
     * @param integer $ConfigServerVolume Specifies the ConfigServer disk size. The value is fixed as 20. Unit: GB. This parameter can be left blank.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("MongosCpu",$param) and $param["MongosCpu"] !== null) {
            $this->MongosCpu = $param["MongosCpu"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("MongosNum",$param) and $param["MongosNum"] !== null) {
            $this->MongosNum = $param["MongosNum"];
        }

        if (array_key_exists("ConfigServerCpu",$param) and $param["ConfigServerCpu"] !== null) {
            $this->ConfigServerCpu = $param["ConfigServerCpu"];
        }

        if (array_key_exists("ConfigServerMemory",$param) and $param["ConfigServerMemory"] !== null) {
            $this->ConfigServerMemory = $param["ConfigServerMemory"];
        }

        if (array_key_exists("ConfigServerVolume",$param) and $param["ConfigServerVolume"] !== null) {
            $this->ConfigServerVolume = $param["ConfigServerVolume"];
        }
    }
}
