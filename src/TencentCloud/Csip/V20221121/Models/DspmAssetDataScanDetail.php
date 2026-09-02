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
 * dspm asset data identification details
 *
 * @method integer getStatus() Obtain <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method void setStatus(integer $Status) Set <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method string getStatusInfo() Obtain <p>Identification task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method void setStatusInfo(string $StatusInfo) Set <p>Identification task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method float getProgress() Obtain <p>Recognition progress</p>
 * @method void setProgress(float $Progress) Set <p>Recognition progress</p>
 * @method string getLatestScanTime() Obtain <p>Last scan time.</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Last scan time.</p>
 * @method string getErrorInfo() Obtain <p>Recognition failure message</p>
 * @method void setErrorInfo(string $ErrorInfo) Set <p>Recognition failure message</p>
 * @method integer getDbCount() Obtain <p>Number of databases</p>
 * @method void setDbCount(integer $DbCount) Set <p>Number of databases</p>
 * @method array getCategoryIds() Obtain <p>Category id set</p>
 * @method void setCategoryIds(array $CategoryIds) Set <p>Category id set</p>
 * @method array getCategoryNames() Obtain <p>Category name collection.</p>
 * @method void setCategoryNames(array $CategoryNames) Set <p>Category name collection.</p>
 * @method DspmSensitiveScanTaskConfig getTaskConfig() Obtain <p>Scan task configuration</p>
 * @method void setTaskConfig(DspmSensitiveScanTaskConfig $TaskConfig) Set <p>Scan task configuration</p>
 * @method array getCategoryDetails() Obtain <p>Categorization details of recognition results</p>
 * @method void setCategoryDetails(array $CategoryDetails) Set <p>Categorization details of recognition results</p>
 * @method integer getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(integer $TaskId) Set <p>Task ID.</p>
 */
class DspmAssetDataScanDetail extends AbstractModel
{
    /**
     * @var integer <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     */
    public $Status;

    /**
     * @var string <p>Identification task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     */
    public $StatusInfo;

    /**
     * @var float <p>Recognition progress</p>
     */
    public $Progress;

    /**
     * @var string <p>Last scan time.</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>Recognition failure message</p>
     */
    public $ErrorInfo;

    /**
     * @var integer <p>Number of databases</p>
     */
    public $DbCount;

    /**
     * @var array <p>Category id set</p>
     */
    public $CategoryIds;

    /**
     * @var array <p>Category name collection.</p>
     */
    public $CategoryNames;

    /**
     * @var DspmSensitiveScanTaskConfig <p>Scan task configuration</p>
     */
    public $TaskConfig;

    /**
     * @var array <p>Categorization details of recognition results</p>
     */
    public $CategoryDetails;

    /**
     * @var integer <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @param integer $Status <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     * @param string $StatusInfo <p>Identification task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     * @param float $Progress <p>Recognition progress</p>
     * @param string $LatestScanTime <p>Last scan time.</p>
     * @param string $ErrorInfo <p>Recognition failure message</p>
     * @param integer $DbCount <p>Number of databases</p>
     * @param array $CategoryIds <p>Category id set</p>
     * @param array $CategoryNames <p>Category name collection.</p>
     * @param DspmSensitiveScanTaskConfig $TaskConfig <p>Scan task configuration</p>
     * @param array $CategoryDetails <p>Categorization details of recognition results</p>
     * @param integer $TaskId <p>Task ID.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = $param["StatusInfo"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("DbCount",$param) and $param["DbCount"] !== null) {
            $this->DbCount = $param["DbCount"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("CategoryNames",$param) and $param["CategoryNames"] !== null) {
            $this->CategoryNames = $param["CategoryNames"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = new DspmSensitiveScanTaskConfig();
            $this->TaskConfig->deserialize($param["TaskConfig"]);
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
