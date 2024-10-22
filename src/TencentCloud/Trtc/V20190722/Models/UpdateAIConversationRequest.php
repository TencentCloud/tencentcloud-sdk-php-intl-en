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
 * UpdateAIConversation request structure.
 *
 * @method string getTaskId() Obtain Task Unique ID
 * @method void setTaskId(string $TaskId) Set Task Unique ID
 * @method string getWelcomeMessage() Obtain If you do not fill in the form, no update will be performed. Welcome message from the robot
 * @method void setWelcomeMessage(string $WelcomeMessage) Set If you do not fill in the form, no update will be performed. Welcome message from the robot
 * @method integer getInterruptMode() Obtain If not filled in, no update will be performed. Intelligent interruption mode, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
 * @method void setInterruptMode(integer $InterruptMode) Set If not filled in, no update will be performed. Intelligent interruption mode, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
 * @method integer getInterruptSpeechDuration() Obtain If not filled in, no update will be performed. Used when InterruptMode is 0, the unit is milliseconds, and the default is 500ms. It means that the server will interrupt when it detects a voice that lasts for InterruptSpeechDuration milliseconds.
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) Set If not filled in, no update will be performed. Used when InterruptMode is 0, the unit is milliseconds, and the default is 500ms. It means that the server will interrupt when it detects a voice that lasts for InterruptSpeechDuration milliseconds.
 * @method string getLLMConfig() Obtain If not filled in, no update will be performed. For LLM configuration, see the StartAIConversation API for details.
 * @method void setLLMConfig(string $LLMConfig) Set If not filled in, no update will be performed. For LLM configuration, see the StartAIConversation API for details.
 * @method string getTTSConfig() Obtain If not filled in, no update will be performed. For TTS configuration, see the StartAIConversation API for details.
 * @method void setTTSConfig(string $TTSConfig) Set If not filled in, no update will be performed. For TTS configuration, see the StartAIConversation API for details.
 */
class UpdateAIConversationRequest extends AbstractModel
{
    /**
     * @var string Task Unique ID
     */
    public $TaskId;

    /**
     * @var string If you do not fill in the form, no update will be performed. Welcome message from the robot
     */
    public $WelcomeMessage;

    /**
     * @var integer If not filled in, no update will be performed. Intelligent interruption mode, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
     */
    public $InterruptMode;

    /**
     * @var integer If not filled in, no update will be performed. Used when InterruptMode is 0, the unit is milliseconds, and the default is 500ms. It means that the server will interrupt when it detects a voice that lasts for InterruptSpeechDuration milliseconds.
     */
    public $InterruptSpeechDuration;

    /**
     * @var string If not filled in, no update will be performed. For LLM configuration, see the StartAIConversation API for details.
     */
    public $LLMConfig;

    /**
     * @var string If not filled in, no update will be performed. For TTS configuration, see the StartAIConversation API for details.
     */
    public $TTSConfig;

    /**
     * @param string $TaskId Task Unique ID
     * @param string $WelcomeMessage If you do not fill in the form, no update will be performed. Welcome message from the robot
     * @param integer $InterruptMode If not filled in, no update will be performed. Intelligent interruption mode, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
     * @param integer $InterruptSpeechDuration If not filled in, no update will be performed. Used when InterruptMode is 0, the unit is milliseconds, and the default is 500ms. It means that the server will interrupt when it detects a voice that lasts for InterruptSpeechDuration milliseconds.
     * @param string $LLMConfig If not filled in, no update will be performed. For LLM configuration, see the StartAIConversation API for details.
     * @param string $TTSConfig If not filled in, no update will be performed. For TTS configuration, see the StartAIConversation API for details.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }

        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = $param["LLMConfig"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = $param["TTSConfig"];
        }
    }
}
