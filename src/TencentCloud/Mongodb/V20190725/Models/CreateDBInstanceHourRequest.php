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
 * @method integer getReplicateSetNum() Obtain Number of replica sets. When a replica set instance is created, this parameter must be set to 1. When a sharding instance is created, please see the parameters returned by the DescribeSpecInfo API
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set Number of replica sets. When a replica set instance is created, this parameter must be set to 1. When a sharding instance is created, please see the parameters returned by the DescribeSpecInfo API
 * @method integer getNodeNum() Obtain Number of nodes in each replica set. Currently, the number of nodes in a replica set is fixed at 3, while the number of shards is customizable. For more information, please see the parameter returned by the DescribeSpecInfo API
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes in each replica set. Currently, the number of nodes in a replica set is fixed at 3, while the number of shards is customizable. For more information, please see the parameter returned by the DescribeSpecInfo API
 * @method string getMongoVersion() Obtain Version number. For the specific purchasable versions supported, please see the return result of the DescribeSpecInfo API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition
 * @method void setMongoVersion(string $MongoVersion) Set Version number. For the specific purchasable versions supported, please see the return result of the DescribeSpecInfo API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition
 * @method string getMachineCode() Obtain Server type. HIO: high IO; HIO10G: 10-Gigabit high IO
 * @method void setMachineCode(string $MachineCode) Set Server type. HIO: high IO; HIO10G: 10-Gigabit high IO
 * @method integer getGoodsNum() Obtain Number of instances. Minimum value: 1. Maximum value: 10
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Minimum value: 1. Maximum value: 10
 * @method string getZone() Obtain AZ information in the format of ap-guangzhou-2
 * @method void setZone(string $Zone) Set AZ information in the format of ap-guangzhou-2
 * @method string getClusterType() Obtain Instance type. REPLSET: replica set; SHARD: sharding cluster
 * @method void setClusterType(string $ClusterType) Set Instance type. REPLSET: replica set; SHARD: sharding cluster
 * @method string getVpcId() Obtain VPC ID. If this parameter is not set, the basic network will be selected by default
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is not set, the basic network will be selected by default
 * @method string getSubnetId() Obtain VPC subnet ID. If VpcId is set, then SubnetId will be required
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID. If VpcId is set, then SubnetId will be required
 * @method string getPassword() Obtain Instance password. If this parameter is not set, you need to set an instance password through the password setting API after creating an instance. The password can only contain 8-16 characters and must contain at least two of the following types of characters: letters, digits, and special characters `!@#%^*()` |
 * @method void setPassword(string $Password) Set Instance password. If this parameter is not set, you need to set an instance password through the password setting API after creating an instance. The password can only contain 8-16 characters and must contain at least two of the following types of characters: letters, digits, and special characters `!@#%^*()` |
 * @method integer getProjectId() Obtain Project ID. If this parameter is not set, the default project will be used
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is not set, the default project will be used
 * @method array getTags() Obtain Instance tag information
 * @method void setTags(array $Tags) Set Instance tag information
 * @method integer getClone() Obtain 
 * @method void setClone(integer $Clone) Set 
 * @method string getFather() Obtain 
 * @method void setFather(string $Father) Set 
 * @method array getSecurityGroup() Obtain 
 * @method void setSecurityGroup(array $SecurityGroup) Set 
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
     * @var integer Number of replica sets. When a replica set instance is created, this parameter must be set to 1. When a sharding instance is created, please see the parameters returned by the DescribeSpecInfo API
     */
    public $ReplicateSetNum;

    /**
     * @var integer Number of nodes in each replica set. Currently, the number of nodes in a replica set is fixed at 3, while the number of shards is customizable. For more information, please see the parameter returned by the DescribeSpecInfo API
     */
    public $NodeNum;

    /**
     * @var string Version number. For the specific purchasable versions supported, please see the return result of the DescribeSpecInfo API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition
     */
    public $MongoVersion;

    /**
     * @var string Server type. HIO: high IO; HIO10G: 10-Gigabit high IO
     */
    public $MachineCode;

    /**
     * @var integer Number of instances. Minimum value: 1. Maximum value: 10
     */
    public $GoodsNum;

    /**
     * @var string AZ information in the format of ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var string Instance type. REPLSET: replica set; SHARD: sharding cluster
     */
    public $ClusterType;

    /**
     * @var string VPC ID. If this parameter is not set, the basic network will be selected by default
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID. If VpcId is set, then SubnetId will be required
     */
    public $SubnetId;

    /**
     * @var string Instance password. If this parameter is not set, you need to set an instance password through the password setting API after creating an instance. The password can only contain 8-16 characters and must contain at least two of the following types of characters: letters, digits, and special characters `!@#%^*()` |
     */
    public $Password;

    /**
     * @var integer Project ID. If this parameter is not set, the default project will be used
     */
    public $ProjectId;

    /**
     * @var array Instance tag information
     */
    public $Tags;

    /**
     * @var integer 
     */
    public $Clone;

    /**
     * @var string 
     */
    public $Father;

    /**
     * @var array 
     */
    public $SecurityGroup;

    /**
     * @param integer $Memory Instance memory size in GB
     * @param integer $Volume Instance disk size in GB
     * @param integer $ReplicateSetNum Number of replica sets. When a replica set instance is created, this parameter must be set to 1. When a sharding instance is created, please see the parameters returned by the DescribeSpecInfo API
     * @param integer $NodeNum Number of nodes in each replica set. Currently, the number of nodes in a replica set is fixed at 3, while the number of shards is customizable. For more information, please see the parameter returned by the DescribeSpecInfo API
     * @param string $MongoVersion Version number. For the specific purchasable versions supported, please see the return result of the DescribeSpecInfo API. The correspondences between parameters and versions are as follows: MONGO_3_WT: MongoDB 3.2 WiredTiger Edition; MONGO_3_ROCKS: MongoDB 3.2 RocksDB Edition; MONGO_36_WT: MongoDB 3.6 WiredTiger Edition
     * @param string $MachineCode Server type. HIO: high IO; HIO10G: 10-Gigabit high IO
     * @param integer $GoodsNum Number of instances. Minimum value: 1. Maximum value: 10
     * @param string $Zone AZ information in the format of ap-guangzhou-2
     * @param string $ClusterType Instance type. REPLSET: replica set; SHARD: sharding cluster
     * @param string $VpcId VPC ID. If this parameter is not set, the basic network will be selected by default
     * @param string $SubnetId VPC subnet ID. If VpcId is set, then SubnetId will be required
     * @param string $Password Instance password. If this parameter is not set, you need to set an instance password through the password setting API after creating an instance. The password can only contain 8-16 characters and must contain at least two of the following types of characters: letters, digits, and special characters `!@#%^*()` |
     * @param integer $ProjectId Project ID. If this parameter is not set, the default project will be used
     * @param array $Tags Instance tag information
     * @param integer $Clone 
     * @param string $Father 
     * @param array $SecurityGroup 
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
    }
}
