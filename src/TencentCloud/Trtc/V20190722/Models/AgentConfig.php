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
 * Bot parameters.
 *
 * @method string getUserId() Obtain The robot's UserId is used to enter a room and initiate a task. note that this UserId cannot be duplicated with the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple tasks are initiated in a room, the robot's UserId cannot be mutually duplicated. otherwise, the previous task will be interrupted. ensure the robot's UserId is unique in the room.
 * @method void setUserId(string $UserId) Set The robot's UserId is used to enter a room and initiate a task. note that this UserId cannot be duplicated with the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple tasks are initiated in a room, the robot's UserId cannot be mutually duplicated. otherwise, the previous task will be interrupted. ensure the robot's UserId is unique in the room.
 * @method string getUserSig() Obtain Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. for specific calculation methods, see TRTC solution for calculating.
 * @method void setUserSig(string $UserSig) Set Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. for specific calculation methods, see TRTC solution for calculating.
 * @method string getTargetUserId() Obtain UserId for robot stream pulling. after fill, the robot performs stream pulling and processes in real time.
 * @method void setTargetUserId(string $TargetUserId) Set UserId for robot stream pulling. after fill, the robot performs stream pulling and processes in real time.
 * @method integer getMaxIdleTime() Obtain Exceeding MaxIdleTime in the room with no streaming automatically shuts down the backend task. default value is 60s.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set Exceeding MaxIdleTime in the room with no streaming automatically shuts down the backend task. default value is 60s.
 * @method string getWelcomeMessage() Obtain Robot'S greeting.
 * @method void setWelcomeMessage(string $WelcomeMessage) Set Robot'S greeting.
 * @method integer getInterruptMode() Obtain Intelligent interruption mode, defaults to 0. 0 means server-side automatic interruption. 1 means the server does not interrupt, and the client sends an interruption signal to perform interruption.
 * @method void setInterruptMode(integer $InterruptMode) Set Intelligent interruption mode, defaults to 0. 0 means server-side automatic interruption. 1 means the server does not interrupt, and the client sends an interruption signal to perform interruption.
 * @method integer getInterruptSpeechDuration() Obtain Used when InterruptMode is 0, in milliseconds, defaults to 500ms. indicates the server will interrupt when it detects continuous voice for InterruptSpeechDuration milliseconds.
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) Set Used when InterruptMode is 0, in milliseconds, defaults to 500ms. indicates the server will interrupt when it detects continuous voice for InterruptSpeechDuration milliseconds.
 * @method integer getTurnDetectionMode() Obtain Controls the trigger mode for a new dialogue. default is 0.
-0 means a new dialogue is automatically triggered when the server detects a complete sentence through automatic speech recognition.
-1 indicates the client determines whether to manually send a chat signaling trigger for a new dialogue upon receiving the caption message.
 * @method void setTurnDetectionMode(integer $TurnDetectionMode) Set Controls the trigger mode for a new dialogue. default is 0.
-0 means a new dialogue is automatically triggered when the server detects a complete sentence through automatic speech recognition.
-1 indicates the client determines whether to manually send a chat signaling trigger for a new dialogue upon receiving the caption message.
 * @method boolean getFilterOneWord() Obtain Whether to filter out sentences where the user only says one word. true indicates filtering, false indicates no filtering. default value is true.
 * @method void setFilterOneWord(boolean $FilterOneWord) Set Whether to filter out sentences where the user only says one word. true indicates filtering, false indicates no filtering. default value is true.
 * @method integer getWelcomeMessagePriority() Obtain Welcome message priority. valid values: 0 (default), 1 (high priority). high priority messages cannot be interrupted.
 * @method void setWelcomeMessagePriority(integer $WelcomeMessagePriority) Set Welcome message priority. valid values: 0 (default), 1 (high priority). high priority messages cannot be interrupted.
 * @method integer getFilterBracketsContent() Obtain For filtering LLM return content, do not play the content in brackets.
Chinese bracket ().
2: english parentheses.
3: chinese square brackets [].
4: english square brackets [].
5: english curly braces {}.
Empty by default, means no filtering.
 * @method void setFilterBracketsContent(integer $FilterBracketsContent) Set For filtering LLM return content, do not play the content in brackets.
Chinese bracket ().
2: english parentheses.
3: chinese square brackets [].
4: english square brackets [].
5: english curly braces {}.
Empty by default, means no filtering.
 * @method AmbientSound getAmbientSound() Obtain Ambient sound settings.
 * @method void setAmbientSound(AmbientSound $AmbientSound) Set Ambient sound settings.
 * @method VoicePrint getVoicePrint() Obtain Voiceprint configuration.
 * @method void setVoicePrint(VoicePrint $VoicePrint) Set Voiceprint configuration.
 * @method TurnDetection getTurnDetection() Obtain Semantic sentence segmentation detection.
 * @method void setTurnDetection(TurnDetection $TurnDetection) Set Semantic sentence segmentation detection.
 * @method integer getSubtitleMode() Obtain Robot subtitle display mode.
