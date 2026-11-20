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
 * Configuration for AI conversation.
 *
 * @method integer getInterruptMode() Obtain Interrupt mode. Default: 0.
Valid values:
- 0: Automatic. When STT returns text, it interrupts TTS playback. Use this mode with InterruptSpeechDuration.
- 1: Manual. The bot is interrupted only by the Interrupt command from the server or client API.
- 2: Keyword.
 * @method void setInterruptMode(integer $InterruptMode) Set Interrupt mode. Default: 0.
Valid values:
- 0: Automatic. When STT returns text, it interrupts TTS playback. Use this mode with InterruptSpeechDuration.
- 1: Manual. The bot is interrupted only by the Interrupt command from the server or client API.
- 2: Keyword.
 * @method integer getInterruptSpeechDuration() Obtain Minimum duration of user speech that triggers an automatic interrupt. Default: 200. Unit: ms.
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) Set Minimum duration of user speech that triggers an automatic interrupt. Default: 200. Unit: ms.
 * @method array getInterruptKeywords() Obtain Preset keywords that interrupt the bot. Use them when the user must explicitly indicate the intent to interrupt. You can set up to 128 keywords. Applies only when `InterruptMode` is 2.
 * @method void setInterruptKeywords(array $InterruptKeywords) Set Preset keywords that interrupt the bot. Use them when the user must explicitly indicate the intent to interrupt. You can set up to 128 keywords. Applies only when `InterruptMode` is 2.
 * @method integer getSilenceFollowUp() Obtain How long the user is silent before the bot asks a follow-up question. Valid range: 0 to 300. 0 turns this off. Default: 0. Unit: seconds.


 * @method void setSilenceFollowUp(integer $SilenceFollowUp) Set How long the user is silent before the bot asks a follow-up question. Valid range: 0 to 300. 0 turns this off. Default: 0. Unit: seconds.


 * @method string getSilenceFollowUpText() Obtain <p>Text of the proactive follow-up question.</p>
 * @method void setSilenceFollowUpText(string $SilenceFollowUpText) Set <p>Text of the proactive follow-up question.</p>
 * @method string getWelcomeMessage() Obtain Welcome message the bot broadcasts when an anchor enters the room for the first time. It is broadcast again when the anchor leaves the room and enters again.
 * @method void setWelcomeMessage(string $WelcomeMessage) Set Welcome message the bot broadcasts when an anchor enters the room for the first time. It is broadcast again when the anchor leaves the room and enters again.
 */
class VoiceConversationDialogConfig extends AbstractModel
{
    /**
     * @var integer Interrupt mode. Default: 0.
Valid values:
- 0: Automatic. When STT returns text, it interrupts TTS playback. Use this mode with InterruptSpeechDuration.
- 1: Manual. The bot is interrupted only by the Interrupt command from the server or client API.
- 2: Keyword.
     */
    public $InterruptMode;

    /**
     * @var integer Minimum duration of user speech that triggers an automatic interrupt. Default: 200. Unit: ms.
     */
    public $InterruptSpeechDuration;

    /**
     * @var array Preset keywords that interrupt the bot. Use them when the user must explicitly indicate the intent to interrupt. You can set up to 128 keywords. Applies only when `InterruptMode` is 2.
     */
    public $InterruptKeywords;

    /**
     * @var integer How long the user is silent before the bot asks a follow-up question. Valid range: 0 to 300. 0 turns this off. Default: 0. Unit: seconds.


     */
    public $SilenceFollowUp;

    /**
     * @var string <p>Text of the proactive follow-up question.</p>
     */
    public $SilenceFollowUpText;

    /**
     * @var string Welcome message the bot broadcasts when an anchor enters the room for the first time. It is broadcast again when the anchor leaves the room and enters again.
     */
    public $WelcomeMessage;

    /**
     * @param integer $InterruptMode Interrupt mode. Default: 0.
Valid values:
- 0: Automatic. When STT returns text, it interrupts TTS playback. Use this mode with InterruptSpeechDuration.
- 1: Manual. The bot is interrupted only by the Interrupt command from the server or client API.
- 2: Keyword.
     * @param integer $InterruptSpeechDuration Minimum duration of user speech that triggers an automatic interrupt. Default: 200. Unit: ms.
     * @param array $InterruptKeywords Preset keywords that interrupt the bot. Use them when the user must explicitly indicate the intent to interrupt. You can set up to 128 keywords. Applies only when `InterruptMode` is 2.
     * @param integer $SilenceFollowUp How long the user is silent before the bot asks a follow-up question. Valid range: 0 to 300. 0 turns this off. Default: 0. Unit: seconds.


     * @param string $SilenceFollowUpText <p>Text of the proactive follow-up question.</p>
     * @param string $WelcomeMessage Welcome message the bot broadcasts when an anchor enters the room for the first time. It is broadcast again when the anchor leaves the room and enters again.
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
        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("InterruptKeywords",$param) and $param["InterruptKeywords"] !== null) {
            $this->InterruptKeywords = $param["InterruptKeywords"];
        }

        if (array_key_exists("SilenceFollowUp",$param) and $param["SilenceFollowUp"] !== null) {
            $this->SilenceFollowUp = $param["SilenceFollowUp"];
        }

        if (array_key_exists("SilenceFollowUpText",$param) and $param["SilenceFollowUpText"] !== null) {
            $this->SilenceFollowUpText = $param["SilenceFollowUpText"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }
    }
}
