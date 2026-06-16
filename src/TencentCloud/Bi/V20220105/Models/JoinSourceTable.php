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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Join tables and view original table information
 *
 * @method integer getTableNodeType() Obtain 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableNodeType(integer $TableNodeType) Set 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableNodeId() Obtain Base Table Node Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableNodeId(string $TableNodeId) Set Base Table Node Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParentId() Obtain Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentId(string $ParentId) Set Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableId() Obtain Optional, the data source has no ID in the original table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableId(string $TableId) Set Optional, the data source has no ID in the original table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Required. Use the original table name for the data source. Use the logical table name for other types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Required. Use the original table name for the data source. Use the logical table name for other types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFields() Obtain Field list to display in the base table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFields(array $Fields) Set Field list to display in the base table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDatasourceId() Obtain Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableAlias() Obtain Optional, alias of the data source displayed on the front-end, excel table creation is required
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableAlias(string $TableAlias) Set Optional, alias of the data source displayed on the front-end, excel table creation is required
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JoinSourceTable extends AbstractModel
{
    /**
     * @var integer 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableNodeType;

    /**
     * @var string Base Table Node Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableNodeId;

    /**
     * @var string Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentId;

    /**
     * @var string Optional, the data source has no ID in the original table.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableId;

    /**
     * @var string Required. Use the original table name for the data source. Use the logical table name for other types.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var array Field list to display in the base table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fields;

    /**
     * @var integer Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Optional, alias of the data source displayed on the front-end, excel table creation is required
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableAlias;

    /**
     * @param integer $TableNodeType 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableNodeId Base Table Node Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParentId Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableId Optional, the data source has no ID in the original table.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Required. Use the original table name for the data source. Use the logical table name for other types.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Fields Field list to display in the base table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DatasourceId Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableAlias Optional, alias of the data source displayed on the front-end, excel table creation is required
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
        if (array_key_exists("TableNodeType",$param) and $param["TableNodeType"] !== null) {
            $this->TableNodeType = $param["TableNodeType"];
        }

        if (array_key_exists("TableNodeId",$param) and $param["TableNodeId"] !== null) {
            $this->TableNodeId = $param["TableNodeId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableAlias",$param) and $param["TableAlias"] !== null) {
            $this->TableAlias = $param["TableAlias"];
        }
    }
}
