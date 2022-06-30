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
 * @method string getVcodec() Obtain Video codec. Valid values: h264, h265, origin (default)

origin: original codec as the output codec
 * @method void setVcodec(string $Vcodec) Set Video codec. Valid values: h264, h265, origin (default)

origin: original codec as the output codec
 * @method string getAcodec() Obtain Audio codec. Defaut value: aac.
Note: this parameter is unsupported now.
 * @method void setAcodec(string $Acodec) Set Audio codec. Defaut value: aac.
Note: this parameter is unsupported now.
 * @method integer getAudioBitrate() Obtain Audio bitrate. Default value: 0.
Value range: 0-500.
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. Default value: 0.
Value range: 0-500.
 * @method string getDescription() Obtain Template description.
 * @method void setDescription(string $Description) Set Template description.
 * @method integer getVideoBitrate() Obtain Video bitrate in Kbps. Value range: 100-8000.
Note: the transcoding template requires that the bitrate be unique. Therefore, the final saved bitrate may be different from the input bitrate.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate in Kbps. Value range: 100-8000.
Note: the transcoding template requires that the bitrate be unique. Therefore, the final saved bitrate may be different from the input bitrate.
 * @method integer getWidth() Obtain Width in pixels. Value range: 0-3000.
It must be a multiple of 2. The original width is 0.
 * @method void setWidth(integer $Width) Set Width in pixels. Value range: 0-3000.
It must be a multiple of 2. The original width is 0.
 * @method integer getNeedVideo() Obtain Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method void setNeedVideo(integer $NeedVideo) Set Whether to keep the video. 0: no; 1: yes. Default value: 1.
 * @method integer getNeedAudio() Obtain Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method void setNeedAudio(integer $NeedAudio) Set Whether to keep the audio. 0: no; 1: yes. Default value: 1.
 * @method integer getHeight() Obtain Height in pixels. Value range: 0-3000.
It must be a multiple of 2. The original height is 0.
 * @method void setHeight(integer $Height) Set Height in pixels. Value range: 0-3000.
It must be a multiple of 2. The original height is 0.
 * @method integer getFps() Obtain Frame rate in fps. Default value: 0.
Value range: 0-60
 * @method void setFps(integer $Fps) Set Frame rate in fps. Default value: 0.
Value range: 0-60
 * @method integer getGop() Obtain Keyframe interval in seconds.
Value range: 2-6
 * @method void setGop(integer $Gop) Set Keyframe interval in seconds.
Value range: 2-6
 * @method integer getRotate() Obtain Rotation angle. Default value: 0.
Valid values: 0, 90, 180, 270
 * @method void setRotate(integer $Rotate) Set Rotation angle. Default value: 0.
Valid values: 0, 90, 180, 270
 * @method string getProfile() Obtain Encoding quality:
baseline/main/high.
 * @method void setProfile(string $Profile) Set Encoding quality:
baseline/main/high.
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
 * @method float getAdaptBitratePercent() Obtain Bitrate compression ratio of top speed codec video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) Set Bitrate compression ratio of top speed codec video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
 * @method integer getShortEdgeAsHeight() Obtain Whether to use the short side as the video height. 0: no, 1: yes. Default value: 0.
 * @method void setShortEdgeAsHeight(integer $ShortEdgeAsHeight) Set Whether to use the short side as the video height. 0: no, 1: yes. Default value: 0.
 * @method string getDRMType() Obtain The DRM encryption type. Valid values: fairplay, normalaes, widevine.
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
 * @method void setDRMType(string $DRMType) Set The DRM encryption type. Valid values: fairplay, normalaes, widevine.
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
 * @method string getDRMTracks() Obtain The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. You can choose only one video track (SD, HD, UHD1, or UHD2).
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
 * @method void setDRMTracks(string $DRMTracks) Set The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. You can choose only one video track (SD, HD, UHD1, or UHD2).
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
 */
class ModifyLiveTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Video codec. Valid values: h264, h265, origin (default)

