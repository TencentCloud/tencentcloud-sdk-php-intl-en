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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEscapeSafeState response structure.
 *
 * @method string getIsSafe() Obtain Valid values: `Unsafe` (at risk); `Safe` (no risks); `UnKnown` (unknown risks).
 * @method void setIsSafe(string $IsSafe) Set Valid values: `Unsafe` (at risk); `Safe` (no risks); `UnKnown` (unknown risks).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEscapeSafeStateResponse extends AbstractModel
{
    /**
     * @var string Valid values: `Unsafe` (at risk); `Safe` (no risks); `UnKnown` (unknown risks).
     */
    public $IsSafe;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $IsSafe Valid values: `Unsafe` (at risk); `Safe` (no risks); `UnKnown` (unknown risks).
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("IsSafe",$param) and $param["IsSafe"] !== null) {
            $this->IsSafe = $param["IsSafe"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
