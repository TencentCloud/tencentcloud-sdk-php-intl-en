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
 * RemoveUser request structure.
 *
 * @method integer getSdkAppId() Obtain `SDKAppId` of TRTC.
 * @method void setSdkAppId(integer $SdkAppId) Set `SDKAppId` of TRTC.
 * @method integer getRoomId() Obtain Room number.
 * @method void setRoomId(integer $RoomId) Set Room number.
 * @method array getUserIds() Obtain List of up to 10 users to be removed.
 * @method void setUserIds(array $UserIds) Set List of up to 10 users to be removed.
 */
class RemoveUserRequest extends AbstractModel
{
    /**
     * @var integer `SDKAppId` of TRTC.
     */
    public $SdkAppId;

    /**
     * @var integer Room number.
     */
    public $RoomId;

    /**
     * @var array List of up to 10 users to be removed.
     */
    public $UserIds;

    /**
     * @param integer $SdkAppId `SDKAppId` of TRTC.
     * @param integer $RoomId Room number.
     * @param array $UserIds List of up to 10 users to be removed.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
