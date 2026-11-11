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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability scanning status of a host
 *
 * @method boolean getHasScanned() Obtain Whether vulnerability scanning has been initiated
Enumeration values:
true: Vulnerability scanning initiated
false: vulnerability scanning not initiated
 * @method void setHasScanned(boolean $HasScanned) Set Whether vulnerability scanning has been initiated
Enumeration values:
true: Vulnerability scanning initiated
false: vulnerability scanning not initiated
 * @method boolean getIsFirstScan() Obtain If it is the first vulnerability scanning judgment scenario
Enumeration values:
true: is in the first-time vulnerability scanning judgment scenario
false: not in the first vulnerability scanning judgment scenario
 * @method void setIsFirstScan(boolean $IsFirstScan) Set If it is the first vulnerability scanning judgment scenario
Enumeration values:
true: is in the first-time vulnerability scanning judgment scenario
false: not in the first vulnerability scanning judgment scenario
 * @method string getScanTaskStatus() Obtain Status of the last scan task
Enumeration values:
SCANNING: scan in progress
SUCCESS: Scan successful
PARTIAL_FAILED: Partial scan failure
ALL_FAILED: All scans failed
STOPPED: Stop scanning
 * @method void setScanTaskStatus(string $ScanTaskStatus) Set Status of the last scan task
Enumeration values:
SCANNING: scan in progress
SUCCESS: Scan successful
PARTIAL_FAILED: Partial scan failure
ALL_FAILED: All scans failed
STOPPED: Stop scanning
 * @method string getScanScene() Obtain Business status of the page
Enumeration values:
NEVER_SCANNED: Never scanned for vulnerabilities
SCANNING: scan in progress
FIRST_SCAN_FAILED: Vulnerability scanning failed for the first time
FIRST_SCAN_HAS_FIXABLE_VUL: First scan complete, fixable vulnerabilities exist
FIRST_SCAN_NO_FIXABLE_VUL: First scan completed. Vulnerabilities exist but none can be fixed.
FIRST_SCAN_NO_VUL: First scan complete, no vulnerabilities
SCANNED_HAS_FIXABLE_VUL: Not the first scan, fixable vulnerabilities exist
SCANNED_NO_FIXABLE_VUL: Not the first scan. Vulnerabilities exist but none can be fixed.
SCANNED_NO_VUL: Not the first scan, no vulnerabilities
 * @method void setScanScene(string $ScanScene) Set Business status of the page
Enumeration values:
NEVER_SCANNED: Never scanned for vulnerabilities
SCANNING: scan in progress
FIRST_SCAN_FAILED: Vulnerability scanning failed for the first time
FIRST_SCAN_HAS_FIXABLE_VUL: First scan complete, fixable vulnerabilities exist
FIRST_SCAN_NO_FIXABLE_VUL: First scan completed. Vulnerabilities exist but none can be fixed.
FIRST_SCAN_NO_VUL: First scan complete, no vulnerabilities
SCANNED_HAS_FIXABLE_VUL: Not the first scan, fixable vulnerabilities exist
SCANNED_NO_FIXABLE_VUL: Not the first scan. Vulnerabilities exist but none can be fixed.
SCANNED_NO_VUL: Not the first scan, no vulnerabilities
 * @method string getLatestScanTime() Obtain Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
Returns an empty string if unscanned.
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
Returns an empty string if unscanned.
 * @method integer getTotalVulCount() Obtain Current total count of pending vulnerabilities
Contains common host vulnerabilities and pending risks of the latest Windows KB.
 * @method void setTotalVulCount(integer $TotalVulCount) Set Current total count of pending vulnerabilities
Contains common host vulnerabilities and pending risks of the latest Windows KB.
 * @method integer getFixableVulCount() Obtain Current number of fixable vulnerabilities
Contains ordinary host vulnerabilities that support one-click repair and the latest pending Windows KB risks.
 * @method void setFixableVulCount(integer $FixableVulCount) Set Current number of fixable vulnerabilities
