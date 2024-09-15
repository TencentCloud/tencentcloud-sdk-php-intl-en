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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationProjectAdvancedConfig response structure.
 *
 * @method string getApplicationParams() Obtain Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationParams(string $ApplicationParams) Set Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResolution() Obtain Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolution(string $Resolution) Set Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFPS() Obtain Frame rate. Valid values: 0, 30, 60.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFPS(integer $FPS) Set Frame rate. Valid values: 0, 30, 60.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinBitrate() Obtain Minimum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinBitrate(integer $MinBitrate) Set Minimum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxBitrate() Obtain Maximum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxBitrate(integer $MaxBitrate) Set Maximum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPreloadDuration() Obtain Waiting time for application pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPreloadDuration(string $PreloadDuration) Set Waiting time for application pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReconnectTimeout() Obtain Waiting time for reconnection.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReconnectTimeout(string $ReconnectTimeout) Set Waiting time for reconnection.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpstreamAudioOption() Obtain Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamAudioOption(string $UpstreamAudioOption) Set Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.Note: This field may return null, indicating that no valid values can be obtained.
 * @method VideoEncodeConfig getVideoEncodeConfig() Obtain Video encoding configuration.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoEncodeConfig(VideoEncodeConfig $VideoEncodeConfig) Set Video encoding configuration.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getXRMaxWidth() Obtain Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setXRMaxWidth(integer $XRMaxWidth) Set Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method BackgroundImage getBackgroundImage() Obtain Background image information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackgroundImage(BackgroundImage $BackgroundImage) Set Background image information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDisableVideoCodecs() Obtain Disabled code list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisableVideoCodecs(array $DisableVideoCodecs) Set Disabled code list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeApplicationProjectAdvancedConfigResponse extends AbstractModel
{
    /**
     * @var string Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationParams;

    /**
     * @var string Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resolution;

    /**
     * @var integer Frame rate. Valid values: 0, 30, 60.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FPS;

    /**
     * @var integer Minimum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinBitrate;

    /**
     * @var integer Maximum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxBitrate;

    /**
     * @var string Waiting time for application pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PreloadDuration;

    /**
     * @var string Waiting time for reconnection.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReconnectTimeout;

    /**
     * @var string Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamAudioOption;

    /**
     * @var VideoEncodeConfig Video encoding configuration.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoEncodeConfig;

    /**
     * @var integer Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $XRMaxWidth;

    /**
     * @var BackgroundImage Background image information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackgroundImage;

    /**
     * @var array Disabled code list.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisableVideoCodecs;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ApplicationParams Application startup parameters.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Resolution Resolution, in the format of widthxheight, such as 1920x1080.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FPS Frame rate. Valid values: 0, 30, 60.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinBitrate Minimum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxBitrate Maximum bitrate, in Mbps.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PreloadDuration Waiting time for application pre-launch.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReconnectTimeout Waiting time for reconnection.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpstreamAudioOption Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.Note: This field may return null, indicating that no valid values can be obtained.
     * @param VideoEncodeConfig $VideoEncodeConfig Video encoding configuration.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $XRMaxWidth Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.Note: This field may return null, indicating that no valid values can be obtained.
     * @param BackgroundImage $BackgroundImage Background image information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DisableVideoCodecs Disabled code list.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = $param["ApplicationParams"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
        }

        if (array_key_exists("MinBitrate",$param) and $param["MinBitrate"] !== null) {
            $this->MinBitrate = $param["MinBitrate"];
        }

        if (array_key_exists("MaxBitrate",$param) and $param["MaxBitrate"] !== null) {
            $this->MaxBitrate = $param["MaxBitrate"];
        }

        if (array_key_exists("PreloadDuration",$param) and $param["PreloadDuration"] !== null) {
            $this->PreloadDuration = $param["PreloadDuration"];
        }

        if (array_key_exists("ReconnectTimeout",$param) and $param["ReconnectTimeout"] !== null) {
            $this->ReconnectTimeout = $param["ReconnectTimeout"];
        }

        if (array_key_exists("UpstreamAudioOption",$param) and $param["UpstreamAudioOption"] !== null) {
            $this->UpstreamAudioOption = $param["UpstreamAudioOption"];
        }

        if (array_key_exists("VideoEncodeConfig",$param) and $param["VideoEncodeConfig"] !== null) {
            $this->VideoEncodeConfig = new VideoEncodeConfig();
            $this->VideoEncodeConfig->deserialize($param["VideoEncodeConfig"]);
        }

        if (array_key_exists("XRMaxWidth",$param) and $param["XRMaxWidth"] !== null) {
            $this->XRMaxWidth = $param["XRMaxWidth"];
        }

        if (array_key_exists("BackgroundImage",$param) and $param["BackgroundImage"] !== null) {
            $this->BackgroundImage = new BackgroundImage();
            $this->BackgroundImage->deserialize($param["BackgroundImage"]);
        }

        if (array_key_exists("DisableVideoCodecs",$param) and $param["DisableVideoCodecs"] !== null) {
            $this->DisableVideoCodecs = $param["DisableVideoCodecs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
