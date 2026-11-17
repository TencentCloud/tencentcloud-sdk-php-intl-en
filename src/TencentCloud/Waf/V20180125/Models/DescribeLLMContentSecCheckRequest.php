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
 * DescribeLLMContentSecCheck request structure.
 *
 * @method string getServiceId() Obtain <p>Service id. Pass the service id corresponding to the protection policy to use. The model will detect all rules under this service id.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Service id. Pass the service id corresponding to the protection policy to use. The model will detect all rules under this service id.</p>
 * @method integer getType() Obtain <p>Traffic type, indicating inbound or outbound traffic. 1: inbound, 2: outbound. Both inbound and outbound are required.</p>
 * @method void setType(integer $Type) Set <p>Traffic type, indicating inbound or outbound traffic. 1: inbound, 2: outbound. Both inbound and outbound are required.</p>
 * @method string getInstanceId() Obtain <p>Instance id. Required.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id. Required.</p>
 * @method string getContent() Obtain <p>Content to review</p>
 * @method void setContent(string $Content) Set <p>Content to review</p>
 * @method string getChatId() Obtain <p>id of the question-answer conversation</p>
 * @method void setChatId(string $ChatId) Set <p>id of the question-answer conversation</p>
 * @method string getUserId() Obtain <p>id that identifies the user, used for rate limiting. If not specified, rate limiting will not take effect.</p>
 * @method void setUserId(string $UserId) Set <p>id that identifies the user, used for rate limiting. If not specified, rate limiting will not take effect.</p>
 * @method integer getTokenUsage() Obtain <p>token usage. If not specified, the default token calculation method will be used to calculate model consumption, because this value is added in the outbound direction, that is, Type=2.</p>
 * @method void setTokenUsage(integer $TokenUsage) Set <p>token usage. If not specified, the default token calculation method will be used to calculate model consumption, because this value is added in the outbound direction, that is, Type=2.</p>
 * @method string getImageEncode() Obtain <p>Base64-encoded image data. The maximum body size is 10 MB.</p>
 * @method void setImageEncode(string $ImageEncode) Set <p>Base64-encoded image data. The maximum body size is 10 MB.</p>
 * @method string getToolName() Obtain <p>Tool name in the tool_call scenario</p>
 * @method void setToolName(string $ToolName) Set <p>Tool name in the tool_call scenario</p>
 * @method string getToolArgs() Obtain <p>Tool parameters in the tool_call scenario</p>
 * @method void setToolArgs(string $ToolArgs) Set <p>Tool parameters in the tool_call scenario</p>
 * @method string getSessionId() Obtain <p>id of the multi-turn conversation</p>
 * @method void setSessionId(string $SessionId) Set <p>id of the multi-turn conversation</p>
 * @method IntentContent getIntentContent() Obtain <p>Request content for intent detection</p>
 * @method void setIntentContent(IntentContent $IntentContent) Set <p>Request content for intent detection</p>
 * @method string getClientIP() Obtain <p>Client source IP address, used for allowlist matching and other scenarios. Supports IPv4 and IPv6 formats.</p>
 * @method void setClientIP(string $ClientIP) Set <p>Client source IP address, used for allowlist matching and other scenarios. Supports IPv4 and IPv6 formats.</p>
 * @method array getHistory() Obtain Multi-turn historical user input, arranged from oldest to newest, used only for prompt injection detection
Input parameter limits: Up to 10 entries. If exceeded, only the latest 10 entries are retained. The combined length of History + Content cannot exceed 6K characters. If exceeded, the earliest History entries are discarded first.
 * @method void setHistory(array $History) Set Multi-turn historical user input, arranged from oldest to newest, used only for prompt injection detection
Input parameter limits: Up to 10 entries. If exceeded, only the latest 10 entries are retained. The combined length of History + Content cannot exceed 6K characters. If exceeded, the earliest History entries are discarded first.
 * @method array getUrls() Obtain List of URLs to be detected, used for malicious URL detection
Input parameter limits: Up to 50 URLs. A single URL cannot exceed 2048 characters. If exceeded, it will be truncated.
 * @method void setUrls(array $Urls) Set List of URLs to be detected, used for malicious URL detection
Input parameter limits: Up to 50 URLs. A single URL cannot exceed 2048 characters. If exceeded, it will be truncated.
 */
