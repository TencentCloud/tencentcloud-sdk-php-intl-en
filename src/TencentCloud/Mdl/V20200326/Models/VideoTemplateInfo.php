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
 * @method string getRateControlMode() Obtain Bitrate control mode. Valid values: `CBR`, `ABR` (default)
 * @method void setRateControlMode(string $RateControlMode) Set Bitrate control mode. Valid values: `CBR`, `ABR` (default)
 * @method string getWatermarkId() Obtain Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWatermarkId(string $WatermarkId) Set Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
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
     * @var string Bitrate control mode. Valid values: `CBR`, `ABR` (default)
     */
    public $RateControlMode;

    /**
     * @var string Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WatermarkId;

    /**
     * @param string $Name Video transcoding template name, which can contain 1-20 letters and digits.
     * @param string $Vcodec Video codec. Valid values: H264/H265. If this parameter is left empty, the original value will be used.
     * @param integer $VideoBitrate Video bitrate. Value range: [50000,40000000]. The value can only be a multiple of 1,000. If this parameter is left empty, the original value will be used.
     * @param integer $Width Video width. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     * @param integer $Height Video height. Value range: (0,3000]. The value can only be a multiple of 4. If this parameter is left empty, the original value will be used.
     * @param integer $Fps Video frame rate. Value range: [1,240]. If this parameter is left empty, the original value will be used.
     * @param string $TopSpeed Whether to enable top speed codec. Valid value: CLOSE/OPEN. Default value: CLOSE.
     * @param integer $BitrateCompressionRatio Top speed codec compression ratio. Value range: [0,50]. The lower the compression ratio, the higher the image quality.
     * @param string $RateControlMode Bitrate control mode. Valid values: `CBR`, `ABR` (default)
     * @param string $WatermarkId Watermark ID
Note: This field may return `null`, indicating that no valid value was found.
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
    }
}
