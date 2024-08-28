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
 * DescribeRansomDefenseStrategyList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameter (maximum quantity: 100)
 * @method void setLimit(integer $Limit) Set Pagination parameter (maximum quantity: 100)
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method array getFilters() Obtain Filtering criteria
<li>Ips - String - required: no - IP addresses for querying </li>
<li>MachineNames - String - required: no - instance names for querying </li>
<li>Names - String - required: no - anti-ransomware policy names for querying </li>
<li>Dirs - String - required: no - bait directory </li>
<li>Status - String - required: no - policy status: 0: disabled; 1: enabled </li>
<li>BackupType - String - required: no - backup mode: 0: weekly; 1: daily </li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Ips - String - required: no - IP addresses for querying </li>
<li>MachineNames - String - required: no - instance names for querying </li>
<li>Names - String - required: no - anti-ransomware policy names for querying </li>
<li>Dirs - String - required: no - bait directory </li>
<li>Status - String - required: no - policy status: 0: disabled; 1: enabled </li>
<li>BackupType - String - required: no - backup mode: 0: weekly; 1: daily </li>
 * @method string getOrder() Obtain Sorting order: ASC and DESC
 * @method void setOrder(string $Order) Set Sorting order: ASC and DESC
 * @method string getBy() Obtain Sorting fields, supporting CreateTime and MachineCount
 * @method void setBy(string $By) Set Sorting fields, supporting CreateTime and MachineCount
 */
class DescribeRansomDefenseStrategyListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameter (maximum quantity: 100)
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var array Filtering criteria
<li>Ips - String - required: no - IP addresses for querying </li>
<li>MachineNames - String - required: no - instance names for querying </li>
<li>Names - String - required: no - anti-ransomware policy names for querying </li>
<li>Dirs - String - required: no - bait directory </li>
<li>Status - String - required: no - policy status: 0: disabled; 1: enabled </li>
<li>BackupType - String - required: no - backup mode: 0: weekly; 1: daily </li>
     */
    public $Filters;

    /**
     * @var string Sorting order: ASC and DESC
     */
    public $Order;

    /**
     * @var string Sorting fields, supporting CreateTime and MachineCount
     */
    public $By;

    /**
     * @param integer $Limit Pagination parameter (maximum quantity: 100)
     * @param integer $Offset Pagination parameter
     * @param array $Filters Filtering criteria
<li>Ips - String - required: no - IP addresses for querying </li>
<li>MachineNames - String - required: no - instance names for querying </li>
<li>Names - String - required: no - anti-ransomware policy names for querying </li>
<li>Dirs - String - required: no - bait directory </li>
<li>Status - String - required: no - policy status: 0: disabled; 1: enabled </li>
<li>BackupType - String - required: no - backup mode: 0: weekly; 1: daily </li>
     * @param string $Order Sorting order: ASC and DESC
     * @param string $By Sorting fields, supporting CreateTime and MachineCount
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
