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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMetricSubscribePreview request structure.
 *
 * @method string getNamespace() Obtain Cloud product namespace.
 * @method void setNamespace(string $Namespace) Set Cloud product namespace.
 * @method array getMetrics() Obtain Database configuration information.
 * @method void setMetrics(array $Metrics) Set Database configuration information.
 * @method InstanceConfig getInstanceInfo() Obtain Instance configuration.
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) Set Instance configuration.
 */
class DescribeMetricSubscribePreviewRequest extends AbstractModel
{
    /**
     * @var string Cloud product namespace.
     */
    public $Namespace;

    /**
     * @var array Database configuration information.
     */
    public $Metrics;

    /**
     * @var InstanceConfig Instance configuration.
     */
    public $InstanceInfo;

    /**
     * @param string $Namespace Cloud product namespace.
     * @param array $Metrics Database configuration information.
     * @param InstanceConfig $InstanceInfo Instance configuration.
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricConfig();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceConfig();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
