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
 * DescribeRoomInformation request structure.
 *
 * @method string getSdkAppId() Obtain User `sdkappid`
 * @method void setSdkAppId(string $SdkAppId) Set User `sdkappid`
 * @method integer getStartTime() Obtain Query start time in the format of UNIX timestamp, such as 1588031999s, which is a point in time in the last 14 days.
 * @method void setStartTime(integer $StartTime) Set Query start time in the format of UNIX timestamp, such as 1588031999s, which is a point in time in the last 14 days.
 * @method integer getEndTime() Obtain Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method void setEndTime(integer $EndTime) Set Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method string getRoomId() Obtain Room ID in string type
 * @method void setRoomId(string $RoomId) Set Room ID in string type
 * @method string getPageNumber() Obtain Page index starting from 0 (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default)
 * @method void setPageNumber(string $PageNumber) Set Page index starting from 0 (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default)
 * @method string getPageSize() Obtain Number of entries per page (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default. Maximum value: 100)
 * @method void setPageSize(string $PageSize) Set Number of entries per page (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default. Maximum value: 100)
 */
class DescribeRoomInformationRequest extends AbstractModel
{
    /**
     * @var string User `sdkappid`
     */
    public $SdkAppId;

    /**
     * @var integer Query start time in the format of UNIX timestamp, such as 1588031999s, which is a point in time in the last 14 days.
     */
    public $StartTime;

    /**
     * @var integer Query end time in the format of local UNIX timestamp, such as 1588031999s.
     */
    public $EndTime;

    /**
     * @var string Room ID in string type
     */
    public $RoomId;

    /**
     * @var string Page index starting from 0 (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default)
     */
    public $PageNumber;

    /**
     * @var string Number of entries per page (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default. Maximum value: 100)
     */
    public $PageSize;

    /**
     * @param string $SdkAppId User `sdkappid`
     * @param integer $StartTime Query start time in the format of UNIX timestamp, such as 1588031999s, which is a point in time in the last 14 days.
     * @param integer $EndTime Query end time in the format of local UNIX timestamp, such as 1588031999s.
     * @param string $RoomId Room ID in string type
     * @param string $PageNumber Page index starting from 0 (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default)
     * @param string $PageSize Number of entries per page (if either `PageNumber` or `PageSize` is left empty, 10 data entries will be returned by default. Maximum value: 100)
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