class DescribeLLMContentSecCheckRequest extends AbstractModel
{
    /**
     * @var string <p>Service id. Pass the service id corresponding to the protection policy to use. The model will detect all rules under this service id.</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>Traffic type, indicating inbound or outbound traffic. 1: inbound, 2: outbound. Both inbound and outbound are required.</p>
     */
    public $Type;

    /**
     * @var string <p>Instance id. Required.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Content to review</p>
     */
    public $Content;

    /**
     * @var string <p>id of the question-answer conversation</p>
     */
    public $ChatId;

    /**
     * @var string <p>id that identifies the user, used for rate limiting. If not specified, rate limiting will not take effect.</p>
     */
    public $UserId;

    /**
     * @var integer <p>token usage. If not specified, the default token calculation method will be used to calculate model consumption, because this value is added in the outbound direction, that is, Type=2.</p>
     */
    public $TokenUsage;

    /**
     * @var string <p>Base64-encoded image data. The maximum body size is 10 MB.</p>
     */
    public $ImageEncode;

    /**
     * @var string <p>Tool name in the tool_call scenario</p>
     */
    public $ToolName;

    /**
     * @var string <p>Tool parameters in the tool_call scenario</p>
     */
    public $ToolArgs;

    /**
     * @var string <p>id of the multi-turn conversation</p>
     */
    public $SessionId;

    /**
     * @var IntentContent <p>Request content for intent detection</p>
     */
    public $IntentContent;

    /**
     * @var string <p>Client source IP address, used for allowlist matching and other scenarios. Supports IPv4 and IPv6 formats.</p>
     */
    public $ClientIP;

    /**
     * @var array Multi-turn historical user input, arranged from oldest to newest, used only for prompt injection detection
Input parameter limits: Up to 10 entries. If exceeded, only the latest 10 entries are retained. The combined length of History + Content cannot exceed 6K characters. If exceeded, the earliest History entries are discarded first.
     */
    public $History;

    /**
     * @var array List of URLs to be detected, used for malicious URL detection
Input parameter limits: Up to 50 URLs. A single URL cannot exceed 2048 characters. If exceeded, it will be truncated.
     */
    public $Urls;

    /**
     * @param string $ServiceId <p>Service id. Pass the service id corresponding to the protection policy to use. The model will detect all rules under this service id.</p>
     * @param integer $Type <p>Traffic type, indicating inbound or outbound traffic. 1: inbound, 2: outbound. Both inbound and outbound are required.</p>
     * @param string $InstanceId <p>Instance id. Required.</p>
     * @param string $Content <p>Content to review</p>
     * @param string $ChatId <p>id of the question-answer conversation</p>
     * @param string $UserId <p>id that identifies the user, used for rate limiting. If not specified, rate limiting will not take effect.</p>
     * @param integer $TokenUsage <p>token usage. If not specified, the default token calculation method will be used to calculate model consumption, because this value is added in the outbound direction, that is, Type=2.</p>
     * @param string $ImageEncode <p>Base64-encoded image data. The maximum body size is 10 MB.</p>
     * @param string $ToolName <p>Tool name in the tool_call scenario</p>
     * @param string $ToolArgs <p>Tool parameters in the tool_call scenario</p>
     * @param string $SessionId <p>id of the multi-turn conversation</p>
     * @param IntentContent $IntentContent <p>Request content for intent detection</p>
     * @param string $ClientIP <p>Client source IP address, used for allowlist matching and other scenarios. Supports IPv4 and IPv6 formats.</p>
     * @param array $History Multi-turn historical user input, arranged from oldest to newest, used only for prompt injection detection
Input parameter limits: Up to 10 entries. If exceeded, only the latest 10 entries are retained. The combined length of History + Content cannot exceed 6K characters. If exceeded, the earliest History entries are discarded first.
     * @param array $Urls List of URLs to be detected, used for malicious URL detection
Input parameter limits: Up to 50 URLs. A single URL cannot exceed 2048 characters. If exceeded, it will be truncated.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TokenUsage",$param) and $param["TokenUsage"] !== null) {
            $this->TokenUsage = $param["TokenUsage"];
        }

        if (array_key_exists("ImageEncode",$param) and $param["ImageEncode"] !== null) {
            $this->ImageEncode = $param["ImageEncode"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolArgs",$param) and $param["ToolArgs"] !== null) {
            $this->ToolArgs = $param["ToolArgs"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("IntentContent",$param) and $param["IntentContent"] !== null) {
            $this->IntentContent = new IntentContent();
            $this->IntentContent->deserialize($param["IntentContent"]);
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = $param["History"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }
    }
}
