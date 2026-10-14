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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dialogue record content details
 *
 * @method string getType() Obtain <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tabs<br>custom_params: custom business parameters<br>sandbox: cloud desktop<br>custom_variables: custom input parameters<br>web_search: web search content<br>file_collection: file collection information<br>widget: widget info<br>widget_action: client-side widget action information</p>
 * @method void setType(string $Type) Set <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tabs<br>custom_params: custom business parameters<br>sandbox: cloud desktop<br>custom_variables: custom input parameters<br>web_search: web search content<br>file_collection: file collection information<br>widget: widget info<br>widget_action: client-side widget action information</p>
 * @method string getText() Obtain <p>Text content</p>
 * @method void setText(string $Text) Set <p>Text content</p>
 * @method array getQuoteInfos() Obtain <p>Reference info.</p>
 * @method void setQuoteInfos(array $QuoteInfos) Set <p>Reference info.</p>
 * @method array getReferences() Obtain <p>Reference information</p>
 * @method void setReferences(array $References) Set <p>Reference information</p>
 * @method ImageInfoContent getImage() Obtain <p>Image information.</p>
 * @method void setImage(ImageInfoContent $Image) Set <p>Image information.</p>
 * @method FileInfoContent getFile() Obtain <p>File information</p>
 * @method void setFile(FileInfoContent $File) Set <p>File information</p>
 * @method array getOptionCards() Obtain <p>Tab info.</p>
 * @method void setOptionCards(array $OptionCards) Set <p>Tab info.</p>
 * @method array getCustomParams() Obtain <p>User-customized business parameter information.</p>
 * @method void setCustomParams(array $CustomParams) Set <p>User-customized business parameter information.</p>
 * @method array getCustomVariables() Obtain <p>Custom Variable</p>
 * @method void setCustomVariables(array $CustomVariables) Set <p>Custom Variable</p>
 * @method SandboxContent getSandbox() Obtain <p>Sandbox information</p>
 * @method void setSandbox(SandboxContent $Sandbox) Set <p>Sandbox information</p>
 * @method WebSearchContent getWebSearch() Obtain <p>Web page search content</p>
 * @method void setWebSearch(WebSearchContent $WebSearch) Set <p>Web page search content</p>
 * @method FileCollection getFileCollection() Obtain <p>File information collection</p>
 * @method void setFileCollection(FileCollection $FileCollection) Set <p>File information collection</p>
 * @method Widget getWidget() Obtain <p>Widget information.</p>
 * @method void setWidget(Widget $Widget) Set <p>Widget information.</p>
 * @method WidgetAction getWidgetAction() Obtain <p>Widget action information</p>
 * @method void setWidgetAction(WidgetAction $WidgetAction) Set <p>Widget action information</p>
 * @method array getTasks() Obtain <p>Task List</p>
 * @method void setTasks(array $Tasks) Set <p>Task List</p>
 * @method Questionnaire getQuestionnaire() Obtain <p>Questionnaire information</p>
 * @method void setQuestionnaire(Questionnaire $Questionnaire) Set <p>Questionnaire information</p>
 * @method integer getOptionMode() Obtain <p>Tab mode</p>
 * @method void setOptionMode(integer $OptionMode) Set <p>Tab mode</p>
 * @method ConversationMcpApp getMcpApp() Obtain <p>MCP APP information returned</p>
 * @method void setMcpApp(ConversationMcpApp $McpApp) Set <p>MCP APP information returned</p>
 * @method ConversationResourceArtifact getResource() Obtain <p>Application or workflow resource product</p>
 * @method void setResource(ConversationResourceArtifact $Resource) Set <p>Application or workflow resource product</p>
 */
class Content extends AbstractModel
{
    /**
     * @var string <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tabs<br>custom_params: custom business parameters<br>sandbox: cloud desktop<br>custom_variables: custom input parameters<br>web_search: web search content<br>file_collection: file collection information<br>widget: widget info<br>widget_action: client-side widget action information</p>
     */
    public $Type;

    /**
     * @var string <p>Text content</p>
     */
    public $Text;

    /**
     * @var array <p>Reference info.</p>
     */
    public $QuoteInfos;

    /**
     * @var array <p>Reference information</p>
     */
    public $References;

    /**
     * @var ImageInfoContent <p>Image information.</p>
     */
    public $Image;

    /**
     * @var FileInfoContent <p>File information</p>
     */
    public $File;

    /**
     * @var array <p>Tab info.</p>
     */
    public $OptionCards;

