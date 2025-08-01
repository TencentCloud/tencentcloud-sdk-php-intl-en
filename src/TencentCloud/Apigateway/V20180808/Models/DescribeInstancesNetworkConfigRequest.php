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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesNetworkConfig request structure.
 *
 * @method integer getLimit() Obtain Number of returns, with a default value of 20 and a maximum value of 100.

 * @method void setLimit(integer $Limit) Set Number of returns, with a default value of 20 and a maximum value of 100.

 * @method integer getOffset() Obtain Offset, which is 0 by default.

 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 */
class DescribeInstancesNetworkConfigRequest extends AbstractModel
{
    /**
     * @var integer Number of returns, with a default value of 20 and a maximum value of 100.

     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.

     */
    public $Offset;

    /**
     * @param integer $Limit Number of returns, with a default value of 20 and a maximum value of 100.

     * @param integer $Offset Offset, which is 0 by default.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
