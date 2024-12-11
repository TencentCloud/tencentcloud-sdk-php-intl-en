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
 * Details of a transcoding template
 *
 * @method string getDefinition() Obtain Unique ID of a transcoding template.
 * @method void setDefinition(string $Definition) Set Unique ID of a transcoding template.
 * @method string getContainer() Obtain Container format. Valid values: mp4, flv, hls, mp3, flac, ogg.
 * @method void setContainer(string $Container) Set Container format. Valid values: mp4, flv, hls, mp3, flac, ogg.
 * @method string getName() Obtain Name of a transcoding template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name of a transcoding template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Template description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Template description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: Preset template;</li>
<li>Custom: Custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: Preset template;</li>
<li>Custom: Custom template.</li>
 * @method integer getRemoveVideo() Obtain Whether to remove video data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
 * @method void setRemoveVideo(integer $RemoveVideo) Set Whether to remove video data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
 * @method integer getRemoveAudio() Obtain Whether to remove audio data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
 * @method void setRemoveAudio(integer $RemoveAudio) Set Whether to remove audio data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameter. This field is valid only when `RemoveVideo` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameter. This field is valid only when `RemoveVideo` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameter. This field is valid only when `RemoveAudio` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameter. This field is valid only when `RemoveAudio` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TEHDConfig getTEHDConfig() Obtain TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContainerType() Obtain Container format filter. Valid values:
<li>Video: Video container format that can contain both video stream and audio stream;</li>
<li>PureAudio: Audio container format that can contain only audio stream.</li>
 * @method void setContainerType(string $ContainerType) Set Container format filter. Valid values:
<li>Video: Video container format that can contain both video stream and audio stream;</li>
<li>PureAudio: Audio container format that can contain only audio stream.</li>
 * @method string getCreateTime() Obtain Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method EnhanceConfig getEnhanceConfig() Obtain Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) Set Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAliasName() Obtain Transcoding template alias.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAliasName(string $AliasName) Set Transcoding template alias.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TranscodeTemplate extends AbstractModel
{
    /**
     * @var string Unique ID of a transcoding template.
     */
    public $Definition;

    /**
     * @var string Container format. Valid values: mp4, flv, hls, mp3, flac, ogg.
     */
    public $Container;

    /**
     * @var string Name of a transcoding template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Template description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
<li>Preset: Preset template;</li>
<li>Custom: Custom template.</li>
     */
    public $Type;

    /**
     * @var integer Whether to remove video data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
     */
    public $RemoveVideo;

    /**
     * @var integer Whether to remove audio data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo Video stream configuration parameter. This field is valid only when `RemoveVideo` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameter. This field is valid only when `RemoveAudio` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEHDConfig;

    /**
     * @var string Container format filter. Valid values:
<li>Video: Video container format that can contain both video stream and audio stream;</li>
<li>PureAudio: Audio container format that can contain only audio stream.</li>
     */
    public $ContainerType;

    /**
     * @var string Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @var EnhanceConfig Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceConfig;

    /**
     * @var string Transcoding template alias.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AliasName;

    /**
     * @param string $Definition Unique ID of a transcoding template.
     * @param string $Container Container format. Valid values: mp4, flv, hls, mp3, flac, ogg.
     * @param string $Name Name of a transcoding template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment Template description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Template type. Valid values:
<li>Preset: Preset template;</li>
<li>Custom: Custom template.</li>
     * @param integer $RemoveVideo Whether to remove video data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
     * @param integer $RemoveAudio Whether to remove audio data. Valid values:
<li>0: Retain;</li>
<li>1: Remove.</li>
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameter. This field is valid only when `RemoveVideo` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameter. This field is valid only when `RemoveAudio` is 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TEHDConfig $TEHDConfig TESHD transcoding parameter. To enable it, please contact your Tencent Cloud sales rep.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContainerType Container format filter. Valid values:
<li>Video: Video container format that can contain both video stream and audio stream;</li>
<li>PureAudio: Audio container format that can contain only audio stream.</li>
     * @param string $CreateTime Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param EnhanceConfig $EnhanceConfig Audio/Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AliasName Transcoding template alias.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
