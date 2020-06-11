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
 * DescribeRealtimeNetwork request structure.
 *
 * @method integer getStartTime() Obtain Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 24 hours.
 * @method void setStartTime(integer $StartTime) Set Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 24 hours.
 * @method integer getEndTime() Obtain Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method void setEndTime(integer $EndTime) Set Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method string getSdkAppId() Obtain User `sdkappid`
 * @method void setSdkAppId(string $SdkAppId) Set User `sdkappid`
 * @method array getDataType() Obtain Type of data to query
sendLossRateRaw: upstream packet loss rate;
recvLossRateRaw: downstream packet loss rate.
 * @method void setDataType(array $DataType) Set Type of data to query
sendLossRateRaw: upstream packet loss rate;
recvLossRateRaw: downstream packet loss rate.
 */
class DescribeRealtimeNetworkRequest extends AbstractModel
{
    /**
     * @var integer Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 24 hours.
     */
    public $StartTime;

    /**
     * @var integer Query end time in the format of local UNIX timestamp, such as 1588031999s.
     */
    public $EndTime;

    /**
     * @var string User `sdkappid`
     */
    public $SdkAppId;

    /**
     * @var array Type of data to query
sendLossRateRaw: upstream packet loss rate;
recvLossRateRaw: downstream packet loss rate.
     */
    public $DataType;

    /**
     * @param integer $StartTime Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 24 hours.
     * @param integer $EndTime Query end time in the format of local UNIX timestamp, such as 1588031999s.
     * @param string $SdkAppId User `sdkappid`
     * @param array $DataType Type of data to query
sendLossRateRaw: upstream packet loss rate;
recvLossRateRaw: downstream packet loss rate.
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

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
