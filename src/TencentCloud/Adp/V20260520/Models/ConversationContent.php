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
 * Content message information
 *
 * @method string getText() Obtain <p>Text content</p>
 * @method void setText(string $Text) Set <p>Text content</p>
 * @method string getType() Obtain <p>Content type. text: text, image: image, file: file, custom_variables: custom input parameter information, widget_action: widget action information</p>
 * @method void setType(string $Type) Set <p>Content type. text: text, image: image, file: file, custom_variables: custom input parameter information, widget_action: widget action information</p>
 * @method array getCustomParamList() Obtain <p>Custom parameter data</p>
 * @method void setCustomParamList(array $CustomParamList) Set <p>Custom parameter data</p>
 * @method array getCustomParams() Obtain <p>Custom parameter data</p>
 * @method void setCustomParams(array $CustomParams) Set <p>Custom parameter data</p>
 * @method string getCustomVariablesData() Obtain <p>Custom variable data</p>
 * @method void setCustomVariablesData(string $CustomVariablesData) Set <p>Custom variable data</p>
 * @method string getEnterpriseCharts() Obtain <p>Business form</p>
 * @method void setEnterpriseCharts(string $EnterpriseCharts) Set <p>Business form</p>
 * @method array getOptionCardList() Obtain <p>Tab List</p>
 * @method void setOptionCardList(array $OptionCardList) Set <p>Tab List</p>
 * @method array getOptionCards() Obtain <p>Tab list.</p>
 * @method void setOptionCards(array $OptionCards) Set <p>Tab list.</p>
 * @method integer getOptionMode() Obtain <p>Tab mode. Enumeration values: 0-OPTION_MODE_SINGLE (single selection), 1-OPTION_MODE_MULTI (multiple selection)</p>
 * @method void setOptionMode(integer $OptionMode) Set <p>Tab mode. Enumeration values: 0-OPTION_MODE_SINGLE (single selection), 1-OPTION_MODE_MULTI (multiple selection)</p>
 * @method array getQuoteInfoList() Obtain <p>Reference marker information list</p>
 * @method void setQuoteInfoList(array $QuoteInfoList) Set <p>Reference marker information list</p>
 * @method array getQuoteInfos() Obtain <p>List of reference superscript information</p>
 * @method void setQuoteInfos(array $QuoteInfos) Set <p>List of reference superscript information</p>
 * @method array getReferenceList() Obtain <p>Reference source list</p>
 * @method void setReferenceList(array $ReferenceList) Set <p>Reference source list</p>
 * @method array getReferences() Obtain <p>Reference list</p>
 * @method void setReferences(array $References) Set <p>Reference list</p>
 * @method string getRelatedRecordId() Obtain <p>Associated record ID</p>
 * @method void setRelatedRecordId(string $RelatedRecordId) Set <p>Associated record ID</p>
 * @method array getTaskList() Obtain <p>Intelligent Agent Task List</p>
 * @method void setTaskList(array $TaskList) Set <p>Intelligent Agent Task List</p>
 * @method array getTasks() Obtain <p>Intelligent Agent Task List</p>
 * @method void setTasks(array $Tasks) Set <p>Intelligent Agent Task List</p>
 * @method string getWorkflowInput() Obtain <p>Workflow input parameter</p>
 * @method void setWorkflowInput(string $WorkflowInput) Set <p>Workflow input parameter</p>
 * @method ConversationMcpApp getMcpApp() Obtain <p>MCP-APP call information</p>
 * @method void setMcpApp(ConversationMcpApp $McpApp) Set <p>MCP-APP call information</p>
 */
class ConversationContent extends AbstractModel
{
    /**
     * @var string <p>Text content</p>
     */
    public $Text;

    /**
     * @var string <p>Content type. text: text, image: image, file: file, custom_variables: custom input parameter information, widget_action: widget action information</p>
     */
    public $Type;

    /**
     * @var array <p>Custom parameter data</p>
     */
    public $CustomParamList;

    /**
     * @var array <p>Custom parameter data</p>
     */
    public $CustomParams;

    /**
     * @var string <p>Custom variable data</p>
     */
    public $CustomVariablesData;

    /**
     * @var string <p>Business form</p>
     */
    public $EnterpriseCharts;

    /**
     * @var array <p>Tab List</p>
     */
    public $OptionCardList;

