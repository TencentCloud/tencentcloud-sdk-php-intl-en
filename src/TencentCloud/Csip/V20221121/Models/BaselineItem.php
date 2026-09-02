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
 * Baseline detection item.
 *
 * @method integer getID() Obtain <p>Baseline detection item ID.</p>
 * @method void setID(integer $ID) Set <p>Baseline detection item ID.</p>
 * @method integer getRuleID() Obtain <p>Built-in rule ID.</p>
 * @method void setRuleID(integer $RuleID) Set <p>Built-in rule ID.</p>
 * @method array getCheckObject() Obtain <p>Detection object description, such as configuration file path, kernel parameter, and Kubernetes Resources.</p>
 * @method void setCheckObject(array $CheckObject) Set <p>Detection object description, such as configuration file path, kernel parameter, and Kubernetes Resources.</p>
 * @method string getRiskLevel() Obtain <p>Risk level. Value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level. Value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method string getName() Obtain <p>Detection item name (Chinese).</p>
 * @method void setName(string $Name) Set <p>Detection item name (Chinese).</p>
 * @method string getDescription() Obtain <p>Detection item description (Chinese, explaining the detection background and determination logic).</p>
 * @method void setDescription(string $Description) Set <p>Detection item description (Chinese, explaining the detection background and determination logic).</p>
 * @method string getFixSuggestion() Obtain <p>Detection item repair advice (Chinese, including recommended configuration reference values or hardening commands).</p>
 * @method void setFixSuggestion(string $FixSuggestion) Set <p>Detection item repair advice (Chinese, including recommended configuration reference values or hardening commands).</p>
 * @method string getReferenceLink() Obtain <p>Reference link list of detection items.</p>
 * @method void setReferenceLink(string $ReferenceLink) Set <p>Reference link list of detection items.</p>
 * @method BaselineCategory getSystemCategory() Obtain <p>Classification information of the parent category in the associated system.</p>
 * @method void setSystemCategory(BaselineCategory $SystemCategory) Set <p>Classification information of the parent category in the associated system.</p>
 * @method BaselineCategory getCategory() Obtain <p>Classification information of the subcategory it belongs to.</p>
 * @method void setCategory(BaselineCategory $Category) Set <p>Classification information of the subcategory it belongs to.</p>
 * @method boolean getSupportFix() Obtain <p>Whether one-click repair is supported. true: supported, false: unsupported.</p>
 * @method void setSupportFix(boolean $SupportFix) Set <p>Whether one-click repair is supported. true: supported, false: unsupported.</p>
 * @method boolean getSupportCustomValue() Obtain <p>Whether user-defined judgment values are supported. true: supported; false: not supported.</p>
 * @method void setSupportCustomValue(boolean $SupportCustomValue) Set <p>Whether user-defined judgment values are supported. true: supported; false: not supported.</p>
 * @method array getAffectedVersionList() Obtain <p>Operating system/component version list applicable to this detection item.</p>
 * @method void setAffectedVersionList(array $AffectedVersionList) Set <p>Operating system/component version list applicable to this detection item.</p>
 * @method string getWebEditParam() Obtain <p>Parameter definition when editing a custom judgment value (for example, permissible range, control type).</p>
 * @method void setWebEditParam(string $WebEditParam) Set <p>Parameter definition when editing a custom judgment value (for example, permissible range, control type).</p>
 * @method array getDefaultValueList() Obtain <p>Default detection item judgment value list.</p>
 * @method void setDefaultValueList(array $DefaultValueList) Set <p>Default detection item judgment value list.</p>
 * @method boolean getIsCustomConf() Obtain <p>Whether customized by the user. true: customized; false: use default values.</p>
 * @method void setIsCustomConf(boolean $IsCustomConf) Set <p>Whether customized by the user. true: customized; false: use default values.</p>
 * @method integer getCustomItemID() Obtain <p>User-customized configuration record ID. The value is 0 if not customized.</p>
 * @method void setCustomItemID(integer $CustomItemID) Set <p>User-customized configuration record ID. The value is 0 if not customized.</p>
 */
class BaselineItem extends AbstractModel
{
    /**
     * @var integer <p>Baseline detection item ID.</p>
     */
    public $ID;

    /**
     * @var integer <p>Built-in rule ID.</p>
     */
    public $RuleID;

    /**
     * @var array <p>Detection object description, such as configuration file path, kernel parameter, and Kubernetes Resources.</p>
     */
    public $CheckObject;

    /**
     * @var string <p>Risk level. Value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     */
    public $RiskLevel;

