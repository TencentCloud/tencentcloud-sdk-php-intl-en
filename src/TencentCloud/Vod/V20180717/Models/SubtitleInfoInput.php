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
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 * @method integer getStreamIndex() Obtain 
 * @method void setStreamIndex(integer $StreamIndex) Set 
 * @method string getFontType() Obtain 
 * @method void setFontType(string $FontType) Set 
 * @method string getFontSize() Obtain 
 * @method void setFontSize(string $FontSize) Set 
 * @method string getFontColor() Obtain 
 * @method void setFontColor(string $FontColor) Set 
 * @method float getFontAlpha() Obtain 
 * @method void setFontAlpha(float $FontAlpha) Set 
 * @method string getYPos() Obtain 
 * @method void setYPos(string $YPos) Set 
 * @method string getBoardY() Obtain 
 * @method void setBoardY(string $BoardY) Set 
 * @method string getBoardWidth() Obtain 
 * @method void setBoardWidth(string $BoardWidth) Set 
 * @method string getBoardHeight() Obtain 
 * @method void setBoardHeight(string $BoardHeight) Set 
 * @method string getBoardColor() Obtain 
 * @method void setBoardColor(string $BoardColor) Set 
 * @method float getBoardAlpha() Obtain 
 * @method void setBoardAlpha(float $BoardAlpha) Set 
 * @method string getAlignment() Obtain 
 * @method void setAlignment(string $Alignment) Set 
 * @method string getOutlineWidth() Obtain 
 * @method void setOutlineWidth(string $OutlineWidth) Set 
 * @method string getOutlineColor() Obtain 
 * @method void setOutlineColor(string $OutlineColor) Set 
 * @method float getOutlineAlpha() Obtain 
 * @method void setOutlineAlpha(float $OutlineAlpha) Set 
 * @method string getShadowWidth() Obtain 
 * @method void setShadowWidth(string $ShadowWidth) Set 
 * @method string getShadowColor() Obtain 
 * @method void setShadowColor(string $ShadowColor) Set 
 * @method float getShadowAlpha() Obtain 
 * @method void setShadowAlpha(float $ShadowAlpha) Set 
 * @method string getLineSpacing() Obtain 
 * @method void setLineSpacing(string $LineSpacing) Set 
 */
class SubtitleInfoInput extends AbstractModel
{
    /**
     * @var string 
     */
    public $Id;

    /**
     * @var integer 
     */
    public $StreamIndex;

    /**
     * @var string 
     */
    public $FontType;

    /**
     * @var string 
     */
    public $FontSize;

    /**
     * @var string 
     */
    public $FontColor;

    /**
     * @var float 
     */
    public $FontAlpha;

    /**
     * @var string 
     */
    public $YPos;

    /**
     * @var string 
     */
    public $BoardY;

    /**
     * @var string 
     */
    public $BoardWidth;

    /**
     * @var string 
     */
    public $BoardHeight;

    /**
     * @var string 
     */
    public $BoardColor;

    /**
     * @var float 
     */
    public $BoardAlpha;

    /**
     * @var string 
     */
    public $Alignment;

    /**
     * @var string 
     */
    public $OutlineWidth;

    /**
     * @var string 
     */
    public $OutlineColor;

    /**
     * @var float 
     */
    public $OutlineAlpha;

    /**
     * @var string 
     */
    public $ShadowWidth;

    /**
     * @var string 
     */
    public $ShadowColor;

    /**
     * @var float 
     */
    public $ShadowAlpha;

    /**
     * @var string 
     */
    public $LineSpacing;

    /**
     * @param string $Id 
     * @param integer $StreamIndex 
     * @param string $FontType 
     * @param string $FontSize 
     * @param string $FontColor 
     * @param float $FontAlpha 
     * @param string $YPos 
     * @param string $BoardY 
     * @param string $BoardWidth 
     * @param string $BoardHeight 
     * @param string $BoardColor 
     * @param float $BoardAlpha 
     * @param string $Alignment 
     * @param string $OutlineWidth 
     * @param string $OutlineColor 
     * @param float $OutlineAlpha 
     * @param string $ShadowWidth 
     * @param string $ShadowColor 
     * @param float $ShadowAlpha 
     * @param string $LineSpacing 
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StreamIndex",$param) and $param["StreamIndex"] !== null) {
            $this->StreamIndex = $param["StreamIndex"];
        }

        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("BoardWidth",$param) and $param["BoardWidth"] !== null) {
            $this->BoardWidth = $param["BoardWidth"];
        }

        if (array_key_exists("BoardHeight",$param) and $param["BoardHeight"] !== null) {
            $this->BoardHeight = $param["BoardHeight"];
        }

        if (array_key_exists("BoardColor",$param) and $param["BoardColor"] !== null) {
            $this->BoardColor = $param["BoardColor"];
        }

        if (array_key_exists("BoardAlpha",$param) and $param["BoardAlpha"] !== null) {
            $this->BoardAlpha = $param["BoardAlpha"];
        }

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }

        if (array_key_exists("OutlineWidth",$param) and $param["OutlineWidth"] !== null) {
            $this->OutlineWidth = $param["OutlineWidth"];
        }

        if (array_key_exists("OutlineColor",$param) and $param["OutlineColor"] !== null) {
            $this->OutlineColor = $param["OutlineColor"];
        }

        if (array_key_exists("OutlineAlpha",$param) and $param["OutlineAlpha"] !== null) {
            $this->OutlineAlpha = $param["OutlineAlpha"];
        }

        if (array_key_exists("ShadowWidth",$param) and $param["ShadowWidth"] !== null) {
            $this->ShadowWidth = $param["ShadowWidth"];
        }

        if (array_key_exists("ShadowColor",$param) and $param["ShadowColor"] !== null) {
            $this->ShadowColor = $param["ShadowColor"];
        }

        if (array_key_exists("ShadowAlpha",$param) and $param["ShadowAlpha"] !== null) {
            $this->ShadowAlpha = $param["ShadowAlpha"];
        }

        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }
    }
}
