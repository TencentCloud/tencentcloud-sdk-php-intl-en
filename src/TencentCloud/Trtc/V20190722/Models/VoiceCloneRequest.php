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
 * VoiceClone request structure.
 *
 * @method integer getSdkAppId() Obtain Specifies the SdkAppId of TRTC.
 * @method void setSdkAppId(integer $SdkAppId) Set Specifies the SdkAppId of TRTC.
 * @method string getVoiceName() Obtain Sound clone name. only digits, letters, and underscores are allowed with a maximum of 36 characters.
 * @method void setVoiceName(string $VoiceName) Set Sound clone name. only digits, letters, and underscores are allowed with a maximum of 36 characters.
 * @method string getPromptAudio() Obtain The reference audio for voice cloning must be a base64 string of a 16k mono wav file with length between 10–180 seconds.
 * @method void setPromptAudio(string $PromptAudio) Set The reference audio for voice cloning must be a base64 string of a 16k mono wav file with length between 10–180 seconds.
 * @method string getAPIKey() Obtain API key for TTS.
 * @method void setAPIKey(string $APIKey) Set API key for TTS.
 * @method string getPromptText() Obtain Reference text for voice cloning. specifies the text corresponding to the reference audio.
 * @method void setPromptText(string $PromptText) Set Reference text for voice cloning. specifies the text corresponding to the reference audio.
 * @method string getModel() Obtain TTS model: flow_01_turbo, flow_01_ex.
 * @method void setModel(string $Model) Set TTS model: flow_01_turbo, flow_01_ex.
 * @method string getLanguage() Obtain Language parameter, empty by default. see: (ISO 639-1).
 * @method void setLanguage(string $Language) Set Language parameter, empty by default. see: (ISO 639-1).
 */
class VoiceCloneRequest extends AbstractModel
{
    /**
     * @var integer Specifies the SdkAppId of TRTC.
     */
    public $SdkAppId;

    /**
     * @var string Sound clone name. only digits, letters, and underscores are allowed with a maximum of 36 characters.
     */
    public $VoiceName;

    /**
     * @var string The reference audio for voice cloning must be a base64 string of a 16k mono wav file with length between 10–180 seconds.
     */
    public $PromptAudio;

    /**
     * @var string API key for TTS.
     * @deprecated
     */
    public $APIKey;

    /**
     * @var string Reference text for voice cloning. specifies the text corresponding to the reference audio.
     */
    public $PromptText;

    /**
     * @var string TTS model: flow_01_turbo, flow_01_ex.
     */
    public $Model;

    /**
     * @var string Language parameter, empty by default. see: (ISO 639-1).
     */
    public $Language;

    /**
     * @param integer $SdkAppId Specifies the SdkAppId of TRTC.
     * @param string $VoiceName Sound clone name. only digits, letters, and underscores are allowed with a maximum of 36 characters.
     * @param string $PromptAudio The reference audio for voice cloning must be a base64 string of a 16k mono wav file with length between 10–180 seconds.
     * @param string $APIKey API key for TTS.
     * @param string $PromptText Reference text for voice cloning. specifies the text corresponding to the reference audio.
     * @param string $Model TTS model: flow_01_turbo, flow_01_ex.
     * @param string $Language Language parameter, empty by default. see: (ISO 639-1).
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

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("PromptAudio",$param) and $param["PromptAudio"] !== null) {
            $this->PromptAudio = $param["PromptAudio"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}
