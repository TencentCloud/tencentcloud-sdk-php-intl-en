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
 * CreateDBInstance request structure.
 *
 * @method integer getNodeNum() Obtain The number of nodes in each replica set. The value range is subject to the response parameter of the `DescribeSpecInfo` API.
 * @method void setNodeNum(integer $NodeNum) Set The number of nodes in each replica set. The value range is subject to the response parameter of the `DescribeSpecInfo` API.
 * @method integer getMemory() Obtain Instance memory size in GB.
 * @method void setMemory(integer $Memory) Set Instance memory size in GB.
 * @method integer getVolume() Obtain Instance disk size in GB.
 * @method void setVolume(integer $Volume) Set Instance disk size in GB.
 * @method string getMongoVersion() Obtain Version number. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition; MONGO_40_WT: MongoDB 4.0 WiredTiger Edition; MONGO_42_WT: MongoDB 4.2 WiredTiger Edition.
 * @method void setMongoVersion(string $MongoVersion) Set Version number. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition; MONGO_40_WT: MongoDB 4.0 WiredTiger Edition; MONGO_42_WT: MongoDB 4.2 WiredTiger Edition.
 * @method integer getGoodsNum() Obtain Number of instances. Minimum value: 1. Maximum value: 10.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Minimum value: 1. Maximum value: 10.
 * @method string getZone() Obtain AZ in the format of ap-guangzhou-2. If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
 * @method void setZone(string $Zone) Set AZ in the format of ap-guangzhou-2. If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
 * @method integer getPeriod() Obtain Instance validity period in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method void setPeriod(integer $Period) Set Instance validity period in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method string getMachineCode() Obtain Server type. Valid values: HIO (high IO), HIO10G (10-gigabit high IO), STDS5 (standard).
 * @method void setMachineCode(string $MachineCode) Set Server type. Valid values: HIO (high IO), HIO10G (10-gigabit high IO), STDS5 (standard).
 * @method string getClusterType() Obtain Instance type. Valid values: REPLSET (replica set), SHARD (sharded cluster), STANDALONE (single-node).
 * @method void setClusterType(string $ClusterType) Set Instance type. Valid values: REPLSET (replica set), SHARD (sharded cluster), STANDALONE (single-node).
 * @method integer getReplicateSetNum() Obtain Number of replica sets. To create a replica set instance, set this parameter to 1; to create a shard instance, see the parameters returned by the `DescribeSpecInfo` API; to create a single-node instance, set this parameter to 0.
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set Number of replica sets. To create a replica set instance, set this parameter to 1; to create a shard instance, see the parameters returned by the `DescribeSpecInfo` API; to create a single-node instance, set this parameter to 0.
 * @method integer getProjectId() Obtain Project ID. If this parameter is not set, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is not set, the default project will be used.
 * @method string getVpcId() Obtain VPC ID. If this parameter is not set, the classic network will be used. Please use the `DescribeVpcs` API to query the VPC list.
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is not set, the classic network will be used. Please use the `DescribeVpcs` API to query the VPC list.
 * @method string getSubnetId() Obtain VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. Please use the `DescribeSubnets` API to query the subnet list.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. Please use the `DescribeSubnets` API to query the subnet list.
 * @method string getPassword() Obtain Instance password. If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
 * @method void setPassword(string $Password) Set Instance password. If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
 * @method array getTags() Obtain Instance tag information.
 * @method void setTags(array $Tags) Set Instance tag information.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: 0 (auto-renewal not enabled), 1 (auto-renewal enabled). Default value: 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: 0 (auto-renewal not enabled), 1 (auto-renewal enabled). Default value: 0.
 * @method integer getAutoVoucher() Obtain Whether to automatically use a voucher. Valid values: 1 (yes), 0 (no). Default value: 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use a voucher. Valid values: 1 (yes), 0 (no). Default value: 0.
 * @method integer getClone() Obtain Instance type. Valid values: `1` (primary instance), `2` (temp instance), `3` (read-only instance), `4` (disaster recovery instance), `5` (cloned instance).
 * @method void setClone(integer $Clone) Set Instance type. Valid values: `1` (primary instance), `2` (temp instance), `3` (read-only instance), `4` (disaster recovery instance), `5` (cloned instance).
 * @method string getFather() Obtain Primary instance ID. It is required for read-only, disaster recovery, and cloned instances.
 * @method void setFather(string $Father) Set Primary instance ID. It is required for read-only, disaster recovery, and cloned instances.
 * @method array getSecurityGroup() Obtain Security group.
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group.
 * @method string getRestoreTime() Obtain The point in time to which the cloned instance will be rolled back. This parameter is required for a cloned instance. The point in time in the format of 2021-08-13 16:30:00 must be within the last seven days.
 * @method void setRestoreTime(string $RestoreTime) Set The point in time to which the cloned instance will be rolled back. This parameter is required for a cloned instance. The point in time in the format of 2021-08-13 16:30:00 must be within the last seven days.
 * @method string getInstanceName() Obtain Instance name, which can contain up to 60 letters, digits, or symbols (_-).
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain up to 60 letters, digits, or symbols (_-).
 * @method array getAvailabilityZoneList() Obtain AZ list when multi-AZ deployment is enabled. For the specific purchasable versions which support multi-AZ deployment, please see the return result of the `DescribeSpecInfo` API. Notes: 1. Nodes of a multi-AZ instance must be deployed across three AZs. 2. To ensure a successful cross-AZ switch, you should not deploy most of the nodes to the same AZ. (For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.) 3. MongoDB 4.2 and later versions do not support multi-AZ deployment. 4. Read-Only and disaster recovery instances do not support multi-AZ deployment. 5. Instances in the classic network do not support multi-AZ deployment.
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) Set AZ list when multi-AZ deployment is enabled. For the specific purchasable versions which support multi-AZ deployment, please see the return result of the `DescribeSpecInfo` API. Notes: 1. Nodes of a multi-AZ instance must be deployed across three AZs. 2. To ensure a successful cross-AZ switch, you should not deploy most of the nodes to the same AZ. (For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.) 3. MongoDB 4.2 and later versions do not support multi-AZ deployment. 4. Read-Only and disaster recovery instances do not support multi-AZ deployment. 5. Instances in the classic network do not support multi-AZ deployment.
 * @method integer getMongosCpu() Obtain The number of mongos CPUs, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
 * @method void setMongosCpu(integer $MongosCpu) Set The number of mongos CPUs, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
 * @method integer getMongosMemory() Obtain The size of mongos memory, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
 * @method void setMongosMemory(integer $MongosMemory) Set The size of mongos memory, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
 * @method integer getMongosNodeNum() Obtain The number of mongos routers, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. Note: please purchase 3-32 mongos routers for high availability.
 * @method void setMongosNodeNum(integer $MongosNodeNum) Set The number of mongos routers, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. Note: please purchase 3-32 mongos routers for high availability.
 * @method integer getReadonlyNodeNum() Obtain Number of read-only nodes. Value range: 2-7.
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set Number of read-only nodes. Value range: 2-7.
 * @method array getReadonlyNodeAvailabilityZoneList() Obtain The AZ where the read-only node is deployed
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) Set The AZ where the read-only node is deployed
 * @method string getHiddenZone() Obtain The AZ where the hidden node resides. It is required for cross-AZ instances.
 * @method void setHiddenZone(string $HiddenZone) Set The AZ where the hidden node resides. It is required for cross-AZ instances.
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer The number of nodes in each replica set. The value range is subject to the response parameter of the `DescribeSpecInfo` API.
     */
    public $NodeNum;

    /**
     * @var integer Instance memory size in GB.
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB.
     */
    public $Volume;

    /**
     * @var string Version number. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition; MONGO_40_WT: MongoDB 4.0 WiredTiger Edition; MONGO_42_WT: MongoDB 4.2 WiredTiger Edition.
     */
    public $MongoVersion;

    /**
     * @var integer Number of instances. Minimum value: 1. Maximum value: 10.
     */
    public $GoodsNum;

    /**
     * @var string AZ in the format of ap-guangzhou-2. If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
     */
    public $Zone;

    /**
     * @var integer Instance validity period in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     */
    public $Period;

    /**
     * @var string Server type. Valid values: HIO (high IO), HIO10G (10-gigabit high IO), STDS5 (standard).
     */
    public $MachineCode;

    /**
     * @var string Instance type. Valid values: REPLSET (replica set), SHARD (sharded cluster), STANDALONE (single-node).
     */
    public $ClusterType;

    /**
     * @var integer Number of replica sets. To create a replica set instance, set this parameter to 1; to create a shard instance, see the parameters returned by the `DescribeSpecInfo` API; to create a single-node instance, set this parameter to 0.
     */
    public $ReplicateSetNum;

    /**
     * @var integer Project ID. If this parameter is not set, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string VPC ID. If this parameter is not set, the classic network will be used. Please use the `DescribeVpcs` API to query the VPC list.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. Please use the `DescribeSubnets` API to query the subnet list.
     */
    public $SubnetId;

    /**
     * @var string Instance password. If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
     */
    public $Password;

    /**
     * @var array Instance tag information.
     */
    public $Tags;

    /**
     * @var integer Auto-renewal flag. Valid values: 0 (auto-renewal not enabled), 1 (auto-renewal enabled). Default value: 0.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically use a voucher. Valid values: 1 (yes), 0 (no). Default value: 0.
     */
    public $AutoVoucher;

    /**
     * @var integer Instance type. Valid values: `1` (primary instance), `2` (temp instance), `3` (read-only instance), `4` (disaster recovery instance), `5` (cloned instance).
     */
    public $Clone;

    /**
     * @var string Primary instance ID. It is required for read-only, disaster recovery, and cloned instances.
     */
    public $Father;

    /**
     * @var array Security group.
     */
    public $SecurityGroup;

    /**
     * @var string The point in time to which the cloned instance will be rolled back. This parameter is required for a cloned instance. The point in time in the format of 2021-08-13 16:30:00 must be within the last seven days.
     */
    public $RestoreTime;

    /**
     * @var string Instance name, which can contain up to 60 letters, digits, or symbols (_-).
     */
    public $InstanceName;

    /**
     * @var array AZ list when multi-AZ deployment is enabled. For the specific purchasable versions which support multi-AZ deployment, please see the return result of the `DescribeSpecInfo` API. Notes: 1. Nodes of a multi-AZ instance must be deployed across three AZs. 2. To ensure a successful cross-AZ switch, you should not deploy most of the nodes to the same AZ. (For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.) 3. MongoDB 4.2 and later versions do not support multi-AZ deployment. 4. Read-Only and disaster recovery instances do not support multi-AZ deployment. 5. Instances in the classic network do not support multi-AZ deployment.
     */
    public $AvailabilityZoneList;

    /**
     * @var integer The number of mongos CPUs, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
     */
    public $MongosCpu;

    /**
     * @var integer The size of mongos memory, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
     */
    public $MongosMemory;

    /**
     * @var integer The number of mongos routers, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. Note: please purchase 3-32 mongos routers for high availability.
     */
    public $MongosNodeNum;

    /**
     * @var integer Number of read-only nodes. Value range: 2-7.
     */
    public $ReadonlyNodeNum;

    /**
     * @var array The AZ where the read-only node is deployed
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string The AZ where the hidden node resides. It is required for cross-AZ instances.
     */
    public $HiddenZone;

    /**
     * @param integer $NodeNum The number of nodes in each replica set. The value range is subject to the response parameter of the `DescribeSpecInfo` API.
     * @param integer $Memory Instance memory size in GB.
     * @param integer $Volume Instance disk size in GB.
     * @param string $MongoVersion Version number. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition; MONGO_40_WT: MongoDB 4.0 WiredTiger Edition; MONGO_42_WT: MongoDB 4.2 WiredTiger Edition.
     * @param integer $GoodsNum Number of instances. Minimum value: 1. Maximum value: 10.
     * @param string $Zone AZ in the format of ap-guangzhou-2. If multi-AZ deployment is enabled, this parameter refers to the primary AZ and must be one of the values of `AvailabilityZoneList`.
     * @param integer $Period Instance validity period in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     * @param string $MachineCode Server type. Valid values: HIO (high IO), HIO10G (10-gigabit high IO), STDS5 (standard).
     * @param string $ClusterType Instance type. Valid values: REPLSET (replica set), SHARD (sharded cluster), STANDALONE (single-node).
     * @param integer $ReplicateSetNum Number of replica sets. To create a replica set instance, set this parameter to 1; to create a shard instance, see the parameters returned by the `DescribeSpecInfo` API; to create a single-node instance, set this parameter to 0.
     * @param integer $ProjectId Project ID. If this parameter is not set, the default project will be used.
     * @param string $VpcId VPC ID. If this parameter is not set, the classic network will be used. Please use the `DescribeVpcs` API to query the VPC list.
     * @param string $SubnetId VPC subnet ID. If `UniqVpcId` is set, then `UniqSubnetId` will be required. Please use the `DescribeSubnets` API to query the subnet list.
     * @param string $Password Instance password. If it is left empty, the password is in the default format of "instance ID+@+root account UIN". For example, if the instance ID is "cmgo-higv73ed" and the root account UIN "100000001", the instance password will be "cmgo-higv73ed@100000001". The custom password must contain 8-32 characters in at least two of the following types: letters, digits, and symbols (!@#%^*()_).
     * @param array $Tags Instance tag information.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: 0 (auto-renewal not enabled), 1 (auto-renewal enabled). Default value: 0.
     * @param integer $AutoVoucher Whether to automatically use a voucher. Valid values: 1 (yes), 0 (no). Default value: 0.
     * @param integer $Clone Instance type. Valid values: `1` (primary instance), `2` (temp instance), `3` (read-only instance), `4` (disaster recovery instance), `5` (cloned instance).
     * @param string $Father Primary instance ID. It is required for read-only, disaster recovery, and cloned instances.
     * @param array $SecurityGroup Security group.
     * @param string $RestoreTime The point in time to which the cloned instance will be rolled back. This parameter is required for a cloned instance. The point in time in the format of 2021-08-13 16:30:00 must be within the last seven days.
     * @param string $InstanceName Instance name, which can contain up to 60 letters, digits, or symbols (_-).
     * @param array $AvailabilityZoneList AZ list when multi-AZ deployment is enabled. For the specific purchasable versions which support multi-AZ deployment, please see the return result of the `DescribeSpecInfo` API. Notes: 1. Nodes of a multi-AZ instance must be deployed across three AZs. 2. To ensure a successful cross-AZ switch, you should not deploy most of the nodes to the same AZ. (For example, a three-node sharded cluster instance does not support deploying two or more nodes in the same AZ.) 3. MongoDB 4.2 and later versions do not support multi-AZ deployment. 4. Read-Only and disaster recovery instances do not support multi-AZ deployment. 5. Instances in the classic network do not support multi-AZ deployment.
     * @param integer $MongosCpu The number of mongos CPUs, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
     * @param integer $MongosMemory The size of mongos memory, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API.
     * @param integer $MongosNodeNum The number of mongos routers, which is required for a sharded cluster instance of MongoDB 4.2 WiredTiger. For the specific purchasable versions supported, please see the return result of the `DescribeSpecInfo` API. Note: please purchase 3-32 mongos routers for high availability.
     * @param integer $ReadonlyNodeNum Number of read-only nodes. Value range: 2-7.
     * @param array $ReadonlyNodeAvailabilityZoneList The AZ where the read-only node is deployed
     * @param string $HiddenZone The AZ where the hidden node resides. It is required for cross-AZ instances.
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
    }
}
