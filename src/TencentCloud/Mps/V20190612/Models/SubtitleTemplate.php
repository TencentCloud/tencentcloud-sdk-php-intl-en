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
 * The subtitle settings.
 *
 * @method string getPath() Obtain The URL of the subtitles to add to the video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set The URL of the subtitles to add to the video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStreamIndex() Obtain Specifies the subtitle track for embedding subtitles into the video. the Streamindex parameter takes value starting from 0, where 0 indicates usage of the first subtitle track in the source video. if Path is specified, use Path preferentially. either Path or Streamindex should be specified.

-Note: StreamIndex must match the subtitle track index in the source file. for example, if the subtitle track in the source file is stream#0:3, StreamIndex should be 3. otherwise, task processing failed.


Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStreamIndex(integer $StreamIndex) Set Specifies the subtitle track for embedding subtitles into the video. the Streamindex parameter takes value starting from 0, where 0 indicates usage of the first subtitle track in the source video. if Path is specified, use Path preferentially. either Path or Streamindex should be specified.

-Note: StreamIndex must match the subtitle track index in the source file. for example, if the subtitle track in the source file is stream#0:3, StreamIndex should be 3. otherwise, task processing failed.


Note: This field may return null, indicating that no valid value can be obtained.
 * @method MediaInputInfo getSubtitleFileInput() Obtain Input information on the subtitle file to be embedded into the video. Currently, only subtitle files stored in COS are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitleFileInput(MediaInputInfo $SubtitleFileInput) Set Input information on the subtitle file to be embedded into the video. Currently, only subtitle files stored in COS are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaInputInfo getFontFileInput() Obtain Input information of the font file of the burned-in subtitle. URL and COS are supported. If both are specified, the URL information is used. If FontFileInput is specified, FontFileInput takes precedence over FontType.

 * @method void setFontFileInput(MediaInputInfo $FontFileInput) Set Input information of the font file of the burned-in subtitle. URL and COS are supported. If both are specified, the URL information is used. If FontFileInput is specified, FontFileInput takes precedence over FontType.

 * @method string getFontType() Obtain Font type. Valid values:
