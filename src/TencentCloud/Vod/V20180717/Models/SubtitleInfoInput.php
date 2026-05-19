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
 * Subtitle suppression input
 *
 * @method string getId() Obtain <p>Subtitle ID.</p>
 * @method void setId(string $Id) Set <p>Subtitle ID.</p>
 * @method string getFontType() Obtain <p>Font type.</p><p>Enumeration value:</p><ul><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li></ul><p>Default value: hei.ttf Heiti</p>
 * @method void setFontType(string $FontType) Set <p>Font type.</p><p>Enumeration value:</p><ul><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li></ul><p>Default value: hei.ttf Heiti</p>
 * @method string getFontSize() Obtain <p>Font size. If not specified, the font size in the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height. If left blank and the subtitle file has no settings, the default is 5% of the source video height.</li></ul>
 * @method void setFontSize(string $FontSize) Set <p>Font size. If not specified, the font size in the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height. If left blank and the subtitle file has no settings, the default is 5% of the source video height.</li></ul>
 * @method string getFontColor() Obtain <p>Font color, format: 0xRRGGBB.</p><p>Default value: 0xFFFFFF (white).</p>
 * @method void setFontColor(string $FontColor) Set <p>Font color, format: 0xRRGGBB.</p><p>Default value: 0xFFFFFF (white).</p>
 * @method float getFontAlpha() Obtain <p>Text opacity. Value ranges from 0 to 1.</p><ul><li>0: completely transparent;</li><li>1: completely opaque</li></ul><p>Default value: 1</p>
 * @method void setFontAlpha(float $FontAlpha) Set <p>Text opacity. Value ranges from 0 to 1.</p><ul><li>0: completely transparent;</li><li>1: completely opaque</li></ul><p>Default value: 1</p>
 * @method string getYPos() Obtain <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height. Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method void setYPos(string $YPos) Set <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height. Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method string getBoardY() Obtain <p>Subtitle background base plate Y-coordinate position. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled.<br>Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method void setBoardY(string $BoardY) Set <p>Subtitle background base plate Y-coordinate position. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled.<br>Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
 * @method string getBoardWidth() Obtain <p>Width of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N is in the range of [0,4096].</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default width is 90% of the source video width.</li></ul>
 * @method void setBoardWidth(string $BoardWidth) Set <p>Width of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N is in the range of [0,4096].</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default width is 90% of the source video width.</li></ul>
 * @method string getBoardHeight() Obtain <p>Height of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N ranges from 0 to 4096.</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</li></ul>
 * @method void setBoardHeight(string $BoardHeight) Set <p>Height of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N ranges from 0 to 4096.</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</li></ul>
 * @method string getBoardColor() Obtain <p>Base plate color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
 * @method void setBoardColor(string $BoardColor) Set <p>Base plate color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
 * @method float getBoardAlpha() Obtain <p>Subtitle background transparency. Value range: [0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 0.8.</p>
 * @method void setBoardAlpha(float $BoardAlpha) Set <p>Subtitle background transparency. Value range: [0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 0.8.</p>
 * @method string getAlignment() Obtain <p>Alignment mode.</p><p>Enumeration values:</p><ul><li>top: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the line count.</li><li>bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the line count.</li></ul><p>Default value: bottom</p>
 * @method void setAlignment(string $Alignment) Set <p>Alignment mode.</p><p>Enumeration values:</p><ul><li>top: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the line count.</li><li>bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the line count.</li></ul><p>Default value: bottom</p>
 * @method string getOutlineWidth() Obtain <p>Stroke width. Floating-point number.</p><ul><li>Pixel: Npx, where N is in the range of [0,1000].</li><li>Percentage: N%, where N ranges from 0 to 100.</li></ul><p>By default if left blank, it is 0.3% of the source video height.</p>
 * @method void setOutlineWidth(string $OutlineWidth) Set <p>Stroke width. Floating-point number.</p><ul><li>Pixel: Npx, where N is in the range of [0,1000].</li><li>Percentage: N%, where N ranges from 0 to 100.</li></ul><p>By default if left blank, it is 0.3% of the source video height.</p>
 * @method string getOutlineColor() Obtain <p>Border color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
 * @method void setOutlineColor(string $OutlineColor) Set <p>Border color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
 * @method float getOutlineAlpha() Obtain <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1</p>
 * @method void setOutlineAlpha(float $OutlineAlpha) Set <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1</p>
 * @method string getShadowWidth() Obtain <p>Shadow width. Floating-point number.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100. No shading by default if left blank.</li></ul>
 * @method void setShadowWidth(string $ShadowWidth) Set <p>Shadow width. Floating-point number.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100. No shading by default if left blank.</li></ul>
 * @method string getShadowColor() Obtain <p>Shadow color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black) when shadow has set.</p>
 * @method void setShadowColor(string $ShadowColor) Set <p>Shadow color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black) when shadow has set.</p>
 * @method float getShadowAlpha() Obtain <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1, completely opaque, with shadow configured.</p>
 * @method void setShadowAlpha(float $ShadowAlpha) Set <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1, completely opaque, with shadow configured.</p>
 * @method string getLineSpacing() Obtain <p>Line spacing. Positive integer.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100.</li></ul><p>Default value: 0</p>
 * @method void setLineSpacing(string $LineSpacing) Set <p>Line spacing. Positive integer.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100.</li></ul><p>Default value: 0</p>
 */
