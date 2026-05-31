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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLiveChannel request structure.
 *
 * @method string getName() Obtain Channel name, limited to lowercase letters, digits, and underscores, length [1, 32], unique in each Region.
 * @method void setName(string $Name) Set Channel name, limited to lowercase letters, digits, and underscores, length [1, 32], unique in each Region.
 * @method array getAttachedInputs() Obtain Associated media input, limit on the number [1, 5].
 * @method void setAttachedInputs(array $AttachedInputs) Set Associated media input, limit on the number [1, 5].
 * @method array getOutputGroups() Obtain Configuration message of the output group for the channel. Limit on the number [1, 10].
 * @method void setOutputGroups(array $OutputGroups) Set Configuration message of the output group for the channel. Limit on the number [1, 10].
 * @method array getAudioTemplates() Obtain Audio transcoding template array, with the maximum number of [1, 20].
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding template array, with the maximum number of [1, 20].
 * @method array getVideoTemplates() Obtain Video transcoding template array, with the maximum number of [1, 10].
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding template array, with the maximum number of [1, 10].
 * @method array getAVTemplates() Obtain Audio and video transcoding template array, with a limit on the number between 1 and 10.
 * @method void setAVTemplates(array $AVTemplates) Set Audio and video transcoding template array, with a limit on the number between 1 and 10.
 * @method array getCaptionTemplates() Obtain Subtitle template configuration is only valid for joint transcoding template.
 * @method void setCaptionTemplates(array $CaptionTemplates) Set Subtitle template configuration is only valid for joint transcoding template.
 * @method PlanSettings getPlanSettings() Obtain Configuration message of the scheduled task.
 * @method void setPlanSettings(PlanSettings $PlanSettings) Set Configuration message of the scheduled task.
 * @method EventNotifySetting getEventNotifySettings() Obtain Callback configuration information.
 * @method void setEventNotifySettings(EventNotifySetting $EventNotifySettings) Set Callback configuration information.
 * @method InputLossBehaviorInfo getInputLossBehavior() Obtain Complement the last video frame settings.
 * @method void setInputLossBehavior(InputLossBehaviorInfo $InputLossBehavior) Set Complement the last video frame settings.
 * @method PipelineInputSettingsInfo getPipelineInputSettings() Obtain Pipeline configuration.
 * @method void setPipelineInputSettings(PipelineInputSettingsInfo $PipelineInputSettings) Set Pipeline configuration.
 * @method InputAnalysisInfo getInputAnalysisSettings() Obtain Input content identification configuration.
 * @method void setInputAnalysisSettings(InputAnalysisInfo $InputAnalysisSettings) Set Input content identification configuration.
 * @method array getTags() Obtain Console tag list
 * @method void setTags(array $Tags) Set Console tag list
 * @method array getFrameCaptureTemplates() Obtain chart template
 * @method void setFrameCaptureTemplates(array $FrameCaptureTemplates) Set chart template
 * @method GeneralSetting getGeneralSettings() Obtain Common configuration.
 * @method void setGeneralSettings(GeneralSetting $GeneralSettings) Set Common configuration.
 */
class CreateStreamLiveChannelRequest extends AbstractModel
{
    /**
     * @var string Channel name, limited to lowercase letters, digits, and underscores, length [1, 32], unique in each Region.
     */
    public $Name;

    /**
     * @var array Associated media input, limit on the number [1, 5].
     */
    public $AttachedInputs;

    /**
     * @var array Configuration message of the output group for the channel. Limit on the number [1, 10].
     */
    public $OutputGroups;

    /**
     * @var array Audio transcoding template array, with the maximum number of [1, 20].
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding template array, with the maximum number of [1, 10].
     */
    public $VideoTemplates;

    /**
     * @var array Audio and video transcoding template array, with a limit on the number between 1 and 10.
     */
    public $AVTemplates;

    /**
     * @var array Subtitle template configuration is only valid for joint transcoding template.
     */
    public $CaptionTemplates;

    /**
     * @var PlanSettings Configuration message of the scheduled task.
     */
    public $PlanSettings;

    /**
     * @var EventNotifySetting Callback configuration information.
     */
    public $EventNotifySettings;

    /**
     * @var InputLossBehaviorInfo Complement the last video frame settings.
     */
    public $InputLossBehavior;

    /**
     * @var PipelineInputSettingsInfo Pipeline configuration.
     */
    public $PipelineInputSettings;

    /**
     * @var InputAnalysisInfo Input content identification configuration.
     */
    public $InputAnalysisSettings;

    /**
     * @var array Console tag list
     */
    public $Tags;

    /**
     * @var array chart template
     */
    public $FrameCaptureTemplates;

    /**
     * @var GeneralSetting Common configuration.
     */
    public $GeneralSettings;

