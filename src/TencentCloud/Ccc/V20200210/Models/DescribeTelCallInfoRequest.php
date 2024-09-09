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
 * DescribeTelCallInfo request structure.
 *
 * @method integer getStartTimeStamp() Obtain Start timestamp, Unix timestamp (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp, Unix timestamp (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
 * @method integer getEndTimeStamp() Obtain End timestamp, Unix timestamp, the query time range is up to 90 days (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set End timestamp, Unix timestamp, the query time range is up to 90 days (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
 * @method array getSdkAppIdList() Obtain Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
 * @method void setSdkAppIdList(array $SdkAppIdList) Set Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
 */
class DescribeTelCallInfoRequest extends AbstractModel
{
    /**
     * @var integer Start timestamp, Unix timestamp (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
     */
    public $StartTimeStamp;

    /**
     * @var integer End timestamp, Unix timestamp, the query time range is up to 90 days (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
     */
    public $EndTimeStamp;

    /**
     * @var array Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
     */
    public $SdkAppIdList;

    /**
     * @param integer $StartTimeStamp Start timestamp, Unix timestamp (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
     * @param integer $EndTimeStamp End timestamp, Unix timestamp, the query time range is up to 90 days (query dimension supports only daily. For example, to query May 1st, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp. To query May 1st and May 2nd, pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)
     * @param array $SdkAppIdList Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
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

        if (array_key_exists("SdkAppIdList",$param) and $param["SdkAppIdList"] !== null) {
            $this->SdkAppIdList = $param["SdkAppIdList"];
        }
    }
}
