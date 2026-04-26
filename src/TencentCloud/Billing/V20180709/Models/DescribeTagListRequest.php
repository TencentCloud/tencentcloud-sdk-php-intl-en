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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagList request structure.
 *
 * @method integer getLimit() Obtain Quantity, with the maximum value of 1,000
 * @method void setLimit(integer $Limit) Set Quantity, with the maximum value of 1,000
 * @method integer getOffset() Obtain Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
 * @method string getTagKey() Obtain Cost allocation tag key, used as fuzzy search
 * @method void setTagKey(string $TagKey) Set Cost allocation tag key, used as fuzzy search
 * @method integer getStatus() Obtain Tag type, enumeration value: 0 ordinary tag, 1 allocation tag, used for filtering. If not passed, get all tag keys.
 * @method void setStatus(integer $Status) Set Tag type, enumeration value: 0 ordinary tag, 1 allocation tag, used for filtering. If not passed, get all tag keys.
 * @method string getOrderType() Obtain Sorting method, enumeration value: asc for ascending order, desc for descending order.
 * @method void setOrderType(string $OrderType) Set Sorting method, enumeration value: asc for ascending order, desc for descending order.
 */
class DescribeTagListRequest extends AbstractModel
{
    /**
     * @var integer Quantity, with the maximum value of 1,000
     */
    public $Limit;

    /**
     * @var integer Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var string Cost allocation tag key, used as fuzzy search
     */
    public $TagKey;

    /**
     * @var integer Tag type, enumeration value: 0 ordinary tag, 1 allocation tag, used for filtering. If not passed, get all tag keys.
     */
    public $Status;

    /**
     * @var string Sorting method, enumeration value: asc for ascending order, desc for descending order.
     */
    public $OrderType;

    /**
     * @param integer $Limit Quantity, with the maximum value of 1,000
     * @param integer $Offset Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
     * @param string $TagKey Cost allocation tag key, used as fuzzy search
     * @param integer $Status Tag type, enumeration value: 0 ordinary tag, 1 allocation tag, used for filtering. If not passed, get all tag keys.
     * @param string $OrderType Sorting method, enumeration value: asc for ascending order, desc for descending order.
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
