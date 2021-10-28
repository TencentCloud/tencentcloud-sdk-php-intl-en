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
 * DescribeHistoryScale request structure.
 *
 * @method string getSdkAppId() Obtain `SDKAppID` of the users to query, e.g., 1400188366
 * @method void setSdkAppId(string $SdkAppId) Set `SDKAppID` of the users to query, e.g., 1400188366
 * @method integer getStartTime() Obtain Query start time (s) in the format of Unix timestamp (e.g., 1587571000), which must be a time point in the last 5 days
 * @method void setStartTime(integer $StartTime) Set Query start time (s) in the format of Unix timestamp (e.g., 1587571000), which must be a time point in the last 5 days
 * @method integer getEndTime() Obtain Query end time (s) in the format of Unix timestamp, e.g., 1588034999
 * @method void setEndTime(integer $EndTime) Set Query end time (s) in the format of Unix timestamp, e.g., 1588034999
 */
class DescribeHistoryScaleRequest extends AbstractModel
{
    /**
     * @var string `SDKAppID` of the users to query, e.g., 1400188366
     */
    public $SdkAppId;

    /**
     * @var integer Query start time (s) in the format of Unix timestamp (e.g., 1587571000), which must be a time point in the last 5 days
     */
    public $StartTime;

    /**
     * @var integer Query end time (s) in the format of Unix timestamp, e.g., 1588034999
     */
    public $EndTime;

    /**
     * @param string $SdkAppId `SDKAppID` of the users to query, e.g., 1400188366
     * @param integer $StartTime Query start time (s) in the format of Unix timestamp (e.g., 1587571000), which must be a time point in the last 5 days
     * @param integer $EndTime Query end time (s) in the format of Unix timestamp, e.g., 1588034999
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
    }
}
