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
 * DescribeUserInformation request structure.
 *
 * @method string getCommId() Obtain Unique ID of a call: sdkappid_roomgString_createTime. The `roomgString` refers to the room ID, and `createTime` refers to the creation time of a room in the format of UNIX timestamp in seconds, such as 1400353843_218695_1590065777. Its value can be obtained from the `DescribeRoomInformation` API (related document: https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1).
 * @method void setCommId(string $CommId) Set Unique ID of a call: sdkappid_roomgString_createTime. The `roomgString` refers to the room ID, and `createTime` refers to the creation time of a room in the format of UNIX timestamp in seconds, such as 1400353843_218695_1590065777. Its value can be obtained from the `DescribeRoomInformation` API (related document: https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1).
 * @method integer getStartTime() Obtain Query start time in the format of UNIX timestamp (e.g. 1588031999s) in the last 5 days.
 * @method void setStartTime(integer $StartTime) Set Query start time in the format of UNIX timestamp (e.g. 1588031999s) in the last 5 days.
 * @method integer getEndTime() Obtain Query end time in the format of UNIX timestamp (e.g. 1588031999s).
 * @method void setEndTime(integer $EndTime) Set Query end time in the format of UNIX timestamp (e.g. 1588031999s).
 * @method string getSdkAppId() Obtain User `SDKAppID` (e.g. 1400188366).
 * @method void setSdkAppId(string $SdkAppId) Set User `SDKAppID` (e.g. 1400188366).
 * @method array getUserIds() Obtain The array of user IDs for query. You can enter up to 6 user IDs. If it is left empty, data of 6 users will be returned.
 * @method void setUserIds(array $UserIds) Set The array of user IDs for query. You can enter up to 6 user IDs. If it is left empty, data of 6 users will be returned.
 * @method string getPageNumber() Obtain Page index starting from 0. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned.
 * @method void setPageNumber(string $PageNumber) Set Page index starting from 0. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned.
 * @method string getPageSize() Obtain Number of entries per page. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned. `PageSize` is up to 100.
 * @method void setPageSize(string $PageSize) Set Number of entries per page. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned. `PageSize` is up to 100.
 */
class DescribeUserInformationRequest extends AbstractModel
{
    /**
     * @var string Unique ID of a call: sdkappid_roomgString_createTime. The `roomgString` refers to the room ID, and `createTime` refers to the creation time of a room in the format of UNIX timestamp in seconds, such as 1400353843_218695_1590065777. Its value can be obtained from the `DescribeRoomInformation` API (related document: https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1).
     */
    public $CommId;

    /**
     * @var integer Query start time in the format of UNIX timestamp (e.g. 1588031999s) in the last 5 days.
     */
    public $StartTime;

    /**
     * @var integer Query end time in the format of UNIX timestamp (e.g. 1588031999s).
     */
    public $EndTime;

    /**
     * @var string User `SDKAppID` (e.g. 1400188366).
     */
    public $SdkAppId;

    /**
     * @var array The array of user IDs for query. You can enter up to 6 user IDs. If it is left empty, data of 6 users will be returned.
     */
    public $UserIds;

    /**
     * @var string Page index starting from 0. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned.
     */
    public $PageNumber;

    /**
     * @var string Number of entries per page. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned. `PageSize` is up to 100.
     */
    public $PageSize;

    /**
     * @param string $CommId Unique ID of a call: sdkappid_roomgString_createTime. The `roomgString` refers to the room ID, and `createTime` refers to the creation time of a room in the format of UNIX timestamp in seconds, such as 1400353843_218695_1590065777. Its value can be obtained from the `DescribeRoomInformation` API (related document: https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1).
     * @param integer $StartTime Query start time in the format of UNIX timestamp (e.g. 1588031999s) in the last 5 days.
     * @param integer $EndTime Query end time in the format of UNIX timestamp (e.g. 1588031999s).
     * @param string $SdkAppId User `SDKAppID` (e.g. 1400188366).
     * @param array $UserIds The array of user IDs for query. You can enter up to 6 user IDs. If it is left empty, data of 6 users will be returned.
     * @param string $PageNumber Page index starting from 0. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned.
     * @param string $PageSize Number of entries per page. If either `PageNumber` or `PageSize` is left empty, 6 data entries will be returned. `PageSize` is up to 100.
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
