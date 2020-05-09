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
 * Transcoding template information.
 *
 * @method string getVcodec() Obtain Video encoding format:
h264/h265.
 * @method void setVcodec(string $Vcodec) Set Video encoding format:
h264/h265.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: 100–8000 Kbps.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: 100–8000 Kbps.
 * @method string getAcodec() Obtain Audio codec. Valid values: aac, mp3.
 * @method void setAcodec(string $Acodec) Set Audio codec. Valid values: aac, mp3.
 * @method integer getAudioBitrate() Obtain Audio bitrate. Value range: 0–500 Kbps.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. Value range: 0–500 Kbps.
 * @method integer getWidth() Obtain Width. Value range: 0–3000.
 * @method void setWidth(integer $Width) Set Width. Value range: 0–3000.
 * @method integer getHeight() Obtain Height. Value range: 0–3000.
 * @method void setHeight(integer $Height) Set Height. Value range: 0–3000.
 * @method integer getFps() Obtain Frame rate. Value range: 0–200 FPS.
 * @method void setFps(integer $Fps) Set Frame rate. Value range: 0–200 FPS.
 * @method integer getGop() Obtain Keyframe interval. Value range: 1–50s.
 * @method void setGop(integer $Gop) Set Keyframe interval. Value range: 1–50s.
 * @method integer getRotate() Obtain Rotation angle. Valid values: 0, 90, 180, 270.
 * @method void setRotate(integer $Rotate) Set Rotation angle. Valid values: 0, 90, 180, 270.
 * @method string getProfile() Obtain Encoding quality. Valid values:
baseline, main, high.
 * @method void setProfile(string $Profile) Set Encoding quality. Valid values:
baseline, main, high.
 * @method integer getBitrateToOrig() Obtain Whether to not exceed the original bitrate. 0: no; 1: yes.
 * @method void setBitrateToOrig(integer $BitrateToOrig) Set Whether to not exceed the original bitrate. 0: no; 1: yes.
 * @method integer getHeightToOrig() Obtain Whether to not exceed the original height. 0: no; 1: yes.
 * @method void setHeightToOrig(integer $HeightToOrig) Set Whether to not exceed the original height. 0: no; 1: yes.
 * @method integer getFpsToOrig() Obtain Whether to not exceed the original frame rate. 0: no; 1: yes.
 * @method void setFpsToOrig(integer $FpsToOrig) Set Whether to not exceed the original frame rate. 0: no; 1: yes.
 * @method integer getNeedVideo() Obtain Whether to keep the video. 0: no; 1: yes.
 * @method void setNeedVideo(integer $NeedVideo) Set Whether to keep the video. 0: no; 1: yes.
 * @method integer getNeedAudio() Obtain Whether to keep the audio. 0: no; 1: yes.
 * @method void setNeedAudio(integer $NeedAudio) Set Whether to keep the audio. 0: no; 1: yes.
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method string getDescription() Obtain Template description.
 * @method void setDescription(string $Description) Set Template description.
 * @method integer getAiTransCode() Obtain Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
 * @method void setAiTransCode(integer $AiTransCode) Set Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
 * @method float getAdaptBitratePercent() Obtain `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) Set `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string Video encoding format:
h264/h265.
     */
    public $Vcodec;

    /**
     * @var integer Video bitrate. Value range: 100–8000 Kbps.
     */
    public $VideoBitrate;

    /**
     * @var string Audio codec. Valid values: aac, mp3.
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. Value range: 0–500 Kbps.
     */
    public $AudioBitrate;

    /**
     * @var integer Width. Value range: 0–3000.
     */
    public $Width;

    /**
     * @var integer Height. Value range: 0–3000.
     */
    public $Height;

    /**
     * @var integer Frame rate. Value range: 0–200 FPS.
     */
    public $Fps;

    /**
     * @var integer Keyframe interval. Value range: 1–50s.
     */
    public $Gop;

    /**
     * @var integer Rotation angle. Valid values: 0, 90, 180, 270.
     */
    public $Rotate;

    /**
     * @var string Encoding quality. Valid values:
baseline, main, high.
     */
    public $Profile;

    /**
     * @var integer Whether to not exceed the original bitrate. 0: no; 1: yes.
     */
    public $BitrateToOrig;

    /**
     * @var integer Whether to not exceed the original height. 0: no; 1: yes.
     */
    public $HeightToOrig;

    /**
     * @var integer Whether to not exceed the original frame rate. 0: no; 1: yes.
     */
    public $FpsToOrig;

    /**
     * @var integer Whether to keep the video. 0: no; 1: yes.
     */
    public $NeedVideo;

    /**
     * @var integer Whether to keep the audio. 0: no; 1: yes.
     */
    public $NeedAudio;

    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var string Template description.
     */
    public $Description;

    /**
     * @var integer Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
     */
    public $AiTransCode;

    /**
     * @var float `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
     */
    public $AdaptBitratePercent;

    /**
     * @param string $Vcodec Video encoding format:
h264/h265.
     * @param integer $VideoBitrate Video bitrate. Value range: 100–8000 Kbps.
     * @param string $Acodec Audio codec. Valid values: aac, mp3.
     * @param integer $AudioBitrate Audio bitrate. Value range: 0–500 Kbps.
     * @param integer $Width Width. Value range: 0–3000.
     * @param integer $Height Height. Value range: 0–3000.
     * @param integer $Fps Frame rate. Value range: 0–200 FPS.
     * @param integer $Gop Keyframe interval. Value range: 1–50s.
     * @param integer $Rotate Rotation angle. Valid values: 0, 90, 180, 270.
     * @param string $Profile Encoding quality. Valid values:
baseline, main, high.
     * @param integer $BitrateToOrig Whether to not exceed the original bitrate. 0: no; 1: yes.
     * @param integer $HeightToOrig Whether to not exceed the original height. 0: no; 1: yes.
     * @param integer $FpsToOrig Whether to not exceed the original frame rate. 0: no; 1: yes.
     * @param integer $NeedVideo Whether to keep the video. 0: no; 1: yes.
     * @param integer $NeedAudio Whether to keep the audio. 0: no; 1: yes.
     * @param integer $TemplateId Template ID.
     * @param string $TemplateName Template name.
     * @param string $Description Template description.
     * @param integer $AiTransCode Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
     * @param float $AdaptBitratePercent `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
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
        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
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

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AiTransCode",$param) and $param["AiTransCode"] !== null) {
            $this->AiTransCode = $param["AiTransCode"];
        }

        if (array_key_exists("AdaptBitratePercent",$param) and $param["AdaptBitratePercent"] !== null) {
            $this->AdaptBitratePercent = $param["AdaptBitratePercent"];
        }
    }
}
