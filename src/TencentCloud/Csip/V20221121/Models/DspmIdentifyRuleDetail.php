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
 * dspm data item details
 *
 * @method integer getRuleId() Obtain <p>Data item id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Data item id</p>
 * @method string getRuleName() Obtain <p>Data item name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Data item name.</p>
 * @method integer getLevelId() Obtain <p>Sensitivity level id</p>
 * @method void setLevelId(integer $LevelId) Set <p>Sensitivity level id</p>
 * @method string getLevelName() Obtain <p>Sensitivity level name</p>
 * @method void setLevelName(string $LevelName) Set <p>Sensitivity level name</p>
 * @method integer getLevelScore() Obtain <p>Sensitivity</p>
 * @method void setLevelScore(integer $LevelScore) Set <p>Sensitivity</p>
 */
class DspmIdentifyRuleDetail extends AbstractModel
{
    /**
     * @var integer <p>Data item id</p>
     */
    public $RuleId;

    /**
     * @var string <p>Data item name.</p>
     */
    public $RuleName;

    /**
     * @var integer <p>Sensitivity level id</p>
     */
    public $LevelId;

    /**
     * @var string <p>Sensitivity level name</p>
     */
    public $LevelName;

    /**
     * @var integer <p>Sensitivity</p>
     */
    public $LevelScore;

    /**
     * @param integer $RuleId <p>Data item id</p>
     * @param string $RuleName <p>Data item name.</p>
     * @param integer $LevelId <p>Sensitivity level id</p>
     * @param string $LevelName <p>Sensitivity level name</p>
     * @param integer $LevelScore <p>Sensitivity</p>
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
