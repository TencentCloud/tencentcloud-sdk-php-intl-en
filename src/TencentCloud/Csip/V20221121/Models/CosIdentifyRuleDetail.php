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
 * cos data item details
 *
 * @method integer getRuleId() Obtain Data item id
 * @method void setRuleId(integer $RuleId) Set Data item id
 * @method string getRuleName() Obtain Data item name
 * @method void setRuleName(string $RuleName) Set Data item name
 * @method integer getLevelId() Obtain Sensitivity level id
 * @method void setLevelId(integer $LevelId) Set Sensitivity level id
 * @method string getLevelName() Obtain Sensitivity level name
 * @method void setLevelName(string $LevelName) Set Sensitivity level name
 * @method integer getLevelScore() Obtain Sensitivity
 * @method void setLevelScore(integer $LevelScore) Set Sensitivity
 */
class CosIdentifyRuleDetail extends AbstractModel
{
    /**
     * @var integer Data item id
     */
    public $RuleId;

    /**
     * @var string Data item name
     */
    public $RuleName;

    /**
     * @var integer Sensitivity level id
     */
    public $LevelId;

    /**
     * @var string Sensitivity level name
     */
    public $LevelName;

    /**
     * @var integer Sensitivity
     */
    public $LevelScore;

    /**
     * @param integer $RuleId Data item id
     * @param string $RuleName Data item name
     * @param integer $LevelId Sensitivity level id
     * @param string $LevelName Sensitivity level name
     * @param integer $LevelScore Sensitivity
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }
    }
}
