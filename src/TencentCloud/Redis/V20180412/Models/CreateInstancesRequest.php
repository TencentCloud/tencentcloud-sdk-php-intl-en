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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getZoneId() Obtain AZ ID of instance
 * @method void setZoneId(integer $ZoneId) Set AZ ID of instance
 * @method integer getTypeId() Obtain Instance type. 2: Redis 2.8 Master-Slave Edition, 3: Redis 3.2 Master-Slave Edition (CKV Master-Slave Edition), 4: Redis 3.2 Cluster Edition (CKV Cluster Edition), 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Slave Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Slave Edition, 9: Redis 5.0 Cluster Edition,
 * @method void setTypeId(integer $TypeId) Set Instance type. 2: Redis 2.8 Master-Slave Edition, 3: Redis 3.2 Master-Slave Edition (CKV Master-Slave Edition), 4: Redis 3.2 Cluster Edition (CKV Cluster Edition), 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Slave Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Slave Edition, 9: Redis 5.0 Cluster Edition,
 * @method integer getMemSize() Obtain Instance capacity in MB. The actual value is subject to the specifications returned by the purchasable specification querying API |
 * @method void setMemSize(integer $MemSize) Set Instance capacity in MB. The actual value is subject to the specifications returned by the purchasable specification querying API |
 * @method integer getGoodsNum() Obtain Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the purchasable specification querying API
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the purchasable specification querying API
 * @method integer getPeriod() Obtain Length of purchase in months, which is required when creating a monthly subscribed instances. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, enter 1
 * @method void setPeriod(integer $Period) Set Length of purchase in months, which is required when creating a monthly subscribed instances. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, enter 1
 * @method integer getBillingMode() Obtain Billing method. 0: pay as you go
 * @method void setBillingMode(integer $BillingMode) Set Billing method. 0: pay as you go
 * @method string getPassword() Obtain Instance password. Rules: 1. It can contain 8-16 characters; 2. It must contain at least two of the following three types of characters: letters, digits, and special characters !@^*(). (When creating a password-free instance, you can leave this field along and it will be ignored.)
 * @method void setPassword(string $Password) Set Instance password. Rules: 1. It can contain 8-16 characters; 2. It must contain at least two of the following three types of characters: letters, digits, and special characters !@^*(). (When creating a password-free instance, you can leave this field along and it will be ignored.)
 * @method string getVpcId() Obtain VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the basic network will be selected by default. Please use the VPC list querying API to query.
 * @method void setVpcId(string $VpcId) Set VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the basic network will be selected by default. Please use the VPC list querying API to query.
 * @method string getSubnetId() Obtain In a basic network, subnetId is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2
 * @method void setSubnetId(string $SubnetId) Set In a basic network, subnetId is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2
 * @method integer getProjectId() Obtain Project ID. The value is subject to the projectId returned by user account > user account-related querying APIs > project list
 * @method void setProjectId(integer $ProjectId) Set Project ID. The value is subject to the projectId returned by user account > user account-related querying APIs > project list
 * @method integer getAutoRenew() Obtain Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method array getSecurityGroupIdList() Obtain Array of security group IDs
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set Array of security group IDs
 * @method integer getVPort() Obtain User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535]
 * @method void setVPort(integer $VPort) Set User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535]
 * @method integer getRedisShardNum() Obtain Number of instance shards. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, Redis 2.8 standalone edition, and Redis 4.0 master-slave edition
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of instance shards. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, Redis 2.8 standalone edition, and Redis 4.0 master-slave edition
 * @method integer getRedisReplicasNum() Obtain Number of instance replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of instance replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition
 * @method boolean getReplicasReadonly() Obtain Whether to support read-only replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition |
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set Whether to support read-only replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition |
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method boolean getNoAuth() Obtain Whether to support the password-free feature. Value range: true (password-free instance); false (password-enabled instance). Default value: false
 * @method void setNoAuth(boolean $NoAuth) Set Whether to support the password-free feature. Value range: true (password-free instance); false (password-enabled instance). Default value: false
 */