<li>hei.ttf: SimHei</li>
<li>song.ttf: SimSun.</li>
<li>kai.ttf (recommend) or simkai.ttf: KaiTi.</li>
<li>msyh.ttf: Microsoft YaHei.</li>
<li>msyhbd.ttf: Microsoft YaHei Bold.</li>
<li>hkjgt.ttf: DynaFont King Gothic.</li>
<li>dhttx.ttf: DianHei Extra Light.</li>
<li>xqgdzt.ttf: XiQue GuZiDian.</li>
<li>qpcyt.ttf: Smart Splice Super Round Body</li>
<li>arial.ttf: English only.</li>
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: Korean.</li>
<li>japanese.ttf: Japanese.</li>
<li>thai.ttf: Thai.</li>
<li>roboto.ttf:Roboto</li>
<li>notosans.ttf:NotoSans</li>
<li>notosansthai.ttf: Thai NotoSansThai</li>
<li>sarabun.ttf: Thai Sarabun</li>
<li>kanit.ttf: Thai Kanit</li>
<li>charmonman.ttf: Thai Charmonman.</li>
<li>notonaskharabic.ttf: Arabic NotoNaskhArabic.</li>
<li>notosansdevanagari.ttf: NotoSansDevanagari for India.</li>
<li>notosanstc.ttf: Cantonese Source Han Sans NotoSansTC</li>
<li>notosanskr.ttf: Korean NotoSansKR.</li>
<li>gothica1.ttf: Korean GothicA1.</li>
<li>nanummyeongjo.ttf: Korean NanumMyeongjo.</li>
<li>notosansjp.ttf: Japanese NotoSansJP.</li>
<li>notoserifjp.ttf: Japanese NotoSerifJP.</li>
<li>shipporimincho.ttf: Japanese ShipporiMincho.</li>
Default value: hei.ttf.
<br>Note:
<li>kai.ttf is recommended for SimKai.</li>
<li>FontFileInput takes precedence when specified.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFontType(string $FontType) Set Font type. Valid values:
<li>hei.ttf: SimHei</li>
<li>song.ttf: SimSun.</li>
<li>kai.ttf (recommend) or simkai.ttf: KaiTi.</li>
<li>msyh.ttf: Microsoft YaHei.</li>
<li>msyhbd.ttf: Microsoft YaHei Bold.</li>
<li>hkjgt.ttf: DynaFont King Gothic.</li>
<li>dhttx.ttf: DianHei Extra Light.</li>
<li>xqgdzt.ttf: XiQue GuZiDian.</li>
<li>qpcyt.ttf: Smart Splice Super Round Body</li>
<li>arial.ttf: English only.</li>
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: Korean.</li>
<li>japanese.ttf: Japanese.</li>
<li>thai.ttf: Thai.</li>
<li>roboto.ttf:Roboto</li>
<li>notosans.ttf:NotoSans</li>
<li>notosansthai.ttf: Thai NotoSansThai</li>
<li>sarabun.ttf: Thai Sarabun</li>
<li>kanit.ttf: Thai Kanit</li>
<li>charmonman.ttf: Thai Charmonman.</li>
<li>notonaskharabic.ttf: Arabic NotoNaskhArabic.</li>
<li>notosansdevanagari.ttf: NotoSansDevanagari for India.</li>
<li>notosanstc.ttf: Cantonese Source Han Sans NotoSansTC</li>
<li>notosanskr.ttf: Korean NotoSansKR.</li>
<li>gothica1.ttf: Korean GothicA1.</li>
<li>nanummyeongjo.ttf: Korean NanumMyeongjo.</li>
<li>notosansjp.ttf: Japanese NotoSansJP.</li>
<li>notoserifjp.ttf: Japanese NotoSerifJP.</li>
<li>shipporimincho.ttf: Japanese ShipporiMincho.</li>
Default value: hei.ttf.
<br>Note:
<li>kai.ttf is recommended for SimKai.</li>
<li>FontFileInput takes precedence when specified.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFontSize() Obtain Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:

- Pixel: Npx. Value range of N: (0,4096].
- Percentage: N%. Value range of N: (0,100]. For example, 10% means the subtitle font size is 10% of the source video height.

The default size is 5% of the source video height if this parameter is not specified or the font size is not configured in the subtitle file.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFontSize(string $FontSize) Set Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:

- Pixel: Npx. Value range of N: (0,4096].
- Percentage: N%. Value range of N: (0,100]. For example, 10% means the subtitle font size is 10% of the source video height.

The default size is 5% of the source video height if this parameter is not specified or the font size is not configured in the subtitle file.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFontColor() Obtain Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFontColor(string $FontColor) Set Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getFontAlpha() Obtain The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFontAlpha(float $FontAlpha) Set The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getYPos() Obtain Subtitle position on the Y-axis. If this parameter is specified, the built-in coordinates in the subtitle file will be ignored. The pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle position on the Y-axis is 10% of the video height.

By default, the position is 4% of the source video height.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setYPos(string $YPos) Set Subtitle position on the Y-axis. If this parameter is specified, the built-in coordinates in the subtitle file will be ignored. The pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle position on the Y-axis is 10% of the video height.

