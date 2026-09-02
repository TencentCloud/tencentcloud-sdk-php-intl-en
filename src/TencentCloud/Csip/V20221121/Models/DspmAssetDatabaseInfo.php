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
 * dspm asset database information
 *
 * @method string getAssetId() Obtain <p>Asset instance id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance id</p>
 * @method string getDbName() Obtain <p>Database name</p>
 * @method void setDbName(string $DbName) Set <p>Database name</p>
 * @method integer getTableCount() Obtain <p>Total number of tables</p>
 * @method void setTableCount(integer $TableCount) Set <p>Total number of tables</p>
 * @method integer getSensitiveTableCount() Obtain <p>Sensitive table count</p>
 * @method void setSensitiveTableCount(integer $SensitiveTableCount) Set <p>Sensitive table count</p>
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
 */
class DspmAssetDatabaseInfo extends AbstractModel
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
     * @var integer <p>Total number of tables</p>
     */
    public $TableCount;

    /**
     * @var integer <p>Sensitive table count</p>
     */
    public $SensitiveTableCount;

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
     * @param string $AssetId <p>Asset instance id</p>
     * @param string $DbName <p>Database name</p>
     * @param integer $TableCount <p>Total number of tables</p>
     * @param integer $SensitiveTableCount <p>Sensitive table count</p>
     * @param array $RuleIds <p>Data item id collection</p>
     * @param array $RuleNames <p>Data item name collection.</p>
     * @param array $CategoryIds <p>Category id set</p>
     * @param array $CategoryNames <p>Category name collection</p>
     * @param array $CategoryDetails <p>Category details</p>
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

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("SensitiveTableCount",$param) and $param["SensitiveTableCount"] !== null) {
            $this->SensitiveTableCount = $param["SensitiveTableCount"];
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
    }
}
