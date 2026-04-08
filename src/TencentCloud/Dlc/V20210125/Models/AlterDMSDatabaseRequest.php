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
 * AlterDMSDatabase request structure.
 *
 * @method string getCurrentName() Obtain Current name
 * @method void setCurrentName(string $CurrentName) Set Current name
 * @method string getSchemaName() Obtain Schema name
 * @method void setSchemaName(string $SchemaName) Set Schema name
 * @method string getLocation() Obtain Path
 * @method void setLocation(string $Location) Set Path
 * @method Asset getAsset() Obtain Basic object
 * @method void setAsset(Asset $Asset) Set Basic object
 * @method string getDatasourceConnectionName() Obtain 
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set 
 */
class AlterDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string Current name
     */
    public $CurrentName;

    /**
     * @var string Schema name
     */
    public $SchemaName;

    /**
     * @var string Path
     */
    public $Location;

    /**
     * @var Asset Basic object
     */
    public $Asset;

    /**
     * @var string 
     */
    public $DatasourceConnectionName;

    /**
     * @param string $CurrentName Current name
     * @param string $SchemaName Schema name
     * @param string $Location Path
     * @param Asset $Asset Basic object
     * @param string $DatasourceConnectionName 
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
        if (array_key_exists("CurrentName",$param) and $param["CurrentName"] !== null) {
            $this->CurrentName = $param["CurrentName"];
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

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
