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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebhookReceiverList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset.
Valid values: [0, +∞)
Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination offset.
Valid values: [0, +∞)
Default value: 0
 * @method integer getLimit() Obtain Number of results per page
Valid values: [1, 200]
Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results per page
Valid values: [1, 200]
Default value: 20
 * @method array getFilters() Obtain Filter criteria.
Supported filter items:
Name: Fuzzy search by robot name
Type: Robot type. Available values: WEBHOOK (webhook) / SCF (function)
 * @method void setFilters(array $Filters) Set Filter criteria.
Supported filter items:
Name: Fuzzy search by robot name
Type: Robot type. Available values: WEBHOOK (webhook) / SCF (function)
 * @method string getOrder() Obtain Sorting field.
Enumeration values:
InsertTime: Creation time
UpdateTime: Update time
Default value: UpdateTime.
 * @method void setOrder(string $Order) Set Sorting field.
Enumeration values:
InsertTime: Creation time
UpdateTime: Update time
Default value: UpdateTime.
 * @method string getBy() Obtain Sorting method.
Enumeration values:
asc: Ascending
desc: Descending
Default value: desc
 * @method void setBy(string $By) Set Sorting method.
Enumeration values:
asc: Ascending
desc: Descending
Default value: desc
 */
class DescribeWebhookReceiverListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset.
Valid values: [0, +∞)
Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results per page
Valid values: [1, 200]
Default value: 20
     */
    public $Limit;

    /**
     * @var array Filter criteria.
Supported filter items:
Name: Fuzzy search by robot name
Type: Robot type. Available values: WEBHOOK (webhook) / SCF (function)
     */
    public $Filters;

    /**
     * @var string Sorting field.
Enumeration values:
InsertTime: Creation time
UpdateTime: Update time
Default value: UpdateTime.
     */
    public $Order;

    /**
     * @var string Sorting method.
Enumeration values:
asc: Ascending
desc: Descending
Default value: desc
     */
    public $By;

    /**
     * @param integer $Offset Pagination offset.
Valid values: [0, +∞)
Default value: 0
     * @param integer $Limit Number of results per page
Valid values: [1, 200]
Default value: 20
     * @param array $Filters Filter criteria.
Supported filter items:
Name: Fuzzy search by robot name
Type: Robot type. Available values: WEBHOOK (webhook) / SCF (function)
     * @param string $Order Sorting field.
Enumeration values:
InsertTime: Creation time
UpdateTime: Update time
Default value: UpdateTime.
     * @param string $By Sorting method.
Enumeration values:
asc: Ascending
desc: Descending
Default value: desc
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
