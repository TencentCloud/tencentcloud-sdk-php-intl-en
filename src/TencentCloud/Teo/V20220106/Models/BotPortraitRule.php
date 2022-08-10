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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot user portrait rules
 *
 * @method integer getRuleID() Obtain ID of the rule being applied
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleID(integer $RuleID) Set ID of the rule being applied
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getAlgManagedIds() Obtain ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getCapManagedIds() Obtain ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCapManagedIds(array $CapManagedIds) Set ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getMonManagedIds() Obtain ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMonManagedIds(array $MonManagedIds) Set ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getDropManagedIds() Obtain ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDropManagedIds(array $DropManagedIds) Set ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSwitch() Obtain Feature switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Feature switch
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotPortraitRule extends AbstractModel
{
    /**
     * @var integer ID of the rule being applied
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleID;

    /**
     * @var array ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AlgManagedIds;

    /**
     * @var array ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CapManagedIds;

    /**
     * @var array ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MonManagedIds;

    /**
     * @var array ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DropManagedIds;

    /**
     * @var string Feature switch
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @param integer $RuleID ID of the rule being applied
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $AlgManagedIds ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $CapManagedIds ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $MonManagedIds ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $DropManagedIds ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Switch Feature switch
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
