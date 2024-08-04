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
 * Output information.
 *
 * @method string getName() Obtain Output name.
 * @method void setName(string $Name) Set Output name.
 * @method array getAudioTemplateNames() Obtain Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioTemplateNames(array $AudioTemplateNames) Set Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getVideoTemplateNames() Obtain Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoTemplateNames(array $VideoTemplateNames) Set Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Scte35SettingsInfo getScte35Settings() Obtain SCTE-35 information configuration.
 * @method void setScte35Settings(Scte35SettingsInfo $Scte35Settings) Set SCTE-35 information configuration.
 * @method array getAVTemplateNames() Obtain Audio/Video transcoding template name. If `HlsRemuxSettings.Scheme` is `MERGE`, there is 1 audio/video transcoding template. Otherwise, this parameter is empty.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAVTemplateNames(array $AVTemplateNames) Set Audio/Video transcoding template name. If `HlsRemuxSettings.Scheme` is `MERGE`, there is 1 audio/video transcoding template. Otherwise, this parameter is empty.
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getCaptionTemplateNames() Obtain For the subtitle template used, only the AVTemplateNames is valid.
 * @method void setCaptionTemplateNames(array $CaptionTemplateNames) Set For the subtitle template used, only the AVTemplateNames is valid.
 * @method TimedMetadataSettingInfo getTimedMetadataSettings() Obtain Meta information controls configuration.
 * @method void setTimedMetadataSettings(TimedMetadataSettingInfo $TimedMetadataSettings) Set Meta information controls configuration.
 * @method array getFrameCaptureTemplateNames() Obtain Frame capture template name array. Quantity limit: [0,1].
 * @method void setFrameCaptureTemplateNames(array $FrameCaptureTemplateNames) Set Frame capture template name array. Quantity limit: [0,1].
 */
class OutputInfo extends AbstractModel
{
    /**
     * @var string Output name.
     */
    public $Name;

    /**
     * @var array Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioTemplateNames;

    /**
     * @var array Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoTemplateNames;

    /**
     * @var Scte35SettingsInfo SCTE-35 information configuration.
     */
    public $Scte35Settings;

    /**
     * @var array Audio/Video transcoding template name. If `HlsRemuxSettings.Scheme` is `MERGE`, there is 1 audio/video transcoding template. Otherwise, this parameter is empty.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AVTemplateNames;

    /**
     * @var array For the subtitle template used, only the AVTemplateNames is valid.
     */
    public $CaptionTemplateNames;

    /**
     * @var TimedMetadataSettingInfo Meta information controls configuration.
     */
    public $TimedMetadataSettings;

    /**
     * @var array Frame capture template name array. Quantity limit: [0,1].
     */
    public $FrameCaptureTemplateNames;

    /**
     * @param string $Name Output name.
     * @param array $AudioTemplateNames Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $VideoTemplateNames Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Scte35SettingsInfo $Scte35Settings SCTE-35 information configuration.
     * @param array $AVTemplateNames Audio/Video transcoding template name. If `HlsRemuxSettings.Scheme` is `MERGE`, there is 1 audio/video transcoding template. Otherwise, this parameter is empty.
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $CaptionTemplateNames For the subtitle template used, only the AVTemplateNames is valid.
     * @param TimedMetadataSettingInfo $TimedMetadataSettings Meta information controls configuration.
     * @param array $FrameCaptureTemplateNames Frame capture template name array. Quantity limit: [0,1].
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
    }
}
