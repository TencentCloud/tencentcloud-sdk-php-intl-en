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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Summary information of data consistency check
 *
 * @method CompareOptions getOptions() Obtain Configuration parameters of the check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptions(CompareOptions $Options) Set Configuration parameters of the check task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CompareObject getObjects() Obtain Consistency check objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjects(CompareObject $Objects) Set Consistency check objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConclusion() Obtain Comparison conclusion. Valid values: `same`, `different`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConclusion(string $Conclusion) Set Comparison conclusion. Valid values: `same`, `different`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status. Valid values: `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status. Valid values: `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalTables() Obtain Total number of tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalTables(integer $TotalTables) Set Total number of tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCheckedTables() Obtain Number of checked tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckedTables(integer $CheckedTables) Set Number of checked tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDifferentTables() Obtain Number of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDifferentTables(integer $DifferentTables) Set Number of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSkippedTables() Obtain Number of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkippedTables(integer $SkippedTables) Set Number of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNearlyTableCount() Obtain The estimated number of tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNearlyTableCount(integer $NearlyTableCount) Set The estimated number of tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDifferentRows() Obtain Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDifferentRows(integer $DifferentRows) Set Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSrcSampleRows() Obtain Source database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcSampleRows(integer $SrcSampleRows) Set Source database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDstSampleRows() Obtain Target database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstSampleRows(integer $DstSampleRows) Set Target database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartedAt() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartedAt(string $StartedAt) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFinishedAt() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFinishedAt(string $FinishedAt) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareAbstractInfo extends AbstractModel
{
    /**
     * @var CompareOptions Configuration parameters of the check task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Options;

    /**
     * @var CompareObject Consistency check objects
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Objects;

    /**
     * @var string Comparison conclusion. Valid values: `same`, `different`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Conclusion;

    /**
     * @var string Task status. Valid values: `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Total number of tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalTables;

    /**
     * @var integer Number of checked tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckedTables;

    /**
     * @var integer Number of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DifferentTables;

    /**
     * @var integer Number of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkippedTables;

    /**
     * @var integer The estimated number of tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NearlyTableCount;

    /**
     * @var integer Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DifferentRows;

    /**
     * @var integer Source database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcSampleRows;

    /**
     * @var integer Target database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstSampleRows;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartedAt;

    /**
     * @var string End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FinishedAt;

    /**
     * @param CompareOptions $Options Configuration parameters of the check task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CompareObject $Objects Consistency check objects
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Conclusion Comparison conclusion. Valid values: `same`, `different`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status. Valid values: `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalTables Total number of tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CheckedTables Number of checked tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DifferentTables Number of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SkippedTables Number of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NearlyTableCount The estimated number of tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DifferentRows Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SrcSampleRows Source database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DstSampleRows Target database row count, which takes effect only when the comparison type is **Row count comparison**.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartedAt Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FinishedAt End time
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
        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new CompareObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalTables",$param) and $param["TotalTables"] !== null) {
            $this->TotalTables = $param["TotalTables"];
        }

        if (array_key_exists("CheckedTables",$param) and $param["CheckedTables"] !== null) {
            $this->CheckedTables = $param["CheckedTables"];
        }

        if (array_key_exists("DifferentTables",$param) and $param["DifferentTables"] !== null) {
            $this->DifferentTables = $param["DifferentTables"];
        }

        if (array_key_exists("SkippedTables",$param) and $param["SkippedTables"] !== null) {
            $this->SkippedTables = $param["SkippedTables"];
        }

        if (array_key_exists("NearlyTableCount",$param) and $param["NearlyTableCount"] !== null) {
            $this->NearlyTableCount = $param["NearlyTableCount"];
        }

        if (array_key_exists("DifferentRows",$param) and $param["DifferentRows"] !== null) {
            $this->DifferentRows = $param["DifferentRows"];
        }

        if (array_key_exists("SrcSampleRows",$param) and $param["SrcSampleRows"] !== null) {
            $this->SrcSampleRows = $param["SrcSampleRows"];
        }

        if (array_key_exists("DstSampleRows",$param) and $param["DstSampleRows"] !== null) {
            $this->DstSampleRows = $param["DstSampleRows"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }
    }
}
