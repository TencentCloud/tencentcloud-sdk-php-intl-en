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
 * The set of table objects, which is required if `TableMode` is `partial`.
 *
 * @method string getTableName() Obtain Name of the table to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Name of the table to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewTableName() Obtain Name of the table after migration, which is required if `TableEditMode` is `rename`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewTableName(string $NewTableName) Set Name of the table after migration, which is required if `TableEditMode` is `rename`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTmpTables() Obtain Temp table to be migrated, which is required if `TableEditMode` is `pt`. To sync temp tables that may be generated during migration by tools such as pt-online-schema-change, you can use this parameter to configure the temp table names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpTables(array $TmpTables) Set Temp table to be migrated, which is required if `TableEditMode` is `pt`. To sync temp tables that may be generated during migration by tools such as pt-online-schema-change, you can use this parameter to configure the temp table names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableEditMode() Obtain Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableEditMode(string $TableEditMode) Set Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableItem extends AbstractModel
{
    /**
     * @var string Name of the table to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Name of the table after migration, which is required if `TableEditMode` is `rename`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewTableName;

    /**
     * @var array Temp table to be migrated, which is required if `TableEditMode` is `pt`. To sync temp tables that may be generated during migration by tools such as pt-online-schema-change, you can use this parameter to configure the temp table names.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpTables;

    /**
     * @var string Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableEditMode;

    /**
     * @param string $TableName Name of the table to be migrated
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewTableName Name of the table after migration, which is required if `TableEditMode` is `rename`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TmpTables Temp table to be migrated, which is required if `TableEditMode` is `pt`. To sync temp tables that may be generated during migration by tools such as pt-online-schema-change, you can use this parameter to configure the temp table names.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableEditMode Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("TmpTables",$param) and $param["TmpTables"] !== null) {
            $this->TmpTables = $param["TmpTables"];
        }

        if (array_key_exists("TableEditMode",$param) and $param["TableEditMode"] !== null) {
            $this->TableEditMode = $param["TableEditMode"];
        }
    }
}
