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
 * DescribeProxyGroupStatistics request structure.
 *
 * @method string getGroupId() Obtain Connection group ID
 * @method void setGroupId(string $GroupId) Set Connection group ID
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method array getMetricNames() Obtain Statistical metric name list. Values: InBandwidth (inbound bandwidth); OutBandwidth (outbound bandwidth); Concurrent (concurrence); InPackets (inbound packets); OutPackets (outbound packets).
 * @method void setMetricNames(array $MetricNames) Set Statistical metric name list. Values: InBandwidth (inbound bandwidth); OutBandwidth (outbound bandwidth); Concurrent (concurrence); InPackets (inbound packets); OutPackets (outbound packets).
 * @method integer getGranularity() Obtain Monitoring granularity (in seconds). Valid values: 60s, 300s, 3,600s, 86,400s.
Time range: ≤ 1 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 days. Supported minimum granularity: 3,600 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 86,400 seconds;
 * @method void setGranularity(integer $Granularity) Set Monitoring granularity (in seconds). Valid values: 60s, 300s, 3,600s, 86,400s.
Time range: ≤ 1 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 days. Supported minimum granularity: 3,600 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 86,400 seconds;
 */
class DescribeProxyGroupStatisticsRequest extends AbstractModel
{
    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Statistical metric name list. Values: InBandwidth (inbound bandwidth); OutBandwidth (outbound bandwidth); Concurrent (concurrence); InPackets (inbound packets); OutPackets (outbound packets).
     */
    public $MetricNames;

    /**
     * @var integer Monitoring granularity (in seconds). Valid values: 60s, 300s, 3,600s, 86,400s.
Time range: ≤ 1 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 days. Supported minimum granularity: 3,600 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 86,400 seconds;
     */
    public $Granularity;

    /**
     * @param string $GroupId Connection group ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param array $MetricNames Statistical metric name list. Values: InBandwidth (inbound bandwidth); OutBandwidth (outbound bandwidth); Concurrent (concurrence); InPackets (inbound packets); OutPackets (outbound packets).
     * @param integer $Granularity Monitoring granularity (in seconds). Valid values: 60s, 300s, 3,600s, 86,400s.
Time range: ≤ 1 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 days. Supported minimum granularity: 3,600 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 86,400 seconds;
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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
