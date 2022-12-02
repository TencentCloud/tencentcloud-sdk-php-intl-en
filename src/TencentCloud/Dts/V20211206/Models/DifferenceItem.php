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
 * Details of inconsistent tables
 *
 * @method string getDb() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDb(string $Db) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getChunk() Obtain Chunk ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChunk(integer $Chunk) Set Chunk ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcItem() Obtain Source database value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcItem(string $SrcItem) Set Source database value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstItem() Obtain Target database value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstItem(string $DstItem) Set Target database value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndexName() Obtain Index name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexName(string $IndexName) Set Index name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLowerBoundary() Obtain First index key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowerBoundary(string $LowerBoundary) Set First index key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpperBoundary() Obtain Last index key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpperBoundary(string $UpperBoundary) Set Last index key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCostTime() Obtain Comparison time in ms
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCostTime(float $CostTime) Set Comparison time in ms
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFinishedAt() Obtain Completion time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFinishedAt(string $FinishedAt) Set Completion time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DifferenceItem extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Db;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var integer Chunk ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Chunk;

    /**
     * @var string Source database value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcItem;

    /**
     * @var string Target database value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstItem;

    /**
     * @var string Index name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexName;

    /**
     * @var string First index key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowerBoundary;

    /**
     * @var string Last index key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpperBoundary;

    /**
     * @var float Comparison time in ms
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CostTime;

    /**
     * @var string Completion time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FinishedAt;

    /**
     * @param string $Db Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Chunk Chunk ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcItem Source database value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstItem Target database value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IndexName Index name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LowerBoundary First index key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpperBoundary Last index key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CostTime Comparison time in ms
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FinishedAt Completion time
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Chunk",$param) and $param["Chunk"] !== null) {
            $this->Chunk = $param["Chunk"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("LowerBoundary",$param) and $param["LowerBoundary"] !== null) {
            $this->LowerBoundary = $param["LowerBoundary"];
        }

        if (array_key_exists("UpperBoundary",$param) and $param["UpperBoundary"] !== null) {
            $this->UpperBoundary = $param["UpperBoundary"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }
    }
}
