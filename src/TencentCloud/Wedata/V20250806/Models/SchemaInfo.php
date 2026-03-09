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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Schema information.
 *
 * @method string getGuid() Obtain Schema GUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGuid(string $Guid) Set Schema GUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SchemaInfo extends AbstractModel
{
    /**
     * @var string Schema GUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Guid;

    /**
     * @var string Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @param string $Guid Schema GUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Database name.
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
        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }
    }
}
