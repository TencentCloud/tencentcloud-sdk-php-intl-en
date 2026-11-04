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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApp request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method integer getAppMode() Obtain <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
 * @method void setAppMode(integer $AppMode) Set <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
 * @method string getAvatar() Obtain <p>App avatar</p>
 * @method void setAvatar(string $Avatar) Set <p>App avatar</p>
 * @method AppConfig getConfig() Obtain <p>Application configuration</p>
 * @method void setConfig(AppConfig $Config) Set <p>Application configuration</p>
 * @method string getDescription() Obtain <p>Application description.</p>
 * @method void setDescription(string $Description) Set <p>Application description.</p>
 * @method string getName() Obtain <p>Application name.</p>
 * @method void setName(string $Name) Set <p>Application name.</p>
 * @method array getSharedKbIdList() Obtain <p>List of IDs of shared knowledge bases to refer (full coverage)</p>
 * @method void setSharedKbIdList(array $SharedKbIdList) Set <p>List of IDs of shared knowledge bases to refer (full coverage)</p>
 * @method array getFileVolumeMountList() Obtain <p>App mount cloud disk</p>
 * @method void setFileVolumeMountList(array $FileVolumeMountList) Set <p>App mount cloud disk</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field mask, specifying the fields to update (if Paths is empty, no fields will be updated). Paths enumeration values:<br>[Top level] Name, Avatar, Description, AppMode, SharedKbIdList, FileVolumeMountList<br>[Greeting] Config.Greeting, Config.Greeting.Greeting, Config.Greeting.OpeningQuestionList<br>[Model] Config.Model, Config.Model.ThinkModel, Config.Model.GenerateModel, Config.Model.AiOptimizeModel, Config.Model.FileParseModel, Config.Model.PromptRewriteModel, Config.Model.MultiModalQaModel, Config.Model.MultiModalUnderstandingModel<br>[WebSearch] Config.WebSearch<br>[Memory] Config.Memory, Config.Memory.Enabled, Config.Memory.LongMemoryDay, Config.Memory.Model, Config.Memory.PromptMode, Config.Memory.PromptContent<br>[Mode] Config.Mode, Config.Mode.MultiAgentConfig, Config.Mode.SingleWorkflowConfig,Config.Mode.ClawAgentConfig<br> [Mode.ClawAgentConfig] Config.Mode.ClawAgentConfig.LongMemoryConfig, Config.Mode.ClawAgentConfig.AgentTeamConfig, Config.Mode.ClawAgentConfig.ChannelContextTimeoutConfig<br>[Experience] Config.Experience, Config.Experience.Conversation, Config.Experience.Role, Config.Experience.Advanced<br>[Experience.Conversation] Config.Experience.Conversation.AiCall, Config.Experience.Conversation.BackgroundImage, Config.Experience.Conversation.Method, Config.Experience.Conversation.FallbackReply, Config.Experience.Conversation.Recommended, Config.Experience.Conversation.InputBoxConfig, Config.Experience.Conversation.WebSearch,Config.Experience.Conversation.NewMessageInterrupt<br>[Experience.Conversation.AiCall] Config.Experience.Conversation.AiCall.VoiceInteract, Config.Experience.Conversation.AiCall.VoiceCall, Config.Experience.Conversation.AiCall.DigitalHuman<br>[Experience.Advanced] Config.Experience.Advanced.ContextRewrite, Config.Experience.Advanced.ImageTextRetrieval, Config.Experience.Advanced.IntentAchievement, Config.Experience.Advanced.ReplyFlexibility</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field mask, specifying the fields to update (if Paths is empty, no fields will be updated). Paths enumeration values:<br>[Top level] Name, Avatar, Description, AppMode, SharedKbIdList, FileVolumeMountList<br>[Greeting] Config.Greeting, Config.Greeting.Greeting, Config.Greeting.OpeningQuestionList<br>[Model] Config.Model, Config.Model.ThinkModel, Config.Model.GenerateModel, Config.Model.AiOptimizeModel, Config.Model.FileParseModel, Config.Model.PromptRewriteModel, Config.Model.MultiModalQaModel, Config.Model.MultiModalUnderstandingModel<br>[WebSearch] Config.WebSearch<br>[Memory] Config.Memory, Config.Memory.Enabled, Config.Memory.LongMemoryDay, Config.Memory.Model, Config.Memory.PromptMode, Config.Memory.PromptContent<br>[Mode] Config.Mode, Config.Mode.MultiAgentConfig, Config.Mode.SingleWorkflowConfig,Config.Mode.ClawAgentConfig<br> [Mode.ClawAgentConfig] Config.Mode.ClawAgentConfig.LongMemoryConfig, Config.Mode.ClawAgentConfig.AgentTeamConfig, Config.Mode.ClawAgentConfig.ChannelContextTimeoutConfig<br>[Experience] Config.Experience, Config.Experience.Conversation, Config.Experience.Role, Config.Experience.Advanced<br>[Experience.Conversation] Config.Experience.Conversation.AiCall, Config.Experience.Conversation.BackgroundImage, Config.Experience.Conversation.Method, Config.Experience.Conversation.FallbackReply, Config.Experience.Conversation.Recommended, Config.Experience.Conversation.InputBoxConfig, Config.Experience.Conversation.WebSearch,Config.Experience.Conversation.NewMessageInterrupt<br>[Experience.Conversation.AiCall] Config.Experience.Conversation.AiCall.VoiceInteract, Config.Experience.Conversation.AiCall.VoiceCall, Config.Experience.Conversation.AiCall.DigitalHuman<br>[Experience.Advanced] Config.Experience.Advanced.ContextRewrite, Config.Experience.Advanced.ImageTextRetrieval, Config.Experience.Advanced.IntentAchievement, Config.Experience.Advanced.ReplyFlexibility</p>
 */
class ModifyAppRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var integer <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
     */
    public $AppMode;

    /**
     * @var string <p>App avatar</p>
     */
    public $Avatar;

    /**
     * @var AppConfig <p>Application configuration</p>
     */
    public $Config;

    /**
     * @var string <p>Application description.</p>
     */
    public $Description;

    /**
     * @var string <p>Application name.</p>
     */
    public $Name;

    /**
     * @var array <p>List of IDs of shared knowledge bases to refer (full coverage)</p>
     */
    public $SharedKbIdList;

    /**
     * @var array <p>App mount cloud disk</p>
     */
    public $FileVolumeMountList;

    /**
     * @var FieldMask <p>Field mask, specifying the fields to update (if Paths is empty, no fields will be updated). Paths enumeration values:<br>[Top level] Name, Avatar, Description, AppMode, SharedKbIdList, FileVolumeMountList<br>[Greeting] Config.Greeting, Config.Greeting.Greeting, Config.Greeting.OpeningQuestionList<br>[Model] Config.Model, Config.Model.ThinkModel, Config.Model.GenerateModel, Config.Model.AiOptimizeModel, Config.Model.FileParseModel, Config.Model.PromptRewriteModel, Config.Model.MultiModalQaModel, Config.Model.MultiModalUnderstandingModel<br>[WebSearch] Config.WebSearch<br>[Memory] Config.Memory, Config.Memory.Enabled, Config.Memory.LongMemoryDay, Config.Memory.Model, Config.Memory.PromptMode, Config.Memory.PromptContent<br>[Mode] Config.Mode, Config.Mode.MultiAgentConfig, Config.Mode.SingleWorkflowConfig,Config.Mode.ClawAgentConfig<br> [Mode.ClawAgentConfig] Config.Mode.ClawAgentConfig.LongMemoryConfig, Config.Mode.ClawAgentConfig.AgentTeamConfig, Config.Mode.ClawAgentConfig.ChannelContextTimeoutConfig<br>[Experience] Config.Experience, Config.Experience.Conversation, Config.Experience.Role, Config.Experience.Advanced<br>[Experience.Conversation] Config.Experience.Conversation.AiCall, Config.Experience.Conversation.BackgroundImage, Config.Experience.Conversation.Method, Config.Experience.Conversation.FallbackReply, Config.Experience.Conversation.Recommended, Config.Experience.Conversation.InputBoxConfig, Config.Experience.Conversation.WebSearch,Config.Experience.Conversation.NewMessageInterrupt<br>[Experience.Conversation.AiCall] Config.Experience.Conversation.AiCall.VoiceInteract, Config.Experience.Conversation.AiCall.VoiceCall, Config.Experience.Conversation.AiCall.DigitalHuman<br>[Experience.Advanced] Config.Experience.Advanced.ContextRewrite, Config.Experience.Advanced.ImageTextRetrieval, Config.Experience.Advanced.IntentAchievement, Config.Experience.Advanced.ReplyFlexibility</p>
     */
    public $UpdateMask;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param integer $AppMode <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
     * @param string $Avatar <p>App avatar</p>
     * @param AppConfig $Config <p>Application configuration</p>
     * @param string $Description <p>Application description.</p>
     * @param string $Name <p>Application name.</p>
     * @param array $SharedKbIdList <p>List of IDs of shared knowledge bases to refer (full coverage)</p>
     * @param array $FileVolumeMountList <p>App mount cloud disk</p>
     * @param FieldMask $UpdateMask <p>Field mask, specifying the fields to update (if Paths is empty, no fields will be updated). Paths enumeration values:<br>[Top level] Name, Avatar, Description, AppMode, SharedKbIdList, FileVolumeMountList<br>[Greeting] Config.Greeting, Config.Greeting.Greeting, Config.Greeting.OpeningQuestionList<br>[Model] Config.Model, Config.Model.ThinkModel, Config.Model.GenerateModel, Config.Model.AiOptimizeModel, Config.Model.FileParseModel, Config.Model.PromptRewriteModel, Config.Model.MultiModalQaModel, Config.Model.MultiModalUnderstandingModel<br>[WebSearch] Config.WebSearch<br>[Memory] Config.Memory, Config.Memory.Enabled, Config.Memory.LongMemoryDay, Config.Memory.Model, Config.Memory.PromptMode, Config.Memory.PromptContent<br>[Mode] Config.Mode, Config.Mode.MultiAgentConfig, Config.Mode.SingleWorkflowConfig,Config.Mode.ClawAgentConfig<br> [Mode.ClawAgentConfig] Config.Mode.ClawAgentConfig.LongMemoryConfig, Config.Mode.ClawAgentConfig.AgentTeamConfig, Config.Mode.ClawAgentConfig.ChannelContextTimeoutConfig<br>[Experience] Config.Experience, Config.Experience.Conversation, Config.Experience.Role, Config.Experience.Advanced<br>[Experience.Conversation] Config.Experience.Conversation.AiCall, Config.Experience.Conversation.BackgroundImage, Config.Experience.Conversation.Method, Config.Experience.Conversation.FallbackReply, Config.Experience.Conversation.Recommended, Config.Experience.Conversation.InputBoxConfig, Config.Experience.Conversation.WebSearch,Config.Experience.Conversation.NewMessageInterrupt<br>[Experience.Conversation.AiCall] Config.Experience.Conversation.AiCall.VoiceInteract, Config.Experience.Conversation.AiCall.VoiceCall, Config.Experience.Conversation.AiCall.DigitalHuman<br>[Experience.Advanced] Config.Experience.Advanced.ContextRewrite, Config.Experience.Advanced.ImageTextRetrieval, Config.Experience.Advanced.IntentAchievement, Config.Experience.Advanced.ReplyFlexibility</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AppConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SharedKbIdList",$param) and $param["SharedKbIdList"] !== null) {
            $this->SharedKbIdList = $param["SharedKbIdList"];
        }

        if (array_key_exists("FileVolumeMountList",$param) and $param["FileVolumeMountList"] !== null) {
            $this->FileVolumeMountList = [];
            foreach ($param["FileVolumeMountList"] as $key => $value){
                $obj = new AppFileVolumeMount();
                $obj->deserialize($value);
                array_push($this->FileVolumeMountList, $obj);
            }
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
