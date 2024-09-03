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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL information of the table
 *
 * @method string getTableName() Obtain Table name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDDLInfo() Obtain DDL statement for creating a table

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDLInfo(string $DDLInfo) Set DDL statement for creating a table

Note: This field may return null, indicating that no valid values can be obtained.
 */
class TablesDDL extends AbstractModel
{
    /**
     * @var string Table name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string DDL statement for creating a table

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDLInfo;

    /**
     * @param string $TableName Table name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DDLInfo DDL statement for creating a table

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

        if (array_key_exists("DDLInfo",$param) and $param["DDLInfo"] !== null) {
            $this->DDLInfo = $param["DDLInfo"];
        }
    }
}
