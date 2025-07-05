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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MaxAge status code
 *
 * @method string getAction() Obtain Action to execute.
`clear`: Clear the cache-control header.
 * @method void setAction(string $Action) Set Action to execute.
`clear`: Clear the cache-control header.
 * @method array getStatusCodes() Obtain Specifies the HTTP status code in the range 400-599.
 * @method void setStatusCodes(array $StatusCodes) Set Specifies the HTTP status code in the range 400-599.
 */
class MaxAgeCodeRule extends AbstractModel
{
    /**
     * @var string Action to execute.
`clear`: Clear the cache-control header.
     */
    public $Action;

    /**
     * @var array Specifies the HTTP status code in the range 400-599.
     */
    public $StatusCodes;

    /**
     * @param string $Action Action to execute.
`clear`: Clear the cache-control header.
     * @param array $StatusCodes Specifies the HTTP status code in the range 400-599.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("StatusCodes",$param) and $param["StatusCodes"] !== null) {
            $this->StatusCodes = $param["StatusCodes"];
        }
    }
}
