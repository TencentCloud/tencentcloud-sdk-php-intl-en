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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupSummary response structure.
 *
 * @method integer getFreeSpace() Obtain Actual free total space, in KB.
 * @method void setFreeSpace(integer $FreeSpace) Set Actual free total space, in KB.
 * @method integer getActualUsedSpace() Obtain Actual used space of backups, in KB.
 * @method void setActualUsedSpace(integer $ActualUsedSpace) Set Actual used space of backups, in KB.
 * @method integer getBackupFilesTotal() Obtain Total number of backup files.
 * @method void setBackupFilesTotal(integer $BackupFilesTotal) Set Total number of backup files.
 * @method integer getBillingSpace() Obtain Charged space of the space occupied by backups, in KB.
 * @method void setBillingSpace(integer $BillingSpace) Set Charged space of the space occupied by backups, in KB.
 * @method integer getDataBackupSpace() Obtain Data backup usage space, in KB.
 * @method void setDataBackupSpace(integer $DataBackupSpace) Set Data backup usage space, in KB.
 * @method integer getDataBackupCount() Obtain Total number of data backup files.
 * @method void setDataBackupCount(integer $DataBackupCount) Set Total number of data backup files.
 * @method integer getManualBackupSpace() Obtain Storage space used by manual backups in data backup, in KB.
 * @method void setManualBackupSpace(integer $ManualBackupSpace) Set Storage space used by manual backups in data backup, in KB.
 * @method integer getManualBackupCount() Obtain Total number of files for manual backups in data backup.
 * @method void setManualBackupCount(integer $ManualBackupCount) Set Total number of files for manual backups in data backup.
 * @method integer getAutoBackupSpace() Obtain Storage space used by automatic backups in data backup, in KB.
 * @method void setAutoBackupSpace(integer $AutoBackupSpace) Set Storage space used by automatic backups in data backup, in KB.
 * @method integer getAutoBackupCount() Obtain Total number of files for automatic backups in data backup.
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set Total number of files for automatic backups in data backup.
 * @method integer getLogBackupSpace() Obtain Backup usage space for logs, in KB.
 * @method void setLogBackupSpace(integer $LogBackupSpace) Set Backup usage space for logs, in KB.
 * @method integer getLogBackupCount() Obtain Total number of log backup files.
 * @method void setLogBackupCount(integer $LogBackupCount) Set Total number of log backup files.
 * @method float getEstimatedAmount() Obtain Estimated fees, in USD/hour.
 * @method void setEstimatedAmount(float $EstimatedAmount) Set Estimated fees, in USD/hour.
 * @method integer getLocalBackupFilesTotal() Obtain Total number of local backup files.
 * @method void setLocalBackupFilesTotal(integer $LocalBackupFilesTotal) Set Total number of local backup files.
 * @method integer getCrossBackupFilesTotal() Obtain Total number of cross-region backup files.
 * @method void setCrossBackupFilesTotal(integer $CrossBackupFilesTotal) Set Total number of cross-region backup files.
 * @method integer getCrossBillingSpace() Obtain Charged space of the space occupied by cross-region backups, in KB.
 * @method void setCrossBillingSpace(integer $CrossBillingSpace) Set Charged space of the space occupied by cross-region backups, in KB.
 * @method integer getCrossAutoBackupSpace() Obtain Space used by cross-region automatic data backups, in KB.
 * @method void setCrossAutoBackupSpace(integer $CrossAutoBackupSpace) Set Space used by cross-region automatic data backups, in KB.
 * @method integer getCrossAutoBackupCount() Obtain Total number of files for cross-region automatic data backups.
 * @method void setCrossAutoBackupCount(integer $CrossAutoBackupCount) Set Total number of files for cross-region automatic data backups.
 * @method integer getLocalLogBackupSpace() Obtain Space used by local log backups, in KB.
 * @method void setLocalLogBackupSpace(integer $LocalLogBackupSpace) Set Space used by local log backups, in KB.
 * @method integer getLocalLogBackupCount() Obtain Total number of files for local log backups.
 * @method void setLocalLogBackupCount(integer $LocalLogBackupCount) Set Total number of files for local log backups.
 * @method integer getCrossLogBackupSpace() Obtain Space used by cross-region log backups, in KB.
 * @method void setCrossLogBackupSpace(integer $CrossLogBackupSpace) Set Space used by cross-region log backups, in KB.
 * @method integer getCrossLogBackupCount() Obtain Total number of files for cross-region log backups.
 * @method void setCrossLogBackupCount(integer $CrossLogBackupCount) Set Total number of files for cross-region log backups.
 * @method float getCrossEstimatedAmount() Obtain Estimated fees for cross-region backups, in USD/hour.
 * @method void setCrossEstimatedAmount(float $CrossEstimatedAmount) Set Estimated fees for cross-region backups, in USD/hour.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBackupSummaryResponse extends AbstractModel
{
    /**
     * @var integer Actual free total space, in KB.
     */
    public $FreeSpace;

    /**
     * @var integer Actual used space of backups, in KB.
     */
    public $ActualUsedSpace;

    /**
     * @var integer Total number of backup files.
     */
    public $BackupFilesTotal;

    /**
     * @var integer Charged space of the space occupied by backups, in KB.
     */
    public $BillingSpace;

    /**
     * @var integer Data backup usage space, in KB.
     */
    public $DataBackupSpace;

    /**
     * @var integer Total number of data backup files.
     */
    public $DataBackupCount;

    /**
     * @var integer Storage space used by manual backups in data backup, in KB.
     */
    public $ManualBackupSpace;

    /**
     * @var integer Total number of files for manual backups in data backup.
     */
    public $ManualBackupCount;

    /**
     * @var integer Storage space used by automatic backups in data backup, in KB.
     */
    public $AutoBackupSpace;

    /**
     * @var integer Total number of files for automatic backups in data backup.
     */
    public $AutoBackupCount;

    /**
     * @var integer Backup usage space for logs, in KB.
     */
    public $LogBackupSpace;

    /**
     * @var integer Total number of log backup files.
     */
    public $LogBackupCount;

    /**
     * @var float Estimated fees, in USD/hour.
     */
    public $EstimatedAmount;

    /**
     * @var integer Total number of local backup files.
     */
    public $LocalBackupFilesTotal;

    /**
     * @var integer Total number of cross-region backup files.
     */
    public $CrossBackupFilesTotal;

    /**
     * @var integer Charged space of the space occupied by cross-region backups, in KB.
     */
    public $CrossBillingSpace;

    /**
     * @var integer Space used by cross-region automatic data backups, in KB.
     */
    public $CrossAutoBackupSpace;

    /**
     * @var integer Total number of files for cross-region automatic data backups.
     */
    public $CrossAutoBackupCount;

    /**
     * @var integer Space used by local log backups, in KB.
     */
    public $LocalLogBackupSpace;

    /**
     * @var integer Total number of files for local log backups.
     */
    public $LocalLogBackupCount;

    /**
     * @var integer Space used by cross-region log backups, in KB.
     */
    public $CrossLogBackupSpace;

    /**
     * @var integer Total number of files for cross-region log backups.
     */
    public $CrossLogBackupCount;

    /**
     * @var float Estimated fees for cross-region backups, in USD/hour.
     */
    public $CrossEstimatedAmount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $FreeSpace Actual free total space, in KB.
     * @param integer $ActualUsedSpace Actual used space of backups, in KB.
     * @param integer $BackupFilesTotal Total number of backup files.
     * @param integer $BillingSpace Charged space of the space occupied by backups, in KB.
     * @param integer $DataBackupSpace Data backup usage space, in KB.
     * @param integer $DataBackupCount Total number of data backup files.
     * @param integer $ManualBackupSpace Storage space used by manual backups in data backup, in KB.
     * @param integer $ManualBackupCount Total number of files for manual backups in data backup.
     * @param integer $AutoBackupSpace Storage space used by automatic backups in data backup, in KB.
     * @param integer $AutoBackupCount Total number of files for automatic backups in data backup.
     * @param integer $LogBackupSpace Backup usage space for logs, in KB.
     * @param integer $LogBackupCount Total number of log backup files.
     * @param float $EstimatedAmount Estimated fees, in USD/hour.
     * @param integer $LocalBackupFilesTotal Total number of local backup files.
     * @param integer $CrossBackupFilesTotal Total number of cross-region backup files.
     * @param integer $CrossBillingSpace Charged space of the space occupied by cross-region backups, in KB.
     * @param integer $CrossAutoBackupSpace Space used by cross-region automatic data backups, in KB.
     * @param integer $CrossAutoBackupCount Total number of files for cross-region automatic data backups.
     * @param integer $LocalLogBackupSpace Space used by local log backups, in KB.
     * @param integer $LocalLogBackupCount Total number of files for local log backups.
     * @param integer $CrossLogBackupSpace Space used by cross-region log backups, in KB.
     * @param integer $CrossLogBackupCount Total number of files for cross-region log backups.
     * @param float $CrossEstimatedAmount Estimated fees for cross-region backups, in USD/hour.
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
        if (array_key_exists("FreeSpace",$param) and $param["FreeSpace"] !== null) {
            $this->FreeSpace = $param["FreeSpace"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("BackupFilesTotal",$param) and $param["BackupFilesTotal"] !== null) {
            $this->BackupFilesTotal = $param["BackupFilesTotal"];
        }

        if (array_key_exists("BillingSpace",$param) and $param["BillingSpace"] !== null) {
            $this->BillingSpace = $param["BillingSpace"];
        }

        if (array_key_exists("DataBackupSpace",$param) and $param["DataBackupSpace"] !== null) {
            $this->DataBackupSpace = $param["DataBackupSpace"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("ManualBackupSpace",$param) and $param["ManualBackupSpace"] !== null) {
            $this->ManualBackupSpace = $param["ManualBackupSpace"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("AutoBackupSpace",$param) and $param["AutoBackupSpace"] !== null) {
            $this->AutoBackupSpace = $param["AutoBackupSpace"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("LogBackupSpace",$param) and $param["LogBackupSpace"] !== null) {
            $this->LogBackupSpace = $param["LogBackupSpace"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("EstimatedAmount",$param) and $param["EstimatedAmount"] !== null) {
            $this->EstimatedAmount = $param["EstimatedAmount"];
        }

        if (array_key_exists("LocalBackupFilesTotal",$param) and $param["LocalBackupFilesTotal"] !== null) {
            $this->LocalBackupFilesTotal = $param["LocalBackupFilesTotal"];
        }

        if (array_key_exists("CrossBackupFilesTotal",$param) and $param["CrossBackupFilesTotal"] !== null) {
            $this->CrossBackupFilesTotal = $param["CrossBackupFilesTotal"];
        }

        if (array_key_exists("CrossBillingSpace",$param) and $param["CrossBillingSpace"] !== null) {
            $this->CrossBillingSpace = $param["CrossBillingSpace"];
        }

        if (array_key_exists("CrossAutoBackupSpace",$param) and $param["CrossAutoBackupSpace"] !== null) {
            $this->CrossAutoBackupSpace = $param["CrossAutoBackupSpace"];
        }

        if (array_key_exists("CrossAutoBackupCount",$param) and $param["CrossAutoBackupCount"] !== null) {
            $this->CrossAutoBackupCount = $param["CrossAutoBackupCount"];
        }

        if (array_key_exists("LocalLogBackupSpace",$param) and $param["LocalLogBackupSpace"] !== null) {
            $this->LocalLogBackupSpace = $param["LocalLogBackupSpace"];
        }

        if (array_key_exists("LocalLogBackupCount",$param) and $param["LocalLogBackupCount"] !== null) {
            $this->LocalLogBackupCount = $param["LocalLogBackupCount"];
        }

        if (array_key_exists("CrossLogBackupSpace",$param) and $param["CrossLogBackupSpace"] !== null) {
            $this->CrossLogBackupSpace = $param["CrossLogBackupSpace"];
        }

        if (array_key_exists("CrossLogBackupCount",$param) and $param["CrossLogBackupCount"] !== null) {
            $this->CrossLogBackupCount = $param["CrossLogBackupCount"];
        }

        if (array_key_exists("CrossEstimatedAmount",$param) and $param["CrossEstimatedAmount"] !== null) {
            $this->CrossEstimatedAmount = $param["CrossEstimatedAmount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
