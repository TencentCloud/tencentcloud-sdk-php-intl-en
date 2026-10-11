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
 * Baseline rule
 *
 * @method string getRuleName() Obtain Rule Name, up to 128 English characters in length
 * @method void setRuleName(string $RuleName) Set Rule Name, up to 128 English characters in length
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method integer getRuleType() Obtain Rule type [0: system|1: custom].
 * @method void setRuleType(integer $RuleType) Set Rule type [0: system|1: custom].
 * @method integer getCategoryId() Obtain Rule Classification
 * @method void setCategoryId(integer $CategoryId) Set Rule Classification
 * @method string getRuleDesc() Obtain Rule description
 * @method void setRuleDesc(string $RuleDesc) Set Rule description
 * @method integer getHostCount() Obtain Number of Hosts
 * @method void setHostCount(integer $HostCount) Set Number of Hosts
 * @method array getItems() Obtain Adaptation Item ID List
 * @method void setItems(array $Items) Set Adaptation Item ID List
 * @method integer getAssetType() Obtain [0: all Pro and Ultimate Editions|1: host ID|2: IP].
 * @method void setAssetType(integer $AssetType) Set [0: all Pro and Ultimate Editions|1: host ID|2: IP].
 * @method array getHostIds() Obtain Host Id collection
 * @method void setHostIds(array $HostIds) Set Host Id collection
 * @method array getHostIps() Obtain Host IP address
 * @method void setHostIps(array $HostIps) Set Host IP address
 */
class BaselineRule extends AbstractModel
{
    /**
     * @var string Rule Name, up to 128 English characters in length
     */
    public $RuleName;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var integer Rule type [0: system|1: custom].
     */
    public $RuleType;

    /**
     * @var integer Rule Classification
     */
    public $CategoryId;

    /**
     * @var string Rule description
     */
    public $RuleDesc;

    /**
     * @var integer Number of Hosts
     */
    public $HostCount;

    /**
     * @var array Adaptation Item ID List
     */
    public $Items;

    /**
     * @var integer [0: all Pro and Ultimate Editions|1: host ID|2: IP].
     */
    public $AssetType;

    /**
     * @var array Host Id collection
     */
    public $HostIds;

    /**
     * @var array Host IP address
     */
    public $HostIps;

    /**
     * @param string $RuleName Rule Name, up to 128 English characters in length
     * @param integer $RuleId Rule ID
     * @param integer $RuleType Rule type [0: system|1: custom].
     * @param integer $CategoryId Rule Classification
     * @param string $RuleDesc Rule description
     * @param integer $HostCount Number of Hosts
     * @param array $Items Adaptation Item ID List
     * @param integer $AssetType [0: all Pro and Ultimate Editions|1: host ID|2: IP].
     * @param array $HostIds Host Id collection
     * @param array $HostIps Host IP address
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }
    }
}
