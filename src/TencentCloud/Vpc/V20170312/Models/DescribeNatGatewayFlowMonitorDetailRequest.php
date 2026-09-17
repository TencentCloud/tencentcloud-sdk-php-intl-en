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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatGatewayFlowMonitorDetail request structure.
 *
 * @method string getTimePoint() Obtain Point in time. It indicates the moment to query. When the aggregation granularity is 60 or 300, the system queries the aggregation cycle starting from the latest whole minute. When the aggregation granularity is 3600, the system queries the aggregation cycle starting from the latest hour. When the aggregation granularity is 86400, the system queries the aggregation cycle starting from the latest whole day. Example: `2019-03-24T10:51:23+08:00`.
 * @method void setTimePoint(string $TimePoint) Set Point in time. It indicates the moment to query. When the aggregation granularity is 60 or 300, the system queries the aggregation cycle starting from the latest whole minute. When the aggregation granularity is 3600, the system queries the aggregation cycle starting from the latest hour. When the aggregation granularity is 86400, the system queries the aggregation cycle starting from the latest whole day. Example: `2019-03-24T10:51:23+08:00`.
 * @method string getNatGatewayId() Obtain NAT gateway ID, for example: `nat-ig8xpno8`.
 * @method void setNatGatewayId(string $NatGatewayId) Set NAT gateway ID, for example: `nat-ig8xpno8`.
 * @method integer getTopN() Obtain Displays top-ranked data. Default value: 10, indicating that the top 10 ranked data is displayed by default. Maximum value: 100.
 * @method void setTopN(integer $TopN) Set Displays top-ranked data. Default value: 10, indicating that the top 10 ranked data is displayed by default. Maximum value: 100.
 * @method string getOrderField() Obtain Sorting field. Valid values: `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`. Standard NAT gateways additionally support `ConcurrentConnectionCount` and `NewConnectionRate`. Default value: `OutTraffic`.
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values: `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`. Standard NAT gateways additionally support `ConcurrentConnectionCount` and `NewConnectionRate`. Default value: `OutTraffic`.
 * @method integer getAggregationTimeRange() Obtain Aggregation time granularity. Valid values: 60, 300, 3600, and 86400, corresponding to aggregation queries by 1 minute, 5 minutes, 1 hour, and 1 day.
 * @method void setAggregationTimeRange(integer $AggregationTimeRange) Set Aggregation time granularity. Valid values: 60, 300, 3600, and 86400, corresponding to aggregation queries by 1 minute, 5 minutes, 1 hour, and 1 day.
 * @method boolean getAllMetricMode() Obtain Specifies whether to query all metrics. Default value: True, which indicates that all metrics are queried.
 * @method void setAllMetricMode(boolean $AllMetricMode) Set Specifies whether to query all metrics. Default value: True, which indicates that all metrics are queried.
 */
class DescribeNatGatewayFlowMonitorDetailRequest extends AbstractModel
{
    /**
     * @var string Point in time. It indicates the moment to query. When the aggregation granularity is 60 or 300, the system queries the aggregation cycle starting from the latest whole minute. When the aggregation granularity is 3600, the system queries the aggregation cycle starting from the latest hour. When the aggregation granularity is 86400, the system queries the aggregation cycle starting from the latest whole day. Example: `2019-03-24T10:51:23+08:00`.
     */
    public $TimePoint;

    /**
     * @var string NAT gateway ID, for example: `nat-ig8xpno8`.
     */
    public $NatGatewayId;

    /**
     * @var integer Displays top-ranked data. Default value: 10, indicating that the top 10 ranked data is displayed by default. Maximum value: 100.
     */
    public $TopN;

    /**
     * @var string Sorting field. Valid values: `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`. Standard NAT gateways additionally support `ConcurrentConnectionCount` and `NewConnectionRate`. Default value: `OutTraffic`.
     */
    public $OrderField;

    /**
     * @var integer Aggregation time granularity. Valid values: 60, 300, 3600, and 86400, corresponding to aggregation queries by 1 minute, 5 minutes, 1 hour, and 1 day.
     */
    public $AggregationTimeRange;

    /**
     * @var boolean Specifies whether to query all metrics. Default value: True, which indicates that all metrics are queried.
     */
    public $AllMetricMode;

    /**
     * @param string $TimePoint Point in time. It indicates the moment to query. When the aggregation granularity is 60 or 300, the system queries the aggregation cycle starting from the latest whole minute. When the aggregation granularity is 3600, the system queries the aggregation cycle starting from the latest hour. When the aggregation granularity is 86400, the system queries the aggregation cycle starting from the latest whole day. Example: `2019-03-24T10:51:23+08:00`.
     * @param string $NatGatewayId NAT gateway ID, for example: `nat-ig8xpno8`.
     * @param integer $TopN Displays top-ranked data. Default value: 10, indicating that the top 10 ranked data is displayed by default. Maximum value: 100.
     * @param string $OrderField Sorting field. Valid values: `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`. Standard NAT gateways additionally support `ConcurrentConnectionCount` and `NewConnectionRate`. Default value: `OutTraffic`.
     * @param integer $AggregationTimeRange Aggregation time granularity. Valid values: 60, 300, 3600, and 86400, corresponding to aggregation queries by 1 minute, 5 minutes, 1 hour, and 1 day.
     * @param boolean $AllMetricMode Specifies whether to query all metrics. Default value: True, which indicates that all metrics are queried.
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
        if (array_key_exists("TimePoint",$param) and $param["TimePoint"] !== null) {
            $this->TimePoint = $param["TimePoint"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("AggregationTimeRange",$param) and $param["AggregationTimeRange"] !== null) {
            $this->AggregationTimeRange = $param["AggregationTimeRange"];
        }

        if (array_key_exists("AllMetricMode",$param) and $param["AllMetricMode"] !== null) {
            $this->AllMetricMode = $param["AllMetricMode"];
        }
    }
}
