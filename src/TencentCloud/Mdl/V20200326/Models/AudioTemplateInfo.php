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
 * Audio transcoding template.
 *
 * @method string getAudioSelectorName() Obtain Only `AttachedInputs.AudioSelectors.Name` can be selected. This parameter is required for RTP_PUSH and UDP_PUSH.
 * @method void setAudioSelectorName(string $AudioSelectorName) Set Only `AttachedInputs.AudioSelectors.Name` can be selected. This parameter is required for RTP_PUSH and UDP_PUSH.
 * @method string getName() Obtain Audio transcoding template name, which can contain 1-20 letters and digits.
 * @method void setName(string $Name) Set Audio transcoding template name, which can contain 1-20 letters and digits.
 * @method string getAcodec() Obtain Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
 * @method void setAcodec(string $Acodec) Set Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
 * @method integer getAudioBitrate() Obtain Audio bitrate. If this parameter is left empty, the original value will be used.
Valid values: 6000, 7000, 8000, 10000, 12000, 14000, 16000, 20000, 24000, 28000, 32000, 40000, 48000, 56000, 64000, 80000, 96000, 112000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 384000, 448000, 512000, 576000, 640000, 768000, 896000, 1024000
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. If this parameter is left empty, the original value will be used.
Valid values: 6000, 7000, 8000, 10000, 12000, 14000, 16000, 20000, 24000, 28000, 32000, 40000, 48000, 56000, 64000, 80000, 96000, 112000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 384000, 448000, 512000, 576000, 640000, 768000, 896000, 1024000
 * @method string getLanguageCode() Obtain Audio language code, whose length is always 3 characters.
 * @method void setLanguageCode(string $LanguageCode) Set Audio language code, whose length is always 3 characters.
 * @method AudioNormalizationSettings getAudioNormalization() Obtain Audio transcoding special configuration information.
 * @method void setAudioNormalization(AudioNormalizationSettings $AudioNormalization) Set Audio transcoding special configuration information.
 * @method integer getAudioSampleRate() Obtain Audio sampling rate, unit HZ.
 * @method void setAudioSampleRate(integer $AudioSampleRate) Set Audio sampling rate, unit HZ.
 * @method AudioCodecDetail getAudioCodecDetails() Obtain Audio encoding parameters.
 * @method void setAudioCodecDetails(AudioCodecDetail $AudioCodecDetails) Set Audio encoding parameters.
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string Only `AttachedInputs.AudioSelectors.Name` can be selected. This parameter is required for RTP_PUSH and UDP_PUSH.
     */
    public $AudioSelectorName;

    /**
     * @var string Audio transcoding template name, which can contain 1-20 letters and digits.
     */
    public $Name;

    /**
     * @var string Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. If this parameter is left empty, the original value will be used.
Valid values: 6000, 7000, 8000, 10000, 12000, 14000, 16000, 20000, 24000, 28000, 32000, 40000, 48000, 56000, 64000, 80000, 96000, 112000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 384000, 448000, 512000, 576000, 640000, 768000, 896000, 1024000
     */
    public $AudioBitrate;

    /**
     * @var string Audio language code, whose length is always 3 characters.
     */
    public $LanguageCode;

    /**
     * @var AudioNormalizationSettings Audio transcoding special configuration information.
     */
    public $AudioNormalization;

    /**
     * @var integer Audio sampling rate, unit HZ.
     */
    public $AudioSampleRate;

    /**
     * @var AudioCodecDetail Audio encoding parameters.
     */
    public $AudioCodecDetails;

    /**
     * @param string $AudioSelectorName Only `AttachedInputs.AudioSelectors.Name` can be selected. This parameter is required for RTP_PUSH and UDP_PUSH.
     * @param string $Name Audio transcoding template name, which can contain 1-20 letters and digits.
     * @param string $Acodec Audio encoding format, only `AAC` and `PASSTHROUGH` are available, with `AAC` as the default.
     * @param integer $AudioBitrate Audio bitrate. If this parameter is left empty, the original value will be used.
Valid values: 6000, 7000, 8000, 10000, 12000, 14000, 16000, 20000, 24000, 28000, 32000, 40000, 48000, 56000, 64000, 80000, 96000, 112000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 384000, 448000, 512000, 576000, 640000, 768000, 896000, 1024000
     * @param string $LanguageCode Audio language code, whose length is always 3 characters.
     * @param AudioNormalizationSettings $AudioNormalization Audio transcoding special configuration information.
     * @param integer $AudioSampleRate Audio sampling rate, unit HZ.
     * @param AudioCodecDetail $AudioCodecDetails Audio encoding parameters.
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
        if (array_key_exists("AudioSelectorName",$param) and $param["AudioSelectorName"] !== null) {
            $this->AudioSelectorName = $param["AudioSelectorName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("LanguageCode",$param) and $param["LanguageCode"] !== null) {
            $this->LanguageCode = $param["LanguageCode"];
        }

        if (array_key_exists("AudioNormalization",$param) and $param["AudioNormalization"] !== null) {
            $this->AudioNormalization = new AudioNormalizationSettings();
            $this->AudioNormalization->deserialize($param["AudioNormalization"]);
        }

        if (array_key_exists("AudioSampleRate",$param) and $param["AudioSampleRate"] !== null) {
            $this->AudioSampleRate = $param["AudioSampleRate"];
        }

        if (array_key_exists("AudioCodecDetails",$param) and $param["AudioCodecDetails"] !== null) {
            $this->AudioCodecDetails = new AudioCodecDetail();
            $this->AudioCodecDetails->deserialize($param["AudioCodecDetails"]);
        }
    }
}
