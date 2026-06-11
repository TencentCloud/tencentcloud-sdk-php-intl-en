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
 * Transcription TTS parameter
 *
 * @method string getModel() Obtain <p>TTS model</p>
 * @method void setModel(string $Model) Set <p>TTS model</p>
 * @method string getLanguage() Obtain <p>TTS language must be in the TargetLang list of TranslationParam.</p>
 * @method void setLanguage(string $Language) Set <p>TTS language must be in the TargetLang list of TranslationParam.</p>
 * @method TranscriptionUserInfoParams getTargetUser() Obtain <p>The user requesting TTS playback. They must be on the subscription allowlist and not on the blocklist.</p>
 * @method void setTargetUser(TranscriptionUserInfoParams $TargetUser) Set <p>The user requesting TTS playback. They must be on the subscription allowlist and not on the blocklist.</p>
 * @method TranscriptionUserInfoParams getTTSRobotUser() Obtain <p>The robot user that pushes TTS audio back into the room.</p>
 * @method void setTTSRobotUser(TranscriptionUserInfoParams $TTSRobotUser) Set <p>The robot user that pushes TTS audio back into the room.</p>
 * @method TTSVoice getVoice() Obtain <p>TTS configuration parameters.</p>
 * @method void setVoice(TTSVoice $Voice) Set <p>TTS configuration parameters.</p>
 */
class TTSParam extends AbstractModel
{
    /**
     * @var string <p>TTS model</p>
     */
    public $Model;

    /**
     * @var string <p>TTS language must be in the TargetLang list of TranslationParam.</p>
     */
    public $Language;

    /**
     * @var TranscriptionUserInfoParams <p>The user requesting TTS playback. They must be on the subscription allowlist and not on the blocklist.</p>
     */
    public $TargetUser;

    /**
     * @var TranscriptionUserInfoParams <p>The robot user that pushes TTS audio back into the room.</p>
     */
    public $TTSRobotUser;

    /**
     * @var TTSVoice <p>TTS configuration parameters.</p>
     */
    public $Voice;

    /**
     * @param string $Model <p>TTS model</p>
     * @param string $Language <p>TTS language must be in the TargetLang list of TranslationParam.</p>
     * @param TranscriptionUserInfoParams $TargetUser <p>The user requesting TTS playback. They must be on the subscription allowlist and not on the blocklist.</p>
     * @param TranscriptionUserInfoParams $TTSRobotUser <p>The robot user that pushes TTS audio back into the room.</p>
     * @param TTSVoice $Voice <p>TTS configuration parameters.</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("TargetUser",$param) and $param["TargetUser"] !== null) {
            $this->TargetUser = new TranscriptionUserInfoParams();
            $this->TargetUser->deserialize($param["TargetUser"]);
        }

        if (array_key_exists("TTSRobotUser",$param) and $param["TTSRobotUser"] !== null) {
            $this->TTSRobotUser = new TranscriptionUserInfoParams();
            $this->TTSRobotUser->deserialize($param["TTSRobotUser"]);
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new TTSVoice();
            $this->Voice->deserialize($param["Voice"]);
        }
    }
}
