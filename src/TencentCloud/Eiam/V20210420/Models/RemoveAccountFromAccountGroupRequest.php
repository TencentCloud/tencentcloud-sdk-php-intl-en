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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveAccountFromAccountGroup request structure.
 *
 * @method string getAccountGroupId() Obtain Account group ID
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID
 * @method array getAccountIds() Obtain List of IDs of the accounts to be removed.
 * @method void setAccountIds(array $AccountIds) Set List of IDs of the accounts to be removed.
 */
class RemoveAccountFromAccountGroupRequest extends AbstractModel
{
    /**
     * @var string Account group ID
     */
    public $AccountGroupId;

    /**
     * @var array List of IDs of the accounts to be removed.
     */
    public $AccountIds;

    /**
     * @param string $AccountGroupId Account group ID
     * @param array $AccountIds List of IDs of the accounts to be removed.
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

        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }
    }
}
