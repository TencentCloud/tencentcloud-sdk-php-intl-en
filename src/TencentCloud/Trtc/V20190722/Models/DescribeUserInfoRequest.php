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
 * DescribeUserInfo request structure.
 *
 * @method string getCommId() Obtain The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
 * @method void setCommId(string $CommId) Set The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
 * @method integer getStartTime() Obtain The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method void setStartTime(integer $StartTime) Set The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
 * @method integer getEndTime() Obtain The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than four hours apart.
 * @method void setEndTime(integer $EndTime) Set The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than four hours apart.
 * @method integer getSdkAppId() Obtain The application ID, such as `1400xxxxxx`.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID, such as `1400xxxxxx`.
 * @method array getUserIds() Obtain The users to query. If you do not specify this, the information of six users will be returned.
Array length: 1-100.
 * @method void setUserIds(array $UserIds) Set The users to query. If you do not specify this, the information of six users will be returned.
Array length: 1-100.
 * @method integer getPageNumber() Obtain The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, six records will be returned.
 * @method void setPageNumber(integer $PageNumber) Set The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, six records will be returned.
 * @method integer getPageSize() Obtain The number of records per page. The default is `6`.
Array length: 1-100.
 * @method void setPageSize(integer $PageSize) Set The number of records per page. The default is `6`.
Array length: 1-100.
 */
class DescribeUserInfoRequest extends AbstractModel
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
Note: The end and start time cannot be more than four hours apart.
     */
    public $EndTime;

    /**
     * @var integer The application ID, such as `1400xxxxxx`.
     */
    public $SdkAppId;

    /**
     * @var array The users to query. If you do not specify this, the information of six users will be returned.
Array length: 1-100.
     */
    public $UserIds;

    /**
     * @var integer The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, six records will be returned.
     */
    public $PageNumber;

    /**
     * @var integer The number of records per page. The default is `6`.
Array length: 1-100.
     */
    public $PageSize;

    /**
     * @param string $CommId The unique ID of a call, whose format is `SdkAppId_CreateTime`, such as `1400xxxxxx_218695_1590065777`. `createTime` is the UNIX timestamp (seconds) when the room was created. Its value can be obtained using the [DescribeRoomInfo](https://intl.cloud.tencent.com/document/product/647/44050?from_cn_redirect=1) API.
     * @param integer $StartTime The start time, which is a Unix timestamp (seconds) in local time, such as `1590065777`.
Note: Only data in the last 14 days can be queried.
     * @param integer $EndTime The end time, which is a Unix timestamp (seconds) in local time, such as `1590065877`.
Note: The end and start time cannot be more than four hours apart.
     * @param integer $SdkAppId The application ID, such as `1400xxxxxx`.
     * @param array $UserIds The users to query. If you do not specify this, the information of six users will be returned.
Array length: 1-100.
     * @param integer $PageNumber The page number. The default is 0.
Note: If `PageNumber` or `PageSize` is not specified, six records will be returned.
     * @param integer $PageSize The number of records per page. The default is `6`.
Array length: 1-100.
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
