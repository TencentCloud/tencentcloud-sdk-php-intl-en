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
 * DescribeRansomDefenseRollBackTaskList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameters (The maximum number is 100.)
 * @method void setLimit(integer $Limit) Set Pagination parameters (The maximum number is 100.)
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method array getFilters() Obtain Filter criteria
<li>Ips- string- string- host name</li>
<li>Status - Uint64: 0 - in progress; 1 - succeeded; 2 failed</li>
<li>Names - String - host name</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Ips- string- string- host name</li>
<li>Status - Uint64: 0 - in progress; 1 - succeeded; 2 failed</li>
<li>Names - String - host name</li>
 * @method string getOrder() Obtain Sorting method: ASC / DESC
 * @method void setOrder(string $Order) Set Sorting method: ASC / DESC
 * @method string getBy() Obtain Sorting fields, support CreateTime, ModifyTime.
 * @method void setBy(string $By) Set Sorting fields, support CreateTime, ModifyTime.
 */
class DescribeRansomDefenseRollBackTaskListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameters (The maximum number is 100.)
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Ips- string- string- host name</li>
<li>Status - Uint64: 0 - in progress; 1 - succeeded; 2 failed</li>
<li>Names - String - host name</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: ASC / DESC
     */
    public $Order;

    /**
     * @var string Sorting fields, support CreateTime, ModifyTime.
     */
    public $By;

    /**
     * @param integer $Limit Pagination parameters (The maximum number is 100.)
     * @param integer $Offset Pagination parameter
     * @param array $Filters Filter criteria
<li>Ips- string- string- host name</li>
<li>Status - Uint64: 0 - in progress; 1 - succeeded; 2 failed</li>
<li>Names - String - host name</li>
     * @param string $Order Sorting method: ASC / DESC
     * @param string $By Sorting fields, support CreateTime, ModifyTime.
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
