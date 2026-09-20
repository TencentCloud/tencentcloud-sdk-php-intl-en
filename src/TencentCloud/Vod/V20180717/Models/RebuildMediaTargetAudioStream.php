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
 * Audio content of the remastering output
 *
 * @method string getCodec() Obtain Audio stream encoding format.
When the outer parameter Container is mp3, optional values:
<li>libmp3lame.</li>
When the outer parameter Container is ogg or flac, optional values:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, optional values:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>libfdk_aac.</li>
 * @method void setCodec(string $Codec) Set Audio stream encoding format.
When the outer parameter Container is mp3, optional values:
<li>libmp3lame.</li>
When the outer parameter Container is ogg or flac, optional values:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, optional values:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>libfdk_aac.</li>
 * @method integer getBitrate() Obtain Bitrate of the audio stream. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, it means VOD automatically sets the bitrate.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of the audio stream. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, it means VOD automatically sets the bitrate.
 * @method integer getSampleRate() Obtain Sampling rate of the audio stream. Available values:
<li>32000</li>
<li>44100</li>
<li>48000</li>

Unit: Hz.
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate of the audio stream. Available values:
<li>32000</li>
<li>44100</li>
<li>48000</li>

Unit: Hz.
 * @method integer getAudioChannel() Obtain Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: Stereo</li>

When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to stereo.
Default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: Stereo</li>

When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to stereo.
Default value: 2.
 */
class RebuildMediaTargetAudioStream extends AbstractModel
{
    /**
     * @var string Audio stream encoding format.
When the outer parameter Container is mp3, optional values:
<li>libmp3lame.</li>
When the outer parameter Container is ogg or flac, optional values:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, optional values:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>libfdk_aac.</li>
     */
    public $Codec;

    /**
     * @var integer Bitrate of the audio stream. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, it means VOD automatically sets the bitrate.
     */
    public $Bitrate;

    /**
     * @var integer Sampling rate of the audio stream. Available values:
<li>32000</li>
<li>44100</li>
<li>48000</li>

Unit: Hz.
     */
    public $SampleRate;

    /**
     * @var integer Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: Stereo</li>

When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to stereo.
Default value: 2.
     */
    public $AudioChannel;

    /**
     * @param string $Codec Audio stream encoding format.
When the outer parameter Container is mp3, optional values:
<li>libmp3lame.</li>
When the outer parameter Container is ogg or flac, optional values:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>libfdk_aac;</li>
<li>libmp3lame;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, optional values:
<li>libfdk_aac: more suitable for mp4;</li>
<li>libmp3lame: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>libfdk_aac.</li>
     * @param integer $Bitrate Bitrate of the audio stream. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, it means VOD automatically sets the bitrate.
     * @param integer $SampleRate Sampling rate of the audio stream. Available values:
<li>32000</li>
<li>44100</li>
<li>48000</li>

Unit: Hz.
     * @param integer $AudioChannel Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: Stereo</li>

When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to stereo.
Default value: 2.
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
    }
}
