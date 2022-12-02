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
 * @method integer getDifferentRows() Obtain Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDifferentRows(integer $DifferentRows) Set Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareAbstractInfo extends AbstractModel
{
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
     * @var integer Number of inconsistent data rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DifferentRows;

    /**
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
     * @param integer $DifferentRows Number of inconsistent data rows
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

        if (array_key_exists("DifferentRows",$param) and $param["DifferentRows"] !== null) {
            $this->DifferentRows = $param["DifferentRows"];
        }
    }
}
