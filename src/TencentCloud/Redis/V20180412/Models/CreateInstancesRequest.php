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
 * CreateInstances request structure.
 *
 * @method integer getTypeId() Obtain Instance type. Valid values: `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture).
 * @method void setTypeId(integer $TypeId) Set Instance type. Valid values: `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture).
 * @method integer getMemSize() Obtain Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` is the standard architecture, `MemSize` indicates the total memory capacity of the instance; if `TypeId` is the cluster architecture, `MemSize` indicates the memory capacity per shard.
 * @method void setMemSize(integer $MemSize) Set Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` is the standard architecture, `MemSize` indicates the total memory capacity of the instance; if `TypeId` is the cluster architecture, `MemSize` indicates the memory capacity per shard.
 * @method integer getGoodsNum() Obtain Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
 * @method integer getPeriod() Obtain Length of purchase in months, which is required when creating a monthly subscribed instance. Valid values: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
 * @method void setPeriod(integer $Period) Set Length of purchase in months, which is required when creating a monthly subscribed instance. Valid values: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
 * @method integer getBillingMode() Obtain Billing mode. 0: pay-as-you-go
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. 0: pay-as-you-go
 * @method integer getZoneId() Obtain ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method string getPassword() Obtain Instance password. If the input parameter `NoAuth` is `true` and a VPC is used, the `Password` is optional; otherwise, it is required.
If the instance `TypeId` is Redis 2.8, 4.0, or 5.0, the password cannot start with "/" and must contain 8–30 characters in at least two of the following character types: lowercase letters, uppercase letters, digits, and special symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
If the instance `TypeId` is CKV 3.2, the password can contain 8–30 letters and digits.
 * @method void setPassword(string $Password) Set Instance password. If the input parameter `NoAuth` is `true` and a VPC is used, the `Password` is optional; otherwise, it is required.
