<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The text watermark configuration.
 *
 * @method string getText() Obtain The text.
 * @method void setText(string $Text) Set The text.
 * @method integer getWaterMarkWidth() Obtain The watermark width (pixels).
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) Set The watermark width (pixels).
 * @method integer getWaterMarkHeight() Obtain The watermark height (pixels).
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) Set The watermark height (pixels).
 * @method integer getLocationX() Obtain The horizontal offset (pixels) of the watermark.
 * @method void setLocationX(integer $LocationX) Set The horizontal offset (pixels) of the watermark.
 * @method integer getLocationY() Obtain The vertical offset (pixels) of the watermark.
 * @method void setLocationY(integer $LocationY) Set The vertical offset (pixels) of the watermark.
 * @method integer getFontSize() Obtain The font size.
 * @method void setFontSize(integer $FontSize) Set The font size.
 * @method string getFontColor() Obtain The text color. The default color is white. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
 * @method void setFontColor(string $FontColor) Set The text color. The default color is white. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
 * @method string getBackGroundColor() Obtain The text fill color. If you do not specify this parameter, the fill color will be transparent. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
 * @method void setBackGroundColor(string $BackGroundColor) Set The text fill color. If you do not specify this parameter, the fill color will be transparent. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
 */
class McuWaterMarkText extends AbstractModel
{
    /**
     * @var string The text.
     */
    public $Text;

    /**
     * @var integer The watermark width (pixels).
     */
    public $WaterMarkWidth;

    /**
     * @var integer The watermark height (pixels).
     */
    public $WaterMarkHeight;

    /**
     * @var integer The horizontal offset (pixels) of the watermark.
     */
    public $LocationX;

    /**
     * @var integer The vertical offset (pixels) of the watermark.
     */
    public $LocationY;

    /**
     * @var integer The font size.
     */
    public $FontSize;

    /**
     * @var string The text color. The default color is white. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
     */
    public $FontColor;

    /**
     * @var string The text fill color. If you do not specify this parameter, the fill color will be transparent. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
     */
    public $BackGroundColor;

    /**
     * @param string $Text The text.
     * @param integer $WaterMarkWidth The watermark width (pixels).
     * @param integer $WaterMarkHeight The watermark height (pixels).
     * @param integer $LocationX The horizontal offset (pixels) of the watermark.
     * @param integer $LocationY The vertical offset (pixels) of the watermark.
     * @param integer $FontSize The font size.
     * @param string $FontColor The text color. The default color is white. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
     * @param string $BackGroundColor The text fill color. If you do not specify this parameter, the fill color will be transparent. Values for some commonly used colors: Red: `0xcc0033`; yellow: `0xcc9900`; green: `0xcccc33`; blue: `0x99CCFF`; black: `0x000000`; white: `0xFFFFFF`; gray: `0x999999`.	
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("WaterMarkWidth",$param) and $param["WaterMarkWidth"] !== null) {
            $this->WaterMarkWidth = $param["WaterMarkWidth"];
        }

        if (array_key_exists("WaterMarkHeight",$param) and $param["WaterMarkHeight"] !== null) {
            $this->WaterMarkHeight = $param["WaterMarkHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }
    }
}
