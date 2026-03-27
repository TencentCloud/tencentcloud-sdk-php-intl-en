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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCallInfo request structure.
 *
 * @method integer getStartTimeStamp() Obtain <p>Start timestamp, Unix timestamp (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)</p>.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set <p>Start timestamp, Unix timestamp (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)</p>.
 * @method integer getEndTimeStamp() Obtain <p>End timestamp, Unix timestamp. the maximum query time range is 90 days (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp).</p>.
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set <p>End timestamp, Unix timestamp. the maximum query time range is 90 days (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp).</p>.
 * @method array getSdkAppIdList() Obtain <p>Application ID list. for multiple ids, the return value is the sum of multiple ids.</p>.
 * @method void setSdkAppIdList(array $SdkAppIdList) Set <p>Application ID list. for multiple ids, the return value is the sum of multiple ids.</p>.
 */
class DescribeTelCallInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>Start timestamp, Unix timestamp (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)</p>.
     */
    public $StartTimeStamp;

    /**
     * @var integer <p>End timestamp, Unix timestamp. the maximum query time range is 90 days (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp).</p>.
     */
    public $EndTimeStamp;

    /**
     * @var array <p>Application ID list. for multiple ids, the return value is the sum of multiple ids.</p>.
     */
    public $SdkAppIdList;

    /**
     * @param integer $StartTimeStamp <p>Start timestamp, Unix timestamp (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp)</p>.
     * @param integer $EndTimeStamp <p>End timestamp, Unix timestamp. the maximum query time range is 90 days (query dimension only supports day, for example, to query may 1, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-01 23:59:59" timestamp; to query may 1 and may 2, you should pass startTime:"2023-05-01 00:00:00","endTime":"2023-05-02 23:59:59" timestamp).</p>.
     * @param array $SdkAppIdList <p>Application ID list. for multiple ids, the return value is the sum of multiple ids.</p>.
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
