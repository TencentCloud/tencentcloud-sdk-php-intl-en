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
 * DescribeRecordStatistic request structure.
 *
 * @method string getStartTime() Obtain Query start date in the format of YYYY-MM-DD
 * @method void setStartTime(string $StartTime) Set Query start date in the format of YYYY-MM-DD
 * @method string getEndTime() Obtain Query end date in the format of YYYY-MM-DD
The period queried in a request cannot be longer than 31 days.
 * @method void setEndTime(string $EndTime) Set Query end date in the format of YYYY-MM-DD
The period queried in a request cannot be longer than 31 days.
 * @method integer getSdkAppId() Obtain Application ID, which is optional. If it is specified, duration statistics for the specified application are returned; otherwise, the total durations of all applications are returned.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID, which is optional. If it is specified, duration statistics for the specified application are returned; otherwise, the total durations of all applications are returned.
 */
class DescribeRecordStatisticRequest extends AbstractModel
{
    /**
     * @var string Query start date in the format of YYYY-MM-DD
     */
    public $StartTime;

    /**
     * @var string Query end date in the format of YYYY-MM-DD
The period queried in a request cannot be longer than 31 days.
     */
    public $EndTime;

    /**
     * @var integer Application ID, which is optional. If it is specified, duration statistics for the specified application are returned; otherwise, the total durations of all applications are returned.
     */
    public $SdkAppId;

    /**
     * @param string $StartTime Query start date in the format of YYYY-MM-DD
     * @param string $EndTime Query end date in the format of YYYY-MM-DD
The period queried in a request cannot be longer than 31 days.
     * @param integer $SdkAppId Application ID, which is optional. If it is specified, duration statistics for the specified application are returned; otherwise, the total durations of all applications are returned.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
