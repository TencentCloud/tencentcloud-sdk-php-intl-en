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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRemediations request structure.
 *
 * @method integer getLimit() Obtain Number of items per page. Default value: 20; value range: 1–200.
 * @method void setLimit(integer $Limit) Set Number of items per page. Default value: 20; value range: 1–200.
 * @method array getRuleIds() Obtain Rule ID
 * @method void setRuleIds(array $RuleIds) Set Rule ID
 */
class ListRemediationsRequest extends AbstractModel
{
    /**
     * @var integer Number of items per page. Default value: 20; value range: 1–200.
     */
    public $Limit;

    /**
     * @var array Rule ID
     */
    public $RuleIds;

    /**
     * @param integer $Limit Number of items per page. Default value: 20; value range: 1–200.
     * @param array $RuleIds Rule ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }
    }
}
