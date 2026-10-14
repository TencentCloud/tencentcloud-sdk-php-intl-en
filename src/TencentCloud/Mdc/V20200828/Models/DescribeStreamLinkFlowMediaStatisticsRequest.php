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
 * DescribeStreamLinkFlowMediaStatistics request structure.
 *
 * @method string getFlowId() Obtain Transport stream ID.
 * @method void setFlowId(string $FlowId) Set Transport stream ID.
 * @method string getType() Obtain Input or output type. Valid values: `input`, `output`.
 * @method void setType(string $Type) Set Input or output type. Valid values: `input`, `output`.
 * @method string getInputOutputId() Obtain Input or output Id.
 * @method void setInputOutputId(string $InputOutputId) Set Input or output Id.
 * @method string getPipeline() Obtain Primary or backup channel. Valid values: 0 and 1.
 * @method void setPipeline(string $Pipeline) Set Primary or backup channel. Valid values: 0 and 1.
 * @method string getPeriod() Obtain Query interval. Options: [5s|1min|5min|15min].
 * @method void setPeriod(string $Period) Set Query interval. Options: [5s|1min|5min|15min].
 * @method string getStartTime() Obtain Start time for statistics. Default value: last hour. You can query data from the last 7 days at most.
UTC time, for example, '2020-01-01T12:00:00Z'.
 * @method void setStartTime(string $StartTime) Set Start time for statistics. Default value: last hour. You can query data from the last 7 days at most.
UTC time, for example, '2020-01-01T12:00:00Z'.
 * @method string getEndTime() Obtain End time for statistics. Defaults to one hour after `StartTime`. You can query the data of up to 24 hours.
UTC time, for example, '2020-01-01T12:00:00Z'.
 * @method void setEndTime(string $EndTime) Set End time for statistics. Defaults to one hour after `StartTime`. You can query the data of up to 24 hours.
UTC time, for example, '2020-01-01T12:00:00Z'.
 * @method string getRemoteIp() Obtain Peer IP address.
 * @method void setRemoteIp(string $RemoteIp) Set Peer IP address.
 */
class DescribeStreamLinkFlowMediaStatisticsRequest extends AbstractModel
{
    /**
     * @var string Transport stream ID.
     */
    public $FlowId;

    /**
     * @var string Input or output type. Valid values: `input`, `output`.
     */
    public $Type;

    /**
     * @var string Input or output Id.
     */
    public $InputOutputId;

    /**
     * @var string Primary or backup channel. Valid values: 0 and 1.
     */
    public $Pipeline;

    /**
     * @var string Query interval. Options: [5s|1min|5min|15min].
     */
    public $Period;

    /**
     * @var string Start time for statistics. Default value: last hour. You can query data from the last 7 days at most.
UTC time, for example, '2020-01-01T12:00:00Z'.
     */
    public $StartTime;

    /**
     * @var string End time for statistics. Defaults to one hour after `StartTime`. You can query the data of up to 24 hours.
UTC time, for example, '2020-01-01T12:00:00Z'.
     */
    public $EndTime;

    /**
     * @var string Peer IP address.
     */
    public $RemoteIp;

    /**
     * @param string $FlowId Transport stream ID.
     * @param string $Type Input or output type. Valid values: `input`, `output`.
     * @param string $InputOutputId Input or output Id.
     * @param string $Pipeline Primary or backup channel. Valid values: 0 and 1.
     * @param string $Period Query interval. Options: [5s|1min|5min|15min].
     * @param string $StartTime Start time for statistics. Default value: last hour. You can query data from the last 7 days at most.
UTC time, for example, '2020-01-01T12:00:00Z'.
     * @param string $EndTime End time for statistics. Defaults to one hour after `StartTime`. You can query the data of up to 24 hours.
UTC time, for example, '2020-01-01T12:00:00Z'.
     * @param string $RemoteIp Peer IP address.
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RemoteIp",$param) and $param["RemoteIp"] !== null) {
            $this->RemoteIp = $param["RemoteIp"];
        }
    }
}
