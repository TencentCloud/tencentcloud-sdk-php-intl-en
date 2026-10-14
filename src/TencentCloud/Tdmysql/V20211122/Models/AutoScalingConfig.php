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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scope of resources for instance configuration adjustment
When ResourceType is cpu, it means ccu.
When the value is nodecount, it indicates the range of the number of nodes.
For disk, it indicates the disk capacity range (unit: GB).
Whether ScaleUpEnabled enables scale-up
Whether ScaleDownEnabled is enabled
ThresholdPercent is the trigger threshold (%).
Step is the step length for configuration change
 *
 * @method float getRangeMin() Obtain <p>Minimum value</p>
 * @method void setRangeMin(float $RangeMin) Set <p>Minimum value</p>
 * @method float getRangeMax() Obtain <p>Maximum value</p>
 * @method void setRangeMax(float $RangeMax) Set <p>Maximum value</p>
 * @method string getResourceType() Obtain <p>Resource type corresponding to the returned range parameter</p><p>Enumeration values:</p><ul><li>cpu: Returns the CPU adjustment return limit. When no mem limit exists, it represents ccu.</li><li>nodecount: Returns the limit range of the number of nodes for horizontal scaling.</li><li>datadisk: Returns the capacity limit range for disk scale-out.</li></ul>
 * @method void setResourceType(string $ResourceType) Set <p>Resource type corresponding to the returned range parameter</p><p>Enumeration values:</p><ul><li>cpu: Returns the CPU adjustment return limit. When no mem limit exists, it represents ccu.</li><li>nodecount: Returns the limit range of the number of nodes for horizontal scaling.</li><li>datadisk: Returns the capacity limit range for disk scale-out.</li></ul>
 * @method boolean getScaleUpEnabled() Obtain <p>Whether upgrade is allowed</p>
 * @method void setScaleUpEnabled(boolean $ScaleUpEnabled) Set <p>Whether upgrade is allowed</p>
 * @method boolean getScaleDownEnabled() Obtain <p>Whether to allow downgrade</p>
 * @method void setScaleDownEnabled(boolean $ScaleDownEnabled) Set <p>Whether to allow downgrade</p>
 * @method integer getThresholdPercent() Obtain <p>Trigger threshold (%)</p>
 * @method void setThresholdPercent(integer $ThresholdPercent) Set <p>Trigger threshold (%)</p>
 * @method float getStep() Obtain <p>Configuration change step length</p>
 * @method void setStep(float $Step) Set <p>Configuration change step length</p>
 */
class AutoScalingConfig extends AbstractModel
{
    /**
     * @var float <p>Minimum value</p>
     */
    public $RangeMin;

    /**
     * @var float <p>Maximum value</p>
     */
    public $RangeMax;

    /**
     * @var string <p>Resource type corresponding to the returned range parameter</p><p>Enumeration values:</p><ul><li>cpu: Returns the CPU adjustment return limit. When no mem limit exists, it represents ccu.</li><li>nodecount: Returns the limit range of the number of nodes for horizontal scaling.</li><li>datadisk: Returns the capacity limit range for disk scale-out.</li></ul>
     */
    public $ResourceType;

    /**
     * @var boolean <p>Whether upgrade is allowed</p>
     */
    public $ScaleUpEnabled;

    /**
     * @var boolean <p>Whether to allow downgrade</p>
     */
    public $ScaleDownEnabled;

    /**
     * @var integer <p>Trigger threshold (%)</p>
     */
    public $ThresholdPercent;

    /**
     * @var float <p>Configuration change step length</p>
     */
    public $Step;

    /**
     * @param float $RangeMin <p>Minimum value</p>
     * @param float $RangeMax <p>Maximum value</p>
     * @param string $ResourceType <p>Resource type corresponding to the returned range parameter</p><p>Enumeration values:</p><ul><li>cpu: Returns the CPU adjustment return limit. When no mem limit exists, it represents ccu.</li><li>nodecount: Returns the limit range of the number of nodes for horizontal scaling.</li><li>datadisk: Returns the capacity limit range for disk scale-out.</li></ul>
     * @param boolean $ScaleUpEnabled <p>Whether upgrade is allowed</p>
     * @param boolean $ScaleDownEnabled <p>Whether to allow downgrade</p>
     * @param integer $ThresholdPercent <p>Trigger threshold (%)</p>
     * @param float $Step <p>Configuration change step length</p>
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
        if (array_key_exists("RangeMin",$param) and $param["RangeMin"] !== null) {
            $this->RangeMin = $param["RangeMin"];
        }

        if (array_key_exists("RangeMax",$param) and $param["RangeMax"] !== null) {
            $this->RangeMax = $param["RangeMax"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ScaleUpEnabled",$param) and $param["ScaleUpEnabled"] !== null) {
            $this->ScaleUpEnabled = $param["ScaleUpEnabled"];
        }

        if (array_key_exists("ScaleDownEnabled",$param) and $param["ScaleDownEnabled"] !== null) {
            $this->ScaleDownEnabled = $param["ScaleDownEnabled"];
        }

        if (array_key_exists("ThresholdPercent",$param) and $param["ThresholdPercent"] !== null) {
            $this->ThresholdPercent = $param["ThresholdPercent"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
