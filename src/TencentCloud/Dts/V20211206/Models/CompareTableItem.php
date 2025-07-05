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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table configuration for data consistency check
 *
 * @method string getTableName() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumnMode() Obtain In column mode, all refers to all data, while partial refers to part of the data (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumnMode(string $ColumnMode) Set In column mode, all refers to all data, while partial refers to part of the data (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain This field is required when ColumnMode is set to partial (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set This field is required when ColumnMode is set to partial (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareTableItem extends AbstractModel
{
    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string In column mode, all refers to all data, while partial refers to part of the data (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColumnMode;

    /**
     * @var array This field is required when ColumnMode is set to partial (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @param string $TableName Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColumnMode In column mode, all refers to all data, while partial refers to part of the data (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns This field is required when ColumnMode is set to partial (this parameter is only valid for data sync tasks).Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnMode",$param) and $param["ColumnMode"] !== null) {
            $this->ColumnMode = $param["ColumnMode"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new CompareColumnItem();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }
    }
}
