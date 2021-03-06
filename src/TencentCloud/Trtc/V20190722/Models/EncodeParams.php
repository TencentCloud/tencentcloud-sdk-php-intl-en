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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output stream encoding parameters for MCU On-Cloud MixTranscoding
 *
 * @method integer getAudioSampleRate() Obtain Output audio sample rate (Hz) for On-Cloud MixTranscoding. Valid values: 48000, 44100, 32000, 24000, 16000, 8000
 * @method void setAudioSampleRate(integer $AudioSampleRate) Set Output audio sample rate (Hz) for On-Cloud MixTranscoding. Valid values: 48000, 44100, 32000, 24000, 16000, 8000
 * @method integer getAudioBitrate() Obtain Output audio bitrate (Kbps) for On-Cloud MixTranscoding. Value range: 8-500
 * @method void setAudioBitrate(integer $AudioBitrate) Set Output audio bitrate (Kbps) for On-Cloud MixTranscoding. Value range: 8-500
 * @method integer getAudioChannels() Obtain Number of sound channels of output stream for On-Cloud MixTranscoding. Valid values: 1, 2. 1 represents mono-channel, and 2 represents dual-channel.
 * @method void setAudioChannels(integer $AudioChannels) Set Number of sound channels of output stream for On-Cloud MixTranscoding. Valid values: 1, 2. 1 represents mono-channel, and 2 represents dual-channel.
 * @method integer getVideoWidth() Obtain Output stream width in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1920].
 * @method void setVideoWidth(integer $VideoWidth) Set Output stream width in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1920].
 * @method integer getVideoHeight() Obtain Output stream height in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1080].
 * @method void setVideoHeight(integer $VideoHeight) Set Output stream height in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1080].
 * @method integer getVideoBitrate() Obtain Output bitrate (Kbps) for On-Cloud MixTranscoding, which is required for audio-video output. Value range: 1-10000
 * @method void setVideoBitrate(integer $VideoBitrate) Set Output bitrate (Kbps) for On-Cloud MixTranscoding, which is required for audio-video output. Value range: 1-10000
 * @method integer getVideoFramerate() Obtain Output stream frame rate for On-Cloud MixTranscoding in FPS. This parameter is required for audio/video outputs. Value range: [1, 60].
 * @method void setVideoFramerate(integer $VideoFramerate) Set Output stream frame rate for On-Cloud MixTranscoding in FPS. This parameter is required for audio/video outputs. Value range: [1, 60].
 * @method integer getVideoGop() Obtain Output stream GOP in seconds for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [1, 5].
 * @method void setVideoGop(integer $VideoGop) Set Output stream GOP in seconds for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [1, 5].
 * @method integer getBackgroundColor() Obtain Output background color for On-Cloud MixTranscoding. Valid values: decimal integers. Commonly used colors include:
Red: 0xff0000, whose decimal number is 16724736
Yellow: 0xffff00, whose decimal number is 16776960
Green: 0x33cc00, whose decimal number is 3394560
Blue: 0x0066ff, whose decimal number is 26367
Black: 0x000000, whose decimal number is 0
White: 0xFFFFFF, whose decimal number is 16777215
Grey: 0x999999, whose decimal number is 10066329
 * @method void setBackgroundColor(integer $BackgroundColor) Set Output background color for On-Cloud MixTranscoding. Valid values: decimal integers. Commonly used colors include:
Red: 0xff0000, whose decimal number is 16724736
Yellow: 0xffff00, whose decimal number is 16776960
Green: 0x33cc00, whose decimal number is 3394560
Blue: 0x0066ff, whose decimal number is 26367
Black: 0x000000, whose decimal number is 0
White: 0xFFFFFF, whose decimal number is 16777215
Grey: 0x999999, whose decimal number is 10066329
 * @method integer getBackgroundImageId() Obtain Output stream background image for stream mix. Its value is the ID of image uploaded through the TRTC Console.
 * @method void setBackgroundImageId(integer $BackgroundImageId) Set Output stream background image for stream mix. Its value is the ID of image uploaded through the TRTC Console.
 * @method integer getAudioCodec() Obtain Output audio codec for On-Cloud MixTranscoding. Valid values: 0, 1, 2. 0 (default): LC-AAC; 1: HE-AAC; 2: HE-AACv2. If this parameter is set to 2 (HE-AACv2), On-Cloud MixTranscoding can produce only dual-channel streams. If it is set to 1 (HE-AAC) or 2 (HE-AACv2), the valid values for the audio sample rate of output streams are 48000, 44100, 32000, 24000, and 16000.
 * @method void setAudioCodec(integer $AudioCodec) Set Output audio codec for On-Cloud MixTranscoding. Valid values: 0, 1, 2. 0 (default): LC-AAC; 1: HE-AAC; 2: HE-AACv2. If this parameter is set to 2 (HE-AACv2), On-Cloud MixTranscoding can produce only dual-channel streams. If it is set to 1 (HE-AAC) or 2 (HE-AACv2), the valid values for the audio sample rate of output streams are 48000, 44100, 32000, 24000, and 16000.
 */
class EncodeParams extends AbstractModel
{
    /**
     * @var integer Output audio sample rate (Hz) for On-Cloud MixTranscoding. Valid values: 48000, 44100, 32000, 24000, 16000, 8000
     */
    public $AudioSampleRate;

    /**
     * @var integer Output audio bitrate (Kbps) for On-Cloud MixTranscoding. Value range: 8-500
     */
    public $AudioBitrate;

