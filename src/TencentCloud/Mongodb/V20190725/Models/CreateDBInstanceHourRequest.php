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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstanceHour request structure.
 *
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getVolume() Obtain Instance disk size in GB
 * @method void setVolume(integer $Volume) Set Instance disk size in GB
 * @method integer getReplicateSetNum() Obtain Number of replica sets
- Number of the replica set instances to be created. Valid value: `1`.
- Number of sharded cluster instances to be created. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set Number of replica sets
- Number of the replica set instances to be created. Valid value: `1`.
- Number of sharded cluster instances to be created. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
 * @method integer getNodeNum() Obtain The number of nodes in each replica set. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
 * @method void setNodeNum(integer $NodeNum) Set The number of nodes in each replica set. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
 * @method string getMongoVersion() Obtain Version information. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- MONGO_36_WT：MongoDB 3.6 WiredTiger storage engine
- MONGO_40_WT：MongoDB 4.0 WiredTiger storage engine
- MONGO_42_WT：MongoDB 4.2 WiredTiger storage engine
- MONGO_44_WT：MongoDB 4.4 WiredTiger storage engine
 * @method void setMongoVersion(string $MongoVersion) Set Version information. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- MONGO_36_WT：MongoDB 3.6 WiredTiger storage engine
- MONGO_40_WT：MongoDB 4.0 WiredTiger storage engine
- MONGO_42_WT：MongoDB 4.2 WiredTiger storage engine
- MONGO_44_WT：MongoDB 4.4 WiredTiger storage engine
 * @method string getMachineCode() Obtain Machine type
- HIO: High IO
- HIO10G: 10-Gigabit high IO
 * @method void setMachineCode(string $MachineCode) Set Machine type
- HIO: High IO
- HIO10G: 10-Gigabit high IO
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
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain VPC subnet ID. If `VpcId` is set, then `SubnetId` will be required.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID. If `VpcId` is set, then `SubnetId` will be required.
 * @method string getPassword() Obtain Instance password
- If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". 
- The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
 * @method void setPassword(string $Password) Set Instance password
- If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". 
- The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
 * @method integer getProjectId() Obtain Project ID. If it is left empty, `Default project` will be used.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If it is left empty, `Default project` will be used.
 * @method array getTags() Obtain Instance tag information
 * @method void setTags(array $Tags) Set Instance tag information
 * @method integer getClone() Obtain Instance type. Valid values:
- `1`: Primary instance
- `3`: Read-only instance
- `4`: Disaster recovery instance
 * @method void setClone(integer $Clone) Set Instance type. Valid values:
- `1`: Primary instance
- `3`: Read-only instance
- `4`: Disaster recovery instance
 * @method string getFather() Obtain Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
 * @method void setFather(string $Father) Set Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
 * @method array getSecurityGroup() Obtain Security group
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group
 * @method string getRestoreTime() Obtain Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
 * @method void setRestoreTime(string $RestoreTime) Set Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
 * @method string getInstanceName() Obtain Instance name, which can contain up to 60 letters, digits, and symbols (_-).
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain up to 60 letters, digits, and symbols (_-).
 * @method array getAvailabilityZoneList() Obtain List of multi-AZ deployed nodes. For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- Nodes of a multi-AZ instance must be deployed across three AZs. Most nodes of the cluster can’t be deployed in the same AZ. For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.
