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
 * ControlAIConversation request structure.
 *
 * @method string getTaskId() Obtain Task unique identifier.
 * @method void setTaskId(string $TaskId) Set Task unique identifier.
 * @method string getCommand() Obtain Control command. currently supports the following commands: - ServerPushText: server sends text to the AI robot, and the AI robot will broadcast the text. - InvokeLLM: server sends text to the large model to trigger dialogue.
 * @method void setCommand(string $Command) Set Control command. currently supports the following commands: - ServerPushText: server sends text to the AI robot, and the AI robot will broadcast the text. - InvokeLLM: server sends text to the large model to trigger dialogue.
 * @method ServerPushText getServerPushText() Obtain Server-Sent broadcast text Command. required when Command is ServerPushText.
 * @method void setServerPushText(ServerPushText $ServerPushText) Set Server-Sent broadcast text Command. required when Command is ServerPushText.
 * @method InvokeLLM getInvokeLLM() Obtain The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content request to the large model and adds X-Invoke-LLM="1" to the header.
 * @method void setInvokeLLM(InvokeLLM $InvokeLLM) Set The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content request to the large model and adds X-Invoke-LLM="1" to the header.
 * @method TransparentData getTransparentData() Obtain Information passed through to the client
 * @method void setTransparentData(TransparentData $TransparentData) Set Information passed through to the client
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string Task unique identifier.
     */
    public $TaskId;

    /**
     * @var string Control command. currently supports the following commands: - ServerPushText: server sends text to the AI robot, and the AI robot will broadcast the text. - InvokeLLM: server sends text to the large model to trigger dialogue.
     */
    public $Command;

    /**
     * @var ServerPushText Server-Sent broadcast text Command. required when Command is ServerPushText.
     */
    public $ServerPushText;

    /**
     * @var InvokeLLM The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content request to the large model and adds X-Invoke-LLM="1" to the header.
     */
    public $InvokeLLM;

    /**
     * @var TransparentData Information passed through to the client
     */
    public $TransparentData;

    /**
     * @param string $TaskId Task unique identifier.
     * @param string $Command Control command. currently supports the following commands: - ServerPushText: server sends text to the AI robot, and the AI robot will broadcast the text. - InvokeLLM: server sends text to the large model to trigger dialogue.
     * @param ServerPushText $ServerPushText Server-Sent broadcast text Command. required when Command is ServerPushText.
     * @param InvokeLLM $InvokeLLM The server sends a Command to proactively request the large model. when Command is InvokeLLM, it sends the content request to the large model and adds X-Invoke-LLM="1" to the header.
     * @param TransparentData $TransparentData Information passed through to the client
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("TransparentData",$param) and $param["TransparentData"] !== null) {
            $this->TransparentData = new TransparentData();
            $this->TransparentData->deserialize($param["TransparentData"]);
        }
    }
}
