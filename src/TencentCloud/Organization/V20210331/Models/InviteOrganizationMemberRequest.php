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
 * InviteOrganizationMember request structure.
 *
 * @method integer getMemberUin() Obtain UIN of an invited account.
 * @method void setMemberUin(integer $MemberUin) Set UIN of an invited account.
 * @method string getName() Obtain Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
 * @method void setName(string $Name) Set Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
 * @method string getPolicyType() Obtain Relationship policy. Valid value: `Financial`.
 * @method void setPolicyType(string $PolicyType) Set Relationship policy. Valid value: `Financial`.
 * @method array getPermissionIds() Obtain Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1 and 2 are required.
 * @method void setPermissionIds(array $PermissionIds) Set Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1 and 2 are required.
 * @method integer getNodeId() Obtain Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method void setNodeId(integer $NodeId) Set Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getIsAllowQuit() Obtain Whether to allow a member to exit. Valid values: Allow, Denied.
 * @method void setIsAllowQuit(string $IsAllowQuit) Set Whether to allow a member to exit. Valid values: Allow, Denied.
 * @method string getPayUin() Obtain Payer UIN, which is required when pay-on-behalf mode is used.
 * @method void setPayUin(string $PayUin) Set Payer UIN, which is required when pay-on-behalf mode is used.
 * @method string getRelationAuthName() Obtain Name of a mutual trust real-name entity.
 * @method void setRelationAuthName(string $RelationAuthName) Set Name of a mutual trust real-name entity.
 * @method array getAuthFile() Obtain List of proof files of a mutual trust entity.
 * @method void setAuthFile(array $AuthFile) Set List of proof files of a mutual trust entity.
 * @method array getTags() Obtain Member tag list, with a maximum of 10.
 * @method void setTags(array $Tags) Set Member tag list, with a maximum of 10.
 */
class InviteOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var integer UIN of an invited account.
     */
    public $MemberUin;

    /**
     * @var string Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
     */
    public $Name;

    /**
     * @var string Relationship policy. Valid value: `Financial`.
     */
    public $PolicyType;

    /**
     * @var array Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1 and 2 are required.
     */
    public $PermissionIds;

    /**
     * @var integer Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     */
    public $NodeId;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Whether to allow a member to exit. Valid values: Allow, Denied.
     */
    public $IsAllowQuit;

    /**
     * @var string Payer UIN, which is required when pay-on-behalf mode is used.
     */
    public $PayUin;

    /**
     * @var string Name of a mutual trust real-name entity.
     */
    public $RelationAuthName;

    /**
     * @var array List of proof files of a mutual trust entity.
     */
    public $AuthFile;

    /**
     * @var array Member tag list, with a maximum of 10.
     */
    public $Tags;

    /**
     * @param integer $MemberUin UIN of an invited account.
     * @param string $Name Member name, which contains up to 25 characters, including English letters, digits, and symbols `+@&._[]-:,`.
     * @param string $PolicyType Relationship policy. Valid value: `Financial`.
     * @param array $PermissionIds Member Finanace Authorization. Valid values: 1: View Bills. 2: View Balance.  4: Consolidate Bills. 5: Invoice. 6: Inherit Offer. 7: Pay On Behalf. 8: Cost Explorer. 9: Budget Management.  1 and 2 are required.
     * @param integer $NodeId Node ID of the member's department, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     * @param string $Remark Remarks.
     * @param string $IsAllowQuit Whether to allow a member to exit. Valid values: Allow, Denied.
     * @param string $PayUin Payer UIN, which is required when pay-on-behalf mode is used.
     * @param string $RelationAuthName Name of a mutual trust real-name entity.
     * @param array $AuthFile List of proof files of a mutual trust entity.
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("RelationAuthName",$param) and $param["RelationAuthName"] !== null) {
            $this->RelationAuthName = $param["RelationAuthName"];
        }

        if (array_key_exists("AuthFile",$param) and $param["AuthFile"] !== null) {
            $this->AuthFile = [];
            foreach ($param["AuthFile"] as $key => $value){
                $obj = new AuthRelationFile();
                $obj->deserialize($value);
                array_push($this->AuthFile, $obj);
            }
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
