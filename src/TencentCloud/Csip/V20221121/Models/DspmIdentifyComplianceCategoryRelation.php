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
 * dspm data identification template classification association
 *
 * @method integer getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(integer $CategoryId) Set <p>Category ID</p>
 * @method string getCategoryName() Obtain <p>Category name</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Category name</p>
 * @method string getCategoryParentId() Obtain <p>Parent category ID</p>
 * @method void setCategoryParentId(string $CategoryParentId) Set <p>Parent category ID</p>
 * @method boolean getIsLeaf() Obtain <p>is leaf node</p>
 * @method void setIsLeaf(boolean $IsLeaf) Set <p>is leaf node</p>
 * @method integer getCategoryType() Obtain <p>Classification type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method void setCategoryType(integer $CategoryType) Set <p>Classification type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method integer getCategoryGrade() Obtain <p>Classification levels</p><p>Unit: level</p>
 * @method void setCategoryGrade(integer $CategoryGrade) Set <p>Classification levels</p><p>Unit: level</p>
 * @method array getRuleRelations() Obtain <p>Associated data item information</p>
 * @method void setRuleRelations(array $RuleRelations) Set <p>Associated data item information</p>
 * @method array getChildren() Obtain <p>Sub-node information</p>
 * @method void setChildren(array $Children) Set <p>Sub-node information</p>
 */
class DspmIdentifyComplianceCategoryRelation extends AbstractModel
{
    /**
     * @var integer <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>Category name</p>
     */
    public $CategoryName;

    /**
     * @var string <p>Parent category ID</p>
     */
    public $CategoryParentId;

    /**
     * @var boolean <p>is leaf node</p>
     */
    public $IsLeaf;

    /**
     * @var integer <p>Classification type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     */
    public $CategoryType;

    /**
     * @var integer <p>Classification levels</p><p>Unit: level</p>
     */
    public $CategoryGrade;

    /**
     * @var array <p>Associated data item information</p>
     */
    public $RuleRelations;

    /**
     * @var array <p>Sub-node information</p>
     */
    public $Children;

    /**
     * @param integer $CategoryId <p>Category ID</p>
     * @param string $CategoryName <p>Category name</p>
     * @param string $CategoryParentId <p>Parent category ID</p>
     * @param boolean $IsLeaf <p>is leaf node</p>
     * @param integer $CategoryType <p>Classification type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     * @param integer $CategoryGrade <p>Classification levels</p><p>Unit: level</p>
     * @param array $RuleRelations <p>Associated data item information</p>
     * @param array $Children <p>Sub-node information</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryParentId",$param) and $param["CategoryParentId"] !== null) {
            $this->CategoryParentId = $param["CategoryParentId"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("CategoryGrade",$param) and $param["CategoryGrade"] !== null) {
            $this->CategoryGrade = $param["CategoryGrade"];
        }

        if (array_key_exists("RuleRelations",$param) and $param["RuleRelations"] !== null) {
            $this->RuleRelations = [];
            foreach ($param["RuleRelations"] as $key => $value){
                $obj = new DspmIdentifyComplianceRuleRelation();
                $obj->deserialize($value);
                array_push($this->RuleRelations, $obj);
            }
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DspmIdentifyComplianceCategoryRelation();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
