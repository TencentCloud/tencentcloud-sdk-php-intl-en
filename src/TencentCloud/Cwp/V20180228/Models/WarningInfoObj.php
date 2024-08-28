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
 * List of alarm settings
 *
 * @method integer getType() Obtain Event alarm type. 1: offline; 2: Trojan; 3: abnormal log-in; 4: brute force cracking; 5: vulnerability (including types of values 9, 10, 11, and 12); 6: high-risk command; 7: reverse shell; 8: local privilege escalation; 9: application vulnerability; 10: web CMS vulnerability; 11: emergency vulnerability; 12: security baseline; 13: tampering prevention; 14: malicious request; 15: network attack; 16: Windows system vulnerability; 17: Linux software vulnerability; 18: core file monitoring; 19: client uninstallation; 20: client offline.
 * @method void setType(integer $Type) Set Event alarm type. 1: offline; 2: Trojan; 3: abnormal log-in; 4: brute force cracking; 5: vulnerability (including types of values 9, 10, 11, and 12); 6: high-risk command; 7: reverse shell; 8: local privilege escalation; 9: application vulnerability; 10: web CMS vulnerability; 11: emergency vulnerability; 12: security baseline; 13: tampering prevention; 14: malicious request; 15: network attack; 16: Windows system vulnerability; 17: Linux software vulnerability; 18: core file monitoring; 19: client uninstallation; 20: client offline.
 * @method integer getDisablePhoneWarning() Obtain 1: disable alarm; 0: enable alarm
 * @method void setDisablePhoneWarning(integer $DisablePhoneWarning) Set 1: disable alarm; 0: enable alarm
 * @method string getBeginTime() Obtain Start time. Format: HH:mm.
 * @method void setBeginTime(string $BeginTime) Set Start time. Format: HH:mm.
 * @method string getEndTime() Obtain End time. Format: HH:mm.
 * @method void setEndTime(string $EndTime) Set End time. Format: HH:mm.
 * @method string getTimeZone() Obtain Time zone information
 * @method void setTimeZone(string $TimeZone) Set Time zone information
 * @method integer getControlBit() Obtain Vulnerability level control bit (corresponding to the decimal storage in the database)
 * @method void setControlBit(integer $ControlBit) Set Vulnerability level control bit (corresponding to the decimal storage in the database)
 * @method string getControlBits() Obtain Vulnerability level control bits in binary. Each bit indicates the enabling status of the corresponding vulnerability level on the page: low, medium, and high (0: disabled; 1: enabled). For example, 101 indicates that both low and high levels are enabled.
 * @method void setControlBits(string $ControlBits) Set Vulnerability level control bits in binary. Each bit indicates the enabling status of the corresponding vulnerability level on the page: low, medium, and high (0: disabled; 1: enabled). For example, 101 indicates that both low and high levels are enabled.
 * @method integer getHostRange() Obtain Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostRange(integer $HostRange) Set Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Configured Number of Hosts in the Range of Alarm, used by the frontend to decide when to display prompt information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Configured Number of Hosts in the Range of Alarm, used by the frontend to decide when to display prompt information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WarningInfoObj extends AbstractModel
{
    /**
     * @var integer Event alarm type. 1: offline; 2: Trojan; 3: abnormal log-in; 4: brute force cracking; 5: vulnerability (including types of values 9, 10, 11, and 12); 6: high-risk command; 7: reverse shell; 8: local privilege escalation; 9: application vulnerability; 10: web CMS vulnerability; 11: emergency vulnerability; 12: security baseline; 13: tampering prevention; 14: malicious request; 15: network attack; 16: Windows system vulnerability; 17: Linux software vulnerability; 18: core file monitoring; 19: client uninstallation; 20: client offline.
     */
    public $Type;

    /**
     * @var integer 1: disable alarm; 0: enable alarm
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
     * @var string Time zone information
     */
    public $TimeZone;

    /**
     * @var integer Vulnerability level control bit (corresponding to the decimal storage in the database)
     */
    public $ControlBit;

    /**
     * @var string Vulnerability level control bits in binary. Each bit indicates the enabling status of the corresponding vulnerability level on the page: low, medium, and high (0: disabled; 1: enabled). For example, 101 indicates that both low and high levels are enabled.
     */
    public $ControlBits;

    /**
     * @var integer Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostRange;

    /**
     * @var integer Configured Number of Hosts in the Range of Alarm, used by the frontend to decide when to display prompt information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @param integer $Type Event alarm type. 1: offline; 2: Trojan; 3: abnormal log-in; 4: brute force cracking; 5: vulnerability (including types of values 9, 10, 11, and 12); 6: high-risk command; 7: reverse shell; 8: local privilege escalation; 9: application vulnerability; 10: web CMS vulnerability; 11: emergency vulnerability; 12: security baseline; 13: tampering prevention; 14: malicious request; 15: network attack; 16: Windows system vulnerability; 17: Linux software vulnerability; 18: core file monitoring; 19: client uninstallation; 20: client offline.
     * @param integer $DisablePhoneWarning 1: disable alarm; 0: enable alarm
     * @param string $BeginTime Start time. Format: HH:mm.
     * @param string $EndTime End time. Format: HH:mm.
     * @param string $TimeZone Time zone information
     * @param integer $ControlBit Vulnerability level control bit (corresponding to the decimal storage in the database)
     * @param string $ControlBits Vulnerability level control bits in binary. Each bit indicates the enabling status of the corresponding vulnerability level on the page: low, medium, and high (0: disabled; 1: enabled). For example, 101 indicates that both low and high levels are enabled.
     * @param integer $HostRange Alarm Host Range Type. 0: All Hosts; 1: By Project; 2: By Tencent Cloud Tag; 3: By Host Security Tag; 4: Custom Hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Configured Number of Hosts in the Range of Alarm, used by the frontend to decide when to display prompt information.
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

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("ControlBit",$param) and $param["ControlBit"] !== null) {
            $this->ControlBit = $param["ControlBit"];
        }

        if (array_key_exists("ControlBits",$param) and $param["ControlBits"] !== null) {
            $this->ControlBits = $param["ControlBits"];
        }

        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
