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
 * @method string getVcodec() Obtain Codec: h264/h265/origin. Default value: h264.

origin: keep the original codec.
 * @method void setVcodec(string $Vcodec) Set Codec: h264/h265/origin. Default value: h264.

origin: keep the original codec.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: 0–8,000 Kbps.
If the value is 0, the original bitrate will be retained.
Note: transcoding templates require a unique bitrate. The final saved bitrate may differ from the input bitrate.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: 0–8,000 Kbps.
If the value is 0, the original bitrate will be retained.
Note: transcoding templates require a unique bitrate. The final saved bitrate may differ from the input bitrate.
 * @method string getAcodec() Obtain Audio codec: aac. Default value: aac.
Note: This parameter will not take effect for now and will be supported soon.
 * @method void setAcodec(string $Acodec) Set Audio codec: aac. Default value: aac.
Note: This parameter will not take effect for now and will be supported soon.
 * @method integer getAudioBitrate() Obtain Audio bitrate. Value range: 0–500 Kbps.
0 by default.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. Value range: 0–500 Kbps.
0 by default.
 * @method integer getWidth() Obtain Width. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
 * @method void setWidth(integer $Width) Set Width. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
 * @method integer getHeight() Obtain Height. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
 * @method void setHeight(integer $Height) Set Height. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
 * @method integer getFps() Obtain Frame rate. Default value: 0.
Range: 0-60 Fps.
 * @method void setFps(integer $Fps) Set Frame rate. Default value: 0.
Range: 0-60 Fps.
 * @method integer getGop() Obtain Keyframe interval, unit: second.
Original interval by default
Range: 2-6
 * @method void setGop(integer $Gop) Set Keyframe interval, unit: second.
Original interval by default
Range: 2-6
 * @method integer getRotate() Obtain Rotation angle. Default value: 0.
Value range: 0, 90, 180, 270
 * @method void setRotate(integer $Rotate) Set Rotation angle. Default value: 0.
Value range: 0, 90, 180, 270
 * @method string getProfile() Obtain Encoding quality:
baseline/main/high. Default value: baseline.
 * @method void setProfile(string $Profile) Set Encoding quality:
baseline/main/high. Default value: baseline.
 * @method integer getBitrateToOrig() Obtain Whether to use the original bitrate when the set bitrate is larger than the original bitrate.
0: no, 1: yes
Default value: 0.
 * @method void setBitrateToOrig(integer $BitrateToOrig) Set Whether to use the original bitrate when the set bitrate is larger than the original bitrate.
0: no, 1: yes
Default value: 0.
 * @method integer getHeightToOrig() Obtain Whether to use the original height when the set height is higher than the original height.
0: no, 1: yes
Default value: 0.
 * @method void setHeightToOrig(integer $HeightToOrig) Set Whether to use the original height when the set height is higher than the original height.
0: no, 1: yes
Default value: 0.
 * @method integer getFpsToOrig() Obtain Whether to use the original frame rate when the set frame rate is larger than the original frame rate.
0: no, 1: yes
Default value: 0.
 * @method void setFpsToOrig(integer $FpsToOrig) Set Whether to use the original frame rate when the set frame rate is larger than the original frame rate.
0: no, 1: yes
Default value: 0.
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
 * @method float getAdaptBitratePercent() Obtain Bitrate compression ratio of top speed code video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) Set Bitrate compression ratio of top speed code video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
 * @method integer getShortEdgeAsHeight() Obtain Whether to take the shorter side as height. 0: no, 1: yes. Default value: 0.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setShortEdgeAsHeight(integer $ShortEdgeAsHeight) Set Whether to take the shorter side as height. 0: no, 1: yes. Default value: 0.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getDRMType() Obtain The DRM encryption type. Valid values: fairplay, normalaes, widevine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDRMType(string $DRMType) Set The DRM encryption type. Valid values: fairplay, normalaes, widevine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDRMTracks() Obtain The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. Separate multiple tracks with “|”. You can choose only one video track (SD, HD, UHD1, or UHD2).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDRMTracks(string $DRMTracks) Set The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. Separate multiple tracks with “|”. You can choose only one video track (SD, HD, UHD1, or UHD2).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string Codec: h264/h265/origin. Default value: h264.