/**
 *CreateInstances request structure.
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer AZ ID of instance
     */
    public $ZoneId;

    /**
     * @var integer Instance type. 2: Redis 2.8 Master-Slave Edition, 3: Redis 3.2 Master-Slave Edition (CKV Master-Slave Edition), 4: Redis 3.2 Cluster Edition (CKV Cluster Edition), 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Slave Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Slave Edition, 9: Redis 5.0 Cluster Edition,
     */
    public $TypeId;

    /**
     * @var integer Instance capacity in MB. The actual value is subject to the specifications returned by the purchasable specification querying API |
     */
    public $MemSize;

    /**
     * @var integer Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the purchasable specification querying API
     */
    public $GoodsNum;

    /**
     * @var integer Length of purchase in months, which is required when creating a monthly subscribed instances. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, enter 1
     */
    public $Period;

    /**
     * @var integer Billing method. 0: pay as you go
     */
    public $BillingMode;

    /**
     * @var string Instance password. Rules: 1. It can contain 8-16 characters; 2. It must contain at least two of the following three types of characters: letters, digits, and special characters !@^*(). (When creating a password-free instance, you can leave this field along and it will be ignored.)
     */
    public $Password;

    /**
     * @var string VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the basic network will be selected by default. Please use the VPC list querying API to query.
     */
    public $VpcId;

    /**
     * @var string In a basic network, subnetId is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2
     */
    public $SubnetId;

    /**
     * @var integer Project ID. The value is subject to the projectId returned by user account > user account-related querying APIs > project list
     */
    public $ProjectId;

    /**
     * @var integer Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     */
    public $AutoRenew;

    /**
     * @var array Array of security group IDs
     */
    public $SecurityGroupIdList;

    /**
     * @var integer User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535]
     */
    public $VPort;

    /**
     * @var integer Number of instance shards. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, Redis 2.8 standalone edition, and Redis 4.0 master-slave edition
     */
    public $RedisShardNum;

    /**
     * @var integer Number of instance replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition
     */
    public $RedisReplicasNum;

    /**
     * @var boolean Whether to support read-only replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition |
     */
    public $ReplicasReadonly;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var boolean Whether to support the password-free feature. Value range: true (password-free instance); false (password-enabled instance). Default value: false
     */
    public $NoAuth;
    /**
     * @param integer $ZoneId AZ ID of instance
     * @param integer $TypeId Instance type. 2: Redis 2.8 Master-Slave Edition, 3: Redis 3.2 Master-Slave Edition (CKV Master-Slave Edition), 4: Redis 3.2 Cluster Edition (CKV Cluster Edition), 5: Redis 2.8 Standalone Edition, 6: Redis 4.0 Master-Slave Edition, 7: Redis 4.0 Cluster Edition, 8: Redis 5.0 Master-Slave Edition, 9: Redis 5.0 Cluster Edition,
     * @param integer $MemSize Instance capacity in MB. The actual value is subject to the specifications returned by the purchasable specification querying API |
     * @param integer $GoodsNum Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the purchasable specification querying API
     * @param integer $Period Length of purchase in months, which is required when creating a monthly subscribed instances. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, enter 1
     * @param integer $BillingMode Billing method. 0: pay as you go
     * @param string $Password Instance password. Rules: 1. It can contain 8-16 characters; 2. It must contain at least two of the following three types of characters: letters, digits, and special characters !@^*(). (When creating a password-free instance, you can leave this field along and it will be ignored.)
     * @param string $VpcId VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the basic network will be selected by default. Please use the VPC list querying API to query.
     * @param string $SubnetId In a basic network, subnetId is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2
     * @param integer $ProjectId Project ID. The value is subject to the projectId returned by user account > user account-related querying APIs > project list
     * @param integer $AutoRenew Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     * @param array $SecurityGroupIdList Array of security group IDs
     * @param integer $VPort User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535]
     * @param integer $RedisShardNum Number of instance shards. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, Redis 2.8 standalone edition, and Redis 4.0 master-slave edition
     * @param integer $RedisReplicasNum Number of instance replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition
     * @param boolean $ReplicasReadonly Whether to support read-only replicas. This parameter can be left blank for Redis 2.8 master-slave edition, CKV master-slave edition, and Redis 2.8 standalone edition |
     * @param string $InstanceName Instance name
     * @param boolean $NoAuth Whether to support the password-free feature. Value range: true (password-free instance); false (password-enabled instance). Default value: false
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("ReplicasReadonly",$param) and $param["ReplicasReadonly"] !== null) {
            $this->ReplicasReadonly = $param["ReplicasReadonly"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }
    }
}
