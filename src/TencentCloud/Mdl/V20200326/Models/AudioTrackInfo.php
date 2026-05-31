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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio track configuration.
 *
 * @method string getTrackName() Obtain User input, limited to letters and digits, length not exceeding 20, non-repeating in the same channel.
 * @method void setTrackName(string $TrackName) Set User input, limited to letters and digits, length not exceeding 20, non-repeating in the same channel.
 * @method string getAudioCodec() Obtain Audio encoding format, can only be `AAC` or `PASSTHROUGH`. Default is AAC.
 * @method void setAudioCodec(string $AudioCodec) Set Audio encoding format, can only be `AAC` or `PASSTHROUGH`. Default is AAC.
 * @method integer getAudioBitrate() Obtain Audio bitrate.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate.
 * @method integer getAudioSampleRate() Obtain Audio sample rate.
 * @method void setAudioSampleRate(integer $AudioSampleRate) Set Audio sample rate.
 * @method string getAudioSelectorName() Obtain Input Only the value defined in AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid.
 * @method void setAudioSelectorName(string $AudioSelectorName) Set Input Only the value defined in AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid.
 * @method AudioNormalizationSettings getAudioNormalization() Obtain Audio loudness configuration.
 * @method void setAudioNormalization(AudioNormalizationSettings $AudioNormalization) Set Audio loudness configuration.
 * @method AudioCodecDetail getAudioCodecDetails() Obtain Additional audio mode and sound channel configuration.
 * @method void setAudioCodecDetails(AudioCodecDetail $AudioCodecDetails) Set Additional audio mode and sound channel configuration.
 */
class AudioTrackInfo extends AbstractModel
{
    /**
     * @var string User input, limited to letters and digits, length not exceeding 20, non-repeating in the same channel.
     */
    public $TrackName;

    /**
     * @var string Audio encoding format, can only be `AAC` or `PASSTHROUGH`. Default is AAC.
     */
    public $AudioCodec;

    /**
     * @var integer Audio bitrate.
     */
    public $AudioBitrate;

    /**
     * @var integer Audio sample rate.
     */
    public $AudioSampleRate;

    /**
     * @var string Input Only the value defined in AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid.
     */
    public $AudioSelectorName;

    /**
     * @var AudioNormalizationSettings Audio loudness configuration.
     */
    public $AudioNormalization;

    /**
     * @var AudioCodecDetail Additional audio mode and sound channel configuration.
     */
    public $AudioCodecDetails;

    /**
     * @param string $TrackName User input, limited to letters and digits, length not exceeding 20, non-repeating in the same channel.
     * @param string $AudioCodec Audio encoding format, can only be `AAC` or `PASSTHROUGH`. Default is AAC.
     * @param integer $AudioBitrate Audio bitrate.
     * @param integer $AudioSampleRate Audio sample rate.
     * @param string $AudioSelectorName Input Only the value defined in AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid.
     * @param AudioNormalizationSettings $AudioNormalization Audio loudness configuration.
     * @param AudioCodecDetail $AudioCodecDetails Additional audio mode and sound channel configuration.
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
        if (array_key_exists("TrackName",$param) and $param["TrackName"] !== null) {
            $this->TrackName = $param["TrackName"];
        }

        if (array_key_exists("AudioCodec",$param) and $param["AudioCodec"] !== null) {
            $this->AudioCodec = $param["AudioCodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("AudioSampleRate",$param) and $param["AudioSampleRate"] !== null) {
            $this->AudioSampleRate = $param["AudioSampleRate"];
        }

        if (array_key_exists("AudioSelectorName",$param) and $param["AudioSelectorName"] !== null) {
            $this->AudioSelectorName = $param["AudioSelectorName"];
        }

        if (array_key_exists("AudioNormalization",$param) and $param["AudioNormalization"] !== null) {
            $this->AudioNormalization = new AudioNormalizationSettings();
            $this->AudioNormalization->deserialize($param["AudioNormalization"]);
        }

        if (array_key_exists("AudioCodecDetails",$param) and $param["AudioCodecDetails"] !== null) {
            $this->AudioCodecDetails = new AudioCodecDetail();
            $this->AudioCodecDetails->deserialize($param["AudioCodecDetails"]);
        }
    }
}
