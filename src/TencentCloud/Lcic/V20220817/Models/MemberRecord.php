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
Used by actions: DescribeCurrentMemberList, DescribeRoomStatistics.
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
 * @method string getIPAddress() Obtain The user’s IP address.
 * @method void setIPAddress(string $IPAddress) Set The user’s IP address.
 * @method string getLocation() Obtain The user’s location.
 * @method void setLocation(string $Location) Set The user’s location.
 * @method integer getDevice() Obtain The user’s device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
 * @method void setDevice(integer $Device) Set The user’s device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
 * @method integer getPerMemberMicCount() Obtain The number of times a user turned their mic on.
 * @method void setPerMemberMicCount(integer $PerMemberMicCount) Set The number of times a user turned their mic on.
 * @method integer getPerMemberMessageCount() Obtain The number of messages sent by a user.
 * @method void setPerMemberMessageCount(integer $PerMemberMessageCount) Set The number of messages sent by a user.
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
     * @var string The user’s IP address.
     */
    public $IPAddress;

    /**
     * @var string The user’s location.
     */
    public $Location;

    /**
     * @var integer The user’s device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
     */
    public $Device;

    /**
     * @var integer The number of times a user turned their mic on.
     */
    public $PerMemberMicCount;

    /**
     * @var integer The number of messages sent by a user.
     */
    public $PerMemberMessageCount;

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
     * @param string $IPAddress The user’s IP address.
     * @param string $Location The user’s location.
     * @param integer $Device The user’s device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
     * @param integer $PerMemberMicCount The number of times a user turned their mic on.
     * @param integer $PerMemberMessageCount The number of messages sent by a user.
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

        if (array_key_exists("IPAddress",$param) and $param["IPAddress"] !== null) {
            $this->IPAddress = $param["IPAddress"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("PerMemberMicCount",$param) and $param["PerMemberMicCount"] !== null) {
            $this->PerMemberMicCount = $param["PerMemberMicCount"];
        }

        if (array_key_exists("PerMemberMessageCount",$param) and $param["PerMemberMessageCount"] !== null) {
            $this->PerMemberMessageCount = $param["PerMemberMessageCount"];
        }
    }
}
