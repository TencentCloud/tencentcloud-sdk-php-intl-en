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
 * @method integer getSubtitleShadowConfigSwitch() Obtain 
 * @method void setSubtitleShadowConfigSwitch(integer $SubtitleShadowConfigSwitch) Set 
 * @method float getShadowWidth() Obtain 
 * @method void setShadowWidth(float $ShadowWidth) Set 
 * @method integer getShadowWidthUnit() Obtain 
 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) Set 
 * @method string getShadowColor() Obtain 
 * @method void setShadowColor(string $ShadowColor) Set 
 * @method float getShadowAlpha() Obtain 
 * @method void setShadowAlpha(float $ShadowAlpha) Set 
 */
class MPSSubtitleShadowConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubtitleShadowConfigSwitch;

    /**
     * @var float 
     */
    public $ShadowWidth;

    /**
     * @var integer 
     */
    public $ShadowWidthUnit;

    /**
     * @var string 
     */
    public $ShadowColor;

    /**
     * @var float 
     */
    public $ShadowAlpha;

    /**
     * @param integer $SubtitleShadowConfigSwitch 
     * @param float $ShadowWidth 
     * @param integer $ShadowWidthUnit 
     * @param string $ShadowColor 
     * @param float $ShadowAlpha 
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
        if (array_key_exists("SubtitleShadowConfigSwitch",$param) and $param["SubtitleShadowConfigSwitch"] !== null) {
            $this->SubtitleShadowConfigSwitch = $param["SubtitleShadowConfigSwitch"];
        }

        if (array_key_exists("ShadowWidth",$param) and $param["ShadowWidth"] !== null) {
            $this->ShadowWidth = $param["ShadowWidth"];
        }

        if (array_key_exists("ShadowWidthUnit",$param) and $param["ShadowWidthUnit"] !== null) {
            $this->ShadowWidthUnit = $param["ShadowWidthUnit"];
        }

        if (array_key_exists("ShadowColor",$param) and $param["ShadowColor"] !== null) {
            $this->ShadowColor = $param["ShadowColor"];
        }

        if (array_key_exists("ShadowAlpha",$param) and $param["ShadowAlpha"] !== null) {
            $this->ShadowAlpha = $param["ShadowAlpha"];
        }
    }
}
