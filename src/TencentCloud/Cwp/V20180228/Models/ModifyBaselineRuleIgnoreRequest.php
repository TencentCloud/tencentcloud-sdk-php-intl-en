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
 * ModifyBaselineRuleIgnore request structure.
 *
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getAssetType() Obtain Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
 * @method void setAssetType(integer $AssetType) Set Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method array getItemIds() Obtain Related item
 * @method void setItemIds(array $ItemIds) Set Related item
 * @method array getHostIds() Obtain Host ID
 * @method void setHostIds(array $HostIds) Set Host ID
 * @method array getHostIps() Obtain Host IP address
 * @method void setHostIps(array $HostIps) Set Host IP address
 * @method integer getSelectAll() Obtain Whether to select all filters
 * @method void setSelectAll(integer $SelectAll) Set Whether to select all filters
 * @method array getFilters() Obtain <li>ItemName - string - Required: No - Item name</li>
 * @method void setFilters(array $Filters) Set <li>ItemName - string - Required: No - Item name</li>
 */
class ModifyBaselineRuleIgnoreRequest extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
     */
    public $AssetType;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var array Related item
     */
    public $ItemIds;

    /**
     * @var array Host ID
     */
    public $HostIds;

    /**
     * @var array Host IP address
     */
    public $HostIps;

    /**
     * @var integer Whether to select all filters
     */
    public $SelectAll;

    /**
     * @var array <li>ItemName - string - Required: No - Item name</li>
     */
    public $Filters;

    /**
     * @param string $RuleName Rule name
     * @param integer $AssetType Asset type [0: all Professional and Ultimate editions|1: ID | 2: IP]
     * @param integer $RuleId Rule ID
     * @param array $ItemIds Related item
     * @param array $HostIds Host ID
     * @param array $HostIps Host IP address
     * @param integer $SelectAll Whether to select all filters
     * @param array $Filters <li>ItemName - string - Required: No - Item name</li>
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
