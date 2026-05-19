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
 * Input parameter of multilingual audio stream for adaptive bitrate streaming.
 *
 * @method string getFileId() Obtain <p>Media ID of the audio source. The first audio stream in the media source file is used by default. The video stream and other audio streams (if any) will be ignored.</p>
 * @method void setFileId(string $FileId) Set <p>Media ID of the audio source. The first audio stream in the media source file is used by default. The video stream and other audio streams (if any) will be ignored.</p>
 * @method string getName() Obtain <p>Name of the audio stream in the output adaptive bitrate stream. Length limit is 16 characters.</p>
 * @method void setName(string $Name) Set <p>Name of the audio stream in the output adaptive bitrate stream. Length limit is 16 characters.</p>
 * @method string getLanguage() Obtain <p>The language of the audio stream in the output adaptive bitrate stream, with a length limit of 16 characters. It must comply with RFC5646.</p>
 * @method void setLanguage(string $Language) Set <p>The language of the audio stream in the output adaptive bitrate stream, with a length limit of 16 characters. It must comply with RFC5646.</p>
 * @method string getDefault() Obtain <p>Set as default audio for adaptive bitrate. Value:</p><li>YES: Set as default audio;</li><li>NO: Do not set as default audio (default value).</li>
 * @method void setDefault(string $Default) Set <p>Set as default audio for adaptive bitrate. Value:</p><li>YES: Set as default audio;</li><li>NO: Do not set as default audio (default value).</li>
 * @method integer getAudioTrackIdx() Obtain <p>Audio track serial number, which means selecting the nth audio track in the audio source, counting begins from 0. Default value is 0, means selecting the audio track positioned towards the front.</p>
 * @method void setAudioTrackIdx(integer $AudioTrackIdx) Set <p>Audio track serial number, which means selecting the nth audio track in the audio source, counting begins from 0. Default value is 0, means selecting the audio track positioned towards the front.</p>
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string <p>Media ID of the audio source. The first audio stream in the media source file is used by default. The video stream and other audio streams (if any) will be ignored.</p>
     */
    public $FileId;

    /**
     * @var string <p>Name of the audio stream in the output adaptive bitrate stream. Length limit is 16 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>The language of the audio stream in the output adaptive bitrate stream, with a length limit of 16 characters. It must comply with RFC5646.</p>
     */
    public $Language;

    /**
     * @var string <p>Set as default audio for adaptive bitrate. Value:</p><li>YES: Set as default audio;</li><li>NO: Do not set as default audio (default value).</li>
     */
    public $Default;

    /**
     * @var integer <p>Audio track serial number, which means selecting the nth audio track in the audio source, counting begins from 0. Default value is 0, means selecting the audio track positioned towards the front.</p>
     */
    public $AudioTrackIdx;

    /**
     * @param string $FileId <p>Media ID of the audio source. The first audio stream in the media source file is used by default. The video stream and other audio streams (if any) will be ignored.</p>
     * @param string $Name <p>Name of the audio stream in the output adaptive bitrate stream. Length limit is 16 characters.</p>
     * @param string $Language <p>The language of the audio stream in the output adaptive bitrate stream, with a length limit of 16 characters. It must comply with RFC5646.</p>
     * @param string $Default <p>Set as default audio for adaptive bitrate. Value:</p><li>YES: Set as default audio;</li><li>NO: Do not set as default audio (default value).</li>
     * @param integer $AudioTrackIdx <p>Audio track serial number, which means selecting the nth audio track in the audio source, counting begins from 0. Default value is 0, means selecting the audio track positioned towards the front.</p>
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
