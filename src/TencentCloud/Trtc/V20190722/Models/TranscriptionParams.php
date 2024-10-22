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
 * AI Transcription Params
 *
 * @method string getUserId() Obtain The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
 * @method void setUserId(string $UserId) Set The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
 * @method string getUserSig() Obtain The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
 * @method void setUserSig(string $UserSig) Set The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
 * @method integer getMaxIdleTime() Obtain If there is no streaming in the room for more than MaxIdleTime, the background will automatically close the task. The default value is 60s.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set If there is no streaming in the room for more than MaxIdleTime, the background will automatically close the task. The default value is 60s.
 * @method integer getTranscriptionMode() Obtain 1 means the robot subscribes to the stream of only one person, 0 means the robot subscribes to the stream of the entire room. If it is not filled in, the robot subscribes to the stream of the entire room by default.
 * @method void setTranscriptionMode(integer $TranscriptionMode) Set 1 means the robot subscribes to the stream of only one person, 0 means the robot subscribes to the stream of the entire room. If it is not filled in, the robot subscribes to the stream of the entire room by default.
 * @method string getTargetUserId() Obtain Required when TranscriptionMode is 1. The robot will only pull the stream of the userid and ignore other users in the room.
 * @method void setTargetUserId(string $TargetUserId) Set Required when TranscriptionMode is 1. The robot will only pull the stream of the userid and ignore other users in the room.
 */
class TranscriptionParams extends AbstractModel
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
     * @var integer If there is no streaming in the room for more than MaxIdleTime, the background will automatically close the task. The default value is 60s.
     */
    public $MaxIdleTime;

    /**
     * @var integer 1 means the robot subscribes to the stream of only one person, 0 means the robot subscribes to the stream of the entire room. If it is not filled in, the robot subscribes to the stream of the entire room by default.
     */
    public $TranscriptionMode;

    /**
     * @var string Required when TranscriptionMode is 1. The robot will only pull the stream of the userid and ignore other users in the room.
     */
    public $TargetUserId;

    /**
     * @param string $UserId The robot's UserId is used to enter a room and initiate tasks. [Note] This UserId cannot be repeated with the host viewer [UserId](https://cloud.tencent.com/document/product/647/46351#userid) in the current room. If multiple tasks are initiated in a room, the robot's UserId cannot be repeated, otherwise the previous task will be interrupted. The robot's UserId must be unique in the room.
     * @param string $UserSig The verification signature corresponding to the robot's UserId, that is, UserId and UserSig are equivalent to the robot's login password to enter the room. For the specific calculation method, please refer to the TRTC calculation [UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig) solution.
     * @param integer $MaxIdleTime If there is no streaming in the room for more than MaxIdleTime, the background will automatically close the task. The default value is 60s.
     * @param integer $TranscriptionMode 1 means the robot subscribes to the stream of only one person, 0 means the robot subscribes to the stream of the entire room. If it is not filled in, the robot subscribes to the stream of the entire room by default.
     * @param string $TargetUserId Required when TranscriptionMode is 1. The robot will only pull the stream of the userid and ignore other users in the room.
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

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("TranscriptionMode",$param) and $param["TranscriptionMode"] !== null) {
            $this->TranscriptionMode = $param["TranscriptionMode"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }
    }
}
