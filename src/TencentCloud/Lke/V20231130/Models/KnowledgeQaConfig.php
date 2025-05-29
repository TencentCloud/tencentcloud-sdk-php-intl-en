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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Knowledge Q&A configuration.
 *
 * @method string getGreeting() Obtain Welcome words, within 200 characters.
 * @method void setGreeting(string $Greeting) Set Welcome words, within 200 characters.
 * @method string getRoleDescription() Obtain Character description, within 4,000 characters. By filling out the description, set the #Character Name, #Style Characteristics, and reachable #Intent of the application. It is recommended to fill in according to the following template, with custom intents no more than 5. 
#Character Name:
#Style Characteristics:
#Output Requirements:
#Ability Limitations:
The following user intents can be reached.
##Intent Name:
##Intent Description:
##Intent Example:
##Intent Implementation:
 * @method void setRoleDescription(string $RoleDescription) Set Character description, within 4,000 characters. By filling out the description, set the #Character Name, #Style Characteristics, and reachable #Intent of the application. It is recommended to fill in according to the following template, with custom intents no more than 5. 
#Character Name:
#Style Characteristics:
#Output Requirements:
#Ability Limitations:
The following user intents can be reached.
##Intent Name:
##Intent Description:
##Intent Example:
##Intent Implementation:
 * @method AppModel getModel() Obtain Generative model configuration.
 * @method void setModel(AppModel $Model) Set Generative model configuration.
 * @method array getSearch() Obtain Knowledge search configuration.
 * @method void setSearch(array $Search) Set Knowledge search configuration.
 * @method KnowledgeQaOutput getOutput() Obtain Knowledge management output configuration.
 * @method void setOutput(KnowledgeQaOutput $Output) Set Knowledge management output configuration.
 * @method KnowledgeWorkflow getWorkflow() Obtain Workflow configuration.
 * @method void setWorkflow(KnowledgeWorkflow $Workflow) Set Workflow configuration.
 * @method SearchRange getSearchRange() Obtain Retrieval range.
 * @method void setSearchRange(SearchRange $SearchRange) Set Retrieval range.
 * @method string getPattern() Obtain Application modes: standard, agent, single_workflow.
 * @method void setPattern(string $Pattern) Set Application modes: standard, agent, single_workflow.
 * @method SearchStrategy getSearchStrategy() Obtain Retrieve a policy.
 * @method void setSearchStrategy(SearchStrategy $SearchStrategy) Set Retrieve a policy.
 * @method KnowledgeQaSingleWorkflow getSingleWorkflow() Obtain Single workflow ID, which is entered when Pattern is single_workflow.
 * @method void setSingleWorkflow(KnowledgeQaSingleWorkflow $SingleWorkflow) Set Single workflow ID, which is entered when Pattern is single_workflow.
 * @method array getPlugins() Obtain Application associated plug-in.
 * @method void setPlugins(array $Plugins) Set Application associated plug-in.
 * @method AppModel getThoughtModel() Obtain Thinking model configuration.
 * @method void setThoughtModel(AppModel $ThoughtModel) Set Thinking model configuration.
 * @method array getIntentAchievements() Obtain Priority of intent achievement methods.
 * @method void setIntentAchievements(array $IntentAchievements) Set Priority of intent achievement methods.
 * @method boolean getImageTextRetrieval() Obtain Whether to enable Image-Text Search.
 * @method void setImageTextRetrieval(boolean $ImageTextRetrieval) Set Whether to enable Image-Text Search.
 * @method AICallConfig getAiCall() Obtain Configure voice call parameters.
 * @method void setAiCall(AICallConfig $AiCall) Set Configure voice call parameters.
 * @method boolean getEnableAudit() Obtain Session content moderation switch. Note: 1. This feature is enabled by default if no value is input. 2. Tencent Cloud provides a content pre-filtering feature to help filter high-risk or illegal content. If you do not use our filtering feature, you can disable it here. We hereby remind you that you are responsible for ensuring that your content complies with platform policies and laws and regulations, and that you should fulfill your content moderation obligations.
 * @method void setEnableAudit(boolean $EnableAudit) Set Session content moderation switch. Note: 1. This feature is enabled by default if no value is input. 2. Tencent Cloud provides a content pre-filtering feature to help filter high-risk or illegal content. If you do not use our filtering feature, you can disable it here. We hereby remind you that you are responsible for ensuring that your content complies with platform policies and laws and regulations, and that you should fulfill your content moderation obligations.
 */
class KnowledgeQaConfig extends AbstractModel
{
    /**
     * @var string Welcome words, within 200 characters.
     */
    public $Greeting;

    /**
     * @var string Character description, within 4,000 characters. By filling out the description, set the #Character Name, #Style Characteristics, and reachable #Intent of the application. It is recommended to fill in according to the following template, with custom intents no more than 5. 
#Character Name:
#Style Characteristics:
#Output Requirements:
#Ability Limitations:
The following user intents can be reached.
##Intent Name:
##Intent Description:
##Intent Example:
##Intent Implementation:
     */
    public $RoleDescription;

    /**
     * @var AppModel Generative model configuration.
     */
    public $Model;

    /**
     * @var array Knowledge search configuration.
     */
    public $Search;

    /**
     * @var KnowledgeQaOutput Knowledge management output configuration.
     */
    public $Output;

    /**
     * @var KnowledgeWorkflow Workflow configuration.
     */
    public $Workflow;