-0 means display as soon as possible without synchronizing with audio playback. at this point, subtitles are fully delivered, and subsequent subtitles will include previous ones.
-1 indicates sentence-level real-time display, which synchronizes with audio playback. only when the current sentence's corresponding audio playback is complete will the next subtitle be delivered. at this point, subtitles are delivered incrementally, and the terminal needs to concatenate the leading and trailing subtitles to form a complete subtitle.
 * @method void setSubtitleMode(integer $SubtitleMode) Set Robot subtitle display mode.
-0 means display as soon as possible without synchronizing with audio playback. at this point, subtitles are fully delivered, and subsequent subtitles will include previous ones.
-1 indicates sentence-level real-time display, which synchronizes with audio playback. only when the current sentence's corresponding audio playback is complete will the next subtitle be delivered. at this point, subtitles are delivered incrementally, and the terminal needs to concatenate the leading and trailing subtitles to form a complete subtitle.
 * @method array getInterruptWordList() Obtain Interruption word list. during AI speaking, only speak words in the list to interrupt AI speaking.
Note: interrupt words avoid triggering AI reply.
 * @method void setInterruptWordList(array $InterruptWordList) Set Interruption word list. during AI speaking, only speak words in the list to interrupt AI speaking.
Note: interrupt words avoid triggering AI reply.
 */
class AgentConfig extends AbstractModel
{
    /**
     * @var string The robot's UserId is used to enter a room and initiate a task. note that this UserId cannot be duplicated with the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple tasks are initiated in a room, the robot's UserId cannot be mutually duplicated. otherwise, the previous task will be interrupted. ensure the robot's UserId is unique in the room.
     */
    public $UserId;

    /**
     * @var string Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. for specific calculation methods, see TRTC solution for calculating.
     */
    public $UserSig;

    /**
     * @var string UserId for robot stream pulling. after fill, the robot performs stream pulling and processes in real time.
     */
    public $TargetUserId;

    /**
     * @var integer Exceeding MaxIdleTime in the room with no streaming automatically shuts down the backend task. default value is 60s.
     */
    public $MaxIdleTime;

    /**
     * @var string Robot'S greeting.
     */
    public $WelcomeMessage;

    /**
     * @var integer Intelligent interruption mode, defaults to 0. 0 means server-side automatic interruption. 1 means the server does not interrupt, and the client sends an interruption signal to perform interruption.
     */
    public $InterruptMode;

    /**
     * @var integer Used when InterruptMode is 0, in milliseconds, defaults to 500ms. indicates the server will interrupt when it detects continuous voice for InterruptSpeechDuration milliseconds.
     */
    public $InterruptSpeechDuration;

    /**
     * @var integer Controls the trigger mode for a new dialogue. default is 0.
-0 means a new dialogue is automatically triggered when the server detects a complete sentence through automatic speech recognition.
-1 indicates the client determines whether to manually send a chat signaling trigger for a new dialogue upon receiving the caption message.
     */
    public $TurnDetectionMode;

    /**
     * @var boolean Whether to filter out sentences where the user only says one word. true indicates filtering, false indicates no filtering. default value is true.
     */
    public $FilterOneWord;

    /**
     * @var integer Welcome message priority. valid values: 0 (default), 1 (high priority). high priority messages cannot be interrupted.
     */
    public $WelcomeMessagePriority;

    /**
     * @var integer For filtering LLM return content, do not play the content in brackets.
Chinese bracket ().
2: english parentheses.
3: chinese square brackets [].
4: english square brackets [].
5: english curly braces {}.
Empty by default, means no filtering.
     */
    public $FilterBracketsContent;

    /**
     * @var AmbientSound Ambient sound settings.
     */
    public $AmbientSound;

    /**
     * @var VoicePrint Voiceprint configuration.
     */
    public $VoicePrint;

    /**
     * @var TurnDetection Semantic sentence segmentation detection.
     */
    public $TurnDetection;

    /**
     * @var integer Robot subtitle display mode.
-0 means display as soon as possible without synchronizing with audio playback. at this point, subtitles are fully delivered, and subsequent subtitles will include previous ones.
-1 indicates sentence-level real-time display, which synchronizes with audio playback. only when the current sentence's corresponding audio playback is complete will the next subtitle be delivered. at this point, subtitles are delivered incrementally, and the terminal needs to concatenate the leading and trailing subtitles to form a complete subtitle.
     */
    public $SubtitleMode;

