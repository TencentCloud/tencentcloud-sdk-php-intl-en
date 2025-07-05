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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskSyscallWhiteListDetail request structure.
 *
 * @method string getWhiteListId() Obtain Allowed item ID
 * @method void setWhiteListId(string $WhiteListId) Set Allowed item ID
 */
class DescribeRiskSyscallWhiteListDetailRequest extends AbstractModel
{
    /**
     * @var string Allowed item ID
     */
    public $WhiteListId;

    /**
     * @param string $WhiteListId Allowed item ID
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
        if (array_key_exists("WhiteListId",$param) and $param["WhiteListId"] !== null) {
            $this->WhiteListId = $param["WhiteListId"];
        }
    }
}
