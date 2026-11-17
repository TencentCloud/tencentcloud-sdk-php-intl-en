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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Column information in data sync
 *
 * @method string getColumnName() Obtain Column name
 * @method void setColumnName(string $ColumnName) Set Column name
 * @method string getNewColumnName() Obtain New column name.
 * @method void setNewColumnName(string $NewColumnName) Set New column name.
 */
class Column extends AbstractModel
{
    /**
     * @var string Column name
     */
    public $ColumnName;

    /**
     * @var string New column name.
     */
    public $NewColumnName;

    /**
     * @param string $ColumnName Column name
     * @param string $NewColumnName New column name.
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("NewColumnName",$param) and $param["NewColumnName"] !== null) {
            $this->NewColumnName = $param["NewColumnName"];
        }
    }
}
