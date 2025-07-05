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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowSRTStatistics request structure.
 *
 * @method string getFlowId() Obtain The flow ID.
 * @method void setFlowId(string $FlowId) Set The flow ID.
 * @method string getType() Obtain Whether to query the inputs or outputs. Valid values: input, output.
 * @method void setType(string $Type) Set Whether to query the inputs or outputs. Valid values: input, output.
 * @method string getInputOutputId() Obtain The input or output ID.
 * @method void setInputOutputId(string $InputOutputId) Set The input or output ID.
 * @method string getPipeline() Obtain Whether to query the primary or backup pipeline. Valid values: 0, 1.
 * @method void setPipeline(string $Pipeline) Set Whether to query the primary or backup pipeline. Valid values: 0, 1.
 * @method string getStartTime() Obtain The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method void setStartTime(string $StartTime) Set The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method string getEndTime() Obtain The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method void setEndTime(string $EndTime) Set The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method string getPeriod() Obtain The query interval. Valid values: 5s, 1min, 5min, 15min.
 * @method void setPeriod(string $Period) Set The query interval. Valid values: 5s, 1min, 5min, 15min.
 */
class DescribeStreamLinkFlowSRTStatisticsRequest extends AbstractModel
{
    /**
     * @var string The flow ID.
     */
    public $FlowId;

    /**
     * @var string Whether to query the inputs or outputs. Valid values: input, output.
     */
    public $Type;

    /**
     * @var string The input or output ID.
     */
    public $InputOutputId;

    /**
     * @var string Whether to query the primary or backup pipeline. Valid values: 0, 1.
     */
    public $Pipeline;

    /**
     * @var string The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     */
    public $StartTime;

    /**
     * @var string The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     */
    public $EndTime;

    /**
     * @var string The query interval. Valid values: 5s, 1min, 5min, 15min.
     */
    public $Period;

    /**
     * @param string $FlowId The flow ID.
     * @param string $Type Whether to query the inputs or outputs. Valid values: input, output.
     * @param string $InputOutputId The input or output ID.
     * @param string $Pipeline Whether to query the primary or backup pipeline. Valid values: 0, 1.
     * @param string $StartTime The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     * @param string $EndTime The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     * @param string $Period The query interval. Valid values: 5s, 1min, 5min, 15min.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputOutputId",$param) and $param["InputOutputId"] !== null) {
            $this->InputOutputId = $param["InputOutputId"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
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
    }
}
