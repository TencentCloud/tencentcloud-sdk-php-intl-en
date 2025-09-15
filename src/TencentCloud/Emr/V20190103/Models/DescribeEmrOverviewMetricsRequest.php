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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrOverviewMetrics request structure.
 *
 * @method integer getEnd() Obtain End time
 * @method void setEnd(integer $End) Set End time
 * @method string getMetric() Obtain Metric name. NODE.CPU: average CPU utilization and core count of the node; NODE.CPU.SLHBASE: average CPU utilization and core count of the Serverless instance; HDFS.NN.CAPACITY: storage utilization and total amount.
 * @method void setMetric(string $Metric) Set Metric name. NODE.CPU: average CPU utilization and core count of the node; NODE.CPU.SLHBASE: average CPU utilization and core count of the Serverless instance; HDFS.NN.CAPACITY: storage utilization and total amount.
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method string getDownsample() Obtain Granularity, for example, 30s-max, 1m-max, and 1h-max.
 * @method void setDownsample(string $Downsample) Set Granularity, for example, 30s-max, 1m-max, and 1h-max.
 * @method integer getStart() Obtain Start time, not required for pie charts
 * @method void setStart(integer $Start) Set Start time, not required for pie charts
 * @method string getAggregator() Obtain Aggregation method, for future use
 * @method void setAggregator(string $Aggregator) Set Aggregation method, for future use
 * @method string getTags() Obtain Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
 * @method void setTags(string $Tags) Set Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
 */
class DescribeEmrOverviewMetricsRequest extends AbstractModel
{
    /**
     * @var integer End time
     */
    public $End;

    /**
     * @var string Metric name. NODE.CPU: average CPU utilization and core count of the node; NODE.CPU.SLHBASE: average CPU utilization and core count of the Serverless instance; HDFS.NN.CAPACITY: storage utilization and total amount.
     */
    public $Metric;

    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Granularity, for example, 30s-max, 1m-max, and 1h-max.
     */
    public $Downsample;

    /**
     * @var integer Start time, not required for pie charts
     */
    public $Start;

    /**
     * @var string Aggregation method, for future use
     */
    public $Aggregator;

    /**
     * @var string Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
     */
    public $Tags;

    /**
     * @param integer $End End time
     * @param string $Metric Metric name. NODE.CPU: average CPU utilization and core count of the node; NODE.CPU.SLHBASE: average CPU utilization and core count of the Serverless instance; HDFS.NN.CAPACITY: storage utilization and total amount.
     * @param string $InstanceId Cluster ID.
     * @param string $Downsample Granularity, for example, 30s-max, 1m-max, and 1h-max.
     * @param integer $Start Start time, not required for pie charts
     * @param string $Aggregator Aggregation method, for future use
     * @param string $Tags Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
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
        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Downsample",$param) and $param["Downsample"] !== null) {
            $this->Downsample = $param["Downsample"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("Aggregator",$param) and $param["Aggregator"] !== null) {
            $this->Aggregator = $param["Aggregator"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
