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
 * Audio/Video transcoding template
 *
 * @method string getName() Obtain Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
 * @method void setName(string $Name) Set Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
 * @method integer getNeedVideo() Obtain Whether video is needed. `0`: not needed; `1`: needed
 * @method void setNeedVideo(integer $NeedVideo) Set Whether video is needed. `0`: not needed; `1`: needed
 * @method string getVcodec() Obtain Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
 * @method void setVcodec(string $Vcodec) Set Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
 * @method integer getWidth() Obtain Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
 * @method void setWidth(integer $Width) Set Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
 * @method integer getHeight() Obtain Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
 * @method void setHeight(integer $Height) Set Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
 * @method integer getFps() Obtain Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
 * @method string getTopSpeed() Obtain Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
 * @method void setTopSpeed(string $TopSpeed) Set Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
 * @method integer getBitrateCompressionRatio() Obtain Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
 * @method void setBitrateCompressionRatio(integer $BitrateCompressionRatio) Set Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
 * @method integer getNeedAudio() Obtain Whether audio is needed. `0`: not needed; `1`: needed
 * @method void setNeedAudio(integer $NeedAudio) Set Whether audio is needed. `0`: not needed; `1`: needed
 * @method string getAcodec() Obtain Audio codec. Valid value: `AAC` (default)
 * @method void setAcodec(string $Acodec) Set Audio codec. Valid value: `AAC` (default)
 * @method integer getAudioBitrate() Obtain Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
 * @method void setAudioBitrate(integer $AudioBitrate) Set Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
 * @method integer getVideoBitrate() Obtain Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
 * @method void setVideoBitrate(integer $VideoBitrate) Set Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
 * @method string getRateControlMode() Obtain Bitrate control mode. Valid values: `CBR`, `ABR` (default)
 * @method void setRateControlMode(string $RateControlMode) Set Bitrate control mode. Valid values: `CBR`, `ABR` (default)
 * @method string getWatermarkId() Obtain Watermark ID
 * @method void setWatermarkId(string $WatermarkId) Set Watermark ID
 */
class AVTemplate extends AbstractModel
{
    /**
     * @var string Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
     */
    public $Name;

    /**
     * @var integer Whether video is needed. `0`: not needed; `1`: needed
     */
    public $NeedVideo;

    /**
     * @var string Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
     */
    public $Vcodec;

    /**
     * @var integer Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
     */
    public $Width;

    /**
     * @var integer Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
     */
    public $Height;

    /**
     * @var integer Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
     */
    public $Fps;

    /**
     * @var string Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
     */
    public $TopSpeed;

    /**
     * @var integer Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
     */
    public $BitrateCompressionRatio;

    /**
     * @var integer Whether audio is needed. `0`: not needed; `1`: needed
     */
    public $NeedAudio;

    /**
     * @var string Audio codec. Valid value: `AAC` (default)
     */
    public $Acodec;

    /**
     * @var integer Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
     */
    public $AudioBitrate;

    /**
     * @var integer Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
     */
    public $VideoBitrate;

    /**
     * @var string Bitrate control mode. Valid values: `CBR`, `ABR` (default)
     */
    public $RateControlMode;

    /**
     * @var string Watermark ID
     */
    public $WatermarkId;

    /**
     * @param string $Name Name of an audio/video transcoding template, which can contain 1-20 case-sensitive letters and digits
     * @param integer $NeedVideo Whether video is needed. `0`: not needed; `1`: needed
     * @param string $Vcodec Video codec. Valid values: `H264`, `H265`. If this parameter is left empty, the original video codec will be used.
     * @param integer $Width Video width. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video width will be used.
     * @param integer $Height Video height. Value range: (0, 3000]. The value must be an integer multiple of 4. If this parameter is left empty, the original video height will be used.
     * @param integer $Fps Video frame rate. Value range: [1, 240]. If this parameter is left empty, the original frame rate will be used.
     * @param string $TopSpeed Whether to enable top speed codec transcoding. Valid values: `CLOSE` (disable), `OPEN` (enable). Default value: `CLOSE`
     * @param integer $BitrateCompressionRatio Compression ratio for top speed codec transcoding. Value range: [0, 50]. The lower the compression ratio, the higher the image quality.
     * @param integer $NeedAudio Whether audio is needed. `0`: not needed; `1`: needed
     * @param string $Acodec Audio codec. Valid value: `AAC` (default)
     * @param integer $AudioBitrate Audio bitrate. If this parameter is left empty, the original bitrate will be used.
Valid values: `6000`, `7000`, `8000`, `10000`, `12000`, `14000`, `16000`, `20000`, `24000`, `28000`, `32000`, `40000`, `48000`, `56000`, `64000`, `80000`, `96000`, `112000`, `128000`, `160000`, `192000`, `224000`, `256000`, `288000`, `320000`, `384000`, `448000`, `512000`, `576000`, `640000`, `768000`, `896000`, `1024000`
     * @param integer $VideoBitrate Video bitrate. Value range: [50000, 40000000]. The value must be an integer multiple of 1000. If this parameter is left empty, the original bitrate will be used.
     * @param string $RateControlMode Bitrate control mode. Valid values: `CBR`, `ABR` (default)
     * @param string $WatermarkId Watermark ID
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

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
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

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("RateControlMode",$param) and $param["RateControlMode"] !== null) {
            $this->RateControlMode = $param["RateControlMode"];
        }

        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }
    }
}
