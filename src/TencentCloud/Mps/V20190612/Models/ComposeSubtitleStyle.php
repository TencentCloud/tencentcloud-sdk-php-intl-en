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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The subtitle style of a video editing/compositing task.
 *
 * @method string getHeight() Obtain The subtitle height. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
The default value is the value of `FontSize`.
 * @method void setHeight(string $Height) Set The subtitle height. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
The default value is the value of `FontSize`.
 * @method string getMarginBottom() Obtain The bottom margin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas height. For example, `10%` means that the margin is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
Default value: `0px`.
 * @method void setMarginBottom(string $MarginBottom) Set The bottom margin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas height. For example, `10%` means that the margin is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
Default value: `0px`.
 * @method string getFontType() Obtain The font type. Valid values:
<li>`SimHei`(default): Chinese font Heiti. </li>
<Li>`SimSun`: Chinese font Songti. </li>
 * @method void setFontType(string $FontType) Set The font type. Valid values:
<li>`SimHei`(default): Chinese font Heiti. </li>
<Li>`SimSun`: Chinese font Songti. </li>
 * @method string getFontSize() Obtain The font size. Two formats are supported:
u200c<li>If the value ends with %, it specifies the size as a percentage of the canvas height. For example, `10%` means that the size is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the size in pixels. For example, `100px` means that the size is 100 pixels. </li>
Default value: `2%`.
 * @method void setFontSize(string $FontSize) Set The font size. Two formats are supported:
