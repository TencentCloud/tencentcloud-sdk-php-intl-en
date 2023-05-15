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
 * DescribeUserEvent request structure.
 *
 * @method string getCommId() Obtain The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
 * @method void setCommId(string $CommId) Set The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
 * @method integer getStartTime() Obtain The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method void setStartTime(integer $StartTime) Set The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method integer getEndTime() Obtain The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: If you pass in an end time later than the room end time, the room end time will be used.
 * @method void setEndTime(integer $EndTime) Set The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: If you pass in an end time later than the room end time, the room end time will be used.
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method string getRoomId() Obtain The room ID, such as `223`.
 * @method void setRoomId(string $RoomId) Set The room ID, such as `223`.
 * @method integer getSdkAppId() Obtain The application ID, such as `1400xxxxxx`.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID, such as `1400xxxxxx`.
 */
class DescribeUserEventRequest extends AbstractModel
{
    /**
     * @var string The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
     */
    public $CommId;

    /**
     * @var integer The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
     */
    public $StartTime;

    /**
     * @var integer The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: If you pass in an end time later than the room end time, the room end time will be used.
     */
    public $EndTime;

    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var string The room ID, such as `223`.
     */
    public $RoomId;

    /**
     * @var integer The application ID, such as `1400xxxxxx`.
     */
    public $SdkAppId;

    /**
     * @param string $CommId The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
     * @param integer $StartTime The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
     * @param integer $EndTime The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: If you pass in an end time later than the room end time, the room end time will be used.
     * @param string $UserId The user ID.
     * @param string $RoomId The room ID, such as `223`.
     * @param integer $SdkAppId The application ID, such as `1400xxxxxx`.
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
        if (array_key_exists("CommId",$param) and $param["CommId"] !== null) {
            $this->CommId = $param["CommId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
