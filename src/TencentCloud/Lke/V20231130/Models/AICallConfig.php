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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart Conversation
 *
 * @method boolean getEnableVoiceInteract() Obtain Enable voice interaction feature
 * @method void setEnableVoiceInteract(boolean $EnableVoiceInteract) Set Enable voice interaction feature
 * @method boolean getEnableVoiceCall() Obtain Enable voice call
 * @method void setEnableVoiceCall(boolean $EnableVoiceCall) Set Enable voice call
 * @method boolean getEnableDigitalHuman() Obtain Enable digital human
 * @method void setEnableDigitalHuman(boolean $EnableDigitalHuman) Set Enable digital human
 * @method VoiceConfig getVoice() Obtain Timbre Configuration
 * @method void setVoice(VoiceConfig $Voice) Set Timbre Configuration
 * @method DigitalHumanConfig getDigitalHuman() Obtain Digital Human Configuration
 * @method void setDigitalHuman(DigitalHumanConfig $DigitalHuman) Set Digital Human Configuration
 */
class AICallConfig extends AbstractModel
{
    /**
     * @var boolean Enable voice interaction feature
     */
    public $EnableVoiceInteract;

    /**
     * @var boolean Enable voice call
     */
    public $EnableVoiceCall;

    /**
     * @var boolean Enable digital human
     */
    public $EnableDigitalHuman;

    /**
     * @var VoiceConfig Timbre Configuration
     */
    public $Voice;

    /**
     * @var DigitalHumanConfig Digital Human Configuration
     */
    public $DigitalHuman;

    /**
     * @param boolean $EnableVoiceInteract Enable voice interaction feature
     * @param boolean $EnableVoiceCall Enable voice call
     * @param boolean $EnableDigitalHuman Enable digital human
     * @param VoiceConfig $Voice Timbre Configuration
     * @param DigitalHumanConfig $DigitalHuman Digital Human Configuration
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
        if (array_key_exists("EnableVoiceInteract",$param) and $param["EnableVoiceInteract"] !== null) {
            $this->EnableVoiceInteract = $param["EnableVoiceInteract"];
        }

        if (array_key_exists("EnableVoiceCall",$param) and $param["EnableVoiceCall"] !== null) {
            $this->EnableVoiceCall = $param["EnableVoiceCall"];
        }

        if (array_key_exists("EnableDigitalHuman",$param) and $param["EnableDigitalHuman"] !== null) {
            $this->EnableDigitalHuman = $param["EnableDigitalHuman"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new VoiceConfig();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("DigitalHuman",$param) and $param["DigitalHuman"] !== null) {
            $this->DigitalHuman = new DigitalHumanConfig();
            $this->DigitalHuman->deserialize($param["DigitalHuman"]);
        }
    }
}
