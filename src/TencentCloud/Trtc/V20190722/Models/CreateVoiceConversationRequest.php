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
 * CreateVoiceConversation request structure.
 *
 * @method integer getSdkAppId() Obtain The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
 * @method void setSdkAppId(integer $SdkAppId) Set The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
 * @method string getRoomId() Obtain [Room ID](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of the TRTC room where the conversation runs. Room IDs are numeric by default. If the room ID is a string, set RoomIdType to 1.
 * @method void setRoomId(string $RoomId) Set [Room ID](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of the TRTC room where the conversation runs. Room IDs are numeric by default. If the room ID is a string, set RoomIdType to 1.
 * @method integer getRoomIdType() Obtain Room ID type. It must match the room ID type of the conversation room. 0 is a numeric room ID, and 1 is a string room ID.
Valid values:
- 0: numeric room ID (Default)
- 1: string room ID
 * @method void setRoomIdType(integer $RoomIdType) Set Room ID type. It must match the room ID type of the conversation room. 0 is a numeric room ID, and 1 is a string room ID.
Valid values:
- 0: numeric room ID (Default)
- 1: string room ID
 * @method VoiceConversationConfig getAgentConfig() Obtain <p>Chatbot configuration.</p>
 * @method void setAgentConfig(VoiceConversationConfig $AgentConfig) Set <p>Chatbot configuration.</p>
 * @method string getConversationMode() Obtain Conversation pipeline mode: `Cascade` (default, three-stage pipeline) or `S2S` (end-to-end speech-to-speech model).
Valid values:
- Cascade: three-stage pipeline (default). Speech recognition, a large language model, and text-to-speech.
- S2S: end-to-end speech-to-speech model.
Default: Cascade
 * @method void setConversationMode(string $ConversationMode) Set Conversation pipeline mode: `Cascade` (default, three-stage pipeline) or `S2S` (end-to-end speech-to-speech model).
Valid values:
- Cascade: three-stage pipeline (default). Speech recognition, a large language model, and text-to-speech.
- S2S: end-to-end speech-to-speech model.
Default: Cascade
 * @method VoiceConversationS2SConfig getS2SConfig() Obtain End-to-end speech-to-speech model configuration. Required only in `S2S` mode. Ignored in `Cascade` mode.
 * @method void setS2SConfig(VoiceConversationS2SConfig $S2SConfig) Set End-to-end speech-to-speech model configuration. Required only in `S2S` mode. Ignored in `Cascade` mode.
 * @method VoiceConversationSTTConfig getSTTConfig() Obtain <p>Speech recognition configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
 * @method void setSTTConfig(VoiceConversationSTTConfig $STTConfig) Set <p>Speech recognition configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
 * @method VoiceConversationLLMConfig getLLMConfig() Obtain Large language model (LLM) configuration. Required only in `Cascade` mode. Ignored in `S2S` mode.
 * @method void setLLMConfig(VoiceConversationLLMConfig $LLMConfig) Set Large language model (LLM) configuration. Required only in `Cascade` mode. Ignored in `S2S` mode.
 * @method VoiceConversationTTSConfig getTTSConfig() Obtain <p>Text to speech configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
 * @method void setTTSConfig(VoiceConversationTTSConfig $TTSConfig) Set <p>Text to speech configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
 * @method VoiceConversationDialogConfig getDialogConfig() Obtain Conversation control configuration. Not supported in `S2S` mode.
 * @method void setDialogConfig(VoiceConversationDialogConfig $DialogConfig) Set Conversation control configuration. Not supported in `S2S` mode.
 * @method VoiceConversationVisionConfig getVisionConfig() Obtain Visual understanding configuration. Not supported in `S2S` mode.
 * @method void setVisionConfig(VoiceConversationVisionConfig $VisionConfig) Set Visual understanding configuration. Not supported in `S2S` mode.
 */
class CreateVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
     */
    public $SdkAppId;

    /**
     * @var string [Room ID](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of the TRTC room where the conversation runs. Room IDs are numeric by default. If the room ID is a string, set RoomIdType to 1.
     */
    public $RoomId;

    /**
     * @var integer Room ID type. It must match the room ID type of the conversation room. 0 is a numeric room ID, and 1 is a string room ID.
Valid values:
- 0: numeric room ID (Default)
- 1: string room ID
     */
    public $RoomIdType;

    /**
     * @var VoiceConversationConfig <p>Chatbot configuration.</p>
     */
    public $AgentConfig;

    /**
     * @var string Conversation pipeline mode: `Cascade` (default, three-stage pipeline) or `S2S` (end-to-end speech-to-speech model).
Valid values:
- Cascade: three-stage pipeline (default). Speech recognition, a large language model, and text-to-speech.
- S2S: end-to-end speech-to-speech model.
Default: Cascade
     */
    public $ConversationMode;

    /**
     * @var VoiceConversationS2SConfig End-to-end speech-to-speech model configuration. Required only in `S2S` mode. Ignored in `Cascade` mode.
     */
    public $S2SConfig;

    /**
     * @var VoiceConversationSTTConfig <p>Speech recognition configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
     */
    public $STTConfig;

    /**
     * @var VoiceConversationLLMConfig Large language model (LLM) configuration. Required only in `Cascade` mode. Ignored in `S2S` mode.
     */
    public $LLMConfig;

    /**
     * @var VoiceConversationTTSConfig <p>Text to speech configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
     */
    public $TTSConfig;

    /**
     * @var VoiceConversationDialogConfig Conversation control configuration. Not supported in `S2S` mode.
     */
    public $DialogConfig;

    /**
     * @var VoiceConversationVisionConfig Visual understanding configuration. Not supported in `S2S` mode.
     */
    public $VisionConfig;

    /**
     * @param integer $SdkAppId The TRTC [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid). It must be the same SdkAppId as the conversation room.
     * @param string $RoomId [Room ID](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of the TRTC room where the conversation runs. Room IDs are numeric by default. If the room ID is a string, set RoomIdType to 1.
     * @param integer $RoomIdType Room ID type. It must match the room ID type of the conversation room. 0 is a numeric room ID, and 1 is a string room ID.
Valid values:
- 0: numeric room ID (Default)
- 1: string room ID
     * @param VoiceConversationConfig $AgentConfig <p>Chatbot configuration.</p>
     * @param string $ConversationMode Conversation pipeline mode: `Cascade` (default, three-stage pipeline) or `S2S` (end-to-end speech-to-speech model).
Valid values:
- Cascade: three-stage pipeline (default). Speech recognition, a large language model, and text-to-speech.
- S2S: end-to-end speech-to-speech model.
Default: Cascade
     * @param VoiceConversationS2SConfig $S2SConfig End-to-end speech-to-speech model configuration. Required only in `S2S` mode. Ignored in `Cascade` mode.
     * @param VoiceConversationSTTConfig $STTConfig <p>Speech recognition configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
     * @param VoiceConversationLLMConfig $LLMConfig Large language model (LLM) configuration. Required only in `Cascade` mode. Ignored in `S2S` mode.
     * @param VoiceConversationTTSConfig $TTSConfig <p>Text to speech configuration. <strong>Required only in <code>Cascade</code> mode</strong>; ignored in <code>S2S</code> mode.</p>
     * @param VoiceConversationDialogConfig $DialogConfig Conversation control configuration. Not supported in `S2S` mode.
     * @param VoiceConversationVisionConfig $VisionConfig Visual understanding configuration. Not supported in `S2S` mode.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new VoiceConversationConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("ConversationMode",$param) and $param["ConversationMode"] !== null) {
            $this->ConversationMode = $param["ConversationMode"];
        }

        if (array_key_exists("S2SConfig",$param) and $param["S2SConfig"] !== null) {
            $this->S2SConfig = new VoiceConversationS2SConfig();
            $this->S2SConfig->deserialize($param["S2SConfig"]);
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new VoiceConversationSTTConfig();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new VoiceConversationLLMConfig();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new VoiceConversationTTSConfig();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("DialogConfig",$param) and $param["DialogConfig"] !== null) {
            $this->DialogConfig = new VoiceConversationDialogConfig();
            $this->DialogConfig->deserialize($param["DialogConfig"]);
        }

        if (array_key_exists("VisionConfig",$param) and $param["VisionConfig"] !== null) {
            $this->VisionConfig = new VoiceConversationVisionConfig();
            $this->VisionConfig->deserialize($param["VisionConfig"]);
        }
    }
}
