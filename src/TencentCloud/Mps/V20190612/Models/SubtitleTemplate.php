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
 * Subtitle stream configuration parameters.
 *
 * @method string getPath() Obtain 
 * @method void setPath(string $Path) Set 
 * @method integer getStreamIndex() Obtain 
 * @method void setStreamIndex(integer $StreamIndex) Set 
 * @method MediaInputInfo getSubtitleFileInput() Obtain 
 * @method void setSubtitleFileInput(MediaInputInfo $SubtitleFileInput) Set 
 * @method MediaInputInfo getFontFileInput() Obtain Input information for the subtitle font file to be suppressed. Currently only support url and cos. If both are filled, url takes precedence over cos. If FontFileInput is filled, FontFileInput takes precedence over FontType.

 * @method void setFontFileInput(MediaInputInfo $FontFileInput) Set Input information for the subtitle font file to be suppressed. Currently only support url and cos. If both are filled, url takes precedence over cos. If FontFileInput is filled, FontFileInput takes precedence over FontType.

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
 * @method integer getBoardWidth() Obtain 
 * @method void setBoardWidth(integer $BoardWidth) Set 
 * @method integer getBoardHeight() Obtain 
 * @method void setBoardHeight(integer $BoardHeight) Set 
 * @method string getBoardColor() Obtain 
 * @method void setBoardColor(string $BoardColor) Set 
 * @method float getBoardAlpha() Obtain 
 * @method void setBoardAlpha(float $BoardAlpha) Set 
 * @method float getOutlineWidth() Obtain Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
0.3% of the source video height by default if left blank.

 * @method void setOutlineWidth(float $OutlineWidth) Set Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
0.3% of the source video height by default if left blank.

 * @method string getOutlineColor() Obtain Border color. 6-digit hexadecimal RGB. Black by default if left blank.

 * @method void setOutlineColor(string $OutlineColor) Set Border color. 6-digit hexadecimal RGB. Black by default if left blank.

 * @method float getOutlineAlpha() Obtain Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

 * @method void setOutlineAlpha(float $OutlineAlpha) Set Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

 * @method float getShadowWidth() Obtain Shadow width. Floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
No shading by default if left blank.

 * @method void setShadowWidth(float $ShadowWidth) Set Shadow width. Floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
No shading by default if left blank.

 * @method string getShadowColor() Obtain Shadow color. 6-bit base RGB. Black by default if left blank (when shadow has set).

 * @method void setShadowColor(string $ShadowColor) Set Shadow color. 6-bit base RGB. Black by default if left blank (when shadow has set).

 * @method float getShadowAlpha() Obtain Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

 * @method void setShadowAlpha(float $ShadowAlpha) Set Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

 * @method integer getLineSpacing() Obtain Line spacing. The value should be a positive integer.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

 * @method void setLineSpacing(integer $LineSpacing) Set Line spacing. The value should be a positive integer.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

 * @method string getAlignment() Obtain Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.

 * @method void setAlignment(string $Alignment) Set Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.

 * @method integer getBoardWidthUnit() Obtain Default value is 0. If this is set to 1, the value of BoardWidth is a percentage based on the video width.

 * @method void setBoardWidthUnit(integer $BoardWidthUnit) Set Default value is 0. If this is set to 1, the value of BoardWidth is a percentage based on the video width.

 * @method integer getBoardHeightUnit() Obtain Default value is 0. If this is set to 1, the value of BoardHeight is a percentage based on the video height.

 * @method void setBoardHeightUnit(integer $BoardHeightUnit) Set Default value is 0. If this is set to 1, the value of BoardHeight is a percentage based on the video height.

 * @method integer getOutlineWidthUnit() Obtain Default value is 0. If this is set to 1, the value of OutlineWidth is a percentage based on the video height.

 * @method void setOutlineWidthUnit(integer $OutlineWidthUnit) Set Default value is 0. If this is set to 1, the value of OutlineWidth is a percentage based on the video height.

 * @method integer getShadowWidthUnit() Obtain Default value is 0. If this is set to 1, the value of ShadowWidth is a percentage based on the video height.

 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) Set Default value is 0. If this is set to 1, the value of ShadowWidth is a percentage based on the video height.

 * @method integer getLineSpacingUnit() Obtain Default value: 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.

 * @method void setLineSpacingUnit(integer $LineSpacingUnit) Set Default value: 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.
 */
