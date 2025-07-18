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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanVulSetting response structure.
 *
 * @method string getVulCategories() Obtain Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
 * @method void setVulCategories(string $VulCategories) Set Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
 * @method string getVulLevels() Obtain Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical (multiple selections are separated by English commas)
 * @method void setVulLevels(string $VulLevels) Set Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical (multiple selections are separated by English commas)
 * @method integer getTimerInterval() Obtain Regular detection interval (days)
 * @method void setTimerInterval(integer $TimerInterval) Set Regular detection interval (days)
 * @method string getTimerTime() Obtain Regular detection time, such as 00:00
 * @method void setTimerTime(string $TimerTime) Set Regular detection time, such as 00:00
 * @method integer getVulEmergency() Obtain Whether an emergency vulnerability: 0 - no; 1 - yes
 * @method void setVulEmergency(integer $VulEmergency) Set Whether an emergency vulnerability: 0 - no; 1 - yes
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method integer getEnableScan() Obtain Whether enabled
 * @method void setEnableScan(integer $EnableScan) Set Whether enabled
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getClickTimeout() Obtain One-click scan timeout duration, such as 1800 seconds
 * @method void setClickTimeout(integer $ClickTimeout) Set One-click scan timeout duration, such as 1800 seconds
 * @method array getUuids() Obtain If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
 * @method void setUuids(array $Uuids) Set If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
 * @method integer getScanMethod() Obtain 
 * @method void setScanMethod(integer $ScanMethod) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeScanVulSettingResponse extends AbstractModel
{
    /**
     * @var string Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
     */
    public $VulCategories;

    /**
     * @var string Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical (multiple selections are separated by English commas)
     */
    public $VulLevels;

    /**
     * @var integer Regular detection interval (days)
     */
    public $TimerInterval;

    /**
     * @var string Regular detection time, such as 00:00
     */
    public $TimerTime;

    /**
     * @var integer Whether an emergency vulnerability: 0 - no; 1 - yes
     */
    public $VulEmergency;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var integer Whether enabled
     */
    public $EnableScan;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer One-click scan timeout duration, such as 1800 seconds
     */
    public $ClickTimeout;

    /**
     * @var array If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
     */
    public $Uuids;

    /**
     * @var integer 
     */
    public $ScanMethod;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $VulCategories Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
     * @param string $VulLevels Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical (multiple selections are separated by English commas)
     * @param integer $TimerInterval Regular detection interval (days)
     * @param string $TimerTime Regular detection time, such as 00:00
     * @param integer $VulEmergency Whether an emergency vulnerability: 0 - no; 1 - yes
     * @param string $StartTime Start time
     * @param integer $EnableScan Whether enabled
     * @param string $EndTime End time
     * @param integer $ClickTimeout One-click scan timeout duration, such as 1800 seconds
     * @param array $Uuids If empty, scan hosts with all Professional, Premium, and General Discount editions by default; if not empty, only scan the selected hosts.
     * @param integer $ScanMethod 
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("TimerInterval",$param) and $param["TimerInterval"] !== null) {
            $this->TimerInterval = $param["TimerInterval"];
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

        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ClickTimeout",$param) and $param["ClickTimeout"] !== null) {
            $this->ClickTimeout = $param["ClickTimeout"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("ScanMethod",$param) and $param["ScanMethod"] !== null) {
            $this->ScanMethod = $param["ScanMethod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
