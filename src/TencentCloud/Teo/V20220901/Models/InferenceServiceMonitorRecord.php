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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reasoning service monitoring data records.
 *
 * @method string getServiceId() Obtain Inference service ID.
 * @method void setServiceId(string $ServiceId) Set Inference service ID.
 * @method string getMetricName() Obtain Metric name.
 * @method void setMetricName(string $MetricName) Set Metric name.
 * @method array getInferenceServiceMonitorItems() Obtain Detailed reasoning service monitoring data.
 * @method void setInferenceServiceMonitorItems(array $InferenceServiceMonitorItems) Set Detailed reasoning service monitoring data.
 */
class InferenceServiceMonitorRecord extends AbstractModel
{
    /**
     * @var string Inference service ID.
     */
    public $ServiceId;

    /**
     * @var string Metric name.
     */
    public $MetricName;

    /**
     * @var array Detailed reasoning service monitoring data.
     */
    public $InferenceServiceMonitorItems;

    /**
     * @param string $ServiceId Inference service ID.
     * @param string $MetricName Metric name.
     * @param array $InferenceServiceMonitorItems Detailed reasoning service monitoring data.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InferenceServiceMonitorItems",$param) and $param["InferenceServiceMonitorItems"] !== null) {
            $this->InferenceServiceMonitorItems = [];
            foreach ($param["InferenceServiceMonitorItems"] as $key => $value){
                $obj = new InferenceServiceMonitorItem();
                $obj->deserialize($value);
                array_push($this->InferenceServiceMonitorItems, $obj);
            }
        }
    }
}
