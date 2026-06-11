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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on TOP baseline detection item
 *
 * @method string getRuleName() Obtain Baseline detection item name
 * @method void setRuleName(string $RuleName) Set Baseline detection item name
 * @method integer getLevel() Obtain Detection item hazard level
 * @method void setLevel(integer $Level) Set Detection item hazard level
 * @method integer getEventCount() Obtain Total number of events
 * @method void setEventCount(integer $EventCount) Set Total number of events
 * @method integer getRuleId() Obtain Detection item ID
 * @method void setRuleId(integer $RuleId) Set Detection item ID
 */
class BaselineRuleTopInfo extends AbstractModel
{
    /**
     * @var string Baseline detection item name
     */
    public $RuleName;

    /**
     * @var integer Detection item hazard level
     */
    public $Level;

    /**
     * @var integer Total number of events
     */
    public $EventCount;

    /**
     * @var integer Detection item ID
     */
    public $RuleId;

    /**
     * @param string $RuleName Baseline detection item name
     * @param integer $Level Detection item hazard level
     * @param integer $EventCount Total number of events
     * @param integer $RuleId Detection item ID
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
