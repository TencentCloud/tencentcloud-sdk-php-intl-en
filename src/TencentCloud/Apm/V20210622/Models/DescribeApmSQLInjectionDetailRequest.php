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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmSQLInjectionDetail request structure.
 *
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getStartTime() Obtain unix second-level timestamp
 * @method void setStartTime(integer $StartTime) Set unix second-level timestamp
 * @method integer getEndTime() Obtain unix second-level timestamp
 * @method void setEndTime(integer $EndTime) Set unix second-level timestamp
 * @method OrderBy getOrderBy() Obtain Order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Order.
 * @method array getFilters() Obtain Query filter criteria.
 * @method void setFilters(array $Filters) Set Query filter criteria.
 * @method array getGroupBy() Obtain Aggregation dimension
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimension
 * @method array getMetrics() Obtain Metric list
 * @method void setMetrics(array $Metrics) Set Metric list
 */
class DescribeApmSQLInjectionDetailRequest extends AbstractModel
{
    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer unix second-level timestamp
     */
    public $StartTime;

    /**
     * @var integer unix second-level timestamp
     */
    public $EndTime;

    /**
     * @var OrderBy Order.
     */
    public $OrderBy;

    /**
     * @var array Query filter criteria.
     */
    public $Filters;

    /**
     * @var array Aggregation dimension
     */
    public $GroupBy;

    /**
     * @var array Metric list
     */
    public $Metrics;

    /**
     * @param string $InstanceId Business system ID
     * @param integer $Limit Limit
     * @param integer $Offset Offset.
     * @param integer $StartTime unix second-level timestamp
     * @param integer $EndTime unix second-level timestamp
     * @param OrderBy $OrderBy Order.
     * @param array $Filters Query filter criteria.
     * @param array $GroupBy Aggregation dimension
     * @param array $Metrics Metric list
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
