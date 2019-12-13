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
 * @method integer getType() 获取Product type. 2: Redis master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis standalone edition; 7: Redis cluster edition
 * @method void setType(integer $Type) 设置Product type. 2: Redis master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis standalone edition; 7: Redis cluster edition
 * @method string getTypeName() 获取Product name: Redis master-slave edition, CKV master-slave edition, CKV cluster edition, Redis standalone edition, or Redis cluster edition
 * @method void setTypeName(string $TypeName) 设置Product name: Redis master-slave edition, CKV master-slave edition, CKV cluster edition, Redis standalone edition, or Redis cluster edition
 * @method integer getMinBuyNum() 获取Minimum purchasable quantity
 * @method void setMinBuyNum(integer $MinBuyNum) 设置Minimum purchasable quantity
 * @method integer getMaxBuyNum() 获取Maximum purchasable quantity
 * @method void setMaxBuyNum(integer $MaxBuyNum) 设置Maximum purchasable quantity
 * @method boolean getSaleout() 获取Whether a product is sold out
 * @method void setSaleout(boolean $Saleout) 设置Whether a product is sold out
 * @method string getEngine() 获取Product engine: Tencent Cloud CKV or Redis community edition
 * @method void setEngine(string $Engine) 设置Product engine: Tencent Cloud CKV or Redis community edition
 * @method string getVersion() 获取Compatible version: Redis 2.8, Redis 3.2, or Redis 4.0
 * @method void setVersion(string $Version) 设置Compatible version: Redis 2.8, Redis 3.2, or Redis 4.0
 * @method array getTotalSize() 获取Total capacity in GB
 * @method void setTotalSize(array $TotalSize) 设置Total capacity in GB
 * @method array getShardSize() 获取Shard size in GB
 * @method void setShardSize(array $ShardSize) 设置Shard size in GB
 * @method array getReplicaNum() 获取Number of replicas
 * @method void setReplicaNum(array $ReplicaNum) 设置Number of replicas
 * @method array getShardNum() 获取Number of shards
 * @method void setShardNum(array $ShardNum) 设置Number of shards
 * @method string getPayMode() 获取Supported billing method. 1: monthly subscription; 0: pay-as-you-go
 * @method void setPayMode(string $PayMode) 设置Supported billing method. 1: monthly subscription; 0: pay-as-you-go
 * @method boolean getEnableRepicaReadOnly() 获取Whether to support read-only replicas
 * @method void setEnableRepicaReadOnly(boolean $EnableRepicaReadOnly) 设置Whether to support read-only replicas
 */

/**
 *Product information
 */
class ProductConf extends AbstractModel
{
    /**
     * @var integer Product type. 2: Redis master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis standalone edition; 7: Redis cluster edition
     */
    public $Type;

    /**
     * @var string Product name: Redis master-slave edition, CKV master-slave edition, CKV cluster edition, Redis standalone edition, or Redis cluster edition
     */
    public $TypeName;

    /**
     * @var integer Minimum purchasable quantity
     */
    public $MinBuyNum;

    /**
     * @var integer Maximum purchasable quantity
     */
    public $MaxBuyNum;

    /**
     * @var boolean Whether a product is sold out
     */
    public $Saleout;

    /**
     * @var string Product engine: Tencent Cloud CKV or Redis community edition
     */
    public $Engine;

    /**
     * @var string Compatible version: Redis 2.8, Redis 3.2, or Redis 4.0
     */
    public $Version;

    /**
     * @var array Total capacity in GB
     */
    public $TotalSize;

    /**
     * @var array Shard size in GB
     */
    public $ShardSize;

    /**
     * @var array Number of replicas
     */
    public $ReplicaNum;

    /**
     * @var array Number of shards
     */
    public $ShardNum;

    /**
     * @var string Supported billing method. 1: monthly subscription; 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var boolean Whether to support read-only replicas
     */
    public $EnableRepicaReadOnly;
    /**
     * @param integer $Type Product type. 2: Redis master-slave edition; 3: CKV master-slave edition; 4: CKV cluster edition; 5: Redis standalone edition; 7: Redis cluster edition
     * @param string $TypeName Product name: Redis master-slave edition, CKV master-slave edition, CKV cluster edition, Redis standalone edition, or Redis cluster edition
     * @param integer $MinBuyNum Minimum purchasable quantity
     * @param integer $MaxBuyNum Maximum purchasable quantity
     * @param boolean $Saleout Whether a product is sold out
     * @param string $Engine Product engine: Tencent Cloud CKV or Redis community edition
     * @param string $Version Compatible version: Redis 2.8, Redis 3.2, or Redis 4.0
     * @param array $TotalSize Total capacity in GB
     * @param array $ShardSize Shard size in GB
     * @param array $ReplicaNum Number of replicas
     * @param array $ShardNum Number of shards
     * @param string $PayMode Supported billing method. 1: monthly subscription; 0: pay-as-you-go
     * @param boolean $EnableRepicaReadOnly Whether to support read-only replicas
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("MinBuyNum",$param) and $param["MinBuyNum"] !== null) {
            $this->MinBuyNum = $param["MinBuyNum"];
        }

        if (array_key_exists("MaxBuyNum",$param) and $param["MaxBuyNum"] !== null) {
            $this->MaxBuyNum = $param["MaxBuyNum"];
        }

        if (array_key_exists("Saleout",$param) and $param["Saleout"] !== null) {
            $this->Saleout = $param["Saleout"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("ShardSize",$param) and $param["ShardSize"] !== null) {
            $this->ShardSize = $param["ShardSize"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("EnableRepicaReadOnly",$param) and $param["EnableRepicaReadOnly"] !== null) {
            $this->EnableRepicaReadOnly = $param["EnableRepicaReadOnly"];
        }
    }
}
