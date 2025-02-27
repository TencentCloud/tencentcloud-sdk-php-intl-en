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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummary request structure.
 *
 * @method string getMonth() Obtain The month to which the bill belongs, formatted as YYYY-MM.
 * @method void setMonth(string $Month) Set The month to which the bill belongs, formatted as YYYY-MM.
 * @method string getGroupType() Obtain Billing dimension. Optional parameters: product, project, tag
 * @method void setGroupType(string $GroupType) Set Billing dimension. Optional parameters: product, project, tag
 * @method array getTagKey() Obtain Tag value list
 * @method void setTagKey(array $TagKey) Set Tag value list
 */
class DescribeBillSummaryRequest extends AbstractModel
{
    /**
     * @var string The month to which the bill belongs, formatted as YYYY-MM.
     */
    public $Month;

    /**
     * @var string Billing dimension. Optional parameters: product, project, tag
     */
    public $GroupType;

    /**
     * @var array Tag value list
     */
    public $TagKey;

    /**
     * @param string $Month The month to which the bill belongs, formatted as YYYY-MM.
     * @param string $GroupType Billing dimension. Optional parameters: product, project, tag
     * @param array $TagKey Tag value list
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
