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
 * ModifyTranscodeTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Unique ID of the transcoding template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique ID of the transcoding template.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
 * @method string getContainer() Obtain <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method void setContainer(string $Container) Set <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method string getName() Obtain <p>Transcoding template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Transcoding template name. The length cannot exceed 64 characters.</p>
 * @method string getComment() Obtain <p>Template description, with a length limit of 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Template description, with a length limit of 256 characters.</p>
 * @method integer getRemoveVideo() Obtain <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>
 * @method integer getRemoveAudio() Obtain <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain <p>Video stream configuration parameters.</p>
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set <p>Video stream configuration parameters.</p>
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain <p>Audio stream configuration parameters.</p>
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set <p>Audio stream configuration parameters.</p>
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain <p>TSC transcoding parameter.</p>
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set <p>TSC transcoding parameter.</p>
 * @method EnhanceConfigForUpdate getEnhanceConfig() Obtain <p>Audio/Video enhancement configuration.</p>
 * @method void setEnhanceConfig(EnhanceConfigForUpdate $EnhanceConfig) Set <p>Audio/Video enhancement configuration.</p>
 * @method string getSegmentType() Obtain <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>
 * @method string getStdExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended parameter.</p>
 */
class ModifyTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique ID of the transcoding template.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     */
    public $Container;

    /**
     * @var string <p>Transcoding template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Template description, with a length limit of 256 characters.</p>
     */
    public $Comment;

    /**
     * @var integer <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate <p>Video stream configuration parameters.</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate <p>Audio stream configuration parameters.</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate <p>TSC transcoding parameter.</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfigForUpdate <p>Audio/Video enhancement configuration.</p>
     */
    public $EnhanceConfig;

    /**
     * @var string <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>
     */
    public $SegmentType;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $StdExtInfo;

    /**
     * @param integer $Definition <p>Unique ID of the transcoding template.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/33987">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID to access resources in on-demand applications (whether default or newly created application).</b></p>
     * @param string $Container <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     * @param string $Name <p>Transcoding template name. The length cannot exceed 64 characters.</p>
     * @param string $Comment <p>Template description, with a length limit of 256 characters.</p>
     * @param integer $RemoveVideo <p>Whether to remove video data. Available values:</p><li>0: reserved</li><li>1: remove</li>
     * @param integer $RemoveAudio <p>Remove audio data. Available values:</p><li>0: Reserved</li><li>1: Remove</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate <p>Video stream configuration parameters.</p>
     * @param AudioTemplateInfoForUpdate $AudioTemplate <p>Audio stream configuration parameters.</p>
     * @param TEHDConfigForUpdate $TEHDConfig <p>TSC transcoding parameter.</p>
     * @param EnhanceConfigForUpdate $EnhanceConfig <p>Audio/Video enhancement configuration.</p>
     * @param string $SegmentType <p>Segment type, valid when Container is hls. Available values:</p><li>ts: ts slicing;</li><li>fmp4: fmp4 slicing.</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
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
            $this->VideoTemplate = new VideoTemplateInfoForUpdate();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfoForUpdate();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfigForUpdate();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfigForUpdate();
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