    /**
     * @var array <p>User-customized business parameter information.</p>
     */
    public $CustomParams;

    /**
     * @var array <p>Custom Variable</p>
     */
    public $CustomVariables;

    /**
     * @var SandboxContent <p>Sandbox information</p>
     */
    public $Sandbox;

    /**
     * @var WebSearchContent <p>Web page search content</p>
     */
    public $WebSearch;

    /**
     * @var FileCollection <p>File information collection</p>
     */
    public $FileCollection;

    /**
     * @var Widget <p>Widget information.</p>
     */
    public $Widget;

    /**
     * @var WidgetAction <p>Widget action information</p>
     */
    public $WidgetAction;

    /**
     * @var array <p>Task List</p>
     */
    public $Tasks;

    /**
     * @var Questionnaire <p>Questionnaire information</p>
     */
    public $Questionnaire;

    /**
     * @var integer <p>Tab mode</p>
     */
    public $OptionMode;

    /**
     * @var ConversationMcpApp <p>MCP APP information returned</p>
     */
    public $McpApp;

    /**
     * @var ConversationResourceArtifact <p>Application or workflow resource product</p>
     */
    public $Resource;

    /**
     * @param string $Type <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tabs<br>custom_params: custom business parameters<br>sandbox: cloud desktop<br>custom_variables: custom input parameters<br>web_search: web search content<br>file_collection: file collection information<br>widget: widget info<br>widget_action: client-side widget action information</p>
     * @param string $Text <p>Text content</p>
     * @param array $QuoteInfos <p>Reference info.</p>
     * @param array $References <p>Reference information</p>
     * @param ImageInfoContent $Image <p>Image information.</p>
     * @param FileInfoContent $File <p>File information</p>
     * @param array $OptionCards <p>Tab info.</p>
     * @param array $CustomParams <p>User-customized business parameter information.</p>
     * @param array $CustomVariables <p>Custom Variable</p>
     * @param SandboxContent $Sandbox <p>Sandbox information</p>
     * @param WebSearchContent $WebSearch <p>Web page search content</p>
     * @param FileCollection $FileCollection <p>File information collection</p>
     * @param Widget $Widget <p>Widget information.</p>
     * @param WidgetAction $WidgetAction <p>Widget action information</p>
     * @param array $Tasks <p>Task List</p>
     * @param Questionnaire $Questionnaire <p>Questionnaire information</p>
     * @param integer $OptionMode <p>Tab mode</p>
     * @param ConversationMcpApp $McpApp <p>MCP APP information returned</p>
     * @param ConversationResourceArtifact $Resource <p>Application or workflow resource product</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new QuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ContentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageInfoContent();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new FileInfoContent();
            $this->File->deserialize($param["File"]);
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("CustomParams",$param) and $param["CustomParams"] !== null) {
            $this->CustomParams = $param["CustomParams"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = $param["CustomVariables"];
        }

        if (array_key_exists("Sandbox",$param) and $param["Sandbox"] !== null) {
            $this->Sandbox = new SandboxContent();
            $this->Sandbox->deserialize($param["Sandbox"]);
        }

        if (array_key_exists("WebSearch",$param) and $param["WebSearch"] !== null) {
            $this->WebSearch = new WebSearchContent();
            $this->WebSearch->deserialize($param["WebSearch"]);
        }

        if (array_key_exists("FileCollection",$param) and $param["FileCollection"] !== null) {
            $this->FileCollection = new FileCollection();
            $this->FileCollection->deserialize($param["FileCollection"]);
        }

        if (array_key_exists("Widget",$param) and $param["Widget"] !== null) {
            $this->Widget = new Widget();
            $this->Widget->deserialize($param["Widget"]);
        }

        if (array_key_exists("WidgetAction",$param) and $param["WidgetAction"] !== null) {
            $this->WidgetAction = new WidgetAction();
            $this->WidgetAction->deserialize($param["WidgetAction"]);
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new AgentTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Questionnaire",$param) and $param["Questionnaire"] !== null) {
            $this->Questionnaire = new Questionnaire();
            $this->Questionnaire->deserialize($param["Questionnaire"]);
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }

        if (array_key_exists("McpApp",$param) and $param["McpApp"] !== null) {
            $this->McpApp = new ConversationMcpApp();
            $this->McpApp->deserialize($param["McpApp"]);
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ConversationResourceArtifact();
            $this->Resource->deserialize($param["Resource"]);
        }
    }
}
