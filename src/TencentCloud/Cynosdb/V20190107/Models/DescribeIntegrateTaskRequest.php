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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrateTask request structure.
 *
 * @method string getBigDealId() Obtain Large order id. must choose between large order id and sub-order id.
 * @method void setBigDealId(string $BigDealId) Set Large order id. must choose between large order id and sub-order id.
 * @method array getDealNames() Obtain Order list
 * @method void setDealNames(array $DealNames) Set Order list
 */
class DescribeIntegrateTaskRequest extends AbstractModel
{
    /**
     * @var string Large order id. must choose between large order id and sub-order id.
     */
    public $BigDealId;

    /**
     * @var array Order list
     */
    public $DealNames;

    /**
     * @param string $BigDealId Large order id. must choose between large order id and sub-order id.
     * @param array $DealNames Order list
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
        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}
