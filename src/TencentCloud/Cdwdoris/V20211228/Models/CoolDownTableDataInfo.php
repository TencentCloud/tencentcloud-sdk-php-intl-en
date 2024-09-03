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
 * Information on the table containing layered cold and hot data
 *
 * @method string getDatabaseName() Obtain Column: DatabaseName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Column: DatabaseName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Column: TableName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Column: TableName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSize() Obtain Column: Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(string $Size) Set Column: Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemoteSize() Obtain Column: RemoteSize
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoteSize(string $RemoteSize) Set Column: RemoteSize
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CoolDownTableDataInfo extends AbstractModel
{
    /**
     * @var string Column: DatabaseName
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Column: TableName
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Column: Size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string Column: RemoteSize
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoteSize;

    /**
     * @param string $DatabaseName Column: DatabaseName
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Column: TableName
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Size Column: Size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RemoteSize Column: RemoteSize
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("RemoteSize",$param) and $param["RemoteSize"] !== null) {
            $this->RemoteSize = $param["RemoteSize"];
        }
    }
}
