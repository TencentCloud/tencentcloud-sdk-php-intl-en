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
 * CreateDBInstance request structure.
 *
 * @method integer getNodeNum() Obtain <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
 * @method void setNodeNum(integer $NodeNum) Set <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
 * @method integer getMemory() Obtain <p>Instance memory size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable memory specifications.</p>
 * @method void setMemory(integer $Memory) Set <p>Instance memory size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable memory specifications.</p>
 * @method integer getVolume() Obtain <p>Instance disk size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.</p>
 * @method void setVolume(integer $Volume) Set <p>Instance disk size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.</p>
 * @method string getMongoVersion() Obtain <p>Refers to version information. For supported versions, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to query.</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger engine version.</li></ul>
 * @method void setMongoVersion(string $MongoVersion) Set <p>Refers to version information. For supported versions, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to query.</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger engine version.</li></ul>
 * @method integer getGoodsNum() Obtain <p>Number of instances. The minimum value is 1, and the maximum value is 30.</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Number of instances. The minimum value is 1, and the maximum value is 30.</p>
 * @method string getZone() Obtain <p>AZ information. The input format must be ap-guangzhou-2.</p><ul><li>For details, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to obtain them.</li><li>This parameter is the primary AZ. If multi-AZ deployment is used, Zone must be one of AvailabilityZoneList.</li></ul>
 * @method void setZone(string $Zone) Set <p>AZ information. The input format must be ap-guangzhou-2.</p><ul><li>For details, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to obtain them.</li><li>This parameter is the primary AZ. If multi-AZ deployment is used, Zone must be one of AvailabilityZoneList.</li></ul>
 * @method integer getPeriod() Obtain <p>Specifies the purchase duration during instance purchase. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.</p>
 * @method void setPeriod(integer $Period) Set <p>Specifies the purchase duration during instance purchase. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.</p>
 * @method string getMachineCode() Obtain <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 * @method void setMachineCode(string $MachineCode) Set <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
 * @method string getClusterType() Obtain <p>Instance architecture type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
 * @method void setClusterType(string $ClusterType) Set <p>Instance architecture type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
 * @method integer getReplicateSetNum() Obtain <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
 * @method integer getProjectId() Obtain <p>Project ID.</p><ul><li>If this parameter is not set, the default project is used.</li><li>You can obtain the project ID on the <a href="https://console.cloud.tencent.com/project">MongoDB console project management</a> page.</li></ul>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p><ul><li>If this parameter is not set, the default project is used.</li><li>You can obtain the project ID on the <a href="https://console.cloud.tencent.com/project">MongoDB console project management</a> page.</li></ul>
 * @method string getVpcId() Obtain <p>VPC ID.</p><ul><li>Only private networks can be configured, and a private network in the same region as the instance must be selected. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain a used private network ID.</li><li>After successful instance creation, VPC replacement is allowed. For detailed operations, see <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Changing the Network</a>.</li></ul>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID.</p><ul><li>Only private networks can be configured, and a private network in the same region as the instance must be selected. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain a used private network ID.</li><li>After successful instance creation, VPC replacement is allowed. For detailed operations, see <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Changing the Network</a>.</li></ul>
 * @method string getSubnetId() Obtain <p>Subnet ID of the VPC.</p><ul><li>You must specify a subnet within the selected private network. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain the subnet ID.</li><li>After the instance is successfully created, replacement of the private network and subnet is allowed. For detailed operations, please refer to <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Network Change</a>.</li></ul>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID of the VPC.</p><ul><li>You must specify a subnet within the selected private network. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain the subnet ID.</li><li>After the instance is successfully created, replacement of the private network and subnet is allowed. For detailed operations, please refer to <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Network Change</a>.</li></ul>
 * @method string getPassword() Obtain <p>Instance password. The requirements are as follows:</p><ul><li>Character count is [8,32].</li><li>Enter characters within [A,Z], [a,z], [0,9].</li><li>Special characters include: exclamation mark "!", at "@", pound sign "#", percent sign "%", caret "^", asterisk "*", brackets "()", underscore "_".</li><li>Cannot set a single letter or number.</li></ul>
 * @method void setPassword(string $Password) Set <p>Instance password. The requirements are as follows:</p><ul><li>Character count is [8,32].</li><li>Enter characters within [A,Z], [a,z], [0,9].</li><li>Special characters include: exclamation mark "!", at "@", pound sign "#", percent sign "%", caret "^", asterisk "*", brackets "()", underscore "_".</li><li>Cannot set a single letter or number.</li></ul>
 * @method array getTags() Obtain <p>Instance tag information.</p>
 * @method void setTags(array $Tags) Set <p>Instance tag information.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Auto-renewal flag.</p><ul><li>0: no auto-renewal.</li><li>1: auto-renewal.</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Auto-renewal flag.</p><ul><li>0: no auto-renewal.</li><li>1: auto-renewal.</li></ul>
 * @method integer getAutoVoucher() Obtain <p>Indicates whether to automatically select voucher.</p><ul><li>1: Yes.</li><li>0: No. Default is 0.</li></ul>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Indicates whether to automatically select voucher.</p><ul><li>1: Yes.</li><li>0: No. Default is 0.</li></ul>
 * @method integer getClone() Obtain <p>Instance type.</p><ul><li>1: Formal instance.</li><li>3: Read-only instance.</li><li>4: Disaster recovery instance.</li><li>5: Clone instance. Note: RestoreTime is a required item when you clone an instance.</li></ul>
 * @method void setClone(integer $Clone) Set <p>Instance type.</p><ul><li>1: Formal instance.</li><li>3: Read-only instance.</li><li>4: Disaster recovery instance.</li><li>5: Clone instance. Note: RestoreTime is a required item when you clone an instance.</li></ul>
 * @method string getFather() Obtain <p>Parent instance ID.</p><ul><li>When the <strong>Clone</strong> parameter is 3 or 4, that is, the instance is read-only or a disaster recovery instance, this parameter must be configured.</li><li>Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the parent instance ID in the instance list.</li></ul>
 * @method void setFather(string $Father) Set <p>Parent instance ID.</p><ul><li>When the <strong>Clone</strong> parameter is 3 or 4, that is, the instance is read-only or a disaster recovery instance, this parameter must be configured.</li><li>Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the parent instance ID in the instance list.</li></ul>
 * @method array getSecurityGroup() Obtain <p>Security group ID. Log in to the <a href="https://console.cloud.tencent.com/vpc/security-group">security group console</a> to obtain the ID of the security group within the same region as the database instance.</p>
 * @method void setSecurityGroup(array $SecurityGroup) Set <p>Security group ID. Log in to the <a href="https://console.cloud.tencent.com/vpc/security-group">security group console</a> to obtain the ID of the security group within the same region as the database instance.</p>
 * @method string getRestoreTime() Obtain <p>Rollback time of the cloned instance. It is required when the Clone value is 5 or 6. - This parameter is required for cloned instances. Format: 2021-08-13 16:30:00. - Rollback time range: Only data within the last 7 days can be rolled back.</p>
 * @method void setRestoreTime(string $RestoreTime) Set <p>Rollback time of the cloned instance. It is required when the Clone value is 5 or 6. - This parameter is required for cloned instances. Format: 2021-08-13 16:30:00. - Rollback time range: Only data within the last 7 days can be rolled back.</p>
 * @method string getInstanceName() Obtain <p>Instance name. Only Chinese, English, digits, underscores (_), and hyphens (-) are supported, with a maximum length of 128 characters. When purchasing database instances in batches, you can efficiently set instance names by using custom pattern strings and automatically ascending numeric suffixes.</p><ul><li>Basic mode: prefix + automatic ascending number (starting from 1 by default). Only a custom instance name prefix is required for <strong>lnstanceName</strong>. For example, it can be set to cmgo. If the purchase quantity is set to 5, after purchase, the instances will be sequentially named cmgo1, cmgo2, cmgo3, cmgo4, and cmgo5, respectively.</li><li>Custom starting number mode: prefix + {R:x} (x is the custom starting number). <strong>InstanceName</strong> requires "prefix{R:x}". For example, cmgo{R:3}. If the purchase quantity is set to 5, the instance names will be cmgo3, cmgo4, cmgo5, cmgo6, and cmgo7.</li><li>Composite pattern string: prefix1{R:x} + prefix2{R:y} + ⋯ + fixed suffix, where x and y are the starting numbers for each prefix. <strong>InstanceName</strong> requires a composite pattern string. For example, cmgo{R:10}_node{R:12}_db. If the batch purchase quantity is set to 5, the instance names will be cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, and cmgo14_node16_db.</li></ul>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. Only Chinese, English, digits, underscores (_), and hyphens (-) are supported, with a maximum length of 128 characters. When purchasing database instances in batches, you can efficiently set instance names by using custom pattern strings and automatically ascending numeric suffixes.</p><ul><li>Basic mode: prefix + automatic ascending number (starting from 1 by default). Only a custom instance name prefix is required for <strong>lnstanceName</strong>. For example, it can be set to cmgo. If the purchase quantity is set to 5, after purchase, the instances will be sequentially named cmgo1, cmgo2, cmgo3, cmgo4, and cmgo5, respectively.</li><li>Custom starting number mode: prefix + {R:x} (x is the custom starting number). <strong>InstanceName</strong> requires "prefix{R:x}". For example, cmgo{R:3}. If the purchase quantity is set to 5, the instance names will be cmgo3, cmgo4, cmgo5, cmgo6, and cmgo7.</li><li>Composite pattern string: prefix1{R:x} + prefix2{R:y} + ⋯ + fixed suffix, where x and y are the starting numbers for each prefix. <strong>InstanceName</strong> requires a composite pattern string. For example, cmgo{R:10}_node{R:12}_db. If the batch purchase quantity is set to 5, the instance names will be cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, and cmgo14_node16_db.</li></ul>
 * @method array getAvailabilityZoneList() Obtain <p>For cloud database instances in multi-AZ deployment, specify the availability zone list.</p><ul><li>For instances in multi-AZ deployment mode, the <strong>Zone</strong> parameter specifies the primary AZ, and <strong>AvailabilityZoneList</strong> specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].</li><li>Use the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to access cloud databases and obtain availability zone information planned for different regions, so that you can assign valid AZs.</li><li>Nodes in multi-AZ deployment can only be deployed in 3 different availability zones. Deploying most nodes of a cluster in the same availability zone is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same zone.</li></ul>
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) Set <p>For cloud database instances in multi-AZ deployment, specify the availability zone list.</p><ul><li>For instances in multi-AZ deployment mode, the <strong>Zone</strong> parameter specifies the primary AZ, and <strong>AvailabilityZoneList</strong> specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].</li><li>Use the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to access cloud databases and obtain availability zone information planned for different regions, so that you can assign valid AZs.</li><li>Nodes in multi-AZ deployment can only be deployed in 3 different availability zones. Deploying most nodes of a cluster in the same availability zone is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same zone.</li></ul>
 * @method integer getMongosCpu() Obtain <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.</p>
 * @method void setMongosCpu(integer $MongosCpu) Set <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.</p>
 * @method integer getMongosMemory() Obtain <p>Mongos node memory size.</p><ul><li>This parameter is required during sharded cluster instance purchase.</li><li>Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores).</li></ul>
 * @method void setMongosMemory(integer $MongosMemory) Set <p>Mongos node memory size.</p><ul><li>This parameter is required during sharded cluster instance purchase.</li><li>Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores).</li></ul>
 * @method integer getMongosNodeNum() Obtain <p>Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.</p><ul><li>For single-AZ deployment instances, the quantity range is [3,32].</li><li>For instances deployed across multiple availability zones, the quantity range is [6,32].</li></ul>
 * @method void setMongosNodeNum(integer $MongosNodeNum) Set <p>Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.</p><ul><li>For single-AZ deployment instances, the quantity range is [3,32].</li><li>For instances deployed across multiple availability zones, the quantity range is [6,32].</li></ul>
 * @method integer getReadonlyNodeNum() Obtain <p>Number of read-only nodes. Value ranges from 0 to 5.</p>
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set <p>Number of read-only nodes. Value ranges from 0 to 5.</p>
 * @method array getReadonlyNodeAvailabilityZoneList() Obtain <p>Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when <strong>ReadonlyNodeNum</strong> is not set to <strong>0</strong>.</p>
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) Set <p>Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when <strong>ReadonlyNodeNum</strong> is not set to <strong>0</strong>.</p>
 * @method string getHiddenZone() Obtain <p>Availability zone of the Hidden node. To deploy instances across availability zones, you must configure this parameter.</p>
 * @method void setHiddenZone(string $HiddenZone) Set <p>Availability zone of the Hidden node. To deploy instances across availability zones, you must configure this parameter.</p>
 * @method string getParamTemplateId() Obtain <p>Parameter template ID.</p><ul><li>A parameter template is a collection of preset specific parameters applicable to quick configuration of new MongoDB instances. Proper use of parameter templates can effectively improve database deployment efficiency and operating performance.</li><li>The parameter template ID can be obtained through the <a href="https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1">DescribeDBInstanceParamTpl</a> API. Please select the parameter template ID corresponding to your instance version and architecture.</li></ul>
 * @method void setParamTemplateId(string $ParamTemplateId) Set <p>Parameter template ID.</p><ul><li>A parameter template is a collection of preset specific parameters applicable to quick configuration of new MongoDB instances. Proper use of parameter templates can effectively improve database deployment efficiency and operating performance.</li><li>The parameter template ID can be obtained through the <a href="https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1">DescribeDBInstanceParamTpl</a> API. Please select the parameter template ID corresponding to your instance version and architecture.</li></ul>
 * @method integer getCpuCore() Obtain <p>Instance CPU core size. Unit: C. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable CPU specifications.<br>Note: CPU size must be set for common I Instance Type.</p>
 * @method void setCpuCore(integer $CpuCore) Set <p>Instance CPU core size. Unit: C. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable CPU specifications.<br>Note: CPU size must be set for common I Instance Type.</p>
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>Instance memory size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable memory specifications.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance disk size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.</p>
     */
    public $Volume;

    /**
     * @var string <p>Refers to version information. For supported versions, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to query.</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger engine version.</li></ul>
     */
    public $MongoVersion;

    /**
     * @var integer <p>Number of instances. The minimum value is 1, and the maximum value is 30.</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>AZ information. The input format must be ap-guangzhou-2.</p><ul><li>For details, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to obtain them.</li><li>This parameter is the primary AZ. If multi-AZ deployment is used, Zone must be one of AvailabilityZoneList.</li></ul>
     */
    public $Zone;

    /**
     * @var integer <p>Specifies the purchase duration during instance purchase. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.</p>
     */
    public $Period;

    /**
     * @var string <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
     */
    public $MachineCode;

    /**
     * @var string <p>Instance architecture type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
     */
    public $ClusterType;

    /**
     * @var integer <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <p>Project ID.</p><ul><li>If this parameter is not set, the default project is used.</li><li>You can obtain the project ID on the <a href="https://console.cloud.tencent.com/project">MongoDB console project management</a> page.</li></ul>
     */
    public $ProjectId;

    /**
     * @var string <p>VPC ID.</p><ul><li>Only private networks can be configured, and a private network in the same region as the instance must be selected. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain a used private network ID.</li><li>After successful instance creation, VPC replacement is allowed. For detailed operations, see <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Changing the Network</a>.</li></ul>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID of the VPC.</p><ul><li>You must specify a subnet within the selected private network. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain the subnet ID.</li><li>After the instance is successfully created, replacement of the private network and subnet is allowed. For detailed operations, please refer to <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Network Change</a>.</li></ul>
     */
    public $SubnetId;

    /**
     * @var string <p>Instance password. The requirements are as follows:</p><ul><li>Character count is [8,32].</li><li>Enter characters within [A,Z], [a,z], [0,9].</li><li>Special characters include: exclamation mark "!", at "@", pound sign "#", percent sign "%", caret "^", asterisk "*", brackets "()", underscore "_".</li><li>Cannot set a single letter or number.</li></ul>
     */
    public $Password;

    /**
     * @var array <p>Instance tag information.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Auto-renewal flag.</p><ul><li>0: no auto-renewal.</li><li>1: auto-renewal.</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Indicates whether to automatically select voucher.</p><ul><li>1: Yes.</li><li>0: No. Default is 0.</li></ul>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>Instance type.</p><ul><li>1: Formal instance.</li><li>3: Read-only instance.</li><li>4: Disaster recovery instance.</li><li>5: Clone instance. Note: RestoreTime is a required item when you clone an instance.</li></ul>
     */
    public $Clone;

    /**
     * @var string <p>Parent instance ID.</p><ul><li>When the <strong>Clone</strong> parameter is 3 or 4, that is, the instance is read-only or a disaster recovery instance, this parameter must be configured.</li><li>Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the parent instance ID in the instance list.</li></ul>
     */
    public $Father;

    /**
     * @var array <p>Security group ID. Log in to the <a href="https://console.cloud.tencent.com/vpc/security-group">security group console</a> to obtain the ID of the security group within the same region as the database instance.</p>
     */
    public $SecurityGroup;

    /**
     * @var string <p>Rollback time of the cloned instance. It is required when the Clone value is 5 or 6. - This parameter is required for cloned instances. Format: 2021-08-13 16:30:00. - Rollback time range: Only data within the last 7 days can be rolled back.</p>
     */
    public $RestoreTime;

    /**
     * @var string <p>Instance name. Only Chinese, English, digits, underscores (_), and hyphens (-) are supported, with a maximum length of 128 characters. When purchasing database instances in batches, you can efficiently set instance names by using custom pattern strings and automatically ascending numeric suffixes.</p><ul><li>Basic mode: prefix + automatic ascending number (starting from 1 by default). Only a custom instance name prefix is required for <strong>lnstanceName</strong>. For example, it can be set to cmgo. If the purchase quantity is set to 5, after purchase, the instances will be sequentially named cmgo1, cmgo2, cmgo3, cmgo4, and cmgo5, respectively.</li><li>Custom starting number mode: prefix + {R:x} (x is the custom starting number). <strong>InstanceName</strong> requires "prefix{R:x}". For example, cmgo{R:3}. If the purchase quantity is set to 5, the instance names will be cmgo3, cmgo4, cmgo5, cmgo6, and cmgo7.</li><li>Composite pattern string: prefix1{R:x} + prefix2{R:y} + ⋯ + fixed suffix, where x and y are the starting numbers for each prefix. <strong>InstanceName</strong> requires a composite pattern string. For example, cmgo{R:10}_node{R:12}_db. If the batch purchase quantity is set to 5, the instance names will be cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, and cmgo14_node16_db.</li></ul>
     */
    public $InstanceName;

    /**
     * @var array <p>For cloud database instances in multi-AZ deployment, specify the availability zone list.</p><ul><li>For instances in multi-AZ deployment mode, the <strong>Zone</strong> parameter specifies the primary AZ, and <strong>AvailabilityZoneList</strong> specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].</li><li>Use the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to access cloud databases and obtain availability zone information planned for different regions, so that you can assign valid AZs.</li><li>Nodes in multi-AZ deployment can only be deployed in 3 different availability zones. Deploying most nodes of a cluster in the same availability zone is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same zone.</li></ul>
     */
    public $AvailabilityZoneList;

    /**
     * @var integer <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.</p>
     */
    public $MongosCpu;

    /**
     * @var integer <p>Mongos node memory size.</p><ul><li>This parameter is required during sharded cluster instance purchase.</li><li>Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores).</li></ul>
     */
    public $MongosMemory;

    /**
     * @var integer <p>Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.</p><ul><li>For single-AZ deployment instances, the quantity range is [3,32].</li><li>For instances deployed across multiple availability zones, the quantity range is [6,32].</li></ul>
     */
    public $MongosNodeNum;

    /**
     * @var integer <p>Number of read-only nodes. Value ranges from 0 to 5.</p>
     */
    public $ReadonlyNodeNum;

    /**
     * @var array <p>Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when <strong>ReadonlyNodeNum</strong> is not set to <strong>0</strong>.</p>
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string <p>Availability zone of the Hidden node. To deploy instances across availability zones, you must configure this parameter.</p>
     */
    public $HiddenZone;

    /**
     * @var string <p>Parameter template ID.</p><ul><li>A parameter template is a collection of preset specific parameters applicable to quick configuration of new MongoDB instances. Proper use of parameter templates can effectively improve database deployment efficiency and operating performance.</li><li>The parameter template ID can be obtained through the <a href="https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1">DescribeDBInstanceParamTpl</a> API. Please select the parameter template ID corresponding to your instance version and architecture.</li></ul>
     */
    public $ParamTemplateId;

    /**
     * @var integer <p>Instance CPU core size. Unit: C. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable CPU specifications.<br>Note: CPU size must be set for common I Instance Type.</p>
     */
    public $CpuCore;

    /**
     * @param integer $NodeNum <ul><li>Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each replica set.</li><li>Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum number of nodes supported for each shard.</li></ul>
     * @param integer $Memory <p>Instance memory size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable memory specifications.</p>
     * @param integer $Volume <p>Instance disk size. Unit: GB. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.</p>
     * @param string $MongoVersion <p>Refers to version information. For supported versions, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to query.</p><ul><li>MONGO_40_WT: MongoDB 4.0 WiredTiger engine version.</li><li>MONGO_42_WT: MongoDB 4.2 WiredTiger engine version.</li><li>MONGO_44_WT: MongoDB 4.4 WiredTiger engine version.</li><li>MONGO_50_WT: MongoDB 5.0 WiredTiger engine version.</li><li>MONGO_60_WT: MongoDB 6.0 WiredTiger engine version.</li><li>MONGO_70_WT: MongoDB 7.0 WiredTiger engine version.</li><li>MONGO_80_WT: MongoDB 8.0 WiredTiger engine version.</li></ul>
     * @param integer $GoodsNum <p>Number of instances. The minimum value is 1, and the maximum value is 30.</p>
     * @param string $Zone <p>AZ information. The input format must be ap-guangzhou-2.</p><ul><li>For details, use the interface <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> to obtain them.</li><li>This parameter is the primary AZ. If multi-AZ deployment is used, Zone must be one of AvailabilityZoneList.</li></ul>
     * @param integer $Period <p>Specifies the purchase duration during instance purchase. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36. Unit: months.</p>
     * @param string $MachineCode <p>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud disk edition).</li></ul><p>Note: Allowlist specification types are under allowlist control. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</p>
     * @param string $ClusterType <p>Instance architecture type.</p><ul><li>REPLSET (replica set)</li><li>SHARD (sharded cluster)</li></ul>
     * @param integer $ReplicateSetNum <ul><li>Specifies the number of replica sets during replica set instance creation. This parameter can only be 1.</li><li>Specifies the number of shards during sharded cluster instance creation. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.</li></ul>
     * @param integer $ProjectId <p>Project ID.</p><ul><li>If this parameter is not set, the default project is used.</li><li>You can obtain the project ID on the <a href="https://console.cloud.tencent.com/project">MongoDB console project management</a> page.</li></ul>
     * @param string $VpcId <p>VPC ID.</p><ul><li>Only private networks can be configured, and a private network in the same region as the instance must be selected. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain a used private network ID.</li><li>After successful instance creation, VPC replacement is allowed. For detailed operations, see <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Changing the Network</a>.</li></ul>
     * @param string $SubnetId <p>Subnet ID of the VPC.</p><ul><li>You must specify a subnet within the selected private network. Log in to the <a href="https://console.cloud.tencent.com/vpc">VPC console</a> to obtain the subnet ID.</li><li>After the instance is successfully created, replacement of the private network and subnet is allowed. For detailed operations, please refer to <a href="https://www.tencentcloud.com/document/product/239/30910?from_cn_redirect=1">Network Change</a>.</li></ul>
     * @param string $Password <p>Instance password. The requirements are as follows:</p><ul><li>Character count is [8,32].</li><li>Enter characters within [A,Z], [a,z], [0,9].</li><li>Special characters include: exclamation mark "!", at "@", pound sign "#", percent sign "%", caret "^", asterisk "*", brackets "()", underscore "_".</li><li>Cannot set a single letter or number.</li></ul>
     * @param array $Tags <p>Instance tag information.</p>
     * @param integer $AutoRenewFlag <p>Auto-renewal flag.</p><ul><li>0: no auto-renewal.</li><li>1: auto-renewal.</li></ul>
     * @param integer $AutoVoucher <p>Indicates whether to automatically select voucher.</p><ul><li>1: Yes.</li><li>0: No. Default is 0.</li></ul>
     * @param integer $Clone <p>Instance type.</p><ul><li>1: Formal instance.</li><li>3: Read-only instance.</li><li>4: Disaster recovery instance.</li><li>5: Clone instance. Note: RestoreTime is a required item when you clone an instance.</li></ul>
     * @param string $Father <p>Parent instance ID.</p><ul><li>When the <strong>Clone</strong> parameter is 3 or 4, that is, the instance is read-only or a disaster recovery instance, this parameter must be configured.</li><li>Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the parent instance ID in the instance list.</li></ul>
     * @param array $SecurityGroup <p>Security group ID. Log in to the <a href="https://console.cloud.tencent.com/vpc/security-group">security group console</a> to obtain the ID of the security group within the same region as the database instance.</p>
     * @param string $RestoreTime <p>Rollback time of the cloned instance. It is required when the Clone value is 5 or 6. - This parameter is required for cloned instances. Format: 2021-08-13 16:30:00. - Rollback time range: Only data within the last 7 days can be rolled back.</p>
     * @param string $InstanceName <p>Instance name. Only Chinese, English, digits, underscores (_), and hyphens (-) are supported, with a maximum length of 128 characters. When purchasing database instances in batches, you can efficiently set instance names by using custom pattern strings and automatically ascending numeric suffixes.</p><ul><li>Basic mode: prefix + automatic ascending number (starting from 1 by default). Only a custom instance name prefix is required for <strong>lnstanceName</strong>. For example, it can be set to cmgo. If the purchase quantity is set to 5, after purchase, the instances will be sequentially named cmgo1, cmgo2, cmgo3, cmgo4, and cmgo5, respectively.</li><li>Custom starting number mode: prefix + {R:x} (x is the custom starting number). <strong>InstanceName</strong> requires "prefix{R:x}". For example, cmgo{R:3}. If the purchase quantity is set to 5, the instance names will be cmgo3, cmgo4, cmgo5, cmgo6, and cmgo7.</li><li>Composite pattern string: prefix1{R:x} + prefix2{R:y} + ⋯ + fixed suffix, where x and y are the starting numbers for each prefix. <strong>InstanceName</strong> requires a composite pattern string. For example, cmgo{R:10}_node{R:12}_db. If the batch purchase quantity is set to 5, the instance names will be cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, and cmgo14_node16_db.</li></ul>
     * @param array $AvailabilityZoneList <p>For cloud database instances in multi-AZ deployment, specify the availability zone list.</p><ul><li>For instances in multi-AZ deployment mode, the <strong>Zone</strong> parameter specifies the primary AZ, and <strong>AvailabilityZoneList</strong> specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].</li><li>Use the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to access cloud databases and obtain availability zone information planned for different regions, so that you can assign valid AZs.</li><li>Nodes in multi-AZ deployment can only be deployed in 3 different availability zones. Deploying most nodes of a cluster in the same availability zone is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same zone.</li></ul>
     * @param integer $MongosCpu <p>Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.</p>
     * @param integer $MongosMemory <p>Mongos node memory size.</p><ul><li>This parameter is required during sharded cluster instance purchase.</li><li>Unit: GB. Valid values: 2 (for 1 core), 4 (for 2 cores), 8 (for 4 cores), 16 (for 8 cores), and 32 (for 16 cores).</li></ul>
     * @param integer $MongosNodeNum <p>Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.</p><ul><li>For single-AZ deployment instances, the quantity range is [3,32].</li><li>For instances deployed across multiple availability zones, the quantity range is [6,32].</li></ul>
     * @param integer $ReadonlyNodeNum <p>Number of read-only nodes. Value ranges from 0 to 5.</p>
     * @param array $ReadonlyNodeAvailabilityZoneList <p>Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when <strong>ReadonlyNodeNum</strong> is not set to <strong>0</strong>.</p>
     * @param string $HiddenZone <p>Availability zone of the Hidden node. To deploy instances across availability zones, you must configure this parameter.</p>
     * @param string $ParamTemplateId <p>Parameter template ID.</p><ul><li>A parameter template is a collection of preset specific parameters applicable to quick configuration of new MongoDB instances. Proper use of parameter templates can effectively improve database deployment efficiency and operating performance.</li><li>The parameter template ID can be obtained through the <a href="https://www.tencentcloud.com/document/product/240/109155?from_cn_redirect=1">DescribeDBInstanceParamTpl</a> API. Please select the parameter template ID corresponding to your instance version and architecture.</li></ul>
     * @param integer $CpuCore <p>Instance CPU core size. Unit: C. Call the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API to obtain specific saleable CPU specifications.<br>Note: CPU size must be set for common I Instance Type.</p>
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

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("Clone",$param) and $param["Clone"] !== null) {
            $this->Clone = $param["Clone"];
        }

        if (array_key_exists("Father",$param) and $param["Father"] !== null) {
            $this->Father = $param["Father"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AvailabilityZoneList",$param) and $param["AvailabilityZoneList"] !== null) {
            $this->AvailabilityZoneList = $param["AvailabilityZoneList"];
        }

        if (array_key_exists("MongosCpu",$param) and $param["MongosCpu"] !== null) {
            $this->MongosCpu = $param["MongosCpu"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("MongosNodeNum",$param) and $param["MongosNodeNum"] !== null) {
            $this->MongosNodeNum = $param["MongosNodeNum"];
        }

        if (array_key_exists("ReadonlyNodeNum",$param) and $param["ReadonlyNodeNum"] !== null) {
            $this->ReadonlyNodeNum = $param["ReadonlyNodeNum"];
        }

        if (array_key_exists("ReadonlyNodeAvailabilityZoneList",$param) and $param["ReadonlyNodeAvailabilityZoneList"] !== null) {
            $this->ReadonlyNodeAvailabilityZoneList = $param["ReadonlyNodeAvailabilityZoneList"];
        }

        if (array_key_exists("HiddenZone",$param) and $param["HiddenZone"] !== null) {
            $this->HiddenZone = $param["HiddenZone"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("CpuCore",$param) and $param["CpuCore"] !== null) {
            $this->CpuCore = $param["CpuCore"];
        }
    }
}
