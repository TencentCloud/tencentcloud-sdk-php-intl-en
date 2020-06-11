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
 * User information, including when the user enters/exits a room, etc.
 *
 * @method string getRoomStr() Obtain Room ID of string type.
 * @method void setRoomStr(string $RoomStr) Set Room ID of string type.
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method integer getJoinTs() Obtain The time when the user enters the room
 * @method void setJoinTs(integer $JoinTs) Set The time when the user enters the room
 * @method integer getLeaveTs() Obtain The time when the user exits the room
 * @method void setLeaveTs(integer $LeaveTs) Set The time when the user exits the room
 * @method string getDeviceType() Obtain Device type
 * @method void setDeviceType(string $DeviceType) Set Device type
 * @method string getSdkVersion() Obtain SDK version number
 * @method void setSdkVersion(string $SdkVersion) Set SDK version number
 * @method string getClientIp() Obtain Client IP
 * @method void setClientIp(string $ClientIp) Set Client IP
 * @method boolean getFinished() Obtain Determine whether a user has left the room
 * @method void setFinished(boolean $Finished) Set Determine whether a user has left the room
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string Room ID of string type.
     */
    public $RoomStr;

    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var integer The time when the user enters the room
     */
    public $JoinTs;

    /**
     * @var integer The time when the user exits the room
     */
    public $LeaveTs;

    /**
     * @var string Device type
     */
    public $DeviceType;

    /**
     * @var string SDK version number
     */
    public $SdkVersion;

    /**
     * @var string Client IP
     */
    public $ClientIp;

    /**
     * @var boolean Determine whether a user has left the room
     */
    public $Finished;

    /**
     * @param string $RoomStr Room ID of string type.
     * @param string $UserId User ID
     * @param integer $JoinTs The time when the user enters the room
     * @param integer $LeaveTs The time when the user exits the room
     * @param string $DeviceType Device type
     * @param string $SdkVersion SDK version number
     * @param string $ClientIp Client IP
     * @param boolean $Finished Determine whether a user has left the room
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
        if (array_key_exists("RoomStr",$param) and $param["RoomStr"] !== null) {
            $this->RoomStr = $param["RoomStr"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("JoinTs",$param) and $param["JoinTs"] !== null) {
            $this->JoinTs = $param["JoinTs"];
        }

        if (array_key_exists("LeaveTs",$param) and $param["LeaveTs"] !== null) {
            $this->LeaveTs = $param["LeaveTs"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Finished",$param) and $param["Finished"] !== null) {
            $this->Finished = $param["Finished"];
        }
    }
}