By default, the position is 4% of the source video height.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBoardY() Obtain Subtitle background position on the Y-axis. Pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle background position on the Y-axis is 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle background is at the bottom of the central axis of the source video, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBoardY(string $BoardY) Set Subtitle background position on the Y-axis. Pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle background position on the Y-axis is 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle background is at the bottom of the central axis of the source video, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBoardWidth() Obtain Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default width is 90% of the source video width.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBoardWidth(integer $BoardWidth) Set Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default width is 90% of the source video width.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBoardHeight() Obtain Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default height is 15% of the source video height.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBoardHeight(integer $BoardHeight) Set Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default height is 15% of the source video height.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBoardColor() Obtain Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBoardColor(string $BoardColor) Set Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getBoardAlpha() Obtain Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBoardAlpha(float $BoardAlpha) Set Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getOutlineWidth() Obtain Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, the default width is 0.3% of the source video height.

 * @method void setOutlineWidth(float $OutlineWidth) Set Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, the default width is 0.3% of the source video height.

 * @method string getOutlineColor() Obtain Stroke color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black.

 * @method void setOutlineColor(string $OutlineColor) Set Stroke color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black.

 * @method float getOutlineAlpha() Obtain Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

 * @method void setOutlineAlpha(float $OutlineAlpha) Set Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

 * @method float getShadowWidth() Obtain Shadow width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, no shadow is applied by default.

 * @method void setShadowWidth(float $ShadowWidth) Set Shadow width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, no shadow is applied by default.

 * @method string getShadowColor() Obtain Shadow color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black (with shadow configured).

 * @method void setShadowColor(string $ShadowColor) Set Shadow color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black (with shadow configured).

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

 * @method integer getLineSpacingUnit() Obtain Default value is 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.

 * @method void setLineSpacingUnit(integer $LineSpacingUnit) Set Default value is 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.
 */
class SubtitleTemplate extends AbstractModel
{
    /**
     * @var string The URL of the subtitles to add to the video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var integer Specifies the subtitle track for embedding subtitles into the video. the Streamindex parameter takes value starting from 0, where 0 indicates usage of the first subtitle track in the source video. if Path is specified, use Path preferentially. either Path or Streamindex should be specified.

-Note: StreamIndex must match the subtitle track index in the source file. for example, if the subtitle track in the source file is stream#0:3, StreamIndex should be 3. otherwise, task processing failed.


Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StreamIndex;

    /**
     * @var MediaInputInfo Input information on the subtitle file to be embedded into the video. Currently, only subtitle files stored in COS are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitleFileInput;

    /**
     * @var MediaInputInfo Input information of the font file of the burned-in subtitle. URL and COS are supported. If both are specified, the URL information is used. If FontFileInput is specified, FontFileInput takes precedence over FontType.

     */
    public $FontFileInput;

    /**
     * @var string Font type. Valid values:
<li>hei.ttf: SimHei</li>
<li>song.ttf: SimSun.</li>
<li>kai.ttf (recommend) or simkai.ttf: KaiTi.</li>
<li>msyh.ttf: Microsoft YaHei.</li>
<li>msyhbd.ttf: Microsoft YaHei Bold.</li>
<li>hkjgt.ttf: DynaFont King Gothic.</li>
<li>dhttx.ttf: DianHei Extra Light.</li>
<li>xqgdzt.ttf: XiQue GuZiDian.</li>
<li>qpcyt.ttf: Smart Splice Super Round Body</li>
<li>arial.ttf: English only.</li>
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: Korean.</li>
<li>japanese.ttf: Japanese.</li>
<li>thai.ttf: Thai.</li>
<li>roboto.ttf:Roboto</li>
<li>notosans.ttf:NotoSans</li>
<li>notosansthai.ttf: Thai NotoSansThai</li>
<li>sarabun.ttf: Thai Sarabun</li>
<li>kanit.ttf: Thai Kanit</li>
<li>charmonman.ttf: Thai Charmonman.</li>
<li>notonaskharabic.ttf: Arabic NotoNaskhArabic.</li>
<li>notosansdevanagari.ttf: NotoSansDevanagari for India.</li>
<li>notosanstc.ttf: Cantonese Source Han Sans NotoSansTC</li>
<li>notosanskr.ttf: Korean NotoSansKR.</li>
<li>gothica1.ttf: Korean GothicA1.</li>
<li>nanummyeongjo.ttf: Korean NanumMyeongjo.</li>
<li>notosansjp.ttf: Japanese NotoSansJP.</li>
<li>notoserifjp.ttf: Japanese NotoSerifJP.</li>
<li>shipporimincho.ttf: Japanese ShipporiMincho.</li>
Default value: hei.ttf.
<br>Note:
<li>kai.ttf is recommended for SimKai.</li>
<li>FontFileInput takes precedence when specified.</li>

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FontType;

    /**
     * @var string Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:

- Pixel: Npx. Value range of N: (0,4096].
- Percentage: N%. Value range of N: (0,100]. For example, 10% means the subtitle font size is 10% of the source video height.

The default size is 5% of the source video height if this parameter is not specified or the font size is not configured in the subtitle file.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FontSize;

    /**
     * @var string Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FontColor;

    /**
     * @var float The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FontAlpha;

    /**
     * @var string Subtitle position on the Y-axis. If this parameter is specified, the built-in coordinates in the subtitle file will be ignored. The pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle position on the Y-axis is 10% of the video height.

By default, the position is 4% of the source video height.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $YPos;

    /**
     * @var string Subtitle background position on the Y-axis. Pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle background position on the Y-axis is 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle background is at the bottom of the central axis of the source video, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BoardY;

    /**
     * @var integer Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default width is 90% of the source video width.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BoardWidth;

    /**
     * @var integer Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default height is 15% of the source video height.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BoardHeight;

    /**
     * @var string Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BoardColor;

    /**
     * @var float Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BoardAlpha;

    /**
     * @var float Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, the default width is 0.3% of the source video height.

     */
    public $OutlineWidth;

