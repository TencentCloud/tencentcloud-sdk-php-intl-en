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
 * Video transcoding template.
 *
 * @method string getName() Obtain Video transcoding template name, which can contain 1-20 letters and digits.
 * @method void setName(string $Name) Set Video transcoding template name, which can contain 1-20 letters and digits.
 * @method string getVcodec() Obtain Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
 * @method void setVcodec(string $Vcodec) Set Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
 * @method integer getWidth() Obtain Video width. The input range is (0, 4096] and must be a multiple of 2. If left blank, it represents passthrough.
 * @method void setWidth(integer $Width) Set Video width. The input range is (0, 4096] and must be a multiple of 2. If left blank, it represents passthrough.
 * @method integer getHeight() Obtain Video height. Input range is (0, 4096] and must be a multiple of 2. Leave empty to represent passthrough.
 * @method void setHeight(integer $Height) Set Video height. Input range is (0, 4096] and must be a multiple of 2. Leave empty to represent passthrough.
 * @method integer getFps() Obtain Video frame rate. Valid when you select SPECIFIED_HZ for FrameRateType. Input range is [1, 240]. Leave blank to represent passthrough.
 * @method void setFps(integer $Fps) Set Video frame rate. Valid when you select SPECIFIED_HZ for FrameRateType. Input range is [1, 240]. Leave blank to represent passthrough.
 * @method string getTopSpeed() Obtain Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
 * @method void setTopSpeed(string $TopSpeed) Set Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
 * @method integer getBitrateCompressionRatio() Obtain Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
 * @method void setBitrateCompressionRatio(integer $BitrateCompressionRatio) Set Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
 * @method string getRateControlMode() Obtain Bitrate control mode. Optional values: [CBR|ABR|VBR]. Default: ABR.
 * @method void setRateControlMode(string $RateControlMode) Set Bitrate control mode. Optional values: [CBR|ABR|VBR]. Default: ABR.
 * @method string getWatermarkId() Obtain Watermark Id.
 * @method void setWatermarkId(string $WatermarkId) Set Watermark Id.
 * @method integer getFaceBlurringEnabled() Obtain Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method void setFaceBlurringEnabled(integer $FaceBlurringEnabled) Set Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
 * @method string getFrameRateType() Obtain This field indicates how to specify the output video frame rate. If selected FOLLOW_SOURCE, the output video frame rate is set to equal the frame rate of the first input video. If selected SPECIFIED_FRACTION, the output video frame rate is determined by the fraction (frame rate molecular and frame rate denominator). If selected SPECIFIED_HZ, the frame rate of the output video is determined by the HZ you input.
 * @method void setFrameRateType(string $FrameRateType) Set This field indicates how to specify the output video frame rate. If selected FOLLOW_SOURCE, the output video frame rate is set to equal the frame rate of the first input video. If selected SPECIFIED_FRACTION, the output video frame rate is determined by the fraction (frame rate molecular and frame rate denominator). If selected SPECIFIED_HZ, the frame rate of the output video is determined by the HZ you input.
 * @method integer getFrameRateNumerator() Obtain Valid when you select SPECIFIED_FRACTION as the FrameRateType. Set the output frame rate molecular.
 * @method void setFrameRateNumerator(integer $FrameRateNumerator) Set Valid when you select SPECIFIED_FRACTION as the FrameRateType. Set the output frame rate molecular.
 * @method integer getFrameRateDenominator() Obtain Valid when you select SPECIFIED_FRACTION for FrameRateType. Output frame rate denominator set.
 * @method void setFrameRateDenominator(integer $FrameRateDenominator) Set Valid when you select SPECIFIED_FRACTION for FrameRateType. Output frame rate denominator set.
 * @method integer getBFramesNum() Obtain Number of B-frames 1-3.	
 * @method void setBFramesNum(integer $BFramesNum) Set Number of B-frames 1-3.	
 * @method integer getRefFramesNum() Obtain Refer to the number of frames 1-16.	
 * @method void setRefFramesNum(integer $RefFramesNum) Set Refer to the number of frames 1-16.	
 * @method AdditionalRateSetting getAdditionalRateSettings() Obtain Additional video bitrate configuration.	
 * @method void setAdditionalRateSettings(AdditionalRateSetting $AdditionalRateSettings) Set Additional video bitrate configuration.	
 * @method VideoCodecDetail getVideoCodecDetails() Obtain Video encoding configuration.	
 * @method void setVideoCodecDetails(VideoCodecDetail $VideoCodecDetails) Set Video encoding configuration.	
 * @method integer getVideoEnhanceEnabled() Obtain Video enhancement switch, 1: enable 0: disable.
 * @method void setVideoEnhanceEnabled(integer $VideoEnhanceEnabled) Set Video enhancement switch, 1: enable 0: disable.
 * @method array getVideoEnhanceSettings() Obtain Video enhancement parameters array.
 * @method void setVideoEnhanceSettings(array $VideoEnhanceSettings) Set Video enhancement parameters array.
 * @method ColorSpaceSetting getColorSpaceSettings() Obtain Colorspace configuration.
 * @method void setColorSpaceSettings(ColorSpaceSetting $ColorSpaceSettings) Set Colorspace configuration.
 * @method array getForensicWatermarkIds() Obtain Traceable watermark.
 * @method void setForensicWatermarkIds(array $ForensicWatermarkIds) Set Traceable watermark.
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
     * @var integer Video width. The input range is (0, 4096] and must be a multiple of 2. If left blank, it represents passthrough.
     */
    public $Width;

    /**
     * @var integer Video height. Input range is (0, 4096] and must be a multiple of 2. Leave empty to represent passthrough.
     */
    public $Height;

    /**
     * @var integer Video frame rate. Valid when you select SPECIFIED_HZ for FrameRateType. Input range is [1, 240]. Leave blank to represent passthrough.
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
     * @var string Bitrate control mode. Optional values: [CBR|ABR|VBR]. Default: ABR.
     */
    public $RateControlMode;

    /**
     * @var string Watermark Id.
     */
    public $WatermarkId;

    /**
     * @var integer Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     */
    public $FaceBlurringEnabled;

    /**
     * @var string This field indicates how to specify the output video frame rate. If selected FOLLOW_SOURCE, the output video frame rate is set to equal the frame rate of the first input video. If selected SPECIFIED_FRACTION, the output video frame rate is determined by the fraction (frame rate molecular and frame rate denominator). If selected SPECIFIED_HZ, the frame rate of the output video is determined by the HZ you input.
     */
    public $FrameRateType;

    /**
     * @var integer Valid when you select SPECIFIED_FRACTION as the FrameRateType. Set the output frame rate molecular.
     */
    public $FrameRateNumerator;

    /**
     * @var integer Valid when you select SPECIFIED_FRACTION for FrameRateType. Output frame rate denominator set.
     */
    public $FrameRateDenominator;

    /**
     * @var integer Number of B-frames 1-3.	
     */
    public $BFramesNum;

    /**
     * @var integer Refer to the number of frames 1-16.	
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
     * @var integer Video enhancement switch, 1: enable 0: disable.
     */
    public $VideoEnhanceEnabled;

    /**
     * @var array Video enhancement parameters array.
     */
    public $VideoEnhanceSettings;

    /**
     * @var ColorSpaceSetting Colorspace configuration.
     */
    public $ColorSpaceSettings;

    /**
     * @var array Traceable watermark.
     */
    public $ForensicWatermarkIds;

    /**
     * @param string $Name Video transcoding template name, which can contain 1-20 letters and digits.
     * @param string $Vcodec Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
     * @param integer $VideoBitrate Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
     * @param integer $Width Video width. The input range is (0, 4096] and must be a multiple of 2. If left blank, it represents passthrough.
     * @param integer $Height Video height. Input range is (0, 4096] and must be a multiple of 2. Leave empty to represent passthrough.
     * @param integer $Fps Video frame rate. Valid when you select SPECIFIED_HZ for FrameRateType. Input range is [1, 240]. Leave blank to represent passthrough.
     * @param string $TopSpeed Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
     * @param integer $BitrateCompressionRatio Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
     * @param string $RateControlMode Bitrate control mode. Optional values: [CBR|ABR|VBR]. Default: ABR.
     * @param string $WatermarkId Watermark Id.
     * @param integer $FaceBlurringEnabled Whether to enable the face blur function, 1 is on, 0 is off, and the default is 0.
     * @param string $FrameRateType This field indicates how to specify the output video frame rate. If selected FOLLOW_SOURCE, the output video frame rate is set to equal the frame rate of the first input video. If selected SPECIFIED_FRACTION, the output video frame rate is determined by the fraction (frame rate molecular and frame rate denominator). If selected SPECIFIED_HZ, the frame rate of the output video is determined by the HZ you input.
     * @param integer $FrameRateNumerator Valid when you select SPECIFIED_FRACTION as the FrameRateType. Set the output frame rate molecular.
     * @param integer $FrameRateDenominator Valid when you select SPECIFIED_FRACTION for FrameRateType. Output frame rate denominator set.
     * @param integer $BFramesNum Number of B-frames 1-3.	
     * @param integer $RefFramesNum Refer to the number of frames 1-16.	
     * @param AdditionalRateSetting $AdditionalRateSettings Additional video bitrate configuration.	
     * @param VideoCodecDetail $VideoCodecDetails Video encoding configuration.	
     * @param integer $VideoEnhanceEnabled Video enhancement switch, 1: enable 0: disable.
     * @param array $VideoEnhanceSettings Video enhancement parameters array.
     * @param ColorSpaceSetting $ColorSpaceSettings Colorspace configuration.
     * @param array $ForensicWatermarkIds Traceable watermark.
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

        if (array_key_exists("ColorSpaceSettings",$param) and $param["ColorSpaceSettings"] !== null) {
            $this->ColorSpaceSettings = new ColorSpaceSetting();
            $this->ColorSpaceSettings->deserialize($param["ColorSpaceSettings"]);
        }

        if (array_key_exists("ForensicWatermarkIds",$param) and $param["ForensicWatermarkIds"] !== null) {
            $this->ForensicWatermarkIds = $param["ForensicWatermarkIds"];
        }
    }
}
