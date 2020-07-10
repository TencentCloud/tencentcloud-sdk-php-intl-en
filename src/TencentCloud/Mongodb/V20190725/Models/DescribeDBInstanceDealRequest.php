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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceDeal request structure.
 *
 * @method string getDealId() Obtain Order ID. It is returned by the `CreateDBInstance` and other APIs.
 * @method void setDealId(string $DealId) Set Order ID. It is returned by the `CreateDBInstance` and other APIs.
 */
class DescribeDBInstanceDealRequest extends AbstractModel
{
    /**
     * @var string Order ID. It is returned by the `CreateDBInstance` and other APIs.
     */
    public $DealId;

    /**
     * @param string $DealId Order ID. It is returned by the `CreateDBInstance` and other APIs.
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }
    }
}
