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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCdr request structure.
 *
 * @method integer getStartTimeStamp() Obtain Start timestamp, unix timestamp in seconds. supports up to the past 180 days.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp, unix timestamp in seconds. supports up to the past 180 days.
 * @method integer getEndTimeStamp() Obtain End timestamp, unix timestamp in seconds. the range between the end time and start time is less than 90 days.
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set End timestamp, unix timestamp in seconds. the range between the end time and start time is less than 90 days.
 * @method integer getInstanceId() Obtain Instance id (deprecated).
 * @method void setInstanceId(integer $InstanceId) Set Instance id (deprecated).
 * @method integer getLimit() Obtain Maximum number of returned entries (deprecated).
 * @method void setLimit(integer $Limit) Set Maximum number of returned entries (deprecated).
 * @method integer getOffset() Obtain Offset (deprecated).
 * @method void setOffset(integer $Offset) Set Offset (deprecated).
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size (required), up to 100.
 * @method void setPageSize(integer $PageSize) Set Page size (required), up to 100.
 * @method integer getPageNumber() Obtain <Page number (required), starting from 0.>.
 * @method void setPageNumber(integer $PageNumber) Set <Page number (required), starting from 0.>.
 * @method array getPhones() Obtain Filter by phone number.
 * @method void setPhones(array $Phones) Set Filter by phone number.
 * @method array getSessionIds() Obtain Filter by sessionid.
 * @method void setSessionIds(array $SessionIds) Set Filter by sessionid.
 */
class DescribeTelCdrRequest extends AbstractModel
{
    /**
     * @var integer Start timestamp, unix timestamp in seconds. supports up to the past 180 days.
     */
    public $StartTimeStamp;

    /**
     * @var integer End timestamp, unix timestamp in seconds. the range between the end time and start time is less than 90 days.
     */
    public $EndTimeStamp;

    /**
     * @var integer Instance id (deprecated).
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var integer Maximum number of returned entries (deprecated).
     */
    public $Limit;

    /**
     * @var integer Offset (deprecated).
     */
    public $Offset;

    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size (required), up to 100.
     */
    public $PageSize;

    /**
     * @var integer <Page number (required), starting from 0.>.
     */
    public $PageNumber;

    /**
     * @var array Filter by phone number.
     */
    public $Phones;

    /**
     * @var array Filter by sessionid.
     */
    public $SessionIds;

    /**
     * @param integer $StartTimeStamp Start timestamp, unix timestamp in seconds. supports up to the past 180 days.
     * @param integer $EndTimeStamp End timestamp, unix timestamp in seconds. the range between the end time and start time is less than 90 days.
     * @param integer $InstanceId Instance id (deprecated).
     * @param integer $Limit Maximum number of returned entries (deprecated).
     * @param integer $Offset Offset (deprecated).
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size (required), up to 100.
     * @param integer $PageNumber <Page number (required), starting from 0.>.
     * @param array $Phones Filter by phone number.
     * @param array $SessionIds Filter by sessionid.
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Phones",$param) and $param["Phones"] !== null) {
            $this->Phones = $param["Phones"];
        }

        if (array_key_exists("SessionIds",$param) and $param["SessionIds"] !== null) {
            $this->SessionIds = $param["SessionIds"];
        }
    }
}
