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
 * @method string getCodec() Obtain Specifies the encoding format of the audio stream.
When audio transcoding is not needed, the optional values are:.
<li>copy.</li>
When the outer parameter Container is mp3, the valid values are:.
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the valid values are:.
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:.
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:.
<li>aac: more suitable for mp4;</li>.
<li>mp3: more suitable for flv;</li>.
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:.
<li>aac;</li>
<li>mp3;</li>
<li>eac3: used when merging adaptive transcoding audio tracks.</li>.
 * @method void setCodec(string $Codec) Set Specifies the encoding format of the audio stream.
When audio transcoding is not needed, the optional values are:.
<li>copy.</li>
When the outer parameter Container is mp3, the valid values are:.
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the valid values are:.
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:.
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:.
<li>aac: more suitable for mp4;</li>.
<li>mp3: more suitable for flv;</li>.
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:.
<li>aac;</li>
<li>mp3;</li>
<li>eac3: used when merging adaptive transcoding audio tracks.</li>.
 * @method integer getBitrate() Obtain The bitrate of the audio stream. value ranges from 0 to 26 and in the range of [26, 256]. measurement unit: kbps.
If the value is 0, the audio bitrate will be the same as that of the original audio.
Specifies that when using the TrackChannelInfo parameter for adaptive transcoding audio track merging, the valid values are:.
Cannot be set to 0.
2). when Codec is aac, valid values: [26, 256].
3). when Codec is ac3, valid values: [26, 640].
4) when Codec is eac3, value range: [26, 6144]. remark: when SampleRate is 44100HZ, maximum value: 5644. when SampleRate is 48000HZ, maximum value: 6144.


 * @method void setBitrate(integer $Bitrate) Set The bitrate of the audio stream. value ranges from 0 to 26 and in the range of [26, 256]. measurement unit: kbps.
If the value is 0, the audio bitrate will be the same as that of the original audio.
Specifies that when using the TrackChannelInfo parameter for adaptive transcoding audio track merging, the valid values are:.
Cannot be set to 0.
2). when Codec is aac, valid values: [26, 256].
3). when Codec is ac3, valid values: [26, 640].
4) when Codec is eac3, value range: [26, 6144]. remark: when SampleRate is 44100HZ, maximum value: 5644. when SampleRate is 48000HZ, maximum value: 6144.


 * @method integer getSampleRate() Obtain Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. For details, see [Audio/Video Transcoding Template](https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Note: Make sure that the sampling rate of the source audio stream is among the above options. Otherwise, transcoding may fail.
 * @method void setSampleRate(integer $SampleRate) Set Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. For details, see [Audio/Video Transcoding Template](https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Note: Make sure that the sampling rate of the source audio stream is among the above options. Otherwise, transcoding may fail.
 * @method integer getAudioChannel() Obtain Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
<li>Default value: 2.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
<li>Default value: 2.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.
 * @method AudioTrackChannelInfo getTrackChannelInfo() Obtain Merge audio track information.
This field only takes effect in adaptive bitrate transcoding.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTrackChannelInfo(AudioTrackChannelInfo $TrackChannelInfo) Set Merge audio track information.
This field only takes effect in adaptive bitrate transcoding.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string Specifies the encoding format of the audio stream.
When audio transcoding is not needed, the optional values are:.
<li>copy.</li>
When the outer parameter Container is mp3, the valid values are:.
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the valid values are:.
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:.
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:.
<li>aac: more suitable for mp4;</li>.
<li>mp3: more suitable for flv;</li>.
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:.
<li>aac;</li>
<li>mp3;</li>
<li>eac3: used when merging adaptive transcoding audio tracks.</li>.
     */
    public $Codec;

    /**
     * @var integer The bitrate of the audio stream. value ranges from 0 to 26 and in the range of [26, 256]. measurement unit: kbps.
If the value is 0, the audio bitrate will be the same as that of the original audio.
Specifies that when using the TrackChannelInfo parameter for adaptive transcoding audio track merging, the valid values are:.
Cannot be set to 0.
2). when Codec is aac, valid values: [26, 256].
3). when Codec is ac3, valid values: [26, 640].
4) when Codec is eac3, value range: [26, 6144]. remark: when SampleRate is 44100HZ, maximum value: 5644. when SampleRate is 48000HZ, maximum value: 6144.


     */
    public $Bitrate;

    /**
     * @var integer Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. For details, see [Audio/Video Transcoding Template](https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Note: Make sure that the sampling rate of the source audio stream is among the above options. Otherwise, transcoding may fail.
     */
    public $SampleRate;

    /**
     * @var integer Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
<li>Default value: 2.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.
     */
    public $AudioChannel;

    /**
     * @var AudioTrackChannelInfo Merge audio track information.
This field only takes effect in adaptive bitrate transcoding.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TrackChannelInfo;

    /**
     * @param string $Codec Specifies the encoding format of the audio stream.
When audio transcoding is not needed, the optional values are:.
<li>copy.</li>
When the outer parameter Container is mp3, the valid values are:.
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the valid values are:.
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:.
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:.
<li>aac: more suitable for mp4;</li>.
<li>mp3: more suitable for flv;</li>.
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:.
<li>aac;</li>
<li>mp3;</li>
<li>eac3: used when merging adaptive transcoding audio tracks.</li>.
     * @param integer $Bitrate The bitrate of the audio stream. value ranges from 0 to 26 and in the range of [26, 256]. measurement unit: kbps.
If the value is 0, the audio bitrate will be the same as that of the original audio.
Specifies that when using the TrackChannelInfo parameter for adaptive transcoding audio track merging, the valid values are:.
Cannot be set to 0.
2). when Codec is aac, valid values: [26, 256].
3). when Codec is ac3, valid values: [26, 640].
4) when Codec is eac3, value range: [26, 6144]. remark: when SampleRate is 44100HZ, maximum value: 5644. when SampleRate is 48000HZ, maximum value: 6144.


     * @param integer $SampleRate Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. For details, see [Audio/Video Transcoding Template](https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Note: Make sure that the sampling rate of the source audio stream is among the above options. Otherwise, transcoding may fail.
     * @param integer $AudioChannel Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
<li>Default value: 2.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.
     * @param AudioTrackChannelInfo $TrackChannelInfo Merge audio track information.
This field only takes effect in adaptive bitrate transcoding.

Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("TrackChannelInfo",$param) and $param["TrackChannelInfo"] !== null) {
            $this->TrackChannelInfo = new AudioTrackChannelInfo();
            $this->TrackChannelInfo->deserialize($param["TrackChannelInfo"]);
        }
    }
}
