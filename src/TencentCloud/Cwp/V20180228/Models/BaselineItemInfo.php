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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline Information
 *
 * @method integer getItemId() Obtain Baseline Detection Item ID
 * @method void setItemId(integer $ItemId) Set Baseline Detection Item ID
 * @method string getItemName() Obtain Detection Item Name
 * @method void setItemName(string $ItemName) Set Detection Item Name
 * @method integer getRuleId() Obtain ID of the Rule to Which the Detection Item Belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set ID of the Rule to Which the Detection Item Belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getItemDesc() Obtain Detection item description
 * @method void setItemDesc(string $ItemDesc) Set Detection item description
 * @method string getFixMethod() Obtain Remediation Method for Inspection Items
 * @method void setFixMethod(string $FixMethod) Set Remediation Method for Inspection Items
 * @method string getRuleName() Obtain Rule Name of Detection Item
 * @method void setRuleName(string $RuleName) Set Rule Name of Detection Item
 * @method integer getLevel() Obtain Risk level
 * @method void setLevel(integer $Level) Set Risk level
 * @method integer getSysRuleId() Obtain System Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSysRuleId(integer $SysRuleId) Set System Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRelatedCustomRuleInfo() Obtain Referenced Custom Rule Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelatedCustomRuleInfo(array $RelatedCustomRuleInfo) Set Referenced Custom Rule Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineItemInfo extends AbstractModel
{
    /**
     * @var integer Baseline Detection Item ID
     */
    public $ItemId;

    /**
     * @var string Detection Item Name
     */
    public $ItemName;

    /**
     * @var integer ID of the Rule to Which the Detection Item Belongs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Detection item description
     */
    public $ItemDesc;

    /**
     * @var string Remediation Method for Inspection Items
     */
    public $FixMethod;

    /**
     * @var string Rule Name of Detection Item
     */
    public $RuleName;

    /**
     * @var integer Risk level
     */
    public $Level;

    /**
     * @var integer System Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SysRuleId;

    /**
     * @var array Referenced Custom Rule Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelatedCustomRuleInfo;

    /**
     * @param integer $ItemId Baseline Detection Item ID
     * @param string $ItemName Detection Item Name
     * @param integer $RuleId ID of the Rule to Which the Detection Item Belongs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ItemDesc Detection item description
     * @param string $FixMethod Remediation Method for Inspection Items
     * @param string $RuleName Rule Name of Detection Item
     * @param integer $Level Risk level
     * @param integer $SysRuleId System Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RelatedCustomRuleInfo Referenced Custom Rule Information
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SysRuleId",$param) and $param["SysRuleId"] !== null) {
            $this->SysRuleId = $param["SysRuleId"];
        }

        if (array_key_exists("RelatedCustomRuleInfo",$param) and $param["RelatedCustomRuleInfo"] !== null) {
            $this->RelatedCustomRuleInfo = [];
            foreach ($param["RelatedCustomRuleInfo"] as $key => $value){
                $obj = new BaselineCustomRuleIdName();
                $obj->deserialize($value);
                array_push($this->RelatedCustomRuleInfo, $obj);
            }
        }
    }
}
