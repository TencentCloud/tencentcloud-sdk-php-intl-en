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
 * DescribeCallDetail request structure.
 *
 * @method string getCommId() Obtain Call ID (unique call ID): sdkappid_roomgString (room ID)_createTime (room creation time in UNIX timestamp in seconds). You can get the parameter value through the `DescribeRoomInformation` API which is used to query the room list.
 * @method void setCommId(string $CommId) Set Call ID (unique call ID): sdkappid_roomgString (room ID)_createTime (room creation time in UNIX timestamp in seconds). You can get the parameter value through the `DescribeRoomInformation` API which is used to query the room list.
 * @method integer getStartTime() Obtain Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 5 days.
 * @method void setStartTime(integer $StartTime) Set Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 5 days.
 * @method integer getEndTime() Obtain Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method void setEndTime(integer $EndTime) Set Query end time in the format of local UNIX timestamp, such as 1588031999s.
 * @method string getSdkAppId() Obtain User `sdkappid`
 * @method void setSdkAppId(string $SdkAppId) Set User `sdkappid`
 * @method array getUserIds() Obtain User array to query, which contains up to 6 users. If it is left empty, 6 users will be returned by default.
 * @method void setUserIds(array $UserIds) Set User array to query, which contains up to 6 users. If it is left empty, 6 users will be returned by default.
 * @method array getDataType() Obtain Metric to query. The user list will be returned if it is left empty; all metrics will be returned if its value is `all`.
appCpu: CPU utilization of application;
sysCpu: CPU utilization of system;
aBit: upstream/downstream audio bitrate;
aBlock: audio lag duration;
vBit: upstream/downstream video bitrate;
vCapFps: video capturing frame rate;
vEncFps: video sending frame rate;
vDecFps: rendering frame rate;
vBlock: video lag duration;
aLoss: upstream/downstream audio packet loss;
vLoss: upstream/downstream video packet loss;
vWidth: upstream/downstream resolution in width;
vHeight: upstream/downstream resolution in height.
 * @method void setDataType(array $DataType) Set Metric to query. The user list will be returned if it is left empty; all metrics will be returned if its value is `all`.
appCpu: CPU utilization of application;
sysCpu: CPU utilization of system;
aBit: upstream/downstream audio bitrate;
aBlock: audio lag duration;
vBit: upstream/downstream video bitrate;
vCapFps: video capturing frame rate;
vEncFps: video sending frame rate;
vDecFps: rendering frame rate;
vBlock: video lag duration;
aLoss: upstream/downstream audio packet loss;
vLoss: upstream/downstream video packet loss;
vWidth: upstream/downstream resolution in width;
vHeight: upstream/downstream resolution in height.
 */
class DescribeCallDetailRequest extends AbstractModel
{
    /**
     * @var string Call ID (unique call ID): sdkappid_roomgString (room ID)_createTime (room creation time in UNIX timestamp in seconds). You can get the parameter value through the `DescribeRoomInformation` API which is used to query the room list.
     */
    public $CommId;

    /**
     * @var integer Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 5 days.
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
     * @var array User array to query, which contains up to 6 users. If it is left empty, 6 users will be returned by default.
     */
    public $UserIds;

    /**
     * @var array Metric to query. The user list will be returned if it is left empty; all metrics will be returned if its value is `all`.
appCpu: CPU utilization of application;
sysCpu: CPU utilization of system;
aBit: upstream/downstream audio bitrate;
aBlock: audio lag duration;
vBit: upstream/downstream video bitrate;
vCapFps: video capturing frame rate;
vEncFps: video sending frame rate;
vDecFps: rendering frame rate;
vBlock: video lag duration;
aLoss: upstream/downstream audio packet loss;
vLoss: upstream/downstream video packet loss;
vWidth: upstream/downstream resolution in width;
vHeight: upstream/downstream resolution in height.
     */
    public $DataType;

    /**
     * @param string $CommId Call ID (unique call ID): sdkappid_roomgString (room ID)_createTime (room creation time in UNIX timestamp in seconds). You can get the parameter value through the `DescribeRoomInformation` API which is used to query the room list.
     * @param integer $StartTime Query start time in the format of local UNIX timestamp, such as 1588031999s, which is a point in time in the last 5 days.
     * @param integer $EndTime Query end time in the format of local UNIX timestamp, such as 1588031999s.
     * @param string $SdkAppId User `sdkappid`
     * @param array $UserIds User array to query, which contains up to 6 users. If it is left empty, 6 users will be returned by default.
     * @param array $DataType Metric to query. The user list will be returned if it is left empty; all metrics will be returned if its value is `all`.
appCpu: CPU utilization of application;
sysCpu: CPU utilization of system;
aBit: upstream/downstream audio bitrate;
aBlock: audio lag duration;
vBit: upstream/downstream video bitrate;
vCapFps: video capturing frame rate;
vEncFps: video sending frame rate;
vDecFps: rendering frame rate;
vBlock: video lag duration;
aLoss: upstream/downstream audio packet loss;
vLoss: upstream/downstream video packet loss;
vWidth: upstream/downstream resolution in width;
vHeight: upstream/downstream resolution in height.
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

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
