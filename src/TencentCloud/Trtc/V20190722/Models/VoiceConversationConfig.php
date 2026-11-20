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
 * Task parameters for an AI conversation.
 *
 * @method string getUserId() Obtain [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the conversation service in the TRTC room. It must not match a UserId already used by another TRTC user or by the conversation service. Include the room ID in the UserId.
 * @method void setUserId(string $UserId) Set [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the conversation service in the TRTC room. It must not match a UserId already used by another TRTC user or by the conversation service. Include the room ID in the UserId.
 * @method string getUserSig() Obtain [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig) for the conversation service to join the TRTC room. It is the authentication signature of this UserId and works like a login password. For how to calculate UserSig, see the linked topic.
 * @method void setUserSig(string $UserSig) Set [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig) for the conversation service to join the TRTC room. It is the authentication signature of this UserId and works like a login password. For how to calculate UserSig, see the linked topic.
 * @method array getTargetUserId() Obtain <p>UserId of the anchor whose audio the conversation service subscribes to. Specify one anchor only.</p>
 * @method void setTargetUserId(array $TargetUserId) Set <p>UserId of the anchor whose audio the conversation service subscribes to. Specify one anchor only.</p>
 * @method TranscriptionUserInfoParams getTTSPushRoomParams() Obtain <p>Parameters of the bot that publishes TTS audio back to the room.</p>
 * @method void setTTSPushRoomParams(TranscriptionUserInfoParams $TTSPushRoomParams) Set <p>Parameters of the bot that publishes TTS audio back to the room.</p>
 * @method integer getMaxIdleTime() Obtain <p>If an anchor in the conversation stays out of the TRTC room, or stays in the audience role, for longer than `MaxIdleTime`, the conversation task stops automatically. Valid range: 5 to 86400 (24 hours). Default: 30. Unit: seconds.</p>
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set <p>If an anchor in the conversation stays out of the TRTC room, or stays in the audience role, for longer than `MaxIdleTime`, the conversation task stops automatically. Valid range: 5 to 86400 (24 hours). Default: 30. Unit: seconds.</p>
 * @method array getFilterBracketsContent() Obtain Filters content returned by the LLM. Text inside the specified brackets is not played. If this parameter is not set, nothing is filtered. Valid range: 1 to 5. Example: 1. 
Not supported in S2S mode.
Valid values:
- 1: Chinese parentheses 
- 2: English parentheses
- 3: Chinese square brackets
- 4: English square brackets
- 5: English curly braces
 * @method void setFilterBracketsContent(array $FilterBracketsContent) Set Filters content returned by the LLM. Text inside the specified brackets is not played. If this parameter is not set, nothing is filtered. Valid range: 1 to 5. Example: 1. 
Not supported in S2S mode.
Valid values:
- 1: Chinese parentheses 
- 2: English parentheses
- 3: Chinese square brackets
- 4: English square brackets
- 5: English curly braces
 * @method integer getSubtitleMode() Obtain Subtitle display mode. Not supported in S2S mode.
Valid values:
- 0: Show subtitles as soon as possible.
- 1: Show subtitles sentence by sentence in real time.
 * @method void setSubtitleMode(integer $SubtitleMode) Set Subtitle display mode. Not supported in S2S mode.
Valid values:
- 0: Show subtitles as soon as possible.
- 1: Show subtitles sentence by sentence in real time.
 * @method string getTurnDetectionMode() Obtain Controls how a new conversation turn starts. Default: `auto`. Not supported in S2S mode.
Valid values:

- `auto`: The backend detects the end of a sentence from the silence duration, and then calls the LLM.
 * @method void setTurnDetectionMode(string $TurnDetectionMode) Set Controls how a new conversation turn starts. Default: `auto`. Not supported in S2S mode.
Valid values:

- `auto`: The backend detects the end of a sentence from the silence duration, and then calls the LLM.
 */
class VoiceConversationConfig extends AbstractModel
{
    /**
     * @var string [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the conversation service in the TRTC room. It must not match a UserId already used by another TRTC user or by the conversation service. Include the room ID in the UserId.
     */
    public $UserId;

    /**
     * @var string [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig) for the conversation service to join the TRTC room. It is the authentication signature of this UserId and works like a login password. For how to calculate UserSig, see the linked topic.
     */
    public $UserSig;

    /**
     * @var array <p>UserId of the anchor whose audio the conversation service subscribes to. Specify one anchor only.</p>
     */
    public $TargetUserId;

    /**
     * @var TranscriptionUserInfoParams <p>Parameters of the bot that publishes TTS audio back to the room.</p>
     */
    public $TTSPushRoomParams;

    /**
     * @var integer <p>If an anchor in the conversation stays out of the TRTC room, or stays in the audience role, for longer than `MaxIdleTime`, the conversation task stops automatically. Valid range: 5 to 86400 (24 hours). Default: 30. Unit: seconds.</p>
     */
    public $MaxIdleTime;

    /**
     * @var array Filters content returned by the LLM. Text inside the specified brackets is not played. If this parameter is not set, nothing is filtered. Valid range: 1 to 5. Example: 1. 
Not supported in S2S mode.
Valid values:
- 1: Chinese parentheses 
- 2: English parentheses
- 3: Chinese square brackets
- 4: English square brackets
- 5: English curly braces
     */
    public $FilterBracketsContent;

    /**
     * @var integer Subtitle display mode. Not supported in S2S mode.
Valid values:
- 0: Show subtitles as soon as possible.
- 1: Show subtitles sentence by sentence in real time.
     */
    public $SubtitleMode;

    /**
     * @var string Controls how a new conversation turn starts. Default: `auto`. Not supported in S2S mode.
Valid values:

- `auto`: The backend detects the end of a sentence from the silence duration, and then calls the LLM.
     */
    public $TurnDetectionMode;

    /**
     * @param string $UserId [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the conversation service in the TRTC room. It must not match a UserId already used by another TRTC user or by the conversation service. Include the room ID in the UserId.
     * @param string $UserSig [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig) for the conversation service to join the TRTC room. It is the authentication signature of this UserId and works like a login password. For how to calculate UserSig, see the linked topic.
     * @param array $TargetUserId <p>UserId of the anchor whose audio the conversation service subscribes to. Specify one anchor only.</p>
     * @param TranscriptionUserInfoParams $TTSPushRoomParams <p>Parameters of the bot that publishes TTS audio back to the room.</p>
     * @param integer $MaxIdleTime <p>If an anchor in the conversation stays out of the TRTC room, or stays in the audience role, for longer than `MaxIdleTime`, the conversation task stops automatically. Valid range: 5 to 86400 (24 hours). Default: 30. Unit: seconds.</p>
     * @param array $FilterBracketsContent Filters content returned by the LLM. Text inside the specified brackets is not played. If this parameter is not set, nothing is filtered. Valid range: 1 to 5. Example: 1. 
Not supported in S2S mode.
Valid values:
- 1: Chinese parentheses 
- 2: English parentheses
- 3: Chinese square brackets
- 4: English square brackets
- 5: English curly braces
     * @param integer $SubtitleMode Subtitle display mode. Not supported in S2S mode.
Valid values:
- 0: Show subtitles as soon as possible.
- 1: Show subtitles sentence by sentence in real time.
     * @param string $TurnDetectionMode Controls how a new conversation turn starts. Default: `auto`. Not supported in S2S mode.
Valid values:

- `auto`: The backend detects the end of a sentence from the silence duration, and then calls the LLM.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("TTSPushRoomParams",$param) and $param["TTSPushRoomParams"] !== null) {
            $this->TTSPushRoomParams = new TranscriptionUserInfoParams();
            $this->TTSPushRoomParams->deserialize($param["TTSPushRoomParams"]);
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("FilterBracketsContent",$param) and $param["FilterBracketsContent"] !== null) {
            $this->FilterBracketsContent = $param["FilterBracketsContent"];
        }

        if (array_key_exists("SubtitleMode",$param) and $param["SubtitleMode"] !== null) {
            $this->SubtitleMode = $param["SubtitleMode"];
        }

        if (array_key_exists("TurnDetectionMode",$param) and $param["TurnDetectionMode"] !== null) {
            $this->TurnDetectionMode = $param["TurnDetectionMode"];
        }
    }
}
