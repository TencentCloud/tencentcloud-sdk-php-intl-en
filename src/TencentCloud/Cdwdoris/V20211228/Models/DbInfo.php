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
 * Database information
 *
 * @method string getDbName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProperties() Obtain Database attribute
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProperties(array $Properties) Set Database attribute
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Metadata address (Available when the data source is Hive or DLC.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Metadata address (Available when the data source is Hive or DLC.)

Note: This field may return null, indicating that no valid values can be obtained.
 */
class DbInfo extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var array Database attribute
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Properties;

    /**
     * @var string Metadata address (Available when the data source is Hive or DLC.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @param string $DbName Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Properties Database attribute
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Metadata address (Available when the data source is Hive or DLC.)

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

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
