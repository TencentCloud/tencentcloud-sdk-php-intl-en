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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShippers request structure.
 *
 * @method array getFilters() Obtain -shipperName: Filter by [delivery rule name].
Type: String.
    Required: No
-shipperId: Filter by [Delivery Rule ID].
Type: String.
    Required: No
-topicId: Filter by [log topic].
Type: String.
    Required: No
-taskStatus: Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
    Required: No

Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
 * @method void setFilters(array $Filters) Set -shipperName: Filter by [delivery rule name].
Type: String.
    Required: No
-shipperId: Filter by [Delivery Rule ID].
Type: String.
    Required: No
-topicId: Filter by [log topic].
Type: String.
    Required: No
-taskStatus: Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
    Required: No

Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100
 * @method integer getPreciseSearch() Obtain Control whether the relevant fields in Filters use exact matching. 0: Default value, fuzzy matching for shipperName. 1: Exact match for shipperName.
 * @method void setPreciseSearch(integer $PreciseSearch) Set Control whether the relevant fields in Filters use exact matching. 0: Default value, fuzzy matching for shipperName. 1: Exact match for shipperName.
 */
class DescribeShippersRequest extends AbstractModel
{
    /**
     * @var array -shipperName: Filter by [delivery rule name].
Type: String.
    Required: No
-shipperId: Filter by [Delivery Rule ID].
Type: String.
    Required: No
-topicId: Filter by [log topic].
Type: String.
    Required: No
-taskStatus: Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
    Required: No

Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer Control whether the relevant fields in Filters use exact matching. 0: Default value, fuzzy matching for shipperName. 1: Exact match for shipperName.
     */
    public $PreciseSearch;

    /**
     * @param array $Filters -shipperName: Filter by [delivery rule name].
Type: String.
    Required: No
-shipperId: Filter by [Delivery Rule ID].
Type: String.
    Required: No
-topicId: Filter by [log topic].
Type: String.
    Required: No
-taskStatus: Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
    Required: No

Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100
     * @param integer $PreciseSearch Control whether the relevant fields in Filters use exact matching. 0: Default value, fuzzy matching for shipperName. 1: Exact match for shipperName.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PreciseSearch",$param) and $param["PreciseSearch"] !== null) {
            $this->PreciseSearch = $param["PreciseSearch"];
        }
    }
}
