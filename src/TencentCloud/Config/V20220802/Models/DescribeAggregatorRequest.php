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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregator request structure.
 *
 * @method string getAccountGroupId() Obtain <p>Account group ID.</p>
 * @method void setAccountGroupId(string $AccountGroupId) Set <p>Account group ID.</p>
 * @method integer getOwnerUin() Obtain <p>Account group creator ID.</p>
 * @method void setOwnerUin(integer $OwnerUin) Set <p>Account group creator ID.</p>
 */
class DescribeAggregatorRequest extends AbstractModel
{
    /**
     * @var string <p>Account group ID.</p>
     */
    public $AccountGroupId;

    /**
     * @var integer <p>Account group creator ID.</p>
     */
    public $OwnerUin;

    /**
     * @param string $AccountGroupId <p>Account group ID.</p>
     * @param integer $OwnerUin <p>Account group creator ID.</p>
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
