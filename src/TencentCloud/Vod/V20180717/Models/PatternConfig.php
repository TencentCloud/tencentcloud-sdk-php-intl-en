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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getTransparencyThreshold() Obtain 
 * @method void setTransparencyThreshold(integer $TransparencyThreshold) Set 
 * @method integer getOpaqueThreshold() Obtain 
 * @method void setOpaqueThreshold(integer $OpaqueThreshold) Set 
 * @method integer getEdgeSamplingStep() Obtain 
 * @method void setEdgeSamplingStep(integer $EdgeSamplingStep) Set 
 * @method integer getEdgeExpansionStep() Obtain 
 * @method void setEdgeExpansionStep(integer $EdgeExpansionStep) Set 
 * @method float getEdgeBlendingIntensity() Obtain 
 * @method void setEdgeBlendingIntensity(float $EdgeBlendingIntensity) Set 
 */
class PatternConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $TransparencyThreshold;

    /**
     * @var integer 
     */
    public $OpaqueThreshold;

    /**
     * @var integer 
     */
    public $EdgeSamplingStep;

    /**
     * @var integer 
     */
    public $EdgeExpansionStep;

    /**
     * @var float 
     */
    public $EdgeBlendingIntensity;

    /**
     * @param integer $TransparencyThreshold 
     * @param integer $OpaqueThreshold 
     * @param integer $EdgeSamplingStep 
     * @param integer $EdgeExpansionStep 
     * @param float $EdgeBlendingIntensity 
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
