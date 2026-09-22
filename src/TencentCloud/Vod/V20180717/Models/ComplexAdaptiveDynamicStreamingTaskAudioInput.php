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
 * Input parameter of the multilingual audio stream for an adaptive bitrate streaming task.
 *
 * @method string getFileId() Obtain <p>Media ID of the audio source. The first audio stream in the media source file is always used, while video streams and other audio streams (if any) will be ignored.</p>
 * @method void setFileId(string $FileId) Set <p>Media ID of the audio source. The first audio stream in the media source file is always used, while video streams and other audio streams (if any) will be ignored.</p>
 * @method string getName() Obtain <p>Audio stream name in the output adaptive bitrate stream. Length limit: 16 characters.</p>
 * @method void setName(string $Name) Set <p>Audio stream name in the output adaptive bitrate stream. Length limit: 16 characters.</p>
 * @method string getLanguage() Obtain <p>Language of the audio stream in the output adaptive bitrate stream. Length limit: 16 characters. It must comply with RFC5646.</p>
 * @method void setLanguage(string $Language) Set <p>Language of the audio stream in the output adaptive bitrate stream. Length limit: 16 characters. It must comply with RFC5646.</p>
 * @method string getDefault() Obtain <p>Whether to set as the default audio for adaptive bitrate. Parameter values:</p><li>YES: set as default audio;</li><li>NO: not set as default audio (default value).</li>
 * @method void setDefault(string $Default) Set <p>Whether to set as the default audio for adaptive bitrate. Parameter values:</p><li>YES: set as default audio;</li><li>NO: not set as default audio (default value).</li>
 * @method integer getAudioTrackIdx() Obtain <p>Audio track serial number, indicating which audio track in the audio source to select. Counting begins from 0. The default value is 0, which means selecting the audio track positioned towards the front.</p>
 * @method void setAudioTrackIdx(integer $AudioTrackIdx) Set <p>Audio track serial number, indicating which audio track in the audio source to select. Counting begins from 0. The default value is 0, which means selecting the audio track positioned towards the front.</p>
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string <p>Media ID of the audio source. The first audio stream in the media source file is always used, while video streams and other audio streams (if any) will be ignored.</p>
     */
    public $FileId;

    /**
     * @var string <p>Audio stream name in the output adaptive bitrate stream. Length limit: 16 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Language of the audio stream in the output adaptive bitrate stream. Length limit: 16 characters. It must comply with RFC5646.</p>
     */
    public $Language;

    /**
     * @var string <p>Whether to set as the default audio for adaptive bitrate. Parameter values:</p><li>YES: set as default audio;</li><li>NO: not set as default audio (default value).</li>
     */
    public $Default;

    /**
     * @var integer <p>Audio track serial number, indicating which audio track in the audio source to select. Counting begins from 0. The default value is 0, which means selecting the audio track positioned towards the front.</p>
     */
    public $AudioTrackIdx;

    /**
     * @param string $FileId <p>Media ID of the audio source. The first audio stream in the media source file is always used, while video streams and other audio streams (if any) will be ignored.</p>
     * @param string $Name <p>Audio stream name in the output adaptive bitrate stream. Length limit: 16 characters.</p>
     * @param string $Language <p>Language of the audio stream in the output adaptive bitrate stream. Length limit: 16 characters. It must comply with RFC5646.</p>
     * @param string $Default <p>Whether to set as the default audio for adaptive bitrate. Parameter values:</p><li>YES: set as default audio;</li><li>NO: not set as default audio (default value).</li>
     * @param integer $AudioTrackIdx <p>Audio track serial number, indicating which audio track in the audio source to select. Counting begins from 0. The default value is 0, which means selecting the audio track positioned towards the front.</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("AudioTrackIdx",$param) and $param["AudioTrackIdx"] !== null) {
            $this->AudioTrackIdx = $param["AudioTrackIdx"];
        }
    }
}
