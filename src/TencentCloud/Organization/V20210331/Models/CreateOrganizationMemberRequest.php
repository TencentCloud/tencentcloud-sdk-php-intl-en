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
 * CreateOrganizationMember request structure.
 *
 * @method string getName() Obtain Member name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
 * @method void setName(string $Name) Set Member name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
 * @method string getPolicyType() Obtain Relationship policy. Valid value: `Financial`.
 * @method void setPolicyType(string $PolicyType) Set Relationship policy. Valid value: `Financial`.
 * @method array getPermissionIds() Obtain Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1, 2 and 7 are required.
 * @method void setPermissionIds(array $PermissionIds) Set Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1, 2 and 7 are required.
 * @method integer getNodeId() Obtain Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method void setNodeId(integer $NodeId) Set Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method string getAccountName() Obtain Account name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
 * @method void setAccountName(string $AccountName) Set Account name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getRecordId() Obtain Member creation record ID, which is required during retry upon creation exception.
 * @method void setRecordId(integer $RecordId) Set Member creation record ID, which is required during retry upon creation exception.
 * @method string getPayUin() Obtain Payer UIN, which is required during paying for a member.
 * @method void setPayUin(string $PayUin) Set Payer UIN, which is required during paying for a member.
 * @method array getIdentityRoleID() Obtain List of member access identity IDs, which can be obtained through the `ListOrganizationIdentity` API. `1` indicates supported, which is the default value.
 * @method void setIdentityRoleID(array $IdentityRoleID) Set List of member access identity IDs, which can be obtained through the `ListOrganizationIdentity` API. `1` indicates supported, which is the default value.
 * @method integer getAuthRelationId() Obtain Verified entity relationship ID, which is required during creating members for different entities.
 * @method void setAuthRelationId(integer $AuthRelationId) Set Verified entity relationship ID, which is required during creating members for different entities.
 * @method array getTags() Obtain Member tag list, with a maximum of 10.
 * @method void setTags(array $Tags) Set Member tag list, with a maximum of 10.
 */
class CreateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var string Member name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
     */
    public $Name;

    /**
     * @var string Relationship policy. Valid value: `Financial`.
     */
    public $PolicyType;

    /**
     * @var array Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1, 2 and 7 are required.
     */
    public $PermissionIds;

    /**
     * @var integer Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     */
    public $NodeId;

    /**
     * @var string Account name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
     */
    public $AccountName;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Member creation record ID, which is required during retry upon creation exception.
     */
    public $RecordId;

    /**
     * @var string Payer UIN, which is required during paying for a member.
     */
    public $PayUin;

    /**
     * @var array List of member access identity IDs, which can be obtained through the `ListOrganizationIdentity` API. `1` indicates supported, which is the default value.
     */
    public $IdentityRoleID;

    /**
     * @var integer Verified entity relationship ID, which is required during creating members for different entities.
     */
    public $AuthRelationId;

    /**
     * @var array Member tag list, with a maximum of 10.
     */
    public $Tags;

    /**
     * @param string $Name Member name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
     * @param string $PolicyType Relationship policy. Valid value: `Financial`.
     * @param array $PermissionIds Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1, 2 and 7 are required.
     * @param integer $NodeId Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     * @param string $AccountName Account name, which can contain up to 25 letters, digits, and symbols `+@&._[]-:,`.
     * @param string $Remark Remarks.
     * @param integer $RecordId Member creation record ID, which is required during retry upon creation exception.
     * @param string $PayUin Payer UIN, which is required during paying for a member.
     * @param array $IdentityRoleID List of member access identity IDs, which can be obtained through the `ListOrganizationIdentity` API. `1` indicates supported, which is the default value.
     * @param integer $AuthRelationId Verified entity relationship ID, which is required during creating members for different entities.
     * @param array $Tags Member tag list, with a maximum of 10.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("IdentityRoleID",$param) and $param["IdentityRoleID"] !== null) {
            $this->IdentityRoleID = $param["IdentityRoleID"];
        }

        if (array_key_exists("AuthRelationId",$param) and $param["AuthRelationId"] !== null) {
            $this->AuthRelationId = $param["AuthRelationId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
