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
 * @method integer getEnd() Obtain End time.
 * @method void setEnd(integer $End) Set End time.
 * @method string getMetric() Obtain Metric name. Valid values: NODE.CPU (average CPU utilization and number of cores of the node), NODE.CPU.SLHBASE (average CPU utilization and total number of CPU cores of the Serverless instance), and HDFS.NN.CAPACITY (storage capacity utilization and total capacity).
 * @method void setMetric(string $Metric) Set Metric name. Valid values: NODE.CPU (average CPU utilization and number of cores of the node), NODE.CPU.SLHBASE (average CPU utilization and total number of CPU cores of the Serverless instance), and HDFS.NN.CAPACITY (storage capacity utilization and total capacity).
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method string getDownsample() Obtain Granularity, for example, 30s-max, 1m-max, and 1h-max.
 * @method void setDownsample(string $Downsample) Set Granularity, for example, 30s-max, 1m-max, and 1h-max.
 * @method integer getStart() Obtain Start time, which is not required for pie charts.
 * @method void setStart(integer $Start) Set Start time, which is not required for pie charts.
 * @method string getAggregator() Obtain Aggregation method, which is reserved for scale-out purposes. Currently, this parameter does not need to be passed.
 * @method void setAggregator(string $Aggregator) Set Aggregation method, which is reserved for scale-out purposes. Currently, this parameter does not need to be passed.
 * @method string getTags() Obtain Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
 * @method void setTags(string $Tags) Set Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
 */
class DescribeEmrOverviewMetricsRequest extends AbstractModel
{
    /**
     * @var integer End time.
     */
    public $End;

    /**
     * @var string Metric name. Valid values: NODE.CPU (average CPU utilization and number of cores of the node), NODE.CPU.SLHBASE (average CPU utilization and total number of CPU cores of the Serverless instance), and HDFS.NN.CAPACITY (storage capacity utilization and total capacity).
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
     * @var integer Start time, which is not required for pie charts.
     */
    public $Start;

    /**
     * @var string Aggregation method, which is reserved for scale-out purposes. Currently, this parameter does not need to be passed.
     */
    public $Aggregator;

    /**
     * @var string Specific type of metrics to be queried, for example, "{"type":"CapacityTotal|CapacityRemaining"}".
     */
    public $Tags;

    /**
     * @param integer $End End time.
     * @param string $Metric Metric name. Valid values: NODE.CPU (average CPU utilization and number of cores of the node), NODE.CPU.SLHBASE (average CPU utilization and total number of CPU cores of the Serverless instance), and HDFS.NN.CAPACITY (storage capacity utilization and total capacity).
     * @param string $InstanceId Cluster ID.
     * @param string $Downsample Granularity, for example, 30s-max, 1m-max, and 1h-max.
     * @param integer $Start Start time, which is not required for pie charts.
     * @param string $Aggregator Aggregation method, which is reserved for scale-out purposes. Currently, this parameter does not need to be passed.
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
