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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTranscodeTemplate request structure.
 *
 * @method string getContainer() Obtain <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method void setContainer(string $Container) Set <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method string getName() Obtain <p>Transcoding template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Transcoding template name. The length cannot exceed 64 characters.</p>
 * @method string getComment() Obtain <p>Template description, with a length limit of 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Template description, with a length limit of 256 characters.</p>
 * @method integer getRemoveVideo() Obtain <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>Default value: 0.</p>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>Default value: 0.</p>
 * @method integer getRemoveAudio() Obtain <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>Default value: 0.
 * @method VideoTemplateInfo getVideoTemplate() Obtain <p>Video stream configuration parameters. This field is required when RemoveVideo is 0.</p>
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set <p>Video stream configuration parameters. This field is required when RemoveVideo is 0.</p>
 * @method AudioTemplateInfo getAudioTemplate() Obtain <p>Audio stream configuration parameters. This field is required when RemoveAudio is 0.</p>
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set <p>Audio stream configuration parameters. This field is required when RemoveAudio is 0.</p>
 * @method TEHDConfig getTEHDConfig() Obtain <p>TSC transcoding parameter.</p>
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set <p>TSC transcoding parameter.</p>
 * @method EnhanceConfig getEnhanceConfig() Obtain <p>Audio/Video enhancement configuration.</p>
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set <p>Audio/Video enhancement configuration.</p>
 * @method string getSegmentType() Obtain <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
 * @method string getStdExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended parameter.</p>
 */
class CreateTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     */
    public $Container;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Transcoding template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Template description, with a length limit of 256 characters.</p>
     */
    public $Comment;

    /**
     * @var integer <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>Default value: 0.</p>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo <p>Video stream configuration parameters. This field is required when RemoveVideo is 0.</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo <p>Audio stream configuration parameters. This field is required when RemoveAudio is 0.</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig <p>TSC transcoding parameter.</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>Audio/Video enhancement configuration.</p>
     */
    public $EnhanceConfig;

    /**
     * @var string <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
     */
    public $SegmentType;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Container <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     * @param string $Name <p>Transcoding template name. The length cannot exceed 64 characters.</p>
     * @param string $Comment <p>Template description, with a length limit of 256 characters.</p>
     * @param integer $RemoveVideo <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>Default value: 0.</p>
     * @param integer $RemoveAudio <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>Default value: 0.
     * @param VideoTemplateInfo $VideoTemplate <p>Video stream configuration parameters. This field is required when RemoveVideo is 0.</p>
     * @param AudioTemplateInfo $AudioTemplate <p>Audio stream configuration parameters. This field is required when RemoveAudio is 0.</p>
     * @param TEHDConfig $TEHDConfig <p>TSC transcoding parameter.</p>
     * @param EnhanceConfig $EnhanceConfig <p>Audio/Video enhancement configuration.</p>
     * @param string $SegmentType <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>Default value: ts.
     * @param string $StdExtInfo <p>Extended parameter.</p>
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
