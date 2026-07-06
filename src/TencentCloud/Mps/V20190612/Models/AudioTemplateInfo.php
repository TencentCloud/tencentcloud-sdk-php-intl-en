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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio stream configuration parameter
 *
 * @method string getCodec() Obtain <p>Audio stream encoding format.<br>When audio transcoding is not needed, the valid value is:</p><li>copy.</li>When the outer parameter Container is mp3, the valid value is:<li>mp3.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>aac;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>aac: suitable for mp4.</li><li>mp3: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid values are:<li>aac.</li><li>mp3.</li><li>eac3: used when merging audio tracks with adaptive transcoding.</li>When the outer parameter Container is wav, the valid values are:<li>pcm16 and pcm24.</li>
 * @method void setCodec(string $Codec) Set <p>Audio stream encoding format.<br>When audio transcoding is not needed, the valid value is:</p><li>copy.</li>When the outer parameter Container is mp3, the valid value is:<li>mp3.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>aac;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>aac: suitable for mp4.</li><li>mp3: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid values are:<li>aac.</li><li>mp3.</li><li>eac3: used when merging audio tracks with adaptive transcoding.</li>When the outer parameter Container is wav, the valid values are:<li>pcm16 and pcm24.</li>
 * @method integer getBitrate() Obtain <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256].<br>When the value is 0, it means the audio bitrate remains consistent with that of the original audio.<br>Note: If the TrackChannelInfo parameter is used for audio track merging with adaptive transcoding, the value range:<br>1) cannot be 0.<br>2) When Codec is aac, the value range is [26, 256].<br>3) When Codec is ac3, the value range is [26, 640].<br>4) When Codec is eac3, the value range is [26, 6144]. Note: When SampleRate is 44100HZ, the maximum value is 5644. When SampleRate is 48000HZ, the maximum value is 6144.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256].<br>When the value is 0, it means the audio bitrate remains consistent with that of the original audio.<br>Note: If the TrackChannelInfo parameter is used for audio track merging with adaptive transcoding, the value range:<br>1) cannot be 0.<br>2) When Codec is aac, the value range is [26, 256].<br>3) When Codec is ac3, the value range is [26, 640].<br>4) When Codec is eac3, the value range is [26, 6144]. Note: When SampleRate is 44100HZ, the maximum value is 5644. When SampleRate is 48000HZ, the maximum value is 6144.</p>
 * @method integer getSampleRate() Obtain <p>Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. Enter 0 to use the source audio sampling rate.<br>For details, see <a href="https://www.tencentcloud.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53">Audio Sampling Rate Range</a>.<br>Unit: Hz.<br>Note: Ensure the source audio stream sampling rate is within the supported range. Otherwise, transcoding may fail.</p>
 * @method void setSampleRate(integer $SampleRate) Set <p>Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. Enter 0 to use the source audio sampling rate.<br>For details, see <a href="https://www.tencentcloud.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53">Audio Sampling Rate Range</a>.<br>Unit: Hz.<br>Note: Ensure the source audio stream sampling rate is within the supported range. Otherwise, transcoding may fail.</p>
 * @method integer getAudioChannel() Obtain <p>Audio channel mode. Valid values:</p><li>0: The number of audio channels follows that of the source.</li><li>1: Single channel.</li><li>2: Two channels.</li><li>6: 5.1 channels.</li>When the media container format is an audio format (mp3), the number of audio channels cannot be set to 5.1.<p>Default value: 2.<br>Note: If you set the audio channel to follow that of the source and the audio encoding format does not support the current audio channel, the transcoding task may fail.</p>
 * @method void setAudioChannel(integer $AudioChannel) Set <p>Audio channel mode. Valid values:</p><li>0: The number of audio channels follows that of the source.</li><li>1: Single channel.</li><li>2: Two channels.</li><li>6: 5.1 channels.</li>When the media container format is an audio format (mp3), the number of audio channels cannot be set to 5.1.<p>Default value: 2.<br>Note: If you set the audio channel to follow that of the source and the audio encoding format does not support the current audio channel, the transcoding task may fail.</p>
 * @method AudioTrackChannelInfo getTrackChannelInfo() Obtain <p>Audio track merging information.<br>Note: This field only takes effect for adaptive transcoding.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrackChannelInfo(AudioTrackChannelInfo $TrackChannelInfo) Set <p>Audio track merging information.<br>Note: This field only takes effect for adaptive transcoding.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>Audio stream encoding format.<br>When audio transcoding is not needed, the valid value is:</p><li>copy.</li>When the outer parameter Container is mp3, the valid value is:<li>mp3.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>aac;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>aac: suitable for mp4.</li><li>mp3: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid values are:<li>aac.</li><li>mp3.</li><li>eac3: used when merging audio tracks with adaptive transcoding.</li>When the outer parameter Container is wav, the valid values are:<li>pcm16 and pcm24.</li>
     */
    public $Codec;

    /**
     * @var integer <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256].<br>When the value is 0, it means the audio bitrate remains consistent with that of the original audio.<br>Note: If the TrackChannelInfo parameter is used for audio track merging with adaptive transcoding, the value range:<br>1) cannot be 0.<br>2) When Codec is aac, the value range is [26, 256].<br>3) When Codec is ac3, the value range is [26, 640].<br>4) When Codec is eac3, the value range is [26, 6144]. Note: When SampleRate is 44100HZ, the maximum value is 5644. When SampleRate is 48000HZ, the maximum value is 6144.</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. Enter 0 to use the source audio sampling rate.<br>For details, see <a href="https://www.tencentcloud.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53">Audio Sampling Rate Range</a>.<br>Unit: Hz.<br>Note: Ensure the source audio stream sampling rate is within the supported range. Otherwise, transcoding may fail.</p>
     */
    public $SampleRate;

    /**
     * @var integer <p>Audio channel mode. Valid values:</p><li>0: The number of audio channels follows that of the source.</li><li>1: Single channel.</li><li>2: Two channels.</li><li>6: 5.1 channels.</li>When the media container format is an audio format (mp3), the number of audio channels cannot be set to 5.1.<p>Default value: 2.<br>Note: If you set the audio channel to follow that of the source and the audio encoding format does not support the current audio channel, the transcoding task may fail.</p>
     */
    public $AudioChannel;

    /**
     * @var AudioTrackChannelInfo <p>Audio track merging information.<br>Note: This field only takes effect for adaptive transcoding.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrackChannelInfo;

    /**
     * @param string $Codec <p>Audio stream encoding format.<br>When audio transcoding is not needed, the valid value is:</p><li>copy.</li>When the outer parameter Container is mp3, the valid value is:<li>mp3.</li>When the outer parameter Container is ogg or flac, the valid value is:<li>flac.</li>When the outer parameter Container is m4a, the valid values are:<li>aac;</li><li>ac3.</li>When the outer parameter Container is mp4 or flv, the valid values are:<li>aac: suitable for mp4.</li><li>mp3: suitable for flv.</li><li>mp2.</li>When the outer parameter Container is hls, the valid values are:<li>aac.</li><li>mp3.</li><li>eac3: used when merging audio tracks with adaptive transcoding.</li>When the outer parameter Container is wav, the valid values are:<li>pcm16 and pcm24.</li>
     * @param integer $Bitrate <p>Audio stream bitrate, in kbps. Value range: 0 and [26, 256].<br>When the value is 0, it means the audio bitrate remains consistent with that of the original audio.<br>Note: If the TrackChannelInfo parameter is used for audio track merging with adaptive transcoding, the value range:<br>1) cannot be 0.<br>2) When Codec is aac, the value range is [26, 256].<br>3) When Codec is ac3, the value range is [26, 640].<br>4) When Codec is eac3, the value range is [26, 6144]. Note: When SampleRate is 44100HZ, the maximum value is 5644. When SampleRate is 48000HZ, the maximum value is 6144.</p>
     * @param integer $SampleRate <p>Audio stream sampling rate. Different sampling rate options are provided for different encoding standards. Enter 0 to use the source audio sampling rate.<br>For details, see <a href="https://www.tencentcloud.com/document/product/862/77166?from_cn_redirect=1#f3b039f1-d817-4a96-b4e4-90132d31cd53">Audio Sampling Rate Range</a>.<br>Unit: Hz.<br>Note: Ensure the source audio stream sampling rate is within the supported range. Otherwise, transcoding may fail.</p>
     * @param integer $AudioChannel <p>Audio channel mode. Valid values:</p><li>0: The number of audio channels follows that of the source.</li><li>1: Single channel.</li><li>2: Two channels.</li><li>6: 5.1 channels.</li>When the media container format is an audio format (mp3), the number of audio channels cannot be set to 5.1.<p>Default value: 2.<br>Note: If you set the audio channel to follow that of the source and the audio encoding format does not support the current audio channel, the transcoding task may fail.</p>
     * @param AudioTrackChannelInfo $TrackChannelInfo <p>Audio track merging information.<br>Note: This field only takes effect for adaptive transcoding.</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
