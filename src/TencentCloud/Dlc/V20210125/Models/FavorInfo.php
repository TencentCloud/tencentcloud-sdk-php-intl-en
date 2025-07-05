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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FavorInfo
 *
 * @method integer getPriority() Obtain Prioritized items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriority(integer $Priority) Set Prioritized items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataBase() Obtain DataBase name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataBase(string $DataBase) Set DataBase name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FavorInfo extends AbstractModel
{
    /**
     * @var integer Prioritized items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Priority;

    /**
     * @var string Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string DataBase name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataBase;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @param integer $Priority Prioritized items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataBase DataBase name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table name
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("DataBase",$param) and $param["DataBase"] !== null) {
            $this->DataBase = $param["DataBase"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}
