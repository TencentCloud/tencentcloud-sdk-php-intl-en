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
 * The server controls the chatbot to broadcast the specified text.
 *
 * @method string getText() Obtain Server push broadcast text.
 * @method void setText(string $Text) Set Server push broadcast text.
 * @method boolean getInterrupt() Obtain Whether to allow the text to interrupt the robot's speaking.
 * @method void setInterrupt(boolean $Interrupt) Set Whether to allow the text to interrupt the robot's speaking.
 * @method boolean getStopAfterPlay() Obtain Broadcast the text and automatically close the dialogue task.
 * @method void setStopAfterPlay(boolean $StopAfterPlay) Set Broadcast the text and automatically close the dialogue task.
 * @method string getAudio() Obtain Server push broadcast audio.
Format description: audio must be mono, sampling rate must be consistent with the corresponding TTS sampling rate, and coded as a Base64 string.
Input rule: when the Audio field is provided, the system will not accept user-submitted input in the Text field. the system will play the Audio content in the Audio field directly.
 * @method void setAudio(string $Audio) Set Server push broadcast audio.
Format description: audio must be mono, sampling rate must be consistent with the corresponding TTS sampling rate, and coded as a Base64 string.
Input rule: when the Audio field is provided, the system will not accept user-submitted input in the Text field. the system will play the Audio content in the Audio field directly.
 * @method integer getDropMode() Obtain Defaults to 0. valid at that time only when Interrupt is false.
-0 means drop messages with Interrupt set to false during the occurrence of interaction.
-1 indicates that during the occurrence of an interaction, messages with Interrupt as false will not be dropped but cached, waiting to be processed when finished.

Note: if DropMode is 1, multiple messages can be cached. if an interruption occurs subsequently, the cache of messages will be cleared.
 * @method void setDropMode(integer $DropMode) Set Defaults to 0. valid at that time only when Interrupt is false.
-0 means drop messages with Interrupt set to false during the occurrence of interaction.
-1 indicates that during the occurrence of an interaction, messages with Interrupt as false will not be dropped but cached, waiting to be processed when finished.

Note: if DropMode is 1, multiple messages can be cached. if an interruption occurs subsequently, the cache of messages will be cleared.
 * @method integer getPriority() Obtain The message priority of ServerPushText. 0 means interruptible, 1 means not interruptible. currently only support 0. if you need to input 1, submit a ticket to contact us to grant permission.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example:.
-Priority=1, Interrupt=true, interrupts existing interaction and broadcasts immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. wait for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

 * @method void setPriority(integer $Priority) Set The message priority of ServerPushText. 0 means interruptible, 1 means not interruptible. currently only support 0. if you need to input 1, submit a ticket to contact us to grant permission.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example:.
-Priority=1, Interrupt=true, interrupts existing interaction and broadcasts immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. wait for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

 * @method boolean getAddHistory() Obtain Whether to add the text to the llm history context.
 * @method void setAddHistory(boolean $AddHistory) Set Whether to add the text to the llm history context.
 * @method string getMetaInfo() Obtain If filled, it will be bound to the subtitle and sent to the terminal. note that the content must be a json string.
 * @method void setMetaInfo(string $MetaInfo) Set If filled, it will be bound to the subtitle and sent to the terminal. note that the content must be a json string.
 */
class ServerPushText extends AbstractModel
{
    /**
     * @var string Server push broadcast text.
     */
    public $Text;

    /**
     * @var boolean Whether to allow the text to interrupt the robot's speaking.
     */
    public $Interrupt;

    /**
     * @var boolean Broadcast the text and automatically close the dialogue task.
     */
    public $StopAfterPlay;

    /**
     * @var string Server push broadcast audio.
Format description: audio must be mono, sampling rate must be consistent with the corresponding TTS sampling rate, and coded as a Base64 string.
Input rule: when the Audio field is provided, the system will not accept user-submitted input in the Text field. the system will play the Audio content in the Audio field directly.
     */
    public $Audio;

    /**
     * @var integer Defaults to 0. valid at that time only when Interrupt is false.
-0 means drop messages with Interrupt set to false during the occurrence of interaction.
-1 indicates that during the occurrence of an interaction, messages with Interrupt as false will not be dropped but cached, waiting to be processed when finished.

Note: if DropMode is 1, multiple messages can be cached. if an interruption occurs subsequently, the cache of messages will be cleared.
     */
    public $DropMode;

    /**
     * @var integer The message priority of ServerPushText. 0 means interruptible, 1 means not interruptible. currently only support 0. if you need to input 1, submit a ticket to contact us to grant permission.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example:.
-Priority=1, Interrupt=true, interrupts existing interaction and broadcasts immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. wait for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

     */
    public $Priority;

    /**
     * @var boolean Whether to add the text to the llm history context.
     */
    public $AddHistory;

    /**
     * @var string If filled, it will be bound to the subtitle and sent to the terminal. note that the content must be a json string.
     */
    public $MetaInfo;

    /**
     * @param string $Text Server push broadcast text.
     * @param boolean $Interrupt Whether to allow the text to interrupt the robot's speaking.
     * @param boolean $StopAfterPlay Broadcast the text and automatically close the dialogue task.
     * @param string $Audio Server push broadcast audio.
Format description: audio must be mono, sampling rate must be consistent with the corresponding TTS sampling rate, and coded as a Base64 string.
Input rule: when the Audio field is provided, the system will not accept user-submitted input in the Text field. the system will play the Audio content in the Audio field directly.
     * @param integer $DropMode Defaults to 0. valid at that time only when Interrupt is false.
-0 means drop messages with Interrupt set to false during the occurrence of interaction.
-1 indicates that during the occurrence of an interaction, messages with Interrupt as false will not be dropped but cached, waiting to be processed when finished.

Note: if DropMode is 1, multiple messages can be cached. if an interruption occurs subsequently, the cache of messages will be cleared.
     * @param integer $Priority The message priority of ServerPushText. 0 means interruptible, 1 means not interruptible. currently only support 0. if you need to input 1, submit a ticket to contact us to grant permission.
Note: after receiving a message with Priority=1, any other messages will be ignored (including messages with Priority=1) until the message processing of Priority=1 is complete. this field can be used together with the Interrupt and DropMode fields.
Example:.
-Priority=1, Interrupt=true, interrupts existing interaction and broadcasts immediately. the broadcast will not be interrupted during the process.
-Priority=1, Interrupt=false, DropMode=1. wait for the current interaction to complete before broadcasting. the broadcast will not be interrupted during the process.

     * @param boolean $AddHistory Whether to add the text to the llm history context.
     * @param string $MetaInfo If filled, it will be bound to the subtitle and sent to the terminal. note that the content must be a json string.
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

        if (array_key_exists("MetaInfo",$param) and $param["MetaInfo"] !== null) {
            $this->MetaInfo = $param["MetaInfo"];
        }
    }
}
