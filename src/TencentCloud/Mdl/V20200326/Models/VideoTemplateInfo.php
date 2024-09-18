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
 * Video transcoding template.
 *
 * @method string getName() Obtain Video transcoding template name, which can contain 1-20 letters and digits.
 * @method void setName(string $Name) Set Video transcoding template name, which can contain 1-20 letters and digits.
 * @method string getVcodec() Obtain Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
 * @method void setVcodec(string $Vcodec) Set Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
 * @method integer getWidth() Obtain Video width. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
 * @method void setWidth(integer $Width) Set Video width. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
 * @method integer getHeight() Obtain Video height. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
 * @method void setHeight(integer $Height) Set Video height. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
 * @method integer getFps() Obtain Video frame rate. Value range: [1,240]. If this parameter is left empty, the original value will be used.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range: [1,240]. If this parameter is left empty, the original value will be used.
 * @method string getTopSpeed() Obtain Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
 * @method void setTopSpeed(string $TopSpeed) Set Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
 * @method integer getBitrateCompressionRatio() Obtain Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
 * @method void setBitrateCompressionRatio(integer $BitrateCompressionRatio) Set Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
 * @method string getRateControlMode() Obtain Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
 * @method void setRateControlMode(string $RateControlMode) Set Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
 * @method string getWatermarkId() Obtain Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWatermarkId(string $WatermarkId) Set Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFaceBlurringEnabled() Obtain Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method void setFaceBlurringEnabled(integer $FaceBlurringEnabled) Set Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method string getFrameRateType() Obtain This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
 * @method void setFrameRateType(string $FrameRateType) Set This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
 * @method integer getFrameRateNumerator() Obtain Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
 * @method void setFrameRateNumerator(integer $FrameRateNumerator) Set Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
 * @method integer getFrameRateDenominator() Obtain Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
 * @method void setFrameRateDenominator(integer $FrameRateDenominator) Set Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
 * @method integer getBFramesNum() Obtain The number of B frames can be selected from 1 to 3.
 * @method void setBFramesNum(integer $BFramesNum) Set The number of B frames can be selected from 1 to 3.
 * @method integer getRefFramesNum() Obtain The number of reference frames can be selected from 1 to 16.
 * @method void setRefFramesNum(integer $RefFramesNum) Set The number of reference frames can be selected from 1 to 16.
 * @method AdditionalRateSetting getAdditionalRateSettings() Obtain Additional video bitrate configuration.
 * @method void setAdditionalRateSettings(AdditionalRateSetting $AdditionalRateSettings) Set Additional video bitrate configuration.
 * @method VideoCodecDetail getVideoCodecDetails() Obtain Video encoding configuration.
 * @method void setVideoCodecDetails(VideoCodecDetail $VideoCodecDetails) Set Video encoding configuration.
 * @method integer getVideoEnhanceEnabled() Obtain 
 * @method void setVideoEnhanceEnabled(integer $VideoEnhanceEnabled) Set 
 * @method array getVideoEnhanceSettings() Obtain 
 * @method void setVideoEnhanceSettings(array $VideoEnhanceSettings) Set 
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string Video transcoding template name, which can contain 1-20 letters and digits.
     */
    public $Name;

    /**
     * @var string Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
     */
    public $Vcodec;

    /**
     * @var integer Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
     */
    public $VideoBitrate;

    /**
     * @var integer Video width. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     */
    public $Width;

    /**
     * @var integer Video height. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     */
    public $Height;

    /**
     * @var integer Video frame rate. Value range: [1,240]. If this parameter is left empty, the original value will be used.
     */
    public $Fps;

    /**
     * @var string Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
     */
    public $TopSpeed;

    /**
     * @var integer Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
     */
    public $BitrateCompressionRatio;

    /**
     * @var string Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
     */
    public $RateControlMode;

    /**
     * @var string Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WatermarkId;

    /**
     * @var integer Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     */
    public $FaceBlurringEnabled;

    /**
     * @var string This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
     */
    public $FrameRateType;

    /**
     * @var integer Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
     */
    public $FrameRateNumerator;

    /**
     * @var integer Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
     */
    public $FrameRateDenominator;

    /**
     * @var integer The number of B frames can be selected from 1 to 3.
     */
    public $BFramesNum;

    /**
     * @var integer The number of reference frames can be selected from 1 to 16.
     */
    public $RefFramesNum;

    /**
     * @var AdditionalRateSetting Additional video bitrate configuration.
     */
    public $AdditionalRateSettings;

    /**
     * @var VideoCodecDetail Video encoding configuration.
     */
    public $VideoCodecDetails;

    /**
     * @var integer 
     */
    public $VideoEnhanceEnabled;

    /**
     * @var array 
     */
    public $VideoEnhanceSettings;

    /**
     * @param string $Name Video transcoding template name, which can contain 1-20 letters and digits.
     * @param string $Vcodec Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
     * @param integer $VideoBitrate Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
     * @param integer $Width Video width. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     * @param integer $Height Video height. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     * @param integer $Fps Video frame rate. Value range: [1,240]. If this parameter is left empty, the original value will be used.
     * @param string $TopSpeed Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
     * @param integer $BitrateCompressionRatio Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
     * @param string $RateControlMode Bitrate control mode. Valid values: `CBR`, `ABR` (default), `VBR`.
     * @param string $WatermarkId Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FaceBlurringEnabled Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     * @param string $FrameRateType This field indicates how to specify the output video frame rate. If FOLLOW_SOURCE is selected, the output video frame rate will be set equal to the input video frame rate of the first input. If SPECIFIED_FRACTION is selected, the output video frame rate is determined by the fraction (frame rate numerator and frame rate denominator). If SPECIFIED_HZ is selected, the frame rate of the output video is determined by the HZ you enter.
     * @param integer $FrameRateNumerator Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate numerator setting.
     * @param integer $FrameRateDenominator Valid when the FrameRateType type you select is SPECIFIED_FRACTION, the output frame rate denominator setting.
     * @param integer $BFramesNum The number of B frames can be selected from 1 to 3.
     * @param integer $RefFramesNum The number of reference frames can be selected from 1 to 16.
     * @param AdditionalRateSetting $AdditionalRateSettings Additional video bitrate configuration.
     * @param VideoCodecDetail $VideoCodecDetails Video encoding configuration.
     * @param integer $VideoEnhanceEnabled 
     * @param array $VideoEnhanceSettings 
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

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
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

        if (array_key_exists("TopSpeed",$param) and $param["TopSpeed"] !== null) {
            $this->TopSpeed = $param["TopSpeed"];
        }

        if (array_key_exists("BitrateCompressionRatio",$param) and $param["BitrateCompressionRatio"] !== null) {
            $this->BitrateCompressionRatio = $param["BitrateCompressionRatio"];
        }

        if (array_key_exists("RateControlMode",$param) and $param["RateControlMode"] !== null) {
            $this->RateControlMode = $param["RateControlMode"];
        }

        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("FaceBlurringEnabled",$param) and $param["FaceBlurringEnabled"] !== null) {
            $this->FaceBlurringEnabled = $param["FaceBlurringEnabled"];
        }

        if (array_key_exists("FrameRateType",$param) and $param["FrameRateType"] !== null) {
            $this->FrameRateType = $param["FrameRateType"];
        }

        if (array_key_exists("FrameRateNumerator",$param) and $param["FrameRateNumerator"] !== null) {
            $this->FrameRateNumerator = $param["FrameRateNumerator"];
        }

        if (array_key_exists("FrameRateDenominator",$param) and $param["FrameRateDenominator"] !== null) {
            $this->FrameRateDenominator = $param["FrameRateDenominator"];
        }

        if (array_key_exists("BFramesNum",$param) and $param["BFramesNum"] !== null) {
            $this->BFramesNum = $param["BFramesNum"];
        }

        if (array_key_exists("RefFramesNum",$param) and $param["RefFramesNum"] !== null) {
            $this->RefFramesNum = $param["RefFramesNum"];
        }

        if (array_key_exists("AdditionalRateSettings",$param) and $param["AdditionalRateSettings"] !== null) {
            $this->AdditionalRateSettings = new AdditionalRateSetting();
            $this->AdditionalRateSettings->deserialize($param["AdditionalRateSettings"]);
        }

        if (array_key_exists("VideoCodecDetails",$param) and $param["VideoCodecDetails"] !== null) {
            $this->VideoCodecDetails = new VideoCodecDetail();
            $this->VideoCodecDetails->deserialize($param["VideoCodecDetails"]);
        }

        if (array_key_exists("VideoEnhanceEnabled",$param) and $param["VideoEnhanceEnabled"] !== null) {
            $this->VideoEnhanceEnabled = $param["VideoEnhanceEnabled"];
        }

        if (array_key_exists("VideoEnhanceSettings",$param) and $param["VideoEnhanceSettings"] !== null) {
            $this->VideoEnhanceSettings = [];
            foreach ($param["VideoEnhanceSettings"] as $key => $value){
                $obj = new VideoEnhanceSetting();
                $obj->deserialize($value);
                array_push($this->VideoEnhanceSettings, $obj);
            }
        }
    }
}