- MongoDB 4.2 and later versions do not support multi-AZ deployment.
- Read-only and disaster recovery instances do not support multi-AZ deployment.
-Instances in the classic network do not support multi-AZ deployment.
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) Set List of multi-AZ deployed nodes. For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- Nodes of a multi-AZ instance must be deployed across three AZs. Most nodes of the cluster can’t be deployed in the same AZ. For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.
- MongoDB 4.2 and later versions do not support multi-AZ deployment.
- Read-only and disaster recovery instances do not support multi-AZ deployment.
-Instances in the classic network do not support multi-AZ deployment.
 * @method integer getMongosCpu() Obtain Number of Mongos CPU cores
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method void setMongosCpu(integer $MongosCpu) Set Number of Mongos CPU cores
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method integer getMongosMemory() Obtain Mongos memory size
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method void setMongosMemory(integer $MongosMemory) Set Mongos memory size
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method integer getMongosNodeNum() Obtain Number of Monogs
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method void setMongosNodeNum(integer $MongosNodeNum) Set Number of Monogs
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
 * @method integer getReadonlyNodeNum() Obtain Number of read-only nodes. Value range: 0-5.
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set Number of read-only nodes. Value range: 0-5.
 * @method array getReadonlyNodeAvailabilityZoneList() Obtain AZ of read-only nodes, which is required when `ReadonlyNodeNum` is not `0` in cross-AZ instance deployment.
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) Set AZ of read-only nodes, which is required when `ReadonlyNodeNum` is not `0` in cross-AZ instance deployment.
 * @method string getHiddenZone() Obtain AZ where the hidden node resides, which is required in cross-AZ instance deployment.
 * @method void setHiddenZone(string $HiddenZone) Set AZ where the hidden node resides, which is required in cross-AZ instance deployment.
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB
     */
    public $Volume;

    /**
     * @var integer Number of replica sets
- Number of the replica set instances to be created. Valid value: `1`.
- Number of sharded cluster instances to be created. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
     */
    public $ReplicateSetNum;

    /**
     * @var integer The number of nodes in each replica set. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
     */
    public $NodeNum;

    /**
     * @var string Version information. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- MONGO_36_WT：MongoDB 3.6 WiredTiger storage engine
- MONGO_40_WT：MongoDB 4.0 WiredTiger storage engine
- MONGO_42_WT：MongoDB 4.2 WiredTiger storage engine
- MONGO_44_WT：MongoDB 4.4 WiredTiger storage engine
     */
    public $MongoVersion;

    /**
     * @var string Machine type
- HIO: High IO
- HIO10G: 10-Gigabit high IO
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
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID. If `VpcId` is set, then `SubnetId` will be required.
     */
    public $SubnetId;

    /**
     * @var string Instance password
- If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". 
- The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
     */
    public $Password;

    /**
     * @var integer Project ID. If it is left empty, `Default project` will be used.
     */
    public $ProjectId;

    /**
     * @var array Instance tag information
     */
    public $Tags;

    /**
     * @var integer Instance type. Valid values:
- `1`: Primary instance
- `3`: Read-only instance
- `4`: Disaster recovery instance
     */
    public $Clone;

    /**
     * @var string Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
     */
    public $Father;

    /**
     * @var array Security group
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
     * @var array List of multi-AZ deployed nodes. For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- Nodes of a multi-AZ instance must be deployed across three AZs. Most nodes of the cluster can’t be deployed in the same AZ. For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.
- MongoDB 4.2 and later versions do not support multi-AZ deployment.
- Read-only and disaster recovery instances do not support multi-AZ deployment.
-Instances in the classic network do not support multi-AZ deployment.
     */
    public $AvailabilityZoneList;

    /**
     * @var integer Number of Mongos CPU cores
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     */
    public $MongosCpu;

    /**
     * @var integer Mongos memory size
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     */
    public $MongosMemory;

    /**
     * @var integer Number of Monogs
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     */
    public $MongosNodeNum;

    /**
     * @var integer Number of read-only nodes. Value range: 0-5.
     */
    public $ReadonlyNodeNum;

    /**
     * @var array AZ of read-only nodes, which is required when `ReadonlyNodeNum` is not `0` in cross-AZ instance deployment.
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string AZ where the hidden node resides, which is required in cross-AZ instance deployment.
     */
    public $HiddenZone;

    /**
     * @param integer $Memory Instance memory size in GB
     * @param integer $Volume Instance disk size in GB
     * @param integer $ReplicateSetNum Number of replica sets
- Number of the replica set instances to be created. Valid value: `1`.
- Number of sharded cluster instances to be created. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
     * @param integer $NodeNum The number of nodes in each replica set. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
     * @param string $MongoVersion Version information. You can get the specific purchasable specifications through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- MONGO_36_WT：MongoDB 3.6 WiredTiger storage engine
- MONGO_40_WT：MongoDB 4.0 WiredTiger storage engine
- MONGO_42_WT：MongoDB 4.2 WiredTiger storage engine
- MONGO_44_WT：MongoDB 4.4 WiredTiger storage engine
     * @param string $MachineCode Machine type
- HIO: High IO
- HIO10G: 10-Gigabit high IO
     * @param integer $GoodsNum Number of instances. Value range: 1-10.
     * @param string $Zone AZ information in the format of ap-guangzhou-2
- For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
     * @param string $ClusterType Instance architecture type
- REPLSET: Replica set
- SHARD: Sharded cluster
     * @param string $VpcId VPC ID
     * @param string $SubnetId VPC subnet ID. If `VpcId` is set, then `SubnetId` will be required.
     * @param string $Password Instance password
- If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". 
- The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
     * @param integer $ProjectId Project ID. If it is left empty, `Default project` will be used.
     * @param array $Tags Instance tag information
     * @param integer $Clone Instance type. Valid values:
- `1`: Primary instance
- `3`: Read-only instance
- `4`: Disaster recovery instance
     * @param string $Father Parent instance ID. It is required if the `Clone` is `3` or `4`, that is, read-only instance or disaster recovery instance
     * @param array $SecurityGroup Security group
     * @param string $RestoreTime Rollback time of the cloned instance
- This parameter is required for a cloned instance in the format of 2021-08-13 16:30:00.
- Time range for rollback: You can roll back data in the last 7 days.
     * @param string $InstanceName Instance name, which can contain up to 60 letters, digits, and symbols (_-).
     * @param array $AvailabilityZoneList List of multi-AZ deployed nodes. For more information, query through the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API.
- Nodes of a multi-AZ instance must be deployed across three AZs. Most nodes of the cluster can’t be deployed in the same AZ. For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.
- MongoDB 4.2 and later versions do not support multi-AZ deployment.
- Read-only and disaster recovery instances do not support multi-AZ deployment.
-Instances in the classic network do not support multi-AZ deployment.
     * @param integer $MongosCpu Number of Mongos CPU cores
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     * @param integer $MongosMemory Mongos memory size
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     * @param integer $MongosNodeNum Number of Monogs
- This parameter is not required for a sharded cluster instance of MongoDB 3.6 WiredTiger or later.
- If this parameter is not configured, the mongos specification will be configured based on the mongod specification, and the default specification is free of charge.
     * @param integer $ReadonlyNodeNum Number of read-only nodes. Value range: 0-5.
     * @param array $ReadonlyNodeAvailabilityZoneList AZ of read-only nodes, which is required when `ReadonlyNodeNum` is not `0` in cross-AZ instance deployment.
     * @param string $HiddenZone AZ where the hidden node resides, which is required in cross-AZ instance deployment.
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
    }
}
