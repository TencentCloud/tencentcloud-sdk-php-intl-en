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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource basic information
 *
 * @method string getCatalog() Obtain Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchema() Obtain Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchema(string $Schema) Set Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getView() Obtain View name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setView(string $View) Set View name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFunction() Obtain Function name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunction(string $Function) Set Function name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceBaseInfo extends AbstractModel
{
    /**
     * @var string Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Schema;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var string View name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $View;

    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var string Function name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Function;

    /**
     * @param string $Catalog Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Schema Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $View View name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Function Function name
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }
    }
}
