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
 * @method string getCodec() Obtain Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBitrate() Obtain Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method void setBitrate(integer $Bitrate) Set Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method integer getSampleRate() Obtain The sampling rate of the audio stream. the sampling rate options supported by different encoding standards are different. for details, see the audio sample rate support scope document (https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Please ensure that the sampling rate of the source audio stream is within the scope of the above options. otherwise, transcoding failure may occur.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSampleRate(integer $SampleRate) Set The sampling rate of the audio stream. the sampling rate options supported by different encoding standards are different. for details, see the audio sample rate support scope document (https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Please ensure that the sampling rate of the source audio stream is within the scope of the above options. otherwise, transcoding failure may occur.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAudioChannel() Obtain Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStreamSelects() Obtain The audio tracks to retain. All audio tracks are retained by default.
 * @method void setStreamSelects(array $StreamSelects) Set The audio tracks to retain. All audio tracks are retained by default.
 */
class AudioTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     */
    public $Bitrate;

    /**
     * @var integer The sampling rate of the audio stream. the sampling rate options supported by different encoding standards are different. for details, see the audio sample rate support scope document (https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Please ensure that the sampling rate of the source audio stream is within the scope of the above options. otherwise, transcoding failure may occur.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SampleRate;

    /**
     * @var integer Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioChannel;

    /**
     * @var array The audio tracks to retain. All audio tracks are retained by default.
     */
    public $StreamSelects;

    /**
     * @param string $Codec Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bitrate Audio stream bitrate in Kbps. Value range: 0 and [26, 256]. If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     * @param integer $SampleRate The sampling rate of the audio stream. the sampling rate options supported by different encoding standards are different. for details, see the audio sample rate support scope document (https://intl.cloud.tencent.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53).
Unit: Hz.
Please ensure that the sampling rate of the source audio stream is within the scope of the above options. otherwise, transcoding failure may occur.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AudioChannel Audio channel mode. Valid values:
<li>1: mono-channel.</li>
<li>2: dual-channel.</li>
<li>6: 5.1 surround sound.
When the container format is audio (flac, ogg, mp3, and m4a), the audio channel cannot be set to 5.1 surround sound.

Note: This field may return null, indicating that no valid values can be obtained.
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
