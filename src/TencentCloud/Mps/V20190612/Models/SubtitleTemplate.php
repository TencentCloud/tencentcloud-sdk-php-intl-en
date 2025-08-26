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
 * @method string getFontType() Obtain Font type. valid values:.
<li>hei.ttf: simhei.</li>.
<li>song.ttf: simsun.</li>.
<Li>Kai.Ttf (recommend) or simkai.ttf: kaiti.</li>.
<li>msyh.ttf: microsoft yahei</li>.
<li>msyhbd.ttf: microsoft yahei in bold.</li>.
<li>hkjgt.ttf: dynafont king gothic</li>.
<li>dhttx.ttf: dianheitexiti.</li>.
<li>xqgdzt.ttf: xiqueguzidianti</li>.
<li>qpcyt.ttf: smart splice super round body.</li>.
<li>arial.ttf: english only.</li>.
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: specifies the korean language.</li>.
<li>japanese.ttf: specifies the japanese language.</li>.
<li>thai.ttf: specifies the thai language.</li>.
Default: hei.ttf (heiti). note: kaiti is recommended for use with kai.ttf.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFontType(string $FontType) Set Font type. valid values:.
<li>hei.ttf: simhei.</li>.
<li>song.ttf: simsun.</li>.
<Li>Kai.Ttf (recommend) or simkai.ttf: kaiti.</li>.
<li>msyh.ttf: microsoft yahei</li>.
<li>msyhbd.ttf: microsoft yahei in bold.</li>.
<li>hkjgt.ttf: dynafont king gothic</li>.
<li>dhttx.ttf: dianheitexiti.</li>.
<li>xqgdzt.ttf: xiqueguzidianti</li>.
<li>qpcyt.ttf: smart splice super round body.</li>.
<li>arial.ttf: english only.</li>.
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: specifies the korean language.</li>.
<li>japanese.ttf: specifies the japanese language.</li>.
<li>thai.ttf: specifies the thai language.</li>.
Default: hei.ttf (heiti). note: kaiti is recommended for use with kai.ttf.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFontSize() Obtain Font size. Format: Npx, where N is a numerical value. If it is not specified, the font size of the subtitle file applies.
It is 5% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFontSize(string $FontSize) Set Font size. Format: Npx, where N is a numerical value. If it is not specified, the font size of the subtitle file applies.
It is 5% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
 * @method integer getBoardWidth() Obtain Board width. Unit: pixels. Value range: [0,4096].
It is 90% of the source video width by default.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBoardWidth(integer $BoardWidth) Set Board width. Unit: pixels. Value range: [0,4096].
It is 90% of the source video width by default.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBoardHeight() Obtain Board height. Unit: pixels. Value range: [0,4096].
It is 15% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBoardHeight(integer $BoardHeight) Set Board height. Unit: pixels. Value range: [0,4096].
It is 15% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
 * @method float getOutlineWidth() Obtain Stroke width.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutlineWidth(float $OutlineWidth) Set Stroke width.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutlineColor() Obtain Stroke color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutlineColor(string $OutlineColor) Set Stroke color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getOutlineAlpha() Obtain Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutlineAlpha(float $OutlineAlpha) Set Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getShadowWidth() Obtain Shadow width. The value should be a floating-point number in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShadowWidth(float $ShadowWidth) Set Shadow width. The value should be a floating-point number in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShadowColor() Obtain Shadow color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShadowColor(string $ShadowColor) Set Shadow color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getShadowAlpha() Obtain Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShadowAlpha(float $ShadowAlpha) Set Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLineSpacing() Obtain Line spacing. The value should be a positive integer in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineSpacing(integer $LineSpacing) Set Line spacing. The value should be a positive integer in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlignment() Obtain Alignment mode. Valid values: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the number of lines. bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the number of lines.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlignment(string $Alignment) Set Alignment mode. Valid values: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the number of lines. bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the number of lines.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Font type. valid values:.
