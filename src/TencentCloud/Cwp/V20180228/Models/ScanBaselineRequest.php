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
 * ScanBaseline request structure.
 *
 * @method array getStrategyIdList() Obtain Policy ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method void setStrategyIdList(array $StrategyIdList) Set Policy ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method array getCategoryIdList() Obtain Baseline ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method void setCategoryIdList(array $CategoryIdList) Set Baseline ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method array getRuleIdList() Obtain Detection item ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method void setRuleIdList(array $RuleIdList) Set Detection item ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
 * @method array getQuuidList() Obtain Not required when StrategyIdList is selected, but required in other cases.
 * @method void setQuuidList(array $QuuidList) Set Not required when StrategyIdList is selected, but required in other cases.
 * @method array getUuidList() Obtain Host UUID array
 * @method void setUuidList(array $UuidList) Set Host UUID array
 */
class ScanBaselineRequest extends AbstractModel
{
    /**
     * @var array Policy ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     */
    public $StrategyIdList;

    /**
     * @var array Baseline ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     */
    public $CategoryIdList;

    /**
     * @var array Detection item ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     */
    public $RuleIdList;

    /**
     * @var array Not required when StrategyIdList is selected, but required in other cases.
     */
    public $QuuidList;

    /**
     * @var array Host UUID array
     */
    public $UuidList;

    /**
     * @param array $StrategyIdList Policy ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     * @param array $CategoryIdList Baseline ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     * @param array $RuleIdList Detection item ID array (Either StrategyIdList, CategoryIdList, or RuleIdList must be selected.)
     * @param array $QuuidList Not required when StrategyIdList is selected, but required in other cases.
     * @param array $UuidList Host UUID array
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
        if (array_key_exists("StrategyIdList",$param) and $param["StrategyIdList"] !== null) {
            $this->StrategyIdList = $param["StrategyIdList"];
        }

        if (array_key_exists("CategoryIdList",$param) and $param["CategoryIdList"] !== null) {
            $this->CategoryIdList = $param["CategoryIdList"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("UuidList",$param) and $param["UuidList"] !== null) {
            $this->UuidList = $param["UuidList"];
        }
    }
}
