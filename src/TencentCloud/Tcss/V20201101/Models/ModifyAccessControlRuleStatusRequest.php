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
 * ModifyAccessControlRuleStatus request structure.
 *
 * @method array getRuleIdSet() Obtain Policy IDs
 * @method void setRuleIdSet(array $RuleIdSet) Set Policy IDs
 * @method boolean getIsEnable() Obtain Policy switch. Valid values: `true` (on); `false` (off).
 * @method void setIsEnable(boolean $IsEnable) Set Policy switch. Valid values: `true` (on); `false` (off).
 */
class ModifyAccessControlRuleStatusRequest extends AbstractModel
{
    /**
     * @var array Policy IDs
     */
    public $RuleIdSet;

    /**
     * @var boolean Policy switch. Valid values: `true` (on); `false` (off).
     */
    public $IsEnable;

    /**
     * @param array $RuleIdSet Policy IDs
     * @param boolean $IsEnable Policy switch. Valid values: `true` (on); `false` (off).
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
        if (array_key_exists("RuleIdSet",$param) and $param["RuleIdSet"] !== null) {
            $this->RuleIdSet = $param["RuleIdSet"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