If the instance `TypeId` is Redis 2.8, 4.0, or 5.0, the password cannot start with "/" and must contain 8–30 characters in at least two of the following character types: lowercase letters, uppercase letters, digits, and special symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
If the instance `TypeId` is CKV 3.2, the password can contain 8–30 letters and digits.
 * @method string getVpcId() Obtain VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the classic network will be selected by default. Use the VPC list querying API to query.
 * @method void setVpcId(string $VpcId) Set VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the classic network will be selected by default. Use the VPC list querying API to query.
 * @method string getSubnetId() Obtain In the classic network, `subnetId` is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2.
 * @method void setSubnetId(string $SubnetId) Set In the classic network, `subnetId` is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2.
 * @method integer getProjectId() Obtain Project ID. The value is subject to the `projectId` returned by user account > user account querying APIs > project list.
 * @method void setProjectId(integer $ProjectId) Set Project ID. The value is subject to the `projectId` returned by user account > user account querying APIs > project list.
 * @method integer getAutoRenew() Obtain Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method array getSecurityGroupIdList() Obtain Array of security group IDs.
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set Array of security group IDs.
 * @method integer getVPort() Obtain User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535].
 * @method void setVPort(integer $VPort) Set User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535].
 * @method integer getRedisShardNum() Obtain Number of shards in an instance. This parameter is required for Cluster Edition instances. Valid values: [3,5,8,12,16,24,32,64,96,128].
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards in an instance. This parameter is required for Cluster Edition instances. Valid values: [3,5,8,12,16,24,32,64,96,128].
 * @method integer getRedisReplicasNum() Obtain Number of replicas in the instance. Redis 2.8 Standard Edition and CKV Standard Edition support 1 replica. Standard/Cluster Edition 4.0 and 5.0 support 1–5 replicas.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas in the instance. Redis 2.8 Standard Edition and CKV Standard Edition support 1 replica. Standard/Cluster Edition 4.0 and 5.0 support 1–5 replicas.
 * @method boolean getReplicasReadonly() Obtain Whether to support read-only replicas. Neither Redis 2.8 Standard Edition nor CKV Standard Edition supports read-only replicas. Read/write separation will be automatically enabled for an instance after it enables read-only replicas. Write requests will be directed to the master node and read requests will be distributed to replica nodes. To enable read-only replicas, we recommend you create two or more replicas.
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set Whether to support read-only replicas. Neither Redis 2.8 Standard Edition nor CKV Standard Edition supports read-only replicas. Read/write separation will be automatically enabled for an instance after it enables read-only replicas. Write requests will be directed to the master node and read requests will be distributed to replica nodes. To enable read-only replicas, we recommend you create two or more replicas.
 * @method string getInstanceName() Obtain Instance name, which can contain up to 60 letters, digits, underscores, or hyphens.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain up to 60 letters, digits, underscores, or hyphens.
 * @method boolean getNoAuth() Obtain Whether to support the password-free feature. Valid values: true (password-free instance), false (password-enabled instance). Default value: false. Only instances in a VPC support the password-free access.
 * @method void setNoAuth(boolean $NoAuth) Set Whether to support the password-free feature. Valid values: true (password-free instance), false (password-enabled instance). Default value: false. Only instances in a VPC support the password-free access.
 * @method array getNodeSet() Obtain Node information of the instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for single-AZ deployed instances.
 * @method void setNodeSet(array $NodeSet) Set Node information of the instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for single-AZ deployed instances.
 * @method array getResourceTags() Obtain Tag bound to the instance to be purchased
 * @method void setResourceTags(array $ResourceTags) Set Tag bound to the instance to be purchased
 * @method string getZoneName() Obtain Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneName(string $ZoneName) Set Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method string getTemplateId() Obtain ID of the parameter template applied to the created instance. If this parameter is left blank, the default parameter template will be applied.
 * @method void setTemplateId(string $TemplateId) Set ID of the parameter template applied to the created instance. If this parameter is left blank, the default parameter template will be applied.
 * @method boolean getDryRun() Obtain false: send a normal request and create an instance directly after the check is passed (default value); true: send a check request without creating an instance.
 * @method void setDryRun(boolean $DryRun) Set false: send a normal request and create an instance directly after the check is passed (default value); true: send a check request without creating an instance.
 * @method string getProductVersion() Obtain Valid values: `local` (local disk edition), `cloud` (cloud disk edition), `cdc` (dedicated cluster edition). Default value: `local` (local disk edition)
 * @method void setProductVersion(string $ProductVersion) Set Valid values: `local` (local disk edition), `cloud` (cloud disk edition), `cdc` (dedicated cluster edition). Default value: `local` (local disk edition)
 * @method string getRedisClusterId() Obtain Dedicated cluster ID, which is required when `ProductVersion` is "cdc".
 * @method void setRedisClusterId(string $RedisClusterId) Set Dedicated cluster ID, which is required when `ProductVersion` is "cdc".
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer Instance type. Valid values: `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture).
     */
    public $TypeId;

    /**
     * @var integer Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` is the standard architecture, `MemSize` indicates the total memory capacity of the instance; if `TypeId` is the cluster architecture, `MemSize` indicates the memory capacity per shard.
     */
    public $MemSize;

    /**
     * @var integer Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
     */
    public $GoodsNum;

    /**
     * @var integer Length of purchase in months, which is required when creating a monthly subscribed instance. Valid values: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
     */
    public $Period;

    /**
     * @var integer Billing mode. 0: pay-as-you-go
     */
    public $BillingMode;

    /**
     * @var integer ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var string Instance password. If the input parameter `NoAuth` is `true` and a VPC is used, the `Password` is optional; otherwise, it is required.
If the instance `TypeId` is Redis 2.8, 4.0, or 5.0, the password cannot start with "/" and must contain 8–30 characters in at least two of the following character types: lowercase letters, uppercase letters, digits, and special symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
If the instance `TypeId` is CKV 3.2, the password can contain 8–30 letters and digits.
     */
    public $Password;

    /**
     * @var string VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the classic network will be selected by default. Use the VPC list querying API to query.
     */
    public $VpcId;

    /**
     * @var string In the classic network, `subnetId` is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2.
     */
    public $SubnetId;

    /**
     * @var integer Project ID. The value is subject to the `projectId` returned by user account > user account querying APIs > project list.
     */
    public $ProjectId;

    /**
     * @var integer Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     */
    public $AutoRenew;

    /**
     * @var array Array of security group IDs.
     */
    public $SecurityGroupIdList;

    /**
     * @var integer User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535].
     */
    public $VPort;

    /**
     * @var integer Number of shards in an instance. This parameter is required for Cluster Edition instances. Valid values: [3,5,8,12,16,24,32,64,96,128].
     */
    public $RedisShardNum;

    /**
     * @var integer Number of replicas in the instance. Redis 2.8 Standard Edition and CKV Standard Edition support 1 replica. Standard/Cluster Edition 4.0 and 5.0 support 1–5 replicas.
     */
    public $RedisReplicasNum;

    /**
     * @var boolean Whether to support read-only replicas. Neither Redis 2.8 Standard Edition nor CKV Standard Edition supports read-only replicas. Read/write separation will be automatically enabled for an instance after it enables read-only replicas. Write requests will be directed to the master node and read requests will be distributed to replica nodes. To enable read-only replicas, we recommend you create two or more replicas.
     */
    public $ReplicasReadonly;

    /**
     * @var string Instance name, which can contain up to 60 letters, digits, underscores, or hyphens.
     */
    public $InstanceName;

    /**
     * @var boolean Whether to support the password-free feature. Valid values: true (password-free instance), false (password-enabled instance). Default value: false. Only instances in a VPC support the password-free access.
     */
    public $NoAuth;

    /**
     * @var array Node information of the instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for single-AZ deployed instances.
     */
    public $NodeSet;

    /**
     * @var array Tag bound to the instance to be purchased
     */
    public $ResourceTags;

    /**
     * @var string Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneName;

    /**
     * @var string ID of the parameter template applied to the created instance. If this parameter is left blank, the default parameter template will be applied.
     */
    public $TemplateId;

    /**
     * @var boolean false: send a normal request and create an instance directly after the check is passed (default value); true: send a check request without creating an instance.
     */
    public $DryRun;

    /**
     * @var string Valid values: `local` (local disk edition), `cloud` (cloud disk edition), `cdc` (dedicated cluster edition). Default value: `local` (local disk edition)
     */
    public $ProductVersion;

    /**
     * @var string Dedicated cluster ID, which is required when `ProductVersion` is "cdc".
     */
    public $RedisClusterId;

    /**
     * @param integer $TypeId Instance type. Valid values: `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture).
     * @param integer $MemSize Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` is the standard architecture, `MemSize` indicates the total memory capacity of the instance; if `TypeId` is the cluster architecture, `MemSize` indicates the memory capacity per shard.
     * @param integer $GoodsNum Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
     * @param integer $Period Length of purchase in months, which is required when creating a monthly subscribed instance. Valid values: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
     * @param integer $BillingMode Billing mode. 0: pay-as-you-go
     * @param integer $ZoneId ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param string $Password Instance password. If the input parameter `NoAuth` is `true` and a VPC is used, the `Password` is optional; otherwise, it is required.
If the instance `TypeId` is Redis 2.8, 4.0, or 5.0, the password cannot start with "/" and must contain 8–30 characters in at least two of the following character types: lowercase letters, uppercase letters, digits, and special symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
If the instance `TypeId` is CKV 3.2, the password can contain 8–30 letters and digits.
     * @param string $VpcId VPC ID such as vpc-sad23jfdfk. If this parameter is not passed in, the classic network will be selected by default. Use the VPC list querying API to query.
     * @param string $SubnetId In the classic network, `subnetId` is invalid. In a VPC subnet, the value is the subnet ID, such as subnet-fdj24n34j2.
     * @param integer $ProjectId Project ID. The value is subject to the `projectId` returned by user account > user account querying APIs > project list.
     * @param integer $AutoRenew Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     * @param array $SecurityGroupIdList Array of security group IDs.
     * @param integer $VPort User-defined port. If this parameter is left empty, 6379 will be used by default. Value range: [1024,65535].
     * @param integer $RedisShardNum Number of shards in an instance. This parameter is required for Cluster Edition instances. Valid values: [3,5,8,12,16,24,32,64,96,128].
     * @param integer $RedisReplicasNum Number of replicas in the instance. Redis 2.8 Standard Edition and CKV Standard Edition support 1 replica. Standard/Cluster Edition 4.0 and 5.0 support 1–5 replicas.
     * @param boolean $ReplicasReadonly Whether to support read-only replicas. Neither Redis 2.8 Standard Edition nor CKV Standard Edition supports read-only replicas. Read/write separation will be automatically enabled for an instance after it enables read-only replicas. Write requests will be directed to the master node and read requests will be distributed to replica nodes. To enable read-only replicas, we recommend you create two or more replicas.
     * @param string $InstanceName Instance name, which can contain up to 60 letters, digits, underscores, or hyphens.
     * @param boolean $NoAuth Whether to support the password-free feature. Valid values: true (password-free instance), false (password-enabled instance). Default value: false. Only instances in a VPC support the password-free access.
     * @param array $NodeSet Node information of the instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for single-AZ deployed instances.
     * @param array $ResourceTags Tag bound to the instance to be purchased
     * @param string $ZoneName Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param string $TemplateId ID of the parameter template applied to the created instance. If this parameter is left blank, the default parameter template will be applied.
     * @param boolean $DryRun false: send a normal request and create an instance directly after the check is passed (default value); true: send a check request without creating an instance.
     * @param string $ProductVersion Valid values: `local` (local disk edition), `cloud` (cloud disk edition), `cdc` (dedicated cluster edition). Default value: `local` (local disk edition)
     * @param string $RedisClusterId Dedicated cluster ID, which is required when `ProductVersion` is "cdc".
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }
    }
}
