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
 * @method string getZone() Obtain <p>Region and AZ information of the instance. For details, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method void setZone(string $Zone) Set <p>Region and AZ information of the instance. For details, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method integer getNodeNum() Obtain <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
 * @method void setNodeNum(integer $NodeNum) Set <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
 * @method integer getMemory() Obtain <p>Instance memory size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li></ul>
 * @method void setMemory(integer $Memory) Set <p>Instance memory size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li></ul>
 * @method integer getVolume() Obtain <p>Instance disk size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.</li></ul>
 * @method void setVolume(integer $Volume) Set <p>Instance disk size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.</li></ul>
 * @method string getMongoVersion() Obtain <p>Instance version information. The <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger storage engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger storage engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger storage engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger storage engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger storage engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger storage engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger storage engine version.</li></ul>
 * @method void setMongoVersion(string $MongoVersion) Set <p>Instance version information. The <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger storage engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger storage engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger storage engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger storage engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger storage engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger storage engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger storage engine version.</li></ul>
 * @method string getMachineCode() Obtain <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 * @method void setMachineCode(string $MachineCode) Set <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 * @method integer getGoodsNum() Obtain <p>Number of instances. Value range: [1,10].</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Number of instances. Value range: [1,10].</p>
 * @method string getClusterType() Obtain <p>Instance type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
 * @method void setClusterType(string $ClusterType) Set <p>Instance type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
 * @method integer getReplicateSetNum() Obtain <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
 * @method integer getPeriod() Obtain <ul><li>When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.<br>- When the pay-as-you-go mode is selected, that is, when <b>InstanceChargeType</b> is set to <strong>POSTPAID_BY_HOUR</strong>, this parameter can only be set to 1.</li></ul>
 * @method void setPeriod(integer $Period) Set <ul><li>When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.<br>- When the pay-as-you-go mode is selected, that is, when <b>InstanceChargeType</b> is set to <strong>POSTPAID_BY_HOUR</strong>, this parameter can only be set to 1.</li></ul>
 * @method string getInstanceChargeType() Obtain <p>Instance payment method.</p><ul><li>PREPAID: Annual and monthly subscription.</li><li>POSTPAID_BY_HOUR: Pay-As-You-Go.</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance payment method.</p><ul><li>PREPAID: Annual and monthly subscription.</li><li>POSTPAID_BY_HOUR: Pay-As-You-Go.</li></ul>
 * @method integer getMongosCpu() Obtain <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.</p>
 * @method void setMongosCpu(integer $MongosCpu) Set <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.</p>
 * @method integer getMongosMemory() Obtain <p>Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.</p>
 * @method void setMongosMemory(integer $MongosMemory) Set <p>Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.</p>
 * @method integer getMongosNum() Obtain <p>Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.</p>
 * @method void setMongosNum(integer $MongosNum) Set <p>Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.</p>
 * @method integer getConfigServerCpu() Obtain <p>Refers to the number of ConfigServer CPU cores, value fixed at 1, unit: GB. This parameter can be left blank.</p>
 * @method void setConfigServerCpu(integer $ConfigServerCpu) Set <p>Refers to the number of ConfigServer CPU cores, value fixed at 1, unit: GB. This parameter can be left blank.</p>
 * @method integer getConfigServerMemory() Obtain <p>Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.</p>
 * @method void setConfigServerMemory(integer $ConfigServerMemory) Set <p>Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.</p>
 * @method integer getConfigServerVolume() Obtain <p>Specifies the ConfigServer disk size. The value is fixed at 20. Unit: GB. This parameter can be left blank.</p>
 * @method void setConfigServerVolume(integer $ConfigServerVolume) Set <p>Specifies the ConfigServer disk size. The value is fixed at 20. Unit: GB. This parameter can be left blank.</p>
 * @method integer getReadonlyNodeNum() Obtain <ul><li>Create a replica set instance. It refers to the read-only node quantity in each replica set.</li><li>Create a sharded cluster instance. It refers to the read-only node quantity in each shard.<br>Value range: [1,5].</li></ul>
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set <ul><li>Create a replica set instance. It refers to the read-only node quantity in each replica set.</li><li>Create a sharded cluster instance. It refers to the read-only node quantity in each shard.<br>Value range: [1,5].</li></ul>
 * @method integer getCpu() Obtain <p>CPU size of the instance.</p><ul><li>Unit: C.</li><li>Value range: Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li><li>Note: You need to pass in the CPU core size corresponding to the memory when querying the price of a Common I Instance Type.</li></ul>
 * @method void setCpu(integer $Cpu) Set <p>CPU size of the instance.</p><ul><li>Unit: C.</li><li>Value range: Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li><li>Note: You need to pass in the CPU core size corresponding to the memory when querying the price of a Common I Instance Type.</li></ul>
 */
class InquirePriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Region and AZ information of the instance. For details, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     */
    public $Zone;

    /**
     * @var integer <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>Instance memory size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li></ul>
     */
    public $Memory;

    /**
     * @var integer <p>Instance disk size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.</li></ul>
     */
    public $Volume;

    /**
     * @var string <p>Instance version information. The <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger storage engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger storage engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger storage engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger storage engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger storage engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger storage engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger storage engine version.</li></ul>
     */
    public $MongoVersion;

    /**
     * @var string <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
     */
    public $MachineCode;

    /**
     * @var integer <p>Number of instances. Value range: [1,10].</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>Instance type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
     */
    public $ClusterType;

    /**
     * @var integer <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <ul><li>When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.<br>- When the pay-as-you-go mode is selected, that is, when <b>InstanceChargeType</b> is set to <strong>POSTPAID_BY_HOUR</strong>, this parameter can only be set to 1.</li></ul>
     */
    public $Period;

    /**
     * @var string <p>Instance payment method.</p><ul><li>PREPAID: Annual and monthly subscription.</li><li>POSTPAID_BY_HOUR: Pay-As-You-Go.</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.</p>
     */
    public $MongosCpu;

    /**
     * @var integer <p>Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.</p>
     */
    public $MongosMemory;

    /**
     * @var integer <p>Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.</p>
     */
    public $MongosNum;

    /**
     * @var integer <p>Refers to the number of ConfigServer CPU cores, value fixed at 1, unit: GB. This parameter can be left blank.</p>
     */
    public $ConfigServerCpu;

    /**
     * @var integer <p>Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.</p>
     */
    public $ConfigServerMemory;

    /**
     * @var integer <p>Specifies the ConfigServer disk size. The value is fixed at 20. Unit: GB. This parameter can be left blank.</p>
     */
    public $ConfigServerVolume;

    /**
     * @var integer <ul><li>Create a replica set instance. It refers to the read-only node quantity in each replica set.</li><li>Create a sharded cluster instance. It refers to the read-only node quantity in each shard.<br>Value range: [1,5].</li></ul>
     */
    public $ReadonlyNodeNum;

    /**
     * @var integer <p>CPU size of the instance.</p><ul><li>Unit: C.</li><li>Value range: Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li><li>Note: You need to pass in the CPU core size corresponding to the memory when querying the price of a Common I Instance Type.</li></ul>
     */
    public $Cpu;

    /**
     * @param string $Zone <p>Region and AZ information of the instance. For details, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     * @param integer $NodeNum <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
     * @param integer $Memory <p>Instance memory size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li></ul>
     * @param integer $Volume <p>Instance disk size.</p><ul><li>Unit: GB.</li><li>For the value range, call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The MinStorage and MaxStorage parameters in the returned data structure SpecItems correspond to the minimum and maximum disk specifications, respectively.</li></ul>
     * @param string $MongoVersion <p>Instance version information. The <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API can be called to obtain specific supported versions. The MongoVersionCode parameter in the returned data structure SpecItems indicates the information on versions supported by instances. The corresponding relationship between version information and version number is as follows:</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger storage engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger storage engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger storage engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger storage engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger storage engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger storage engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger storage engine version.</li></ul>
     * @param string $MachineCode <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
     * @param integer $GoodsNum <p>Number of instances. Value range: [1,10].</p>
     * @param string $ClusterType <p>Instance type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
     * @param integer $ReplicateSetNum <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
     * @param integer $Period <ul><li>When the monthly subscription mode is selected, that is, when <b>InstanceChargeType</b> is set to <b>PREPAID</b>, this parameter is required for specifying the purchase duration of instances. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.<br>- When the pay-as-you-go mode is selected, that is, when <b>InstanceChargeType</b> is set to <strong>POSTPAID_BY_HOUR</strong>, this parameter can only be set to 1.</li></ul>
     * @param string $InstanceChargeType <p>Instance payment method.</p><ul><li>PREPAID: Annual and monthly subscription.</li><li>POSTPAID_BY_HOUR: Pay-As-You-Go.</li></ul>
     * @param integer $MongosCpu <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase. If this parameter is left blank, the default value 2 is used.</p>
     * @param integer $MongosMemory <p>Mongos node memory size. - This parameter is required during sharded cluster instance purchase. - Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores). If this parameter is left blank, the default value 4 is used.</p>
     * @param integer $MongosNum <p>Specifies the number of Mongos nodes. Value range: [3,32]. For querying the price of sharded cluster instances, this parameter is required. If it is left blank, the default value 3 is used.</p>
     * @param integer $ConfigServerCpu <p>Refers to the number of ConfigServer CPU cores, value fixed at 1, unit: GB. This parameter can be left blank.</p>
     * @param integer $ConfigServerMemory <p>Specifies the ConfigServer memory size. The value is fixed as 2. Unit: GB. This parameter can be left blank.</p>
     * @param integer $ConfigServerVolume <p>Specifies the ConfigServer disk size. The value is fixed at 20. Unit: GB. This parameter can be left blank.</p>
     * @param integer $ReadonlyNodeNum <ul><li>Create a replica set instance. It refers to the read-only node quantity in each replica set.</li><li>Create a sharded cluster instance. It refers to the read-only node quantity in each shard.<br>Value range: [1,5].</li></ul>
     * @param integer $Cpu <p>CPU size of the instance.</p><ul><li>Unit: C.</li><li>Value range: Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API. The CPU and Memory parameters in the returned data structure SpecItems correspond to the number of CPU cores and the memory specifications, respectively.</li><li>Note: You need to pass in the CPU core size corresponding to the memory when querying the price of a Common I Instance Type.</li></ul>
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

        if (array_key_exists("ReadonlyNodeNum",$param) and $param["ReadonlyNodeNum"] !== null) {
            $this->ReadonlyNodeNum = $param["ReadonlyNodeNum"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
