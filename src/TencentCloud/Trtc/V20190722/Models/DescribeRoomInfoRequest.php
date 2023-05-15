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
 * DescribeRoomInfo request structure.
 *
 * @method integer getSdkAppId() Obtain The application ID, such as `1400xxxxxx`.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID, such as `1400xxxxxx`.
 * @method integer getStartTime() Obtain The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method void setStartTime(integer $StartTime) Set The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method integer getEndTime() Obtain The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than 24 hours apart.
 * @method void setEndTime(integer $EndTime) Set The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than 24 hours apart.
 * @method string getRoomId() Obtain The room ID, such as `223`.
 * @method void setRoomId(string $RoomId) Set The room ID, such as `223`.
 * @method integer getPageNumber() Obtain The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, 10 records will be returned.
 * @method void setPageNumber(integer $PageNumber) Set The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, 10 records will be returned.
 * @method integer getPageSize() Obtain The number of records per page. The default is `10`.
Value range: 1-100.
 * @method void setPageSize(integer $PageSize) Set The number of records per page. The default is `10`.
Value range: 1-100.
 */
class DescribeRoomInfoRequest extends AbstractModel
{
    /**
     * @var integer The application ID, such as `1400xxxxxx`.
     */
    public $SdkAppId;

    /**
     * @var integer The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
     */
    public $StartTime;

    /**
     * @var integer The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than 24 hours apart.
     */
    public $EndTime;

    /**
     * @var string The room ID, such as `223`.
     */
    public $RoomId;

    /**
     * @var integer The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, 10 records will be returned.
     */
    public $PageNumber;

    /**
     * @var integer The number of records per page. The default is `10`.
Value range: 1-100.
     */
    public $PageSize;

    /**
     * @param integer $SdkAppId The application ID, such as `1400xxxxxx`.
     * @param integer $StartTime The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
     * @param integer $EndTime The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than 24 hours apart.
     * @param string $RoomId The room ID, such as `223`.
     * @param integer $PageNumber The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, 10 records will be returned.
     * @param integer $PageSize The number of records per page. The default is `10`.
Value range: 1-100.
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
