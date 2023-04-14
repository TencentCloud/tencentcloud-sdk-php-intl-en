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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarming metric of AS
 *
 * @method string getComparisonOperator() Obtain Comparison operator. Value range: <br><li>GREATER_THAN: greater than </li><li>GREATER_THAN_OR_EQUAL_TO: greater than or equal to </li><li>LESS_THAN: less than </li><li> LESS_THAN_OR_EQUAL_TO: less than or equal to </li><li> EQUAL_TO: equal to </li> <li>NOT_EQUAL_TO: not equal to </li>
 * @method void setComparisonOperator(string $ComparisonOperator) Set Comparison operator. Value range: <br><li>GREATER_THAN: greater than </li><li>GREATER_THAN_OR_EQUAL_TO: greater than or equal to </li><li>LESS_THAN: less than </li><li> LESS_THAN_OR_EQUAL_TO: less than or equal to </li><li> EQUAL_TO: equal to </li> <li>NOT_EQUAL_TO: not equal to </li>
 * @method string getMetricName() Obtain Metric name. Value range: <br><li>CPU_UTILIZATION: CPU utilization </li><li>MEM_UTILIZATION: memory utilization </li><li>LAN_TRAFFIC_OUT: private network outbound bandwidth </li><li>LAN_TRAFFIC_IN: private network inbound bandwidth </li><li>WAN_TRAFFIC_OUT: public network outbound bandwidth </li><li>WAN_TRAFFIC_IN: public network inbound bandwidth </li>
 * @method void setMetricName(string $MetricName) Set Metric name. Value range: <br><li>CPU_UTILIZATION: CPU utilization </li><li>MEM_UTILIZATION: memory utilization </li><li>LAN_TRAFFIC_OUT: private network outbound bandwidth </li><li>LAN_TRAFFIC_IN: private network inbound bandwidth </li><li>WAN_TRAFFIC_OUT: public network outbound bandwidth </li><li>WAN_TRAFFIC_IN: public network inbound bandwidth </li>
 * @method integer getThreshold() Obtain Alarming threshold: <br><li>CPU_UTILIZATION: [1, 100] in % </li><li>MEM_UTILIZATION: [1, 100] in % </li><li>LAN_TRAFFIC_OUT: >0 in Mbps </li><li>LAN_TRAFFIC_IN: >0 in Mbps </li><li>WAN_TRAFFIC_OUT: >0 in Mbps </li><li>WAN_TRAFFIC_IN: >0 in Mbps </li>
 * @method void setThreshold(integer $Threshold) Set Alarming threshold: <br><li>CPU_UTILIZATION: [1, 100] in % </li><li>MEM_UTILIZATION: [1, 100] in % </li><li>LAN_TRAFFIC_OUT: >0 in Mbps </li><li>LAN_TRAFFIC_IN: >0 in Mbps </li><li>WAN_TRAFFIC_OUT: >0 in Mbps </li><li>WAN_TRAFFIC_IN: >0 in Mbps </li>
 * @method integer getPeriod() Obtain Time period in seconds. Enumerated values: 60, 300.
 * @method void setPeriod(integer $Period) Set Time period in seconds. Enumerated values: 60, 300.
 * @method integer getContinuousTime() Obtain Number of repetitions. Value range: [1, 10]
 * @method void setContinuousTime(integer $ContinuousTime) Set Number of repetitions. Value range: [1, 10]
 * @method string getStatistic() Obtain Statistics type. Value range: <br><li>AVERAGE: average </li><li>MAXIMUM: maximum <li>MINIMUM: minimum </li><br> Default value: AVERAGE
 * @method void setStatistic(string $Statistic) Set Statistics type. Value range: <br><li>AVERAGE: average </li><li>MAXIMUM: maximum <li>MINIMUM: minimum </li><br> Default value: AVERAGE
 * @method float getPreciseThreshold() Obtain Exact alarming threshold. This parameter is only used in API outputs. Values: <br><li>`CPU_UTILIZATION` (in %): (0, 100]</li><li>`MEM_UTILIZATION` (in %): (0, 100]</li><li>`LAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`LAN_TRAFFIC_IN` (in Mbps): > 0</li><li>`WAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`WAN_TRAFFIC_IN` (in Mbps): > 0</li>
 * @method void setPreciseThreshold(float $PreciseThreshold) Set Exact alarming threshold. This parameter is only used in API outputs. Values: <br><li>`CPU_UTILIZATION` (in %): (0, 100]</li><li>`MEM_UTILIZATION` (in %): (0, 100]</li><li>`LAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`LAN_TRAFFIC_IN` (in Mbps): > 0</li><li>`WAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`WAN_TRAFFIC_IN` (in Mbps): > 0</li>
 */
class MetricAlarm extends AbstractModel
{
    /**
     * @var string Comparison operator. Value range: <br><li>GREATER_THAN: greater than </li><li>GREATER_THAN_OR_EQUAL_TO: greater than or equal to </li><li>LESS_THAN: less than </li><li> LESS_THAN_OR_EQUAL_TO: less than or equal to </li><li> EQUAL_TO: equal to </li> <li>NOT_EQUAL_TO: not equal to </li>
     */
    public $ComparisonOperator;

