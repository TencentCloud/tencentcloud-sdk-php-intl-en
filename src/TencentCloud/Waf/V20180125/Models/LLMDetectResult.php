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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Comprehensive result of large model security detection
 *
 * @method array getSensitiveResult() Obtain <p>Output only: Sensitive information</p>
 * @method void setSensitiveResult(array $SensitiveResult) Set <p>Output only: Sensitive information</p>
 * @method array getKeyWordsResult() Obtain <p>Both input and output: Keyword library hit information</p>
 * @method void setKeyWordsResult(array $KeyWordsResult) Set <p>Both input and output: Keyword library hit information</p>
 * @method array getDataCategoryResult() Obtain <p>Both input and output: Data classification and grading result</p>
 * @method void setDataCategoryResult(array $DataCategoryResult) Set <p>Both input and output: Data classification and grading result</p>
 * @method PromptDetectResult getPromptInjectionResult() Obtain <p>Input only: prompt injection detection result</p>
 * @method void setPromptInjectionResult(PromptDetectResult $PromptInjectionResult) Set <p>Input only: prompt injection detection result</p>
 * @method string getRuleId() Obtain <p>ID of the hit rule</p>
 * @method void setRuleId(string $RuleId) Set <p>ID of the hit rule</p>
 * @method string getRuleName() Obtain <p>Name of the hit rule</p>
 * @method void setRuleName(string $RuleName) Set <p>Name of the hit rule</p>
 * @method string getAction() Obtain <p>Rule action</p>
 * @method void setAction(string $Action) Set <p>Rule action</p>
 * @method string getPayload() Obtain <p>Attack payload</p>
 * @method void setPayload(string $Payload) Set <p>Attack payload</p>
 * @method string getDesensitization() Obtain <p>Masked content. Returned when Action is mask. If no masked evidence is generated, the original text is returned.</p>
 * @method void setDesensitization(string $Desensitization) Set <p>Masked content. Returned when Action is mask. If no masked evidence is generated, the original text is returned.</p>
 * @method array getImageResult() Obtain <p>Image detection result</p>
 * @method void setImageResult(array $ImageResult) Set <p>Image detection result</p>
 * @method string getMsgID() Obtain <p>id of the message to be answered on behalf. This message id is used as an input parameter of the GenerateLLMSecAnswer API.</p>
 * @method void setMsgID(string $MsgID) Set <p>id of the message to be answered on behalf. This message id is used as an input parameter of the GenerateLLMSecAnswer API.</p>
 * @method ToolCallResult getToolCallResult() Obtain <p>Tool call detection result</p>
 * @method void setToolCallResult(ToolCallResult $ToolCallResult) Set <p>Tool call detection result</p>
 * @method IntentDetectResult getIntentDetectResult() Obtain <p>Intent detection result</p>
 * @method void setIntentDetectResult(IntentDetectResult $IntentDetectResult) Set <p>Intent detection result</p>
 * @method UrlDetectResult getUrlDetectResult() Obtain <p>Malicious URL detection result</p>
 * @method void setUrlDetectResult(UrlDetectResult $UrlDetectResult) Set <p>Malicious URL detection result</p>
 */
class LLMDetectResult extends AbstractModel
{
    /**
     * @var array <p>Output only: Sensitive information</p>
     */
    public $SensitiveResult;

    /**
     * @var array <p>Both input and output: Keyword library hit information</p>
     */
    public $KeyWordsResult;

    /**
     * @var array <p>Both input and output: Data classification and grading result</p>
     */
    public $DataCategoryResult;

    /**
     * @var PromptDetectResult <p>Input only: prompt injection detection result</p>
     */
    public $PromptInjectionResult;

    /**
     * @var string <p>ID of the hit rule</p>
     */
    public $RuleId;

    /**
     * @var string <p>Name of the hit rule</p>
     */
    public $RuleName;

    /**
     * @var string <p>Rule action</p>
     */
    public $Action;

    /**
     * @var string <p>Attack payload</p>
     */
    public $Payload;

    /**
     * @var string <p>Masked content. Returned when Action is mask. If no masked evidence is generated, the original text is returned.</p>
     */
    public $Desensitization;

