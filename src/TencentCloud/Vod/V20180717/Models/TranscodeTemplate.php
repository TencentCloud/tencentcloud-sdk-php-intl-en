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
 * Transcoding template details
 *
 * @method string getDefinition() Obtain <p>Unique identifier of the transcoding template.</p>
 * @method void setDefinition(string $Definition) Set <p>Unique identifier of the transcoding template.</p>
 * @method string getContainer() Obtain <p>Container format. Valid values: mp4, flv, hls, mp3, flac, and ogg.</p>
 * @method void setContainer(string $Container) Set <p>Container format. Valid values: mp4, flv, hls, mp3, flac, and ogg.</p>
 * @method string getName() Obtain <p>Transcoding template name.</p>
 * @method void setName(string $Name) Set <p>Transcoding template name.</p>
 * @method string getComment() Obtain <p>Template description information.</p>
 * @method void setComment(string $Comment) Set <p>Template description information.</p>
 * @method string getType() Obtain <p>Template type. Value:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
 * @method void setType(string $Type) Set <p>Template type. Value:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
 * @method integer getRemoveVideo() Obtain <p>Whether to remove video data. Value:</p><li>0: Reserved;</li><li>1: Remove.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Whether to remove video data. Value:</p><li>0: Reserved;</li><li>1: Remove.</li>
 * @method integer getRemoveAudio() Obtain <p>Remove audio data. Parameter value:</p><li>0: reserved;</li><li>1: remove.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Remove audio data. Parameter value:</p><li>0: reserved;</li><li>1: remove.</li>
 * @method VideoTemplateInfo getVideoTemplate() Obtain <p>Video stream configuration parameters. This field is valid only when RemoveVideo is 0.</p>
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set <p>Video stream configuration parameters. This field is valid only when RemoveVideo is 0.</p>
 * @method AudioTemplateInfo getAudioTemplate() Obtain <p>Audio stream configuration parameters. This field is valid only when RemoveAudio is 0.</p>
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set <p>Audio stream configuration parameters. This field is valid only when RemoveAudio is 0.</p>
 * @method TEHDConfig getTEHDConfig() Obtain <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EnhanceConfig getEnhanceConfig() Obtain <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerType() Obtain <p>Container format filter criteria. Valid values:</p><li>Video: Video format, can contain both video stream and audio stream.</li><li>PureAudio: Pure audio format, can only contain audio stream.</li>
 * @method void setContainerType(string $ContainerType) Set <p>Container format filter criteria. Valid values:</p><li>Video: Video format, can contain both video stream and audio stream.</li><li>PureAudio: Pure audio format, can only contain audio stream.</li>
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getSegmentType() Obtain <p>Segment type. Valid only when Container is hls.</p>
 * @method void setSegmentType(string $SegmentType) Set <p>Segment type. Valid only when Container is hls.</p>
 * @method string getStdExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended parameter.</p>
 */
class TranscodeTemplate extends AbstractModel
{
    /**
     * @var string <p>Unique identifier of the transcoding template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Container format. Valid values: mp4, flv, hls, mp3, flac, and ogg.</p>
     */
    public $Container;

    /**
     * @var string <p>Transcoding template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Template description information.</p>
     */
    public $Comment;

    /**
     * @var string <p>Template type. Value:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var integer <p>Whether to remove video data. Value:</p><li>0: Reserved;</li><li>1: Remove.</li>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>Remove audio data. Parameter value:</p><li>0: reserved;</li><li>1: remove.</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo <p>Video stream configuration parameters. This field is valid only when RemoveVideo is 0.</p>
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo <p>Audio stream configuration parameters. This field is valid only when RemoveAudio is 0.</p>
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @var string <p>Container format filter criteria. Valid values:</p><li>Video: Video format, can contain both video stream and audio stream.</li><li>PureAudio: Pure audio format, can only contain audio stream.</li>
     */
    public $ContainerType;

    /**
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Segment type. Valid only when Container is hls.</p>
     */
    public $SegmentType;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Definition <p>Unique identifier of the transcoding template.</p>
     * @param string $Container <p>Container format. Valid values: mp4, flv, hls, mp3, flac, and ogg.</p>
     * @param string $Name <p>Transcoding template name.</p>
     * @param string $Comment <p>Template description information.</p>
     * @param string $Type <p>Template type. Value:</p><li>Preset: preset template.</li><li>Custom: custom template.</li>
     * @param integer $RemoveVideo <p>Whether to remove video data. Value:</p><li>0: Reserved;</li><li>1: Remove.</li>
     * @param integer $RemoveAudio <p>Remove audio data. Parameter value:</p><li>0: reserved;</li><li>1: remove.</li>
     * @param VideoTemplateInfo $VideoTemplate <p>Video stream configuration parameters. This field is valid only when RemoveVideo is 0.</p>
     * @param AudioTemplateInfo $AudioTemplate <p>Audio stream configuration parameters. This field is valid only when RemoveAudio is 0.</p>
     * @param TEHDConfig $TEHDConfig <p>TSC transcoding parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EnhanceConfig $EnhanceConfig <p>Audio/Video enhancement configuration.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerType <p>Container format filter criteria. Valid values:</p><li>Video: Video format, can contain both video stream and audio stream.</li><li>PureAudio: Pure audio format, can only contain audio stream.</li>
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $SegmentType <p>Segment type. Valid only when Container is hls.</p>
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

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