    /**
     * @var string Metric name. Value range: <br><li>CPU_UTILIZATION: CPU utilization </li><li>MEM_UTILIZATION: memory utilization </li><li>LAN_TRAFFIC_OUT: private network outbound bandwidth </li><li>LAN_TRAFFIC_IN: private network inbound bandwidth </li><li>WAN_TRAFFIC_OUT: public network outbound bandwidth </li><li>WAN_TRAFFIC_IN: public network inbound bandwidth </li>
     */
    public $MetricName;

    /**
     * @var integer Alarming threshold: <br><li>CPU_UTILIZATION: [1, 100] in % </li><li>MEM_UTILIZATION: [1, 100] in % </li><li>LAN_TRAFFIC_OUT: >0 in Mbps </li><li>LAN_TRAFFIC_IN: >0 in Mbps </li><li>WAN_TRAFFIC_OUT: >0 in Mbps </li><li>WAN_TRAFFIC_IN: >0 in Mbps </li>
     */
    public $Threshold;

    /**
     * @var integer Time period in seconds. Enumerated values: 60, 300.
     */
    public $Period;

    /**
     * @var integer Number of repetitions. Value range: [1, 10]
     */
    public $ContinuousTime;

    /**
     * @var string Statistics type. Value range: <br><li>AVERAGE: average </li><li>MAXIMUM: maximum <li>MINIMUM: minimum </li><br> Default value: AVERAGE
     */
    public $Statistic;

    /**
     * @var float Exact alarming threshold. This parameter is only used in API outputs. Values: <br><li>`CPU_UTILIZATION` (in %): (0, 100]</li><li>`MEM_UTILIZATION` (in %): (0, 100]</li><li>`LAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`LAN_TRAFFIC_IN` (in Mbps): > 0</li><li>`WAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`WAN_TRAFFIC_IN` (in Mbps): > 0</li>
     */
    public $PreciseThreshold;

    /**
     * @param string $ComparisonOperator Comparison operator. Value range: <br><li>GREATER_THAN: greater than </li><li>GREATER_THAN_OR_EQUAL_TO: greater than or equal to </li><li>LESS_THAN: less than </li><li> LESS_THAN_OR_EQUAL_TO: less than or equal to </li><li> EQUAL_TO: equal to </li> <li>NOT_EQUAL_TO: not equal to </li>
     * @param string $MetricName Metric name. Value range: <br><li>CPU_UTILIZATION: CPU utilization </li><li>MEM_UTILIZATION: memory utilization </li><li>LAN_TRAFFIC_OUT: private network outbound bandwidth </li><li>LAN_TRAFFIC_IN: private network inbound bandwidth </li><li>WAN_TRAFFIC_OUT: public network outbound bandwidth </li><li>WAN_TRAFFIC_IN: public network inbound bandwidth </li>
     * @param integer $Threshold Alarming threshold: <br><li>CPU_UTILIZATION: [1, 100] in % </li><li>MEM_UTILIZATION: [1, 100] in % </li><li>LAN_TRAFFIC_OUT: >0 in Mbps </li><li>LAN_TRAFFIC_IN: >0 in Mbps </li><li>WAN_TRAFFIC_OUT: >0 in Mbps </li><li>WAN_TRAFFIC_IN: >0 in Mbps </li>
     * @param integer $Period Time period in seconds. Enumerated values: 60, 300.
     * @param integer $ContinuousTime Number of repetitions. Value range: [1, 10]
     * @param string $Statistic Statistics type. Value range: <br><li>AVERAGE: average </li><li>MAXIMUM: maximum <li>MINIMUM: minimum </li><br> Default value: AVERAGE
     * @param float $PreciseThreshold Exact alarming threshold. This parameter is only used in API outputs. Values: <br><li>`CPU_UTILIZATION` (in %): (0, 100]</li><li>`MEM_UTILIZATION` (in %): (0, 100]</li><li>`LAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`LAN_TRAFFIC_IN` (in Mbps): > 0</li><li>`WAN_TRAFFIC_OUT` (in Mbps): > 0</li><li>`WAN_TRAFFIC_IN` (in Mbps): > 0</li>
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
        if (array_key_exists("ComparisonOperator",$param) and $param["ComparisonOperator"] !== null) {
            $this->ComparisonOperator = $param["ComparisonOperator"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ContinuousTime",$param) and $param["ContinuousTime"] !== null) {
            $this->ContinuousTime = $param["ContinuousTime"];
        }

        if (array_key_exists("Statistic",$param) and $param["Statistic"] !== null) {
            $this->Statistic = $param["Statistic"];
        }

        if (array_key_exists("PreciseThreshold",$param) and $param["PreciseThreshold"] !== null) {
            $this->PreciseThreshold = $param["PreciseThreshold"];
        }
    }
}
