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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTranscodeTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of a transcoding template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a transcoding template.
 * @method string getContainer() Obtain Container format. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
 * @method void setContainer(string $Container) Set Container format. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
 * @method string getName() Obtain Name of a transcoding template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a transcoding template. Length limit: 64 characters.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain Video stream configuration parameter.
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set Video stream configuration parameter.
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain Audio stream configuration parameter.
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set Audio stream configuration parameter.
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
 * @method EnhanceConfig getEnhanceConfig() Obtain Audio/Video enhancement settings.
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set Audio/Video enhancement settings.
 */
class ModifyTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of a transcoding template.
     */
    public $Definition;

    /**
     * @var string Container format. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
     */
    public $Container;

    /**
     * @var string Name of a transcoding template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate Video stream configuration parameter.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate Audio stream configuration parameter.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig Audio/Video enhancement settings.
     */
    public $EnhanceConfig;

    /**
     * @param integer $Definition Unique ID of a transcoding template.
     * @param string $Container Container format. Valid values: mp4; flv; hls; mp3; flac; ogg; m4a. Among them, mp3, flac, ogg, and m4a are for audio files.
     * @param string $Name Name of a transcoding template. Length limit: 64 characters.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>0: Retain</li>
<li>1: Remove</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate Video stream configuration parameter.
     * @param AudioTemplateInfoForUpdate $AudioTemplate Audio stream configuration parameter.
     * @param TEHDConfigForUpdate $TEHDConfig TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
     * @param EnhanceConfig $EnhanceConfig Audio/Video enhancement settings.
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
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }
    }
}
