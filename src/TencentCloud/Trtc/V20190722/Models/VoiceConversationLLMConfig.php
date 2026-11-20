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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM parameter configuration for AI conversation.
 *
 * @method string getLLMType() Obtain <p>LLM API type, for example, openai (OpenAI-compatible API).</p>
 * @method void setLLMType(string $LLMType) Set <p>LLM API type, for example, openai (OpenAI-compatible API).</p>
 * @method string getModel() Obtain <p>Model name, for example, gpt-4o-mini</p>
 * @method void setModel(string $Model) Set <p>Model name, for example, gpt-4o-mini</p>
 * @method string getAPIUrl() Obtain <p>OpenAI-compatible endpoint.</p>
 * @method void setAPIUrl(string $APIUrl) Set <p>OpenAI-compatible endpoint.</p>
 * @method string getAPIKey() Obtain Provider API key.
 * @method void setAPIKey(string $APIKey) Set Provider API key.
 * @method string getSystemPrompt() Obtain <p>System prompt.</p>
 * @method void setSystemPrompt(string $SystemPrompt) Set <p>System prompt.</p>
 * @method string getFailureMessage() Obtain <p>Text used to generate TTS audio when the LLM call fails.</p>
 * @method void setFailureMessage(string $FailureMessage) Set <p>Text used to generate TTS audio when the LLM call fails.</p>
 * @method integer getMaxTokens() Obtain <p>Maximum number of tokens in a single response. 0 means no limit. Default: 0. If the model outputs more tokens than MaxTokens, the response is truncated.</p>
 * @method void setMaxTokens(integer $MaxTokens) Set <p>Maximum number of tokens in a single response. 0 means no limit. Default: 0. If the model outputs more tokens than MaxTokens, the response is truncated.</p>
 * @method boolean getThinkingMode() Obtain <p>Whether to enable thinking mode. Availability depends on the model provider. Enabling thinking mode consumes output tokens.</p>
 * @method void setThinkingMode(boolean $ThinkingMode) Set <p>Whether to enable thinking mode. Availability depends on the model provider. Enabling thinking mode consumes output tokens.</p>
 * @method integer getMaxHistory() Obtain <p>Number of conversation turns cached for the LLM. Valid range: 0 to 50. Recommended range: 10 to 30. The total number of tokens in this context must not exceed the LLM context limit.</p>
 * @method void setMaxHistory(integer $MaxHistory) Set <p>Number of conversation turns cached for the LLM. Valid range: 0 to 50. Recommended range: 10 to 30. The total number of tokens in this context must not exceed the LLM context limit.</p>
 * @method integer getMaxToolRound() Obtain <p>Maximum rounds of MCP tool calls, ranging from 0 to 50. Default: 10.</p>
 * @method void setMaxToolRound(integer $MaxToolRound) Set <p>Maximum rounds of MCP tool calls, ranging from 0 to 50. Default: 10.</p>
 * @method integer getTimeout() Obtain Timeout for a single request, in milliseconds. Valid range: 1000 to 60000. Default: 10000.
 * @method void setTimeout(integer $Timeout) Set Timeout for a single request, in milliseconds. Valid range: 1000 to 60000. Default: 10000.
 * @method float getTemperature() Obtain <p>Sampling temperature, ranging from 0.0 to 2.0. Default: 1.0.</p>
 * @method void setTemperature(float $Temperature) Set <p>Sampling temperature, ranging from 0.0 to 2.0. Default: 1.0.</p>
 * @method float getTopP() Obtain <p>Top p nucleus sampling. Valid range: 0.0 to 1.0. Default: 1.0.</p>
 * @method void setTopP(float $TopP) Set <p>Top p nucleus sampling. Valid range: 0.0 to 1.0. Default: 1.0.</p>
 * @method VoiceConversationMcpServer getMcpServer() Obtain <p>MCP Server parameters.</p>
 * @method void setMcpServer(VoiceConversationMcpServer $McpServer) Set <p>MCP Server parameters.</p>
 * @method array getCustomHeaders() Obtain <p>Custom HTTP request headers.</p>
 * @method void setCustomHeaders(array $CustomHeaders) Set <p>Custom HTTP request headers.</p>
 * @method array getCustomFields() Obtain Provider-specific parameters, such as DeepSeek's reasoning_effort and Hunyuan's enable_enhancement.
 * @method void setCustomFields(array $CustomFields) Set Provider-specific parameters, such as DeepSeek's reasoning_effort and Hunyuan's enable_enhancement.
 * @method array getHistoryMessages() Obtain <p>Initial conversation history. Each item uses this format: `{"Role": "user"/"assistant"/"system", "Content": "xxx"}`.</p>
 * @method void setHistoryMessages(array $HistoryMessages) Set <p>Initial conversation history. Each item uses this format: `{"Role": "user"/"assistant"/"system", "Content": "xxx"}`.</p>
 */
class VoiceConversationLLMConfig extends AbstractModel
{
    /**
     * @var string <p>LLM API type, for example, openai (OpenAI-compatible API).</p>
     */
    public $LLMType;

    /**
     * @var string <p>Model name, for example, gpt-4o-mini</p>
     */
    public $Model;

    /**
     * @var string <p>OpenAI-compatible endpoint.</p>
     */
    public $APIUrl;

    /**
     * @var string Provider API key.
     */
    public $APIKey;

    /**
     * @var string <p>System prompt.</p>
     */
    public $SystemPrompt;

