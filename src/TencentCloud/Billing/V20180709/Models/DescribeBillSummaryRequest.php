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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummary request structure.
 *
 * @method string getMonth() Obtain Bill month in the format of "yyyy-mm"
 * @method void setMonth(string $Month) Set Bill month in the format of "yyyy-mm"
 * @method string getGroupType() Obtain Bill dimension. Valid values: `business`, `project`, `region`, `payMode`, and `tag`
 * @method void setGroupType(string $GroupType) Set Bill dimension. Valid values: `business`, `project`, `region`, `payMode`, and `tag`
 * @method array getTagKey() Obtain Tag key, which is used when `GroupType` is `tag`.
 * @method void setTagKey(array $TagKey) Set Tag key, which is used when `GroupType` is `tag`.
 */
class DescribeBillSummaryRequest extends AbstractModel
{
    /**
     * @var string Bill month in the format of "yyyy-mm"
     */
    public $Month;

    /**
     * @var string Bill dimension. Valid values: `business`, `project`, `region`, `payMode`, and `tag`
     */
    public $GroupType;

    /**
     * @var array Tag key, which is used when `GroupType` is `tag`.
     */
    public $TagKey;

    /**
     * @param string $Month Bill month in the format of "yyyy-mm"
     * @param string $GroupType Bill dimension. Valid values: `business`, `project`, `region`, `payMode`, and `tag`
     * @param array $TagKey Tag key, which is used when `GroupType` is `tag`.
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
