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
 * DescribeJavaMemShellList request structure.
 *
 * @method array getFilters() Obtain Filtering criteria: InstanceID and IP

MachineName host name for fuzzy query; Type, status for precise match; CreateBeginTime, CreateEndTime for time period
 * @method void setFilters(array $Filters) Set Filtering criteria: InstanceID and IP

MachineName host name for fuzzy query; Type, status for precise match; CreateBeginTime, CreateEndTime for time period
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting method (case insensitive): asc for ascending order; desc for descending order
 * @method void setOrder(string $Order) Set Sorting method (case insensitive): asc for ascending order; desc for descending order
 * @method string getBy() Obtain Sort column, strictly equal: Latest detection time RecentFoundTime
 * @method void setBy(string $By) Set Sort column, strictly equal: Latest detection time RecentFoundTime
 */
class DescribeJavaMemShellListRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria: InstanceID and IP

MachineName host name for fuzzy query; Type, status for precise match; CreateBeginTime, CreateEndTime for time period
     */
    public $Filters;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Sorting method (case insensitive): asc for ascending order; desc for descending order
     */
    public $Order;

    /**
     * @var string Sort column, strictly equal: Latest detection time RecentFoundTime
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria: InstanceID and IP

MachineName host name for fuzzy query; Type, status for precise match; CreateBeginTime, CreateEndTime for time period
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param string $Order Sorting method (case insensitive): asc for ascending order; desc for descending order
     * @param string $By Sort column, strictly equal: Latest detection time RecentFoundTime
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
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
