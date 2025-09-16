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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPA description.
 *
 * @method integer getMinReplicas() Obtain Minimum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinReplicas(integer $MinReplicas) Set Minimum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxReplicas() Obtain Maximum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHpaMetrics() Obtain Supported."gpu-util": GPU utilization; value range: 10-100. "cpu-util": CPU utilization; value range: 10-100. "memory-util": memory utilization; value range: 10-100. "service-qps": the QPS value of single instances; value range: 1-5000."concurrency-util": the number of concurrent requests of single instances. Value range: 1-100000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHpaMetrics(array $HpaMetrics) Set Supported."gpu-util": GPU utilization; value range: 10-100. "cpu-util": CPU utilization; value range: 10-100. "memory-util": memory utilization; value range: 10-100. "service-qps": the QPS value of single instances; value range: 1-5000."concurrency-util": the number of concurrent requests of single instances. Value range: 1-100000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScaleUpStabilizationWindowSeconds() Obtain Scale-out cooldown period, in seconds.
 * @method void setScaleUpStabilizationWindowSeconds(integer $ScaleUpStabilizationWindowSeconds) Set Scale-out cooldown period, in seconds.
 * @method integer getScaleDownStabilizationWindowSeconds() Obtain Scale-in cooldown period, in seconds.
 * @method void setScaleDownStabilizationWindowSeconds(integer $ScaleDownStabilizationWindowSeconds) Set Scale-in cooldown period, in seconds.
 */
class HorizontalPodAutoscaler extends AbstractModel
{
    /**
     * @var integer Minimum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinReplicas;

    /**
     * @var integer Maximum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxReplicas;

    /**
     * @var array Supported."gpu-util": GPU utilization; value range: 10-100. "cpu-util": CPU utilization; value range: 10-100. "memory-util": memory utilization; value range: 10-100. "service-qps": the QPS value of single instances; value range: 1-5000."concurrency-util": the number of concurrent requests of single instances. Value range: 1-100000.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HpaMetrics;

    /**
     * @var integer Scale-out cooldown period, in seconds.
     */
    public $ScaleUpStabilizationWindowSeconds;

    /**
     * @var integer Scale-in cooldown period, in seconds.
     */
    public $ScaleDownStabilizationWindowSeconds;

    /**
     * @param integer $MinReplicas Minimum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxReplicas Maximum number of instances.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HpaMetrics Supported."gpu-util": GPU utilization; value range: 10-100. "cpu-util": CPU utilization; value range: 10-100. "memory-util": memory utilization; value range: 10-100. "service-qps": the QPS value of single instances; value range: 1-5000."concurrency-util": the number of concurrent requests of single instances. Value range: 1-100000.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScaleUpStabilizationWindowSeconds Scale-out cooldown period, in seconds.
     * @param integer $ScaleDownStabilizationWindowSeconds Scale-in cooldown period, in seconds.
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("HpaMetrics",$param) and $param["HpaMetrics"] !== null) {
            $this->HpaMetrics = [];
            foreach ($param["HpaMetrics"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->HpaMetrics, $obj);
            }
        }

        if (array_key_exists("ScaleUpStabilizationWindowSeconds",$param) and $param["ScaleUpStabilizationWindowSeconds"] !== null) {
            $this->ScaleUpStabilizationWindowSeconds = $param["ScaleUpStabilizationWindowSeconds"];
        }

        if (array_key_exists("ScaleDownStabilizationWindowSeconds",$param) and $param["ScaleDownStabilizationWindowSeconds"] !== null) {
            $this->ScaleDownStabilizationWindowSeconds = $param["ScaleDownStabilizationWindowSeconds"];
        }
    }
}
