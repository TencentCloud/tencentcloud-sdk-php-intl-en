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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Member record information
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method integer getPresentTime() Obtain Online duration, in seconds
 * @method void setPresentTime(integer $PresentTime) Set Online duration, in seconds
 * @method integer getCamera() Obtain Whether the camera is enabled
 * @method void setCamera(integer $Camera) Set Whether the camera is enabled
 * @method integer getMic() Obtain Whether the mic is enabled
 * @method void setMic(integer $Mic) Set Whether the mic is enabled
 * @method integer getSilence() Obtain Whether the user is muted
 * @method void setSilence(integer $Silence) Set Whether the user is muted
 * @method integer getAnswerQuestions() Obtain Number of questions answered by the user
 * @method void setAnswerQuestions(integer $AnswerQuestions) Set Number of questions answered by the user
 * @method integer getHandUps() Obtain Number of hand raising times
 * @method void setHandUps(integer $HandUps) Set Number of hand raising times
 * @method integer getFirstJoinTimestamp() Obtain First time that the user entered the room, in UNIX timestamp format
 * @method void setFirstJoinTimestamp(integer $FirstJoinTimestamp) Set First time that the user entered the room, in UNIX timestamp format
 * @method integer getLastQuitTimestamp() Obtain Last time that the user left the room, in UNIX timestamp format
 * @method void setLastQuitTimestamp(integer $LastQuitTimestamp) Set Last time that the user left the room, in UNIX timestamp format
 * @method integer getRewords() Obtain Number of rewards received
 * @method void setRewords(integer $Rewords) Set Number of rewards received
 */
class MemberRecord extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var integer Online duration, in seconds
     */
    public $PresentTime;

    /**
     * @var integer Whether the camera is enabled
     */
    public $Camera;

    /**
     * @var integer Whether the mic is enabled
     */
    public $Mic;

    /**
     * @var integer Whether the user is muted
     */
    public $Silence;

    /**
     * @var integer Number of questions answered by the user
     */
    public $AnswerQuestions;

    /**
     * @var integer Number of hand raising times
     */
    public $HandUps;

    /**
     * @var integer First time that the user entered the room, in UNIX timestamp format
     */
    public $FirstJoinTimestamp;

    /**
     * @var integer Last time that the user left the room, in UNIX timestamp format
     */
    public $LastQuitTimestamp;

    /**
     * @var integer Number of rewards received
     */
    public $Rewords;

    /**
     * @param string $UserId User ID
     * @param string $UserName Username
     * @param integer $PresentTime Online duration, in seconds
     * @param integer $Camera Whether the camera is enabled
     * @param integer $Mic Whether the mic is enabled
     * @param integer $Silence Whether the user is muted
     * @param integer $AnswerQuestions Number of questions answered by the user
     * @param integer $HandUps Number of hand raising times
     * @param integer $FirstJoinTimestamp First time that the user entered the room, in UNIX timestamp format
     * @param integer $LastQuitTimestamp Last time that the user left the room, in UNIX timestamp format
     * @param integer $Rewords Number of rewards received
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PresentTime",$param) and $param["PresentTime"] !== null) {
            $this->PresentTime = $param["PresentTime"];
        }

        if (array_key_exists("Camera",$param) and $param["Camera"] !== null) {
            $this->Camera = $param["Camera"];
        }

        if (array_key_exists("Mic",$param) and $param["Mic"] !== null) {
            $this->Mic = $param["Mic"];
        }

        if (array_key_exists("Silence",$param) and $param["Silence"] !== null) {
            $this->Silence = $param["Silence"];
        }

        if (array_key_exists("AnswerQuestions",$param) and $param["AnswerQuestions"] !== null) {
            $this->AnswerQuestions = $param["AnswerQuestions"];
        }

        if (array_key_exists("HandUps",$param) and $param["HandUps"] !== null) {
            $this->HandUps = $param["HandUps"];
        }

        if (array_key_exists("FirstJoinTimestamp",$param) and $param["FirstJoinTimestamp"] !== null) {
            $this->FirstJoinTimestamp = $param["FirstJoinTimestamp"];
        }

        if (array_key_exists("LastQuitTimestamp",$param) and $param["LastQuitTimestamp"] !== null) {
            $this->LastQuitTimestamp = $param["LastQuitTimestamp"];
        }

        if (array_key_exists("Rewords",$param) and $param["Rewords"] !== null) {
            $this->Rewords = $param["Rewords"];
        }
    }
}
