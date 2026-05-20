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
 * StartAIConversation request structure.
 *
 * @method integer getSdkAppId() Obtain [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
 * @method void setSdkAppId(integer $SdkAppId) Set [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
 * @method string getRoomId() Obtain [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the conversation task.
 * @method void setRoomId(string $RoomId) Set [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the conversation task.
 * @method AgentConfig getAgentConfig() Obtain Bot parameters.
 * @method void setAgentConfig(AgentConfig $AgentConfig) Set Bot parameters.
 * @method string getSessionId() Obtain The unique Id passed by the caller can be used to prevent duplication of task initiation on the client side as well as query task status through this field.
 * @method void setSessionId(string $SessionId) Set The unique Id passed by the caller can be used to prevent duplication of task initiation on the client side as well as query task status through this field.
 * @method integer getRoomIdType() Obtain Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
 * @method void setRoomIdType(integer $RoomIdType) Set Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
 * @method STTConfig getSTTConfig() Obtain Speech recognition configuration.
 * @method void setSTTConfig(STTConfig $STTConfig) Set Speech recognition configuration.
 * @method string getLLMConfig() Obtain Required parameter, LLM configuration. it must comply with the openai standard and be a JSON String. example: <pre> { <br> &emsp;  "LLMType": "Model type",  // String required, for example: "openai" <br> &emsp;  "Model": "your Model name", // String required, specifies the Model to be used<br>    "APIKey": "your LLM API key", // String required <br> &emsp;  "APIUrl": "https://API.xxx.com/chat/completions", // String required, the URL for LLM API access<br> &emsp;  "History": 10, // Integer optional, sets the context rounds for LLM, default value is 0, maximum value is 50<br> &emsp;  "HistoryMode": 1, // Integer optional, 1 means the content in the LLM context will synchronize with playback audio, and text corresponding to unplayed audio will not appear in the context. 0 means no synchronization, default value is 0<br> &emsp;  "Streaming": true // Boolean optional, whether to use Streaming<br> &emsp;} </pre>.
 * @method void setLLMConfig(string $LLMConfig) Set Required parameter, LLM configuration. it must comply with the openai standard and be a JSON String. example: <pre> { <br> &emsp;  "LLMType": "Model type",  // String required, for example: "openai" <br> &emsp;  "Model": "your Model name", // String required, specifies the Model to be used<br>    "APIKey": "your LLM API key", // String required <br> &emsp;  "APIUrl": "https://API.xxx.com/chat/completions", // String required, the URL for LLM API access<br> &emsp;  "History": 10, // Integer optional, sets the context rounds for LLM, default value is 0, maximum value is 50<br> &emsp;  "HistoryMode": 1, // Integer optional, 1 means the content in the LLM context will synchronize with playback audio, and text corresponding to unplayed audio will not appear in the context. 0 means no synchronization, default value is 0<br> &emsp;  "Streaming": true // Boolean optional, whether to use Streaming<br> &emsp;} </pre>.
 * @method string getTTSConfig() Obtain Required parameter, TTS configuration. it is a JSON string: TRTC TTS configuration as follows:.  
<pre> { <br> &emsp;  "TTSType": "flow",  // [required] fixed to this value.  <br> &emsp;  "VoiceId": "v-female-R2s4N9qJ", // [required] premium timbre ID/clone voice ID. selectable different timbres. refer to the following timbre list for ID library.   <br> &emsp;  "Model": "flow_01_turbo", // (required) current default TTS Model version (corresponds to Flash version).  <br> &emsp;  "Speed": 1.0,    // [option] adjust the speaking rate. value range [0.5-2.0]. default 1.0. the larger the value, the faster the speech speed. <br> &emsp;  "Volume": 1.0,   // [optional] adjust volume [0,10]. default: 1.0. a larger value indicates higher volume.   <br> &emsp;  "Pitch": 0,   // [optional] adjusts the tone [-12,12]. default value is 0. among them, 0 outputs the original voice type. <br> &emsp;  "Language": "zh" // [optional] recommend filling in. currently supports filling in chinese: zh, english: en, cantonese dialect: yue. parameter reference: (ISO 639-1). <br> &emsp;} </pre>
 * @method void setTTSConfig(string $TTSConfig) Set Required parameter, TTS configuration. it is a JSON string: TRTC TTS configuration as follows:.  
<pre> { <br> &emsp;  "TTSType": "flow",  // [required] fixed to this value.  <br> &emsp;  "VoiceId": "v-female-R2s4N9qJ", // [required] premium timbre ID/clone voice ID. selectable different timbres. refer to the following timbre list for ID library.   <br> &emsp;  "Model": "flow_01_turbo", // (required) current default TTS Model version (corresponds to Flash version).  <br> &emsp;  "Speed": 1.0,    // [option] adjust the speaking rate. value range [0.5-2.0]. default 1.0. the larger the value, the faster the speech speed. <br> &emsp;  "Volume": 1.0,   // [optional] adjust volume [0,10]. default: 1.0. a larger value indicates higher volume.   <br> &emsp;  "Pitch": 0,   // [optional] adjusts the tone [-12,12]. default value is 0. among them, 0 outputs the original voice type. <br> &emsp;  "Language": "zh" // [optional] recommend filling in. currently supports filling in chinese: zh, english: en, cantonese dialect: yue. parameter reference: (ISO 639-1). <br> &emsp;} </pre>
 * @method string getExperimentalParams() Obtain Experimental parameter, contact for background usage.
 * @method void setExperimentalParams(string $ExperimentalParams) Set Experimental parameter, contact for background usage.
 */
class StartAIConversationRequest extends AbstractModel
{
    /**
     * @var integer [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
     */
    public $SdkAppId;

    /**
     * @var string [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the conversation task.
     */
    public $RoomId;

    /**
     * @var AgentConfig Bot parameters.
     */
    public $AgentConfig;

    /**
     * @var string The unique Id passed by the caller can be used to prevent duplication of task initiation on the client side as well as query task status through this field.
     */
    public $SessionId;

    /**
     * @var integer Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
     */
    public $RoomIdType;

    /**
     * @var STTConfig Speech recognition configuration.
     */
    public $STTConfig;

    /**
     * @var string Required parameter, LLM configuration. it must comply with the openai standard and be a JSON String. example: <pre> { <br> &emsp;  "LLMType": "Model type",  // String required, for example: "openai" <br> &emsp;  "Model": "your Model name", // String required, specifies the Model to be used<br>    "APIKey": "your LLM API key", // String required <br> &emsp;  "APIUrl": "https://API.xxx.com/chat/completions", // String required, the URL for LLM API access<br> &emsp;  "History": 10, // Integer optional, sets the context rounds for LLM, default value is 0, maximum value is 50<br> &emsp;  "HistoryMode": 1, // Integer optional, 1 means the content in the LLM context will synchronize with playback audio, and text corresponding to unplayed audio will not appear in the context. 0 means no synchronization, default value is 0<br> &emsp;  "Streaming": true // Boolean optional, whether to use Streaming<br> &emsp;} </pre>.
     */
    public $LLMConfig;

    /**
     * @var string Required parameter, TTS configuration. it is a JSON string: TRTC TTS configuration as follows:.  
<pre> { <br> &emsp;  "TTSType": "flow",  // [required] fixed to this value.  <br> &emsp;  "VoiceId": "v-female-R2s4N9qJ", // [required] premium timbre ID/clone voice ID. selectable different timbres. refer to the following timbre list for ID library.   <br> &emsp;  "Model": "flow_01_turbo", // (required) current default TTS Model version (corresponds to Flash version).  <br> &emsp;  "Speed": 1.0,    // [option] adjust the speaking rate. value range [0.5-2.0]. default 1.0. the larger the value, the faster the speech speed. <br> &emsp;  "Volume": 1.0,   // [optional] adjust volume [0,10]. default: 1.0. a larger value indicates higher volume.   <br> &emsp;  "Pitch": 0,   // [optional] adjusts the tone [-12,12]. default value is 0. among them, 0 outputs the original voice type. <br> &emsp;  "Language": "zh" // [optional] recommend filling in. currently supports filling in chinese: zh, english: en, cantonese dialect: yue. parameter reference: (ISO 639-1). <br> &emsp;} </pre>
     */
    public $TTSConfig;

    /**
     * @var string Experimental parameter, contact for background usage.
     */
    public $ExperimentalParams;

    /**
     * @param integer $SdkAppId [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
     * @param string $RoomId [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the conversation task.
     * @param AgentConfig $AgentConfig Bot parameters.
     * @param string $SessionId The unique Id passed by the caller can be used to prevent duplication of task initiation on the client side as well as query task status through this field.
     * @param integer $RoomIdType Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
     * @param STTConfig $STTConfig Speech recognition configuration.
     * @param string $LLMConfig Required parameter, LLM configuration. it must comply with the openai standard and be a JSON String. example: <pre> { <br> &emsp;  "LLMType": "Model type",  // String required, for example: "openai" <br> &emsp;  "Model": "your Model name", // String required, specifies the Model to be used<br>    "APIKey": "your LLM API key", // String required <br> &emsp;  "APIUrl": "https://API.xxx.com/chat/completions", // String required, the URL for LLM API access<br> &emsp;  "History": 10, // Integer optional, sets the context rounds for LLM, default value is 0, maximum value is 50<br> &emsp;  "HistoryMode": 1, // Integer optional, 1 means the content in the LLM context will synchronize with playback audio, and text corresponding to unplayed audio will not appear in the context. 0 means no synchronization, default value is 0<br> &emsp;  "Streaming": true // Boolean optional, whether to use Streaming<br> &emsp;} </pre>.
     * @param string $TTSConfig Required parameter, TTS configuration. it is a JSON string: TRTC TTS configuration as follows:.  
<pre> { <br> &emsp;  "TTSType": "flow",  // [required] fixed to this value.  <br> &emsp;  "VoiceId": "v-female-R2s4N9qJ", // [required] premium timbre ID/clone voice ID. selectable different timbres. refer to the following timbre list for ID library.   <br> &emsp;  "Model": "flow_01_turbo", // (required) current default TTS Model version (corresponds to Flash version).  <br> &emsp;  "Speed": 1.0,    // [option] adjust the speaking rate. value range [0.5-2.0]. default 1.0. the larger the value, the faster the speech speed. <br> &emsp;  "Volume": 1.0,   // [optional] adjust volume [0,10]. default: 1.0. a larger value indicates higher volume.   <br> &emsp;  "Pitch": 0,   // [optional] adjusts the tone [-12,12]. default value is 0. among them, 0 outputs the original voice type. <br> &emsp;  "Language": "zh" // [optional] recommend filling in. currently supports filling in chinese: zh, english: en, cantonese dialect: yue. parameter reference: (ISO 639-1). <br> &emsp;} </pre>
     * @param string $ExperimentalParams Experimental parameter, contact for background usage.
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

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new AgentConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new STTConfig();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = $param["LLMConfig"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = $param["TTSConfig"];
        }

        if (array_key_exists("ExperimentalParams",$param) and $param["ExperimentalParams"] !== null) {
            $this->ExperimentalParams = $param["ExperimentalParams"];
        }
    }
}
