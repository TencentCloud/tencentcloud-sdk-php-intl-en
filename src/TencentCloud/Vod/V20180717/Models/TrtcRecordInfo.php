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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The TRTC recording information.
 *
 * @method integer getSdkAppId() Obtain The TRTC application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set The TRTC application ID.
 * @method string getRoomId() Obtain The TRTC room ID.
 * @method void setRoomId(string $RoomId) Set The TRTC room ID.
 * @method string getTaskId() Obtain The recording task ID.
 * @method void setTaskId(string $TaskId) Set The recording task ID.
 * @method array getUserIds() Obtain The IDs of users whose streams are mixed.
 * @method void setUserIds(array $UserIds) Set The IDs of users whose streams are mixed.
 */
class TrtcRecordInfo extends AbstractModel
{
    /**
     * @var integer The TRTC application ID.
     */
    public $SdkAppId;

    /**
     * @var string The TRTC room ID.
     */
    public $RoomId;

    /**
     * @var string The recording task ID.
     */
    public $TaskId;

    /**
     * @var array The IDs of users whose streams are mixed.
     */
    public $UserIds;

    /**
     * @param integer $SdkAppId The TRTC application ID.
     * @param string $RoomId The TRTC room ID.
     * @param string $TaskId The recording task ID.
     * @param array $UserIds The IDs of users whose streams are mixed.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
