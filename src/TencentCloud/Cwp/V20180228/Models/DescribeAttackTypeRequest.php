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
 * DescribeAttackType request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>Source - String - Required - Allowlisted module, rasp: vulnerability defense, memshell_inject: memory shell injection</li>

 * @method void setFilters(array $Filters) Set Filter criteria
<li>Source - String - Required - Allowlisted module, rasp: vulnerability defense, memshell_inject: memory shell injection</li>

 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 1000.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getBy() Obtain Sorting field. Currently available: Id. Default sorting order is by Id. Can be omitted.
 * @method void setBy(string $By) Set Sorting field. Currently available: Id. Default sorting order is by Id. Can be omitted.
 * @method string getOrder() Obtain Sorting method: DESC, ASC.
 * @method void setOrder(string $Order) Set Sorting method: DESC, ASC.
 */
class DescribeAttackTypeRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>Source - String - Required - Allowlisted module, rasp: vulnerability defense, memshell_inject: memory shell injection</li>

     */
    public $Filters;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting field. Currently available: Id. Default sorting order is by Id. Can be omitted.
     */
    public $By;

    /**
     * @var string Sorting method: DESC, ASC.
     */
    public $Order;

    /**
     * @param array $Filters Filter criteria
<li>Source - String - Required - Allowlisted module, rasp: vulnerability defense, memshell_inject: memory shell injection</li>

     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 1000.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $By Sorting field. Currently available: Id. Default sorting order is by Id. Can be omitted.
     * @param string $Order Sorting method: DESC, ASC.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
