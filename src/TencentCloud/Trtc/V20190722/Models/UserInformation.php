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
 * 
 *
 * @method string getRoomStr() Obtain 
 * @method void setRoomStr(string $RoomStr) Set 
 * @method string getUserId() Obtain 
 * @method void setUserId(string $UserId) Set 
 * @method integer getJoinTs() Obtain 
 * @method void setJoinTs(integer $JoinTs) Set 
 * @method integer getLeaveTs() Obtain The time when the user exits the room. If the user is still in the room, the current time will be returned
 * @method void setLeaveTs(integer $LeaveTs) Set The time when the user exits the room. If the user is still in the room, the current time will be returned
 * @method string getDeviceType() Obtain 
 * @method void setDeviceType(string $DeviceType) Set 
 * @method string getSdkVersion() Obtain 
 * @method void setSdkVersion(string $SdkVersion) Set 
 * @method string getClientIp() Obtain 
 * @method void setClientIp(string $ClientIp) Set 
 * @method boolean getFinished() Obtain 
 * @method void setFinished(boolean $Finished) Set 
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string 
     */
    public $RoomStr;

    /**
     * @var string 
     */
    public $UserId;

    /**
     * @var integer 
     */
    public $JoinTs;

    /**
     * @var integer The time when the user exits the room. If the user is still in the room, the current time will be returned
     */
    public $LeaveTs;

    /**
     * @var string 
     */
    public $DeviceType;

    /**
     * @var string 
     */
    public $SdkVersion;

    /**
     * @var string 
     */
    public $ClientIp;

    /**
     * @var boolean 
     */
    public $Finished;

    /**
     * @param string $RoomStr 
     * @param string $UserId 
     * @param integer $JoinTs 
     * @param integer $LeaveTs The time when the user exits the room. If the user is still in the room, the current time will be returned
     * @param string $DeviceType 
     * @param string $SdkVersion 
     * @param string $ClientIp 
     * @param boolean $Finished 
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
