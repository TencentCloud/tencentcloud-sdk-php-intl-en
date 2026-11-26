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
 * Resource configuration of the inference service.
 *
 * @method string getScalingMode() Obtain <p>Scaling method. Valid values: <li>Auto: automatically adjust instance count according to request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
 * @method void setScalingMode(string $ScalingMode) Set <p>Scaling method. Valid values: <li>Auto: automatically adjust instance count according to request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
 * @method string getHardwareSpec() Obtain <p>Hardware specification flag. Abandoned. For reference, use <code>HardwareSpecId</code>.</p>
 * @method void setHardwareSpec(string $HardwareSpec) Set <p>Hardware specification flag. Abandoned. For reference, use <code>HardwareSpecId</code>.</p>
 * @method string getHardwareSpecId() Obtain <p>Unique identification ID of the hardware specification. You can obtain the supported hardware specifications of the current site through the <code>DescribeInferenceHardwareSpecifications</code> API.</p><p>By default, the system configures the required resources for the inference service according to the hardware specification corresponding to the selected <code>HardwareSpecId</code>. If adjustments are needed, you can customize the hardware resource configuration through <code>HardwareConfig</code>.</p>
 * @method void setHardwareSpecId(string $HardwareSpecId) Set <p>Unique identification ID of the hardware specification. You can obtain the supported hardware specifications of the current site through the <code>DescribeInferenceHardwareSpecifications</code> API.</p><p>By default, the system configures the required resources for the inference service according to the hardware specification corresponding to the selected <code>HardwareSpecId</code>. If adjustments are needed, you can customize the hardware resource configuration through <code>HardwareConfig</code>.</p>
 * @method InferenceHardwareConfig getHardwareConfig() Obtain <p>Hardware configuration for the inference service.</p><p>As an input parameter, if unpadded, hardware resources are configured according to the default value of the selected <code>HardwareSpecId</code> specification; if padded, priority is given to the fill value for configuration.</p>
 * @method void setHardwareConfig(InferenceHardwareConfig $HardwareConfig) Set <p>Hardware configuration for the inference service.</p><p>As an input parameter, if unpadded, hardware resources are configured according to the default value of the selected <code>HardwareSpecId</code> specification; if padded, priority is given to the fill value for configuration.</p>
 * @method InferenceAutoScalingConfig getAutoScalingConfig() Obtain <p>Automatic scaling configuration of the inference service. Required when ScalingMode is Auto.</p>
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) Set <p>Automatic scaling configuration of the inference service. Required when ScalingMode is Auto.</p>
 * @method InferenceManualInstanceConfig getManualInstanceConfig() Obtain <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) Set <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
 * @method integer getConcurrency() Obtain <p>Concurrency of a single instance. Default value: 1.</p>
 * @method void setConcurrency(integer $Concurrency) Set <p>Concurrency of a single instance. Default value: 1.</p>
 */
class InferenceResourceConfig extends AbstractModel
{
    /**
     * @var string <p>Scaling method. Valid values: <li>Auto: automatically adjust instance count according to request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
     */
    public $ScalingMode;

    /**
     * @var string <p>Hardware specification flag. Abandoned. For reference, use <code>HardwareSpecId</code>.</p>
     * @deprecated
     */
    public $HardwareSpec;

    /**
     * @var string <p>Unique identification ID of the hardware specification. You can obtain the supported hardware specifications of the current site through the <code>DescribeInferenceHardwareSpecifications</code> API.</p><p>By default, the system configures the required resources for the inference service according to the hardware specification corresponding to the selected <code>HardwareSpecId</code>. If adjustments are needed, you can customize the hardware resource configuration through <code>HardwareConfig</code>.</p>
     */
    public $HardwareSpecId;

    /**
     * @var InferenceHardwareConfig <p>Hardware configuration for the inference service.</p><p>As an input parameter, if unpadded, hardware resources are configured according to the default value of the selected <code>HardwareSpecId</code> specification; if padded, priority is given to the fill value for configuration.</p>
     */
    public $HardwareConfig;

    /**
     * @var InferenceAutoScalingConfig <p>Automatic scaling configuration of the inference service. Required when ScalingMode is Auto.</p>
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
     * @param string $ScalingMode <p>Scaling method. Valid values: <li>Auto: automatically adjust instance count according to request volume;</li><li>Manual: manually set a fixed number of instances.</li></p>
     * @param string $HardwareSpec <p>Hardware specification flag. Abandoned. For reference, use <code>HardwareSpecId</code>.</p>
     * @param string $HardwareSpecId <p>Unique identification ID of the hardware specification. You can obtain the supported hardware specifications of the current site through the <code>DescribeInferenceHardwareSpecifications</code> API.</p><p>By default, the system configures the required resources for the inference service according to the hardware specification corresponding to the selected <code>HardwareSpecId</code>. If adjustments are needed, you can customize the hardware resource configuration through <code>HardwareConfig</code>.</p>
     * @param InferenceHardwareConfig $HardwareConfig <p>Hardware configuration for the inference service.</p><p>As an input parameter, if unpadded, hardware resources are configured according to the default value of the selected <code>HardwareSpecId</code> specification; if padded, priority is given to the fill value for configuration.</p>
     * @param InferenceAutoScalingConfig $AutoScalingConfig <p>Automatic scaling configuration of the inference service. Required when ScalingMode is Auto.</p>
     * @param InferenceManualInstanceConfig $ManualInstanceConfig <p>Inference service manual setting instance configuration. Required when ScalingMode is Manual.</p>
     * @param integer $Concurrency <p>Concurrency of a single instance. Default value: 1.</p>
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

        if (array_key_exists("HardwareSpec",$param) and $param["HardwareSpec"] !== null) {
            $this->HardwareSpec = $param["HardwareSpec"];
        }

        if (array_key_exists("HardwareSpecId",$param) and $param["HardwareSpecId"] !== null) {
            $this->HardwareSpecId = $param["HardwareSpecId"];
        }

        if (array_key_exists("HardwareConfig",$param) and $param["HardwareConfig"] !== null) {
            $this->HardwareConfig = new InferenceHardwareConfig();
            $this->HardwareConfig->deserialize($param["HardwareConfig"]);
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
    }
}
