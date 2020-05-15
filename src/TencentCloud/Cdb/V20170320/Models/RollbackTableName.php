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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Name of the table for rollback
 *
 * @method string getTableName() Obtain Original table name before rollback
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Original table name before rollback
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNewTableName() Obtain New table name after rollback
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNewTableName(string $NewTableName) Set New table name after rollback
Note: this field may return null, indicating that no valid values can be obtained.
 */
class RollbackTableName extends AbstractModel
{
    /**
     * @var string Original table name before rollback
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string New table name after rollback
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NewTableName;

    /**
     * @param string $TableName Original table name before rollback
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NewTableName New table name after rollback
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }
    }
}
