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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SecurityPolicyDatabase policy
 *
 * @method string getLocalCidrBlock() Obtain Local IP range
 * @method void setLocalCidrBlock(string $LocalCidrBlock) Set Local IP range
 * @method array getRemoteCidrBlock() Obtain Opposite IP range
 * @method void setRemoteCidrBlock(array $RemoteCidrBlock) Set Opposite IP range
 */
class SecurityPolicyDatabase extends AbstractModel
{
    /**
     * @var string Local IP range
     */
    public $LocalCidrBlock;

    /**
     * @var array Opposite IP range
     */
    public $RemoteCidrBlock;

    /**
     * @param string $LocalCidrBlock Local IP range
     * @param array $RemoteCidrBlock Opposite IP range
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
        if (array_key_exists("LocalCidrBlock",$param) and $param["LocalCidrBlock"] !== null) {
            $this->LocalCidrBlock = $param["LocalCidrBlock"];
        }

        if (array_key_exists("RemoteCidrBlock",$param) and $param["RemoteCidrBlock"] !== null) {
            $this->RemoteCidrBlock = $param["RemoteCidrBlock"];
        }
    }
}
