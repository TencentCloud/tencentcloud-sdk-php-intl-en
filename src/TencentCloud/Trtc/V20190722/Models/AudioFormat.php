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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Format of TTS audio output.
 *
 * @method string getFormat() Obtain Generated audio format.

-TextToSpeechSSE streaming API.

Supports pcm. default: pcm.

-TextToSpeech non-streaming API.

Supports pcm, wav, mp3. default: pcm.
 * @method void setFormat(string $Format) Set Generated audio format.

-TextToSpeechSSE streaming API.

Supports pcm. default: pcm.

-TextToSpeech non-streaming API.

Supports pcm, wav, mp3. default: pcm.
 * @method integer getSampleRate() Obtain Generated audio sample rate. default 24000.
Selectable.
- 16000
- 24000 
 * @method void setSampleRate(integer $SampleRate) Set Generated audio sample rate. default 24000.
Selectable.
- 16000
- 24000 
 * @method integer getBitrate() Obtain MP3 bitrate (kbps), only applicable to mp3 format. can choose: `64`, `128`, `192`, `256`. default: `128`.
 * @method void setBitrate(integer $Bitrate) Set MP3 bitrate (kbps), only applicable to mp3 format. can choose: `64`, `128`, `192`, `256`. default: `128`.
 */
class AudioFormat extends AbstractModel
{
    /**
     * @var string Generated audio format.

-TextToSpeechSSE streaming API.

Supports pcm. default: pcm.

-TextToSpeech non-streaming API.

Supports pcm, wav, mp3. default: pcm.
     */
    public $Format;

    /**
     * @var integer Generated audio sample rate. default 24000.
Selectable.
- 16000
- 24000 
     */
    public $SampleRate;

    /**
     * @var integer MP3 bitrate (kbps), only applicable to mp3 format. can choose: `64`, `128`, `192`, `256`. default: `128`.
     */
    public $Bitrate;

    /**
     * @param string $Format Generated audio format.

-TextToSpeechSSE streaming API.

Supports pcm. default: pcm.

-TextToSpeech non-streaming API.

Supports pcm, wav, mp3. default: pcm.
     * @param integer $SampleRate Generated audio sample rate. default 24000.
Selectable.
- 16000
- 24000 
     * @param integer $Bitrate MP3 bitrate (kbps), only applicable to mp3 format. can choose: `64`, `128`, `192`, `256`. default: `128`.
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
