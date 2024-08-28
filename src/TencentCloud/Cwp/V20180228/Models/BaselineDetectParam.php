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
 * Baseline check parameters
 *
 * @method array getPolicyIds() Obtain Collection of check policies
 * @method void setPolicyIds(array $PolicyIds) Set Collection of check policies
 * @method array getRuleIds() Obtain Collection of check rules
 * @method void setRuleIds(array $RuleIds) Set Collection of check rules
 * @method array getItemIds() Obtain Collection of check items
 * @method void setItemIds(array $ItemIds) Set Collection of check items
 * @method array getHostIds() Obtain Collection of checked server IDs
 * @method void setHostIds(array $HostIds) Set Collection of checked server IDs
 */
class BaselineDetectParam extends AbstractModel
{
    /**
     * @var array Collection of check policies
     */
    public $PolicyIds;

    /**
     * @var array Collection of check rules
     */
    public $RuleIds;

    /**
     * @var array Collection of check items
     */
    public $ItemIds;

    /**
     * @var array Collection of checked server IDs
     */
    public $HostIds;

    /**
     * @param array $PolicyIds Collection of check policies
     * @param array $RuleIds Collection of check rules
     * @param array $ItemIds Collection of check items
     * @param array $HostIds Collection of checked server IDs
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
        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }
    }
}
