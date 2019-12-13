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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getStartTime() 获取Start time
 * @method void setStartTime(string $StartTime) 设置Start time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 * @method array getMetricNames() 获取Statistical metric name list. It supports: ["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
 * @method void setMetricNames(array $MetricNames) 设置Statistical metric name list. It supports: ["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
 * @method integer getGranularity() 获取Monitoring granularity. It currently supports: 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 1 day, supported minimum granularity: 300 seconds;
Time range: ≤ 7 days, supported minimum granularity: 3,600 seconds;
Time range: ＞7 days, supported minimum granularity: 86,400 seconds;
 * @method void setGranularity(integer $Granularity) 设置Monitoring granularity. It currently supports: 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 1 day, supported minimum granularity: 300 seconds;
Time range: ≤ 7 days, supported minimum granularity: 3,600 seconds;
Time range: ＞7 days, supported minimum granularity: 86,400 seconds;
 */

/**
 *DescribeListenerStatistics request structure.
 */
class DescribeListenerStatisticsRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Statistical metric name list. It supports: ["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
     */
    public $MetricNames;

    /**
     * @var integer Monitoring granularity. It currently supports: 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 1 day, supported minimum granularity: 300 seconds;
Time range: ≤ 7 days, supported minimum granularity: 3,600 seconds;
Time range: ＞7 days, supported minimum granularity: 86,400 seconds;
     */
    public $Granularity;
    /**
     * @param string $ListenerId Listener ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param array $MetricNames Statistical metric name list. It supports: ["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
     * @param integer $Granularity Monitoring granularity. It currently supports: 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 1 day, supported minimum granularity: 300 seconds;
Time range: ≤ 7 days, supported minimum granularity: 3,600 seconds;
Time range: ＞7 days, supported minimum granularity: 86,400 seconds;
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
