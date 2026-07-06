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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTranscodeTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of the transcoding template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the transcoding template.</p>
 * @method string getContainer() Obtain <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method void setContainer(string $Container) Set <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
 * @method string getName() Obtain <p>Transcoding template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Transcoding template name. Length limit: 64 characters.</p>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method integer getRemoveVideo() Obtain <p>Indicates whether to remove video data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set <p>Indicates whether to remove video data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
 * @method integer getRemoveAudio() Obtain <p>Indicates whether to remove audio data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set <p>Indicates whether to remove audio data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() Obtain <p>Video stream configuration parameters.</p>
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) Set <p>Video stream configuration parameters.</p>
 * @method AudioTemplateInfoForUpdate getAudioTemplate() Obtain <p>Audio stream configuration parameters.</p>
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) Set <p>Audio stream configuration parameters.</p>
 * @method TEHDConfigForUpdate getTEHDConfig() Obtain <p>Top Speed Codec transcoding parameters.</p>
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) Set <p>Top Speed Codec transcoding parameters.</p>
 * @method EnhanceConfig getEnhanceConfig() Obtain <p>Audio/video enhancement parameters.</p>
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set <p>Audio/video enhancement parameters.</p>
 */
class ModifyTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the transcoding template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     */
    public $Container;

    /**
     * @var string <p>Transcoding template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var integer <p>Indicates whether to remove video data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>Indicates whether to remove audio data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
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
     * @var TEHDConfigForUpdate <p>Top Speed Codec transcoding parameters.</p>
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>Audio/video enhancement parameters.</p>
     */
    public $EnhanceConfig;

    /**
     * @param integer $Definition <p>Unique identifier of the transcoding template.</p>
     * @param string $Container <p>Container format. Valid values: mp4, flv, hls, mp3, flac, ogg, m4a, and wav. Among them, mp3, flac, ogg, m4a, and wav are for audio-only files.</p>
     * @param string $Name <p>Transcoding template name. Length limit: 64 characters.</p>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param integer $RemoveVideo <p>Indicates whether to remove video data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
     * @param integer $RemoveAudio <p>Indicates whether to remove audio data. Valid values:</p><li>0: Data is reserved.</li><li>1: Data is removed.</li>
     * @param VideoTemplateInfoForUpdate $VideoTemplate <p>Video stream configuration parameters.</p>
     * @param AudioTemplateInfoForUpdate $AudioTemplate <p>Audio stream configuration parameters.</p>
     * @param TEHDConfigForUpdate $TEHDConfig <p>Top Speed Codec transcoding parameters.</p>
     * @param EnhanceConfig $EnhanceConfig <p>Audio/video enhancement parameters.</p>
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
