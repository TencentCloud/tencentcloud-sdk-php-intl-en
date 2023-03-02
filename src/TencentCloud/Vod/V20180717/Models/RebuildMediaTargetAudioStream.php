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
 * The output audio parameters of an audio/video remastering task.
 *
 * @method string getCodec() Obtain The audio codec.
If `Container` is `mp3`, the valid value is:
<li>`libmp3lame`</li>
If `Container` is `ogg` or `flac`, the valid value is:
<li>`flac`</li>
If `Container` is `m4a`, the valid values are:
<li>`libfdk_aac`</li>
<li>`libmp3lame`</li>
<li>`ac3`</li>
If `Container` is `mp4` or `flv`, the valid values are:
<li>`libfdk_aac` (Recommended for MP4)</li>
<li>`libmp3lame` (Recommended for FLV)</li>
<li>`mp2`</li>
If `Container` is `hls`, the valid value is:
<li>`libfdk_aac`</li>
 * @method void setCodec(string $Codec) Set The audio codec.
If `Container` is `mp3`, the valid value is:
<li>`libmp3lame`</li>
If `Container` is `ogg` or `flac`, the valid value is:
<li>`flac`</li>
If `Container` is `m4a`, the valid values are:
<li>`libfdk_aac`</li>
<li>`libmp3lame`</li>
<li>`ac3`</li>
If `Container` is `mp4` or `flv`, the valid values are:
<li>`libfdk_aac` (Recommended for MP4)</li>
<li>`libmp3lame` (Recommended for FLV)</li>
<li>`mp2`</li>
If `Container` is `hls`, the valid value is:
<li>`libfdk_aac`</li>
 * @method integer getBitrate() Obtain The audio bitrate, in Kbps. Value range: 0 and 26-256.
If the value is `0`, the original audio bitrate will be used.
 * @method void setBitrate(integer $Bitrate) Set The audio bitrate, in Kbps. Value range: 0 and 26-256.
If the value is `0`, the original audio bitrate will be used.
 * @method integer getSampleRate() Obtain The audio sample rate. Valid values:
<li>`32000`</li>
<li>`44100`</li>
<li>`48000`</li>

Unit: Hz.
 * @method void setSampleRate(integer $SampleRate) Set The audio sample rate. Valid values:
<li>`32000`</li>
<li>`44100`</li>
<li>`48000`</li>

Unit: Hz.
 * @method integer getAudioChannel() Obtain The audio channels. Valid values:
<li>`1`: Mono-channel</li>
<li>`2`: Dual-channel</li>
<li>`6`: Stereo</li>

You cannot set this parameter to `6` if the container format is an audio format (FLAC, OGG, MP3, M4A).
Default value: `2`.
 * @method void setAudioChannel(integer $AudioChannel) Set The audio channels. Valid values:
<li>`1`: Mono-channel</li>
<li>`2`: Dual-channel</li>
<li>`6`: Stereo</li>

You cannot set this parameter to `6` if the container format is an audio format (FLAC, OGG, MP3, M4A).
Default value: `2`.
 */
class RebuildMediaTargetAudioStream extends AbstractModel
{
    /**
     * @var string The audio codec.
If `Container` is `mp3`, the valid value is:
<li>`libmp3lame`</li>
If `Container` is `ogg` or `flac`, the valid value is:
<li>`flac`</li>
If `Container` is `m4a`, the valid values are:
<li>`libfdk_aac`</li>
<li>`libmp3lame`</li>
<li>`ac3`</li>
If `Container` is `mp4` or `flv`, the valid values are:
<li>`libfdk_aac` (Recommended for MP4)</li>
<li>`libmp3lame` (Recommended for FLV)</li>
<li>`mp2`</li>
If `Container` is `hls`, the valid value is:
<li>`libfdk_aac`</li>
     */
    public $Codec;

    /**
     * @var integer The audio bitrate, in Kbps. Value range: 0 and 26-256.
If the value is `0`, the original audio bitrate will be used.
     */
    public $Bitrate;

    /**
     * @var integer The audio sample rate. Valid values:
<li>`32000`</li>
<li>`44100`</li>
<li>`48000`</li>

Unit: Hz.
     */
    public $SampleRate;

    /**
     * @var integer The audio channels. Valid values:
<li>`1`: Mono-channel</li>
<li>`2`: Dual-channel</li>
<li>`6`: Stereo</li>

You cannot set this parameter to `6` if the container format is an audio format (FLAC, OGG, MP3, M4A).
Default value: `2`.
     */
    public $AudioChannel;

    /**
     * @param string $Codec The audio codec.
If `Container` is `mp3`, the valid value is:
<li>`libmp3lame`</li>
If `Container` is `ogg` or `flac`, the valid value is:
<li>`flac`</li>
If `Container` is `m4a`, the valid values are:
<li>`libfdk_aac`</li>
<li>`libmp3lame`</li>
<li>`ac3`</li>
If `Container` is `mp4` or `flv`, the valid values are:
<li>`libfdk_aac` (Recommended for MP4)</li>
<li>`libmp3lame` (Recommended for FLV)</li>
<li>`mp2`</li>
If `Container` is `hls`, the valid value is:
<li>`libfdk_aac`</li>
     * @param integer $Bitrate The audio bitrate, in Kbps. Value range: 0 and 26-256.
If the value is `0`, the original audio bitrate will be used.
     * @param integer $SampleRate The audio sample rate. Valid values:
<li>`32000`</li>
<li>`44100`</li>
<li>`48000`</li>

Unit: Hz.
     * @param integer $AudioChannel The audio channels. Valid values:
<li>`1`: Mono-channel</li>
<li>`2`: Dual-channel</li>
<li>`6`: Stereo</li>

You cannot set this parameter to `6` if the container format is an audio format (FLAC, OGG, MP3, M4A).
Default value: `2`.
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
