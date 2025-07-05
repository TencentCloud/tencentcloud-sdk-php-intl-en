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
 * DescribeAILatency request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method integer getStartTime() Obtain Search start time.	
 * @method void setStartTime(integer $StartTime) Set Search start time.	
 * @method integer getEndTime() Obtain 1737350008
 * @method void setEndTime(integer $EndTime) Set 1737350008
 */
class DescribeAILatencyRequest extends AbstractModel
{
    /**
     * @var integer App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var integer Search start time.	
     */
    public $StartTime;

    /**
     * @var integer 1737350008
     */
    public $EndTime;

    /**
     * @param integer $SdkAppId App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
     * @param string $SessionId Session ID.
     * @param integer $StartTime Search start time.	
     * @param integer $EndTime 1737350008
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
