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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchClusterTables request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getTable() Obtain Data table name
 * @method void setTable(string $Table) Set Data table name
 * @method string getTableType() Obtain Data table type. Valid values:
`view`: Only return to view,
`base_table`: Only return to basic table,
`all`: Return to view and table.
 * @method void setTableType(string $TableType) Set Data table type. Valid values:
`view`: Only return to view,
`base_table`: Only return to basic table,
`all`: Return to view and table.
 */
class SearchClusterTablesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Data table name
     */
    public $Table;

    /**
     * @var string Data table type. Valid values:
`view`: Only return to view,
`base_table`: Only return to basic table,
`all`: Return to view and table.
     */
    public $TableType;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Database Database name
     * @param string $Table Data table name
     * @param string $TableType Data table type. Valid values:
`view`: Only return to view,
`base_table`: Only return to basic table,
`all`: Return to view and table.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
