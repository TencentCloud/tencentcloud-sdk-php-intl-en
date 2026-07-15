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
 * External audio.
 *
 * @method MediaInputInfo getInputInfo() Obtain <p>Audio file input information. Note: (1) Supported audio stream encoding formats: AAC, AC3, EAC3, FLAC, Opus, and MP3. (2) If the segment type set in the adaptive bitrate streaming template is TS, the audio stream encoding format cannot be FLAC.</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set <p>Audio file input information. Note: (1) Supported audio stream encoding formats: AAC, AC3, EAC3, FLAC, Opus, and MP3. (2) If the segment type set in the adaptive bitrate streaming template is TS, the audio stream encoding format cannot be FLAC.</p>
 * @method string getAudioName() Obtain <p>Audio track name, such as Chinese or English. Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
 * @method void setAudioName(string $AudioName) Set <p>Audio track name, such as Chinese or English. Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
 * @method string getAudioLanguage() Obtain <p>Audio track language, such as chi or eng. This follows the ISO 639-2 standard.</p>
 * @method void setAudioLanguage(string $AudioLanguage) Set <p>Audio track language, such as chi or eng. This follows the ISO 639-2 standard.</p>
 * @method boolean getDefaultTrack() Obtain <p>Default audio track. When set to true, the current audio is designated as the default audio track. A maximum of 1 default audio track can be specified.</p><p>Default value: false.</p>
 * @method void setDefaultTrack(boolean $DefaultTrack) Set <p>Default audio track. When set to true, the current audio is designated as the default audio track. A maximum of 1 default audio track can be specified.</p><p>Default value: false.</p>
 */
class AddOnAudio extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>Audio file input information. Note: (1) Supported audio stream encoding formats: AAC, AC3, EAC3, FLAC, Opus, and MP3. (2) If the segment type set in the adaptive bitrate streaming template is TS, the audio stream encoding format cannot be FLAC.</p>
     */
    public $InputInfo;

    /**
     * @var string <p>Audio track name, such as Chinese or English. Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
     */
    public $AudioName;

    /**
     * @var string <p>Audio track language, such as chi or eng. This follows the ISO 639-2 standard.</p>
     */
    public $AudioLanguage;

    /**
     * @var boolean <p>Default audio track. When set to true, the current audio is designated as the default audio track. A maximum of 1 default audio track can be specified.</p><p>Default value: false.</p>
     */
    public $DefaultTrack;

    /**
     * @param MediaInputInfo $InputInfo <p>Audio file input information. Note: (1) Supported audio stream encoding formats: AAC, AC3, EAC3, FLAC, Opus, and MP3. (2) If the segment type set in the adaptive bitrate streaming template is TS, the audio stream encoding format cannot be FLAC.</p>
     * @param string $AudioName <p>Audio track name, such as Chinese or English. Note: Only Chinese characters, letters, digits, spaces, underscores (_), hyphens (-), periods (.), and brackets are supported. The length cannot exceed 64 characters.</p>
     * @param string $AudioLanguage <p>Audio track language, such as chi or eng. This follows the ISO 639-2 standard.</p>
     * @param boolean $DefaultTrack <p>Default audio track. When set to true, the current audio is designated as the default audio track. A maximum of 1 default audio track can be specified.</p><p>Default value: false.</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("AudioName",$param) and $param["AudioName"] !== null) {
            $this->AudioName = $param["AudioName"];
        }

        if (array_key_exists("AudioLanguage",$param) and $param["AudioLanguage"] !== null) {
            $this->AudioLanguage = $param["AudioLanguage"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
