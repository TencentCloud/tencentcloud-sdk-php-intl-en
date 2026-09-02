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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database field description.
 *
 * @method string getDB() Obtain Database name
 * @method void setDB(string $DB) Set Database name
 * @method string getSchema() Obtain Database view name.
 * @method void setSchema(string $Schema) Set Database view name.
 * @method string getTable() Obtain Table name
 * @method void setTable(string $Table) Set Table name
 * @method string getField() Obtain Database field name.
 * @method void setField(string $Field) Set Database field name.
 * @method SensitiveDetail getSensitive() Obtain Sensitive field information.
 * @method void setSensitive(SensitiveDetail $Sensitive) Set Sensitive field information.
 */
class TableField extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DB;

    /**
     * @var string Database view name.
     */
    public $Schema;

    /**
     * @var string Table name
     */
    public $Table;

    /**
     * @var string Database field name.
     */
    public $Field;

    /**
     * @var SensitiveDetail Sensitive field information.
     */
    public $Sensitive;

    /**
     * @param string $DB Database name
     * @param string $Schema Database view name.
     * @param string $Table Table name
     * @param string $Field Database field name.
     * @param SensitiveDetail $Sensitive Sensitive field information.
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
        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Sensitive",$param) and $param["Sensitive"] !== null) {
            $this->Sensitive = new SensitiveDetail();
            $this->Sensitive->deserialize($param["Sensitive"]);
        }
    }
}
