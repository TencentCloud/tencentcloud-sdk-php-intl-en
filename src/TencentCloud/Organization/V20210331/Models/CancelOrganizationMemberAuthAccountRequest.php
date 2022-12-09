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
 * CancelOrganizationMemberAuthAccount request structure.
 *
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method integer getPolicyId() Obtain Policy ID.
 * @method void setPolicyId(integer $PolicyId) Set Policy ID.
 * @method integer getOrgSubAccountUin() Obtain Organization sub-account UIN.
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) Set Organization sub-account UIN.
 */
class CancelOrganizationMemberAuthAccountRequest extends AbstractModel
{
    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var integer Policy ID.
     */
    public $PolicyId;

    /**
     * @var integer Organization sub-account UIN.
     */
    public $OrgSubAccountUin;

    /**
     * @param integer $MemberUin Member UIN.
     * @param integer $PolicyId Policy ID.
     * @param integer $OrgSubAccountUin Organization sub-account UIN.
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

        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }
    }
}
