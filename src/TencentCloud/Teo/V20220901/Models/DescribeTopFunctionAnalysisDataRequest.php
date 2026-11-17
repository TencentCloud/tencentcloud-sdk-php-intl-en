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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopFunctionAnalysisData request structure.
 *
 * @method array getZoneIds() Obtain <p>Set of site IDs. Enter at least one site ID.</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>Set of site IDs. Enter at least one site ID.</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be no longer than 7 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be no longer than 7 days.
 * @method string getMetricName() Obtain The metric to query. Valid values:<ul><li>`function_requestCount_functionResult`: counts Edge Function requests by the dimension of execution result.</li><li>`function_requestCount_functionName`: counts Edge Function requests by the dimension of function name.</li><li>`function_requestCount_domain`: counts Edge Function requests by the dimension of domain name.</li></ul>
 * @method void setMetricName(string $MetricName) Set The metric to query. Valid values:<ul><li>`function_requestCount_functionResult`: counts Edge Function requests by the dimension of execution result.</li><li>`function_requestCount_functionName`: counts Edge Function requests by the dimension of function name.</li><li>`function_requestCount_domain`: counts Edge Function requests by the dimension of domain name.</li></ul>
 * @method integer getLimit() Obtain <p>Number of top data entries to query. The maximum value is 1000. If not specified, the default value is 10, indicating that the top 10 data entries are queried.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of top data entries to query. The maximum value is 1000. If not specified, the default value is 10, indicating that the top 10 data entries are queried.</p>
 * @method array getFilters() Obtain Filter conditions. The maximum number of values in `Filters.Value` is 20. The detailed filter condition keys are as follows:<ul><li>`domain`: filters by subdomain name. Example value: `www.example.com`.</li><li>`function-name`: filters by Edge Function name. Example value: `test051301-zone-2r2fdoxxxx-130000000`.</li><li>`function-result`: filters by Edge Function execution result. Valid values for the corresponding `Value`:<ul><li>`success`: success.</li><li>`fail`: failure.</li></ul></li></ul>
 * @method void setFilters(array $Filters) Set Filter conditions. The maximum number of values in `Filters.Value` is 20. The detailed filter condition keys are as follows:<ul><li>`domain`: filters by subdomain name. Example value: `www.example.com`.</li><li>`function-name`: filters by Edge Function name. Example value: `test051301-zone-2r2fdoxxxx-130000000`.</li><li>`function-result`: filters by Edge Function execution result. Valid values for the corresponding `Value`:<ul><li>`success`: success.</li><li>`fail`: failure.</li></ul></li></ul>
 * @method string getInterval() Obtain Query time granularity. Valid values:<ul><li>`min`: 1 minute.</li><li>`5min`: 5 minutes.</li><li>`hour`: 1 hour.</li><li>`day`: 1 day.</li></ul>If this parameter is not specified, the granularity is automatically inferred based on the interval between the start time and the end time. The specific rules are as follows: within 2 hours, the granularity is `min`; within 2 days, the granularity is `5min`; within 7 days, the granularity is `hour`; longer than 7 days, the granularity is `day`.
 * @method void setInterval(string $Interval) Set Query time granularity. Valid values:<ul><li>`min`: 1 minute.</li><li>`5min`: 5 minutes.</li><li>`hour`: 1 hour.</li><li>`day`: 1 day.</li></ul>If this parameter is not specified, the granularity is automatically inferred based on the interval between the start time and the end time. The specific rules are as follows: within 2 hours, the granularity is `min`; within 2 days, the granularity is `5min`; within 7 days, the granularity is `hour`; longer than 7 days, the granularity is `day`.
 * @method string getArea() Obtain The region the data belongs to. Valid values:<ul><li>`overseas`: data from the global area (excluding the Chinese mainland).</li><li>`mainland`: data from the Chinese mainland.</li><li>`global`: global data.</li></ul>If this parameter is not specified, the default value is `global`.
 * @method void setArea(string $Area) Set The region the data belongs to. Valid values:<ul><li>`overseas`: data from the global area (excluding the Chinese mainland).</li><li>`mainland`: data from the Chinese mainland.</li><li>`global`: global data.</li></ul>If this parameter is not specified, the default value is `global`.
 */