    /**
     * @var array Interruption word list. during AI speaking, only speak words in the list to interrupt AI speaking.
Note: interrupt words avoid triggering AI reply.
     */
    public $InterruptWordList;

    /**
     * @param string $UserId The robot's UserId is used to enter a room and initiate a task. note that this UserId cannot be duplicated with the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple tasks are initiated in a room, the robot's UserId cannot be mutually duplicated. otherwise, the previous task will be interrupted. ensure the robot's UserId is unique in the room.
     * @param string $UserSig Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. for specific calculation methods, see TRTC solution for calculating.
     * @param string $TargetUserId UserId for robot stream pulling. after fill, the robot performs stream pulling and processes in real time.
     * @param integer $MaxIdleTime Exceeding MaxIdleTime in the room with no streaming automatically shuts down the backend task. default value is 60s.
     * @param string $WelcomeMessage Robot'S greeting.
     * @param integer $InterruptMode Intelligent interruption mode, defaults to 0. 0 means server-side automatic interruption. 1 means the server does not interrupt, and the client sends an interruption signal to perform interruption.
     * @param integer $InterruptSpeechDuration Used when InterruptMode is 0, in milliseconds, defaults to 500ms. indicates the server will interrupt when it detects continuous voice for InterruptSpeechDuration milliseconds.
     * @param integer $TurnDetectionMode Controls the trigger mode for a new dialogue. default is 0.
-0 means a new dialogue is automatically triggered when the server detects a complete sentence through automatic speech recognition.
-1 indicates the client determines whether to manually send a chat signaling trigger for a new dialogue upon receiving the caption message.
     * @param boolean $FilterOneWord Whether to filter out sentences where the user only says one word. true indicates filtering, false indicates no filtering. default value is true.
     * @param integer $WelcomeMessagePriority Welcome message priority. valid values: 0 (default), 1 (high priority). high priority messages cannot be interrupted.
     * @param integer $FilterBracketsContent For filtering LLM return content, do not play the content in brackets.
Chinese bracket ().
2: english parentheses.
3: chinese square brackets [].
4: english square brackets [].
5: english curly braces {}.
Empty by default, means no filtering.
     * @param AmbientSound $AmbientSound Ambient sound settings.
     * @param VoicePrint $VoicePrint Voiceprint configuration.
     * @param TurnDetection $TurnDetection Semantic sentence segmentation detection.
     * @param integer $SubtitleMode Robot subtitle display mode.
-0 means display as soon as possible without synchronizing with audio playback. at this point, subtitles are fully delivered, and subsequent subtitles will include previous ones.
-1 indicates sentence-level real-time display, which synchronizes with audio playback. only when the current sentence's corresponding audio playback is complete will the next subtitle be delivered. at this point, subtitles are delivered incrementally, and the terminal needs to concatenate the leading and trailing subtitles to form a complete subtitle.
     * @param array $InterruptWordList Interruption word list. during AI speaking, only speak words in the list to interrupt AI speaking.
Note: interrupt words avoid triggering AI reply.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
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

        if (array_key_exists("TurnDetectionMode",$param) and $param["TurnDetectionMode"] !== null) {
            $this->TurnDetectionMode = $param["TurnDetectionMode"];
        }

        if (array_key_exists("FilterOneWord",$param) and $param["FilterOneWord"] !== null) {
            $this->FilterOneWord = $param["FilterOneWord"];
        }

        if (array_key_exists("WelcomeMessagePriority",$param) and $param["WelcomeMessagePriority"] !== null) {
            $this->WelcomeMessagePriority = $param["WelcomeMessagePriority"];
        }

        if (array_key_exists("FilterBracketsContent",$param) and $param["FilterBracketsContent"] !== null) {
            $this->FilterBracketsContent = $param["FilterBracketsContent"];
        }

        if (array_key_exists("AmbientSound",$param) and $param["AmbientSound"] !== null) {
            $this->AmbientSound = new AmbientSound();
            $this->AmbientSound->deserialize($param["AmbientSound"]);
        }

        if (array_key_exists("VoicePrint",$param) and $param["VoicePrint"] !== null) {
            $this->VoicePrint = new VoicePrint();
            $this->VoicePrint->deserialize($param["VoicePrint"]);
        }

        if (array_key_exists("TurnDetection",$param) and $param["TurnDetection"] !== null) {
            $this->TurnDetection = new TurnDetection();
            $this->TurnDetection->deserialize($param["TurnDetection"]);
        }

        if (array_key_exists("SubtitleMode",$param) and $param["SubtitleMode"] !== null) {
            $this->SubtitleMode = $param["SubtitleMode"];
        }

        if (array_key_exists("InterruptWordList",$param) and $param["InterruptWordList"] !== null) {
            $this->InterruptWordList = $param["InterruptWordList"];
        }
    }
}
