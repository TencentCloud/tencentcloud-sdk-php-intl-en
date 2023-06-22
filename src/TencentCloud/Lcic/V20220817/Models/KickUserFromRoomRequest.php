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
 * KickUserFromRoom request structure.
 *
 * @method integer getRoomId() Obtain The room ID.
 * @method void setRoomId(integer $RoomId) Set The room ID.
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method string getUserId() Obtain The ID of the user to be removed.
 * @method void setUserId(string $UserId) Set The ID of the user to be removed.
 * @method integer getKickType() Obtain The removal type: 
`1`: Keep the user out temporarily. The `Duration` parameter specifies the ban duration, during which the user is banned from entering the room. 
`2`: Remove the user permanently.
 * @method void setKickType(integer $KickType) Set The removal type: 
`1`: Keep the user out temporarily. The `Duration` parameter specifies the ban duration, during which the user is banned from entering the room. 
`2`: Remove the user permanently.
 * @method integer getDuration() Obtain The ban duration (seconds). This parameter is valid if `KickType` is `1`. The default value is `0`.
 * @method void setDuration(integer $Duration) Set The ban duration (seconds). This parameter is valid if `KickType` is `1`. The default value is `0`.
 */
class KickUserFromRoomRequest extends AbstractModel
{
    /**
     * @var integer The room ID.
     */
    public $RoomId;

    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var string The ID of the user to be removed.
     */
    public $UserId;

    /**
     * @var integer The removal type: 
`1`: Keep the user out temporarily. The `Duration` parameter specifies the ban duration, during which the user is banned from entering the room. 
`2`: Remove the user permanently.
     */
    public $KickType;

    /**
     * @var integer The ban duration (seconds). This parameter is valid if `KickType` is `1`. The default value is `0`.
     */
    public $Duration;

    /**
     * @param integer $RoomId The room ID.
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param string $UserId The ID of the user to be removed.
     * @param integer $KickType The removal type: 
`1`: Keep the user out temporarily. The `Duration` parameter specifies the ban duration, during which the user is banned from entering the room. 
`2`: Remove the user permanently.
     * @param integer $Duration The ban duration (seconds). This parameter is valid if `KickType` is `1`. The default value is `0`.
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("KickType",$param) and $param["KickType"] !== null) {
            $this->KickType = $param["KickType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
