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
 * 
 *
 * @method integer getTop() Obtain The Y coordinate of the text watermark from the top left.
 * @method void setTop(integer $Top) Set The Y coordinate of the text watermark from the top left.
 * @method integer getLeft() Obtain The X coordinate of the text watermark from the top left.
 * @method void setLeft(integer $Left) Set The X coordinate of the text watermark from the top left.
 * @method integer getWidth() Obtain The watermark width (pixels).
 * @method void setWidth(integer $Width) Set The watermark width (pixels).
 * @method integer getHeight() Obtain The watermark height (pixels).
 * @method void setHeight(integer $Height) Set The watermark height (pixels).
 * @method string getChars() Obtain The text.
 * @method void setChars(string $Chars) Set The text.
 * @method integer getFontSize() Obtain The font size (pixels). The default value is `14`.
 * @method void setFontSize(integer $FontSize) Set The font size (pixels). The default value is `14`.
 * @method string getFontColor() Obtain The text color. The default color is white.
 * @method void setFontColor(string $FontColor) Set The text color. The default color is white.
 * @method string getBackGroundColor() Obtain The background color. If this parameter is empty, the background will be transparent (default).
 * @method void setBackGroundColor(string $BackGroundColor) Set The background color. If this parameter is empty, the background will be transparent (default).
 */
class WaterMarkChar extends AbstractModel
{
    /**
     * @var integer The Y coordinate of the text watermark from the top left.
     */
    public $Top;

    /**
     * @var integer The X coordinate of the text watermark from the top left.
     */
    public $Left;

    /**
     * @var integer The watermark width (pixels).
     */
    public $Width;

    /**
     * @var integer The watermark height (pixels).
     */
    public $Height;

    /**
     * @var string The text.
     */
    public $Chars;

    /**
     * @var integer The font size (pixels). The default value is `14`.
     */
    public $FontSize;

    /**
     * @var string The text color. The default color is white.
     */
    public $FontColor;

    /**
     * @var string The background color. If this parameter is empty, the background will be transparent (default).
     */
    public $BackGroundColor;

    /**
     * @param integer $Top The Y coordinate of the text watermark from the top left.
     * @param integer $Left The X coordinate of the text watermark from the top left.
     * @param integer $Width The watermark width (pixels).
     * @param integer $Height The watermark height (pixels).
     * @param string $Chars The text.
     * @param integer $FontSize The font size (pixels). The default value is `14`.
     * @param string $FontColor The text color. The default color is white.
     * @param string $BackGroundColor The background color. If this parameter is empty, the background will be transparent (default).
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Chars",$param) and $param["Chars"] !== null) {
            $this->Chars = $param["Chars"];
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
