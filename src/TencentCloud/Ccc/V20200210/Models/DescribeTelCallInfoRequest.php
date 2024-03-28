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
 * @method integer getStartTimeStamp() Obtain Start timestamp Unix timestamp (supports only day dimension. For example, for querying May 1st, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and 2nd, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp Unix timestamp (supports only day dimension. For example, for querying May 1st, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and 2nd, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
 * @method integer getEndTimeStamp() Obtain End timestamp. Unix timestamp and the maximum query time range is 90 days (supports only day dimension, for example, for querying May 1st, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and May 2nd, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set End timestamp. Unix timestamp and the maximum query time range is 90 days (supports only day dimension, for example, for querying May 1st, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and May 2nd, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
 * @method array getSdkAppIdList() Obtain Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
 * @method void setSdkAppIdList(array $SdkAppIdList) Set Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
 */
class DescribeTelCallInfoRequest extends AbstractModel
{
    /**
     * @var integer Start timestamp Unix timestamp (supports only day dimension. For example, for querying May 1st, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and 2nd, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
     */
    public $StartTimeStamp;

    /**
     * @var integer End timestamp. Unix timestamp and the maximum query time range is 90 days (supports only day dimension, for example, for querying May 1st, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and May 2nd, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
     */
    public $EndTimeStamp;

    /**
     * @var array Application ID list, when having multiple IDs, the returned value is the sum of all the IDs.
     */
    public $SdkAppIdList;

    /**
     * @param integer $StartTimeStamp Start timestamp Unix timestamp (supports only day dimension. For example, for querying May 1st, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and 2nd, you should pass a timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
     * @param integer $EndTimeStamp End timestamp. Unix timestamp and the maximum query time range is 90 days (supports only day dimension, for example, for querying May 1st, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-01 23:59:59" and for querying both May 1st and May 2nd, you should pass timestamp from "2023-05-01 00:00:00" to "2023-05-02 23:59:59").
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
