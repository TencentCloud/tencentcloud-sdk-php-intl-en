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
 * UpdateOrganizationMember request structure.
 *
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getName() Obtain Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
 * @method void setName(string $Name) Set Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
 * @method string getRemark() Obtain Remarks, which contain up to 40 characters.
 * @method void setRemark(string $Remark) Set Remarks, which contain up to 40 characters.
 * @method string getPolicyType() Obtain Relationship policy type. When PolicyType is not empty, PermissionIds cannot be empty. Value: Financial.
 * @method void setPolicyType(string $PolicyType) Set Relationship policy type. When PolicyType is not empty, PermissionIds cannot be empty. Value: Financial.
 * @method array getPermissionIds() Obtain List of member financial permission IDs. When PermissionIds is not empty, PolicyType cannot be empty.
Valid values: 1: View bills. 2: View balance. 3: Allocate funds. 4: Consolidate bills. 5: Issue invoices. 6: Inherit discounts. 7: Pay on behalf. 8: Analyze costs. 1 and 2 are required by default.
 * @method void setPermissionIds(array $PermissionIds) Set List of member financial permission IDs. When PermissionIds is not empty, PolicyType cannot be empty.
Valid values: 1: View bills. 2: View balance. 3: Allocate funds. 4: Consolidate bills. 5: Issue invoices. 6: Inherit discounts. 7: Pay on behalf. 8: Analyze costs. 1 and 2 are required by default.
 * @method string getIsAllowQuit() Obtain Whether to allow members to exit an organization. Valid values: Allow: permitted, Denied: not permitted.
 * @method void setIsAllowQuit(string $IsAllowQuit) Set Whether to allow members to exit an organization. Valid values: Allow: permitted, Denied: not permitted.
 * @method string getPayUin() Obtain Payer UIN, which is required when pay-on-behalf mode is used in member financial permission. The value is the principal administrator UIN of the corresponding member.
 * @method void setPayUin(string $PayUin) Set Payer UIN, which is required when pay-on-behalf mode is used in member financial permission. The value is the principal administrator UIN of the corresponding member.
 */
class UpdateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
     */
    public $Name;

    /**
     * @var string Remarks, which contain up to 40 characters.
     */
    public $Remark;

    /**
     * @var string Relationship policy type. When PolicyType is not empty, PermissionIds cannot be empty. Value: Financial.
     */
    public $PolicyType;

    /**
     * @var array List of member financial permission IDs. When PermissionIds is not empty, PolicyType cannot be empty.
Valid values: 1: View bills. 2: View balance. 3: Allocate funds. 4: Consolidate bills. 5: Issue invoices. 6: Inherit discounts. 7: Pay on behalf. 8: Analyze costs. 1 and 2 are required by default.
     */
    public $PermissionIds;

    /**
     * @var string Whether to allow members to exit an organization. Valid values: Allow: permitted, Denied: not permitted.
     */
    public $IsAllowQuit;

    /**
     * @var string Payer UIN, which is required when pay-on-behalf mode is used in member financial permission. The value is the principal administrator UIN of the corresponding member.
     */
    public $PayUin;

    /**
     * @param integer $MemberUin Member UIN.
     * @param string $Name Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
     * @param string $Remark Remarks, which contain up to 40 characters.
     * @param string $PolicyType Relationship policy type. When PolicyType is not empty, PermissionIds cannot be empty. Value: Financial.
     * @param array $PermissionIds List of member financial permission IDs. When PermissionIds is not empty, PolicyType cannot be empty.
Valid values: 1: View bills. 2: View balance. 3: Allocate funds. 4: Consolidate bills. 5: Issue invoices. 6: Inherit discounts. 7: Pay on behalf. 8: Analyze costs. 1 and 2 are required by default.
     * @param string $IsAllowQuit Whether to allow members to exit an organization. Valid values: Allow: permitted, Denied: not permitted.
     * @param string $PayUin Payer UIN, which is required when pay-on-behalf mode is used in member financial permission. The value is the principal administrator UIN of the corresponding member.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }
    }
}
