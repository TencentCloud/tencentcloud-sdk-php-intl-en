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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel information
 *
 * @method string getId() Obtain Channel ID
 * @method void setId(string $Id) Set Channel ID
 * @method string getState() Obtain Channel status
 * @method void setState(string $State) Set Channel status
 * @method array getAttachedInputs() Obtain Information of attached inputs
 * @method void setAttachedInputs(array $AttachedInputs) Set Information of attached inputs
 * @method array getOutputGroups() Obtain Information of output groups
 * @method void setOutputGroups(array $OutputGroups) Set Information of output groups
 * @method string getName() Obtain Channel name
 * @method void setName(string $Name) Set Channel name
 * @method array getAudioTemplates() Obtain Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getVideoTemplates() Obtain Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getAVTemplates() Obtain Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAVTemplates(array $AVTemplates) Set Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getCaptionTemplates() Obtain 
 * @method void setCaptionTemplates(array $CaptionTemplates) Set 
 * @method PlanSettings getPlanSettings() Obtain Event settings
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPlanSettings(PlanSettings $PlanSettings) Set Event settings
Note: This field may return `null`, indicating that no valid value was found.
 * @method EventNotifySetting getEventNotifySettings() Obtain The callback settings.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEventNotifySettings(EventNotifySetting $EventNotifySettings) Set The callback settings.
Note: This field may return `null`, indicating that no valid value was found.
 * @method InputLossBehaviorInfo getInputLossBehavior() Obtain Supplement the last video frame configuration settings.
 * @method void setInputLossBehavior(InputLossBehaviorInfo $InputLossBehavior) Set Supplement the last video frame configuration settings.
 * @method PipelineInputSettingsInfo getPipelineInputSettings() Obtain Pipeline configuration.
 * @method void setPipelineInputSettings(PipelineInputSettingsInfo $PipelineInputSettings) Set Pipeline configuration.
 * @method InputAnalysisInfo getInputAnalysisSettings() Obtain Recognition configuration for input content.
 * @method void setInputAnalysisSettings(InputAnalysisInfo $InputAnalysisSettings) Set Recognition configuration for input content.
 * @method array getTags() Obtain Console tag list.
 * @method void setTags(array $Tags) Set Console tag list.
 * @method array getFrameCaptureTemplates() Obtain Frame capture templates.
 * @method void setFrameCaptureTemplates(array $FrameCaptureTemplates) Set Frame capture templates.
 */
class StreamLiveChannelInfo extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $Id;

    /**
     * @var string Channel status
     */
    public $State;

    /**
     * @var array Information of attached inputs
     */
    public $AttachedInputs;

    /**
     * @var array Information of output groups
     */
    public $OutputGroups;

    /**
     * @var string Channel name
     */
    public $Name;

    /**
     * @var array Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $VideoTemplates;

    /**
     * @var array Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AVTemplates;

    /**
     * @var array 
     */
    public $CaptionTemplates;

    /**
     * @var PlanSettings Event settings
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PlanSettings;

    /**
     * @var EventNotifySetting The callback settings.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EventNotifySettings;

    /**
     * @var InputLossBehaviorInfo Supplement the last video frame configuration settings.
     */
    public $InputLossBehavior;

    /**
     * @var PipelineInputSettingsInfo Pipeline configuration.
     */
    public $PipelineInputSettings;

    /**
     * @var InputAnalysisInfo Recognition configuration for input content.
     */
    public $InputAnalysisSettings;

    /**
     * @var array Console tag list.
     */
    public $Tags;

    /**
     * @var array Frame capture templates.
     */
    public $FrameCaptureTemplates;

    /**
     * @param string $Id Channel ID
     * @param string $State Channel status
     * @param array $AttachedInputs Information of attached inputs
     * @param array $OutputGroups Information of output groups
     * @param string $Name Channel name
     * @param array $AudioTemplates Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $VideoTemplates Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $AVTemplates Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $CaptionTemplates 
     * @param PlanSettings $PlanSettings Event settings
Note: This field may return `null`, indicating that no valid value was found.
     * @param EventNotifySetting $EventNotifySettings The callback settings.
Note: This field may return `null`, indicating that no valid value was found.
     * @param InputLossBehaviorInfo $InputLossBehavior Supplement the last video frame configuration settings.
     * @param PipelineInputSettingsInfo $PipelineInputSettings Pipeline configuration.
     * @param InputAnalysisInfo $InputAnalysisSettings Recognition configuration for input content.
     * @param array $Tags Console tag list.
     * @param array $FrameCaptureTemplates Frame capture templates.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
    }
}