    /**
     * @var string <p>Detection item name (Chinese).</p>
     */
    public $Name;

    /**
     * @var string <p>Detection item description (Chinese, explaining the detection background and determination logic).</p>
     */
    public $Description;

    /**
     * @var string <p>Detection item repair advice (Chinese, including recommended configuration reference values or hardening commands).</p>
     */
    public $FixSuggestion;

    /**
     * @var string <p>Reference link list of detection items.</p>
     */
    public $ReferenceLink;

    /**
     * @var BaselineCategory <p>Classification information of the parent category in the associated system.</p>
     */
    public $SystemCategory;

    /**
     * @var BaselineCategory <p>Classification information of the subcategory it belongs to.</p>
     */
    public $Category;

    /**
     * @var boolean <p>Whether one-click repair is supported. true: supported, false: unsupported.</p>
     */
    public $SupportFix;

    /**
     * @var boolean <p>Whether user-defined judgment values are supported. true: supported; false: not supported.</p>
     */
    public $SupportCustomValue;

    /**
     * @var array <p>Operating system/component version list applicable to this detection item.</p>
     */
    public $AffectedVersionList;

    /**
     * @var string <p>Parameter definition when editing a custom judgment value (for example, permissible range, control type).</p>
     */
    public $WebEditParam;

    /**
     * @var array <p>Default detection item judgment value list.</p>
     */
    public $DefaultValueList;

    /**
     * @var boolean <p>Whether customized by the user. true: customized; false: use default values.</p>
     */
    public $IsCustomConf;

    /**
     * @var integer <p>User-customized configuration record ID. The value is 0 if not customized.</p>
     */
    public $CustomItemID;

    /**
     * @param integer $ID <p>Baseline detection item ID.</p>
     * @param integer $RuleID <p>Built-in rule ID.</p>
     * @param array $CheckObject <p>Detection object description, such as configuration file path, kernel parameter, and Kubernetes Resources.</p>
     * @param string $RiskLevel <p>Risk level. Value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     * @param string $Name <p>Detection item name (Chinese).</p>
     * @param string $Description <p>Detection item description (Chinese, explaining the detection background and determination logic).</p>
     * @param string $FixSuggestion <p>Detection item repair advice (Chinese, including recommended configuration reference values or hardening commands).</p>
     * @param string $ReferenceLink <p>Reference link list of detection items.</p>
     * @param BaselineCategory $SystemCategory <p>Classification information of the parent category in the associated system.</p>
     * @param BaselineCategory $Category <p>Classification information of the subcategory it belongs to.</p>
     * @param boolean $SupportFix <p>Whether one-click repair is supported. true: supported, false: unsupported.</p>
     * @param boolean $SupportCustomValue <p>Whether user-defined judgment values are supported. true: supported; false: not supported.</p>
     * @param array $AffectedVersionList <p>Operating system/component version list applicable to this detection item.</p>
     * @param string $WebEditParam <p>Parameter definition when editing a custom judgment value (for example, permissible range, control type).</p>
     * @param array $DefaultValueList <p>Default detection item judgment value list.</p>
     * @param boolean $IsCustomConf <p>Whether customized by the user. true: customized; false: use default values.</p>
     * @param integer $CustomItemID <p>User-customized configuration record ID. The value is 0 if not customized.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("CheckObject",$param) and $param["CheckObject"] !== null) {
            $this->CheckObject = $param["CheckObject"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("SystemCategory",$param) and $param["SystemCategory"] !== null) {
            $this->SystemCategory = new BaselineCategory();
            $this->SystemCategory->deserialize($param["SystemCategory"]);
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new BaselineCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("SupportCustomValue",$param) and $param["SupportCustomValue"] !== null) {
            $this->SupportCustomValue = $param["SupportCustomValue"];
        }

        if (array_key_exists("AffectedVersionList",$param) and $param["AffectedVersionList"] !== null) {
            $this->AffectedVersionList = $param["AffectedVersionList"];
        }

        if (array_key_exists("WebEditParam",$param) and $param["WebEditParam"] !== null) {
            $this->WebEditParam = $param["WebEditParam"];
        }

        if (array_key_exists("DefaultValueList",$param) and $param["DefaultValueList"] !== null) {
            $this->DefaultValueList = $param["DefaultValueList"];
        }

        if (array_key_exists("IsCustomConf",$param) and $param["IsCustomConf"] !== null) {
            $this->IsCustomConf = $param["IsCustomConf"];
        }

        if (array_key_exists("CustomItemID",$param) and $param["CustomItemID"] !== null) {
            $this->CustomItemID = $param["CustomItemID"];
        }
    }
}
