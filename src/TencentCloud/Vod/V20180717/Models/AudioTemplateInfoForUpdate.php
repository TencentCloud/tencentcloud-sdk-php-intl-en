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
 * Audio stream configuration parameter
 *
 * @method string getCodec() Obtain <p>Audio stream encoding format.<br>When the outer parameter Container is mp3, the valid value is:</p><li>libmp3lame.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>libfdk_aac;</li><li>libmp3lame;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>libfdk_aac: suitable for mp4.</li><li>libmp3lame: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid value is:<li>libfdk_aac.</li>When the outer parameter Format is HLS or MPEG-DASH, the valid value is:<li>libfdk_aac.</li>When the outer parameter Container is wav, the valid value is:<li>pcm16.</li>
 * @method void setCodec(string $Codec) Set <p>Audio stream encoding format.<br>When the outer parameter Container is mp3, the valid value is:</p><li>libmp3lame.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>libfdk_aac;</li><li>libmp3lame;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>libfdk_aac: suitable for mp4.</li><li>libmp3lame: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid value is:<li>libfdk_aac.</li>When the outer parameter Format is HLS or MPEG-DASH, the valid value is:<li>libfdk_aac.</li>When the outer parameter Container is wav, the valid value is:<li>pcm16.</li>
 * @method integer getBitrate() Obtain <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256]. When the value is 0, it means the bitrate is set automatically by VOD.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256]. When the value is 0, it means the bitrate is set automatically by VOD.</p>
 * @method integer getSampleRate() Obtain <p>Sampling rate of the audio stream. Available values:</p><li>16000. Available only when Codec is pcm16.</li><li>32000</li><li>44100</li><li>48000</li>Unit: Hz.
 * @method void setSampleRate(integer $SampleRate) Set <p>Sampling rate of the audio stream. Available values:</p><li>16000. Available only when Codec is pcm16.</li><li>32000</li><li>44100</li><li>48000</li>Unit: Hz.
 * @method integer getAudioChannel() Obtain <p>Audio channel. Available values:</p><li>1: Single channel.</li><li>2: Two channels.</li><li>6: Stereo.</li><li>0: The number of audio channels remains the same as the original audio.</li>When the media container format is an audio format (flac, ogg, mp3, m4a), the number of audio channels cannot be set to stereo.
 * @method void setAudioChannel(integer $AudioChannel) Set <p>Audio channel. Available values:</p><li>1: Single channel.</li><li>2: Two channels.</li><li>6: Stereo.</li><li>0: The number of audio channels remains the same as the original audio.</li>When the media container format is an audio format (flac, ogg, mp3, m4a), the number of audio channels cannot be set to stereo.
 * @method array getStreamSelects() Obtain <p>Specifies the retained audio tracks for output. All source tracks are retained. </p><p>This parameter is valid only when specified in the OverrideParameter parameter and is disabled in other cases.</p>
 * @method void setStreamSelects(array $StreamSelects) Set <p>Specifies the retained audio tracks for output. All source tracks are retained. </p><p>This parameter is valid only when specified in the OverrideParameter parameter and is disabled in other cases.</p>
 */
class AudioTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>Audio stream encoding format.<br>When the outer parameter Container is mp3, the valid value is:</p><li>libmp3lame.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>libfdk_aac;</li><li>libmp3lame;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>libfdk_aac: suitable for mp4.</li><li>libmp3lame: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid value is:<li>libfdk_aac.</li>When the outer parameter Format is HLS or MPEG-DASH, the valid value is:<li>libfdk_aac.</li>When the outer parameter Container is wav, the valid value is:<li>pcm16.</li>
     */
    public $Codec;

    /**
     * @var integer <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256]. When the value is 0, it means the bitrate is set automatically by VOD.</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>Sampling rate of the audio stream. Available values:</p><li>16000. Available only when Codec is pcm16.</li><li>32000</li><li>44100</li><li>48000</li>Unit: Hz.
     */
    public $SampleRate;

    /**
     * @var integer <p>Audio channel. Available values:</p><li>1: Single channel.</li><li>2: Two channels.</li><li>6: Stereo.</li><li>0: The number of audio channels remains the same as the original audio.</li>When the media container format is an audio format (flac, ogg, mp3, m4a), the number of audio channels cannot be set to stereo.
     */
    public $AudioChannel;

    /**
     * @var array <p>Specifies the retained audio tracks for output. All source tracks are retained. </p><p>This parameter is valid only when specified in the OverrideParameter parameter and is disabled in other cases.</p>
     */
    public $StreamSelects;

    /**
     * @param string $Codec <p>Audio stream encoding format.<br>When the outer parameter Container is mp3, the valid value is:</p><li>libmp3lame.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>libfdk_aac;</li><li>libmp3lame;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>libfdk_aac: suitable for mp4.</li><li>libmp3lame: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid value is:<li>libfdk_aac.</li>When the outer parameter Format is HLS or MPEG-DASH, the valid value is:<li>libfdk_aac.</li>When the outer parameter Container is wav, the valid value is:<li>pcm16.</li>
     * @param integer $Bitrate <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256]. When the value is 0, it means the bitrate is set automatically by VOD.</p>
     * @param integer $SampleRate <p>Sampling rate of the audio stream. Available values:</p><li>16000. Available only when Codec is pcm16.</li><li>32000</li><li>44100</li><li>48000</li>Unit: Hz.
     * @param integer $AudioChannel <p>Audio channel. Available values:</p><li>1: Single channel.</li><li>2: Two channels.</li><li>6: Stereo.</li><li>0: The number of audio channels remains the same as the original audio.</li>When the media container format is an audio format (flac, ogg, mp3, m4a), the number of audio channels cannot be set to stereo.
     * @param array $StreamSelects <p>Specifies the retained audio tracks for output. All source tracks are retained. </p><p>This parameter is valid only when specified in the OverrideParameter parameter and is disabled in other cases.</p>
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
