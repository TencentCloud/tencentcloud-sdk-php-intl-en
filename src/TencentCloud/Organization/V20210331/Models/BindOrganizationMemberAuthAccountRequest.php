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
 * BindOrganizationMemberAuthAccount request structure.
 *
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method integer getPolicyId() Obtain Policy ID, which can be obtained by calling [DescribeOrganizationMemberPolicies](https://intl.cloud.tencent.com/document/product/850/82935?from_cn_redirect=1).
 * @method void setPolicyId(integer $PolicyId) Set Policy ID, which can be obtained by calling [DescribeOrganizationMemberPolicies](https://intl.cloud.tencent.com/document/product/850/82935?from_cn_redirect=1).
 * @method array getOrgSubAccountUins() Obtain List of sub-account UINs of the organization admin, which can contain up to five UINs.
 * @method void setOrgSubAccountUins(array $OrgSubAccountUins) Set List of sub-account UINs of the organization admin, which can contain up to five UINs.
 */
class BindOrganizationMemberAuthAccountRequest extends AbstractModel
{
    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var integer Policy ID, which can be obtained by calling [DescribeOrganizationMemberPolicies](https://intl.cloud.tencent.com/document/product/850/82935?from_cn_redirect=1).
     */
    public $PolicyId;

    /**
     * @var array List of sub-account UINs of the organization admin, which can contain up to five UINs.
     */
    public $OrgSubAccountUins;

    /**
     * @param integer $MemberUin Member UIN.
     * @param integer $PolicyId Policy ID, which can be obtained by calling [DescribeOrganizationMemberPolicies](https://intl.cloud.tencent.com/document/product/850/82935?from_cn_redirect=1).
     * @param array $OrgSubAccountUins List of sub-account UINs of the organization admin, which can contain up to five UINs.
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("OrgSubAccountUins",$param) and $param["OrgSubAccountUins"] !== null) {
            $this->OrgSubAccountUins = $param["OrgSubAccountUins"];
        }
    }
}
