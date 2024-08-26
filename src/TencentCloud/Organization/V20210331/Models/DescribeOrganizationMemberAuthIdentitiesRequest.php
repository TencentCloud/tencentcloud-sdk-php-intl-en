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
 * DescribeOrganizationMemberAuthIdentities request structure.
 *
 * @method integer getOffset() Obtain Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method integer getLimit() Obtain Limit, which defaults to `10`. Value range: 1-50.
 * @method void setLimit(integer $Limit) Set Limit, which defaults to `10`. Value range: 1-50.
 * @method integer getMemberUin() Obtain Uin of the organization member. At least one of the input parameters MemberUin and IdentityId must be entered.
 * @method void setMemberUin(integer $MemberUin) Set Uin of the organization member. At least one of the input parameters MemberUin and IdentityId must be entered.
 * @method integer getIdentityId() Obtain Identity ID. At least one of the input parameters MemberUin and IdentityId must be provided. It can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 * @method void setIdentityId(integer $IdentityId) Set Identity ID. At least one of the input parameters MemberUin and IdentityId must be provided. It can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 */
class DescribeOrganizationMemberAuthIdentitiesRequest extends AbstractModel
{
    /**
     * @var integer Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit, which defaults to `10`. Value range: 1-50.
     */
    public $Limit;

    /**
     * @var integer Uin of the organization member. At least one of the input parameters MemberUin and IdentityId must be entered.
     */
    public $MemberUin;

    /**
     * @var integer Identity ID. At least one of the input parameters MemberUin and IdentityId must be provided. It can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
     */
    public $IdentityId;

    /**
     * @param integer $Offset Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     * @param integer $Limit Limit, which defaults to `10`. Value range: 1-50.
     * @param integer $MemberUin Uin of the organization member. At least one of the input parameters MemberUin and IdentityId must be entered.
     * @param integer $IdentityId Identity ID. At least one of the input parameters MemberUin and IdentityId must be provided. It can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }
    }
}