class SubtitleTemplate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Path;

    /**
     * @var integer 
     */
    public $StreamIndex;

    /**
     * @var MediaInputInfo 
     */
    public $SubtitleFileInput;

    /**
     * @var MediaInputInfo Input information for the subtitle font file to be suppressed. Currently only support url and cos. If both are filled, url takes precedence over cos. If FontFileInput is filled, FontFileInput takes precedence over FontType.

     */
    public $FontFileInput;

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
     * @var integer 
     */
    public $BoardWidth;

    /**
     * @var integer 
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
     * @var float Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
0.3% of the source video height by default if left blank.

     */
    public $OutlineWidth;

    /**
     * @var string Border color. 6-digit hexadecimal RGB. Black by default if left blank.

     */
    public $OutlineColor;

    /**
     * @var float Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

     */
    public $OutlineAlpha;

    /**
     * @var float Shadow width. Floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
No shading by default if left blank.

     */
    public $ShadowWidth;

    /**
     * @var string Shadow color. 6-bit base RGB. Black by default if left blank (when shadow has set).

     */
    public $ShadowColor;

    /**
     * @var float Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

     */
    public $ShadowAlpha;

    /**
     * @var integer Line spacing. The value should be a positive integer.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

     */
    public $LineSpacing;

    /**
     * @var string Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.

     */
    public $Alignment;

    /**
     * @var integer Default value is 0. If this is set to 1, the value of BoardWidth is a percentage based on the video width.

     */
    public $BoardWidthUnit;

    /**
     * @var integer Default value is 0. If this is set to 1, the value of BoardHeight is a percentage based on the video height.

     */
    public $BoardHeightUnit;

    /**
     * @var integer Default value is 0. If this is set to 1, the value of OutlineWidth is a percentage based on the video height.

     */
    public $OutlineWidthUnit;

    /**
     * @var integer Default value is 0. If this is set to 1, the value of ShadowWidth is a percentage based on the video height.

     */
    public $ShadowWidthUnit;

    /**
     * @var integer Default value: 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.

     */
    public $LineSpacingUnit;

    /**
     * @param string $Path 
     * @param integer $StreamIndex 
     * @param MediaInputInfo $SubtitleFileInput 
     * @param MediaInputInfo $FontFileInput Input information for the subtitle font file to be suppressed. Currently only support url and cos. If both are filled, url takes precedence over cos. If FontFileInput is filled, FontFileInput takes precedence over FontType.

     * @param string $FontType 
     * @param string $FontSize 
     * @param string $FontColor 
     * @param float $FontAlpha 
     * @param string $YPos 
     * @param string $BoardY 
     * @param integer $BoardWidth 
     * @param integer $BoardHeight 
     * @param string $BoardColor 
     * @param float $BoardAlpha 
     * @param float $OutlineWidth Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
0.3% of the source video height by default if left blank.

     * @param string $OutlineColor Border color. 6-digit hexadecimal RGB. Black by default if left blank.

     * @param float $OutlineAlpha Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

     * @param float $ShadowWidth Shadow width. Floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
No shading by default if left blank.

     * @param string $ShadowColor Shadow color. 6-bit base RGB. Black by default if left blank (when shadow has set).

     * @param float $ShadowAlpha Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

     * @param integer $LineSpacing Line spacing. The value should be a positive integer.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

     * @param string $Alignment Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.

     * @param integer $BoardWidthUnit Default value is 0. If this is set to 1, the value of BoardWidth is a percentage based on the video width.

     * @param integer $BoardHeightUnit Default value is 0. If this is set to 1, the value of BoardHeight is a percentage based on the video height.

     * @param integer $OutlineWidthUnit Default value is 0. If this is set to 1, the value of OutlineWidth is a percentage based on the video height.

     * @param integer $ShadowWidthUnit Default value is 0. If this is set to 1, the value of ShadowWidth is a percentage based on the video height.

     * @param integer $LineSpacingUnit Default value: 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StreamIndex",$param) and $param["StreamIndex"] !== null) {
            $this->StreamIndex = $param["StreamIndex"];
        }

        if (array_key_exists("SubtitleFileInput",$param) and $param["SubtitleFileInput"] !== null) {
            $this->SubtitleFileInput = new MediaInputInfo();
            $this->SubtitleFileInput->deserialize($param["SubtitleFileInput"]);
        }

        if (array_key_exists("FontFileInput",$param) and $param["FontFileInput"] !== null) {
            $this->FontFileInput = new MediaInputInfo();
            $this->FontFileInput->deserialize($param["FontFileInput"]);
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

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }

        if (array_key_exists("BoardWidthUnit",$param) and $param["BoardWidthUnit"] !== null) {
            $this->BoardWidthUnit = $param["BoardWidthUnit"];
        }

        if (array_key_exists("BoardHeightUnit",$param) and $param["BoardHeightUnit"] !== null) {
            $this->BoardHeightUnit = $param["BoardHeightUnit"];
        }

        if (array_key_exists("OutlineWidthUnit",$param) and $param["OutlineWidthUnit"] !== null) {
            $this->OutlineWidthUnit = $param["OutlineWidthUnit"];
        }

        if (array_key_exists("ShadowWidthUnit",$param) and $param["ShadowWidthUnit"] !== null) {
            $this->ShadowWidthUnit = $param["ShadowWidthUnit"];
        }

        if (array_key_exists("LineSpacingUnit",$param) and $param["LineSpacingUnit"] !== null) {
            $this->LineSpacingUnit = $param["LineSpacingUnit"];
        }
    }
}
