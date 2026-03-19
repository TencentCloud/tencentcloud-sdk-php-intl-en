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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationMembersAuthPolicy request structure.
 *
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1-50. Default value: 10.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1-50. Default value: 10.
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method integer getOrgSubAccountUin() Obtain Organization administrator sub-account UIN.
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) Set Organization administrator sub-account UIN.
 * @method integer getPolicyId() Obtain Member access policy ID.
 * @method void setPolicyId(integer $PolicyId) Set Member access policy ID.
 */
class DescribeOrganizationMembersAuthPolicyRequest extends AbstractModel
{
    /**
     * @var integer Offset. Its value must be an integer multiple of the limit. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit. Value range: 1-50. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var integer Organization administrator sub-account UIN.
     */
    public $OrgSubAccountUin;

    /**
     * @var integer Member access policy ID.
     */
    public $PolicyId;

    /**
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1-50. Default value: 10.
     * @param integer $MemberUin Member UIN.
     * @param integer $OrgSubAccountUin Organization administrator sub-account UIN.
     * @param integer $PolicyId Member access policy ID.
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

        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