<li>hei.ttf: simhei.</li>.
<li>song.ttf: simsun.</li>.
<Li>Kai.Ttf (recommend) or simkai.ttf: kaiti.</li>.
<li>msyh.ttf: microsoft yahei</li>.
<li>msyhbd.ttf: microsoft yahei in bold.</li>.
<li>hkjgt.ttf: dynafont king gothic</li>.
<li>dhttx.ttf: dianheitexiti.</li>.
<li>xqgdzt.ttf: xiqueguzidianti</li>.
<li>qpcyt.ttf: smart splice super round body.</li>.
<li>arial.ttf: english only.</li>.
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: specifies the korean language.</li>.
<li>japanese.ttf: specifies the japanese language.</li>.
<li>thai.ttf: specifies the thai language.</li>.
Default: hei.ttf (heiti). note: kaiti is recommended for use with kai.ttf.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FontType;

    /**
     * @var string Font size. Format: Npx, where N is a numerical value. If it is not specified, the font size of the subtitle file applies.
It is 5% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @var integer Board width. Unit: pixels. Value range: [0,4096].
It is 90% of the source video width by default.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BoardWidth;

    /**
     * @var integer Board height. Unit: pixels. Value range: [0,4096].
It is 15% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @var float Stroke width.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutlineWidth;

    /**
     * @var string Stroke color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutlineColor;

    /**
     * @var float Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutlineAlpha;

    /**
     * @var float Shadow width. The value should be a floating-point number in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShadowWidth;

    /**
     * @var string Shadow color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShadowColor;

    /**
     * @var float Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShadowAlpha;

    /**
     * @var integer Line spacing. The value should be a positive integer in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineSpacing;

    /**
     * @var string Alignment mode. Valid values: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the number of lines. bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the number of lines.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alignment;

    /**
     * @param string $Path The URL of the subtitles to add to the video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StreamIndex Specifies the subtitle track for embedding subtitles into the video. the Streamindex parameter takes value starting from 0, where 0 indicates usage of the first subtitle track in the source video. if Path is specified, use Path preferentially. either Path or Streamindex should be specified.

-Note: StreamIndex must match the subtitle track index in the source file. for example, if the subtitle track in the source file is stream#0:3, StreamIndex should be 3. otherwise, task processing failed.


Note: This field may return null, indicating that no valid value can be obtained.
     * @param MediaInputInfo $SubtitleFileInput Input information on the subtitle file to be embedded into the video. Currently, only subtitle files stored in COS are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FontType Font type. valid values:.
<li>hei.ttf: simhei.</li>.
<li>song.ttf: simsun.</li>.
<Li>Kai.Ttf (recommend) or simkai.ttf: kaiti.</li>.
<li>msyh.ttf: microsoft yahei</li>.
<li>msyhbd.ttf: microsoft yahei in bold.</li>.
<li>hkjgt.ttf: dynafont king gothic</li>.
<li>dhttx.ttf: dianheitexiti.</li>.
<li>xqgdzt.ttf: xiqueguzidianti</li>.
<li>qpcyt.ttf: smart splice super round body.</li>.
<li>arial.ttf: english only.</li>.
<li>dinalternate.ttf:DIN Alternate Bold</li>
<li>helveticalt.ttf:Helvetica</li>
<li>helveticains.ttf:Helvetica Inserat</li>
<li>trajanpro.ttf:TrajanPro-Bold</li>
<li>korean.ttf: specifies the korean language.</li>.
<li>japanese.ttf: specifies the japanese language.</li>.
<li>thai.ttf: specifies the thai language.</li>.
Default: hei.ttf (heiti). note: kaiti is recommended for use with kai.ttf.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FontSize Font size. Format: Npx, where N is a numerical value. If it is not specified, the font size of the subtitle file applies.
It is 5% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @param integer $BoardWidth Board width. Unit: pixels. Value range: [0,4096].
It is 90% of the source video width by default.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $BoardHeight Board height. Unit: pixels. Value range: [0,4096].
It is 15% of the source video height by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BoardColor Board color. Format: 0xRRGGBB.
Default value: 0x000000 (black).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $BoardAlpha Subtitle background transparency. Value range: [0, 1].
<li>0: completely transparent.</li>
<li>1: completely opaque.</li>
Default value: 0.8.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $OutlineWidth Stroke width.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutlineColor Stroke color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $OutlineAlpha Stroke transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ShadowWidth Shadow width. The value should be a floating-point number in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShadowColor Shadow color. The value should be a 6-digit hexadecimal RGB value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ShadowAlpha Shadow transparency. The value should be a positive floating-point number in the range of (0, 1].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LineSpacing Line spacing. The value should be a positive integer in the range of [0, 1000].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Alignment Alignment mode. Valid values: top alignment. The top position of subtitles is fixed, while the bottom position changes according to the number of lines. bottom: bottom alignment. The bottom position of subtitles is fixed, while the top position changes according to the number of lines.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