u200c<li>If the value ends with %, it specifies the size as a percentage of the canvas height. For example, `10%` means that the size is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the size in pixels. For example, `100px` means that the size is 100 pixels. </li>
Default value: `2%`.
 * @method integer getFontBold() Obtain Whether to bold the text (some fonts may not support bold). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method void setFontBold(integer $FontBold) Set Whether to bold the text (some fonts may not support bold). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method integer getFontItalic() Obtain Whether to italicize the text (some fonts may not support italics). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method void setFontItalic(integer $FontItalic) Set Whether to italicize the text (some fonts may not support italics). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
 * @method string getFontColor() Obtain The font color (#RRGGBBAA).  
Default value: `0x000000FF` (black).  
Note: `AA` in the color notation defines the opacity of the color. It's optional.

 * @method void setFontColor(string $FontColor) Set The font color (#RRGGBBAA).  
Default value: `0x000000FF` (black).  
Note: `AA` in the color notation defines the opacity of the color. It's optional.

 * @method string getFontAlign() Obtain The text alignment. Valid values:
<li>`Center`(default) </li>
<li>`Left` </li>
<li>`Right` </li>
 * @method void setFontAlign(string $FontAlign) Set The text alignment. Valid values:
<li>`Center`(default) </li>
<li>`Left` </li>
<li>`Right` </li>
 * @method string getFontAlignMargin() Obtain The margin for left/right align.
<li>If `FontAlign` is `Left`, this parameter specifies the left margin of the subtitles. </li>
<li>If `FontAlign` is `Right`, this parameter specifies the right margin of the subtitles. </li>
Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas width. For example, `10%` means that the margin is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
 * @method void setFontAlignMargin(string $FontAlignMargin) Set The margin for left/right align.
<li>If `FontAlign` is `Left`, this parameter specifies the left margin of the subtitles. </li>
<li>If `FontAlign` is `Right`, this parameter specifies the right margin of the subtitles. </li>
Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas width. For example, `10%` means that the margin is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
 * @method string getBorderWidth() Obtain The subtitle border width. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas height. For example, `10%` means that the width is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the width is 100 pixels. </li>
The default value is `0`, which means the subtitles will have no borders.
 * @method void setBorderWidth(string $BorderWidth) Set The subtitle border width. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas height. For example, `10%` means that the width is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the width is 100 pixels. </li>
The default value is `0`, which means the subtitles will have no borders.
 * @method string getBorderColor() Obtain The border color, whose format is the same as that for `FontColor`. This parameter is valid if `BorderWidth` is not `0`.
 * @method void setBorderColor(string $BorderColor) Set The border color, whose format is the same as that for `FontColor`. This parameter is valid if `BorderWidth` is not `0`.
 * @method string getBottomColor() Obtain The text background color, whose format is the same as that for `FontColor`.  
The default value is an empty string, which means the subtitles will not have a background color.
 * @method void setBottomColor(string $BottomColor) Set The text background color, whose format is the same as that for `FontColor`.  
The default value is an empty string, which means the subtitles will not have a background color.
 */
class ComposeSubtitleStyle extends AbstractModel
{
    /**
     * @var string The subtitle height. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
The default value is the value of `FontSize`.
     */
    public $Height;

    /**
     * @var string The bottom margin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas height. For example, `10%` means that the margin is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
Default value: `0px`.
     */
    public $MarginBottom;

    /**
     * @var string The font type. Valid values:
<li>`SimHei`(default): Chinese font Heiti. </li>
<Li>`SimSun`: Chinese font Songti. </li>
     */
    public $FontType;

    /**
     * @var string The font size. Two formats are supported:
u200c<li>If the value ends with %, it specifies the size as a percentage of the canvas height. For example, `10%` means that the size is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the size in pixels. For example, `100px` means that the size is 100 pixels. </li>
Default value: `2%`.
     */
    public $FontSize;

    /**
     * @var integer Whether to bold the text (some fonts may not support bold). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     */
    public $FontBold;

    /**
     * @var integer Whether to italicize the text (some fonts may not support italics). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     */
    public $FontItalic;

    /**
     * @var string The font color (#RRGGBBAA).  
Default value: `0x000000FF` (black).  
Note: `AA` in the color notation defines the opacity of the color. It's optional.

     */
    public $FontColor;

    /**
     * @var string The text alignment. Valid values:
<li>`Center`(default) </li>
<li>`Left` </li>
<li>`Right` </li>
     */
    public $FontAlign;

    /**
     * @var string The margin for left/right align.
<li>If `FontAlign` is `Left`, this parameter specifies the left margin of the subtitles. </li>
<li>If `FontAlign` is `Right`, this parameter specifies the right margin of the subtitles. </li>
Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas width. For example, `10%` means that the margin is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
     */
    public $FontAlignMargin;

    /**
     * @var string The subtitle border width. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas height. For example, `10%` means that the width is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the width is 100 pixels. </li>
The default value is `0`, which means the subtitles will have no borders.
     */
    public $BorderWidth;

    /**
     * @var string The border color, whose format is the same as that for `FontColor`. This parameter is valid if `BorderWidth` is not `0`.
     */
    public $BorderColor;

    /**
     * @var string The text background color, whose format is the same as that for `FontColor`.  
The default value is an empty string, which means the subtitles will not have a background color.
     */
    public $BottomColor;

    /**
     * @param string $Height The subtitle height. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
The default value is the value of `FontSize`.
     * @param string $MarginBottom The bottom margin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas height. For example, `10%` means that the margin is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
Default value: `0px`.
     * @param string $FontType The font type. Valid values:
<li>`SimHei`(default): Chinese font Heiti. </li>
<Li>`SimSun`: Chinese font Songti. </li>
     * @param string $FontSize The font size. Two formats are supported:
u200c<li>If the value ends with %, it specifies the size as a percentage of the canvas height. For example, `10%` means that the size is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the size in pixels. For example, `100px` means that the size is 100 pixels. </li>
Default value: `2%`.
     * @param integer $FontBold Whether to bold the text (some fonts may not support bold). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     * @param integer $FontItalic Whether to italicize the text (some fonts may not support italics). Valid values:
<li>`0` (default): No. </li>
<li>`1`: Yes. </li>
     * @param string $FontColor The font color (#RRGGBBAA).  
Default value: `0x000000FF` (black).  
Note: `AA` in the color notation defines the opacity of the color. It's optional.

     * @param string $FontAlign The text alignment. Valid values:
<li>`Center`(default) </li>
<li>`Left` </li>
<li>`Right` </li>
     * @param string $FontAlignMargin The margin for left/right align.
<li>If `FontAlign` is `Left`, this parameter specifies the left margin of the subtitles. </li>
<li>If `FontAlign` is `Right`, this parameter specifies the right margin of the subtitles. </li>
Two formats are supported:
u200c<li>If the value ends with %, it specifies the margin as a percentage of the canvas width. For example, `10%` means that the margin is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the margin in pixels. For example, `100px` means that the margin is 100 pixels. </li>
     * @param string $BorderWidth The subtitle border width. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas height. For example, `10%` means that the width is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the width is 100 pixels. </li>
The default value is `0`, which means the subtitles will have no borders.
     * @param string $BorderColor The border color, whose format is the same as that for `FontColor`. This parameter is valid if `BorderWidth` is not `0`.
     * @param string $BottomColor The text background color, whose format is the same as that for `FontColor`.  
The default value is an empty string, which means the subtitles will not have a background color.
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
        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("MarginBottom",$param) and $param["MarginBottom"] !== null) {
            $this->MarginBottom = $param["MarginBottom"];
        }

        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontBold",$param) and $param["FontBold"] !== null) {
            $this->FontBold = $param["FontBold"];
        }

        if (array_key_exists("FontItalic",$param) and $param["FontItalic"] !== null) {
            $this->FontItalic = $param["FontItalic"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlign",$param) and $param["FontAlign"] !== null) {
            $this->FontAlign = $param["FontAlign"];
        }

        if (array_key_exists("FontAlignMargin",$param) and $param["FontAlignMargin"] !== null) {
            $this->FontAlignMargin = $param["FontAlignMargin"];
        }

        if (array_key_exists("BorderWidth",$param) and $param["BorderWidth"] !== null) {
            $this->BorderWidth = $param["BorderWidth"];
        }

        if (array_key_exists("BorderColor",$param) and $param["BorderColor"] !== null) {
            $this->BorderColor = $param["BorderColor"];
        }

        if (array_key_exists("BottomColor",$param) and $param["BottomColor"] !== null) {
            $this->BottomColor = $param["BottomColor"];
        }
    }
}
