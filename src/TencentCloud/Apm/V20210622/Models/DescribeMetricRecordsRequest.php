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
 * DescribeMetricRecords request structure.
 *
 * @method array getMetrics() Obtain Metric list.
 * @method void setMetrics(array $Metrics) Set Metric list.
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method integer getStartTime() Obtain Start time (unit: sec).
 * @method void setStartTime(integer $StartTime) Set Start time (unit: sec).
 * @method integer getEndTime() Obtain End time (unit: seconds).
 * @method void setEndTime(integer $EndTime) Set End time (unit: seconds).
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 * @method array getOrFilters() Obtain Or filter criteria.
 * @method void setOrFilters(array $OrFilters) Set Or filter criteria.
 * @method array getGroupBy() Obtain Aggregation dimension.
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimension.
 * @method OrderBy getOrderBy() Obtain Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
 * @method string getBusinessName() Obtain The service name of the business itself. console users should fill in taw.
 * @method void setBusinessName(string $BusinessName) Set The service name of the business itself. console users should fill in taw.
 * @method string getType() Obtain Special handling of query results.
 * @method void setType(string $Type) Set Special handling of query results.
 * @method integer getLimit() Obtain Size per page, defaults to 1,000, valid value range is 0 – 1,000.
 * @method void setLimit(integer $Limit) Set Size per page, defaults to 1,000, valid value range is 0 – 1,000.
 * @method integer getOffset() Obtain Paging starting point.
 * @method void setOffset(integer $Offset) Set Paging starting point.
 * @method integer getPageIndex() Obtain Page number.
 * @method void setPageIndex(integer $PageIndex) Set Page number.
 * @method integer getPageSize() Obtain Page length.
 * @method void setPageSize(integer $PageSize) Set Page length.
 */
class DescribeMetricRecordsRequest extends AbstractModel
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
     * @var integer Start time (unit: sec).
     */
    public $StartTime;

    /**
     * @var integer End time (unit: seconds).
     */
    public $EndTime;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @var array Or filter criteria.
     */
    public $OrFilters;

    /**
     * @var array Aggregation dimension.
     */
    public $GroupBy;

    /**
     * @var OrderBy Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
     */
    public $OrderBy;

    /**
     * @var string The service name of the business itself. console users should fill in taw.
     */
    public $BusinessName;

    /**
     * @var string Special handling of query results.
     */
    public $Type;

    /**
     * @var integer Size per page, defaults to 1,000, valid value range is 0 – 1,000.
     */
    public $Limit;

    /**
     * @var integer Paging starting point.
     */
    public $Offset;

    /**
     * @var integer Page number.
     */
    public $PageIndex;

    /**
     * @var integer Page length.
     */
    public $PageSize;

    /**
     * @param array $Metrics Metric list.
     * @param string $InstanceId Business system id.
     * @param integer $StartTime Start time (unit: sec).
     * @param integer $EndTime End time (unit: seconds).
     * @param array $Filters Filter criteria.
     * @param array $OrFilters Or filter criteria.
     * @param array $GroupBy Aggregation dimension.
     * @param OrderBy $OrderBy Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
     * @param string $BusinessName The service name of the business itself. console users should fill in taw.
     * @param string $Type Special handling of query results.
     * @param integer $Limit Size per page, defaults to 1,000, valid value range is 0 – 1,000.
     * @param integer $Offset Paging starting point.
     * @param integer $PageIndex Page number.
     * @param integer $PageSize Page length.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrFilters",$param) and $param["OrFilters"] !== null) {
            $this->OrFilters = [];
            foreach ($param["OrFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->OrFilters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
