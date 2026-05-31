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
 * Output information.
 *
 * @method string getName() Obtain Output name.
 * @method void setName(string $Name) Set Output name.
 * @method array getAudioTemplateNames() Obtain Audio transcoding template name array.
RTMP limit [0, 1], other limits [0, 20].
 * @method void setAudioTemplateNames(array $AudioTemplateNames) Set Audio transcoding template name array.
RTMP limit [0, 1], other limits [0, 20].
 * @method array getVideoTemplateNames() Obtain Video transcoding template name array, with the maximum number of [0, 1].
 * @method void setVideoTemplateNames(array $VideoTemplateNames) Set Video transcoding template name array, with the maximum number of [0, 1].
 * @method Scte35SettingsInfo getScte35Settings() Obtain Scte-35 information configuration.
 * @method void setScte35Settings(Scte35SettingsInfo $Scte35Settings) Set Scte-35 information configuration.
 * @method array getAVTemplateNames() Obtain Audio/video transcoding template name array, with the maximum number of 1.
 * @method void setAVTemplateNames(array $AVTemplateNames) Set Audio/video transcoding template name array, with the maximum number of 1.
 * @method array getCaptionTemplateNames() Obtain The used subtitle template is only valid for merge template.
 * @method void setCaptionTemplateNames(array $CaptionTemplateNames) Set The used subtitle template is only valid for merge template.
 * @method TimedMetadataSettingInfo getTimedMetadataSettings() Obtain Meta-information control configuration.
 * @method void setTimedMetadataSettings(TimedMetadataSettingInfo $TimedMetadataSettings) Set Meta-information control configuration.
 * @method array getFrameCaptureTemplateNames() Obtain Screenshot transcode template name array. Limit: 1.
 * @method void setFrameCaptureTemplateNames(array $FrameCaptureTemplateNames) Set Screenshot transcode template name array. Limit: 1.
 * @method string getNameModifier() Obtain Modify the name of the sub-m3u8.
 * @method void setNameModifier(string $NameModifier) Set Modify the name of the sub-m3u8.
 */
class OutputInfo extends AbstractModel
{
    /**
     * @var string Output name.
     */
    public $Name;

    /**
     * @var array Audio transcoding template name array.
RTMP limit [0, 1], other limits [0, 20].
     */
    public $AudioTemplateNames;

    /**
     * @var array Video transcoding template name array, with the maximum number of [0, 1].
     */
    public $VideoTemplateNames;

    /**
     * @var Scte35SettingsInfo Scte-35 information configuration.
     */
    public $Scte35Settings;

    /**
     * @var array Audio/video transcoding template name array, with the maximum number of 1.
     */
    public $AVTemplateNames;

    /**
     * @var array The used subtitle template is only valid for merge template.
     */
    public $CaptionTemplateNames;

    /**
     * @var TimedMetadataSettingInfo Meta-information control configuration.
     */
    public $TimedMetadataSettings;

    /**
     * @var array Screenshot transcode template name array. Limit: 1.
     */
    public $FrameCaptureTemplateNames;

    /**
     * @var string Modify the name of the sub-m3u8.
     */
    public $NameModifier;

    /**
     * @param string $Name Output name.
     * @param array $AudioTemplateNames Audio transcoding template name array.
RTMP limit [0, 1], other limits [0, 20].
     * @param array $VideoTemplateNames Video transcoding template name array, with the maximum number of [0, 1].
     * @param Scte35SettingsInfo $Scte35Settings Scte-35 information configuration.
     * @param array $AVTemplateNames Audio/video transcoding template name array, with the maximum number of 1.
     * @param array $CaptionTemplateNames The used subtitle template is only valid for merge template.
     * @param TimedMetadataSettingInfo $TimedMetadataSettings Meta-information control configuration.
     * @param array $FrameCaptureTemplateNames Screenshot transcode template name array. Limit: 1.
     * @param string $NameModifier Modify the name of the sub-m3u8.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AudioTemplateNames",$param) and $param["AudioTemplateNames"] !== null) {
            $this->AudioTemplateNames = $param["AudioTemplateNames"];
        }

        if (array_key_exists("VideoTemplateNames",$param) and $param["VideoTemplateNames"] !== null) {
            $this->VideoTemplateNames = $param["VideoTemplateNames"];
        }

        if (array_key_exists("Scte35Settings",$param) and $param["Scte35Settings"] !== null) {
            $this->Scte35Settings = new Scte35SettingsInfo();
            $this->Scte35Settings->deserialize($param["Scte35Settings"]);
        }

        if (array_key_exists("AVTemplateNames",$param) and $param["AVTemplateNames"] !== null) {
            $this->AVTemplateNames = $param["AVTemplateNames"];
        }

        if (array_key_exists("CaptionTemplateNames",$param) and $param["CaptionTemplateNames"] !== null) {
            $this->CaptionTemplateNames = $param["CaptionTemplateNames"];
        }

        if (array_key_exists("TimedMetadataSettings",$param) and $param["TimedMetadataSettings"] !== null) {
            $this->TimedMetadataSettings = new TimedMetadataSettingInfo();
            $this->TimedMetadataSettings->deserialize($param["TimedMetadataSettings"]);
        }

        if (array_key_exists("FrameCaptureTemplateNames",$param) and $param["FrameCaptureTemplateNames"] !== null) {
            $this->FrameCaptureTemplateNames = $param["FrameCaptureTemplateNames"];
        }

        if (array_key_exists("NameModifier",$param) and $param["NameModifier"] !== null) {
            $this->NameModifier = $param["NameModifier"];
        }
    }
}
