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
 * Subtitle suppression module text shadow configuration
 *
 * @method integer getSubtitleShadowConfigSwitch() Obtain Text shadow configuration switch, 0 for off, 1 for on, default 0
 * @method void setSubtitleShadowConfigSwitch(integer $SubtitleShadowConfigSwitch) Set Text shadow configuration switch, 0 for off, 1 for on, default 0
 * @method float getShadowWidth() Obtain Shadow width, default unit pixel, underlying default value 0, no shading

 * @method void setShadowWidth(float $ShadowWidth) Set Shadow width, default unit pixel, underlying default value 0, no shading

 * @method integer getShadowWidthUnit() Obtain Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).

 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) Set Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).

 * @method string getShadowColor() Obtain Shadow color. 6-digit base 16 RGB. Black by default if left blank (has set shadow in the current situation).

 * @method void setShadowColor(string $ShadowColor) Set Shadow color. 6-digit base 16 RGB. Black by default if left blank (has set shadow in the current situation).

 * @method float getShadowAlpha() Obtain Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

 * @method void setShadowAlpha(float $ShadowAlpha) Set Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).
 */
class SubtitleShadowConfig extends AbstractModel
{
    /**
     * @var integer Text shadow configuration switch, 0 for off, 1 for on, default 0
     */
    public $SubtitleShadowConfigSwitch;

    /**
     * @var float Shadow width, default unit pixel, underlying default value 0, no shading

     */
    public $ShadowWidth;

    /**
     * @var integer Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).

     */
    public $ShadowWidthUnit;

    /**
     * @var string Shadow color. 6-digit base 16 RGB. Black by default if left blank (has set shadow in the current situation).

     */
    public $ShadowColor;

    /**
     * @var float Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

     */
    public $ShadowAlpha;

    /**
     * @param integer $SubtitleShadowConfigSwitch Text shadow configuration switch, 0 for off, 1 for on, default 0
     * @param float $ShadowWidth Shadow width, default unit pixel, underlying default value 0, no shading

     * @param integer $ShadowWidthUnit Shadow width unit. 0 for pixel, 1 for percentage. Default is 0 (pixel).

     * @param string $ShadowColor Shadow color. 6-digit base 16 RGB. Black by default if left blank (has set shadow in the current situation).

     * @param float $ShadowAlpha Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).
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