class DescribeTopFunctionAnalysisDataRequest extends AbstractModel
{
    /**
     * @var array <p>Set of site IDs. Enter at least one site ID.</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be no longer than 7 days.
     */
    public $EndTime;

    /**
     * @var string The metric to query. Valid values:<ul><li>`function_requestCount_functionResult`: counts Edge Function requests by the dimension of execution result.</li><li>`function_requestCount_functionName`: counts Edge Function requests by the dimension of function name.</li><li>`function_requestCount_domain`: counts Edge Function requests by the dimension of domain name.</li></ul>
     */
    public $MetricName;

    /**
     * @var integer <p>Number of top data entries to query. The maximum value is 1000. If not specified, the default value is 10, indicating that the top 10 data entries are queried.</p>
     */
    public $Limit;

    /**
     * @var array Filter conditions. The maximum number of values in `Filters.Value` is 20. The detailed filter condition keys are as follows:<ul><li>`domain`: filters by subdomain name. Example value: `www.example.com`.</li><li>`function-name`: filters by Edge Function name. Example value: `test051301-zone-2r2fdoxxxx-130000000`.</li><li>`function-result`: filters by Edge Function execution result. Valid values for the corresponding `Value`:<ul><li>`success`: success.</li><li>`fail`: failure.</li></ul></li></ul>
     */
    public $Filters;

    /**
     * @var string Query time granularity. Valid values:<ul><li>`min`: 1 minute.</li><li>`5min`: 5 minutes.</li><li>`hour`: 1 hour.</li><li>`day`: 1 day.</li></ul>If this parameter is not specified, the granularity is automatically inferred based on the interval between the start time and the end time. The specific rules are as follows: within 2 hours, the granularity is `min`; within 2 days, the granularity is `5min`; within 7 days, the granularity is `hour`; longer than 7 days, the granularity is `day`.
     */
    public $Interval;

    /**
     * @var string The region the data belongs to. Valid values:<ul><li>`overseas`: data from the global area (excluding the Chinese mainland).</li><li>`mainland`: data from the Chinese mainland.</li><li>`global`: global data.</li></ul>If this parameter is not specified, the default value is `global`.
     */
    public $Area;

    /**
     * @param array $ZoneIds <p>Set of site IDs. Enter at least one site ID.</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be no longer than 7 days.
     * @param string $MetricName The metric to query. Valid values:<ul><li>`function_requestCount_functionResult`: counts Edge Function requests by the dimension of execution result.</li><li>`function_requestCount_functionName`: counts Edge Function requests by the dimension of function name.</li><li>`function_requestCount_domain`: counts Edge Function requests by the dimension of domain name.</li></ul>
     * @param integer $Limit <p>Number of top data entries to query. The maximum value is 1000. If not specified, the default value is 10, indicating that the top 10 data entries are queried.</p>
     * @param array $Filters Filter conditions. The maximum number of values in `Filters.Value` is 20. The detailed filter condition keys are as follows:<ul><li>`domain`: filters by subdomain name. Example value: `www.example.com`.</li><li>`function-name`: filters by Edge Function name. Example value: `test051301-zone-2r2fdoxxxx-130000000`.</li><li>`function-result`: filters by Edge Function execution result. Valid values for the corresponding `Value`:<ul><li>`success`: success.</li><li>`fail`: failure.</li></ul></li></ul>
     * @param string $Interval Query time granularity. Valid values:<ul><li>`min`: 1 minute.</li><li>`5min`: 5 minutes.</li><li>`hour`: 1 hour.</li><li>`day`: 1 day.</li></ul>If this parameter is not specified, the granularity is automatically inferred based on the interval between the start time and the end time. The specific rules are as follows: within 2 hours, the granularity is `min`; within 2 days, the granularity is `5min`; within 7 days, the granularity is `hour`; longer than 7 days, the granularity is `day`.
     * @param string $Area The region the data belongs to. Valid values:<ul><li>`overseas`: data from the global area (excluding the Chinese mainland).</li><li>`mainland`: data from the Chinese mainland.</li><li>`global`: global data.</li></ul>If this parameter is not specified, the default value is `global`.
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
