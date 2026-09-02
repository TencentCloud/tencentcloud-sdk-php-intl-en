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
 * DescribeDspmAssetFieldSamples request structure.
 *
 * @method string getAssetId() Obtain <p>Asset instance ID</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance ID</p>
 * @method string getDbName() Obtain <p>Database name.</p>
 * @method void setDbName(string $DbName) Set <p>Database name.</p>
 * @method string getTableName() Obtain <p>Table name</p>
 * @method void setTableName(string $TableName) Set <p>Table name</p>
 * @method string getFieldName() Obtain <p>Field name</p>
 * @method void setFieldName(string $FieldName) Set <p>Field name</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getSchemaName() Obtain <p>schema name</p>
 * @method void setSchemaName(string $SchemaName) Set <p>schema name</p>
 */
class DescribeDspmAssetFieldSamplesRequest extends AbstractModel
{
    /**
     * @var string <p>Asset instance ID</p>
     */
    public $AssetId;

    /**
     * @var string <p>Database name.</p>
     */
    public $DbName;

    /**
     * @var string <p>Table name</p>
     */
    public $TableName;

    /**
     * @var string <p>Field name</p>
     */
    public $FieldName;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>schema name</p>
     */
    public $SchemaName;

    /**
     * @param string $AssetId <p>Asset instance ID</p>
     * @param string $DbName <p>Database name.</p>
     * @param string $TableName <p>Table name</p>
     * @param string $FieldName <p>Field name</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $SchemaName <p>schema name</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
