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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameters for audio streams in the adaptive bitrate streaming task.
 *
 * @method string getFileId() Obtain Media ID of the input audio file. The first audio stream in the media will be fixed, while video streams and other audio streams (if any) will be ignored.
 * @method void setFileId(string $FileId) Set Media ID of the input audio file. The first audio stream in the media will be fixed, while video streams and other audio streams (if any) will be ignored.
 * @method string getName() Obtain Audio stream name in the output, supporting up to 16 characters.
 * @method void setName(string $Name) Set Audio stream name in the output, supporting up to 16 characters.
 * @method string getLanguage() Obtain The language of the audio stream in the output, supporting up to 16 characters. It must comply with the RFC5646 specification.
 * @method void setLanguage(string $Language) Set The language of the audio stream in the output, supporting up to 16 characters. It must comply with the RFC5646 specification.
 * @method string getDefault() Obtain Whether to set as the default audio for adaptive bitrate streaming.
<li>YES: Set as the default audio;</li>
<li>NO: Not set as the default audio (default value).</li>
 * @method void setDefault(string $Default) Set Whether to set as the default audio for adaptive bitrate streaming.
<li>YES: Set as the default audio;</li>
<li>NO: Not set as the default audio (default value).</li>
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string Media ID of the input audio file. The first audio stream in the media will be fixed, while video streams and other audio streams (if any) will be ignored.
     */
    public $FileId;

    /**
     * @var string Audio stream name in the output, supporting up to 16 characters.
     */
    public $Name;

    /**
     * @var string The language of the audio stream in the output, supporting up to 16 characters. It must comply with the RFC5646 specification.
     */
    public $Language;

    /**
     * @var string Whether to set as the default audio for adaptive bitrate streaming.
<li>YES: Set as the default audio;</li>
<li>NO: Not set as the default audio (default value).</li>
     */
    public $Default;

    /**
     * @param string $FileId Media ID of the input audio file. The first audio stream in the media will be fixed, while video streams and other audio streams (if any) will be ignored.
     * @param string $Name Audio stream name in the output, supporting up to 16 characters.
     * @param string $Language The language of the audio stream in the output, supporting up to 16 characters. It must comply with the RFC5646 specification.
     * @param string $Default Whether to set as the default audio for adaptive bitrate streaming.
<li>YES: Set as the default audio;</li>
<li>NO: Not set as the default audio (default value).</li>
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
    }
}
