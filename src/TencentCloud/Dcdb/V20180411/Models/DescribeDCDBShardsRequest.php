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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBShards request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc.
 * @method array getShardInstanceIds() Obtain Shard ID list.
 * @method void setShardInstanceIds(array $ShardInstanceIds) Set Shard ID list.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method string getOrderBy() Obtain Sort by field. Only `createtime` is supported currently.
 * @method void setOrderBy(string $OrderBy) Set Sort by field. Only `createtime` is supported currently.
 * @method string getOrderByType() Obtain Sorting order. Valid values: desc, asc
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: desc, asc
 */
class DescribeDCDBShardsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var array Shard ID list.
     */
    public $ShardInstanceIds;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sort by field. Only `createtime` is supported currently.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: desc, asc
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc.
     * @param array $ShardInstanceIds Shard ID list.
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param string $OrderBy Sort by field. Only `createtime` is supported currently.
     * @param string $OrderByType Sorting order. Valid values: desc, asc
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
