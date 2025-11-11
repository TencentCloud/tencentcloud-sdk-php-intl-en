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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlAIConversation request structure.
 *
 * @method string getSessionId() Obtain Specifies the session ID.
 * @method void setSessionId(string $SessionId) Set Specifies the session ID.
 * @method integer getSdkAppId() Obtain App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method string getCommand() Obtain Control command. currently supported commands are as follows:.

-ServerPushText. specifies the text sent by the server to the AI robot for broadcast.
-InvokeLLM. specifies the server sends text to the large model to trigger a dialogue.
 * @method void setCommand(string $Command) Set Control command. currently supported commands are as follows:.

-ServerPushText. specifies the text sent by the server to the AI robot for broadcast.
-InvokeLLM. specifies the server sends text to the large model to trigger a dialogue.
 * @method ServerPushText getServerPushText() Obtain Specifies the server-sent broadcast text Command. required when Command is ServerPushText.
 * @method void setServerPushText(ServerPushText $ServerPushText) Set Specifies the server-sent broadcast text Command. required when Command is ServerPushText.
 * @method InvokeLLM getInvokeLLM() Obtain The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content to the large model and adds X-Invoke-LLM="1" to the header.
 * @method void setInvokeLLM(InvokeLLM $InvokeLLM) Set The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content to the large model and adds X-Invoke-LLM="1" to the header.
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string Specifies the session ID.
     */
    public $SessionId;

    /**
     * @var integer App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Control command. currently supported commands are as follows:.

-ServerPushText. specifies the text sent by the server to the AI robot for broadcast.
-InvokeLLM. specifies the server sends text to the large model to trigger a dialogue.
     */
    public $Command;

    /**
     * @var ServerPushText Specifies the server-sent broadcast text Command. required when Command is ServerPushText.
     */
    public $ServerPushText;

    /**
     * @var InvokeLLM The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content to the large model and adds X-Invoke-LLM="1" to the header.
     */
    public $InvokeLLM;

    /**
     * @param string $SessionId Specifies the session ID.
     * @param integer $SdkAppId App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     * @param string $Command Control command. currently supported commands are as follows:.

-ServerPushText. specifies the text sent by the server to the AI robot for broadcast.
-InvokeLLM. specifies the server sends text to the large model to trigger a dialogue.
     * @param ServerPushText $ServerPushText Specifies the server-sent broadcast text Command. required when Command is ServerPushText.
     * @param InvokeLLM $InvokeLLM The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content to the large model and adds X-Invoke-LLM="1" to the header.
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServerPushText",$param) and $param["ServerPushText"] !== null) {
            $this->ServerPushText = new ServerPushText();
            $this->ServerPushText->deserialize($param["ServerPushText"]);
        }

        if (array_key_exists("InvokeLLM",$param) and $param["InvokeLLM"] !== null) {
            $this->InvokeLLM = new InvokeLLM();
            $this->InvokeLLM->deserialize($param["InvokeLLM"]);
        }
    }
}
