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
 * ControlVoiceConversation request structure.
 *
 * @method integer getSdkAppId() Obtain The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
 * @method void setSdkAppId(integer $SdkAppId) Set The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
 * @method string getTaskId() Obtain Unique ID of the conversation task. Returned when the conversation task starts successfully.
 * @method void setTaskId(string $TaskId) Set Unique ID of the conversation task. Returned when the conversation task starts successfully.
 * @method string getCommand() Obtain Control command.
Valid values:

- `Interrupt`: Force-interrupt the AI bot's current speech.
- `invokellm`: Inject text into the current conversation context to trigger one LLM response. Not supported in `S2S` mode.
- `invoketts`: Inject text into the current TTS so the AI bot broadcasts it. Not supported in `S2S` mode.
 * @method void setCommand(string $Command) Set Control command.
Valid values:

- `Interrupt`: Force-interrupt the AI bot's current speech.
- `invokellm`: Inject text into the current conversation context to trigger one LLM response. Not supported in `S2S` mode.
- `invoketts`: Inject text into the current TTS so the AI bot broadcasts it. Not supported in `S2S` mode.
 * @method VoiceConversationInvokeLLM getInvokeLLM() Obtain Configuration for injecting text into the LLM. Required when `Command` is `invokellm`.
 * @method void setInvokeLLM(VoiceConversationInvokeLLM $InvokeLLM) Set Configuration for injecting text into the LLM. Required when `Command` is `invokellm`.
 * @method VoiceConversationInvokeTTS getInvokeTTS() Obtain Configuration for injecting text into TTS. Required when `Command` is `invoketts`.
 * @method void setInvokeTTS(VoiceConversationInvokeTTS $InvokeTTS) Set Configuration for injecting text into TTS. Required when `Command` is `invoketts`.
 */
class ControlVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
     */
    public $SdkAppId;

    /**
     * @var string Unique ID of the conversation task. Returned when the conversation task starts successfully.
     */
    public $TaskId;

    /**
     * @var string Control command.
Valid values:

- `Interrupt`: Force-interrupt the AI bot's current speech.
- `invokellm`: Inject text into the current conversation context to trigger one LLM response. Not supported in `S2S` mode.
- `invoketts`: Inject text into the current TTS so the AI bot broadcasts it. Not supported in `S2S` mode.
     */
    public $Command;

    /**
     * @var VoiceConversationInvokeLLM Configuration for injecting text into the LLM. Required when `Command` is `invokellm`.
     */
    public $InvokeLLM;

    /**
     * @var VoiceConversationInvokeTTS Configuration for injecting text into TTS. Required when `Command` is `invoketts`.
     */
    public $InvokeTTS;

    /**
     * @param integer $SdkAppId The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
     * @param string $TaskId Unique ID of the conversation task. Returned when the conversation task starts successfully.
     * @param string $Command Control command.
Valid values:

- `Interrupt`: Force-interrupt the AI bot's current speech.
- `invokellm`: Inject text into the current conversation context to trigger one LLM response. Not supported in `S2S` mode.
- `invoketts`: Inject text into the current TTS so the AI bot broadcasts it. Not supported in `S2S` mode.
     * @param VoiceConversationInvokeLLM $InvokeLLM Configuration for injecting text into the LLM. Required when `Command` is `invokellm`.
     * @param VoiceConversationInvokeTTS $InvokeTTS Configuration for injecting text into TTS. Required when `Command` is `invoketts`.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("InvokeLLM",$param) and $param["InvokeLLM"] !== null) {
            $this->InvokeLLM = new VoiceConversationInvokeLLM();
            $this->InvokeLLM->deserialize($param["InvokeLLM"]);
        }

        if (array_key_exists("InvokeTTS",$param) and $param["InvokeTTS"] !== null) {
            $this->InvokeTTS = new VoiceConversationInvokeTTS();
            $this->InvokeTTS->deserialize($param["InvokeTTS"]);
        }
    }
}
