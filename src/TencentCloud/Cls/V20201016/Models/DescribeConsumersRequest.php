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
 * DescribeConsumers request structure.
 *
 * @method array getFilters() Obtain - consumerId
Filter by [Delivery Rule ID].
Type: String
Required: No

- topicId
Filter by [Log topic].
Type: String
Required: No

- taskStatus
Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
Required: No


Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
 * @method void setFilters(array $Filters) Set - consumerId
Filter by [Delivery Rule ID].
Type: String
Required: No

- topicId
Filter by [Log topic].
Type: String
Required: No

- taskStatus
Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
Required: No


Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Pagination single page limit. The default value is 20, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Pagination single page limit. The default value is 20, and the maximum value is 100.
 */
class DescribeConsumersRequest extends AbstractModel
{
    /**
     * @var array - consumerId
Filter by [Delivery Rule ID].
Type: String
Required: No

- topicId
Filter by [Log topic].
Type: String
Required: No

- taskStatus
Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
Required: No


Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
     */
    public $Filters;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Pagination single page limit. The default value is 20, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @param array $Filters - consumerId
Filter by [Delivery Rule ID].
Type: String
Required: No

- topicId
Filter by [Log topic].
Type: String
Required: No

- taskStatus
Filter by [task running status]. Supported values: `0`: stop, `1`: running, `2`: exception.
Type: String
Required: No


Each request can have up to 10 Filters. The upper limit of Filter.Values is 10.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Pagination single page limit. The default value is 20, and the maximum value is 100.
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
    }
}
