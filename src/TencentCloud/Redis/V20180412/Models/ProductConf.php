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
 * Product information
 *
 * @method integer getType() Obtain Product type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method void setType(integer $Type) Set Product type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method string getTypeName() Obtain Product names, including Redis Master-Replica Edition, Redis Standalone Edition, Redis 4.0 Cluster Edition, CKV Master-Replica Edition, and CKV Standalone Edition.
 * @method void setTypeName(string $TypeName) Set Product names, including Redis Master-Replica Edition, Redis Standalone Edition, Redis 4.0 Cluster Edition, CKV Master-Replica Edition, and CKV Standalone Edition.
 * @method integer getMinBuyNum() Obtain Minimum purchasable quantity
 * @method void setMinBuyNum(integer $MinBuyNum) Set Minimum purchasable quantity
 * @method integer getMaxBuyNum() Obtain Maximum purchasable quantity
 * @method void setMaxBuyNum(integer $MaxBuyNum) Set Maximum purchasable quantity
 * @method boolean getSaleout() Obtain Whether a product is sold out
- `true`: Sold out.
- `false`: Not sold out.
 * @method void setSaleout(boolean $Saleout) Set Whether a product is sold out
- `true`: Sold out.
- `false`: Not sold out.
 * @method string getEngine() Obtain Product engine. Valid values: Redis and CKV.
 * @method void setEngine(string $Engine) Set Product engine. Valid values: Redis and CKV.
 * @method string getVersion() Obtain Compatible versions, including Redis 2.8, 3.2, 4.0, 5.0, and 6.2.
 * @method void setVersion(string $Version) Set Compatible versions, including Redis 2.8, 3.2, 4.0, 5.0, and 6.2.
 * @method array getTotalSize() Obtain Total capacity in GB
 * @method void setTotalSize(array $TotalSize) Set Total capacity in GB
 * @method array getShardSize() Obtain Shard size in GB
 * @method void setShardSize(array $ShardSize) Set Shard size in GB
 * @method array getReplicaNum() Obtain Quantity of replicas
 * @method void setReplicaNum(array $ReplicaNum) Set Quantity of replicas
 * @method array getShardNum() Obtain Quantity of shards
 * @method void setShardNum(array $ShardNum) Set Quantity of shards
 * @method string getPayMode() Obtain Supported billing modes
- `1`: Monthly subscription.
- `0`: Pay-as-you-go.
 * @method void setPayMode(string $PayMode) Set Supported billing modes
- `1`: Monthly subscription.
- `0`: Pay-as-you-go.
 * @method boolean getEnableRepicaReadOnly() Obtain Due to spelling inconsistency in this parameter name, it is recommended to use the **EnableReplicaReadOnly** parameter instead. Its meaning refers to whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
 * @method void setEnableRepicaReadOnly(boolean $EnableRepicaReadOnly) Set Due to spelling inconsistency in this parameter name, it is recommended to use the **EnableReplicaReadOnly** parameter instead. Its meaning refers to whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
 * @method boolean getEnableReplicaReadOnly() Obtain Whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEnableReplicaReadOnly(boolean $EnableReplicaReadOnly) Set Whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ProductConf extends AbstractModel
{
    /**
     * @var integer Product type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     */
    public $Type;

    /**
     * @var string Product names, including Redis Master-Replica Edition, Redis Standalone Edition, Redis 4.0 Cluster Edition, CKV Master-Replica Edition, and CKV Standalone Edition.
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
- `true`: Sold out.
- `false`: Not sold out.
     */
    public $Saleout;

    /**
     * @var string Product engine. Valid values: Redis and CKV.
     */
    public $Engine;

    /**
     * @var string Compatible versions, including Redis 2.8, 3.2, 4.0, 5.0, and 6.2.
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
     * @var array Quantity of replicas
     */
    public $ReplicaNum;

    /**
     * @var array Quantity of shards
     */
    public $ShardNum;

    /**
     * @var string Supported billing modes
- `1`: Monthly subscription.
- `0`: Pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var boolean Due to spelling inconsistency in this parameter name, it is recommended to use the **EnableReplicaReadOnly** parameter instead. Its meaning refers to whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
     */
    public $EnableRepicaReadOnly;

    /**
     * @var boolean Whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EnableReplicaReadOnly;

    /**
     * @param integer $Type Product type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     * @param string $TypeName Product names, including Redis Master-Replica Edition, Redis Standalone Edition, Redis 4.0 Cluster Edition, CKV Master-Replica Edition, and CKV Standalone Edition.
     * @param integer $MinBuyNum Minimum purchasable quantity
     * @param integer $MaxBuyNum Maximum purchasable quantity
     * @param boolean $Saleout Whether a product is sold out
- `true`: Sold out.
- `false`: Not sold out.
     * @param string $Engine Product engine. Valid values: Redis and CKV.
     * @param string $Version Compatible versions, including Redis 2.8, 3.2, 4.0, 5.0, and 6.2.
     * @param array $TotalSize Total capacity in GB
     * @param array $ShardSize Shard size in GB
     * @param array $ReplicaNum Quantity of replicas
     * @param array $ShardNum Quantity of shards
     * @param string $PayMode Supported billing modes
- `1`: Monthly subscription.
- `0`: Pay-as-you-go.
     * @param boolean $EnableRepicaReadOnly Due to spelling inconsistency in this parameter name, it is recommended to use the **EnableReplicaReadOnly** parameter instead. Its meaning refers to whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
     * @param boolean $EnableReplicaReadOnly Whether the Read-Only Replica is supported.
- true: Supported.
- false: Not supported.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("EnableReplicaReadOnly",$param) and $param["EnableReplicaReadOnly"] !== null) {
            $this->EnableReplicaReadOnly = $param["EnableReplicaReadOnly"];
        }
    }
}
