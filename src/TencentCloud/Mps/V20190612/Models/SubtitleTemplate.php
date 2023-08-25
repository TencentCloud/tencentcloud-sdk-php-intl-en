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
 * The subtitle settings.
 *
 * @method string getPath() Obtain The URL of the subtitles to add to the video.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set The URL of the subtitles to add to the video.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getStreamIndex() Obtain The subtitle track to add to the video. If both `Path` and `StreamIndex` are specified, `Path` will be used. You need to specify at least one of the two parameters.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStreamIndex(integer $StreamIndex) Set The subtitle track to add to the video. If both `Path` and `StreamIndex` are specified, `Path` will be used. You need to specify at least one of the two parameters.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getFontType() Obtain The font. Valid values:
<li>`hei.ttf`: Heiti.</li>
<li>`song.ttf`: Songti.</li>
<li>`simkai.ttf`: Kaiti.</li>
<li>`arial.ttf`: Arial.</li>
The default is `hei.ttf`.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFontType(string $FontType) Set The font. Valid values:
<li>`hei.ttf`: Heiti.</li>
<li>`song.ttf`: Songti.</li>
<li>`simkai.ttf`: Kaiti.</li>
<li>`arial.ttf`: Arial.</li>
The default is `hei.ttf`.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getFontSize() Obtain The font size (pixels). If this is not specified, the font size in the subtitle file will be used.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFontSize(string $FontSize) Set The font size (pixels). If this is not specified, the font size in the subtitle file will be used.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getFontColor() Obtain The font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFontColor(string $FontColor) Set The font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method float getFontAlpha() Obtain The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFontAlpha(float $FontAlpha) Set The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class SubtitleTemplate extends AbstractModel
{
    /**
     * @var string The URL of the subtitles to add to the video.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var integer The subtitle track to add to the video. If both `Path` and `StreamIndex` are specified, `Path` will be used. You need to specify at least one of the two parameters.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $StreamIndex;

    /**
     * @var string The font. Valid values:
<li>`hei.ttf`: Heiti.</li>
<li>`song.ttf`: Songti.</li>
<li>`simkai.ttf`: Kaiti.</li>
<li>`arial.ttf`: Arial.</li>
The default is `hei.ttf`.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FontType;

    /**
     * @var string The font size (pixels). If this is not specified, the font size in the subtitle file will be used.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FontSize;

    /**
     * @var string The font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FontColor;

    /**
     * @var float The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FontAlpha;

    /**
     * @param string $Path The URL of the subtitles to add to the video.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $StreamIndex The subtitle track to add to the video. If both `Path` and `StreamIndex` are specified, `Path` will be used. You need to specify at least one of the two parameters.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $FontType The font. Valid values:
<li>`hei.ttf`: Heiti.</li>
<li>`song.ttf`: Songti.</li>
<li>`simkai.ttf`: Kaiti.</li>
<li>`arial.ttf`: Arial.</li>
The default is `hei.ttf`.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $FontSize The font size (pixels). If this is not specified, the font size in the subtitle file will be used.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $FontColor The font color in 0xRRGGBB format. Default value: 0xFFFFFF (white).
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param float $FontAlpha The text transparency. Value range: 0-1.
<li>`0`: Fully transparent.</li>
<li>`1`: Fully opaque.</li>
Default value: 1.
Note: This field may return·null, indicating that no valid values can be obtained.
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
    }
}
