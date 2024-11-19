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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateGatewayLoadBalancer request structure.
 *
 * @method integer getGoodsNum() Obtain Number of GWLB instances for inquiry, with a default of 1
 * @method void setGoodsNum(integer $GoodsNum) Set Number of GWLB instances for inquiry, with a default of 1
 */
class InquirePriceCreateGatewayLoadBalancerRequest extends AbstractModel
{
    /**
     * @var integer Number of GWLB instances for inquiry, with a default of 1
     */
    public $GoodsNum;

    /**
     * @param integer $GoodsNum Number of GWLB instances for inquiry, with a default of 1
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }
    }
}
