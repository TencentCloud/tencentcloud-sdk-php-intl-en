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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent Call Configuration
 *
 * @method DigitalHumanConfig getDigitalHuman() Obtain Digital human configuration
 * @method void setDigitalHuman(DigitalHumanConfig $DigitalHuman) Set Digital human configuration
 * @method boolean getEnableDigitalHuman() Obtain Enable digital human
 * @method void setEnableDigitalHuman(boolean $EnableDigitalHuman) Set Enable digital human
 * @method boolean getEnableVoiceCall() Obtain Enable voice call
 * @method void setEnableVoiceCall(boolean $EnableVoiceCall) Set Enable voice call
 * @method boolean getEnableVoiceInteract() Obtain Enable voice interaction
 * @method void setEnableVoiceInteract(boolean $EnableVoiceInteract) Set Enable voice interaction
 * @method VoiceConfig getVoice() Obtain Voice type configuration
 * @method void setVoice(VoiceConfig $Voice) Set Voice type configuration
 */
class AICallConfig extends AbstractModel
{
    /**
     * @var DigitalHumanConfig Digital human configuration
     */
    public $DigitalHuman;

    /**
     * @var boolean Enable digital human
     */
    public $EnableDigitalHuman;

    /**
     * @var boolean Enable voice call
     */
    public $EnableVoiceCall;

    /**
     * @var boolean Enable voice interaction
     */
    public $EnableVoiceInteract;

    /**
     * @var VoiceConfig Voice type configuration
     */
    public $Voice;

    /**
     * @param DigitalHumanConfig $DigitalHuman Digital human configuration
     * @param boolean $EnableDigitalHuman Enable digital human
     * @param boolean $EnableVoiceCall Enable voice call
     * @param boolean $EnableVoiceInteract Enable voice interaction
     * @param VoiceConfig $Voice Voice type configuration
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
        if (array_key_exists("DigitalHuman",$param) and $param["DigitalHuman"] !== null) {
            $this->DigitalHuman = new DigitalHumanConfig();
            $this->DigitalHuman->deserialize($param["DigitalHuman"]);
        }

        if (array_key_exists("EnableDigitalHuman",$param) and $param["EnableDigitalHuman"] !== null) {
            $this->EnableDigitalHuman = $param["EnableDigitalHuman"];
        }

        if (array_key_exists("EnableVoiceCall",$param) and $param["EnableVoiceCall"] !== null) {
            $this->EnableVoiceCall = $param["EnableVoiceCall"];
        }

        if (array_key_exists("EnableVoiceInteract",$param) and $param["EnableVoiceInteract"] !== null) {
            $this->EnableVoiceInteract = $param["EnableVoiceInteract"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new VoiceConfig();
            $this->Voice->deserialize($param["Voice"]);
        }
    }
}
