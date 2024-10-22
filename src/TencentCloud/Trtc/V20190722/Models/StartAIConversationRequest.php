<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getSdkAppId() Obtain TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the conversation task.
 * @method void setSdkAppId(integer $SdkAppId) Set TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the conversation task.
 * @method string getRoomId() Obtain TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the conversation task is started.
 * @method void setRoomId(string $RoomId) Set TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the conversation task is started.
 * @method AgentConfig getAgentConfig() Obtain Robot parameters
 * @method void setAgentConfig(AgentConfig $AgentConfig) Set Robot parameters
 * @method string getSessionId() Obtain The unique ID passed in by the caller can be used by the client to prevent repeated task initiation and to query the task status through this field.
 * @method void setSessionId(string $SessionId) Set The unique ID passed in by the caller can be used by the client to prevent repeated task initiation and to query the task status through this field.
 * @method integer getRoomIdType() Obtain The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
 * @method void setRoomIdType(integer $RoomIdType) Set The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
 * @method STTConfig getSTTConfig() Obtain Speech recognition configuration.
 * @method void setSTTConfig(STTConfig $STTConfig) Set Speech recognition configuration.
 * @method string getLLMConfig() Obtain LLM configuration. It must comply with the openai specification and be a JSON string. The example is as follows: <pre> { <br> &emsp; "LLMType": "Large model type", // String required, such as: "openai" <br> &emsp; "Model": "Your model name", // String required, specify the model to be used<br> "APIKey": "Your LLM API key", // String required <br> &emsp; "APIUrl": "https://api.xxx.com/chat/completions", // String required, URL for LLM API access<br> &emsp; "Streaming": true // Boolean optional, specify whether to use streaming<br> &emsp;} </pre>
 * @method void setLLMConfig(string $LLMConfig) Set LLM configuration. It must comply with the openai specification and be a JSON string. The example is as follows: <pre> { <br> &emsp; "LLMType": "Large model type", // String required, such as: "openai" <br> &emsp; "Model": "Your model name", // String required, specify the model to be used<br> "APIKey": "Your LLM API key", // String required <br> &emsp; "APIUrl": "https://api.xxx.com/chat/completions", // String required, URL for LLM API access<br> &emsp; "Streaming": true // Boolean optional, specify whether to use streaming<br> &emsp;} </pre>
 * @method string getTTSConfig() Obtain TTS configuration, which is a JSON string. The Tencent Cloud TTS example is as follows: <pre>{ <br> &emsp; "AppId": your application ID, // Integer Required<br> &emsp; "TTSType": "TTS type", // String TTS type, fixed to "tencent"<br> &emsp; "SecretId": "Your key ID", // String Required<br> &emsp; "SecretKey": "Your keyKey", // String Required<br> &emsp; "VoiceType": 101001, // Integer Required, voice ID, including standard voice and premium voice. Premium voice has higher fidelity and different price from standard voice. For details, please refer to <a href="https://cloud.tencent.com/document/product/1073/34112">Overview of Speech Synthesis Billing</a>. For a complete list of timbre IDs, see <a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823">List of speech synthesis timbre IDs</a>. <br> &emsp; "Speed": 1.25, // Integer Optional, speaking speed, range: [-2, 6], corresponding to different speaking speeds: -2: 0.6 times -1: 0.8 times 0: 1.0 times (default) 1: 1.2 times 2: 1.5 times 6: 2.5 times If a more detailed speaking speed is required, 2 decimal places can be retained, such as 0.5/1.25/2.81, etc. For the conversion between parameter value and actual speech speed, please refer to <a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">Speed Conversion</a><br> &emsp; "Volume": 5, // Integer Optional, volume size, range: [0, 10], corresponding to 11 levels of volume, the default value is 0, representing normal volume. <br> &emsp; "PrimaryLanguage": "zh-CN" // String Optional, primary language<br> &emsp;}</pre>
 * @method void setTTSConfig(string $TTSConfig) Set TTS configuration, which is a JSON string. The Tencent Cloud TTS example is as follows: <pre>{ <br> &emsp; "AppId": your application ID, // Integer Required<br> &emsp; "TTSType": "TTS type", // String TTS type, fixed to "tencent"<br> &emsp; "SecretId": "Your key ID", // String Required<br> &emsp; "SecretKey": "Your keyKey", // String Required<br> &emsp; "VoiceType": 101001, // Integer Required, voice ID, including standard voice and premium voice. Premium voice has higher fidelity and different price from standard voice. For details, please refer to <a href="https://cloud.tencent.com/document/product/1073/34112">Overview of Speech Synthesis Billing</a>. For a complete list of timbre IDs, see <a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823">List of speech synthesis timbre IDs</a>. <br> &emsp; "Speed": 1.25, // Integer Optional, speaking speed, range: [-2, 6], corresponding to different speaking speeds: -2: 0.6 times -1: 0.8 times 0: 1.0 times (default) 1: 1.2 times 2: 1.5 times 6: 2.5 times If a more detailed speaking speed is required, 2 decimal places can be retained, such as 0.5/1.25/2.81, etc. For the conversion between parameter value and actual speech speed, please refer to <a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">Speed Conversion</a><br> &emsp; "Volume": 5, // Integer Optional, volume size, range: [0, 10], corresponding to 11 levels of volume, the default value is 0, representing normal volume. <br> &emsp; "PrimaryLanguage": "zh-CN" // String Optional, primary language<br> &emsp;}</pre>
 */
class StartAIConversationRequest extends AbstractModel
{
    /**
     * @var integer TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the conversation task.
     */
    public $SdkAppId;

    /**
     * @var string TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the conversation task is started.
     */
    public $RoomId;

    /**
     * @var AgentConfig Robot parameters
     */
    public $AgentConfig;

    /**
     * @var string The unique ID passed in by the caller can be used by the client to prevent repeated task initiation and to query the task status through this field.
     */
    public $SessionId;

    /**
     * @var integer The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
     */
    public $RoomIdType;

    /**
     * @var STTConfig Speech recognition configuration.
     */
    public $STTConfig;

    /**
     * @var string LLM configuration. It must comply with the openai specification and be a JSON string. The example is as follows: <pre> { <br> &emsp; "LLMType": "Large model type", // String required, such as: "openai" <br> &emsp; "Model": "Your model name", // String required, specify the model to be used<br> "APIKey": "Your LLM API key", // String required <br> &emsp; "APIUrl": "https://api.xxx.com/chat/completions", // String required, URL for LLM API access<br> &emsp; "Streaming": true // Boolean optional, specify whether to use streaming<br> &emsp;} </pre>
     */
    public $LLMConfig;

    /**
     * @var string TTS configuration, which is a JSON string. The Tencent Cloud TTS example is as follows: <pre>{ <br> &emsp; "AppId": your application ID, // Integer Required<br> &emsp; "TTSType": "TTS type", // String TTS type, fixed to "tencent"<br> &emsp; "SecretId": "Your key ID", // String Required<br> &emsp; "SecretKey": "Your keyKey", // String Required<br> &emsp; "VoiceType": 101001, // Integer Required, voice ID, including standard voice and premium voice. Premium voice has higher fidelity and different price from standard voice. For details, please refer to <a href="https://cloud.tencent.com/document/product/1073/34112">Overview of Speech Synthesis Billing</a>. For a complete list of timbre IDs, see <a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823">List of speech synthesis timbre IDs</a>. <br> &emsp; "Speed": 1.25, // Integer Optional, speaking speed, range: [-2, 6], corresponding to different speaking speeds: -2: 0.6 times -1: 0.8 times 0: 1.0 times (default) 1: 1.2 times 2: 1.5 times 6: 2.5 times If a more detailed speaking speed is required, 2 decimal places can be retained, such as 0.5/1.25/2.81, etc. For the conversion between parameter value and actual speech speed, please refer to <a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">Speed Conversion</a><br> &emsp; "Volume": 5, // Integer Optional, volume size, range: [0, 10], corresponding to 11 levels of volume, the default value is 0, representing normal volume. <br> &emsp; "PrimaryLanguage": "zh-CN" // String Optional, primary language<br> &emsp;}</pre>
     */
    public $TTSConfig;

    /**
     * @param integer $SdkAppId TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the conversation task.
     * @param string $RoomId TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the conversation task is started.
     * @param AgentConfig $AgentConfig Robot parameters
     * @param string $SessionId The unique ID passed in by the caller can be used by the client to prevent repeated task initiation and to query the task status through this field.
     * @param integer $RoomIdType The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
     * @param STTConfig $STTConfig Speech recognition configuration.
     * @param string $LLMConfig LLM configuration. It must comply with the openai specification and be a JSON string. The example is as follows: <pre> { <br> &emsp; "LLMType": "Large model type", // String required, such as: "openai" <br> &emsp; "Model": "Your model name", // String required, specify the model to be used<br> "APIKey": "Your LLM API key", // String required <br> &emsp; "APIUrl": "https://api.xxx.com/chat/completions", // String required, URL for LLM API access<br> &emsp; "Streaming": true // Boolean optional, specify whether to use streaming<br> &emsp;} </pre>
     * @param string $TTSConfig TTS configuration, which is a JSON string. The Tencent Cloud TTS example is as follows: <pre>{ <br> &emsp; "AppId": your application ID, // Integer Required<br> &emsp; "TTSType": "TTS type", // String TTS type, fixed to "tencent"<br> &emsp; "SecretId": "Your key ID", // String Required<br> &emsp; "SecretKey": "Your keyKey", // String Required<br> &emsp; "VoiceType": 101001, // Integer Required, voice ID, including standard voice and premium voice. Premium voice has higher fidelity and different price from standard voice. For details, please refer to <a href="https://cloud.tencent.com/document/product/1073/34112">Overview of Speech Synthesis Billing</a>. For a complete list of timbre IDs, see <a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823">List of speech synthesis timbre IDs</a>. <br> &emsp; "Speed": 1.25, // Integer Optional, speaking speed, range: [-2, 6], corresponding to different speaking speeds: -2: 0.6 times -1: 0.8 times 0: 1.0 times (default) 1: 1.2 times 2: 1.5 times 6: 2.5 times If a more detailed speaking speed is required, 2 decimal places can be retained, such as 0.5/1.25/2.81, etc. For the conversion between parameter value and actual speech speed, please refer to <a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">Speed Conversion</a><br> &emsp; "Volume": 5, // Integer Optional, volume size, range: [0, 10], corresponding to 11 levels of volume, the default value is 0, representing normal volume. <br> &emsp; "PrimaryLanguage": "zh-CN" // String Optional, primary language<br> &emsp;}</pre>
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
    }
}
