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
 * CreateLiveTranscodeTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name, such as 900 900p. This can be only a combination of letters and digits.
 * @method void setTemplateName(string $TemplateName) Set Template name, such as 900 900p. This can be only a combination of letters and digits.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: 100–8,000.
Note: The bitrate must be a multiple of 100.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: 100–8,000.
Note: The bitrate must be a multiple of 100.
 * @method string getVcodec() Obtain Video encoding format. Valid values: h264, h265. Default value: h264.
 * @method void setVcodec(string $Vcodec) Set Video encoding format. Valid values: h264, h265. Default value: h264.
 * @method string getAcodec() Obtain Audio encoding in ACC format. Default value: original audio format.
Note: This parameter will take effect later.
 * @method void setAcodec(string $Acodec) Set Audio encoding in ACC format. Default value: original audio format.
Note: This parameter will take effect later.
 * @method integer getAudioBitrate() Obtain Audio bitrate. Value range: 0–500. Default value: 0.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. Value range: 0–500. Default value: 0.
 * @method string getDescription() Obtain Template description.
 * @method void setDescription(string $Description) Set Template description.
 * @method integer getWidth() Obtain Width. Default value: 0.
 * @method void setWidth(integer $Width) Set Width. Default value: 0.
 * @method integer getNeedVideo() Obtain Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method void setNeedVideo(integer $NeedVideo) Set Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method integer getNeedAudio() Obtain Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method void setNeedAudio(integer $NeedAudio) Set Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method integer getHeight() Obtain Height. Default value: 0.
 * @method void setHeight(integer $Height) Set Height. Default value: 0.
 * @method integer getFps() Obtain Frame rate. Default value: 0.
 * @method void setFps(integer $Fps) Set Frame rate. Default value: 0.
 * @method integer getGop() Obtain Keyframe interval in seconds. Original interval by default
 * @method void setGop(integer $Gop) Set Keyframe interval in seconds. Original interval by default
 * @method integer getRotate() Obtain Whether to rotate. 0: no; 1: yes. Default value: 0.
 * @method void setRotate(integer $Rotate) Set Whether to rotate. 0: no; 1: yes. Default value: 0.
 * @method string getProfile() Obtain Encoding quality:
baseline/main/high. Default value: baseline.
 * @method void setProfile(string $Profile) Set Encoding quality:
baseline/main/high. Default value: baseline.
 * @method integer getBitrateToOrig() Obtain Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
 * @method void setBitrateToOrig(integer $BitrateToOrig) Set Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
 * @method integer getHeightToOrig() Obtain Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
 * @method void setHeightToOrig(integer $HeightToOrig) Set Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
 * @method integer getFpsToOrig() Obtain Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
 * @method void setFpsToOrig(integer $FpsToOrig) Set Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
 * @method integer getAiTransCode() Obtain Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
 * @method void setAiTransCode(integer $AiTransCode) Set Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
 * @method float getAdaptBitratePercent() Obtain `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) Set `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
 */
class CreateLiveTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, such as 900 900p. This can be only a combination of letters and digits.
     */
    public $TemplateName;

    /**
     * @var integer Video bitrate. Value range: 100–8,000.
Note: The bitrate must be a multiple of 100.
     */
    public $VideoBitrate;

    /**
     * @var string Video encoding format. Valid values: h264, h265. Default value: h264.
     */
    public $Vcodec;

    /**
     * @var string Audio encoding in ACC format. Default value: original audio format.
Note: This parameter will take effect later.
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
     * @var integer Width. Default value: 0.
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
     * @var integer Height. Default value: 0.
     */
    public $Height;

    /**
     * @var integer Frame rate. Default value: 0.
     */
    public $Fps;

    /**
     * @var integer Keyframe interval in seconds. Original interval by default
     */
    public $Gop;

    /**
     * @var integer Whether to rotate. 0: no; 1: yes. Default value: 0.
     */
    public $Rotate;

    /**
     * @var string Encoding quality:
baseline/main/high. Default value: baseline.
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
     * @var integer Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
     */
    public $AiTransCode;

    /**
     * @var float `VideoBitrate` minus top speed codec bitrate. Value range: 0.1–0.5.
     */
    public $AdaptBitratePercent;

    /**
     * @param string $TemplateName Template name, such as 900 900p. This can be only a combination of letters and digits.
     * @param integer $VideoBitrate Video bitrate. Value range: 100–8,000.
Note: The bitrate must be a multiple of 100.
     * @param string $Vcodec Video encoding format. Valid values: h264, h265. Default value: h264.
     * @param string $Acodec Audio encoding in ACC format. Default value: original audio format.
Note: This parameter will take effect later.
     * @param integer $AudioBitrate Audio bitrate. Value range: 0–500. Default value: 0.
     * @param string $Description Template description.
     * @param integer $Width Width. Default value: 0.
     * @param integer $NeedVideo Whether to keep the video. 0: no; 1: yes. Default value: 1.
     * @param integer $NeedAudio Whether to keep the audio. 0: no; 1: yes. Default value: 1.
     * @param integer $Height Height. Default value: 0.
     * @param integer $Fps Frame rate. Default value: 0.
     * @param integer $Gop Keyframe interval in seconds. Original interval by default
     * @param integer $Rotate Whether to rotate. 0: no; 1: yes. Default value: 0.
     * @param string $Profile Encoding quality:
baseline/main/high. Default value: baseline.
     * @param integer $BitrateToOrig Whether to not exceed the original bitrate. 0: no; 1: yes. Default value: 0.
     * @param integer $HeightToOrig Whether to not exceed the original height. 0: no; 1: yes. Default value: 0.
     * @param integer $FpsToOrig Whether to not exceed the original frame rate. 0: no; 1: yes. Default value: 0.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
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

        if (array_key_exists("AiTransCode",$param) and $param["AiTransCode"] !== null) {
            $this->AiTransCode = $param["AiTransCode"];
        }

        if (array_key_exists("AdaptBitratePercent",$param) and $param["AdaptBitratePercent"] !== null) {
            $this->AdaptBitratePercent = $param["AdaptBitratePercent"];
        }
    }
}