    /**
     * @var array <p>Tab list.</p>
     */
    public $OptionCards;

    /**
     * @var integer <p>Tab mode. Enumeration values: 0-OPTION_MODE_SINGLE (single selection), 1-OPTION_MODE_MULTI (multiple selection)</p>
     */
    public $OptionMode;

    /**
     * @var array <p>Reference marker information list</p>
     */
    public $QuoteInfoList;

    /**
     * @var array <p>List of reference superscript information</p>
     */
    public $QuoteInfos;

    /**
     * @var array <p>Reference source list</p>
     */
    public $ReferenceList;

    /**
     * @var array <p>Reference list</p>
     */
    public $References;

    /**
     * @var string <p>Associated record ID</p>
     */
    public $RelatedRecordId;

    /**
     * @var array <p>Intelligent Agent Task List</p>
     */
    public $TaskList;

    /**
     * @var array <p>Intelligent Agent Task List</p>
     */
    public $Tasks;

    /**
     * @var string <p>Workflow input parameter</p>
     */
    public $WorkflowInput;

    /**
     * @var ConversationMcpApp <p>MCP-APP call information</p>
     */
    public $McpApp;

    /**
     * @param string $Text <p>Text content</p>
     * @param string $Type <p>Content type. text: text, image: image, file: file, custom_variables: custom input parameter information, widget_action: widget action information</p>
     * @param array $CustomParamList <p>Custom parameter data</p>
     * @param array $CustomParams <p>Custom parameter data</p>
     * @param string $CustomVariablesData <p>Custom variable data</p>
     * @param string $EnterpriseCharts <p>Business form</p>
     * @param array $OptionCardList <p>Tab List</p>
     * @param array $OptionCards <p>Tab list.</p>
     * @param integer $OptionMode <p>Tab mode. Enumeration values: 0-OPTION_MODE_SINGLE (single selection), 1-OPTION_MODE_MULTI (multiple selection)</p>
     * @param array $QuoteInfoList <p>Reference marker information list</p>
     * @param array $QuoteInfos <p>List of reference superscript information</p>
     * @param array $ReferenceList <p>Reference source list</p>
     * @param array $References <p>Reference list</p>
     * @param string $RelatedRecordId <p>Associated record ID</p>
     * @param array $TaskList <p>Intelligent Agent Task List</p>
     * @param array $Tasks <p>Intelligent Agent Task List</p>
     * @param string $WorkflowInput <p>Workflow input parameter</p>
     * @param ConversationMcpApp $McpApp <p>MCP-APP call information</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CustomParamList",$param) and $param["CustomParamList"] !== null) {
            $this->CustomParamList = $param["CustomParamList"];
        }

        if (array_key_exists("CustomParams",$param) and $param["CustomParams"] !== null) {
            $this->CustomParams = $param["CustomParams"];
        }

        if (array_key_exists("CustomVariablesData",$param) and $param["CustomVariablesData"] !== null) {
            $this->CustomVariablesData = $param["CustomVariablesData"];
        }

        if (array_key_exists("EnterpriseCharts",$param) and $param["EnterpriseCharts"] !== null) {
            $this->EnterpriseCharts = $param["EnterpriseCharts"];
        }

        if (array_key_exists("OptionCardList",$param) and $param["OptionCardList"] !== null) {
            $this->OptionCardList = $param["OptionCardList"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }

        if (array_key_exists("QuoteInfoList",$param) and $param["QuoteInfoList"] !== null) {
            $this->QuoteInfoList = [];
            foreach ($param["QuoteInfoList"] as $key => $value){
                $obj = new ConversationQuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfoList, $obj);
            }
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new ConversationQuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("ReferenceList",$param) and $param["ReferenceList"] !== null) {
            $this->ReferenceList = [];
            foreach ($param["ReferenceList"] as $key => $value){
                $obj = new ConversationReference();
                $obj->deserialize($value);
                array_push($this->ReferenceList, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ConversationReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new ConversationAgentTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ConversationAgentTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("WorkflowInput",$param) and $param["WorkflowInput"] !== null) {
            $this->WorkflowInput = $param["WorkflowInput"];
        }

        if (array_key_exists("McpApp",$param) and $param["McpApp"] !== null) {
            $this->McpApp = new ConversationMcpApp();
            $this->McpApp->deserialize($param["McpApp"]);
        }
    }
}
