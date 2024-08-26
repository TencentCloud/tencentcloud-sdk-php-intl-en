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
 * CreateOrganizationMemberPolicy request structure.
 *
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getPolicyName() Obtain Policy name, which can contain up to 128 letters, digits, and symbols `+=,.@_-`.
 * @method void setPolicyName(string $PolicyName) Set Policy name, which can contain up to 128 letters, digits, and symbols `+=,.@_-`.
 * @method integer getIdentityId() Obtain Member access identity ID, which can be obtained through [DescribeOrganizationMemberAuthIdentities](https://intl.cloud.tencent.com/document/product/850/82936?from_cn_redirect=1).
 * @method void setIdentityId(integer $IdentityId) Set Member access identity ID, which can be obtained through [DescribeOrganizationMemberAuthIdentities](https://intl.cloud.tencent.com/document/product/850/82936?from_cn_redirect=1).
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 */
class CreateOrganizationMemberPolicyRequest extends AbstractModel
{
    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Policy name, which can contain up to 128 letters, digits, and symbols `+=,.@_-`.
     */
    public $PolicyName;

    /**
     * @var integer Member access identity ID, which can be obtained through [DescribeOrganizationMemberAuthIdentities](https://intl.cloud.tencent.com/document/product/850/82936?from_cn_redirect=1).
     */
    public $IdentityId;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @param integer $MemberUin Member UIN.
     * @param string $PolicyName Policy name, which can contain up to 128 letters, digits, and symbols `+=,.@_-`.
     * @param integer $IdentityId Member access identity ID, which can be obtained through [DescribeOrganizationMemberAuthIdentities](https://intl.cloud.tencent.com/document/product/850/82936?from_cn_redirect=1).
     * @param string $Description Description.
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
