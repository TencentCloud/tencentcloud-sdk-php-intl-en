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
 * DescribeTrtcRoomUsage request structure.
 *
 * @method integer getSdkAppid() Obtain The `SDKAppID` of the room.
 * @method void setSdkAppid(integer $SdkAppid) Set The `SDKAppID` of the room.
 * @method string getStartTime() Obtain The start time in the format of `YYYY-MM-DD HH:MM` (accurate to the minute).
 * @method void setStartTime(string $StartTime) Set The start time in the format of `YYYY-MM-DD HH:MM` (accurate to the minute).
 * @method string getEndTime() Obtain The end time in the format of `YYYY-MM-DD HH:MM`. The start and end time cannot be more than 24 hours apart.
 * @method void setEndTime(string $EndTime) Set The end time in the format of `YYYY-MM-DD HH:MM`. The start and end time cannot be more than 24 hours apart.
 */
class DescribeTrtcRoomUsageRequest extends AbstractModel
{
    /**
     * @var integer The `SDKAppID` of the room.
     */
    public $SdkAppid;

    /**
     * @var string The start time in the format of `YYYY-MM-DD HH:MM` (accurate to the minute).
     */
    public $StartTime;

    /**
     * @var string The end time in the format of `YYYY-MM-DD HH:MM`. The start and end time cannot be more than 24 hours apart.
     */
    public $EndTime;

    /**
     * @param integer $SdkAppid The `SDKAppID` of the room.
     * @param string $StartTime The start time in the format of `YYYY-MM-DD HH:MM` (accurate to the minute).
     * @param string $EndTime The end time in the format of `YYYY-MM-DD HH:MM`. The start and end time cannot be more than 24 hours apart.
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
        if (array_key_exists("SdkAppid",$param) and $param["SdkAppid"] !== null) {
            $this->SdkAppid = $param["SdkAppid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