Contains ordinary host vulnerabilities that support one-click repair and the latest pending Windows KB risks.
 * @method integer getFixableEmergencyCount() Obtain Current number of repairable emergency vulnerabilities
Urgent vulnerabilities are prioritized for categorization: urgent vulnerabilities are only counted into this field and no longer included in the Linux software vulnerability count.
 * @method void setFixableEmergencyCount(integer $FixableEmergencyCount) Set Current number of repairable emergency vulnerabilities
Urgent vulnerabilities are prioritized for categorization: urgent vulnerabilities are only counted into this field and no longer included in the Linux software vulnerability count.
 * @method integer getFixableLinuxVulCount() Obtain Current number of repairable Linux software vulnerabilities
Only non-emergency Linux software vulnerabilities are counted.
 * @method void setFixableLinuxVulCount(integer $FixableLinuxVulCount) Set Current number of repairable Linux software vulnerabilities
Only non-emergency Linux software vulnerabilities are counted.
 * @method integer getFixableWindowVulCount() Obtain Number of currently repairable patches for Windows systems
Statistics of the latest pending Windows KB risks.
 * @method void setFixableWindowVulCount(integer $FixableWindowVulCount) Set Number of currently repairable patches for Windows systems
Statistics of the latest pending Windows KB risks.
 */
class HostVulScanStatus extends AbstractModel
{
    /**
     * @var boolean Whether vulnerability scanning has been initiated
Enumeration values:
true: Vulnerability scanning initiated
false: vulnerability scanning not initiated
     */
    public $HasScanned;

    /**
     * @var boolean If it is the first vulnerability scanning judgment scenario
Enumeration values:
true: is in the first-time vulnerability scanning judgment scenario
false: not in the first vulnerability scanning judgment scenario
     */
    public $IsFirstScan;

    /**
     * @var string Status of the last scan task
Enumeration values:
SCANNING: scan in progress
SUCCESS: Scan successful
PARTIAL_FAILED: Partial scan failure
ALL_FAILED: All scans failed
STOPPED: Stop scanning
     */
    public $ScanTaskStatus;

    /**
     * @var string Business status of the page
Enumeration values:
NEVER_SCANNED: Never scanned for vulnerabilities
SCANNING: scan in progress
FIRST_SCAN_FAILED: Vulnerability scanning failed for the first time
FIRST_SCAN_HAS_FIXABLE_VUL: First scan complete, fixable vulnerabilities exist
FIRST_SCAN_NO_FIXABLE_VUL: First scan completed. Vulnerabilities exist but none can be fixed.
FIRST_SCAN_NO_VUL: First scan complete, no vulnerabilities
SCANNED_HAS_FIXABLE_VUL: Not the first scan, fixable vulnerabilities exist
SCANNED_NO_FIXABLE_VUL: Not the first scan. Vulnerabilities exist but none can be fixed.
SCANNED_NO_VUL: Not the first scan, no vulnerabilities
     */
    public $ScanScene;

    /**
     * @var string Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
Returns an empty string if unscanned.
     */
    public $LatestScanTime;

    /**
     * @var integer Current total count of pending vulnerabilities
Contains common host vulnerabilities and pending risks of the latest Windows KB.
     */
    public $TotalVulCount;

    /**
     * @var integer Current number of fixable vulnerabilities
Contains ordinary host vulnerabilities that support one-click repair and the latest pending Windows KB risks.
     */
    public $FixableVulCount;

    /**
     * @var integer Current number of repairable emergency vulnerabilities
Urgent vulnerabilities are prioritized for categorization: urgent vulnerabilities are only counted into this field and no longer included in the Linux software vulnerability count.
     */
    public $FixableEmergencyCount;

    /**
     * @var integer Current number of repairable Linux software vulnerabilities
Only non-emergency Linux software vulnerabilities are counted.
     */
    public $FixableLinuxVulCount;

    /**
     * @var integer Number of currently repairable patches for Windows systems
Statistics of the latest pending Windows KB risks.
     */
    public $FixableWindowVulCount;