    /**
     * @var integer Number of sound channels of output stream for On-Cloud MixTranscoding. Valid values: 1, 2. 1 represents mono-channel, and 2 represents dual-channel.
     */
    public $AudioChannels;

    /**
     * @var integer Output stream width in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1920].
     */
    public $VideoWidth;

    /**
     * @var integer Output stream height in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1080].
     */
    public $VideoHeight;

    /**
     * @var integer Output bitrate (Kbps) for On-Cloud MixTranscoding, which is required for audio-video output. Value range: 1-10000
     */
    public $VideoBitrate;

    /**
     * @var integer Output stream frame rate for On-Cloud MixTranscoding in FPS. This parameter is required for audio/video outputs. Value range: [1, 60].
     */
    public $VideoFramerate;

    /**
     * @var integer Output stream GOP in seconds for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [1, 5].
     */
    public $VideoGop;

    /**
     * @var integer Output background color for On-Cloud MixTranscoding. Valid values: decimal integers. Commonly used colors include:
Red: 0xff0000, whose decimal number is 16724736
Yellow: 0xffff00, whose decimal number is 16776960
Green: 0x33cc00, whose decimal number is 3394560
Blue: 0x0066ff, whose decimal number is 26367
Black: 0x000000, whose decimal number is 0
White: 0xFFFFFF, whose decimal number is 16777215
Grey: 0x999999, whose decimal number is 10066329
     */
    public $BackgroundColor;

    /**
     * @var integer Output stream background image for stream mix. Its value is the ID of image uploaded through the TRTC Console.
     */
    public $BackgroundImageId;

    /**
     * @var integer Output audio codec for On-Cloud MixTranscoding. Valid values: 0, 1, 2. 0 (default): LC-AAC; 1: HE-AAC; 2: HE-AACv2. If this parameter is set to 2 (HE-AACv2), On-Cloud MixTranscoding can produce only dual-channel streams. If it is set to 1 (HE-AAC) or 2 (HE-AACv2), the valid values for the audio sample rate of output streams are 48000, 44100, 32000, 24000, and 16000.
     */
    public $AudioCodec;

    /**
     * @param integer $AudioSampleRate Output audio sample rate (Hz) for On-Cloud MixTranscoding. Valid values: 48000, 44100, 32000, 24000, 16000, 8000
     * @param integer $AudioBitrate Output audio bitrate (Kbps) for On-Cloud MixTranscoding. Value range: 8-500
     * @param integer $AudioChannels Number of sound channels of output stream for On-Cloud MixTranscoding. Valid values: 1, 2. 1 represents mono-channel, and 2 represents dual-channel.
     * @param integer $VideoWidth Output stream width in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1920].
     * @param integer $VideoHeight Output stream height in pixels for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [0, 1080].
     * @param integer $VideoBitrate Output bitrate (Kbps) for On-Cloud MixTranscoding, which is required for audio-video output. Value range: 1-10000
     * @param integer $VideoFramerate Output stream frame rate for On-Cloud MixTranscoding in FPS. This parameter is required for audio/video outputs. Value range: [1, 60].
     * @param integer $VideoGop Output stream GOP in seconds for On-Cloud MixTranscoding, which is required for audio/video output. Value range: [1, 5].
     * @param integer $BackgroundColor Output background color for On-Cloud MixTranscoding. Valid values: decimal integers. Commonly used colors include:
Red: 0xff0000, whose decimal number is 16724736
Yellow: 0xffff00, whose decimal number is 16776960
Green: 0x33cc00, whose decimal number is 3394560
Blue: 0x0066ff, whose decimal number is 26367
Black: 0x000000, whose decimal number is 0
White: 0xFFFFFF, whose decimal number is 16777215
Grey: 0x999999, whose decimal number is 10066329
     * @param integer $BackgroundImageId Output stream background image for stream mix. Its value is the ID of image uploaded through the TRTC Console.
     * @param integer $AudioCodec Output audio codec for On-Cloud MixTranscoding. Valid values: 0, 1, 2. 0 (default): LC-AAC; 1: HE-AAC; 2: HE-AACv2. If this parameter is set to 2 (HE-AACv2), On-Cloud MixTranscoding can produce only dual-channel streams. If it is set to 1 (HE-AAC) or 2 (HE-AACv2), the valid values for the audio sample rate of output streams are 48000, 44100, 32000, 24000, and 16000.
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
        if (array_key_exists("AudioSampleRate",$param) and $param["AudioSampleRate"] !== null) {
            $this->AudioSampleRate = $param["AudioSampleRate"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("AudioChannels",$param) and $param["AudioChannels"] !== null) {
            $this->AudioChannels = $param["AudioChannels"];
        }

        if (array_key_exists("VideoWidth",$param) and $param["VideoWidth"] !== null) {
            $this->VideoWidth = $param["VideoWidth"];
        }

        if (array_key_exists("VideoHeight",$param) and $param["VideoHeight"] !== null) {
            $this->VideoHeight = $param["VideoHeight"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("VideoFramerate",$param) and $param["VideoFramerate"] !== null) {
            $this->VideoFramerate = $param["VideoFramerate"];
        }

        if (array_key_exists("VideoGop",$param) and $param["VideoGop"] !== null) {
            $this->VideoGop = $param["VideoGop"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }

        if (array_key_exists("BackgroundImageId",$param) and $param["BackgroundImageId"] !== null) {
            $this->BackgroundImageId = $param["BackgroundImageId"];
        }

        if (array_key_exists("AudioCodec",$param) and $param["AudioCodec"] !== null) {
            $this->AudioCodec = $param["AudioCodec"];
        }
    }
}
