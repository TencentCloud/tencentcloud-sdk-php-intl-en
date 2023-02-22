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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a time shifted stream.
 *
 * @method string getDomainGroup() Obtain The group the push domain belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainGroup(string $DomainGroup) Set The group the push domain belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain The push domain.
 * @method void setDomain(string $Domain) Set The push domain.
 * @method string getAppName() Obtain The push path.
 * @method void setAppName(string $AppName) Set The push path.
 * @method string getStreamName() Obtain The stream name.
 * @method void setStreamName(string $StreamName) Set The stream name.
 * @method integer getStartTime() Obtain The stream start time, which is a Unix timestamp.
 * @method void setStartTime(integer $StartTime) Set The stream start time, which is a Unix timestamp.
 * @method integer getEndTime() Obtain The stream end time (for streams that ended before the time of query), which is a Unix timestamp.
 * @method void setEndTime(integer $EndTime) Set The stream end time (for streams that ended before the time of query), which is a Unix timestamp.
 * @method integer getTransCodeId() Obtain The transcoding template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransCodeId(integer $TransCodeId) Set The transcoding template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStreamType() Obtain The stream type. `0`: The original stream; `1`: The watermarked stream; `2`: The transcoded stream.
 * @method void setStreamType(integer $StreamType) Set The stream type. `0`: The original stream; `1`: The watermarked stream; `2`: The transcoded stream.
 * @method integer getDuration() Obtain The storage duration (seconds) of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set The storage duration (seconds) of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TimeShiftStreamInfo extends AbstractModel
{
    /**
     * @var string The group the push domain belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainGroup;

    /**
     * @var string The push domain.
     */
    public $Domain;

    /**
     * @var string The push path.
     */
    public $AppName;

    /**
     * @var string The stream name.
     */
    public $StreamName;

    /**
     * @var integer The stream start time, which is a Unix timestamp.
     */
    public $StartTime;

    /**
     * @var integer The stream end time (for streams that ended before the time of query), which is a Unix timestamp.
     */
    public $EndTime;

    /**
     * @var integer The transcoding template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransCodeId;

    /**
     * @var integer The stream type. `0`: The original stream; `1`: The watermarked stream; `2`: The transcoded stream.
     */
    public $StreamType;

    /**
     * @var integer The storage duration (seconds) of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @param string $DomainGroup The group the push domain belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain The push domain.
     * @param string $AppName The push path.
     * @param string $StreamName The stream name.
     * @param integer $StartTime The stream start time, which is a Unix timestamp.
     * @param integer $EndTime The stream end time (for streams that ended before the time of query), which is a Unix timestamp.
     * @param integer $TransCodeId The transcoding template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StreamType The stream type. `0`: The original stream; `1`: The watermarked stream; `2`: The transcoded stream.
     * @param integer $Duration The storage duration (seconds) of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TransCodeId",$param) and $param["TransCodeId"] !== null) {
            $this->TransCodeId = $param["TransCodeId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
