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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalerResourceStrategyBindingGroups request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method string getStrategyId() Obtain Policy ID
 * @method void setStrategyId(string $StrategyId) Set Policy ID
 * @method integer getOffset() Obtain Query offset
 * @method void setOffset(integer $Offset) Set Query offset
 * @method integer getLimit() Obtain Query Quantity Limit
 * @method void setLimit(integer $Limit) Set Query Quantity Limit
 */
class DescribeAutoScalerResourceStrategyBindingGroupsRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var string Policy ID
     */
    public $StrategyId;

    /**
     * @var integer Query offset
     */
    public $Offset;

    /**
     * @var integer Query Quantity Limit
     */
    public $Limit;

    /**
     * @param string $GatewayId Gateway instance ID
     * @param string $StrategyId Policy ID
     * @param integer $Offset Query offset
     * @param integer $Limit Query Quantity Limit
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
