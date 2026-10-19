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
 * DescribeRiskBucketList request structure.
 *
 * @method integer getRelAppId() Obtain Associated appid
 * @method void setRelAppId(integer $RelAppId) Set Associated appid
 * @method string getPolicyId() Obtain Rule ID
 * @method void setPolicyId(string $PolicyId) Set Rule ID
 * @method Filter getFilter() Obtain Filter.
 * @method void setFilter(Filter $Filter) Set Filter.
 */
class DescribeRiskBucketListRequest extends AbstractModel
{
    /**
     * @var integer Associated appid
     */
    public $RelAppId;

    /**
     * @var string Rule ID
     */
    public $PolicyId;

    /**
     * @var Filter Filter.
     */
    public $Filter;

    /**
     * @param integer $RelAppId Associated appid
     * @param string $PolicyId Rule ID
     * @param Filter $Filter Filter.
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
        if (array_key_exists("RelAppId",$param) and $param["RelAppId"] !== null) {
            $this->RelAppId = $param["RelAppId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
