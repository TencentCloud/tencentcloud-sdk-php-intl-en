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
 * Database/Table objects for data consistency check
 *
 * @method string getDbName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbMode() Obtain Database selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbMode(string $DbMode) Set Database selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchemaName() Obtain Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchemaName(string $SchemaName) Set Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableMode() Obtain Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableMode(string $TableMode) Set Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTables() Obtain Table configuration for data consistency check, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTables(array $Tables) Set Table configuration for data consistency check, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getViewMode() Obtain View selection mode: all refers to all view objects under the current object, partial refers to partial view objects (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViewMode(string $ViewMode) Set View selection mode: all refers to all view objects under the current object, partial refers to partial view objects (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getViews() Obtain View configuration used for consistency check. When ViewMode is partial, it needs to be filled in (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViews(array $Views) Set View configuration used for consistency check. When ViewMode is partial, it needs to be filled in (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareObjectItem extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string Database selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbMode;

    /**
     * @var string Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchemaName;

    /**
     * @var string Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableMode;

    /**
     * @var array Table configuration for data consistency check, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tables;

    /**
     * @var string View selection mode: all refers to all view objects under the current object, partial refers to partial view objects (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ViewMode;

    /**
     * @var array View configuration used for consistency check. When ViewMode is partial, it needs to be filled in (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Views;

    /**
     * @param string $DbName Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbMode Database selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchemaName Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableMode Schema selection mode. Valid values: `all`, `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tables Table configuration for data consistency check, which is required if `TableMode` is `partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ViewMode View selection mode: all refers to all view objects under the current object, partial refers to partial view objects (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Views View configuration used for consistency check. When ViewMode is partial, it needs to be filled in (consistency check does not check views, and the current parameters are disabled).Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new CompareTableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("ViewMode",$param) and $param["ViewMode"] !== null) {
            $this->ViewMode = $param["ViewMode"];
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new CompareViewItem();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }
    }
}