    /**
     * @var string <p>Text used to generate TTS audio when the LLM call fails.</p>
     */
    public $FailureMessage;

    /**
     * @var integer <p>Maximum number of tokens in a single response. 0 means no limit. Default: 0. If the model outputs more tokens than MaxTokens, the response is truncated.</p>
     */
    public $MaxTokens;

    /**
     * @var boolean <p>Whether to enable thinking mode. Availability depends on the model provider. Enabling thinking mode consumes output tokens.</p>
     */
    public $ThinkingMode;

    /**
     * @var integer <p>Number of conversation turns cached for the LLM. Valid range: 0 to 50. Recommended range: 10 to 30. The total number of tokens in this context must not exceed the LLM context limit.</p>
     */
    public $MaxHistory;

    /**
     * @var integer <p>Maximum rounds of MCP tool calls, ranging from 0 to 50. Default: 10.</p>
     */
    public $MaxToolRound;

    /**
     * @var integer Timeout for a single request, in milliseconds. Valid range: 1000 to 60000. Default: 10000.
     */
    public $Timeout;

    /**
     * @var float <p>Sampling temperature, ranging from 0.0 to 2.0. Default: 1.0.</p>
     */
    public $Temperature;

    /**
     * @var float <p>Top p nucleus sampling. Valid range: 0.0 to 1.0. Default: 1.0.</p>
     */
    public $TopP;

    /**
     * @var VoiceConversationMcpServer <p>MCP Server parameters.</p>
     */
    public $McpServer;

    /**
     * @var array <p>Custom HTTP request headers.</p>
     */
    public $CustomHeaders;

    /**
     * @var array Provider-specific parameters, such as DeepSeek's reasoning_effort and Hunyuan's enable_enhancement.
     */
    public $CustomFields;

    /**
     * @var array <p>Initial conversation history. Each item uses this format: `{"Role": "user"/"assistant"/"system", "Content": "xxx"}`.</p>
     */
    public $HistoryMessages;

    /**
     * @param string $LLMType <p>LLM API type, for example, openai (OpenAI-compatible API).</p>
     * @param string $Model <p>Model name, for example, gpt-4o-mini</p>
     * @param string $APIUrl <p>OpenAI-compatible endpoint.</p>
     * @param string $APIKey Provider API key.
     * @param string $SystemPrompt <p>System prompt.</p>
     * @param string $FailureMessage <p>Text used to generate TTS audio when the LLM call fails.</p>
     * @param integer $MaxTokens <p>Maximum number of tokens in a single response. 0 means no limit. Default: 0. If the model outputs more tokens than MaxTokens, the response is truncated.</p>
     * @param boolean $ThinkingMode <p>Whether to enable thinking mode. Availability depends on the model provider. Enabling thinking mode consumes output tokens.</p>
     * @param integer $MaxHistory <p>Number of conversation turns cached for the LLM. Valid range: 0 to 50. Recommended range: 10 to 30. The total number of tokens in this context must not exceed the LLM context limit.</p>
     * @param integer $MaxToolRound <p>Maximum rounds of MCP tool calls, ranging from 0 to 50. Default: 10.</p>
     * @param integer $Timeout Timeout for a single request, in milliseconds. Valid range: 1000 to 60000. Default: 10000.
     * @param float $Temperature <p>Sampling temperature, ranging from 0.0 to 2.0. Default: 1.0.</p>
     * @param float $TopP <p>Top p nucleus sampling. Valid range: 0.0 to 1.0. Default: 1.0.</p>
     * @param VoiceConversationMcpServer $McpServer <p>MCP Server parameters.</p>
     * @param array $CustomHeaders <p>Custom HTTP request headers.</p>
     * @param array $CustomFields Provider-specific parameters, such as DeepSeek's reasoning_effort and Hunyuan's enable_enhancement.
     * @param array $HistoryMessages <p>Initial conversation history. Each item uses this format: `{"Role": "user"/"assistant"/"system", "Content": "xxx"}`.</p>
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
        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("APIUrl",$param) and $param["APIUrl"] !== null) {
            $this->APIUrl = $param["APIUrl"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("FailureMessage",$param) and $param["FailureMessage"] !== null) {
            $this->FailureMessage = $param["FailureMessage"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("ThinkingMode",$param) and $param["ThinkingMode"] !== null) {
            $this->ThinkingMode = $param["ThinkingMode"];
        }

        if (array_key_exists("MaxHistory",$param) and $param["MaxHistory"] !== null) {
            $this->MaxHistory = $param["MaxHistory"];
        }

        if (array_key_exists("MaxToolRound",$param) and $param["MaxToolRound"] !== null) {
            $this->MaxToolRound = $param["MaxToolRound"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("McpServer",$param) and $param["McpServer"] !== null) {
            $this->McpServer = new VoiceConversationMcpServer();
            $this->McpServer->deserialize($param["McpServer"]);
        }

        if (array_key_exists("CustomHeaders",$param) and $param["CustomHeaders"] !== null) {
            $this->CustomHeaders = [];
            foreach ($param["CustomHeaders"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->CustomHeaders, $obj);
            }
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("HistoryMessages",$param) and $param["HistoryMessages"] !== null) {
            $this->HistoryMessages = [];
            foreach ($param["HistoryMessages"] as $key => $value){
                $obj = new VoiceConversationHistoryMessage();
                $obj->deserialize($value);
                array_push($this->HistoryMessages, $obj);
            }
        }
    }
}
