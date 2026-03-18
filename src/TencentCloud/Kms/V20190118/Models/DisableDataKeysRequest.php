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
 * DisableDataKeys request structure.
 *
 * @method array getDataKeyIds() Obtain Specifies the Id list of datakeys to be bulk disabled. supports a maximum of 100 data keys.
 * @method void setDataKeyIds(array $DataKeyIds) Set Specifies the Id list of datakeys to be bulk disabled. supports a maximum of 100 data keys.
 * @method MemberAccount getMemberAccount() Obtain Trusted service member account information. valid at that time when the current account is admin or delegated admin.
 * @method void setMemberAccount(MemberAccount $MemberAccount) Set Trusted service member account information. valid at that time when the current account is admin or delegated admin.
 */
class DisableDataKeysRequest extends AbstractModel
{
    /**
     * @var array Specifies the Id list of datakeys to be bulk disabled. supports a maximum of 100 data keys.
     */
    public $DataKeyIds;

    /**
     * @var MemberAccount Trusted service member account information. valid at that time when the current account is admin or delegated admin.
     */
    public $MemberAccount;

    /**
     * @param array $DataKeyIds Specifies the Id list of datakeys to be bulk disabled. supports a maximum of 100 data keys.
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
        if (array_key_exists("DataKeyIds",$param) and $param["DataKeyIds"] !== null) {
            $this->DataKeyIds = $param["DataKeyIds"];
        }

        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = new MemberAccount();
            $this->MemberAccount->deserialize($param["MemberAccount"]);
        }
    }
}
