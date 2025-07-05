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
 * Metadata database objects
 *
 * @method string getName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchemaName() Obtain Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchemaName(string $SchemaName) Set Schema name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Storage address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Storage address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Asset getAsset() Obtain Basic object information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsset(Asset $Asset) Set Basic object information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DMSDatabaseInfo extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchemaName;

    /**
     * @var string Storage address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var Asset Basic object information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Asset;

    /**
     * @param string $Name Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchemaName Schema name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Storage address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Asset $Asset Basic object information
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }
    }
}
