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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatisticData request structure.
 *
 * @method string getModule() Obtain Module, whose value is fixed at `monitor`
 * @method void setModule(string $Module) Set Module, whose value is fixed at `monitor`
 * @method string getNamespace() Obtain Namespace. Valid values: `QCE`, `TKE2`.
 * @method void setNamespace(string $Namespace) Set Namespace. Valid values: `QCE`, `TKE2`.
 * @method array getMetricNames() Obtain Metric name list
 * @method void setMetricNames(array $MetricNames) Set Metric name list
 * @method array getConditions() Obtain Dimension condition. The `=` and `in` operators are supported
 * @method void setConditions(array $Conditions) Set Dimension condition. The `=` and `in` operators are supported
 * @method integer getPeriod() Obtain Statistical period in seconds. Default value: 300. Optional values: 60, 300, 3,600, and 86,400.
Due to the storage period limit, the statistical period is subject to the time range of statistics:
60s: The time range is less than 12 hours, and the timespan between `StartTime` and the current time cannot exceed 15 days.
300s: The time range is less than three days, and the timespan between `StartTime` and the current time cannot exceed 31 days.
3,600s: The time range is less than 30 days, and the timespan between `StartTime` and the current time cannot exceed 93 days.
86,400s: The time range is less than 186 days, and the timespan between `StartTime` and the current time cannot exceed 186 days.
 * @method void setPeriod(integer $Period) Set Statistical period in seconds. Default value: 300. Optional values: 60, 300, 3,600, and 86,400.
Due to the storage period limit, the statistical period is subject to the time range of statistics:
60s: The time range is less than 12 hours, and the timespan between `StartTime` and the current time cannot exceed 15 days.
300s: The time range is less than three days, and the timespan between `StartTime` and the current time cannot exceed 31 days.
3,600s: The time range is less than 30 days, and the timespan between `StartTime` and the current time cannot exceed 93 days.
86,400s: The time range is less than 186 days, and the timespan between `StartTime` and the current time cannot exceed 186 days.
 * @method string getStartTime() Obtain Start time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
 * @method void setStartTime(string $StartTime) Set Start time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
 * @method string getEndTime() Obtain End time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
 * @method void setEndTime(string $EndTime) Set End time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
 * @method array getGroupBys() Obtain `groupBy` by the specified dimension
 * @method void setGroupBys(array $GroupBys) Set `groupBy` by the specified dimension
 */
class DescribeStatisticDataRequest extends AbstractModel
{
    /**
     * @var string Module, whose value is fixed at `monitor`
     */
    public $Module;

    /**
     * @var string Namespace. Valid values: `QCE`, `TKE2`.
     */
    public $Namespace;

    /**
     * @var array Metric name list
     */
    public $MetricNames;

    /**
     * @var array Dimension condition. The `=` and `in` operators are supported
     */
    public $Conditions;

    /**
     * @var integer Statistical period in seconds. Default value: 300. Optional values: 60, 300, 3,600, and 86,400.
Due to the storage period limit, the statistical period is subject to the time range of statistics:
60s: The time range is less than 12 hours, and the timespan between `StartTime` and the current time cannot exceed 15 days.
300s: The time range is less than three days, and the timespan between `StartTime` and the current time cannot exceed 31 days.
3,600s: The time range is less than 30 days, and the timespan between `StartTime` and the current time cannot exceed 93 days.
86,400s: The time range is less than 186 days, and the timespan between `StartTime` and the current time cannot exceed 186 days.
     */
    public $Period;

    /**
     * @var string Start time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
     */
    public $StartTime;

    /**
     * @var string End time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
     */
    public $EndTime;

    /**
     * @var array `groupBy` by the specified dimension
     */
    public $GroupBys;

    /**
     * @param string $Module Module, whose value is fixed at `monitor`
     * @param string $Namespace Namespace. Valid values: `QCE`, `TKE2`.
     * @param array $MetricNames Metric name list
     * @param array $Conditions Dimension condition. The `=` and `in` operators are supported
     * @param integer $Period Statistical period in seconds. Default value: 300. Optional values: 60, 300, 3,600, and 86,400.
Due to the storage period limit, the statistical period is subject to the time range of statistics:
60s: The time range is less than 12 hours, and the timespan between `StartTime` and the current time cannot exceed 15 days.
300s: The time range is less than three days, and the timespan between `StartTime` and the current time cannot exceed 31 days.
3,600s: The time range is less than 30 days, and the timespan between `StartTime` and the current time cannot exceed 93 days.
86,400s: The time range is less than 186 days, and the timespan between `StartTime` and the current time cannot exceed 186 days.
     * @param string $StartTime Start time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
     * @param string $EndTime End time, which is the current time by default, such as 2020-12-08T19:51:23+08:00
     * @param array $GroupBys `groupBy` by the specified dimension
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new MidQueryCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GroupBys",$param) and $param["GroupBys"] !== null) {
            $this->GroupBys = $param["GroupBys"];
        }
    }
}
