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
 * DescribeWebHookPolicy request structure.
 *
 * @method array getFilter() Obtain Filter criteria
 * @method void setFilter(array $Filter) Set Filter criteria
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method void setOrder(string $Order) Set Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 */
class DescribeWebHookPolicyRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
     */
    public $Filter;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @param array $Filter Filter criteria
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param string $Order Sorting Method: [ASC: Ascending Order, DESC: Descending Order]
     * @param string $By Sorting field
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
