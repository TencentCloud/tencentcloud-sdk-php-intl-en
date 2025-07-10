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
 * CreateDBInstanceHour request structure.
 *
 * @method integer getMemory() Obtain Instance memory size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain specific saleable memory specifications.
 * @method void setMemory(integer $Memory) Set Instance memory size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain specific saleable memory specifications.
 * @method integer getVolume() Obtain Instance disk size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.
 * @method void setVolume(integer $Volume) Set Instance disk size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.
 * @method integer getReplicateSetNum() Obtain  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
 * @method integer getNodeNum() Obtain  - Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
 - Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
 * @method void setNodeNum(integer $NodeNum) Set  - Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
 - Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
 * @method string getMongoVersion() Obtain Information on the specific supported versions. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain such versions.
 - MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
 - MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
 - MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
 - MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
 - MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
 - MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
 * @method void setMongoVersion(string $MongoVersion) Set Information on the specific supported versions. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain such versions.
 - MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
 - MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
 - MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
 - MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
 - MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
 - MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
 * @method string getMachineCode() Obtain Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
 * @method void setMachineCode(string $MachineCode) Set Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
 * @method integer getGoodsNum() Obtain Number of instances. Value range: 1-10.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Value range: 1-10.
 * @method string getZone() Obtain AZ information in the format of ap-guangzhou-2
- For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
 * @method void setZone(string $Zone) Set AZ information in the format of ap-guangzhou-2
- For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
 * @method string getClusterType() Obtain Instance architecture type
- REPLSET: Replica set
- SHARD: Sharded cluster
 * @method void setClusterType(string $ClusterType) Set Instance architecture type
