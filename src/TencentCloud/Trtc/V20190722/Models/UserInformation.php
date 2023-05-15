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
 * The user information, including when the user entered/left the room.
 *
 * @method string getRoomStr() Obtain The room ID.
 * @method void setRoomStr(string $RoomStr) Set The room ID.
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method integer getJoinTs() Obtain The time when the user entered the room.
 * @method void setJoinTs(integer $JoinTs) Set The time when the user entered the room.
 * @method integer getLeaveTs() Obtain The time when the user left the room. If the user is still in the room, the current time will be returned.
 * @method void setLeaveTs(integer $LeaveTs) Set The time when the user left the room. If the user is still in the room, the current time will be returned.
 * @method string getDeviceType() Obtain The device type.
 * @method void setDeviceType(string $DeviceType) Set The device type.
 * @method string getSdkVersion() Obtain The SDK version number.
 * @method void setSdkVersion(string $SdkVersion) Set The SDK version number.
 * @method string getClientIp() Obtain The client IP address.
 * @method void setClientIp(string $ClientIp) Set The client IP address.
 * @method boolean getFinished() Obtain Whether a user has left the room.
 * @method void setFinished(boolean $Finished) Set Whether a user has left the room.
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string The room ID.
     */
    public $RoomStr;

    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var integer The time when the user entered the room.
     */
    public $JoinTs;

    /**
     * @var integer The time when the user left the room. If the user is still in the room, the current time will be returned.
     */
    public $LeaveTs;

    /**
     * @var string The device type.
     */
    public $DeviceType;

    /**
     * @var string The SDK version number.
     */
    public $SdkVersion;

    /**
     * @var string The client IP address.
     */
    public $ClientIp;

    /**
     * @var boolean Whether a user has left the room.
     */
    public $Finished;

    /**
     * @param string $RoomStr The room ID.
     * @param string $UserId The user ID.
     * @param integer $JoinTs The time when the user entered the room.
     * @param integer $LeaveTs The time when the user left the room. If the user is still in the room, the current time will be returned.
     * @param string $DeviceType The device type.
     * @param string $SdkVersion The SDK version number.
     * @param string $ClientIp The client IP address.
     * @param boolean $Finished Whether a user has left the room.
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
