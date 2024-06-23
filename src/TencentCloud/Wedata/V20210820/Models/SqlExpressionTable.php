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
 * Parsing table object for SQL expression when defining Data Quality Custom Rules
 *
 * @method string getTableExpression() Obtain SQL expression table name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableExpression(string $TableExpression) Set SQL expression table name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getColumnExpression() Obtain SQL expression column name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnExpression(array $ColumnExpression) Set SQL expression column name
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SqlExpressionTable extends AbstractModel
{
    /**
     * @var string SQL expression table name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableExpression;

    /**
     * @var array SQL expression column name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnExpression;

    /**
     * @param string $TableExpression SQL expression table name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ColumnExpression SQL expression column name
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
        if (array_key_exists("TableExpression",$param) and $param["TableExpression"] !== null) {
            $this->TableExpression = $param["TableExpression"];
        }

        if (array_key_exists("ColumnExpression",$param) and $param["ColumnExpression"] !== null) {
            $this->ColumnExpression = $param["ColumnExpression"];
        }
    }
}
