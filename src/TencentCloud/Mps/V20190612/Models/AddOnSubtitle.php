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
 * @method string getType() Obtain <p>Insertion method. Valid values:</p><li>subtitle-stream: Inserts a subtitle track.</li><li>close-caption-708: Encodes CEA-708 subtitles into SEI frames.</li><li>close-caption-608: Encodes CEA-608 subtitles into SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set <p>Insertion method. Valid values:</p><li>subtitle-stream: Inserts a subtitle track.</li><li>close-caption-708: Encodes CEA-708 subtitles into SEI frames.</li><li>close-caption-608: Encodes CEA-608 subtitles into SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaInputInfo getSubtitle() Obtain <p>Subtitle file.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitle(MediaInputInfo $Subtitle) Set <p>Subtitle file.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitleName() Obtain <p>Subtitle name.<br>Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitleName(string $SubtitleName) Set <p>Subtitle name.<br>Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitleLanguage() Obtain <p>Subtitle language, such as eng.</p>
 * @method void setSubtitleLanguage(string $SubtitleLanguage) Set <p>Subtitle language, such as eng.</p>
 * @method string getOutputFormat() Obtain <p>Subtitle output format. Valid values: {&quot;WebVTT&quot;,&quot;TTML&quot;}.<br>Default value: &quot;WebVTT&quot;.</p>
 * @method void setOutputFormat(string $OutputFormat) Set <p>Subtitle output format. Valid values: {&quot;WebVTT&quot;,&quot;TTML&quot;}.<br>Default value: &quot;WebVTT&quot;.</p>
 * @method boolean getDefaultTrack() Obtain <p>Default subtitle track. When set to true, the current subtitle is designated as the default subtitle track. A maximum of 1 default subtitle track can be specified.<br>Default value: false.</p>
 * @method void setDefaultTrack(boolean $DefaultTrack) Set <p>Default subtitle track. When set to true, the current subtitle is designated as the default subtitle track. A maximum of 1 default subtitle track can be specified.<br>Default value: false.</p>
 */
class AddOnSubtitle extends AbstractModel
{
    /**
     * @var string <p>Insertion method. Valid values:</p><li>subtitle-stream: Inserts a subtitle track.</li><li>close-caption-708: Encodes CEA-708 subtitles into SEI frames.</li><li>close-caption-608: Encodes CEA-608 subtitles into SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var MediaInputInfo <p>Subtitle file.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subtitle;

    /**
     * @var string <p>Subtitle name.<br>Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitleName;

    /**
     * @var string <p>Subtitle language, such as eng.</p>
     */
    public $SubtitleLanguage;

    /**
     * @var string <p>Subtitle output format. Valid values: {&quot;WebVTT&quot;,&quot;TTML&quot;}.<br>Default value: &quot;WebVTT&quot;.</p>
     */
    public $OutputFormat;

    /**
     * @var boolean <p>Default subtitle track. When set to true, the current subtitle is designated as the default subtitle track. A maximum of 1 default subtitle track can be specified.<br>Default value: false.</p>
     */
    public $DefaultTrack;

    /**
     * @param string $Type <p>Insertion method. Valid values:</p><li>subtitle-stream: Inserts a subtitle track.</li><li>close-caption-708: Encodes CEA-708 subtitles into SEI frames.</li><li>close-caption-608: Encodes CEA-608 subtitles into SEI frames.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaInputInfo $Subtitle <p>Subtitle file.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubtitleName <p>Subtitle name.<br>Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubtitleLanguage <p>Subtitle language, such as eng.</p>
     * @param string $OutputFormat <p>Subtitle output format. Valid values: {&quot;WebVTT&quot;,&quot;TTML&quot;}.<br>Default value: &quot;WebVTT&quot;.</p>
     * @param boolean $DefaultTrack <p>Default subtitle track. When set to true, the current subtitle is designated as the default subtitle track. A maximum of 1 default subtitle track can be specified.<br>Default value: false.</p>
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

        if (array_key_exists("SubtitleLanguage",$param) and $param["SubtitleLanguage"] !== null) {
            $this->SubtitleLanguage = $param["SubtitleLanguage"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
