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
 * DescribeTRTCRealTimeQualityData request structure.
 *
 * @method string getSdkAppId() Obtain User SDKAppId (e.g., 1400xxxxxx)
 * @method void setSdkAppId(string $SdkAppId) Set User SDKAppId (e.g., 1400xxxxxx)
 * @method integer getStartTime() Obtain Start time, unix timestamp, Unit: seconds (Query time range depends on the monitoring dashboard function version, standard edition can query the last 3 hours, premium edition can query the last 12 hours)
 * @method void setStartTime(integer $StartTime) Set Start time, unix timestamp, Unit: seconds (Query time range depends on the monitoring dashboard function version, standard edition can query the last 3 hours, premium edition can query the last 12 hours)
 * @method integer getEndTime() Obtain End time, unix timestamp, Unit: seconds
 * @method void setEndTime(integer $EndTime) Set End time, unix timestamp, Unit: seconds
 * @method string getRoomId() Obtain Room ID
 * @method void setRoomId(string $RoomId) Set Room ID
 */
class DescribeTRTCRealTimeQualityDataRequest extends AbstractModel
{
    /**
     * @var string User SDKAppId (e.g., 1400xxxxxx)
     */
    public $SdkAppId;

    /**
     * @var integer Start time, unix timestamp, Unit: seconds (Query time range depends on the monitoring dashboard function version, standard edition can query the last 3 hours, premium edition can query the last 12 hours)
     */
    public $StartTime;

    /**
     * @var integer End time, unix timestamp, Unit: seconds
     */
    public $EndTime;

    /**
     * @var string Room ID
     */
    public $RoomId;

    /**
     * @param string $SdkAppId User SDKAppId (e.g., 1400xxxxxx)
     * @param integer $StartTime Start time, unix timestamp, Unit: seconds (Query time range depends on the monitoring dashboard function version, standard edition can query the last 3 hours, premium edition can query the last 12 hours)
     * @param integer $EndTime End time, unix timestamp, Unit: seconds
     * @param string $RoomId Room ID
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
