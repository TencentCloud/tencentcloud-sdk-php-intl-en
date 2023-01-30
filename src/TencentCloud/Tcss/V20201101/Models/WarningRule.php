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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert configuration policy
 *
 * @method string getType() Obtain Alert event type:
Image repository security - Trojan: `IMG_REG_VIRUS`.
Image repository security - Vulnerability: `IMG_REG_VUL`.
Image repository security - Sensitive data: `IMG_REG_RISK`.
Image security - Trojan: `IMG_VIRUS`.
Image security - Vulnerability: `IMG_VUL`.
Image security - Sensitive data: `IMG_RISK`.
Image security - Image blocking: `IMG_INTERCEPT`.
Runtime security - Container escape: `RUNTIME_ESCAPE`.
Runtime security - Abnormal process: `RUNTIME_FILE`.
Runtime security - Abnormal file access: `RUNTIME_PROCESS`.
Runtime security - High-risk syscall: `RUNTIME_SYSCALL`.
Runtime security - Reverse shell: `RUNTIME_REVERSE_SHELL`.
Runtime security - Trojan: `RUNTIME_VIRUS`.
 * @method void setType(string $Type) Set Alert event type:
Image repository security - Trojan: `IMG_REG_VIRUS`.
Image repository security - Vulnerability: `IMG_REG_VUL`.
Image repository security - Sensitive data: `IMG_REG_RISK`.
Image security - Trojan: `IMG_VIRUS`.
Image security - Vulnerability: `IMG_VUL`.
Image security - Sensitive data: `IMG_RISK`.
Image security - Image blocking: `IMG_INTERCEPT`.
Runtime security - Container escape: `RUNTIME_ESCAPE`.
Runtime security - Abnormal process: `RUNTIME_FILE`.
Runtime security - Abnormal file access: `RUNTIME_PROCESS`.
Runtime security - High-risk syscall: `RUNTIME_SYSCALL`.
Runtime security - Reverse shell: `RUNTIME_REVERSE_SHELL`.
Runtime security - Trojan: `RUNTIME_VIRUS`.
 * @method string getSwitch() Obtain Switch status:
`ON`: On.
`OFF`: Off.
 * @method void setSwitch(string $Switch) Set Switch status:
`ON`: On.
`OFF`: Off.
 * @method string getBeginTime() Obtain Alert start time in the format of "HH:mm"
 * @method void setBeginTime(string $BeginTime) Set Alert start time in the format of "HH:mm"
 * @method string getEndTime() Obtain Alert end time in the format of "HH:mm"
 * @method void setEndTime(string $EndTime) Set Alert end time in the format of "HH:mm"
 * @method string getControlBits() Obtain Alert level policy control. Each binary bit represents a meaning, and the value is passed as a string.
The control switch can be high, medium, or low, corresponding to the third, second, and first binary bit, respectively. Valid values: `0` (off); `1` (on).
For example, if the high and medium levels indicate to enable the alert and the low level indicates to disable it, the binary value is `110`.
If level control does not take effect for the alert type, pass in `1`.
 * @method void setControlBits(string $ControlBits) Set Alert level policy control. Each binary bit represents a meaning, and the value is passed as a string.
The control switch can be high, medium, or low, corresponding to the third, second, and first binary bit, respectively. Valid values: `0` (off); `1` (on).
For example, if the high and medium levels indicate to enable the alert and the low level indicates to disable it, the binary value is `110`.
If level control does not take effect for the alert type, pass in `1`.
 */
class WarningRule extends AbstractModel
{
    /**
     * @var string Alert event type:
Image repository security - Trojan: `IMG_REG_VIRUS`.
Image repository security - Vulnerability: `IMG_REG_VUL`.
Image repository security - Sensitive data: `IMG_REG_RISK`.
Image security - Trojan: `IMG_VIRUS`.
Image security - Vulnerability: `IMG_VUL`.
Image security - Sensitive data: `IMG_RISK`.
Image security - Image blocking: `IMG_INTERCEPT`.
Runtime security - Container escape: `RUNTIME_ESCAPE`.
Runtime security - Abnormal process: `RUNTIME_FILE`.
Runtime security - Abnormal file access: `RUNTIME_PROCESS`.
Runtime security - High-risk syscall: `RUNTIME_SYSCALL`.
Runtime security - Reverse shell: `RUNTIME_REVERSE_SHELL`.
Runtime security - Trojan: `RUNTIME_VIRUS`.
     */
    public $Type;

    /**
     * @var string Switch status:
`ON`: On.
`OFF`: Off.
     */
    public $Switch;

    /**
     * @var string Alert start time in the format of "HH:mm"
     */
    public $BeginTime;

    /**
     * @var string Alert end time in the format of "HH:mm"
     */
    public $EndTime;

    /**
     * @var string Alert level policy control. Each binary bit represents a meaning, and the value is passed as a string.
The control switch can be high, medium, or low, corresponding to the third, second, and first binary bit, respectively. Valid values: `0` (off); `1` (on).
For example, if the high and medium levels indicate to enable the alert and the low level indicates to disable it, the binary value is `110`.
If level control does not take effect for the alert type, pass in `1`.
     */
    public $ControlBits;

    /**
     * @param string $Type Alert event type:
Image repository security - Trojan: `IMG_REG_VIRUS`.
Image repository security - Vulnerability: `IMG_REG_VUL`.
Image repository security - Sensitive data: `IMG_REG_RISK`.
Image security - Trojan: `IMG_VIRUS`.
Image security - Vulnerability: `IMG_VUL`.
Image security - Sensitive data: `IMG_RISK`.
Image security - Image blocking: `IMG_INTERCEPT`.
Runtime security - Container escape: `RUNTIME_ESCAPE`.
Runtime security - Abnormal process: `RUNTIME_FILE`.
Runtime security - Abnormal file access: `RUNTIME_PROCESS`.
Runtime security - High-risk syscall: `RUNTIME_SYSCALL`.
Runtime security - Reverse shell: `RUNTIME_REVERSE_SHELL`.
Runtime security - Trojan: `RUNTIME_VIRUS`.
     * @param string $Switch Switch status:
`ON`: On.
`OFF`: Off.
     * @param string $BeginTime Alert start time in the format of "HH:mm"
     * @param string $EndTime Alert end time in the format of "HH:mm"
     * @param string $ControlBits Alert level policy control. Each binary bit represents a meaning, and the value is passed as a string.
The control switch can be high, medium, or low, corresponding to the third, second, and first binary bit, respectively. Valid values: `0` (off); `1` (on).
For example, if the high and medium levels indicate to enable the alert and the low level indicates to disable it, the binary value is `110`.
If level control does not take effect for the alert type, pass in `1`.
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
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
    }
}
