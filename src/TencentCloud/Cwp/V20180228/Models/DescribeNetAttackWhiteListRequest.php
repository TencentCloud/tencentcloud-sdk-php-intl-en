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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetAttackWhiteList request structure.
 *
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returns. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. The maximum value is 100.
 * @method array getFilters() Obtain Filter criteria
<li>IP - String - required: no - query by host IP</li>
<li>SrcIP- String - required: no - query by allowlisted IP</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IP - String - required: no - query by host IP</li>
<li>SrcIP- String - required: no - query by allowlisted IP</li>
 * @method string getOrder() Obtain Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method void setOrder(string $Order) Set Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method string getBy() Obtain Optional sorting column: [CreateTime]
 * @method void setBy(string $By) Set Optional sorting column: [CreateTime]
 */
class DescribeNetAttackWhiteListRequest extends AbstractModel
{
    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var array Filter criteria
<li>IP - String - required: no - query by host IP</li>
<li>SrcIP- String - required: no - query by allowlisted IP</li>
     */
    public $Filters;

    /**
     * @var string Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     */
    public $Order;

    /**
     * @var string Optional sorting column: [CreateTime]
     */
    public $By;

    /**
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returns. The maximum value is 100.
     * @param array $Filters Filter criteria
<li>IP - String - required: no - query by host IP</li>
<li>SrcIP- String - required: no - query by allowlisted IP</li>
     * @param string $Order Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     * @param string $By Optional sorting column: [CreateTime]
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
                $obj = new Filter();
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
