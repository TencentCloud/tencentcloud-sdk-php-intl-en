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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot user portrait rules
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
 * @method array getAlgManagedIds() Obtain The rule ID of JS challenge. default all rules without configuring JS challenge.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set The rule ID of JS challenge. default all rules without configuring JS challenge.
 * @method array getCapManagedIds() Obtain Rule ID for digit captcha-intl. default is all rules without configuring digit captcha-intl.
 * @method void setCapManagedIds(array $CapManagedIds) Set Rule ID for digit captcha-intl. default is all rules without configuring digit captcha-intl.
 * @method array getMonManagedIds() Obtain Rule ID for observation. by default, observation is not configured for all rules.
 * @method void setMonManagedIds(array $MonManagedIds) Set Rule ID for observation. by default, observation is not configured for all rules.
 * @method array getDropManagedIds() Obtain Rule ID for interception. default to all rules with no configuration interception.
 * @method void setDropManagedIds(array $DropManagedIds) Set Rule ID for interception. default to all rules with no configuration interception.
 */
class BotPortraitRule extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var array The rule ID of JS challenge. default all rules without configuring JS challenge.
     */
    public $AlgManagedIds;

    /**
     * @var array Rule ID for digit captcha-intl. default is all rules without configuring digit captcha-intl.
     */
    public $CapManagedIds;

    /**
     * @var array Rule ID for observation. by default, observation is not configured for all rules.
     */
    public $MonManagedIds;

    /**
     * @var array Rule ID for interception. default to all rules with no configuration interception.
     */
    public $DropManagedIds;

    /**
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
     * @param array $AlgManagedIds The rule ID of JS challenge. default all rules without configuring JS challenge.
     * @param array $CapManagedIds Rule ID for digit captcha-intl. default is all rules without configuring digit captcha-intl.
     * @param array $MonManagedIds Rule ID for observation. by default, observation is not configured for all rules.
     * @param array $DropManagedIds Rule ID for interception. default to all rules with no configuration interception.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("AlgManagedIds",$param) and $param["AlgManagedIds"] !== null) {
            $this->AlgManagedIds = $param["AlgManagedIds"];
        }

        if (array_key_exists("CapManagedIds",$param) and $param["CapManagedIds"] !== null) {
            $this->CapManagedIds = $param["CapManagedIds"];
        }

        if (array_key_exists("MonManagedIds",$param) and $param["MonManagedIds"] !== null) {
            $this->MonManagedIds = $param["MonManagedIds"];
        }

        if (array_key_exists("DropManagedIds",$param) and $param["DropManagedIds"] !== null) {
            $this->DropManagedIds = $param["DropManagedIds"];
        }
    }
}
