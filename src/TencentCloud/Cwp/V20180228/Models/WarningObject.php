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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters used to update alarms or inserted into alarms
 *
 * @method integer getType() Obtain Event Alarm Type. 1: Offline; 2: Trojan; 3: Exceptional login; 4: Brute force; 5: Vulnerability (split into four types ranging from 9 to 12); 6: High-risk command; 7: Reverse sell; 8: Local privilege escalation;, 9: System component vulnerabilities; 10: Web application vulnerabilities; 11: Emergency vulnerabilities; 12: Security baseline; 14: Malicious request; 15: Network attack; 16: Windows system vulnerabilities; 17: Linux software vulnerabilities
 * @method void setType(integer $Type) Set Event Alarm Type. 1: Offline; 2: Trojan; 3: Exceptional login; 4: Brute force; 5: Vulnerability (split into four types ranging from 9 to 12); 6: High-risk command; 7: Reverse sell; 8: Local privilege escalation;, 9: System component vulnerabilities; 10: Web application vulnerabilities; 11: Emergency vulnerabilities; 12: Security baseline; 14: Malicious request; 15: Network attack; 16: Windows system vulnerabilities; 17: Linux software vulnerabilities
 * @method integer getDisablePhoneWarning() Obtain 1: disable alarm; 0: enable alarm.
 * @method void setDisablePhoneWarning(integer $DisablePhoneWarning) Set 1: disable alarm; 0: enable alarm.
 * @method string getBeginTime() Obtain Start time. Format: HH:mm.
 * @method void setBeginTime(string $BeginTime) Set Start time. Format: HH:mm.
 * @method string getEndTime() Obtain End time. Format: HH:mm.
 * @method void setEndTime(string $EndTime) Set End time. Format: HH:mm.
 * @method string getControlBits() Obtain 1. Vulnerability level control bits in binary. Each bit corresponds to the vulnerability level enabling status on the corresponding page. Level: low, medium, high (0: disabled; 1: enabled). Example: 101, indicating both the low and high levels are enabled. 2. Brute force cracking control bits in binary. 01: notify upon successful brute force cracking; 10: notify upon brute force cracking failure.
 * @method void setControlBits(string $ControlBits) Set 1. Vulnerability level control bits in binary. Each bit corresponds to the vulnerability level enabling status on the corresponding page. Level: low, medium, high (0: disabled; 1: enabled). Example: 101, indicating both the low and high levels are enabled. 2. Brute force cracking control bits in binary. 01: notify upon successful brute force cracking; 10: notify upon brute force cracking failure.
 * @method integer getHostRange() Obtain Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 * @method void setHostRange(integer $HostRange) Set Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
 */
class WarningObject extends AbstractModel
{
    /**
     * @var integer Event Alarm Type. 1: Offline; 2: Trojan; 3: Exceptional login; 4: Brute force; 5: Vulnerability (split into four types ranging from 9 to 12); 6: High-risk command; 7: Reverse sell; 8: Local privilege escalation;, 9: System component vulnerabilities; 10: Web application vulnerabilities; 11: Emergency vulnerabilities; 12: Security baseline; 14: Malicious request; 15: Network attack; 16: Windows system vulnerabilities; 17: Linux software vulnerabilities
     */
    public $Type;

    /**
     * @var integer 1: disable alarm; 0: enable alarm.
     */
    public $DisablePhoneWarning;

    /**
     * @var string Start time. Format: HH:mm.
     */
    public $BeginTime;

    /**
     * @var string End time. Format: HH:mm.
     */
    public $EndTime;

    /**
     * @var string 1. Vulnerability level control bits in binary. Each bit corresponds to the vulnerability level enabling status on the corresponding page. Level: low, medium, high (0: disabled; 1: enabled). Example: 101, indicating both the low and high levels are enabled. 2. Brute force cracking control bits in binary. 01: notify upon successful brute force cracking; 10: notify upon brute force cracking failure.
     */
    public $ControlBits;

    /**
     * @var integer Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
     */
    public $HostRange;

    /**
     * @param integer $Type Event Alarm Type. 1: Offline; 2: Trojan; 3: Exceptional login; 4: Brute force; 5: Vulnerability (split into four types ranging from 9 to 12); 6: High-risk command; 7: Reverse sell; 8: Local privilege escalation;, 9: System component vulnerabilities; 10: Web application vulnerabilities; 11: Emergency vulnerabilities; 12: Security baseline; 14: Malicious request; 15: Network attack; 16: Windows system vulnerabilities; 17: Linux software vulnerabilities
     * @param integer $DisablePhoneWarning 1: disable alarm; 0: enable alarm.
     * @param string $BeginTime Start time. Format: HH:mm.
     * @param string $EndTime End time. Format: HH:mm.
     * @param string $ControlBits 1. Vulnerability level control bits in binary. Each bit corresponds to the vulnerability level enabling status on the corresponding page. Level: low, medium, high (0: disabled; 1: enabled). Example: 101, indicating both the low and high levels are enabled. 2. Brute force cracking control bits in binary. 01: notify upon successful brute force cracking; 10: notify upon brute force cracking failure.
     * @param integer $HostRange Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DisablePhoneWarning",$param) and $param["DisablePhoneWarning"] !== null) {
            $this->DisablePhoneWarning = $param["DisablePhoneWarning"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ControlBits",$param) and $param["ControlBits"] !== null) {
            $this->ControlBits = $param["ControlBits"];
        }

        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }
    }
}