    /**
     * @var array <p>Image detection result</p>
     */
    public $ImageResult;

    /**
     * @var string <p>id of the message to be answered on behalf. This message id is used as an input parameter of the GenerateLLMSecAnswer API.</p>
     */
    public $MsgID;

    /**
     * @var ToolCallResult <p>Tool call detection result</p>
     */
    public $ToolCallResult;

    /**
     * @var IntentDetectResult <p>Intent detection result</p>
     */
    public $IntentDetectResult;

    /**
     * @var UrlDetectResult <p>Malicious URL detection result</p>
     */
    public $UrlDetectResult;

    /**
     * @param array $SensitiveResult <p>Output only: Sensitive information</p>
     * @param array $KeyWordsResult <p>Both input and output: Keyword library hit information</p>
     * @param array $DataCategoryResult <p>Both input and output: Data classification and grading result</p>
     * @param PromptDetectResult $PromptInjectionResult <p>Input only: prompt injection detection result</p>
     * @param string $RuleId <p>ID of the hit rule</p>
     * @param string $RuleName <p>Name of the hit rule</p>
     * @param string $Action <p>Rule action</p>
     * @param string $Payload <p>Attack payload</p>
     * @param string $Desensitization <p>Masked content. Returned when Action is mask. If no masked evidence is generated, the original text is returned.</p>
     * @param array $ImageResult <p>Image detection result</p>
     * @param string $MsgID <p>id of the message to be answered on behalf. This message id is used as an input parameter of the GenerateLLMSecAnswer API.</p>
     * @param ToolCallResult $ToolCallResult <p>Tool call detection result</p>
     * @param IntentDetectResult $IntentDetectResult <p>Intent detection result</p>
     * @param UrlDetectResult $UrlDetectResult <p>Malicious URL detection result</p>
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
        if (array_key_exists("SensitiveResult",$param) and $param["SensitiveResult"] !== null) {
            $this->SensitiveResult = [];
            foreach ($param["SensitiveResult"] as $key => $value){
                $obj = new LLMSensitiveValueLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveResult, $obj);
            }
        }

        if (array_key_exists("KeyWordsResult",$param) and $param["KeyWordsResult"] !== null) {
            $this->KeyWordsResult = [];
            foreach ($param["KeyWordsResult"] as $key => $value){
                $obj = new KeyWordInfo();
                $obj->deserialize($value);
                array_push($this->KeyWordsResult, $obj);
            }
        }

        if (array_key_exists("DataCategoryResult",$param) and $param["DataCategoryResult"] !== null) {
            $this->DataCategoryResult = $param["DataCategoryResult"];
        }

        if (array_key_exists("PromptInjectionResult",$param) and $param["PromptInjectionResult"] !== null) {
            $this->PromptInjectionResult = new PromptDetectResult();
            $this->PromptInjectionResult->deserialize($param["PromptInjectionResult"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Desensitization",$param) and $param["Desensitization"] !== null) {
            $this->Desensitization = $param["Desensitization"];
        }

        if (array_key_exists("ImageResult",$param) and $param["ImageResult"] !== null) {
            $this->ImageResult = [];
            foreach ($param["ImageResult"] as $key => $value){
                $obj = new ImageResult();
                $obj->deserialize($value);
                array_push($this->ImageResult, $obj);
            }
        }

        if (array_key_exists("MsgID",$param) and $param["MsgID"] !== null) {
            $this->MsgID = $param["MsgID"];
        }

        if (array_key_exists("ToolCallResult",$param) and $param["ToolCallResult"] !== null) {
            $this->ToolCallResult = new ToolCallResult();
            $this->ToolCallResult->deserialize($param["ToolCallResult"]);
        }

        if (array_key_exists("IntentDetectResult",$param) and $param["IntentDetectResult"] !== null) {
            $this->IntentDetectResult = new IntentDetectResult();
            $this->IntentDetectResult->deserialize($param["IntentDetectResult"]);
        }

        if (array_key_exists("UrlDetectResult",$param) and $param["UrlDetectResult"] !== null) {
            $this->UrlDetectResult = new UrlDetectResult();
            $this->UrlDetectResult->deserialize($param["UrlDetectResult"]);
        }
    }
}
