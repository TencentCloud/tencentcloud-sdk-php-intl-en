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
 * ModifyApplicationProject request structure.
 *
 * @method string getProjectId() Obtain Project ID returned by cloud.
 * @method void setProjectId(string $ProjectId) Set Project ID returned by cloud.
 * @method string getName() Obtain Project name.
 * @method void setName(string $Name) Set Project name.
 * @method string getType() Obtain Concurrency type required for project operation.
 * @method void setType(string $Type) Set Concurrency type required for project operation.
 * @method boolean getIsPreload() Obtain Whether to Enable Pre-launch.
 * @method void setIsPreload(boolean $IsPreload) Set Whether to Enable Pre-launch.
 * @method string getApplicationParams() Obtain Application startup parameters.
 * @method void setApplicationParams(string $ApplicationParams) Set Application startup parameters.
 * @method string getDescription() Obtain Cloud application project description.
 * @method void setDescription(string $Description) Set Cloud application project description.
 * @method string getResolution() Obtain Resolution, in the format of widthxheight, such as 1920x1080.
 * @method void setResolution(string $Resolution) Set Resolution, in the format of widthxheight, such as 1920x1080.
 * @method integer getFPS() Obtain Frame rate.
 * @method void setFPS(integer $FPS) Set Frame rate.
 * @method string getPreloadDuration() Obtain Waiting time for application pre-launch.
 * @method void setPreloadDuration(string $PreloadDuration) Set Waiting time for application pre-launch.
 * @method string getReconnectTimeout() Obtain Waiting time for reconnection.
 * @method void setReconnectTimeout(string $ReconnectTimeout) Set Waiting time for reconnection.
 * @method integer getMinBitrate() Obtain Minimum bitrate, in Mbps.
 * @method void setMinBitrate(integer $MinBitrate) Set Minimum bitrate, in Mbps.
 * @method integer getMaxBitrate() Obtain Maximum bitrate, in Mbps.
 * @method void setMaxBitrate(integer $MaxBitrate) Set Maximum bitrate, in Mbps.
 * @method string getUpstreamAudioOption() Obtain Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.
 * @method void setUpstreamAudioOption(string $UpstreamAudioOption) Set Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.
 * @method VideoEncodeConfig getVideoEncodeConfig() Obtain Video encoding configuration.
 * @method void setVideoEncodeConfig(VideoEncodeConfig $VideoEncodeConfig) Set Video encoding configuration.
 * @method integer getXRMaxWidth() Obtain Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.
 * @method void setXRMaxWidth(integer $XRMaxWidth) Set Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.
 * @method string getBackgroundImageCOSFileId() Obtain ID of the background image COS file.
 * @method void setBackgroundImageCOSFileId(string $BackgroundImageCOSFileId) Set ID of the background image COS file.
 * @method array getDisableVideoCodecs() Obtain Disabled code list.
 * @method void setDisableVideoCodecs(array $DisableVideoCodecs) Set Disabled code list.
 */
class ModifyApplicationProjectRequest extends AbstractModel
{
    /**
     * @var string Project ID returned by cloud.
     */
    public $ProjectId;

    /**
     * @var string Project name.
     */
    public $Name;

    /**
     * @var string Concurrency type required for project operation.
     */
    public $Type;

    /**
     * @var boolean Whether to Enable Pre-launch.
     */
    public $IsPreload;

    /**
     * @var string Application startup parameters.
     */
    public $ApplicationParams;

    /**
     * @var string Cloud application project description.
     */
    public $Description;

    /**
     * @var string Resolution, in the format of widthxheight, such as 1920x1080.
     */
    public $Resolution;

    /**
     * @var integer Frame rate.
     */
    public $FPS;

    /**
     * @var string Waiting time for application pre-launch.
     */
    public $PreloadDuration;

    /**
     * @var string Waiting time for reconnection.
     */
    public $ReconnectTimeout;

    /**
     * @var integer Minimum bitrate, in Mbps.
     */
    public $MinBitrate;

    /**
     * @var integer Maximum bitrate, in Mbps.
     */
    public $MaxBitrate;

    /**
     * @var string Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.
     */
    public $UpstreamAudioOption;

    /**
     * @var VideoEncodeConfig Video encoding configuration.
     */
    public $VideoEncodeConfig;

    /**
     * @var integer Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.
     */
    public $XRMaxWidth;

    /**
     * @var string ID of the background image COS file.
     */
    public $BackgroundImageCOSFileId;

    /**
     * @var array Disabled code list.
     */
    public $DisableVideoCodecs;

    /**
     * @param string $ProjectId Project ID returned by cloud.
     * @param string $Name Project name.
     * @param string $Type Concurrency type required for project operation.
     * @param boolean $IsPreload Whether to Enable Pre-launch.
     * @param string $ApplicationParams Application startup parameters.
     * @param string $Description Cloud application project description.
     * @param string $Resolution Resolution, in the format of widthxheight, such as 1920x1080.
     * @param integer $FPS Frame rate.
     * @param string $PreloadDuration Waiting time for application pre-launch.
     * @param string $ReconnectTimeout Waiting time for reconnection.
     * @param integer $MinBitrate Minimum bitrate, in Mbps.
     * @param integer $MaxBitrate Maximum bitrate, in Mbps.
     * @param string $UpstreamAudioOption Upstream audio options.DisableMixIntoStreamPush: not mixing upstream audio in streaming.
     * @param VideoEncodeConfig $VideoEncodeConfig Video encoding configuration.
     * @param integer $XRMaxWidth Upper limit of the XR application resolution.If the project concurrency type is L or L2, the upper limit is 5000; if the project concurrency type is XL2, the upper limit is 6000.
     * @param string $BackgroundImageCOSFileId ID of the background image COS file.
     * @param array $DisableVideoCodecs Disabled code list.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsPreload",$param) and $param["IsPreload"] !== null) {
            $this->IsPreload = $param["IsPreload"];
        }

        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = $param["ApplicationParams"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
        }

        if (array_key_exists("PreloadDuration",$param) and $param["PreloadDuration"] !== null) {
            $this->PreloadDuration = $param["PreloadDuration"];
        }

        if (array_key_exists("ReconnectTimeout",$param) and $param["ReconnectTimeout"] !== null) {
            $this->ReconnectTimeout = $param["ReconnectTimeout"];
        }

        if (array_key_exists("MinBitrate",$param) and $param["MinBitrate"] !== null) {
            $this->MinBitrate = $param["MinBitrate"];
        }

        if (array_key_exists("MaxBitrate",$param) and $param["MaxBitrate"] !== null) {
            $this->MaxBitrate = $param["MaxBitrate"];
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

        if (array_key_exists("BackgroundImageCOSFileId",$param) and $param["BackgroundImageCOSFileId"] !== null) {
            $this->BackgroundImageCOSFileId = $param["BackgroundImageCOSFileId"];
        }

        if (array_key_exists("DisableVideoCodecs",$param) and $param["DisableVideoCodecs"] !== null) {
            $this->DisableVideoCodecs = $param["DisableVideoCodecs"];
        }
    }
}
