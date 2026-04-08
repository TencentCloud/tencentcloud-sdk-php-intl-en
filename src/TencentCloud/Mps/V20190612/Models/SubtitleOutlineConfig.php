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
 * Subtitle suppression module text stroke configuration
 *
 * @method integer getSubtitleOutlineConfigSwitch() Obtain <p>Text stroke configuration switch, 0 for off, 1 for on, default 0</p>
 * @method void setSubtitleOutlineConfigSwitch(integer $SubtitleOutlineConfigSwitch) Set <p>Text stroke configuration switch, 0 for off, 1 for on, default 0</p>
 * @method float getOutlineWidth() Obtain <p>Stroke width, default unit pixel, underlying default value is 0.3% of the source video height</p>
 * @method void setOutlineWidth(float $OutlineWidth) Set <p>Stroke width, default unit pixel, underlying default value is 0.3% of the source video height</p>
 * @method integer getOutlineWidthUnit() Obtain <p>Stroke width unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method void setOutlineWidthUnit(integer $OutlineWidthUnit) Set <p>Stroke width unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
 * @method string getOutlineColor() Obtain <p>Border color. 6-digit base 16 RGB. Black by default if left blank.</p>
 * @method void setOutlineColor(string $OutlineColor) Set <p>Border color. 6-digit base 16 RGB. Black by default if left blank.</p>
 * @method float getOutlineAlpha() Obtain <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.</p>
 * @method void setOutlineAlpha(float $OutlineAlpha) Set <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.</p>
 */
class SubtitleOutlineConfig extends AbstractModel
{
    /**
     * @var integer <p>Text stroke configuration switch, 0 for off, 1 for on, default 0</p>
     */
    public $SubtitleOutlineConfigSwitch;

    /**
     * @var float <p>Stroke width, default unit pixel, underlying default value is 0.3% of the source video height</p>
     */
    public $OutlineWidth;

    /**
     * @var integer <p>Stroke width unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     */
    public $OutlineWidthUnit;

    /**
     * @var string <p>Border color. 6-digit base 16 RGB. Black by default if left blank.</p>
     */
    public $OutlineColor;

    /**
     * @var float <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.</p>
     */
    public $OutlineAlpha;

    /**
     * @param integer $SubtitleOutlineConfigSwitch <p>Text stroke configuration switch, 0 for off, 1 for on, default 0</p>
     * @param float $OutlineWidth <p>Stroke width, default unit pixel, underlying default value is 0.3% of the source video height</p>
     * @param integer $OutlineWidthUnit <p>Stroke width unit, 0 pixel, 1 percentage, defaults to 0, pixel</p>
     * @param string $OutlineColor <p>Border color. 6-digit base 16 RGB. Black by default if left blank.</p>
     * @param float $OutlineAlpha <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.</p>
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
        if (array_key_exists("SubtitleOutlineConfigSwitch",$param) and $param["SubtitleOutlineConfigSwitch"] !== null) {
            $this->SubtitleOutlineConfigSwitch = $param["SubtitleOutlineConfigSwitch"];
        }

        if (array_key_exists("OutlineWidth",$param) and $param["OutlineWidth"] !== null) {
            $this->OutlineWidth = $param["OutlineWidth"];
        }

        if (array_key_exists("OutlineWidthUnit",$param) and $param["OutlineWidthUnit"] !== null) {
            $this->OutlineWidthUnit = $param["OutlineWidthUnit"];
        }

        if (array_key_exists("OutlineColor",$param) and $param["OutlineColor"] !== null) {
            $this->OutlineColor = $param["OutlineColor"];
        }

        if (array_key_exists("OutlineAlpha",$param) and $param["OutlineAlpha"] !== null) {
            $this->OutlineAlpha = $param["OutlineAlpha"];
        }
    }
}
