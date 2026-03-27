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
 * DescribeSessionDetail request structure.
 *
 * @method integer getSdkAppId() Obtain <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
 * @method void setSdkAppId(integer $SdkAppId) Set <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
 * @method string getSessionId() Obtain <P>Call session id</p>.
 * @method void setSessionId(string $SessionId) Set <P>Call session id</p>.
 * @method integer getStartTimestamp() Obtain <p>Start timestamp, Unix second-level timestamp, supports up to the last 180 days.</p>.
 * @method void setStartTimestamp(integer $StartTimestamp) Set <p>Start timestamp, Unix second-level timestamp, supports up to the last 180 days.</p>.
 * @method integer getEndTimestamp() Obtain <p>End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 90 days.</p>.
 * @method void setEndTimestamp(integer $EndTimestamp) Set <p>End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 90 days.</p>.
 */
class DescribeSessionDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
     */
    public $SdkAppId;

    /**
     * @var string <P>Call session id</p>.
     */
    public $SessionId;

    /**
     * @var integer <p>Start timestamp, Unix second-level timestamp, supports up to the last 180 days.</p>.
     */
    public $StartTimestamp;

    /**
     * @var integer <p>End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 90 days.</p>.
     */
    public $EndTimestamp;

    /**
     * @param integer $SdkAppId <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
     * @param string $SessionId <P>Call session id</p>.
     * @param integer $StartTimestamp <p>Start timestamp, Unix second-level timestamp, supports up to the last 180 days.</p>.
     * @param integer $EndTimestamp <p>End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 90 days.</p>.
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }
    }
}