    /**
     * @var SearchRange Retrieval range.
     */
    public $SearchRange;

    /**
     * @var string Application modes: standard, agent, single_workflow.
     */
    public $Pattern;

    /**
     * @var SearchStrategy Retrieve a policy.
     */
    public $SearchStrategy;

    /**
     * @var KnowledgeQaSingleWorkflow Single workflow ID, which is entered when Pattern is single_workflow.
     */
    public $SingleWorkflow;

    /**
     * @var array Application associated plug-in.
     */
    public $Plugins;

    /**
     * @var AppModel Thinking model configuration.
     */
    public $ThoughtModel;

    /**
     * @var array Priority of intent achievement methods.
     */
    public $IntentAchievements;

    /**
     * @var boolean Whether to enable Image-Text Search.
     */
    public $ImageTextRetrieval;

    /**
     * @var AICallConfig Configure voice call parameters.
     */
    public $AiCall;

    /**
     * @var boolean Session content moderation switch. Note: 1. This feature is enabled by default if no value is input. 2. Tencent Cloud provides a content pre-filtering feature to help filter high-risk or illegal content. If you do not use our filtering feature, you can disable it here. We hereby remind you that you are responsible for ensuring that your content complies with platform policies and laws and regulations, and that you should fulfill your content moderation obligations.
     */
    public $EnableAudit;

    /**
     * @param string $Greeting Welcome words, within 200 characters.
     * @param string $RoleDescription Character description, within 4,000 characters. By filling out the description, set the #Character Name, #Style Characteristics, and reachable #Intent of the application. It is recommended to fill in according to the following template, with custom intents no more than 5. 
#Character Name:
#Style Characteristics:
#Output Requirements:
#Ability Limitations:
The following user intents can be reached.
##Intent Name:
##Intent Description:
##Intent Example:
##Intent Implementation:
     * @param AppModel $Model Generative model configuration.
     * @param array $Search Knowledge search configuration.
     * @param KnowledgeQaOutput $Output Knowledge management output configuration.
     * @param KnowledgeWorkflow $Workflow Workflow configuration.
     * @param SearchRange $SearchRange Retrieval range.
     * @param string $Pattern Application modes: standard, agent, single_workflow.
     * @param SearchStrategy $SearchStrategy Retrieve a policy.
     * @param KnowledgeQaSingleWorkflow $SingleWorkflow Single workflow ID, which is entered when Pattern is single_workflow.
     * @param array $Plugins Application associated plug-in.
     * @param AppModel $ThoughtModel Thinking model configuration.
     * @param array $IntentAchievements Priority of intent achievement methods.
     * @param boolean $ImageTextRetrieval Whether to enable Image-Text Search.
     * @param AICallConfig $AiCall Configure voice call parameters.
     * @param boolean $EnableAudit Session content moderation switch. Note: 1. This feature is enabled by default if no value is input. 2. Tencent Cloud provides a content pre-filtering feature to help filter high-risk or illegal content. If you do not use our filtering feature, you can disable it here. We hereby remind you that you are responsible for ensuring that your content complies with platform policies and laws and regulations, and that you should fulfill your content moderation obligations.
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
        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }

        if (array_key_exists("RoleDescription",$param) and $param["RoleDescription"] !== null) {
            $this->RoleDescription = $param["RoleDescription"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModel();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = [];
            foreach ($param["Search"] as $key => $value){
                $obj = new KnowledgeQaSearch();
                $obj->deserialize($value);
                array_push($this->Search, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new KnowledgeQaOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new KnowledgeWorkflow();
            $this->Workflow->deserialize($param["Workflow"]);
        }

        if (array_key_exists("SearchRange",$param) and $param["SearchRange"] !== null) {
            $this->SearchRange = new SearchRange();
            $this->SearchRange->deserialize($param["SearchRange"]);
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("SearchStrategy",$param) and $param["SearchStrategy"] !== null) {
            $this->SearchStrategy = new SearchStrategy();
            $this->SearchStrategy->deserialize($param["SearchStrategy"]);
        }

        if (array_key_exists("SingleWorkflow",$param) and $param["SingleWorkflow"] !== null) {
            $this->SingleWorkflow = new KnowledgeQaSingleWorkflow();
            $this->SingleWorkflow->deserialize($param["SingleWorkflow"]);
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new KnowledgeQaPlugin();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("ThoughtModel",$param) and $param["ThoughtModel"] !== null) {
            $this->ThoughtModel = new AppModel();
            $this->ThoughtModel->deserialize($param["ThoughtModel"]);
        }

        if (array_key_exists("IntentAchievements",$param) and $param["IntentAchievements"] !== null) {
            $this->IntentAchievements = [];
            foreach ($param["IntentAchievements"] as $key => $value){
                $obj = new IntentAchievement();
                $obj->deserialize($value);
                array_push($this->IntentAchievements, $obj);
            }
        }

        if (array_key_exists("ImageTextRetrieval",$param) and $param["ImageTextRetrieval"] !== null) {
            $this->ImageTextRetrieval = $param["ImageTextRetrieval"];
        }

        if (array_key_exists("AiCall",$param) and $param["AiCall"] !== null) {
            $this->AiCall = new AICallConfig();
            $this->AiCall->deserialize($param["AiCall"]);
        }

        if (array_key_exists("EnableAudit",$param) and $param["EnableAudit"] !== null) {
            $this->EnableAudit = $param["EnableAudit"];
        }
    }
}