    /**
     * @param boolean $HasScanned Whether vulnerability scanning has been initiated
Enumeration values:
true: Vulnerability scanning initiated
false: vulnerability scanning not initiated
     * @param boolean $IsFirstScan If it is the first vulnerability scanning judgment scenario
Enumeration values:
true: is in the first-time vulnerability scanning judgment scenario
false: not in the first vulnerability scanning judgment scenario
     * @param string $ScanTaskStatus Status of the last scan task
Enumeration values:
SCANNING: scan in progress
SUCCESS: Scan successful
PARTIAL_FAILED: Partial scan failure
ALL_FAILED: All scans failed
STOPPED: Stop scanning
     * @param string $ScanScene Business status of the page
Enumeration values:
NEVER_SCANNED: Never scanned for vulnerabilities
SCANNING: scan in progress
FIRST_SCAN_FAILED: Vulnerability scanning failed for the first time
FIRST_SCAN_HAS_FIXABLE_VUL: First scan complete, fixable vulnerabilities exist
FIRST_SCAN_NO_FIXABLE_VUL: First scan completed. Vulnerabilities exist but none can be fixed.
FIRST_SCAN_NO_VUL: First scan complete, no vulnerabilities
SCANNED_HAS_FIXABLE_VUL: Not the first scan, fixable vulnerabilities exist
SCANNED_NO_FIXABLE_VUL: Not the first scan. Vulnerabilities exist but none can be fixed.
SCANNED_NO_VUL: Not the first scan, no vulnerabilities
     * @param string $LatestScanTime Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
Returns an empty string if unscanned.
     * @param integer $TotalVulCount Current total count of pending vulnerabilities
Contains common host vulnerabilities and pending risks of the latest Windows KB.
     * @param integer $FixableVulCount Current number of fixable vulnerabilities
Contains ordinary host vulnerabilities that support one-click repair and the latest pending Windows KB risks.
     * @param integer $FixableEmergencyCount Current number of repairable emergency vulnerabilities
Urgent vulnerabilities are prioritized for categorization: urgent vulnerabilities are only counted into this field and no longer included in the Linux software vulnerability count.
     * @param integer $FixableLinuxVulCount Current number of repairable Linux software vulnerabilities
Only non-emergency Linux software vulnerabilities are counted.
     * @param integer $FixableWindowVulCount Number of currently repairable patches for Windows systems
Statistics of the latest pending Windows KB risks.
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
        if (array_key_exists("HasScanned",$param) and $param["HasScanned"] !== null) {
            $this->HasScanned = $param["HasScanned"];
        }

        if (array_key_exists("IsFirstScan",$param) and $param["IsFirstScan"] !== null) {
            $this->IsFirstScan = $param["IsFirstScan"];
        }

        if (array_key_exists("ScanTaskStatus",$param) and $param["ScanTaskStatus"] !== null) {
            $this->ScanTaskStatus = $param["ScanTaskStatus"];
        }

        if (array_key_exists("ScanScene",$param) and $param["ScanScene"] !== null) {
            $this->ScanScene = $param["ScanScene"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("TotalVulCount",$param) and $param["TotalVulCount"] !== null) {
            $this->TotalVulCount = $param["TotalVulCount"];
        }

        if (array_key_exists("FixableVulCount",$param) and $param["FixableVulCount"] !== null) {
            $this->FixableVulCount = $param["FixableVulCount"];
        }

        if (array_key_exists("FixableEmergencyCount",$param) and $param["FixableEmergencyCount"] !== null) {
            $this->FixableEmergencyCount = $param["FixableEmergencyCount"];
        }

        if (array_key_exists("FixableLinuxVulCount",$param) and $param["FixableLinuxVulCount"] !== null) {
            $this->FixableLinuxVulCount = $param["FixableLinuxVulCount"];
        }

        if (array_key_exists("FixableWindowVulCount",$param) and $param["FixableWindowVulCount"] !== null) {
            $this->FixableWindowVulCount = $param["FixableWindowVulCount"];
        }
    }
}
