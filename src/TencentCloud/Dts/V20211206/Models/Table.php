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
 * Synced table description
 *
 * @method string getTableName() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewTableName() Obtain New table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewTableName(string $NewTableName) Set New table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFilterCondition() Obtain Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilterCondition(string $FilterCondition) Set Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Table extends AbstractModel
{
    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string New table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewTableName;

    /**
     * @var string Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilterCondition;

    /**
     * @param string $TableName Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewTableName New table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FilterCondition Filter condition
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

        if (array_key_exists("FilterCondition",$param) and $param["FilterCondition"] !== null) {
            $this->FilterCondition = $param["FilterCondition"];
        }
    }
}