origin: keep the original codec.
     */
    public $Vcodec;

    /**
     * @var integer Video bitrate. Value range: 0–8,000 Kbps.
If the value is 0, the original bitrate will be retained.
Note: transcoding templates require a unique bitrate. The final saved bitrate may differ from the input bitrate.
     */
    public $VideoBitrate;

    /**
     * @var string Audio codec: aac. Default value: aac.
Note: This parameter will not take effect for now and will be supported soon.
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. Value range: 0–500 Kbps.
0 by default.
     */
    public $AudioBitrate;

    /**
     * @var integer Width. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
     */
    public $Width;

    /**
     * @var integer Height. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
     */
    public $Height;

    /**
     * @var integer Frame rate. Default value: 0.
Range: 0-60 Fps.
     */
    public $Fps;

    /**
     * @var integer Keyframe interval, unit: second.
Original interval by default
Range: 2-6
     */
    public $Gop;

    /**
     * @var integer Rotation angle. Default value: 0.
Value range: 0, 90, 180, 270
     */
    public $Rotate;

    /**
     * @var string Encoding quality:
baseline/main/high. Default value: baseline.
     */
    public $Profile;

    /**
     * @var integer Whether to use the original bitrate when the set bitrate is larger than the original bitrate.
0: no, 1: yes
Default value: 0.
     */
    public $BitrateToOrig;

    /**
     * @var integer Whether to use the original height when the set height is higher than the original height.
0: no, 1: yes
Default value: 0.
     */
    public $HeightToOrig;

    /**
     * @var integer Whether to use the original frame rate when the set frame rate is larger than the original frame rate.
0: no, 1: yes
Default value: 0.
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
     * @var float Bitrate compression ratio of top speed code video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
     */
    public $AdaptBitratePercent;

    /**
     * @var integer Whether to take the shorter side as height. 0: no, 1: yes. Default value: 0.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ShortEdgeAsHeight;

    /**
     * @var string The DRM encryption type. Valid values: fairplay, normalaes, widevine.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DRMType;

    /**
     * @var string The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. Separate multiple tracks with “|”. You can choose only one video track (SD, HD, UHD1, or UHD2).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DRMTracks;

    /**
     * @param string $Vcodec Codec: h264/h265/origin. Default value: h264.

origin: keep the original codec.
     * @param integer $VideoBitrate Video bitrate. Value range: 0–8,000 Kbps.
If the value is 0, the original bitrate will be retained.
Note: transcoding templates require a unique bitrate. The final saved bitrate may differ from the input bitrate.
     * @param string $Acodec Audio codec: aac. Default value: aac.
Note: This parameter will not take effect for now and will be supported soon.
     * @param integer $AudioBitrate Audio bitrate. Value range: 0–500 Kbps.
0 by default.
     * @param integer $Width Width. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
     * @param integer $Height Height. Default value: 0.
Value range: [0-3,000].
The value must be a multiple of 2. The original width is 0.
     * @param integer $Fps Frame rate. Default value: 0.
Range: 0-60 Fps.
     * @param integer $Gop Keyframe interval, unit: second.
Original interval by default
Range: 2-6
     * @param integer $Rotate Rotation angle. Default value: 0.
Value range: 0, 90, 180, 270
     * @param string $Profile Encoding quality:
baseline/main/high. Default value: baseline.
     * @param integer $BitrateToOrig Whether to use the original bitrate when the set bitrate is larger than the original bitrate.
0: no, 1: yes
Default value: 0.
     * @param integer $HeightToOrig Whether to use the original height when the set height is higher than the original height.
0: no, 1: yes
Default value: 0.
     * @param integer $FpsToOrig Whether to use the original frame rate when the set frame rate is larger than the original frame rate.
0: no, 1: yes
Default value: 0.
     * @param integer $NeedVideo Whether to keep the video. 0: no; 1: yes.
     * @param integer $NeedAudio Whether to keep the audio. 0: no; 1: yes.
     * @param integer $TemplateId Template ID.
     * @param string $TemplateName Template name.
     * @param string $Description Template description.
     * @param integer $AiTransCode Whether it is a top speed codec template. 0: no, 1: yes. Default value: 0.
     * @param float $AdaptBitratePercent Bitrate compression ratio of top speed code video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
     * @param integer $ShortEdgeAsHeight Whether to take the shorter side as height. 0: no, 1: yes. Default value: 0.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $DRMType The DRM encryption type. Valid values: fairplay, normalaes, widevine.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DRMTracks The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. Separate multiple tracks with “|”. You can choose only one video track (SD, HD, UHD1, or UHD2).
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

        if (array_key_exists("ShortEdgeAsHeight",$param) and $param["ShortEdgeAsHeight"] !== null) {
            $this->ShortEdgeAsHeight = $param["ShortEdgeAsHeight"];
        }

        if (array_key_exists("DRMType",$param) and $param["DRMType"] !== null) {
            $this->DRMType = $param["DRMType"];
        }

        if (array_key_exists("DRMTracks",$param) and $param["DRMTracks"] !== null) {
            $this->DRMTracks = $param["DRMTracks"];
        }
    }
}
