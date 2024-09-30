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
 * The audio stream information of a video editing/compositing task.
 *
 * @method string getCodec() Obtain The codec of the audio stream. Valid values:
<li>`AAC`: AAC (default), which is used for the MP4 container. </li>
<li>`MP3`: MP3 codec, which is used for the MP3 container. </li>
 * @method void setCodec(string $Codec) Set The codec of the audio stream. Valid values:
<li>`AAC`: AAC (default), which is used for the MP4 container. </li>
<li>`MP3`: MP3 codec, which is used for the MP3 container. </li>
 * @method integer getSampleRate() Obtain The sample rate (Hz) of the audio stream.
<li>16000 (default)</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
 * @method void setSampleRate(integer $SampleRate) Set The sample rate (Hz) of the audio stream.
<li>16000 (default)</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
 * @method integer getAudioChannel() Obtain The number of sound channels. Valid values:
u200c<li>`1`: Mono. </li>
<li>`2`: Dual (default). </li>
 * @method void setAudioChannel(integer $AudioChannel) Set The number of sound channels. Valid values:
u200c<li>`1`: Mono. </li>
<li>`2`: Dual (default). </li>
 * @method integer getBitrate() Obtain Reference bitrate, in kbps. Value range: 26-10000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on audio parameters.
 * @method void setBitrate(integer $Bitrate) Set Reference bitrate, in kbps. Value range: 26-10000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on audio parameters.
 */
class ComposeAudioStream extends AbstractModel
{
    /**
     * @var string The codec of the audio stream. Valid values:
<li>`AAC`: AAC (default), which is used for the MP4 container. </li>
<li>`MP3`: MP3 codec, which is used for the MP3 container. </li>
     */
    public $Codec;

    /**
     * @var integer The sample rate (Hz) of the audio stream.
<li>16000 (default)</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
     */
    public $SampleRate;

    /**
     * @var integer The number of sound channels. Valid values:
u200c<li>`1`: Mono. </li>
<li>`2`: Dual (default). </li>
     */
    public $AudioChannel;

    /**
     * @var integer Reference bitrate, in kbps. Value range: 26-10000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on audio parameters.
     */
    public $Bitrate;

    /**
     * @param string $Codec The codec of the audio stream. Valid values:
<li>`AAC`: AAC (default), which is used for the MP4 container. </li>
<li>`MP3`: MP3 codec, which is used for the MP3 container. </li>
     * @param integer $SampleRate The sample rate (Hz) of the audio stream.
<li>16000 (default)</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
     * @param integer $AudioChannel The number of sound channels. Valid values:
u200c<li>`1`: Mono. </li>
<li>`2`: Dual (default). </li>
     * @param integer $Bitrate Reference bitrate, in kbps. Value range: 26-10000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on audio parameters.
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
