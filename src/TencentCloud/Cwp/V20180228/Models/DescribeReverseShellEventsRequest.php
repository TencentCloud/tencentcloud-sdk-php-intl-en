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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReverseShellEvents request structure.
 *
 * @method integer getLimit() Obtain Number of returns, with the maximum value being 100.
 * @method void setLimit(integer $Limit) Set Number of returns, with the maximum value being 100.
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - keyword (host's private IP address|process name)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - keyword (host's private IP address|process name)</li>
 * @method string getOrder() Obtain Sorting method: sort by number of requests. asc: ascending order; desc: descending order.
 * @method void setOrder(string $Order) Set Sorting method: sort by number of requests. asc: ascending order; desc: descending order.
 * @method string getBy() Obtain Sorting field. CreateTime: occurrence time.
 * @method void setBy(string $By) Set Sorting field. CreateTime: occurrence time.
 */
class DescribeReverseShellEventsRequest extends AbstractModel
{
    /**
     * @var integer Number of returns, with the maximum value being 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - keyword (host's private IP address|process name)</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: sort by number of requests. asc: ascending order; desc: descending order.
     */
    public $Order;

    /**
     * @var string Sorting field. CreateTime: occurrence time.
     */
    public $By;

    /**
     * @param integer $Limit Number of returns, with the maximum value being 100.
     * @param integer $Offset Offset, which defaults to 0
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - keyword (host's private IP address|process name)</li>
     * @param string $Order Sorting method: sort by number of requests. asc: ascending order; desc: descending order.
     * @param string $By Sorting field. CreateTime: occurrence time.
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
