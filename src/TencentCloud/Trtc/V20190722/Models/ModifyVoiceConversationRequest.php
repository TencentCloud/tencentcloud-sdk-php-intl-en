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
 * ModifyVoiceConversation request structure.
 *
 * @method integer getSdkAppId() Obtain <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC, which is the same as the SdkAppId corresponding to the conversation room.</p>
 * @method void setSdkAppId(integer $SdkAppId) Set <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC, which is the same as the SdkAppId corresponding to the conversation room.</p>
 * @method string getTaskId() Obtain Unique ID of the conversation task. Returned when the conversation task starts successfully.
 * @method void setTaskId(string $TaskId) Set Unique ID of the conversation task. Returned when the conversation task starts successfully.
 * @method integer getSequenceNumber() Obtain For the same task, `SequenceNumber` must increase with each modification request. This prevents requests from being applied out of order.
 * @method void setSequenceNumber(integer $SequenceNumber) Set For the same task, `SequenceNumber` must increase with each modification request. This prevents requests from being applied out of order.
 * @method VoiceConversationLLMConfig getLLMConfig() Obtain Large language model (LLM) configuration. Applies only in `Cascade` mode. In `S2S` mode, the request returns an error.
 * @method void setLLMConfig(VoiceConversationLLMConfig $LLMConfig) Set Large language model (LLM) configuration. Applies only in `Cascade` mode. In `S2S` mode, the request returns an error.
 * @method VoiceConversationS2SConfig getS2SConfig() Obtain End-to-end speech-to-speech model configuration. Applies only in `S2S` mode. In `Cascade` mode, the request returns an error.
 * @method void setS2SConfig(VoiceConversationS2SConfig $S2SConfig) Set End-to-end speech-to-speech model configuration. Applies only in `S2S` mode. In `Cascade` mode, the request returns an error.
 * @method VoiceConversationDialogConfig getDialogConfig() Obtain Conversation control configuration. Applies only in `Cascade` mode.
 * @method void setDialogConfig(VoiceConversationDialogConfig $DialogConfig) Set Conversation control configuration. Applies only in `Cascade` mode.
 */
class ModifyVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC, which is the same as the SdkAppId corresponding to the conversation room.</p>
     */
    public $SdkAppId;

    /**
     * @var string Unique ID of the conversation task. Returned when the conversation task starts successfully.
     */
    public $TaskId;

    /**
     * @var integer For the same task, `SequenceNumber` must increase with each modification request. This prevents requests from being applied out of order.
     */
    public $SequenceNumber;

    /**
     * @var VoiceConversationLLMConfig Large language model (LLM) configuration. Applies only in `Cascade` mode. In `S2S` mode, the request returns an error.
     */
    public $LLMConfig;

    /**
     * @var VoiceConversationS2SConfig End-to-end speech-to-speech model configuration. Applies only in `S2S` mode. In `Cascade` mode, the request returns an error.
     */
    public $S2SConfig;

    /**
     * @var VoiceConversationDialogConfig Conversation control configuration. Applies only in `Cascade` mode.
     */
    public $DialogConfig;

    /**
     * @param integer $SdkAppId <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC, which is the same as the SdkAppId corresponding to the conversation room.</p>
     * @param string $TaskId Unique ID of the conversation task. Returned when the conversation task starts successfully.
     * @param integer $SequenceNumber For the same task, `SequenceNumber` must increase with each modification request. This prevents requests from being applied out of order.
     * @param VoiceConversationLLMConfig $LLMConfig Large language model (LLM) configuration. Applies only in `Cascade` mode. In `S2S` mode, the request returns an error.
     * @param VoiceConversationS2SConfig $S2SConfig End-to-end speech-to-speech model configuration. Applies only in `S2S` mode. In `Cascade` mode, the request returns an error.
     * @param VoiceConversationDialogConfig $DialogConfig Conversation control configuration. Applies only in `Cascade` mode.
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

        if (array_key_exists("SequenceNumber",$param) and $param["SequenceNumber"] !== null) {
            $this->SequenceNumber = $param["SequenceNumber"];
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new VoiceConversationLLMConfig();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("S2SConfig",$param) and $param["S2SConfig"] !== null) {
            $this->S2SConfig = new VoiceConversationS2SConfig();
            $this->S2SConfig->deserialize($param["S2SConfig"]);
        }

        if (array_key_exists("DialogConfig",$param) and $param["DialogConfig"] !== null) {
            $this->DialogConfig = new VoiceConversationDialogConfig();
            $this->DialogConfig->deserialize($param["DialogConfig"]);
        }
    }
}