class SubtitleInfoInput extends AbstractModel
{
    /**
     * @var string <p>Subtitle ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Font type.</p><p>Enumeration value:</p><ul><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li></ul><p>Default value: hei.ttf Heiti</p>
     */
    public $FontType;

    /**
     * @var string <p>Font size. If not specified, the font size in the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height. If left blank and the subtitle file has no settings, the default is 5% of the source video height.</li></ul>
     */
    public $FontSize;

    /**
     * @var string <p>Font color, format: 0xRRGGBB.</p><p>Default value: 0xFFFFFF (white).</p>
     */
    public $FontColor;

    /**
     * @var float <p>Text opacity. Value ranges from 0 to 1.</p><ul><li>0: completely transparent;</li><li>1: completely opaque</li></ul><p>Default value: 1</p>
     */
    public $FontAlpha;

    /**
     * @var string <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height. Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     */
    public $YPos;

    /**
     * @var string <p>Subtitle background base plate Y-coordinate position. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled.<br>Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     */
    public $BoardY;

    /**
     * @var string <p>Width of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N is in the range of [0,4096].</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default width is 90% of the source video width.</li></ul>
     */
    public $BoardWidth;

    /**
     * @var string <p>Height of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N ranges from 0 to 4096.</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</li></ul>
     */
    public $BoardHeight;

    /**
     * @var string <p>Base plate color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
     */
    public $BoardColor;

    /**
     * @var float <p>Subtitle background transparency. Value range: [0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 0.8.</p>
     */
    public $BoardAlpha;

    /**
     * @var string <p>Alignment mode.</p><p>Enumeration values:</p><ul><li>top: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the line count.</li><li>bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the line count.</li></ul><p>Default value: bottom</p>
     */
    public $Alignment;

    /**
     * @var string <p>Stroke width. Floating-point number.</p><ul><li>Pixel: Npx, where N is in the range of [0,1000].</li><li>Percentage: N%, where N ranges from 0 to 100.</li></ul><p>By default if left blank, it is 0.3% of the source video height.</p>
     */
    public $OutlineWidth;

    /**
     * @var string <p>Border color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
     */
    public $OutlineColor;

    /**
     * @var float <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1</p>
     */
    public $OutlineAlpha;

    /**
     * @var string <p>Shadow width. Floating-point number.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100. No shading by default if left blank.</li></ul>
     */
    public $ShadowWidth;

    /**
     * @var string <p>Shadow color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black) when shadow has set.</p>
     */
    public $ShadowColor;

    /**
     * @var float <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1, completely opaque, with shadow configured.</p>
     */
    public $ShadowAlpha;

    /**
     * @var string <p>Line spacing. Positive integer.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100.</li></ul><p>Default value: 0</p>
     */
    public $LineSpacing;

