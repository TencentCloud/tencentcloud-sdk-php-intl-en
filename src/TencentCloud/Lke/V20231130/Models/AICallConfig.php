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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method boolean getEnableVoiceInteract() Obtain 
 * @method void setEnableVoiceInteract(boolean $EnableVoiceInteract) Set 
 * @method boolean getEnableVoiceCall() Obtain 
 * @method void setEnableVoiceCall(boolean $EnableVoiceCall) Set 
 * @method boolean getEnableDigitalHuman() Obtain 
 * @method void setEnableDigitalHuman(boolean $EnableDigitalHuman) Set 
 * @method VoiceConfig getVoice() Obtain 
 * @method void setVoice(VoiceConfig $Voice) Set 
 * @method DigitalHumanConfig getDigitalHuman() Obtain 
 * @method void setDigitalHuman(DigitalHumanConfig $DigitalHuman) Set 
 */
class AICallConfig extends AbstractModel
{
    /**
     * @var boolean 
     */
    public $EnableVoiceInteract;

    /**
     * @var boolean 
     */
    public $EnableVoiceCall;

    /**
     * @var boolean 
     */
    public $EnableDigitalHuman;

    /**
     * @var VoiceConfig 
     */
    public $Voice;

    /**
     * @var DigitalHumanConfig 
     */
    public $DigitalHuman;

    /**
     * @param boolean $EnableVoiceInteract 
     * @param boolean $EnableVoiceCall 
     * @param boolean $EnableDigitalHuman 
     * @param VoiceConfig $Voice 
     * @param DigitalHumanConfig $DigitalHuman 
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
