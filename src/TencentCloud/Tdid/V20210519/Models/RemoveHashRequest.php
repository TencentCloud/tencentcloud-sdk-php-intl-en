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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveHash request structure.
 *
 * @method string getHash() Obtain The CNS address of the contract.
 * @method void setHash(string $Hash) Set The CNS address of the contract.
 */
class RemoveHashRequest extends AbstractModel
{
    /**
     * @var string The CNS address of the contract.
     */
    public $Hash;

    /**
     * @param string $Hash The CNS address of the contract.
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
        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }
    }
}
