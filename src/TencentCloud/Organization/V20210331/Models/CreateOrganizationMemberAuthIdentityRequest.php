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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrganizationMemberAuthIdentity request structure.
 *
 * @method array getMemberUins() Obtain Member UIN list, including up to 10 items.
 * @method void setMemberUins(array $MemberUins) Set Member UIN list, including up to 10 items.
 * @method array getIdentityIds() Obtain Identity ID list, including up to 5 items, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 * @method void setIdentityIds(array $IdentityIds) Set Identity ID list, including up to 5 items, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 */
class CreateOrganizationMemberAuthIdentityRequest extends AbstractModel
{
    /**
     * @var array Member UIN list, including up to 10 items.
     */
    public $MemberUins;

    /**
     * @var array Identity ID list, including up to 5 items, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
     */
    public $IdentityIds;

    /**
     * @param array $MemberUins Member UIN list, including up to 10 items.
     * @param array $IdentityIds Identity ID list, including up to 5 items, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
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
        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("IdentityIds",$param) and $param["IdentityIds"] !== null) {
            $this->IdentityIds = $param["IdentityIds"];
        }
    }
}
