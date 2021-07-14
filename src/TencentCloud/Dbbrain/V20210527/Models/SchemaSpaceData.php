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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database space statistics.
 *
 * @method string getTableSchema() Obtain Database name.
 * @method void setTableSchema(string $TableSchema) Set Database name.
 * @method float getDataLength() Obtain Data space in MB.
 * @method void setDataLength(float $DataLength) Set Data space in MB.
 * @method float getIndexLength() Obtain Index space in MB.
 * @method void setIndexLength(float $IndexLength) Set Index space in MB.
 * @method float getDataFree() Obtain Fragmented space in MB.
 * @method void setDataFree(float $DataFree) Set Fragmented space in MB.
 * @method float getTotalLength() Obtain Total space usage in MB.
 * @method void setTotalLength(float $TotalLength) Set Total space usage in MB.
 * @method float getFragRatio() Obtain Fragmentation rate in %.
 * @method void setFragRatio(float $FragRatio) Set Fragmentation rate in %.
 * @method integer getTableRows() Obtain Number of rows.
 * @method void setTableRows(integer $TableRows) Set Number of rows.
 * @method float getPhysicalFileSize() Obtain Total size in MB of physical files exclusive to all tables in the database.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhysicalFileSize(float $PhysicalFileSize) Set Total size in MB of physical files exclusive to all tables in the database.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SchemaSpaceData extends AbstractModel
{
    /**
     * @var string Database name.
     */
    public $TableSchema;

    /**
     * @var float Data space in MB.
     */
    public $DataLength;

    /**
     * @var float Index space in MB.
     */
    public $IndexLength;

    /**
     * @var float Fragmented space in MB.
     */
    public $DataFree;

    /**
     * @var float Total space usage in MB.
     */
    public $TotalLength;

    /**
     * @var float Fragmentation rate in %.
     */
    public $FragRatio;

    /**
     * @var integer Number of rows.
     */
    public $TableRows;

    /**
     * @var float Total size in MB of physical files exclusive to all tables in the database.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhysicalFileSize;

    /**
     * @param string $TableSchema Database name.
     * @param float $DataLength Data space in MB.
     * @param float $IndexLength Index space in MB.
     * @param float $DataFree Fragmented space in MB.
     * @param float $TotalLength Total space usage in MB.
     * @param float $FragRatio Fragmentation rate in %.
     * @param integer $TableRows Number of rows.
     * @param float $PhysicalFileSize Total size in MB of physical files exclusive to all tables in the database.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("DataLength",$param) and $param["DataLength"] !== null) {
            $this->DataLength = $param["DataLength"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }

        if (array_key_exists("TotalLength",$param) and $param["TotalLength"] !== null) {
            $this->TotalLength = $param["TotalLength"];
        }

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }

        if (array_key_exists("PhysicalFileSize",$param) and $param["PhysicalFileSize"] !== null) {
            $this->PhysicalFileSize = $param["PhysicalFileSize"];
        }
    }
}
