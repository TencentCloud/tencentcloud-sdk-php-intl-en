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
 * DDL information for creating a table
 *
 * @method string getDbName() Obtain Database name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTablesDDLs() Obtain DDL information of the table

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTablesDDLs(array $TablesDDLs) Set DDL information of the table

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateTablesDDL extends AbstractModel
{
    /**
     * @var string Database name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var array DDL information of the table

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TablesDDLs;

    /**
     * @param string $DbName Database name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TablesDDLs DDL information of the table

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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TablesDDLs",$param) and $param["TablesDDLs"] !== null) {
            $this->TablesDDLs = [];
            foreach ($param["TablesDDLs"] as $key => $value){
                $obj = new TablesDDL();
                $obj->deserialize($value);
                array_push($this->TablesDDLs, $obj);
            }
        }
    }
}
