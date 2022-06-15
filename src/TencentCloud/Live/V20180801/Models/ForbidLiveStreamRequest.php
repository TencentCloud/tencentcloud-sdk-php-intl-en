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
 * ForbidLiveStream request structure.
 *
 * @method string getAppName() Obtain Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method string getDomainName() Obtain Your push domain name.
 * @method void setDomainName(string $DomainName) Set Your push domain name.
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getResumeTime() Obtain The time (in UTC format) to resume the stream, such as 2018-11-29T19:00:00Z.
Notes:
1. The default stream disabling period is seven days. A stream can be disabled for up to 90 days.
2. Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setResumeTime(string $ResumeTime) Set The time (in UTC format) to resume the stream, such as 2018-11-29T19:00:00Z.
Notes:
1. The default stream disabling period is seven days. A stream can be disabled for up to 90 days.
2. Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method string getReason() Obtain Reason for forbidding.
Note: Be sure to enter the reason for forbidding to avoid any faulty operations.
Length limit: 2,048 bytes.
 * @method void setReason(string $Reason) Set Reason for forbidding.
Note: Be sure to enter the reason for forbidding to avoid any faulty operations.
Length limit: 2,048 bytes.
 */
class ForbidLiveStreamRequest extends AbstractModel
{
    /**
     * @var string Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     */
    public $AppName;

    /**
     * @var string Your push domain name.
     */
    public $DomainName;

    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string The time (in UTC format) to resume the stream, such as 2018-11-29T19:00:00Z.
Notes:
1. The default stream disabling period is seven days. A stream can be disabled for up to 90 days.
2. Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $ResumeTime;

    /**
     * @var string Reason for forbidding.
Note: Be sure to enter the reason for forbidding to avoid any faulty operations.
Length limit: 2,048 bytes.
     */
    public $Reason;

    /**
     * @param string $AppName Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     * @param string $DomainName Your push domain name.
     * @param string $StreamName Stream name.
     * @param string $ResumeTime The time (in UTC format) to resume the stream, such as 2018-11-29T19:00:00Z.
Notes:
1. The default stream disabling period is seven days. A stream can be disabled for up to 90 days.
2. Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param string $Reason Reason for forbidding.
Note: Be sure to enter the reason for forbidding to avoid any faulty operations.
Length limit: 2,048 bytes.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
