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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio track configuration.
 *
 * @method string getTrackName() Obtain User input is limited to letters and numbers, the length should not exceed 20, and should not be repeated in the same channel.
 * @method void setTrackName(string $TrackName) Set User input is limited to letters and numbers, the length should not exceed 20, and should not be repeated in the same channel.
 * @method string getAudioCodec() Obtain Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
 * @method void setAudioCodec(string $AudioCodec) Set Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
 * @method integer getAudioBitrate() Obtain Audio bitrate.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate.
 * @method integer getAudioSampleRate() Obtain Audio sample rate.
 * @method void setAudioSampleRate(integer $AudioSampleRate) Set Audio sample rate.
 * @method string getAudioSelectorName() Obtain Only values defined by AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid can be entered.
 * @method void setAudioSelectorName(string $AudioSelectorName) Set Only values defined by AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid can be entered.
 * @method AudioNormalizationSettings getAudioNormalization() Obtain Audio loudness configuration.
 * @method void setAudioNormalization(AudioNormalizationSettings $AudioNormalization) Set Audio loudness configuration.
 * @method AudioCodecDetail getAudioCodecDetails() Obtain Audio encoding configuration.
 * @method void setAudioCodecDetails(AudioCodecDetail $AudioCodecDetails) Set Audio encoding configuration.
 */
class AudioTrackInfo extends AbstractModel
{
    /**
     * @var string User input is limited to letters and numbers, the length should not exceed 20, and should not be repeated in the same channel.
     */
    public $TrackName;

    /**
     * @var string Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
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
     * @var string Only values defined by AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid can be entered.
     */
    public $AudioSelectorName;

    /**
     * @var AudioNormalizationSettings Audio loudness configuration.
     */
    public $AudioNormalization;

    /**
     * @var AudioCodecDetail Audio encoding configuration.
     */
    public $AudioCodecDetails;

    /**
     * @param string $TrackName User input is limited to letters and numbers, the length should not exceed 20, and should not be repeated in the same channel.
     * @param string $AudioCodec Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
     * @param integer $AudioBitrate Audio bitrate.
     * @param integer $AudioSampleRate Audio sample rate.
     * @param string $AudioSelectorName Only values defined by AttachedInputs.$.AudioSelectors.$.audioPidSelection.pid can be entered.
     * @param AudioNormalizationSettings $AudioNormalization Audio loudness configuration.
     * @param AudioCodecDetail $AudioCodecDetails Audio encoding configuration.
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
