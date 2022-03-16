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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark text settings
 *
 * @method string getText() Obtain Text
 * @method void setText(string $Text) Set Text
 * @method string getLocation() Obtain Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
 * @method void setLocation(string $Location) Set Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
 * @method integer getXPos() Obtain The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
 * @method void setXPos(integer $XPos) Set The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
 * @method integer getYPos() Obtain The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
 * @method void setYPos(integer $YPos) Set The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
 * @method integer getFontSize() Obtain Font size. Value range: 25-50.
 * @method void setFontSize(integer $FontSize) Set Font size. Value range: 25-50.
 * @method string getFontColor() Obtain Font color, which is an RGB color value. Default value: 0x000000.
 * @method void setFontColor(string $FontColor) Set Font color, which is an RGB color value. Default value: 0x000000.
 */
class CreateTextSettings extends AbstractModel
{
    /**
     * @var string Text
     */
    public $Text;

    /**
     * @var string Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
     */
    public $Location;

    /**
     * @var integer The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
     */
    public $XPos;

    /**
     * @var integer The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
     */
    public $YPos;

    /**
     * @var integer Font size. Value range: 25-50.
     */
    public $FontSize;

    /**
     * @var string Font color, which is an RGB color value. Default value: 0x000000.
     */
    public $FontColor;

    /**
     * @param string $Text Text
     * @param string $Location Origin. Valid values: TOP_LEFT, BOTTOM_LEFT, TOP_RIGHT, BOTTOM_RIGHT.
     * @param integer $XPos The watermark’s horizontal distance from the origin as a percentage of the video width. Value range: 0-100. Default: 10.
     * @param integer $YPos The watermark’s vertical distance from the origin as a percentage of the video height. Value range: 0-100. Default: 10.
     * @param integer $FontSize Font size. Value range: 25-50.
     * @param string $FontColor Font color, which is an RGB color value. Default value: 0x000000.
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

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }
    }
}
