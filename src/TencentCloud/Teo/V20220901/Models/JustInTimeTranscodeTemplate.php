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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the just in time transcoding template.
 *
 * @method string getTemplateId() Obtain Unique identifier of the instant transcoding template.
 * @method void setTemplateId(string $TemplateId) Set Unique identifier of the instant transcoding template.
 * @method string getTemplateName() Obtain Transcoding template name.
 * @method void setTemplateName(string $TemplateName) Set Transcoding template name.
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method string getType() Obtain Template type. Valid values: <li>preset: system-preset template.</li><li>custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values: <li>preset: system-preset template.</li><li>custom: custom template.</li>
 * @method string getVideoStreamSwitch() Obtain Enable the video stream switch. Value: <li>on: enable;</li><li>off: disable.</li>
 * @method void setVideoStreamSwitch(string $VideoStreamSwitch) Set Enable the video stream switch. Value: <li>on: enable;</li><li>off: disable.</li>
 * @method string getAudioStreamSwitch() Obtain Enable the audio stream switch. Valid values: <li>on: enable;</li><li>off: disable.</li>
 * @method void setAudioStreamSwitch(string $AudioStreamSwitch) Set Enable the audio stream switch. Valid values: <li>on: enable;</li><li>off: disable.</li>
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameters. This field is valid only when VideoStreamSwitch is on.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameters. This field is valid only when VideoStreamSwitch is on.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameters. This field is valid only when AudioStreamSwitch is on.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameters. This field is valid only when AudioStreamSwitch is on.
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class JustInTimeTranscodeTemplate extends AbstractModel
{
    /**
     * @var string Unique identifier of the instant transcoding template.
     */
    public $TemplateId;

    /**
     * @var string Transcoding template name.
     */
    public $TemplateName;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values: <li>preset: system-preset template.</li><li>custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Enable the video stream switch. Value: <li>on: enable;</li><li>off: disable.</li>
     */
    public $VideoStreamSwitch;

    /**
     * @var string Enable the audio stream switch. Valid values: <li>on: enable;</li><li>off: disable.</li>
     */
    public $AudioStreamSwitch;

    /**
     * @var VideoTemplateInfo Video stream configuration parameters. This field is valid only when VideoStreamSwitch is on.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameters. This field is valid only when AudioStreamSwitch is on.
     */
    public $AudioTemplate;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param string $TemplateId Unique identifier of the instant transcoding template.
     * @param string $TemplateName Transcoding template name.
     * @param string $Comment Template description information.
     * @param string $Type Template type. Valid values: <li>preset: system-preset template.</li><li>custom: custom template.</li>
     * @param string $VideoStreamSwitch Enable the video stream switch. Value: <li>on: enable;</li><li>off: disable.</li>
     * @param string $AudioStreamSwitch Enable the audio stream switch. Valid values: <li>on: enable;</li><li>off: disable.</li>
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameters. This field is valid only when VideoStreamSwitch is on.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameters. This field is valid only when AudioStreamSwitch is on.
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VideoStreamSwitch",$param) and $param["VideoStreamSwitch"] !== null) {
            $this->VideoStreamSwitch = $param["VideoStreamSwitch"];
        }

        if (array_key_exists("AudioStreamSwitch",$param) and $param["AudioStreamSwitch"] !== null) {
            $this->AudioStreamSwitch = $param["AudioStreamSwitch"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
