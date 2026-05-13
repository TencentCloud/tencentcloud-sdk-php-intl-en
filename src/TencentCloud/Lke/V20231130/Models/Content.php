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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method array getQuoteInfos() Obtain 
 * @method void setQuoteInfos(array $QuoteInfos) Set 
 * @method array getReferences() Obtain 
 * @method void setReferences(array $References) Set 
 * @method ImageInfoContent getImage() Obtain 
 * @method void setImage(ImageInfoContent $Image) Set 
 * @method FileInfoContent getFile() Obtain 
 * @method void setFile(FileInfoContent $File) Set 
 * @method array getOptionCards() Obtain 
 * @method void setOptionCards(array $OptionCards) Set 
 * @method array getCustomParams() Obtain 
 * @method void setCustomParams(array $CustomParams) Set 
 * @method array getCustomVariables() Obtain 
 * @method void setCustomVariables(array $CustomVariables) Set 
 * @method SandboxContent getSandbox() Obtain 
 * @method void setSandbox(SandboxContent $Sandbox) Set 
 * @method WebSearchContent getWebSearch() Obtain 
 * @method void setWebSearch(WebSearchContent $WebSearch) Set 
 * @method FileCollection getFileCollection() Obtain 
 * @method void setFileCollection(FileCollection $FileCollection) Set 
 * @method Widget getWidget() Obtain 
 * @method void setWidget(Widget $Widget) Set 
 * @method WidgetAction getWidgetAction() Obtain 
 * @method void setWidgetAction(WidgetAction $WidgetAction) Set 
 * @method array getTasks() Obtain 
 * @method void setTasks(array $Tasks) Set 
 * @method Questionnaire getQuestionnaire() Obtain 
 * @method void setQuestionnaire(Questionnaire $Questionnaire) Set 
 * @method integer getOptionMode() Obtain 
 * @method void setOptionMode(integer $OptionMode) Set 
 */
class Content extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var array 
     */
    public $QuoteInfos;

    /**
     * @var array 
     */
    public $References;

    /**
     * @var ImageInfoContent 
     */
    public $Image;

    /**
     * @var FileInfoContent 
     */
    public $File;

    /**
     * @var array 
     */
    public $OptionCards;

    /**
     * @var array 
     */
    public $CustomParams;

    /**
     * @var array 
     */
    public $CustomVariables;

    /**
     * @var SandboxContent 
     */
    public $Sandbox;

    /**
     * @var WebSearchContent 
     */
    public $WebSearch;

    /**
     * @var FileCollection 
     */
    public $FileCollection;

    /**
     * @var Widget 
     */
    public $Widget;

    /**
     * @var WidgetAction 
     */
    public $WidgetAction;

    /**
     * @var array 
     */
    public $Tasks;

    /**
     * @var Questionnaire 
     */
    public $Questionnaire;

    /**
     * @var integer 
     */
    public $OptionMode;

    /**
     * @param string $Type 
     * @param string $Text 
     * @param array $QuoteInfos 
     * @param array $References 
     * @param ImageInfoContent $Image 
     * @param FileInfoContent $File 
     * @param array $OptionCards 
     * @param array $CustomParams 
     * @param array $CustomVariables 
     * @param SandboxContent $Sandbox 
     * @param WebSearchContent $WebSearch 
     * @param FileCollection $FileCollection 
     * @param Widget $Widget 
     * @param WidgetAction $WidgetAction 
     * @param array $Tasks 
     * @param Questionnaire $Questionnaire 
     * @param integer $OptionMode 
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
    }
}
