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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server controls the chatbot to broadcast specified text.
 *
 * @method string getText() Obtain Specifies the server push broadcast text.
 * @method void setText(string $Text) Set Specifies the server push broadcast text.
 * @method boolean getInterrupt() Obtain Whether to allow the text to interrupt the robot's speaking.
 * @method void setInterrupt(boolean $Interrupt) Set Whether to allow the text to interrupt the robot's speaking.
 * @method boolean getStopAfterPlay() Obtain Specifies whether to automatically close the dialogue task after broadcasting the text.
 * @method void setStopAfterPlay(boolean $StopAfterPlay) Set Specifies whether to automatically close the dialogue task after broadcasting the text.
 * @method string getAudio() Obtain Specifies the server push broadcast audio.
Format description: audio must be mono, sampling rate should be consistent with the corresponding TTS, and coded as a Base64 string.
Input rules: when the Audio field is provided, the system will not accept input in the Text field. the system will play the Audio content in the Audio field directly.
 * @method void setAudio(string $Audio) Set Specifies the server push broadcast audio.
Format description: audio must be mono, sampling rate should be consistent with the corresponding TTS, and coded as a Base64 string.
Input rules: when the Audio field is provided, the system will not accept input in the Text field. the system will play the Audio content in the Audio field directly.
 * @method integer getDropMode() Obtain Defaults to 0. valid only when Interrupt is false.
-0 indicates that messages with Interrupt set to false will be dropped when there is an interaction.
-Indicates that when there is an interaction in progress, messages with Interrupt set to false will not be dropped but cached and processed after the current interaction is completed.

Note: when DropMode is 1, the cache allows multiple messages. if an interruption occurs subsequently, cached messages will be cleared.
 * @method void setDropMode(integer $DropMode) Set Defaults to 0. valid only when Interrupt is false.
-0 indicates that messages with Interrupt set to false will be dropped when there is an interaction.
-Indicates that when there is an interaction in progress, messages with Interrupt set to false will not be dropped but cached and processed after the current interaction is completed.

Note: when DropMode is 1, the cache allows multiple messages. if an interruption occurs subsequently, cached messages will be cleared.
 * @method integer getPriority() Obtain Message priority of ServerPushText. 0 means interruptible. 1 means not interruptible.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example.
-Priority=1, Interrupt=true. specifies to Interrupt existing interaction and broadcast immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. waits for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

 * @method void setPriority(integer $Priority) Set Message priority of ServerPushText. 0 means interruptible. 1 means not interruptible.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example.
-Priority=1, Interrupt=true. specifies to Interrupt existing interaction and broadcast immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. waits for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

 * @method boolean getAddHistory() Obtain Specifies whether the text is added to the llm history context.
 * @method void setAddHistory(boolean $AddHistory) Set Specifies whether the text is added to the llm history context.
 */
class ServerPushText extends AbstractModel
{
    /**
     * @var string Specifies the server push broadcast text.
     */
    public $Text;

    /**
     * @var boolean Whether to allow the text to interrupt the robot's speaking.
     */
    public $Interrupt;

    /**
     * @var boolean Specifies whether to automatically close the dialogue task after broadcasting the text.
     */
    public $StopAfterPlay;

    /**
     * @var string Specifies the server push broadcast audio.
Format description: audio must be mono, sampling rate should be consistent with the corresponding TTS, and coded as a Base64 string.
Input rules: when the Audio field is provided, the system will not accept input in the Text field. the system will play the Audio content in the Audio field directly.
     */
    public $Audio;

    /**
     * @var integer Defaults to 0. valid only when Interrupt is false.
-0 indicates that messages with Interrupt set to false will be dropped when there is an interaction.
-Indicates that when there is an interaction in progress, messages with Interrupt set to false will not be dropped but cached and processed after the current interaction is completed.

Note: when DropMode is 1, the cache allows multiple messages. if an interruption occurs subsequently, cached messages will be cleared.
     */
    public $DropMode;

    /**
     * @var integer Message priority of ServerPushText. 0 means interruptible. 1 means not interruptible.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example.
-Priority=1, Interrupt=true. specifies to Interrupt existing interaction and broadcast immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. waits for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

     */
    public $Priority;

    /**
     * @var boolean Specifies whether the text is added to the llm history context.
     */
    public $AddHistory;

    /**
     * @param string $Text Specifies the server push broadcast text.
     * @param boolean $Interrupt Whether to allow the text to interrupt the robot's speaking.
     * @param boolean $StopAfterPlay Specifies whether to automatically close the dialogue task after broadcasting the text.
     * @param string $Audio Specifies the server push broadcast audio.
Format description: audio must be mono, sampling rate should be consistent with the corresponding TTS, and coded as a Base64 string.
Input rules: when the Audio field is provided, the system will not accept input in the Text field. the system will play the Audio content in the Audio field directly.
     * @param integer $DropMode Defaults to 0. valid only when Interrupt is false.
-0 indicates that messages with Interrupt set to false will be dropped when there is an interaction.
-Indicates that when there is an interaction in progress, messages with Interrupt set to false will not be dropped but cached and processed after the current interaction is completed.

Note: when DropMode is 1, the cache allows multiple messages. if an interruption occurs subsequently, cached messages will be cleared.
     * @param integer $Priority Message priority of ServerPushText. 0 means interruptible. 1 means not interruptible.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example.
-Priority=1, Interrupt=true. specifies to Interrupt existing interaction and broadcast immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. waits for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

     * @param boolean $AddHistory Specifies whether the text is added to the llm history context.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }

        if (array_key_exists("StopAfterPlay",$param) and $param["StopAfterPlay"] !== null) {
            $this->StopAfterPlay = $param["StopAfterPlay"];
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("DropMode",$param) and $param["DropMode"] !== null) {
            $this->DropMode = $param["DropMode"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("AddHistory",$param) and $param["AddHistory"] !== null) {
            $this->AddHistory = $param["AddHistory"];
        }
    }
}
