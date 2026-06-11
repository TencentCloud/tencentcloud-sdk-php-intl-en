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
 * Data Lake Computing Service (Data Lake Compute, DLC) data table configuration info
 *
 * @method string getDataDirectory() Obtain Data catalog
 * @method void setDataDirectory(string $DataDirectory) Set Data catalog
 * @method string getDatabaseName() Obtain Database.
 * @method void setDatabaseName(string $DatabaseName) Set Database.
 * @method string getTableName() Obtain data table
 * @method void setTableName(string $TableName) Set data table
 */
class DlcTableInfo extends AbstractModel
{
    /**
     * @var string Data catalog
     */
    public $DataDirectory;

    /**
     * @var string Database.
     */
    public $DatabaseName;

    /**
     * @var string data table
     */
    public $TableName;

    /**
     * @param string $DataDirectory Data catalog
     * @param string $DatabaseName Database.
     * @param string $TableName data table
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
        if (array_key_exists("DataDirectory",$param) and $param["DataDirectory"] !== null) {
            $this->DataDirectory = $param["DataDirectory"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
