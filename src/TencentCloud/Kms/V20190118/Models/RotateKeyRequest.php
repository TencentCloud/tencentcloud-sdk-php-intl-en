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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RotateKey request structure.
 *
 * @method string getKeyId() Obtain <p>Globally unique ID of the CMK.</p>
 * @method void setKeyId(string $KeyId) Set <p>Globally unique ID of the CMK.</p>
 * @method MemberAccount getMemberAccount() Obtain <p>Member account information for multi-account scenarios</p>
 * @method void setMemberAccount(MemberAccount $MemberAccount) Set <p>Member account information for multi-account scenarios</p>
 */
class RotateKeyRequest extends AbstractModel
{
    /**
     * @var string <p>Globally unique ID of the CMK.</p>
     */
    public $KeyId;

    /**
     * @var MemberAccount <p>Member account information for multi-account scenarios</p>
     */
    public $MemberAccount;

    /**
     * @param string $KeyId <p>Globally unique ID of the CMK.</p>
     * @param MemberAccount $MemberAccount <p>Member account information for multi-account scenarios</p>
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = new MemberAccount();
            $this->MemberAccount->deserialize($param["MemberAccount"]);
        }
    }
}
