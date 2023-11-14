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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagList request structure.
 *
 * @method integer getLimit() Obtain The number of entries returned at a time. The maximum value is `1000`.
 * @method void setLimit(integer $Limit) Set The number of entries returned at a time. The maximum value is `1000`.
 * @method integer getOffset() Obtain Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
 * @method string getTagKey() Obtain Cost allocation tag key, used for fuzzy search.
 * @method void setTagKey(string $TagKey) Set Cost allocation tag key, used for fuzzy search.
 * @method integer getStatus() Obtain Tag type, used for tag filtering. Valid values: `0` (general tags), `1` (cost allocation tags). If it is not specified, all tag keys will be queried.
 * @method void setStatus(integer $Status) Set Tag type, used for tag filtering. Valid values: `0` (general tags), `1` (cost allocation tags). If it is not specified, all tag keys will be queried.
 * @method string getOrderType() Obtain Sorting order. Valid values: `asc` (ascending order), `desc` (descending order).
 * @method void setOrderType(string $OrderType) Set Sorting order. Valid values: `asc` (ascending order), `desc` (descending order).
 */
class DescribeTagListRequest extends AbstractModel
{
    /**
     * @var integer The number of entries returned at a time. The maximum value is `1000`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var string Cost allocation tag key, used for fuzzy search.
     */
    public $TagKey;

    /**
     * @var integer Tag type, used for tag filtering. Valid values: `0` (general tags), `1` (cost allocation tags). If it is not specified, all tag keys will be queried.
     */
    public $Status;

    /**
     * @var string Sorting order. Valid values: `asc` (ascending order), `desc` (descending order).
     */
    public $OrderType;

    /**
     * @param integer $Limit The number of entries returned at a time. The maximum value is `1000`.
     * @param integer $Offset Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
     * @param string $TagKey Cost allocation tag key, used for fuzzy search.
     * @param integer $Status Tag type, used for tag filtering. Valid values: `0` (general tags), `1` (cost allocation tags). If it is not specified, all tag keys will be queried.
     * @param string $OrderType Sorting order. Valid values: `asc` (ascending order), `desc` (descending order).
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
