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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceOverview request structure.
 *
 * @method array getMetrics() Obtain Metric list.
 * @method void setMetrics(array $Metrics) Set Metric list.
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 * @method array getGroupBy() Obtain Aggregation dimension.
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimension.
 * @method integer getStartTime() Obtain Start time (unit: sec).
 * @method void setStartTime(integer $StartTime) Set Start time (unit: sec).
 * @method integer getEndTime() Obtain End time (unit: seconds).
 * @method void setEndTime(integer $EndTime) Set End time (unit: seconds).
 * @method OrderBy getOrderBy() Obtain Sorting method
.
Value: fill in.
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Sorting method
.
Value: fill in.
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
 * @method integer getLimit() Obtain Page size.
 * @method void setLimit(integer $Limit) Set Page size.
 * @method integer getOffset() Obtain Paging starting point.
 * @method void setOffset(integer $Offset) Set Paging starting point.
 */
class DescribeServiceOverviewRequest extends AbstractModel
{
    /**
     * @var array Metric list.
     */
    public $Metrics;

    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @var array Aggregation dimension.
     */
    public $GroupBy;

    /**
     * @var integer Start time (unit: sec).
     */
    public $StartTime;

    /**
     * @var integer End time (unit: seconds).
     */
    public $EndTime;

    /**
     * @var OrderBy Sorting method
.
Value: fill in.
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
     */
    public $OrderBy;

    /**
     * @var integer Page size.
     */
    public $Limit;

    /**
     * @var integer Paging starting point.
     */
    public $Offset;

    /**
     * @param array $Metrics Metric list.
     * @param string $InstanceId Business system id.
     * @param array $Filters Filter criteria.
     * @param array $GroupBy Aggregation dimension.
     * @param integer $StartTime Start time (unit: sec).
     * @param integer $EndTime End time (unit: seconds).
     * @param OrderBy $OrderBy Sorting method
.
Value: fill in.
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
     * @param integer $Limit Page size.
     * @param integer $Offset Paging starting point.
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
        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
