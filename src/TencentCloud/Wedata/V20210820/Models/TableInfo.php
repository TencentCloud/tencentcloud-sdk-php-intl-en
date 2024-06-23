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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata Table Details
 *
 * @method string getTableId() Obtain Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginDatabaseName() Obtain Table databaseName
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginDatabaseName(string $OriginDatabaseName) Set Table databaseName
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginSchemaName() Obtain Table schemaName
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginSchemaName(string $OriginSchemaName) Set Table schemaName
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableInfo extends AbstractModel
{
    /**
     * @var string Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Table databaseName
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginDatabaseName;

    /**
     * @var string Table schemaName
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginSchemaName;

    /**
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginDatabaseName Table databaseName
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginSchemaName Table schemaName
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("OriginDatabaseName",$param) and $param["OriginDatabaseName"] !== null) {
            $this->OriginDatabaseName = $param["OriginDatabaseName"];
        }

        if (array_key_exists("OriginSchemaName",$param) and $param["OriginSchemaName"] !== null) {
            $this->OriginSchemaName = $param["OriginSchemaName"];
        }
    }
}
