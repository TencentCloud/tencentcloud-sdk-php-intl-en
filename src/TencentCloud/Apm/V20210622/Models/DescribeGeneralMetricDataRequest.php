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
 * DescribeGeneralMetricData request structure.
 *
 * @method array getMetrics() Obtain Metric name to be queried, which cannot be customized. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method void setMetrics(array $Metrics) Set Metric name to be queried, which cannot be customized. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method string getViewName() Obtain View name. the input cannot be customized. [for details, see.](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1).
 * @method void setViewName(string $ViewName) Set View name. the input cannot be customized. [for details, see.](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1).
 * @method array getFilters() Obtain The dimension information to be filtered; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method void setFilters(array $Filters) Set The dimension information to be filtered; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method array getGroupBy() Obtain Aggregated dimension; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method void setGroupBy(array $GroupBy) Set Aggregated dimension; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
 * @method integer getStartTime() Obtain The timestamp of the start time, supporting the query of metric data within 30 days. (unit: seconds).
 * @method void setStartTime(integer $StartTime) Set The timestamp of the start time, supporting the query of metric data within 30 days. (unit: seconds).
 * @method integer getEndTime() Obtain The timestamp of the end time, supporting the query of metric data within 30 days. (unit: seconds).
 * @method void setEndTime(integer $EndTime) Set The timestamp of the end time, supporting the query of metric data within 30 days. (unit: seconds).
 * @method integer getPeriod() Obtain Whether to aggregate by a fixed time span: enter 1 for values of 1 and greater, and 0 if not filled in.
-If 0 is filled in, it calculates the metric data from the start time to the cutoff time.
- if 1 is filled in, the aggregation granularity will be selected according to the time span from the start time to the deadline:.
 -If the time span is (0,12) hours, it is aggregated by one-minute granularity.
 -If the time span is [12,48] hours, it is aggregated at a five-minute granularity.
 -If the time span is (48, +∞) hours, it is aggregated at an hourly granularity.
 * @method void setPeriod(integer $Period) Set Whether to aggregate by a fixed time span: enter 1 for values of 1 and greater, and 0 if not filled in.
-If 0 is filled in, it calculates the metric data from the start time to the cutoff time.
- if 1 is filled in, the aggregation granularity will be selected according to the time span from the start time to the deadline:.
 -If the time span is (0,12) hours, it is aggregated by one-minute granularity.
 -If the time span is [12,48] hours, it is aggregated at a five-minute granularity.
 -If the time span is (48, +∞) hours, it is aggregated at an hourly granularity.
 * @method OrderBy getOrderBy() Obtain Sort query metrics.
Key: enter the tencentcloud api metric name. [for details, see](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1) .
Value: specify the sorting method:.     
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Sort query metrics.
Key: enter the tencentcloud api metric name. [for details, see](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1) .
Value: specify the sorting method:.     
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
 * @method integer getPageSize() Obtain Maximum number of queried metrics. currently, up to 50 data entries can be displayed. the value range for pagesize is 1-50. submit pagesize to show the limited number based on the value of pagesize.
 * @method void setPageSize(integer $PageSize) Set Maximum number of queried metrics. currently, up to 50 data entries can be displayed. the value range for pagesize is 1-50. submit pagesize to show the limited number based on the value of pagesize.
 */
class DescribeGeneralMetricDataRequest extends AbstractModel
{
    /**
     * @var array Metric name to be queried, which cannot be customized. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     */
    public $Metrics;

    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var string View name. the input cannot be customized. [for details, see.](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1).
     */
    public $ViewName;

    /**
     * @var array The dimension information to be filtered; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     */
    public $Filters;

    /**
     * @var array Aggregated dimension; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     */
    public $GroupBy;

    /**
     * @var integer The timestamp of the start time, supporting the query of metric data within 30 days. (unit: seconds).
     */
    public $StartTime;

    /**
     * @var integer The timestamp of the end time, supporting the query of metric data within 30 days. (unit: seconds).
     */
    public $EndTime;

    /**
     * @var integer Whether to aggregate by a fixed time span: enter 1 for values of 1 and greater, and 0 if not filled in.
-If 0 is filled in, it calculates the metric data from the start time to the cutoff time.
- if 1 is filled in, the aggregation granularity will be selected according to the time span from the start time to the deadline:.
 -If the time span is (0,12) hours, it is aggregated by one-minute granularity.
 -If the time span is [12,48] hours, it is aggregated at a five-minute granularity.
 -If the time span is (48, +∞) hours, it is aggregated at an hourly granularity.
     */
    public $Period;

    /**
     * @var OrderBy Sort query metrics.
Key: enter the tencentcloud api metric name. [for details, see](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1) .
Value: specify the sorting method:.     
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
     */
    public $OrderBy;

    /**
     * @var integer Maximum number of queried metrics. currently, up to 50 data entries can be displayed. the value range for pagesize is 1-50. submit pagesize to show the limited number based on the value of pagesize.
     */
    public $PageSize;

    /**
     * @param array $Metrics Metric name to be queried, which cannot be customized. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     * @param string $InstanceId Business system id.
     * @param string $ViewName View name. the input cannot be customized. [for details, see.](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1).
     * @param array $Filters The dimension information to be filtered; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     * @param array $GroupBy Aggregated dimension; different views have corresponding metric dimensions. (for details, see <https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1>.).
     * @param integer $StartTime The timestamp of the start time, supporting the query of metric data within 30 days. (unit: seconds).
     * @param integer $EndTime The timestamp of the end time, supporting the query of metric data within 30 days. (unit: seconds).
     * @param integer $Period Whether to aggregate by a fixed time span: enter 1 for values of 1 and greater, and 0 if not filled in.
-If 0 is filled in, it calculates the metric data from the start time to the cutoff time.
- if 1 is filled in, the aggregation granularity will be selected according to the time span from the start time to the deadline:.
 -If the time span is (0,12) hours, it is aggregated by one-minute granularity.
 -If the time span is [12,48] hours, it is aggregated at a five-minute granularity.
 -If the time span is (48, +∞) hours, it is aggregated at an hourly granularity.
     * @param OrderBy $OrderBy Sort query metrics.
Key: enter the tencentcloud api metric name. [for details, see](https://intl.cloud.tencent.com/document/product/248/101681?from_cn_redirect=1) .
Value: specify the sorting method:.     
-Asc: sorts query metrics in ascending order.
- desc: sort query metrics in descending order.
     * @param integer $PageSize Maximum number of queried metrics. currently, up to 50 data entries can be displayed. the value range for pagesize is 1-50. submit pagesize to show the limited number based on the value of pagesize.
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
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new GeneralFilter();
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