    /**
     * @param string $Id <p>Subtitle ID.</p>
     * @param string $FontType <p>Font type.</p><p>Enumeration value:</p><ul><li>hei.ttf: Heiti</li><li>song.ttf: Song Typeface</li><li>kai.ttf (recommended) or simkai.ttf: KaiTi</li><li>msyh.ttf: Microsoft YaHei</li><li>msyhbd.ttf: Microsoft YaHei in bold</li><li>hkjgt.ttf: Hwakangangtai</li><li>dhttx.ttf: Dianheiti Ultra Light</li><li>xqgdzt.ttf: Xique Ancient Dictionary</li><li>qpcyt.ttf: Smart Splice Super Round Body</li><li>arial.ttf: only supports English</li><li>dinalternate.ttf: DIN Alternate Bold</li><li>helveticalt.ttf: Helvetica</li><li>helveticains.ttf: Helvetica Inserat</li><li>trajanpro.ttf: TrajanPro-Bold</li><li>korean.ttf: Korean</li><li>japanese.ttf: Japanese</li><li>thai.ttf: Thai</li><li>roboto.ttf: Roboto</li><li>notosans.ttf: NotoSans</li><li>notosansthai.ttf: Thai NotoSansThai</li><li>sarabun.ttf: Thai Sarabun</li><li>kanit.ttf: Thai Kanit</li><li>charmonman.ttf: Thai Charmonman</li><li>notonaskharabic.ttf: Arabic NotoNaskhArabic</li><li>notosansdevanagari.ttf: India NotoSansDevanagari</li><li>notosanstc.ttf: Cantonese NotoSansTC</li><li>notosanskr.ttf: Korean NotoSansKR</li><li>gothica1.ttf: Korean GothicA1</li><li>nanummyeongjo.ttf: Korean NanumMyeongjo</li><li>notosansjp.ttf: Japanese NotoSansJP</li><li>notoserifjp.ttf: Japanese NotoSerifJP</li><li>shipporimincho.ttf: Japanese ShipporiMincho</li></ul><p>Default value: hei.ttf Heiti</p>
     * @param string $FontSize <p>Font size. If not specified, the font size in the subtitle file applies. Pixel and percentage formats are supported:</p><ul><li>Pixel: Npx, where N ranges from (0,4096].</li><li>Percentage: N%, where N ranges from (0,100]. For example, 10% means the subtitle font size equals 10% of the source video height. If left blank and the subtitle file has no settings, the default is 5% of the source video height.</li></ul>
     * @param string $FontColor <p>Font color, format: 0xRRGGBB.</p><p>Default value: 0xFFFFFF (white).</p>
     * @param float $FontAlpha <p>Text opacity. Value ranges from 0 to 1.</p><ul><li>0: completely transparent;</li><li>1: completely opaque</li></ul><p>Default value: 1</p>
     * @param string $YPos <p>Subtitle Y-coordinate position. Specify this parameter to ignore the built-in coordinates in the subtitle file. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle Y-coordinate = 10% * source video height. Default value: source video height * 4%.<br>Note: The coordinate axis origin is at the bottom of the central axis of the source video, and the subtitle reference point is at the bottom of the central axis of the subtitle. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     * @param string $BoardY <p>Subtitle background base plate Y-coordinate position. Supports pixel and percentage formats:</p><ul><li>Pixel: Npx, where N ranges from [0,4096].</li><li>Percentage: N%, where N ranges from [0,100]. For example, 10% means the subtitle background base plate Y-coordinate = 10% * source video height. If not specified, the subtitle background base plate is disabled.<br>Note: The coordinate axis origin is located at the bottom of the central axis of the source video, and the reference point of the subtitle background base plate is at the bottom of its central axis. Refer to the figure below:<img src="https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png" alt="image"></li></ul>
     * @param string $BoardWidth <p>Width of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N is in the range of [0,4096].</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default width is 90% of the source video width.</li></ul>
     * @param string $BoardHeight <p>Height of the base plate, a positive integer.</p><ul><li>Pixel: Npx, where N ranges from 0 to 4096.</li><li>Percentage: N%, where N ranges from 0 to 100. If background is enabled and this parameter is not specified, the default height is 15% of the source video height.</li></ul>
     * @param string $BoardColor <p>Base plate color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
     * @param float $BoardAlpha <p>Subtitle background transparency. Value range: [0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 0.8.</p>
     * @param string $Alignment <p>Alignment mode.</p><p>Enumeration values:</p><ul><li>top: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the line count.</li><li>bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the line count.</li></ul><p>Default value: bottom</p>
     * @param string $OutlineWidth <p>Stroke width. Floating-point number.</p><ul><li>Pixel: Npx, where N is in the range of [0,1000].</li><li>Percentage: N%, where N ranges from 0 to 100.</li></ul><p>By default if left blank, it is 0.3% of the source video height.</p>
     * @param string $OutlineColor <p>Border color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black).</p>
     * @param float $OutlineAlpha <p>Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1</p>
     * @param string $ShadowWidth <p>Shadow width. Floating-point number.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100. No shading by default if left blank.</li></ul>
     * @param string $ShadowColor <p>Shadow color. Format: 0xRRGGBB.</p><p>Default value: 0x000000 (black) when shadow has set.</p>
     * @param float $ShadowAlpha <p>Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].</p><ul><li>0: completely transparent;</li><li>1: completely opaque.</li></ul><p>Default value: 1, completely opaque, with shadow configured.</p>
     * @param string $LineSpacing <p>Line spacing. Positive integer.</p><ul><li>Pixel: Npx, N value ranges from 0 to 1000.</li><li>Percentage: N%, N value ranges from 0 to 100.</li></ul><p>Default value: 0</p>
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
