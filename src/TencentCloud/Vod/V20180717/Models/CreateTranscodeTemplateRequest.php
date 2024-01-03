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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTranscodeTemplate request structure.
 *
 * @method string getContainer() Obtain The container format. Valid values: `mp4`, `flv`, `hls`, `mp3`, `flac`, `ogg`, `m4a`, `wav` ( `mp3`, `flac`, `ogg`, `m4a`, and `wav` are audio file formats).
 * @method void setContainer(string $Container) Set The container format. Valid values: `mp4`, `flv`, `hls`, `mp3`, `flac`, `ogg`, `m4a`, `wav` ( `mp3`, `flac`, `ogg`, `m4a`, and `wav` are audio file formats).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Transcoding template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Transcoding template name. Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
 * @method TEHDConfig getTEHDConfig() Obtain TESHD transcoding parameter.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set TESHD transcoding parameter.
 * @method string getSegmentType() Obtain The segment type. This parameter is valid only if `Container` is `hls`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
 * @method void setSegmentType(string $SegmentType) Set The segment type. This parameter is valid only if `Container` is `hls`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
 */
class CreateTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string The container format. Valid values: `mp4`, `flv`, `hls`, `mp3`, `flac`, `ogg`, `m4a`, `wav` ( `mp3`, `flac`, `ogg`, `m4a`, and `wav` are audio file formats).
     */
    public $Container;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Transcoding template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig TESHD transcoding parameter.
     */
    public $TEHDConfig;

    /**
     * @var string The segment type. This parameter is valid only if `Container` is `hls`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
     */
    public $SegmentType;

    /**
     * @param string $Container The container format. Valid values: `mp4`, `flv`, `hls`, `mp3`, `flac`, `ogg`, `m4a`, `wav` ( `mp3`, `flac`, `ogg`, `m4a`, and `wav` are audio file formats).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Transcoding template name. Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>0: retain</li>
<li>1: remove</li>
Default value: 0.
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameter. This field is required when `RemoveVideo` is 0.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameter. This field is required when `RemoveAudio` is 0.
     * @param TEHDConfig $TEHDConfig TESHD transcoding parameter.
     * @param string $SegmentType The segment type. This parameter is valid only if `Container` is `hls`. Valid values:
<li>ts: TS segment</li>
<li>fmp4: fMP4 segment</li>
Default: ts
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

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
