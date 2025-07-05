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
 * DescribeTrtcUsage request structure.
 *
 * @method string getStartTime() Obtain The start date in the format of YYYY-MM-DD.
 * @method void setStartTime(string $StartTime) Set The start date in the format of YYYY-MM-DD.
 * @method string getEndTime() Obtain The end date in the format of YYYY-MM-DD.
The period queried per request cannot be longer than 31 days.
 * @method void setEndTime(string $EndTime) Set The end date in the format of YYYY-MM-DD.
The period queried per request cannot be longer than 31 days.
 * @method integer getSdkAppId() Obtain The `SDKAppID` of the TRTC application to which the target room belongs. If you do not specify this parameter, the usage statistics of all TRTC applications under the current account will be returned.
 * @method void setSdkAppId(integer $SdkAppId) Set The `SDKAppID` of the TRTC application to which the target room belongs. If you do not specify this parameter, the usage statistics of all TRTC applications under the current account will be returned.
 */
class DescribeTrtcUsageRequest extends AbstractModel
{
    /**
     * @var string The start date in the format of YYYY-MM-DD.
     */
    public $StartTime;

    /**
     * @var string The end date in the format of YYYY-MM-DD.
The period queried per request cannot be longer than 31 days.
     */
    public $EndTime;

    /**
     * @var integer The `SDKAppID` of the TRTC application to which the target room belongs. If you do not specify this parameter, the usage statistics of all TRTC applications under the current account will be returned.
     */
    public $SdkAppId;

    /**
     * @param string $StartTime The start date in the format of YYYY-MM-DD.
     * @param string $EndTime The end date in the format of YYYY-MM-DD.
The period queried per request cannot be longer than 31 days.
     * @param integer $SdkAppId The `SDKAppID` of the TRTC application to which the target room belongs. If you do not specify this parameter, the usage statistics of all TRTC applications under the current account will be returned.
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
