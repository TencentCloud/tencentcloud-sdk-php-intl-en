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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container runtime - Access control policy information
 *
 * @method boolean getIsEnable() Obtain Switch. Valid values: `true` (on); `false` (off).
 * @method void setIsEnable(boolean $IsEnable) Set Switch. Valid values: `true` (on); `false` (off).
 * @method array getImageIds() Obtain IDs of associated images. An empty array indicates all images.
 * @method void setImageIds(array $ImageIds) Set IDs of associated images. An empty array indicates all images.
 * @method array getChildRules() Obtain Array of sub-policies of the user policy
 * @method void setChildRules(array $ChildRules) Set Array of sub-policies of the user policy
 * @method string getRuleName() Obtain Policy name
 * @method void setRuleName(string $RuleName) Set Policy name
 * @method string getRuleId() Obtain Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(string $RuleId) Set Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSystemChildRules() Obtain Array of sub-policies of the preset policy
 * @method void setSystemChildRules(array $SystemChildRules) Set Array of sub-policies of the preset policy
 * @method boolean getIsDefault() Obtain Whether it is the default preset policy
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default preset policy
 */
class AccessControlRuleInfo extends AbstractModel
{
    /**
     * @var boolean Switch. Valid values: `true` (on); `false` (off).
     */
    public $IsEnable;

    /**
     * @var array IDs of associated images. An empty array indicates all images.
     */
    public $ImageIds;

    /**
     * @var array Array of sub-policies of the user policy
     */
    public $ChildRules;

    /**
     * @var string Policy name
     */
    public $RuleName;

    /**
     * @var string Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var array Array of sub-policies of the preset policy
     */
    public $SystemChildRules;

    /**
     * @var boolean Whether it is the default preset policy
     */
    public $IsDefault;

    /**
     * @param boolean $IsEnable Switch. Valid values: `true` (on); `false` (off).
     * @param array $ImageIds IDs of associated images. An empty array indicates all images.
     * @param array $ChildRules Array of sub-policies of the user policy
     * @param string $RuleName Policy name
     * @param string $RuleId Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SystemChildRules Array of sub-policies of the preset policy
     * @param boolean $IsDefault Whether it is the default preset policy
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
        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("ChildRules",$param) and $param["ChildRules"] !== null) {
            $this->ChildRules = [];
            foreach ($param["ChildRules"] as $key => $value){
                $obj = new AccessControlChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->ChildRules, $obj);
            }
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SystemChildRules",$param) and $param["SystemChildRules"] !== null) {
            $this->SystemChildRules = [];
            foreach ($param["SystemChildRules"] as $key => $value){
                $obj = new AccessControlSystemChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->SystemChildRules, $obj);
            }
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
