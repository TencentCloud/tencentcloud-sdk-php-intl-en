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
 * AddEditImageAutoAuthorizedRule request structure.
 *
 * @method string getRangeType() Obtain Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
 * @method void setRangeType(string $RangeType) Set Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
 * @method integer getMaxDailyCount() Obtain Maximum number of image licenses per day. `0`: Unlimited.
 * @method void setMaxDailyCount(integer $MaxDailyCount) Set Maximum number of image licenses per day. `0`: Unlimited.
 * @method integer getIsEnabled() Obtain Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method array getHostIdSet() Obtain IDs of specified servers. This parameter is required when the scope is `MANUAL` and `HostIdFilters` is empty.
 * @method void setHostIdSet(array $HostIdSet) Set IDs of specified servers. This parameter is required when the scope is `MANUAL` and `HostIdFilters` is empty.
 * @method integer getRuleId() Obtain Rule ID, which is required during editing.
 * @method void setRuleId(integer $RuleId) Set Rule ID, which is required during editing.
 * @method array getHostIdFilters() Obtain Filter. This parameter is required when the scope is `MANUAL` and `HostIdSet` is empty.
 * @method void setHostIdFilters(array $HostIdFilters) Set Filter. This parameter is required when the scope is `MANUAL` and `HostIdSet` is empty.
 * @method array getExcludeHostIdSet() Obtain Specified server IDs to be excluded
 * @method void setExcludeHostIdSet(array $ExcludeHostIdSet) Set Specified server IDs to be excluded
 */
class AddEditImageAutoAuthorizedRuleRequest extends AbstractModel
{
    /**
     * @var string Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
     */
    public $RangeType;

    /**
     * @var integer Maximum number of image licenses per day. `0`: Unlimited.
     */
    public $MaxDailyCount;

    /**
     * @var integer Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     */
    public $IsEnabled;

    /**
     * @var array IDs of specified servers. This parameter is required when the scope is `MANUAL` and `HostIdFilters` is empty.
     */
    public $HostIdSet;

    /**
     * @var integer Rule ID, which is required during editing.
     */
    public $RuleId;

    /**
     * @var array Filter. This parameter is required when the scope is `MANUAL` and `HostIdSet` is empty.
     */
    public $HostIdFilters;

    /**
     * @var array Specified server IDs to be excluded
     */
    public $ExcludeHostIdSet;

    /**
     * @param string $RangeType Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
     * @param integer $MaxDailyCount Maximum number of image licenses per day. `0`: Unlimited.
     * @param integer $IsEnabled Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     * @param array $HostIdSet IDs of specified servers. This parameter is required when the scope is `MANUAL` and `HostIdFilters` is empty.
     * @param integer $RuleId Rule ID, which is required during editing.
     * @param array $HostIdFilters Filter. This parameter is required when the scope is `MANUAL` and `HostIdSet` is empty.
     * @param array $ExcludeHostIdSet Specified server IDs to be excluded
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
        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("MaxDailyCount",$param) and $param["MaxDailyCount"] !== null) {
            $this->MaxDailyCount = $param["MaxDailyCount"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("HostIdSet",$param) and $param["HostIdSet"] !== null) {
            $this->HostIdSet = $param["HostIdSet"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("HostIdFilters",$param) and $param["HostIdFilters"] !== null) {
            $this->HostIdFilters = [];
            foreach ($param["HostIdFilters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->HostIdFilters, $obj);
            }
        }

        if (array_key_exists("ExcludeHostIdSet",$param) and $param["ExcludeHostIdSet"] !== null) {
            $this->ExcludeHostIdSet = $param["ExcludeHostIdSet"];
        }
    }
}
