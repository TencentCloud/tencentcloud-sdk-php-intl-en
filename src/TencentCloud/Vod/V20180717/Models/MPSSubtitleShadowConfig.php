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
 * MPS subtitle suppression module text shadow configuration
 *
 * @method integer getSubtitleShadowConfigSwitch() Obtain <p>Text shadow configuration switch, 0 for off, 1 for on, default 0</p>
 * @method void setSubtitleShadowConfigSwitch(integer $SubtitleShadowConfigSwitch) Set <p>Text shadow configuration switch, 0 for off, 1 for on, default 0</p>
 * @method float getShadowWidth() Obtain <p>Shadow width, default unit pixel, underlying default value 0, no shading</p>
 * @method void setShadowWidth(float $ShadowWidth) Set <p>Shadow width, default unit pixel, underlying default value 0, no shading</p>
 * @method integer getShadowWidthUnit() Obtain <p>Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).</p>
 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) Set <p>Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).</p>
 * @method string getShadowColor() Obtain <p>Shadow color. 6-digit hexadecimal RGB. Black by default if left blank (when shadow has set)</p>
 * @method void setShadowColor(string $ShadowColor) Set <p>Shadow color. 6-digit hexadecimal RGB. Black by default if left blank (when shadow has set)</p>
 * @method float getShadowAlpha() Obtain <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).</p>
 * @method void setShadowAlpha(float $ShadowAlpha) Set <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).</p>
 */
class MPSSubtitleShadowConfig extends AbstractModel
{
    /**
     * @var integer <p>Text shadow configuration switch, 0 for off, 1 for on, default 0</p>
     */
    public $SubtitleShadowConfigSwitch;

    /**
     * @var float <p>Shadow width, default unit pixel, underlying default value 0, no shading</p>
     */
    public $ShadowWidth;

    /**
     * @var integer <p>Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).</p>
     */
    public $ShadowWidthUnit;

    /**
     * @var string <p>Shadow color. 6-digit hexadecimal RGB. Black by default if left blank (when shadow has set)</p>
     */
    public $ShadowColor;

    /**
     * @var float <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).</p>
     */
    public $ShadowAlpha;

    /**
     * @param integer $SubtitleShadowConfigSwitch <p>Text shadow configuration switch, 0 for off, 1 for on, default 0</p>
     * @param float $ShadowWidth <p>Shadow width, default unit pixel, underlying default value 0, no shading</p>
     * @param integer $ShadowWidthUnit <p>Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).</p>
     * @param string $ShadowColor <p>Shadow color. 6-digit hexadecimal RGB. Black by default if left blank (when shadow has set)</p>
     * @param float $ShadowAlpha <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).</p>
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
