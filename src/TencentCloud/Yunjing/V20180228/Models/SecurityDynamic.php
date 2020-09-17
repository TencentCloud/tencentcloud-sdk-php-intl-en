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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security event message data.
 *
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method string getEventTime() Obtain Security event occurrence time.
 * @method void setEventTime(string $EventTime) Set Security event occurrence time.
 * @method string getEventType() Obtain Security event type.
<li>MALWARE: trojan event</li>
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>BRUTEATTACK_SUCCESS: brute force attack succeeded</li>
<li>VUL: vulnerability</li>
<li>BASELINE: security baseline</li>
 * @method void setEventType(string $EventType) Set Security event type.
<li>MALWARE: trojan event</li>
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>BRUTEATTACK_SUCCESS: brute force attack succeeded</li>
<li>VUL: vulnerability</li>
<li>BASELINE: security baseline</li>
 * @method string getMessage() Obtain Security event message.
 * @method void setMessage(string $Message) Set Security event message.
 * @method string getSecurityLevel() Obtain Security event level.
<li>RISK: severe</li>
<li>HIGH: high</li>
<li>NORMAL: medium</li>
<li>LOW: low</li>
 * @method void setSecurityLevel(string $SecurityLevel) Set Security event level.
<li>RISK: severe</li>
<li>HIGH: high</li>
<li>NORMAL: medium</li>
<li>LOW: low</li>
 */
class SecurityDynamic extends AbstractModel
{
    /**
     * @var string CWP agent `UUID`.
     */
    public $Uuid;

    /**
     * @var string Security event occurrence time.
     */
    public $EventTime;

    /**
     * @var string Security event type.
<li>MALWARE: trojan event</li>
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>BRUTEATTACK_SUCCESS: brute force attack succeeded</li>
<li>VUL: vulnerability</li>
<li>BASELINE: security baseline</li>
     */
    public $EventType;

    /**
     * @var string Security event message.
     */
    public $Message;

    /**
     * @var string Security event level.
<li>RISK: severe</li>
<li>HIGH: high</li>
<li>NORMAL: medium</li>
<li>LOW: low</li>
     */
    public $SecurityLevel;

    /**
     * @param string $Uuid CWP agent `UUID`.
     * @param string $EventTime Security event occurrence time.
     * @param string $EventType Security event type.
<li>MALWARE: trojan event</li>
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>BRUTEATTACK_SUCCESS: brute force attack succeeded</li>
<li>VUL: vulnerability</li>
<li>BASELINE: security baseline</li>
     * @param string $Message Security event message.
     * @param string $SecurityLevel Security event level.
<li>RISK: severe</li>
<li>HIGH: high</li>
<li>NORMAL: medium</li>
<li>LOW: low</li>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }
    }
}
