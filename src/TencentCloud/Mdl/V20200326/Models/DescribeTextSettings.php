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
 * @method string getLocation() Obtain Origin
 * @method void setLocation(string $Location) Set Origin
 * @method integer getXPos() Obtain The watermark image’s horizontal distance from the origin as a percentage of the video width
 * @method void setXPos(integer $XPos) Set The watermark image’s horizontal distance from the origin as a percentage of the video width
 * @method integer getYPos() Obtain The watermark image’s vertical distance from the origin as a percentage of the video height
 * @method void setYPos(integer $YPos) Set The watermark image’s vertical distance from the origin as a percentage of the video height
 * @method integer getFontSize() Obtain Font size
 * @method void setFontSize(integer $FontSize) Set Font size
 * @method string getFontColor() Obtain Font color
 * @method void setFontColor(string $FontColor) Set Font color
 */
class DescribeTextSettings extends AbstractModel
{
    /**
     * @var string Text
     */
    public $Text;

    /**
     * @var string Origin
     */
    public $Location;

    /**
     * @var integer The watermark image’s horizontal distance from the origin as a percentage of the video width
     */
    public $XPos;

    /**
     * @var integer The watermark image’s vertical distance from the origin as a percentage of the video height
     */
    public $YPos;

    /**
     * @var integer Font size
     */
    public $FontSize;

    /**
     * @var string Font color
     */
    public $FontColor;

    /**
     * @param string $Text Text
     * @param string $Location Origin
     * @param integer $XPos The watermark image’s horizontal distance from the origin as a percentage of the video width
     * @param integer $YPos The watermark image’s vertical distance from the origin as a percentage of the video height
     * @param integer $FontSize Font size
     * @param string $FontColor Font color
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