origin: original codec as the output codec
     */
    public $Vcodec;

    /**
     * @var string Audio codec. Defaut value: aac.
Note: this parameter is unsupported now.
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. Default value: 0.
Value range: 0-500.
     */
    public $AudioBitrate;

    /**
     * @var string Template description.
     */
    public $Description;

    /**
     * @var integer Video bitrate in Kbps. Value range: 100-8000.
Note: the transcoding template requires that the bitrate be unique. Therefore, the final saved bitrate may be different from the input bitrate.
     */
    public $VideoBitrate;

    /**
     * @var integer Width in pixels. Value range: 0-3000.
It must be a multiple of 2. The original width is 0.
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
     * @var integer Height in pixels. Value range: 0-3000.
It must be a multiple of 2. The original height is 0.
     */
    public $Height;

    /**
     * @var integer Frame rate in fps. Default value: 0.
Value range: 0-60
     */
    public $Fps;

    /**
     * @var integer Keyframe interval in seconds.
Value range: 2-6
     */
    public $Gop;

    /**
     * @var integer Rotation angle. Default value: 0.
Valid values: 0, 90, 180, 270
     */
    public $Rotate;

    /**
     * @var string Encoding quality:
baseline/main/high.
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
     * @var float Bitrate compression ratio of top speed codec video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
     */
    public $AdaptBitratePercent;

    /**
     * @var integer Whether to use the short side as the video height. 0: no, 1: yes. Default value: 0.
     */
    public $ShortEdgeAsHeight;

    /**
     * @var string The DRM encryption type. Valid values: fairplay, normalaes, widevine.
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
     */
    public $DRMType;

    /**
     * @var string The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. You can choose only one video track (SD, HD, UHD1, or UHD2).
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
     */
    public $DRMTracks;

    /**
     * @param integer $TemplateId Template ID.
     * @param string $Vcodec Video codec. Valid values: h264, h265, origin (default)

origin: original codec as the output codec
     * @param string $Acodec Audio codec. Defaut value: aac.
Note: this parameter is unsupported now.
     * @param integer $AudioBitrate Audio bitrate. Default value: 0.
Value range: 0-500.
     * @param string $Description Template description.
     * @param integer $VideoBitrate Video bitrate in Kbps. Value range: 100-8000.
Note: the transcoding template requires that the bitrate be unique. Therefore, the final saved bitrate may be different from the input bitrate.
     * @param integer $Width Width in pixels. Value range: 0-3000.
It must be a multiple of 2. The original width is 0.
     * @param integer $NeedVideo Whether to keep the video. 0: no; 1: yes. Default value: 1.
     * @param integer $NeedAudio Whether to keep the audio. 0: no; 1: yes. Default value: 1.
     * @param integer $Height Height in pixels. Value range: 0-3000.
It must be a multiple of 2. The original height is 0.
     * @param integer $Fps Frame rate in fps. Default value: 0.
Value range: 0-60
     * @param integer $Gop Keyframe interval in seconds.
Value range: 2-6
     * @param integer $Rotate Rotation angle. Default value: 0.
Valid values: 0, 90, 180, 270
     * @param string $Profile Encoding quality:
baseline/main/high.
     * @param integer $BitrateToOrig Whether to use the original bitrate when the set bitrate is larger than the original bitrate.
0: no, 1: yes
Default value: 0.
     * @param integer $HeightToOrig Whether to use the original height when the set height is higher than the original height.
0: no, 1: yes
Default value: 0.
     * @param integer $FpsToOrig Whether to use the original frame rate when the set frame rate is larger than the original frame rate.
0: no, 1: yes
Default value: 0.
     * @param float $AdaptBitratePercent Bitrate compression ratio of top speed codec video.
Target bitrate of top speed code = VideoBitrate * (1-AdaptBitratePercent)

Value range: 0.0-0.5.
     * @param integer $ShortEdgeAsHeight Whether to use the short side as the video height. 0: no, 1: yes. Default value: 0.
     * @param string $DRMType The DRM encryption type. Valid values: fairplay, normalaes, widevine.
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
     * @param string $DRMTracks The tracks to encrypt. Valid values: AUDIO, SD, HD, UHD1, UHD2. You can choose only one video track (SD, HD, UHD1, or UHD2).
If you do not pass this parameter or pass in an empty string, the existing configuration will be reset.
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
