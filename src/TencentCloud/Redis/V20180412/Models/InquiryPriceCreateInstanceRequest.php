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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateInstance request structure.
 *
 * @method integer getTypeId() Obtain <p>Instance type. - 2: Redis 2.8 memory edition (standard architecture). - 6: Redis 4.0 memory edition (standard architecture). - 7: Redis 4.0 memory edition (cluster architecture). - 8: Redis 5.0 memory edition (standard architecture). - 9: Redis 5.0 memory edition (cluster architecture). - 15: Redis 6.2 memory edition (standard architecture). - 16: Redis 6.2 memory edition (cluster architecture). - 17: Redis 7.0 memory edition (standard architecture). - 18: Redis 7.0 memory edition (cluster architecture). - 200: Memcached 1.6 memory edition (cluster architecture).</p>
 * @method void setTypeId(integer $TypeId) Set <p>Instance type. - 2: Redis 2.8 memory edition (standard architecture). - 6: Redis 4.0 memory edition (standard architecture). - 7: Redis 4.0 memory edition (cluster architecture). - 8: Redis 5.0 memory edition (standard architecture). - 9: Redis 5.0 memory edition (cluster architecture). - 15: Redis 6.2 memory edition (standard architecture). - 16: Redis 6.2 memory edition (cluster architecture). - 17: Redis 7.0 memory edition (standard architecture). - 18: Redis 7.0 memory edition (cluster architecture). - 200: Memcached 1.6 memory edition (cluster architecture).</p>
 * @method integer getMemSize() Obtain <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, refer to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>. When TypeId is standard architecture, MemSize is the total memory capacity of the instance. When TypeId is cluster architecture, MemSize is the sharded memory capacity.</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, refer to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>. When TypeId is standard architecture, MemSize is the total memory capacity of the instance. When TypeId is cluster architecture, MemSize is the sharded memory capacity.</p>
 * @method integer getGoodsNum() Obtain <p>Instance count. The number of instances to purchase at a time is subject to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>.</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Instance count. The number of instances to purchase at a time is subject to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>.</p>
 * @method integer getPeriod() Obtain <p>Purchase period needs to be filled in when creating an annual and monthly subscription instance. For pay-as-you-go instances, just fill in 1. Unit: month. Value ranges from 1 to 36 [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method void setPeriod(integer $Period) Set <p>Purchase period needs to be filled in when creating an annual and monthly subscription instance. For pay-as-you-go instances, just fill in 1. Unit: month. Value ranges from 1 to 36 [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
 * @method integer getBillingMode() Obtain <p>Payment method. - 0: Pay-As-You-Go. - 1: Monthly Subscription.</p>
 * @method void setBillingMode(integer $BillingMode) Set <p>Payment method. - 0: Pay-As-You-Go. - 1: Monthly Subscription.</p>
 * @method integer getZoneId() Obtain <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.<strong>Note</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.<strong>Note</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
 * @method integer getRedisShardNum() Obtain <p>Number of instance shards. - The shard number should be set to 1 for the standard architecture. - The number of shards can be set to 1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, or 128 for the cluster architecture.</p>
 * @method void setRedisShardNum(integer $RedisShardNum) Set <p>Number of instance shards. - The shard number should be set to 1 for the standard architecture. - The number of shards can be set to 1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, or 128 for the cluster architecture.</p>
 * @method integer getRedisReplicasNum() Obtain <p>Number of instance replicas. Valid values: 1, 2, 3, 4, and 5.</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set <p>Number of instance replicas. Valid values: 1, 2, 3, 4, and 5.</p>
 * @method boolean getReplicasReadonly() Obtain <p>Whether replica read-only is supported. For Redis 2.8 standard architecture and CKV standard architecture, this parameter is not required. - true: replica read-only not required. - false: read-only replica supported.</p>
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set <p>Whether replica read-only is supported. For Redis 2.8 standard architecture and CKV standard architecture, this parameter is not required. - true: replica read-only not required. - false: read-only replica supported.</p>
 * @method string getZoneName() Obtain <p>Name of the availability zone to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>. <strong>Description</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
 * @method void setZoneName(string $ZoneName) Set <p>Name of the availability zone to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>. <strong>Description</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
 * @method string getProductVersion() Obtain <p>Deployment method. - local: local disk, defaults to local. - cloud: cloud disk. - cdc: dedicated cluster edition.</p>
 * @method void setProductVersion(string $ProductVersion) Set <p>Deployment method. - local: local disk, defaults to local. - cloud: cloud disk. - cdc: dedicated cluster edition.</p>
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>Instance type. - 2: Redis 2.8 memory edition (standard architecture). - 6: Redis 4.0 memory edition (standard architecture). - 7: Redis 4.0 memory edition (cluster architecture). - 8: Redis 5.0 memory edition (standard architecture). - 9: Redis 5.0 memory edition (cluster architecture). - 15: Redis 6.2 memory edition (standard architecture). - 16: Redis 6.2 memory edition (cluster architecture). - 17: Redis 7.0 memory edition (standard architecture). - 18: Redis 7.0 memory edition (cluster architecture). - 200: Memcached 1.6 memory edition (cluster architecture).</p>
     */
    public $TypeId;

    /**
     * @var integer <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, refer to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>. When TypeId is standard architecture, MemSize is the total memory capacity of the instance. When TypeId is cluster architecture, MemSize is the sharded memory capacity.</p>
     */
    public $MemSize;

    /**
     * @var integer <p>Instance count. The number of instances to purchase at a time is subject to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>.</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>Purchase period needs to be filled in when creating an annual and monthly subscription instance. For pay-as-you-go instances, just fill in 1. Unit: month. Value ranges from 1 to 36 [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     */
    public $Period;

    /**
     * @var integer <p>Payment method. - 0: Pay-As-You-Go. - 1: Monthly Subscription.</p>
     */
    public $BillingMode;

    /**
     * @var integer <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.<strong>Note</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Number of instance shards. - The shard number should be set to 1 for the standard architecture. - The number of shards can be set to 1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, or 128 for the cluster architecture.</p>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>Number of instance replicas. Valid values: 1, 2, 3, 4, and 5.</p>
     */
    public $RedisReplicasNum;

    /**
     * @var boolean <p>Whether replica read-only is supported. For Redis 2.8 standard architecture and CKV standard architecture, this parameter is not required. - true: replica read-only not required. - false: read-only replica supported.</p>
     */
    public $ReplicasReadonly;

    /**
     * @var string <p>Name of the availability zone to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>. <strong>Description</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
     */
    public $ZoneName;

    /**
     * @var string <p>Deployment method. - local: local disk, defaults to local. - cloud: cloud disk. - cdc: dedicated cluster edition.</p>
     */
    public $ProductVersion;

    /**
     * @param integer $TypeId <p>Instance type. - 2: Redis 2.8 memory edition (standard architecture). - 6: Redis 4.0 memory edition (standard architecture). - 7: Redis 4.0 memory edition (cluster architecture). - 8: Redis 5.0 memory edition (standard architecture). - 9: Redis 5.0 memory edition (cluster architecture). - 15: Redis 6.2 memory edition (standard architecture). - 16: Redis 6.2 memory edition (cluster architecture). - 17: Redis 7.0 memory edition (standard architecture). - 18: Redis 7.0 memory edition (cluster architecture). - 200: Memcached 1.6 memory edition (cluster architecture).</p>
     * @param integer $MemSize <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, refer to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>. When TypeId is standard architecture, MemSize is the total memory capacity of the instance. When TypeId is cluster architecture, MemSize is the sharded memory capacity.</p>
     * @param integer $GoodsNum <p>Instance count. The number of instances to purchase at a time is subject to the specifications returned by <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">query product sales specifications</a>.</p>
     * @param integer $Period <p>Purchase period needs to be filled in when creating an annual and monthly subscription instance. For pay-as-you-go instances, just fill in 1. Unit: month. Value ranges from 1 to 36 [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</p>
     * @param integer $BillingMode <p>Payment method. - 0: Pay-As-You-Go. - 1: Monthly Subscription.</p>
     * @param integer $ZoneId <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.<strong>Note</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
     * @param integer $RedisShardNum <p>Number of instance shards. - The shard number should be set to 1 for the standard architecture. - The number of shards can be set to 1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, or 128 for the cluster architecture.</p>
     * @param integer $RedisReplicasNum <p>Number of instance replicas. Valid values: 1, 2, 3, 4, and 5.</p>
     * @param boolean $ReplicasReadonly <p>Whether replica read-only is supported. For Redis 2.8 standard architecture and CKV standard architecture, this parameter is not required. - true: replica read-only not required. - false: read-only replica supported.</p>
     * @param string $ZoneName <p>Name of the availability zone to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>. <strong>Description</strong>: Please specify at least one parameter in <strong>ZoneId</strong> and <strong>ZoneName</strong>.</p>
     * @param string $ProductVersion <p>Deployment method. - local: local disk, defaults to local. - cloud: cloud disk. - cdc: dedicated cluster edition.</p>
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
