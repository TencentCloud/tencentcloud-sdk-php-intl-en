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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Runtime security - Basic policy information
 *
 * @method string getEditUserName() Obtain Name of the editing user
 * @method void setEditUserName(string $EditUserName) Set Name of the editing user
 * @method integer getEffectImageCount() Obtain Number of associated images
 * @method void setEffectImageCount(integer $EffectImageCount) Set Number of associated images
 * @method boolean getIsDefault() Obtain Valid values: `true` (default policy); `false` (custom policy).
 * @method void setIsDefault(boolean $IsDefault) Set Valid values: `true` (default policy); `false` (custom policy).
 * @method boolean getIsGlobal() Obtain Whether the rule applies to all images. true indicates it takes effect for all images.
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether the rule applies to all images. true indicates it takes effect for all images.
 * @method boolean getIsEnable() Obtain Valid values: `true` (enable the policy); `false` (disable the policy).
 * @method void setIsEnable(boolean $IsEnable) Set Valid values: `true` (enable the policy); `false` (disable the policy).
 * @method string getRuleId() Obtain Policy ID
 * @method void setRuleId(string $RuleId) Set Policy ID
 * @method string getRuleName() Obtain Policy name
 * @method void setRuleName(string $RuleName) Set Policy name
 * @method string getUpdateTime() Obtain Policy update time. Can be empty.
 * @method void setUpdateTime(string $UpdateTime) Set Policy update time. Can be empty.
 */
class RuleBaseInfo extends AbstractModel
{
    /**
     * @var string Name of the editing user
     */
    public $EditUserName;

    /**
     * @var integer Number of associated images
     */
    public $EffectImageCount;

    /**
     * @var boolean Valid values: `true` (default policy); `false` (custom policy).
     */
    public $IsDefault;

    /**
     * @var boolean Whether the rule applies to all images. true indicates it takes effect for all images.
     */
    public $IsGlobal;

    /**
     * @var boolean Valid values: `true` (enable the policy); `false` (disable the policy).
     */
    public $IsEnable;

    /**
     * @var string Policy ID
     */
    public $RuleId;

    /**
     * @var string Policy name
     */
    public $RuleName;

    /**
     * @var string Policy update time. Can be empty.
     */
    public $UpdateTime;

    /**
     * @param string $EditUserName Name of the editing user
     * @param integer $EffectImageCount Number of associated images
     * @param boolean $IsDefault Valid values: `true` (default policy); `false` (custom policy).
     * @param boolean $IsGlobal Whether the rule applies to all images. true indicates it takes effect for all images.
     * @param boolean $IsEnable Valid values: `true` (enable the policy); `false` (disable the policy).
     * @param string $RuleId Policy ID
     * @param string $RuleName Policy name
     * @param string $UpdateTime Policy update time. Can be empty.
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
        if (array_key_exists("EditUserName",$param) and $param["EditUserName"] !== null) {
            $this->EditUserName = $param["EditUserName"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
