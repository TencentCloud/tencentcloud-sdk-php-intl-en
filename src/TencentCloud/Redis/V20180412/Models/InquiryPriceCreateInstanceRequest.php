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
 * InquiryPriceCreateInstance request structure.
 *
 * @method integer getTypeId() Obtain Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method void setTypeId(integer $TypeId) Set Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method integer getMemSize() Obtain Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` indicates the standard architecture, `MemSize` indicates the total memory capacity of an instance; if `TypeId` indicates the cluster architecture, `MemSize` indicates the memory capacity per shard.
 * @method void setMemSize(integer $MemSize) Set Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` indicates the standard architecture, `MemSize` indicates the total memory capacity of an instance; if `TypeId` indicates the cluster architecture, `MemSize` indicates the memory capacity per shard.
 * @method integer getGoodsNum() Obtain Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
 * @method integer getPeriod() Obtain Length of purchase in months, which is required when creating a monthly-subscribed instance. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
 * @method void setPeriod(integer $Period) Set Length of purchase in months, which is required when creating a monthly-subscribed instance. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
 * @method integer getBillingMode() Obtain Billing mode.
- 0: pay-as-you-go.
- 1: monthly subscription.
 * @method void setBillingMode(integer $BillingMode) Set Billing mode.
- 0: pay-as-you-go.
- 1: monthly subscription.
 * @method integer getZoneId() Obtain ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method integer getRedisShardNum() Obtain Number of instance shards. For the standard architecture of 2.8, the number of shards does not need to be configured. For the standard architecture of other versions, the number of shards should be set to 1. For the cluster architecture, the number of shards to be purchased needs to be specified.
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of instance shards. For the standard architecture of 2.8, the number of shards does not need to be configured. For the standard architecture of other versions, the number of shards should be set to 1. For the cluster architecture, the number of shards to be purchased needs to be specified.
 * @method integer getRedisReplicasNum() Obtain Number of instance replicas. For the standard architecture of 2.8, the number of replicas does not need to be configured.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of instance replicas. For the standard architecture of 2.8, the number of replicas does not need to be configured.
 * @method boolean getReplicasReadonly() Obtain Whether replica read-only is supported. For the standard architecture of Redis 2.8 and CKV, this parameter does not need to be configured.
- true: Replica read-only is not required.
- false: Replica read-only is required.
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set Whether replica read-only is supported. For the standard architecture of Redis 2.8 and CKV, this parameter does not need to be configured.
- true: Replica read-only is not required.
- false: Replica read-only is required.
 * @method string getZoneName() Obtain Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneName(string $ZoneName) Set Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method string getProductVersion() Obtain Deployment mode.
- local: local disk. This is the default value.
- cloud: cloud disk.
- cdc: CDC.
 * @method void setProductVersion(string $ProductVersion) Set Deployment mode.
- local: local disk. This is the default value.
- cloud: cloud disk.
- cdc: CDC.
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     */
    public $TypeId;

    /**
     * @var integer Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` indicates the standard architecture, `MemSize` indicates the total memory capacity of an instance; if `TypeId` indicates the cluster architecture, `MemSize` indicates the memory capacity per shard.
     */
    public $MemSize;

    /**
     * @var integer Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
     */
    public $GoodsNum;

    /**
     * @var integer Length of purchase in months, which is required when creating a monthly-subscribed instance. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
     */
    public $Period;

    /**
     * @var integer Billing mode.
- 0: pay-as-you-go.
- 1: monthly subscription.
     */
    public $BillingMode;

    /**
     * @var integer ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var integer Number of instance shards. For the standard architecture of 2.8, the number of shards does not need to be configured. For the standard architecture of other versions, the number of shards should be set to 1. For the cluster architecture, the number of shards to be purchased needs to be specified.
     */
    public $RedisShardNum;

    /**
     * @var integer Number of instance replicas. For the standard architecture of 2.8, the number of replicas does not need to be configured.
     */
    public $RedisReplicasNum;

    /**
     * @var boolean Whether replica read-only is supported. For the standard architecture of Redis 2.8 and CKV, this parameter does not need to be configured.
- true: Replica read-only is not required.
- false: Replica read-only is required.
     */
    public $ReplicasReadonly;

    /**
     * @var string Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneName;

    /**
     * @var string Deployment mode.
- local: local disk. This is the default value.
- cloud: cloud disk.
- cdc: CDC.
     */
    public $ProductVersion;

    /**
     * @param integer $TypeId Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     * @param integer $MemSize Memory capacity in MB, which must be a multiple of 1,024. It is subject to the purchasable specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
If `TypeId` indicates the standard architecture, `MemSize` indicates the total memory capacity of an instance; if `TypeId` indicates the cluster architecture, `MemSize` indicates the memory capacity per shard.
     * @param integer $GoodsNum Number of instances. The actual quantity purchasable at a time is subject to the specifications returned by the [DescribeProductInfo API](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1).
     * @param integer $Period Length of purchase in months, which is required when creating a monthly-subscribed instance. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36]. For pay-as-you-go instances, set the parameter to `1`.
     * @param integer $BillingMode Billing mode.
- 0: pay-as-you-go.
- 1: monthly subscription.
     * @param integer $ZoneId ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param integer $RedisShardNum Number of instance shards. For the standard architecture of 2.8, the number of shards does not need to be configured. For the standard architecture of other versions, the number of shards should be set to 1. For the cluster architecture, the number of shards to be purchased needs to be specified.
     * @param integer $RedisReplicasNum Number of instance replicas. For the standard architecture of 2.8, the number of replicas does not need to be configured.
     * @param boolean $ReplicasReadonly Whether replica read-only is supported. For the standard architecture of Redis 2.8 and CKV, this parameter does not need to be configured.
- true: Replica read-only is not required.
- false: Replica read-only is required.
     * @param string $ZoneName Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param string $ProductVersion Deployment mode.
- local: local disk. This is the default value.
- cloud: cloud disk.
- cdc: CDC.
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

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("ReplicasReadonly",$param) and $param["ReplicasReadonly"] !== null) {
            $this->ReplicasReadonly = $param["ReplicasReadonly"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }
    }
}
