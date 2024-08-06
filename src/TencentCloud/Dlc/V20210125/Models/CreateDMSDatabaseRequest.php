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
 * CreateDMSDatabase request structure.
 *
 * @method Asset getAsset() Obtain Basic metadata object
 * @method void setAsset(Asset $Asset) Set Basic metadata object
 * @method string getSchemaName() Obtain Schema directory
 * @method void setSchemaName(string $SchemaName) Set Schema directory
 * @method string getLocation() Obtain Db storage path
 * @method void setLocation(string $Location) Set Db storage path
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 */
class CreateDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var Asset Basic metadata object
     */
    public $Asset;

    /**
     * @var string Schema directory
     */
    public $SchemaName;

    /**
     * @var string Db storage path
     */
    public $Location;

    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @param Asset $Asset Basic metadata object
     * @param string $SchemaName Schema directory
     * @param string $Location Db storage path
     * @param string $Name Database name
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
