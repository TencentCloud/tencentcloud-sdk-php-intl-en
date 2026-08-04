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
 * @method string getScalingMode() Obtain Scaling way. Valid values: <li>Auto: Automatically adjust instance count according to request volume;</li><li>Manual: Manual setting of fixed number of resource instances.</li>
 * @method void setScalingMode(string $ScalingMode) Set Scaling way. Valid values: <li>Auto: Automatically adjust instance count according to request volume;</li><li>Manual: Manual setting of fixed number of resource instances.</li>
 * @method string getHardwareSpec() Obtain Hardware specifications.
 * @method void setHardwareSpec(string $HardwareSpec) Set Hardware specifications.
 * @method InferenceAutoScalingConfig getAutoScalingConfig() Obtain Inference service automatic scaling configuration. Required when ScalingMode is Auto.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) Set Inference service automatic scaling configuration. Required when ScalingMode is Auto.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method InferenceManualInstanceConfig getManualInstanceConfig() Obtain Manual setting of inference service instance configuration. Required when ScalingMode is Manual.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) Set Manual setting of inference service instance configuration. Required when ScalingMode is Manual.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method integer getConcurrency() Obtain Single-instance concurrency. Default value is 1.
 * @method void setConcurrency(integer $Concurrency) Set Single-instance concurrency. Default value is 1.
 */
class InferenceResourceConfig extends AbstractModel
{
    /**
     * @var string Scaling way. Valid values: <li>Auto: Automatically adjust instance count according to request volume;</li><li>Manual: Manual setting of fixed number of resource instances.</li>
     */
    public $ScalingMode;

    /**
     * @var string Hardware specifications.
     */
    public $HardwareSpec;

    /**
     * @var InferenceAutoScalingConfig Inference service automatic scaling configuration. Required when ScalingMode is Auto.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $AutoScalingConfig;

    /**
     * @var InferenceManualInstanceConfig Manual setting of inference service instance configuration. Required when ScalingMode is Manual.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $ManualInstanceConfig;

    /**
     * @var integer Single-instance concurrency. Default value is 1.
     */
    public $Concurrency;

    /**
     * @param string $ScalingMode Scaling way. Valid values: <li>Auto: Automatically adjust instance count according to request volume;</li><li>Manual: Manual setting of fixed number of resource instances.</li>
     * @param string $HardwareSpec Hardware specifications.
     * @param InferenceAutoScalingConfig $AutoScalingConfig Inference service automatic scaling configuration. Required when ScalingMode is Auto.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param InferenceManualInstanceConfig $ManualInstanceConfig Manual setting of inference service instance configuration. Required when ScalingMode is Manual.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param integer $Concurrency Single-instance concurrency. Default value is 1.
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
