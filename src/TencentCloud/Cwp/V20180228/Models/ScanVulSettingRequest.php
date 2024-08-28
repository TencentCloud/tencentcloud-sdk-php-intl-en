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
 * ScanVulSetting request structure.
 *
 * @method integer getTimerInterval() Obtain Regular detection interval (days)
 * @method void setTimerInterval(integer $TimerInterval) Set Regular detection interval (days)
 * @method array getVulCategories() Obtain Vulnerability type. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability. Pass in the values in array format. Example: [1,2]
 * @method void setVulCategories(array $VulCategories) Set Vulnerability type. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability. Pass in the values in array format. Example: [1,2]
 * @method array getVulLevels() Obtain Severity level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical. Pass in the values in array format. Example: [1,2,3]
 * @method void setVulLevels(array $VulLevels) Set Severity level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical. Pass in the values in array format. Example: [1,2,3]
 * @method string getTimerTime() Obtain Periodic detection time. Example: 02:10:50
 * @method void setTimerTime(string $TimerTime) Set Periodic detection time. Example: 02:10:50
 * @method integer getVulEmergency() Obtain Whether the vulnerability is an emergency vulnerability. 0: no; 1: yes.
 * @method void setVulEmergency(integer $VulEmergency) Set Whether the vulnerability is an emergency vulnerability. 0: no; 1: yes.
 * @method string getStartTime() Obtain Scan start time. Example: 00:00
 * @method void setStartTime(string $StartTime) Set Scan start time. Example: 00:00
 * @method string getEndTime() Obtain Scan end time. Example: 08:00
 * @method void setEndTime(string $EndTime) Set Scan end time. Example: 08:00
 * @method integer getEnableScan() Obtain Whether to enable scanning. 1: enable; 0: disable.
 * @method void setEnableScan(integer $EnableScan) Set Whether to enable scanning. 1: enable; 0: disable.
 * @method array getUuids() Obtain If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
 * @method void setUuids(array $Uuids) Set If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
 * @method integer getScanMethod() Obtain 
 * @method void setScanMethod(integer $ScanMethod) Set 
 */
class ScanVulSettingRequest extends AbstractModel
{
    /**
     * @var integer Regular detection interval (days)
     */
    public $TimerInterval;

    /**
     * @var array Vulnerability type. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability. Pass in the values in array format. Example: [1,2]
     */
    public $VulCategories;

    /**
     * @var array Severity level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical. Pass in the values in array format. Example: [1,2,3]
     */
    public $VulLevels;

    /**
     * @var string Periodic detection time. Example: 02:10:50
     */
    public $TimerTime;

    /**
     * @var integer Whether the vulnerability is an emergency vulnerability. 0: no; 1: yes.
     */
    public $VulEmergency;

    /**
     * @var string Scan start time. Example: 00:00
     */
    public $StartTime;

    /**
     * @var string Scan end time. Example: 08:00
     */
    public $EndTime;

    /**
     * @var integer Whether to enable scanning. 1: enable; 0: disable.
     */
    public $EnableScan;

    /**
     * @var array If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
     */
    public $Uuids;

    /**
     * @var integer 
     */
    public $ScanMethod;

    /**
     * @param integer $TimerInterval Regular detection interval (days)
     * @param array $VulCategories Vulnerability type. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability. Pass in the values in array format. Example: [1,2]
     * @param array $VulLevels Severity level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical. Pass in the values in array format. Example: [1,2,3]
     * @param string $TimerTime Periodic detection time. Example: 02:10:50
     * @param integer $VulEmergency Whether the vulnerability is an emergency vulnerability. 0: no; 1: yes.
     * @param string $StartTime Scan start time. Example: 00:00
     * @param string $EndTime Scan end time. Example: 08:00
     * @param integer $EnableScan Whether to enable scanning. 1: enable; 0: disable.
     * @param array $Uuids If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
     * @param integer $ScanMethod 
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
        if (array_key_exists("TimerInterval",$param) and $param["TimerInterval"] !== null) {
            $this->TimerInterval = $param["TimerInterval"];
        }

        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("TimerTime",$param) and $param["TimerTime"] !== null) {
            $this->TimerTime = $param["TimerTime"];
        }

        if (array_key_exists("VulEmergency",$param) and $param["VulEmergency"] !== null) {
            $this->VulEmergency = $param["VulEmergency"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("ScanMethod",$param) and $param["ScanMethod"] !== null) {
            $this->ScanMethod = $param["ScanMethod"];
        }
    }
}
