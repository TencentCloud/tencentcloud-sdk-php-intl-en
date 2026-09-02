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
 * dspm asset field information
 *
 * @method string getAssetId() Obtain <p>Asset instance id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance id</p>
 * @method string getDbName() Obtain <p>Database name</p>
 * @method void setDbName(string $DbName) Set <p>Database name</p>
 * @method string getSchemaName() Obtain <p>schema name.</p>
 * @method void setSchemaName(string $SchemaName) Set <p>schema name.</p>
 * @method string getTableName() Obtain <p>Table name</p>
 * @method void setTableName(string $TableName) Set <p>Table name</p>
 * @method string getFieldName() Obtain <p>field name</p>
 * @method void setFieldName(string $FieldName) Set <p>field name</p>
 * @method array getRuleIds() Obtain <p>Data item id collection</p>
 * @method void setRuleIds(array $RuleIds) Set <p>Data item id collection</p>
 * @method array getRuleNames() Obtain <p>Data item name collection.</p>
 * @method void setRuleNames(array $RuleNames) Set <p>Data item name collection.</p>
 * @method array getCategoryIds() Obtain <p>Category id set</p>
 * @method void setCategoryIds(array $CategoryIds) Set <p>Category id set</p>
 * @method array getCategoryNames() Obtain <p>Category name collection</p>
 * @method void setCategoryNames(array $CategoryNames) Set <p>Category name collection</p>
 * @method array getCategoryDetails() Obtain <p>Category details</p>
 * @method void setCategoryDetails(array $CategoryDetails) Set <p>Category details</p>
 * @method string getFieldComment() Obtain <p>Field comment</p>
 * @method void setFieldComment(string $FieldComment) Set <p>Field comment</p>
 */
class DspmAssetFieldInfo extends AbstractModel
{
    /**
     * @var string <p>Asset instance id</p>
     */
    public $AssetId;

    /**
     * @var string <p>Database name</p>
     */
    public $DbName;

    /**
     * @var string <p>schema name.</p>
     */
    public $SchemaName;

    /**
     * @var string <p>Table name</p>
     */
    public $TableName;

    /**
     * @var string <p>field name</p>
     */
    public $FieldName;

    /**
     * @var array <p>Data item id collection</p>
     */
    public $RuleIds;

    /**
     * @var array <p>Data item name collection.</p>
     */
    public $RuleNames;

    /**
     * @var array <p>Category id set</p>
     */
    public $CategoryIds;

    /**
     * @var array <p>Category name collection</p>
     */
    public $CategoryNames;

    /**
     * @var array <p>Category details</p>
     */
    public $CategoryDetails;

    /**
     * @var string <p>Field comment</p>
     */
    public $FieldComment;

    /**
     * @param string $AssetId <p>Asset instance id</p>
     * @param string $DbName <p>Database name</p>
     * @param string $SchemaName <p>schema name.</p>
     * @param string $TableName <p>Table name</p>
     * @param string $FieldName <p>field name</p>
     * @param array $RuleIds <p>Data item id collection</p>
     * @param array $RuleNames <p>Data item name collection.</p>
     * @param array $CategoryIds <p>Category id set</p>
     * @param array $CategoryNames <p>Category name collection</p>
     * @param array $CategoryDetails <p>Category details</p>
     * @param string $FieldComment <p>Field comment</p>
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

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("RuleNames",$param) and $param["RuleNames"] !== null) {
            $this->RuleNames = $param["RuleNames"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("CategoryNames",$param) and $param["CategoryNames"] !== null) {
            $this->CategoryNames = $param["CategoryNames"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("FieldComment",$param) and $param["FieldComment"] !== null) {
            $this->FieldComment = $param["FieldComment"];
        }
    }
}