    /**
     * @var string Stroke color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black.

     */
    public $OutlineColor;

    /**
     * @var float Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

     */
    public $OutlineAlpha;

    /**
     * @var float Shadow width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, no shadow is applied by default.

     */
    public $ShadowWidth;

    /**
     * @var string Shadow color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black (with shadow configured).

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
     * @var integer Default value is 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.

     */
    public $LineSpacingUnit;

    /**
     * @param string $Path The URL of the subtitles to add to the video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StreamIndex Specifies the subtitle track for embedding subtitles into the video. the Streamindex parameter takes value starting from 0, where 0 indicates usage of the first subtitle track in the source video. if Path is specified, use Path preferentially. either Path or Streamindex should be specified.

-Note: StreamIndex must match the subtitle track index in the source file. for example, if the subtitle track in the source file is stream#0:3, StreamIndex should be 3. otherwise, task processing failed.


Note: This field may return null, indicating that no valid value can be obtained.
     * @param MediaInputInfo $SubtitleFileInput Input information on the subtitle file to be embedded into the video. Currently, only subtitle files stored in COS are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaInputInfo $FontFileInput Input information of the font file of the burned-in subtitle. URL and COS are supported. If both are specified, the URL information is used. If FontFileInput is specified, FontFileInput takes precedence over FontType.

     * @param string $FontType Font type. Valid values:
<li>hei.ttf: SimHei</li>
<li>song.ttf: SimSun.</li>
<li>kai.ttf (recommend) or simkai.ttf: KaiTi.</li>
<li>msyh.ttf: Microsoft YaHei.</li>
<li>msyhbd.ttf: Microsoft YaHei Bold.</li>
<li>hkjgt.ttf: DynaFont King Gothic.</li>
<li>dhttx.ttf: DianHei Extra Light.</li>
<li>xqgdzt.ttf: XiQue GuZiDian.</li>
<li>qpcyt.ttf: Smart Splice Super Round Body</li>
<li>arial.ttf: English only.</li>
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: Korean.</li>
<li>japanese.ttf: Japanese.</li>
<li>thai.ttf: Thai.</li>
<li>roboto.ttf:Roboto</li>
<li>notosans.ttf:NotoSans</li>
<li>notosansthai.ttf: Thai NotoSansThai</li>
<li>sarabun.ttf: Thai Sarabun</li>
<li>kanit.ttf: Thai Kanit</li>
<li>charmonman.ttf: Thai Charmonman.</li>
<li>notonaskharabic.ttf: Arabic NotoNaskhArabic.</li>
<li>notosansdevanagari.ttf: NotoSansDevanagari for India.</li>
<li>notosanstc.ttf: Cantonese Source Han Sans NotoSansTC</li>
<li>notosanskr.ttf: Korean NotoSansKR.</li>
<li>gothica1.ttf: Korean GothicA1.</li>
<li>nanummyeongjo.ttf: Korean NanumMyeongjo.</li>
<li>notosansjp.ttf: Japanese NotoSansJP.</li>
<li>notoserifjp.ttf: Japanese NotoSerifJP.</li>
<li>shipporimincho.ttf: Japanese ShipporiMincho.</li>
Default value: hei.ttf.
<br>Note:
<li>kai.ttf is recommended for SimKai.</li>
<li>FontFileInput takes precedence when specified.</li>

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FontSize Font size. If not specified, the font size of the subtitle file applies. Pixel and percentage formats are supported:

- Pixel: Npx. Value range of N: (0,4096].
- Percentage: N%. Value range of N: (0,100]. For example, 10% means the subtitle font size is 10% of the source video height.

The default size is 5% of the source video height if this parameter is not specified or the font size is not configured in the subtitle file.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FontColor Font color. Format: 0xRRGGBB. Default value: 0xFFFFFF (white).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $FontAlpha The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $YPos Subtitle position on the Y-axis. If this parameter is specified, the built-in coordinates in the subtitle file will be ignored. The pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle position on the Y-axis is 10% of the video height.

By default, the position is 4% of the source video height.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the subtitle reference position is at the bottom of the central axis of the subtitles, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BoardY Subtitle background position on the Y-axis. Pixel and percentage formats are supported.

 - Pixel: Npx. Value range of N: [0,4096].
 - Percentage: N%. Value range of N: [0,100]. For example, 10% indicates that the subtitle background position on the Y-axis is 10% of the video height.

If this parameter is not specified, the subtitle background is disabled.
Note: The origin of the coordinate axes is at the bottom of the central axis of the source video, and the reference position of the subtitle background is at the bottom of the central axis of the source video, as shown in the figure below.
![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/mps-demo/102_ai_subtitle/subtitle_style.png)

Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $BoardWidth Background width. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default width is 90% of the source video width.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BoardHeight Background height. The value should be a positive integer.
- Value range for pixels: [0,4096].
- Value range for percentages: [0, 100].
If background is enabled and this parameter is not specified, the default height is 15% of the source video height.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BoardColor Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $BoardAlpha Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $OutlineWidth Stroke width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, the default width is 0.3% of the source video height.

     * @param string $OutlineColor Stroke color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black.

     * @param float $OutlineAlpha Stroke transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque.

     * @param float $ShadowWidth Shadow width. The value should be a floating-point number.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100].
If this is not specified, no shadow is applied by default.

     * @param string $ShadowColor Shadow color. The value should be a 6-digit hexadecimal RGB value. If this is not specified, the default color is black (with shadow configured).

     * @param float $ShadowAlpha Shadow transparency. The value should be a positive floating-point number in the range of (0, 1]. If this is not specified, the default value is 1, which means completely opaque (with shadow configured).

     * @param integer $LineSpacing Line spacing. The value should be a positive integer.
- Value range for pixels: [0, 1000].
- Value range for percentages: [0, 100]. If this is not specified, the default value is 0.

     * @param string $Alignment Alignment mode. Valid values: top: The top position of the subtitle is fixed, while the bottom position changes according to the number of lines. bottom: The bottom position of the subtitle is fixed, while the top position changes according to the number of lines. If this is not specified, bottom alignment is used by default.

     * @param integer $BoardWidthUnit Default value is 0. If this is set to 1, the value of BoardWidth is a percentage based on the video width.

     * @param integer $BoardHeightUnit Default value is 0. If this is set to 1, the value of BoardHeight is a percentage based on the video height.

     * @param integer $OutlineWidthUnit Default value is 0. If this is set to 1, the value of OutlineWidth is a percentage based on the video height.

     * @param integer $ShadowWidthUnit Default value is 0. If this is set to 1, the value of ShadowWidth is a percentage based on the video height.

     * @param integer $LineSpacingUnit Default value is 0. If this is set to 1, the value of LineSpacing is a percentage based on the video height.
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
