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
 * AI transcribe parameters.
 *
 * @method string getUserId() Obtain The transcription robot's UserId is used to enter the room and trigger a transcription task. note that this UserId cannot be the same as the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple transcription tasks are initiated in a room, the robot's UserId must also be unique to avoid interrupting the previous task. ensure the transcription robot's UserId is unique in the room.
 * @method void setUserId(string $UserId) Set The transcription robot's UserId is used to enter the room and trigger a transcription task. note that this UserId cannot be the same as the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple transcription tasks are initiated in a room, the robot's UserId must also be unique to avoid interrupting the previous task. ensure the transcription robot's UserId is unique in the room.
 * @method string getUserSig() Obtain Verification signature corresponding to the transcription bot's UserId, namely, the UserId and UserSig serve as the login password for the transcription bot to enter the room. for specific calculation methods, see TRTC solution for calculating.
 * @method void setUserSig(string $UserSig) Set Verification signature corresponding to the transcription bot's UserId, namely, the UserId and UserSig serve as the login password for the transcription bot to enter the room. for specific calculation methods, see TRTC solution for calculating.
 * @method integer getMaxIdleTime() Obtain After all push users exit the room and exceed MaxIdleTime seconds, the backend automation shuts down the transcription task. default value is 60s.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set After all push users exit the room and exceed MaxIdleTime seconds, the backend automation shuts down the transcription task. default value is 60s.
 * @method integer getTranscriptionMode() Obtain 1 means the robot subscribes to the stream of an individual, and 0 means the robot subscribes to the stream of the entire room. if left empty, it defaults to subscribing to the stream of the entire room.
 * @method void setTranscriptionMode(integer $TranscriptionMode) Set 1 means the robot subscribes to the stream of an individual, and 0 means the robot subscribes to the stream of the entire room. if left empty, it defaults to subscribing to the stream of the entire room.
 * @method string getTargetUserId() Obtain Required when TranscriptionMode is 1, the robot only pulls streams from this userid and ignores other users in the room.
 * @method void setTargetUserId(string $TargetUserId) Set Required when TranscriptionMode is 1, the robot only pulls streams from this userid and ignores other users in the room.
 * @method VoicePrint getVoicePrint() Obtain Voiceprint configuration.
 * @method void setVoicePrint(VoicePrint $VoicePrint) Set Voiceprint configuration.
 * @method TurnDetection getTurnDetection() Obtain Semantic sentence segmentation detection.
 * @method void setTurnDetection(TurnDetection $TurnDetection) Set Semantic sentence segmentation detection.
 */
class TranscriptionParams extends AbstractModel
{
    /**
     * @var string The transcription robot's UserId is used to enter the room and trigger a transcription task. note that this UserId cannot be the same as the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple transcription tasks are initiated in a room, the robot's UserId must also be unique to avoid interrupting the previous task. ensure the transcription robot's UserId is unique in the room.
     */
    public $UserId;

    /**
     * @var string Verification signature corresponding to the transcription bot's UserId, namely, the UserId and UserSig serve as the login password for the transcription bot to enter the room. for specific calculation methods, see TRTC solution for calculating.
     */
    public $UserSig;

    /**
     * @var integer After all push users exit the room and exceed MaxIdleTime seconds, the backend automation shuts down the transcription task. default value is 60s.
     */
    public $MaxIdleTime;

    /**
     * @var integer 1 means the robot subscribes to the stream of an individual, and 0 means the robot subscribes to the stream of the entire room. if left empty, it defaults to subscribing to the stream of the entire room.
     */
    public $TranscriptionMode;

    /**
     * @var string Required when TranscriptionMode is 1, the robot only pulls streams from this userid and ignores other users in the room.
     */
    public $TargetUserId;

    /**
     * @var VoicePrint Voiceprint configuration.
     */
    public $VoicePrint;

    /**
     * @var TurnDetection Semantic sentence segmentation detection.
     */
    public $TurnDetection;

    /**
     * @param string $UserId The transcription robot's UserId is used to enter the room and trigger a transcription task. note that this UserId cannot be the same as the host or audience [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#UserId) in the current room. if multiple transcription tasks are initiated in a room, the robot's UserId must also be unique to avoid interrupting the previous task. ensure the transcription robot's UserId is unique in the room.
     * @param string $UserSig Verification signature corresponding to the transcription bot's UserId, namely, the UserId and UserSig serve as the login password for the transcription bot to enter the room. for specific calculation methods, see TRTC solution for calculating.
     * @param integer $MaxIdleTime After all push users exit the room and exceed MaxIdleTime seconds, the backend automation shuts down the transcription task. default value is 60s.
     * @param integer $TranscriptionMode 1 means the robot subscribes to the stream of an individual, and 0 means the robot subscribes to the stream of the entire room. if left empty, it defaults to subscribing to the stream of the entire room.
     * @param string $TargetUserId Required when TranscriptionMode is 1, the robot only pulls streams from this userid and ignores other users in the room.
     * @param VoicePrint $VoicePrint Voiceprint configuration.
     * @param TurnDetection $TurnDetection Semantic sentence segmentation detection.
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

        if (array_key_exists("VoicePrint",$param) and $param["VoicePrint"] !== null) {
            $this->VoicePrint = new VoicePrint();
            $this->VoicePrint->deserialize($param["VoicePrint"]);
        }

        if (array_key_exists("TurnDetection",$param) and $param["TurnDetection"] !== null) {
            $this->TurnDetection = new TurnDetection();
            $this->TurnDetection->deserialize($param["TurnDetection"]);
        }
    }
}
