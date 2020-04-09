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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveTranscodeTemplate request structure.
 *
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getVcodec() Obtain Video encoding format:
h264/h265.
 * @method void setVcodec(string $Vcodec) Set Video encoding format:
h264/h265.
 * @method string getAcodec() Obtain Audio encoding format:
aac/mp3.
 * @method void setAcodec(string $Acodec) Set Audio encoding format:
aac/mp3.
 * @method integer getAudioBitrate() Obtain Audio bitrate. Value range: 0–500. Default value: 0.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. Value range: 0–500. Default value: 0.
 * @method string getDescription() Obtain Template description.
 * @method void setDescription(string $Description) Set Template description.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: 100–8,000
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: 100–8,000
 * @method integer getWidth() Obtain Width. Value range: 0–3,000
 * @method void setWidth(integer $Width) Set Width. Value range: 0–3,000
 * @method integer getNeedVideo() Obtain Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method void setNeedVideo(integer $NeedVideo) Set Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method integer getNeedAudio() Obtain Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method void setNeedAudio(integer $NeedAudio) Set Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method integer getHeight() Obtain Height. Value range: 0–3,000
 * @method void setHeight(integer $Height) Set Height. Value range: 0–3,000
 * @method integer getFps() Obtain Frame rate. Value range: 0–200
 * @method void setFps(integer $Fps) Set Frame rate. Value range: 0–200
 * @method integer getGop() Obtain Keyframe interval in seconds. Value range: 0–50
 * @method void setGop(integer $Gop) Set Keyframe interval in seconds. Value range: 0–50
 * @method integer getRotate() Obtain Rotation angle. Valid values: 0, 90, 180, 270
 * @method void setRotate(integer $Rotate) Set Rotation angle. Valid values: 0, 90, 180, 270
 * @method string getProfile() Obtain Encoding quality:
baseline/main/high.
 * @method void setProfile(string $Profile) Set Encoding quality:
baseline/main/high.
 * @method integer getBitrateToOrig() Obtain Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
 * @method void setBitrateToOrig(integer $BitrateToOrig) Set Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
 * @method integer getHeightToOrig() Obtain Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
 * @method void setHeightToOrig(integer $HeightToOrig) Set Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
 * @method integer getFpsToOrig() Obtain Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
 * @method void setFpsToOrig(integer $FpsToOrig) Set Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
 * @method float getAdaptBitratePercent() Obtain VideoBitrate minus TESHD bitrate. Value range: 0.1–0.5.
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) Set VideoBitrate minus TESHD bitrate. Value range: 0.1–0.5.
 */
class ModifyLiveTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Video encoding format:
h264/h265.
     */
    public $Vcodec;

    /**
     * @var string Audio encoding format:
aac/mp3.
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. Value range: 0–500. Default value: 0.
     */
    public $AudioBitrate;

    /**
     * @var string Template description.
     */
    public $Description;

    /**
     * @var integer Video bitrate. Value range: 100–8,000
     */
    public $VideoBitrate;

    /**
     * @var integer Width. Value range: 0–3,000
     */
    public $Width;

    /**
     * @var integer Whether to keep the video. 0: no; 1: yes. Default value: 1.
     */
    public $NeedVideo;

    /**
     * @var integer Whether to keep the audio. 0: no; 1: yes. Default value: 1.
     */
    public $NeedAudio;

    /**
     * @var integer Height. Value range: 0–3,000
     */
    public $Height;

    /**
     * @var integer Frame rate. Value range: 0–200
     */
    public $Fps;

    /**
     * @var integer Keyframe interval in seconds. Value range: 0–50
     */
    public $Gop;

    /**
     * @var integer Rotation angle. Valid values: 0, 90, 180, 270
     */
    public $Rotate;

    /**
     * @var string Encoding quality:
baseline/main/high.
     */
    public $Profile;

    /**
     * @var integer Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
     */
    public $BitrateToOrig;

    /**
     * @var integer Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
     */
    public $HeightToOrig;

    /**
     * @var integer Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
     */
    public $FpsToOrig;

    /**
     * @var float VideoBitrate minus TESHD bitrate. Value range: 0.1–0.5.
     */
    public $AdaptBitratePercent;

    /**
     * @param integer $TemplateId Template ID.
     * @param string $Vcodec Video encoding format:
h264/h265.
     * @param string $Acodec Audio encoding format:
aac/mp3.
     * @param integer $AudioBitrate Audio bitrate. Value range: 0–500. Default value: 0.
     * @param string $Description Template description.
     * @param integer $VideoBitrate Video bitrate. Value range: 100–8,000
     * @param integer $Width Width. Value range: 0–3,000
     * @param integer $NeedVideo Whether to keep the video. 0: no; 1: yes. Default value: 1.
     * @param integer $NeedAudio Whether to keep the audio. 0: no; 1: yes. Default value: 1.
     * @param integer $Height Height. Value range: 0–3,000
     * @param integer $Fps Frame rate. Value range: 0–200
     * @param integer $Gop Keyframe interval in seconds. Value range: 0–50
     * @param integer $Rotate Rotation angle. Valid values: 0, 90, 180, 270
     * @param string $Profile Encoding quality:
baseline/main/high.
     * @param integer $BitrateToOrig Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
     * @param integer $HeightToOrig Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
     * @param integer $FpsToOrig Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
     * @param float $AdaptBitratePercent VideoBitrate minus TESHD bitrate. Value range: 0.1–0.5.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("BitrateToOrig",$param) and $param["BitrateToOrig"] !== null) {
            $this->BitrateToOrig = $param["BitrateToOrig"];
        }

        if (array_key_exists("HeightToOrig",$param) and $param["HeightToOrig"] !== null) {
            $this->HeightToOrig = $param["HeightToOrig"];
        }

        if (array_key_exists("FpsToOrig",$param) and $param["FpsToOrig"] !== null) {
            $this->FpsToOrig = $param["FpsToOrig"];
        }

        if (array_key_exists("AdaptBitratePercent",$param) and $param["AdaptBitratePercent"] !== null) {
            $this->AdaptBitratePercent = $param["AdaptBitratePercent"];
        }
    }
}
