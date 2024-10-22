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
 * Robot parameters
 *
 * @method string getUserId() Obtain The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
 * @method void setUserId(string $UserId) Set The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
 * @method string getUserSig() Obtain The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
 * @method void setUserSig(string $UserSig) Set The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
 * @method string getTargetUserId() Obtain The UserId of the robot pulling the media stream. After filling in, the robot will pull the media stream of the UserId for real-time processing
 * @method void setTargetUserId(string $TargetUserId) Set The UserId of the robot pulling the media stream. After filling in, the robot will pull the media stream of the UserId for real-time processing
 * @method integer getMaxIdleTime() Obtain If there is no streaming in the room for more than MaxIdleTime, the Service will automatically close the task. The default value is 60s.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set If there is no streaming in the room for more than MaxIdleTime, the Service will automatically close the task. The default value is 60s.
 * @method string getWelcomeMessage() Obtain Robot's welcome message
 * @method void setWelcomeMessage(string $WelcomeMessage) Set Robot's welcome message
 * @method integer getInterruptMode() Obtain Intelligent interruption mode, the default value is 0, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
 * @method void setInterruptMode(integer $InterruptMode) Set Intelligent interruption mode, the default value is 0, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
 * @method integer getInterruptSpeechDuration() Obtain Used when InterruptMode is 0, in milliseconds, with a default value of 500ms. This means that the server will interrupt when it detects a human voice that lasts for InterruptSpeechDuration milliseconds.
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) Set Used when InterruptMode is 0, in milliseconds, with a default value of 500ms. This means that the server will interrupt when it detects a human voice that lasts for InterruptSpeechDuration milliseconds.
 */
class AgentConfig extends AbstractModel
{
    /**
     * @var string The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
     */
    public $UserId;

    /**
     * @var string The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
     */
    public $UserSig;

    /**
     * @var string The UserId of the robot pulling the media stream. After filling in, the robot will pull the media stream of the UserId for real-time processing
     */
    public $TargetUserId;

    /**
     * @var integer If there is no streaming in the room for more than MaxIdleTime, the Service will automatically close the task. The default value is 60s.
     */
    public $MaxIdleTime;

    /**
     * @var string Robot's welcome message
     */
    public $WelcomeMessage;

    /**
     * @var integer Intelligent interruption mode, the default value is 0, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
     */
    public $InterruptMode;

    /**
     * @var integer Used when InterruptMode is 0, in milliseconds, with a default value of 500ms. This means that the server will interrupt when it detects a human voice that lasts for InterruptSpeechDuration milliseconds.
     */
    public $InterruptSpeechDuration;

    /**
     * @param string $UserId The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
     * @param string $UserSig The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
     * @param string $TargetUserId The UserId of the robot pulling the media stream. After filling in, the robot will pull the media stream of the UserId for real-time processing
     * @param integer $MaxIdleTime If there is no streaming in the room for more than MaxIdleTime, the Service will automatically close the task. The default value is 60s.
     * @param string $WelcomeMessage Robot's welcome message
     * @param integer $InterruptMode Intelligent interruption mode, the default value is 0, 0 means the server automatically interrupts, 1 means the server does not interrupt, and the client sends an interrupt signal to interrupt
     * @param integer $InterruptSpeechDuration Used when InterruptMode is 0, in milliseconds, with a default value of 500ms. This means that the server will interrupt when it detects a human voice that lasts for InterruptSpeechDuration milliseconds.
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
    }
}
