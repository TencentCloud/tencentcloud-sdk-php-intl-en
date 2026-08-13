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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stamp extraction configuration.
 *
 * @method integer getTransparencyThreshold() Obtain <p>Transparency threshold</p><p>Value ranges from 0 to 255.</p><p>Default value: 30</p>
 * @method void setTransparencyThreshold(integer $TransparencyThreshold) Set <p>Transparency threshold</p><p>Value ranges from 0 to 255.</p><p>Default value: 30</p>
 * @method integer getOpaqueThreshold() Obtain <p>Opaque threshold must be greater than TransparencyThreshold.</p><p>Value ranges from 0 to 255.</p><p>Default value: 127.</p>
 * @method void setOpaqueThreshold(integer $OpaqueThreshold) Set <p>Opaque threshold must be greater than TransparencyThreshold.</p><p>Value ranges from 0 to 255.</p><p>Default value: 127.</p>
 * @method integer getEdgeSamplingStep() Obtain <p>Edge sampling steps, default 5.</p><p>Value ranges from 1 to 10.</p>
 * @method void setEdgeSamplingStep(integer $EdgeSamplingStep) Set <p>Edge sampling steps, default 5.</p><p>Value ranges from 1 to 10.</p>
 * @method integer getEdgeExpansionStep() Obtain <p>Edge expansion steps. Default: 5</p>
 * @method void setEdgeExpansionStep(integer $EdgeExpansionStep) Set <p>Edge expansion steps. Default: 5</p>
 * @method float getEdgeBlendingIntensity() Obtain <p>Edge fusion strength, default 0.5</p><p>Value ranges from 0 to 1.0</p>
 * @method void setEdgeBlendingIntensity(float $EdgeBlendingIntensity) Set <p>Edge fusion strength, default 0.5</p><p>Value ranges from 0 to 1.0</p>
 */
class PatternConfig extends AbstractModel
{
    /**
     * @var integer <p>Transparency threshold</p><p>Value ranges from 0 to 255.</p><p>Default value: 30</p>
     */
    public $TransparencyThreshold;

    /**
     * @var integer <p>Opaque threshold must be greater than TransparencyThreshold.</p><p>Value ranges from 0 to 255.</p><p>Default value: 127.</p>
     */
    public $OpaqueThreshold;

    /**
     * @var integer <p>Edge sampling steps, default 5.</p><p>Value ranges from 1 to 10.</p>
     */
    public $EdgeSamplingStep;

    /**
     * @var integer <p>Edge expansion steps. Default: 5</p>
     */
    public $EdgeExpansionStep;

    /**
     * @var float <p>Edge fusion strength, default 0.5</p><p>Value ranges from 0 to 1.0</p>
     */
    public $EdgeBlendingIntensity;

    /**
     * @param integer $TransparencyThreshold <p>Transparency threshold</p><p>Value ranges from 0 to 255.</p><p>Default value: 30</p>
     * @param integer $OpaqueThreshold <p>Opaque threshold must be greater than TransparencyThreshold.</p><p>Value ranges from 0 to 255.</p><p>Default value: 127.</p>
     * @param integer $EdgeSamplingStep <p>Edge sampling steps, default 5.</p><p>Value ranges from 1 to 10.</p>
     * @param integer $EdgeExpansionStep <p>Edge expansion steps. Default: 5</p>
     * @param float $EdgeBlendingIntensity <p>Edge fusion strength, default 0.5</p><p>Value ranges from 0 to 1.0</p>
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
        if (array_key_exists("TransparencyThreshold",$param) and $param["TransparencyThreshold"] !== null) {
            $this->TransparencyThreshold = $param["TransparencyThreshold"];
        }

        if (array_key_exists("OpaqueThreshold",$param) and $param["OpaqueThreshold"] !== null) {
            $this->OpaqueThreshold = $param["OpaqueThreshold"];
        }

        if (array_key_exists("EdgeSamplingStep",$param) and $param["EdgeSamplingStep"] !== null) {
            $this->EdgeSamplingStep = $param["EdgeSamplingStep"];
        }

        if (array_key_exists("EdgeExpansionStep",$param) and $param["EdgeExpansionStep"] !== null) {
            $this->EdgeExpansionStep = $param["EdgeExpansionStep"];
        }

        if (array_key_exists("EdgeBlendingIntensity",$param) and $param["EdgeBlendingIntensity"] !== null) {
            $this->EdgeBlendingIntensity = $param["EdgeBlendingIntensity"];
        }
    }
}