- REPLSET: Replica set
- SHARD: Sharded cluster
 * @method string getVpcId() Obtain VPC ID. Log in to the [VPC console](https://console.cloud.tencent.com/vpc) to query the correct ID. Example value: vpc-pxyzim13.
 * @method void setVpcId(string $VpcId) Set VPC ID. Log in to the [VPC console](https://console.cloud.tencent.com/vpc) to query the correct ID. Example value: vpc-pxyzim13.
 * @method string getSubnetId() Obtain VPC subnet. Log in to the [VPC console](https://console.cloud.tencent.com/VPC) to query the subnet list and confirm the correct ID. Example value: subnet-7jbabche.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet. Log in to the [VPC console](https://console.cloud.tencent.com/VPC) to query the subnet list and confirm the correct ID. Example value: subnet-7jbabche.
 * @method string getPassword() Obtain Instance password. The requirements are as follows:
 - The number of characters should be in the range of [8, 32].
 - Characters within the ranges [A,Z], [a,z], and [0,9] are allowed.
 - Special characters that can be entered include exclamation marks (!), at signs (@), number signs (#), percent signs (%), carets (^), asterisks (\*), brackets (()), and underscores (_).
 - It cannot contain only the same letters or digits.
 * @method void setPassword(string $Password) Set Instance password. The requirements are as follows:
 - The number of characters should be in the range of [8, 32].
 - Characters within the ranges [A,Z], [a,z], and [0,9] are allowed.
 - Special characters that can be entered include exclamation marks (!), at signs (@), number signs (#), percent signs (%), carets (^), asterisks (\*), brackets (()), and underscores (_).
 - It cannot contain only the same letters or digits.
 * @method integer getProjectId() Obtain Project ID. - The default project is used if this parameter is not specified.
 - The project ID can be obtained on the [project management page in the TencentDB for MongoDB console](https://console.cloud.tencent.com/project).
 * @method void setProjectId(integer $ProjectId) Set Project ID. - The default project is used if this parameter is not specified.
 - The project ID can be obtained on the [project management page in the TencentDB for MongoDB console](https://console.cloud.tencent.com/project).
 * @method array getTags() Obtain Instance tag information
 * @method void setTags(array $Tags) Set Instance tag information
 * @method integer getClone() Obtain Instance type. 1: formal instance; 3: read-only instance; 4: disaster recovery instance; 5: cloned instance. Note: For a cloned instance, RestoreTime is required.
 * @method void setClone(integer $Clone) Set Instance type. 1: formal instance; 3: read-only instance; 4: disaster recovery instance; 5: cloned instance. Note: For a cloned instance, RestoreTime is required.
 * @method string getFather() Obtain Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
 * @method void setFather(string $Father) Set Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
 * @method array getSecurityGroup() Obtain Security group ID.
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group ID.
 * @method string getRestoreTime() Obtain Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
 * @method void setRestoreTime(string $RestoreTime) Set Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
 * @method string getInstanceName() Obtain Instance name, which can contain up to 60 letters, digits, and symbols (_-).
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain up to 60 letters, digits, and symbols (_-).
 * @method array getAvailabilityZoneList() Obtain Specifies the list of AZs during multi-AZ deployment of TencentDB for MongoDB instances.
 - For instances in multi-AZ deployment mode, the **Zone** parameter specifies the primary AZ, and **AvailabilityZoneList** specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].
 - The [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API can be called to obtain AZs planned for TencentDB for MongoDB instances in different regions, helping you specify valid AZs.
 - Nodes in multi-AZ deployment mode can only be deployed in 3 different AZs. Deploying most nodes of a cluster in the same AZ is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same AZ.

 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) Set Specifies the list of AZs during multi-AZ deployment of TencentDB for MongoDB instances.
 - For instances in multi-AZ deployment mode, the **Zone** parameter specifies the primary AZ, and **AvailabilityZoneList** specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].
 - The [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API can be called to obtain AZs planned for TencentDB for MongoDB instances in different regions, helping you specify valid AZs.
 - Nodes in multi-AZ deployment mode can only be deployed in 3 different AZs. Deploying most nodes of a cluster in the same AZ is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same AZ.

 * @method integer getMongosCpu() Obtain Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.

 * @method void setMongosCpu(integer $MongosCpu) Set Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.

 * @method integer getMongosMemory() Obtain Mongos node memory size.
 - This parameter is required during sharded cluster instance purchase.
 - Unit: GB. 1-core 2GB, 2-core 4GB, 4-core 8GB, 8-core 16GB, and 16-core 32GB are supported.


 * @method void setMongosMemory(integer $MongosMemory) Set Mongos node memory size.
 - This parameter is required during sharded cluster instance purchase.
 - Unit: GB. 1-core 2GB, 2-core 4GB, 4-core 8GB, 8-core 16GB, and 16-core 32GB are supported.


 * @method integer getMongosNodeNum() Obtain Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.
 - For instances in single-AZ deployment mode, the value range is [3,32].
 - For instances in multi-AZ deployment mode, the value range is [6,32].
 * @method void setMongosNodeNum(integer $MongosNodeNum) Set Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.
 - For instances in single-AZ deployment mode, the value range is [3,32].
 - For instances in multi-AZ deployment mode, the value range is [6,32].
 * @method integer getReadonlyNodeNum() Obtain Number of read-only nodes. Value ranges: [0,5].
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set Number of read-only nodes. Value ranges: [0,5].
 * @method array getReadonlyNodeAvailabilityZoneList() Obtain Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when **ReadonlyNodeNum** is not set to **0**.
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) Set Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when **ReadonlyNodeNum** is not set to **0**.
 * @method string getHiddenZone() Obtain AZ where the hidden node resides, which is required in cross-AZ instance deployment.
 * @method void setHiddenZone(string $HiddenZone) Set AZ where the hidden node resides, which is required in cross-AZ instance deployment.
 * @method string getParamTemplateId() Obtain Parameter template ID. A parameter template is a collection of MongoDB parameters with preset values. You can save a group of parameters and values with the same requirements as a template. When you create an instance, you can directly reference these parameter values in the instance. Proper use of parameter templates can improve the efficiency of operations on TencentDB for MongoDB databases. The template list can be obtained by calling the DescribeDBInstanceParamTpl API. Pay attention to the database versions supported by templates.
 * @method void setParamTemplateId(string $ParamTemplateId) Set Parameter template ID. A parameter template is a collection of MongoDB parameters with preset values. You can save a group of parameters and values with the same requirements as a template. When you create an instance, you can directly reference these parameter values in the instance. Proper use of parameter templates can improve the efficiency of operations on TencentDB for MongoDB databases. The template list can be obtained by calling the DescribeDBInstanceParamTpl API. Pay attention to the database versions supported by templates.
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer Instance memory size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain specific saleable memory specifications.
     */
    public $Memory;

    /**
     * @var integer Instance disk size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.
     */
    public $Volume;

    /**
     * @var integer  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
     */
    public $ReplicateSetNum;

    /**
     * @var integer  - Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
 - Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
     */
    public $NodeNum;

    /**
     * @var string Information on the specific supported versions. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain such versions.
 - MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
 - MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
 - MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
 - MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
 - MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
 - MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
     */
    public $MongoVersion;

    /**
     * @var string Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
     */
    public $MachineCode;

    /**
     * @var integer Number of instances. Value range: 1-10.
     */
    public $GoodsNum;

    /**
     * @var string AZ information in the format of ap-guangzhou-2
- For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
     */
    public $Zone;

    /**
     * @var string Instance architecture type
- REPLSET: Replica set
- SHARD: Sharded cluster
     */
    public $ClusterType;

    /**
     * @var string VPC ID. Log in to the [VPC console](https://console.cloud.tencent.com/vpc) to query the correct ID. Example value: vpc-pxyzim13.
     */
    public $VpcId;

    /**
     * @var string VPC subnet. Log in to the [VPC console](https://console.cloud.tencent.com/VPC) to query the subnet list and confirm the correct ID. Example value: subnet-7jbabche.
     */
    public $SubnetId;

    /**
     * @var string Instance password. The requirements are as follows:
 - The number of characters should be in the range of [8, 32].
 - Characters within the ranges [A,Z], [a,z], and [0,9] are allowed.
 - Special characters that can be entered include exclamation marks (!), at signs (@), number signs (#), percent signs (%), carets (^), asterisks (\*), brackets (()), and underscores (_).
 - It cannot contain only the same letters or digits.
     */
    public $Password;

    /**
     * @var integer Project ID. - The default project is used if this parameter is not specified.
 - The project ID can be obtained on the [project management page in the TencentDB for MongoDB console](https://console.cloud.tencent.com/project).
     */
    public $ProjectId;

    /**
     * @var array Instance tag information
     */
    public $Tags;

    /**
     * @var integer Instance type. 1: formal instance; 3: read-only instance; 4: disaster recovery instance; 5: cloned instance. Note: For a cloned instance, RestoreTime is required.
     */
    public $Clone;

    /**
     * @var string Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
     */
    public $Father;

    /**
     * @var array Security group ID.
     */
    public $SecurityGroup;

    /**
     * @var string Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
     */
    public $RestoreTime;

    /**
     * @var string Instance name, which can contain up to 60 letters, digits, and symbols (_-).
     */
    public $InstanceName;

    /**
     * @var array Specifies the list of AZs during multi-AZ deployment of TencentDB for MongoDB instances.
 - For instances in multi-AZ deployment mode, the **Zone** parameter specifies the primary AZ, and **AvailabilityZoneList** specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].
 - The [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API can be called to obtain AZs planned for TencentDB for MongoDB instances in different regions, helping you specify valid AZs.
 - Nodes in multi-AZ deployment mode can only be deployed in 3 different AZs. Deploying most nodes of a cluster in the same AZ is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same AZ.

     */
    public $AvailabilityZoneList;

    /**
     * @var integer Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.

     */
    public $MongosCpu;

    /**
     * @var integer Mongos node memory size.
 - This parameter is required during sharded cluster instance purchase.
 - Unit: GB. 1-core 2GB, 2-core 4GB, 4-core 8GB, 8-core 16GB, and 16-core 32GB are supported.


     */
    public $MongosMemory;

    /**
     * @var integer Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.
 - For instances in single-AZ deployment mode, the value range is [3,32].
 - For instances in multi-AZ deployment mode, the value range is [6,32].
     */
    public $MongosNodeNum;

    /**
     * @var integer Number of read-only nodes. Value ranges: [0,5].
     */
    public $ReadonlyNodeNum;

    /**
     * @var array Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when **ReadonlyNodeNum** is not set to **0**.
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string AZ where the hidden node resides, which is required in cross-AZ instance deployment.
     */
    public $HiddenZone;

    /**
     * @var string Parameter template ID. A parameter template is a collection of MongoDB parameters with preset values. You can save a group of parameters and values with the same requirements as a template. When you create an instance, you can directly reference these parameter values in the instance. Proper use of parameter templates can improve the efficiency of operations on TencentDB for MongoDB databases. The template list can be obtained by calling the DescribeDBInstanceParamTpl API. Pay attention to the database versions supported by templates.
     */
    public $ParamTemplateId;

    /**
     * @param integer $Memory Instance memory size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain specific saleable memory specifications.
     * @param integer $Volume Instance disk size. Unit: GB. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum disk sizes corresponding to each CPU specification.
     * @param integer $ReplicateSetNum  - Specifies the number of replica sets during replica set instance creation. This parameter can only be set to 1.
 - Specifies the number of shards during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to query the range of shard quantity. The parameters MinReplicateSetNum and MaxReplicateSetNum in the returned data structure SpecItems correspond to the minimum value and maximum value, respectively.
     * @param integer $NodeNum  - Specifies the number of primary and secondary nodes for each replica set during replica set instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each replica set.
 - Specifies the number of primary and secondary nodes for each shard during sharded cluster instance creation. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain the maximum and minimum number of nodes supported for each shard.
     * @param string $MongoVersion Information on the specific supported versions. Call the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API to obtain such versions.
 - MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
 - MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
 - MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
 - MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
 - MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
 - MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
     * @param string $MachineCode Product specification type.
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
     * @param integer $GoodsNum Number of instances. Value range: 1-10.
     * @param string $Zone AZ information in the format of ap-guangzhou-2
- For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
     * @param string $ClusterType Instance architecture type
- REPLSET: Replica set
- SHARD: Sharded cluster
     * @param string $VpcId VPC ID. Log in to the [VPC console](https://console.cloud.tencent.com/vpc) to query the correct ID. Example value: vpc-pxyzim13.
     * @param string $SubnetId VPC subnet. Log in to the [VPC console](https://console.cloud.tencent.com/VPC) to query the subnet list and confirm the correct ID. Example value: subnet-7jbabche.
     * @param string $Password Instance password. The requirements are as follows:
 - The number of characters should be in the range of [8, 32].
 - Characters within the ranges [A,Z], [a,z], and [0,9] are allowed.
 - Special characters that can be entered include exclamation marks (!), at signs (@), number signs (#), percent signs (%), carets (^), asterisks (\*), brackets (()), and underscores (_).
 - It cannot contain only the same letters or digits.
     * @param integer $ProjectId Project ID. - The default project is used if this parameter is not specified.
 - The project ID can be obtained on the [project management page in the TencentDB for MongoDB console](https://console.cloud.tencent.com/project).
     * @param array $Tags Instance tag information
     * @param integer $Clone Instance type. 1: formal instance; 3: read-only instance; 4: disaster recovery instance; 5: cloned instance. Note: For a cloned instance, RestoreTime is required.
     * @param string $Father Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
     * @param array $SecurityGroup Security group ID.
     * @param string $RestoreTime Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
     * @param string $InstanceName Instance name, which can contain up to 60 letters, digits, and symbols (_-).
     * @param array $AvailabilityZoneList Specifies the list of AZs during multi-AZ deployment of TencentDB for MongoDB instances.
 - For instances in multi-AZ deployment mode, the **Zone** parameter specifies the primary AZ, and **AvailabilityZoneList** specifies all AZs, including the primary AZ. Format: [ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4].
 - The [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API can be called to obtain AZs planned for TencentDB for MongoDB instances in different regions, helping you specify valid AZs.
 - Nodes in multi-AZ deployment mode can only be deployed in 3 different AZs. Deploying most nodes of a cluster in the same AZ is not supported. For example, a 3-node cluster does not support deploying 2 nodes in the same AZ.

     * @param integer $MongosCpu Number of Mongos node CPU cores. Valid values: 1, 2, 4, 8, and 16. This parameter is required during sharded cluster instance purchase.

     * @param integer $MongosMemory Mongos node memory size.
 - This parameter is required during sharded cluster instance purchase.
 - Unit: GB. 1-core 2GB, 2-core 4GB, 4-core 8GB, 8-core 16GB, and 16-core 32GB are supported.


     * @param integer $MongosNodeNum Number of Mongos nodes. This parameter is required during sharded cluster instance purchase.
 - For instances in single-AZ deployment mode, the value range is [3,32].
 - For instances in multi-AZ deployment mode, the value range is [6,32].
     * @param integer $ReadonlyNodeNum Number of read-only nodes. Value ranges: [0,5].
     * @param array $ReadonlyNodeAvailabilityZoneList Array of AZs of read-only nodes. This parameter is required for instances in multi-AZ deployment mode when **ReadonlyNodeNum** is not set to **0**.
     * @param string $HiddenZone AZ where the hidden node resides, which is required in cross-AZ instance deployment.
     * @param string $ParamTemplateId Parameter template ID. A parameter template is a collection of MongoDB parameters with preset values. You can save a group of parameters and values with the same requirements as a template. When you create an instance, you can directly reference these parameter values in the instance. Proper use of parameter templates can improve the efficiency of operations on TencentDB for MongoDB databases. The template list can be obtained by calling the DescribeDBInstanceParamTpl API. Pay attention to the database versions supported by templates.
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
    }
}