    /**
     * @param string $Name Channel name, limited to lowercase letters, digits, and underscores, length [1, 32], unique in each Region.
     * @param array $AttachedInputs Associated media input, limit on the number [1, 5].
     * @param array $OutputGroups Configuration message of the output group for the channel. Limit on the number [1, 10].
     * @param array $AudioTemplates Audio transcoding template array, with the maximum number of [1, 20].
     * @param array $VideoTemplates Video transcoding template array, with the maximum number of [1, 10].
     * @param array $AVTemplates Audio and video transcoding template array, with a limit on the number between 1 and 10.
     * @param array $CaptionTemplates Subtitle template configuration is only valid for joint transcoding template.
     * @param PlanSettings $PlanSettings Configuration message of the scheduled task.
     * @param EventNotifySetting $EventNotifySettings Callback configuration information.
     * @param InputLossBehaviorInfo $InputLossBehavior Complement the last video frame settings.
     * @param PipelineInputSettingsInfo $PipelineInputSettings Pipeline configuration.
     * @param InputAnalysisInfo $InputAnalysisSettings Input content identification configuration.
     * @param array $Tags Console tag list
     * @param array $FrameCaptureTemplates chart template
     * @param GeneralSetting $GeneralSettings Common configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AttachedInputs",$param) and $param["AttachedInputs"] !== null) {
            $this->AttachedInputs = [];
            foreach ($param["AttachedInputs"] as $key => $value){
                $obj = new AttachedInput();
                $obj->deserialize($value);
                array_push($this->AttachedInputs, $obj);
            }
        }

        if (array_key_exists("OutputGroups",$param) and $param["OutputGroups"] !== null) {
            $this->OutputGroups = [];
            foreach ($param["OutputGroups"] as $key => $value){
                $obj = new StreamLiveOutputGroupsInfo();
                $obj->deserialize($value);
                array_push($this->OutputGroups, $obj);
            }
        }

        if (array_key_exists("AudioTemplates",$param) and $param["AudioTemplates"] !== null) {
            $this->AudioTemplates = [];
            foreach ($param["AudioTemplates"] as $key => $value){
                $obj = new AudioTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AudioTemplates, $obj);
            }
        }

        if (array_key_exists("VideoTemplates",$param) and $param["VideoTemplates"] !== null) {
            $this->VideoTemplates = [];
            foreach ($param["VideoTemplates"] as $key => $value){
                $obj = new VideoTemplateInfo();
                $obj->deserialize($value);
                array_push($this->VideoTemplates, $obj);
            }
        }

        if (array_key_exists("AVTemplates",$param) and $param["AVTemplates"] !== null) {
            $this->AVTemplates = [];
            foreach ($param["AVTemplates"] as $key => $value){
                $obj = new AVTemplate();
                $obj->deserialize($value);
                array_push($this->AVTemplates, $obj);
            }
        }

        if (array_key_exists("CaptionTemplates",$param) and $param["CaptionTemplates"] !== null) {
            $this->CaptionTemplates = [];
            foreach ($param["CaptionTemplates"] as $key => $value){
                $obj = new SubtitleConf();
                $obj->deserialize($value);
                array_push($this->CaptionTemplates, $obj);
            }
        }

        if (array_key_exists("PlanSettings",$param) and $param["PlanSettings"] !== null) {
            $this->PlanSettings = new PlanSettings();
            $this->PlanSettings->deserialize($param["PlanSettings"]);
        }

        if (array_key_exists("EventNotifySettings",$param) and $param["EventNotifySettings"] !== null) {
            $this->EventNotifySettings = new EventNotifySetting();
            $this->EventNotifySettings->deserialize($param["EventNotifySettings"]);
        }

        if (array_key_exists("InputLossBehavior",$param) and $param["InputLossBehavior"] !== null) {
            $this->InputLossBehavior = new InputLossBehaviorInfo();
            $this->InputLossBehavior->deserialize($param["InputLossBehavior"]);
        }

        if (array_key_exists("PipelineInputSettings",$param) and $param["PipelineInputSettings"] !== null) {
            $this->PipelineInputSettings = new PipelineInputSettingsInfo();
            $this->PipelineInputSettings->deserialize($param["PipelineInputSettings"]);
        }

        if (array_key_exists("InputAnalysisSettings",$param) and $param["InputAnalysisSettings"] !== null) {
            $this->InputAnalysisSettings = new InputAnalysisInfo();
            $this->InputAnalysisSettings->deserialize($param["InputAnalysisSettings"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("FrameCaptureTemplates",$param) and $param["FrameCaptureTemplates"] !== null) {
            $this->FrameCaptureTemplates = [];
            foreach ($param["FrameCaptureTemplates"] as $key => $value){
                $obj = new FrameCaptureTemplate();
                $obj->deserialize($value);
                array_push($this->FrameCaptureTemplates, $obj);
            }
        }

        if (array_key_exists("GeneralSettings",$param) and $param["GeneralSettings"] !== null) {
            $this->GeneralSettings = new GeneralSetting();
            $this->GeneralSettings->deserialize($param["GeneralSettings"]);
        }
    }
}
