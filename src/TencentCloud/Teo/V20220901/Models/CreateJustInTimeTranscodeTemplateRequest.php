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
 * CreateJustInTimeTranscodeTemplate request structure.
 *
 * @method string getZoneId() Obtain Specifies the site ID.
 * @method void setZoneId(string $ZoneId) Set Specifies the site ID.
 * @method string getTemplateName() Obtain Name of the just in time transcoding template, length limited to 64 characters.
 * @method void setTemplateName(string $TemplateName) Set Name of the just in time transcoding template, length limited to 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters. empty by default.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters. empty by default.
 * @method string getVideoStreamSwitch() Obtain Enable video stream. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
 * @method void setVideoStreamSwitch(string $VideoStreamSwitch) Set Enable video stream. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
 * @method string getAudioStreamSwitch() Obtain Enable audio stream switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
 * @method void setAudioStreamSwitch(string $AudioStreamSwitch) Set Enable audio stream switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
 * @method VideoTemplateInfo getVideoTemplate() Obtain Video stream configuration parameters. this field is required when VideoStreamSwitch is on.
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set Video stream configuration parameters. this field is required when VideoStreamSwitch is on.
 * @method AudioTemplateInfo getAudioTemplate() Obtain Audio stream configuration parameters. this field is required when AudioStreamSwitch is on.
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set Audio stream configuration parameters. this field is required when AudioStreamSwitch is on.
 */
class CreateJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string Specifies the site ID.
     */
    public $ZoneId;

    /**
     * @var string Name of the just in time transcoding template, length limited to 64 characters.
     */
    public $TemplateName;

    /**
     * @var string Template description, with a length limit of 256 characters. empty by default.
     */
    public $Comment;

    /**
     * @var string Enable video stream. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
     */
    public $VideoStreamSwitch;

    /**
     * @var string Enable audio stream switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
     */
    public $AudioStreamSwitch;

    /**
     * @var VideoTemplateInfo Video stream configuration parameters. this field is required when VideoStreamSwitch is on.
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo Audio stream configuration parameters. this field is required when AudioStreamSwitch is on.
     */
    public $AudioTemplate;

    /**
     * @param string $ZoneId Specifies the site ID.
     * @param string $TemplateName Name of the just in time transcoding template, length limited to 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters. empty by default.
     * @param string $VideoStreamSwitch Enable video stream. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
     * @param string $AudioStreamSwitch Enable audio stream switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled.</li>default value: on.
     * @param VideoTemplateInfo $VideoTemplate Video stream configuration parameters. this field is required when VideoStreamSwitch is on.
     * @param AudioTemplateInfo $AudioTemplate Audio stream configuration parameters. this field is required when AudioStreamSwitch is on.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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
    }
}
