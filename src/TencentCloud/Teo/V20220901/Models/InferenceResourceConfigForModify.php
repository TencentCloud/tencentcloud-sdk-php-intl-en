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
 * Parameter modification for inference service resource configuration.
 *
 * @method string getScalingMode() Obtain <p>Scaling method. Valid values: <li>Auto: automatically adjust the number of instances based on request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
 * @method void setScalingMode(string $ScalingMode) Set <p>Scaling method. Valid values: <li>Auto: automatically adjust the number of instances based on request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
 * @method InferenceAutoScalingConfig getAutoScalingConfig() Obtain <p>Automatic scaling configuration for the inference service. Required when ScalingMode is Auto.</p>
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) Set <p>Automatic scaling configuration for the inference service. Required when ScalingMode is Auto.</p>
 * @method InferenceManualInstanceConfig getManualInstanceConfig() Obtain <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) Set <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
 * @method integer getConcurrency() Obtain <p>Concurrency of a single instance. Default value: 1.</p>
 * @method void setConcurrency(integer $Concurrency) Set <p>Concurrency of a single instance. Default value: 1.</p>
 * @method InferenceHardwareConfigForModify getHardwareConfig() Obtain <p>Hardware resource configuration of the inference service.</p>
 * @method void setHardwareConfig(InferenceHardwareConfigForModify $HardwareConfig) Set <p>Hardware resource configuration of the inference service.</p>
 */
class InferenceResourceConfigForModify extends AbstractModel
{
    /**
     * @var string <p>Scaling method. Valid values: <li>Auto: automatically adjust the number of instances based on request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
     */
    public $ScalingMode;

    /**
     * @var InferenceAutoScalingConfig <p>Automatic scaling configuration for the inference service. Required when ScalingMode is Auto.</p>
     */
    public $AutoScalingConfig;

    /**
     * @var InferenceManualInstanceConfig <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
     */
    public $ManualInstanceConfig;

    /**
     * @var integer <p>Concurrency of a single instance. Default value: 1.</p>
     */
    public $Concurrency;

    /**
     * @var InferenceHardwareConfigForModify <p>Hardware resource configuration of the inference service.</p>
     */
    public $HardwareConfig;

    /**
     * @param string $ScalingMode <p>Scaling method. Valid values: <li>Auto: automatically adjust the number of instances based on request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
     * @param InferenceAutoScalingConfig $AutoScalingConfig <p>Automatic scaling configuration for the inference service. Required when ScalingMode is Auto.</p>
     * @param InferenceManualInstanceConfig $ManualInstanceConfig <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
     * @param integer $Concurrency <p>Concurrency of a single instance. Default value: 1.</p>
     * @param InferenceHardwareConfigForModify $HardwareConfig <p>Hardware resource configuration of the inference service.</p>
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
        if (array_key_exists("ScalingMode",$param) and $param["ScalingMode"] !== null) {
            $this->ScalingMode = $param["ScalingMode"];
        }

        if (array_key_exists("AutoScalingConfig",$param) and $param["AutoScalingConfig"] !== null) {
            $this->AutoScalingConfig = new InferenceAutoScalingConfig();
            $this->AutoScalingConfig->deserialize($param["AutoScalingConfig"]);
        }

        if (array_key_exists("ManualInstanceConfig",$param) and $param["ManualInstanceConfig"] !== null) {
            $this->ManualInstanceConfig = new InferenceManualInstanceConfig();
            $this->ManualInstanceConfig->deserialize($param["ManualInstanceConfig"]);
        }

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("HardwareConfig",$param) and $param["HardwareConfig"] !== null) {
            $this->HardwareConfig = new InferenceHardwareConfigForModify();
            $this->HardwareConfig->deserialize($param["HardwareConfig"]);
        }
    }
}
