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
 * Audio stream configuration parameter
 *
 * @method string getCodec() Obtain Audio stream codec.
When the outer `Container` parameter is `mp3`, the valid value is:
<li>libmp3lame.</li>
When the outer `Container` parameter is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When the outer `Container` parameter is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer `Container` parameter is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: More suitable for mp4;</li>
<li>libmp3lame: More suitable for flv;</li>
<li>mp2.</li>
When the outer `Container` parameter is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
 * @method void setCodec(string $Codec) Set Audio stream codec.
When the outer `Container` parameter is `mp3`, the valid value is:
<li>libmp3lame.</li>
When the outer `Container` parameter is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When the outer `Container` parameter is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer `Container` parameter is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: More suitable for mp4;</li>
<li>libmp3lame: More suitable for flv;</li>
<li>mp2.</li>
When the outer `Container` parameter is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
 * @method integer getBitrate() Obtain Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method void setBitrate(integer $Bitrate) Set Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method integer getSampleRate() Obtain Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method void setSampleRate(integer $SampleRate) Set Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method integer getAudioChannel() Obtain Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
When the media is packaged in audio format (FLAC, OGG, MP3, M4A), the sound channel cannot be set to stereo.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
When the media is packaged in audio format (FLAC, OGG, MP3, M4A), the sound channel cannot be set to stereo.
 * @method array getStreamSelects() Obtain The audio tracks to retain. All audio tracks are retained by default.
 * @method void setStreamSelects(array $StreamSelects) Set The audio tracks to retain. All audio tracks are retained by default.
 */
class AudioTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string Audio stream codec.
When the outer `Container` parameter is `mp3`, the valid value is:
<li>libmp3lame.</li>
When the outer `Container` parameter is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When the outer `Container` parameter is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer `Container` parameter is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: More suitable for mp4;</li>
<li>libmp3lame: More suitable for flv;</li>
<li>mp2.</li>
When the outer `Container` parameter is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
     */
    public $Codec;

    /**
     * @var integer Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     */
    public $Bitrate;

    /**
     * @var integer Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     */
    public $SampleRate;

    /**
     * @var integer Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
When the media is packaged in audio format (FLAC, OGG, MP3, M4A), the sound channel cannot be set to stereo.
     */
    public $AudioChannel;

    /**
     * @var array The audio tracks to retain. All audio tracks are retained by default.
     */
    public $StreamSelects;

    /**
     * @param string $Codec Audio stream codec.
When the outer `Container` parameter is `mp3`, the valid value is:
<li>libmp3lame.</li>
When the outer `Container` parameter is `ogg` or `flac`, the valid value is:
<li>flac.</li>
When the outer `Container` parameter is `m4a`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer `Container` parameter is `mp4` or `flv`, the valid values include:
<li>libfdk_aac: More suitable for mp4;</li>
<li>libmp3lame: More suitable for flv;</li>
<li>mp2.</li>
When the outer `Container` parameter is `hls`, the valid values include:
<li>libfdk_aac;</li>
<li>libmp3lame.</li>
     * @param integer $Bitrate Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     * @param integer $SampleRate Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     * @param integer $AudioChannel Audio channel system. Valid values:
<li>1: Mono</li>
<li>2: Dual</li>
<li>6: Stereo</li>
When the media is packaged in audio format (FLAC, OGG, MP3, M4A), the sound channel cannot be set to stereo.
     * @param array $StreamSelects The audio tracks to retain. All audio tracks are retained by default.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("StreamSelects",$param) and $param["StreamSelects"] !== null) {
            $this->StreamSelects = $param["StreamSelects"];
        }
    }
}
