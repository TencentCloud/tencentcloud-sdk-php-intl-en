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
 * Output audio stream information
 *
 * @method string getCodec() Obtain Encoding format for audio streams. Optional values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
 * @method void setCodec(string $Codec) Set Encoding format for audio streams. Optional values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
 * @method integer getSampleRate() Obtain Sampling rate of the audio stream. Available values:
<li>16000</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
Unit: Hz.
Default value: 16000.
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate of the audio stream. Available values:
<li>16000</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
Unit: Hz.
Default value: 16000.
 * @method integer getAudioChannel() Obtain Number of audio channels. Available values:
<li>1: mono.</li>
<li>2: stereo.</li>
Default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Number of audio channels. Available values:
<li>1: mono.</li>
<li>2: stereo.</li>
Default value: 2.
 * @method integer getBitrate() Obtain Audio stream bitrate. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, the audio bitrate is set automatically.
 * @method void setBitrate(integer $Bitrate) Set Audio stream bitrate. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, the audio bitrate is set automatically.
 */
class OutputAudioStream extends AbstractModel
{
    /**
     * @var string Encoding format for audio streams. Optional values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
     */
    public $Codec;

    /**
     * @var integer Sampling rate of the audio stream. Available values:
<li>16000</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
Unit: Hz.
Default value: 16000.
     */
    public $SampleRate;

    /**
     * @var integer Number of audio channels. Available values:
<li>1: mono.</li>
<li>2: stereo.</li>
Default value: 2.
     */
    public $AudioChannel;

    /**
     * @var integer Audio stream bitrate. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, the audio bitrate is set automatically.
     */
    public $Bitrate;

    /**
     * @param string $Codec Encoding format for audio streams. Optional values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
     * @param integer $SampleRate Sampling rate of the audio stream. Available values:
<li>16000</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
Unit: Hz.
Default value: 16000.
     * @param integer $AudioChannel Number of audio channels. Available values:
<li>1: mono.</li>
<li>2: stereo.</li>
Default value: 2.
     * @param integer $Bitrate Audio stream bitrate. Value range: 0 and [26, 256]. Unit: kbps.
When the value is 0, the audio bitrate is set automatically.
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

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
