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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dlc failure log storage table information
 *
 * @method string getTableName() Obtain <p>DLC table name</p>
 * @method void setTableName(string $TableName) Set <p>DLC table name</p>
 * @method string getFieldName() Obtain <p>Field name in the table</p><p>Field type must be String type</p>
 * @method void setFieldName(string $FieldName) Set <p>Field name in the table</p><p>Field type must be String type</p>
 */
class DlcFailTableInfo extends AbstractModel
{
    /**
     * @var string <p>DLC table name</p>
     */
    public $TableName;

    /**
     * @var string <p>Field name in the table</p><p>Field type must be String type</p>
     */
    public $FieldName;

    /**
     * @param string $TableName <p>DLC table name</p>
     * @param string $FieldName <p>Field name in the table</p><p>Field type must be String type</p>
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

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }
    }
}
