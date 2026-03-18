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
 * UpdateAlias request structure.
 *
 * @method string getAlias() Obtain New alias containing 1-60 characters or digits
 * @method void setAlias(string $Alias) Set New alias containing 1-60 characters or digits
 * @method string getKeyId() Obtain Globally unique CMK ID
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID
 * @method MemberAccount getMemberAccount() Obtain Trusted service member account information. valid at that time when the current account is admin or delegated admin.
 * @method void setMemberAccount(MemberAccount $MemberAccount) Set Trusted service member account information. valid at that time when the current account is admin or delegated admin.
 */
class UpdateAliasRequest extends AbstractModel
{
    /**
     * @var string New alias containing 1-60 characters or digits
     */
    public $Alias;

    /**
     * @var string Globally unique CMK ID
     */
    public $KeyId;

    /**
     * @var MemberAccount Trusted service member account information. valid at that time when the current account is admin or delegated admin.
     */
    public $MemberAccount;

    /**
     * @param string $Alias New alias containing 1-60 characters or digits
     * @param string $KeyId Globally unique CMK ID
     * @param MemberAccount $MemberAccount Trusted service member account information. valid at that time when the current account is admin or delegated admin.
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
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
