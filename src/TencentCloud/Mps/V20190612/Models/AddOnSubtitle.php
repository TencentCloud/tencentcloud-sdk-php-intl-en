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
 * The information of the subtitles to add.
 *
 * @method string getType() Obtain The mode. Valid values:
<li>`subtitle-stream`: Add a subtitle track.</li>
<li>`close-caption-708`: Embed CEA-708 subtitles in SEI frames.</li>
<li>`close-caption-608`: Embed CEA-608 subtitles in SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The mode. Valid values:
<li>`subtitle-stream`: Add a subtitle track.</li>
<li>`close-caption-708`: Embed CEA-708 subtitles in SEI frames.</li>
<li>`close-caption-608`: Embed CEA-608 subtitles in SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaInputInfo getSubtitle() Obtain The subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitle(MediaInputInfo $Subtitle) Set The subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitleName() Obtain Subtitle name.
Note: supports Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and parentheses. Max 64 characters.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubtitleName(string $SubtitleName) Set Subtitle name.
Note: supports Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and parentheses. Max 64 characters.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOutputFormat() Obtain Output format of the subtitle. valid values: "WebVTT", "TTML".
Default value: "WebVTT".
 * @method void setOutputFormat(string $OutputFormat) Set Output format of the subtitle. valid values: "WebVTT", "TTML".
Default value: "WebVTT".
 * @method boolean getDefaultTrack() Obtain Default subtitle track. specifies the current subtitle as the default track when true. a maximum of 1 default subtitle track can be specified.
Default value: `false`.
 * @method void setDefaultTrack(boolean $DefaultTrack) Set Default subtitle track. specifies the current subtitle as the default track when true. a maximum of 1 default subtitle track can be specified.
Default value: `false`.
 */
class AddOnSubtitle extends AbstractModel
{
    /**
     * @var string The mode. Valid values:
<li>`subtitle-stream`: Add a subtitle track.</li>
<li>`close-caption-708`: Embed CEA-708 subtitles in SEI frames.</li>
<li>`close-caption-608`: Embed CEA-608 subtitles in SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var MediaInputInfo The subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subtitle;

    /**
     * @var string Subtitle name.
Note: supports Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and parentheses. Max 64 characters.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubtitleName;

    /**
     * @var string Output format of the subtitle. valid values: "WebVTT", "TTML".
Default value: "WebVTT".
     */
    public $OutputFormat;

    /**
     * @var boolean Default subtitle track. specifies the current subtitle as the default track when true. a maximum of 1 default subtitle track can be specified.
Default value: `false`.
     */
    public $DefaultTrack;

    /**
     * @param string $Type The mode. Valid values:
<li>`subtitle-stream`: Add a subtitle track.</li>
<li>`close-caption-708`: Embed CEA-708 subtitles in SEI frames.</li>
<li>`close-caption-608`: Embed CEA-608 subtitles in SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaInputInfo $Subtitle The subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubtitleName Subtitle name.
Note: supports Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and parentheses. Max 64 characters.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OutputFormat Output format of the subtitle. valid values: "WebVTT", "TTML".
Default value: "WebVTT".
     * @param boolean $DefaultTrack Default subtitle track. specifies the current subtitle as the default track when true. a maximum of 1 default subtitle track can be specified.
Default value: `false`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new MediaInputInfo();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
