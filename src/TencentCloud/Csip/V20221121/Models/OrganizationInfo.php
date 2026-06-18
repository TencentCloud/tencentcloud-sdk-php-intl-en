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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Group Account Details
 *
 * @method string getNickName() Obtain member account name
 * @method void setNickName(string $NickName) Set member account name
 * @method string getNodeName() Obtain Department Node Name, Account's Department
 * @method void setNodeName(string $NodeName) Set Department Node Name, Account's Department
 * @method string getRole() Obtain Member/Admin/DelegatedAdmin/EntityAdmin, corresponding to Member/Administrator/Delegated Administrator/Entity Administrator
 * @method void setRole(string $Role) Set Member/Admin/DelegatedAdmin/EntityAdmin, corresponding to Member/Administrator/Delegated Administrator/Entity Administrator
 * @method string getMemberId() Obtain Member Account ID
 * @method void setMemberId(string $MemberId) Set Member Account ID
 * @method string getJoinType() Obtain Account Joining Method: Create/Invite.
 * @method void setJoinType(string $JoinType) Set Account Joining Method: Create/Invite.
 * @method string getGroupName() Obtain Group Name
 * @method void setGroupName(string $GroupName) Set Group Name
 * @method string getAdminName() Obtain administrator account name
 * @method void setAdminName(string $AdminName) Set administrator account name
 * @method string getAdminUin() Obtain Administrator UIN
 * @method void setAdminUin(string $AdminUin) Set Administrator UIN
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getNodeCount() Obtain Number of departments
 * @method void setNodeCount(integer $NodeCount) Set Number of departments
 * @method integer getMemberCount() Obtain Number of members
 * @method void setMemberCount(integer $MemberCount) Set Number of members
 * @method integer getSubAccountCount() Obtain Number of sub-accounts
 * @method void setSubAccountCount(integer $SubAccountCount) Set Number of sub-accounts
 * @method integer getAbnormalSubUserCount() Obtain Number of abnormal sub-accounts
 * @method void setAbnormalSubUserCount(integer $AbnormalSubUserCount) Set Number of abnormal sub-accounts
 * @method array getGroupPermission() Obtain Group Relationship Policy Permissions
 * @method void setGroupPermission(array $GroupPermission) Set Group Relationship Policy Permissions
 * @method array getMemberPermission() Obtain Membership Policy Permissions
 * @method void setMemberPermission(array $MemberPermission) Set Membership Policy Permissions
 * @method integer getGroupPayMode() Obtain Group Payment Mode. 0: Self-payment; 1: Proxy Payment.
 * @method void setGroupPayMode(integer $GroupPayMode) Set Group Payment Mode. 0: Self-payment; 1: Proxy Payment.
 * @method integer getMemberPayMode() Obtain Personal Payment Mode. 0: Self-payment; 1: Proxy payment.
 * @method void setMemberPayMode(integer $MemberPayMode) Set Personal Payment Mode. 0: Self-payment; 1: Proxy payment.
 * @method string getCFWProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setCFWProtect(string $CFWProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method string getWAFProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setWAFProtect(string $WAFProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method string getCWPProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setCWPProtect(string $CWPProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method array getDepartments() Obtain Array of Collections for All Departments
 * @method void setDepartments(array $Departments) Set Array of Collections for All Departments
 * @method string getMemberCreateTime() Obtain Member Creation Time
 * @method void setMemberCreateTime(string $MemberCreateTime) Set Member Creation Time
 * @method string getCSIPProtect() Obtain Advanced/Enterprise/Ultimate 
 * @method void setCSIPProtect(string $CSIPProtect) Set Advanced/Enterprise/Ultimate 
 * @method integer getQuotaConsumer() Obtain 1 indicates the quota consumer.
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 1 indicates the quota consumer.
 * @method integer getEnableAdminCount() Obtain Number of activations by admin/delegated admin
 * @method void setEnableAdminCount(integer $EnableAdminCount) Set Number of activations by admin/delegated admin
 * @method array getCloudCountDesc() Obtain Account Multi-Cloud Information Statistics, in array format. Refer to the description of CloudCountDesc for details.
 * @method void setCloudCountDesc(array $CloudCountDesc) Set Account Multi-Cloud Information Statistics, in array format. Refer to the description of CloudCountDesc for details.
 * @method integer getAdminCount() Obtain Total number of admins/delegated admins
 * @method void setAdminCount(integer $AdminCount) Set Total number of admins/delegated admins
 */
class OrganizationInfo extends AbstractModel
{
    /**
     * @var string member account name
     */
    public $NickName;

    /**
     * @var string Department Node Name, Account's Department
     */
    public $NodeName;

    /**
     * @var string Member/Admin/DelegatedAdmin/EntityAdmin, corresponding to Member/Administrator/Delegated Administrator/Entity Administrator
     */
    public $Role;

    /**
     * @var string Member Account ID
     */
    public $MemberId;

    /**
     * @var string Account Joining Method: Create/Invite.
     */
    public $JoinType;

    /**
     * @var string Group Name
     */
    public $GroupName;

    /**
     * @var string administrator account name
     */
    public $AdminName;

    /**
     * @var string Administrator UIN
     */
    public $AdminUin;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Number of departments
     */
    public $NodeCount;

    /**
     * @var integer Number of members
     */
    public $MemberCount;

    /**
     * @var integer Number of sub-accounts
     */
    public $SubAccountCount;

    /**
     * @var integer Number of abnormal sub-accounts
     */
    public $AbnormalSubUserCount;

    /**
     * @var array Group Relationship Policy Permissions
     */
    public $GroupPermission;

    /**
     * @var array Membership Policy Permissions
     */
    public $MemberPermission;

    /**
     * @var integer Group Payment Mode. 0: Self-payment; 1: Proxy Payment.
     */
    public $GroupPayMode;

    /**
     * @var integer Personal Payment Mode. 0: Self-payment; 1: Proxy payment.
     */
    public $MemberPayMode;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $CFWProtect;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $WAFProtect;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $CWPProtect;

    /**
     * @var array Array of Collections for All Departments
     */
    public $Departments;

    /**
     * @var string Member Creation Time
     */
    public $MemberCreateTime;

    /**
     * @var string Advanced/Enterprise/Ultimate 
     */
    public $CSIPProtect;

    /**
     * @var integer 1 indicates the quota consumer.
     */
    public $QuotaConsumer;

    /**
     * @var integer Number of activations by admin/delegated admin
     */
    public $EnableAdminCount;

    /**
     * @var array Account Multi-Cloud Information Statistics, in array format. Refer to the description of CloudCountDesc for details.
     */
    public $CloudCountDesc;

    /**
     * @var integer Total number of admins/delegated admins
     */
    public $AdminCount;

    /**
     * @param string $NickName member account name
     * @param string $NodeName Department Node Name, Account's Department
     * @param string $Role Member/Admin/DelegatedAdmin/EntityAdmin, corresponding to Member/Administrator/Delegated Administrator/Entity Administrator
     * @param string $MemberId Member Account ID
     * @param string $JoinType Account Joining Method: Create/Invite.
     * @param string $GroupName Group Name
     * @param string $AdminName administrator account name
     * @param string $AdminUin Administrator UIN
     * @param string $CreateTime Creation time.
     * @param integer $NodeCount Number of departments
     * @param integer $MemberCount Number of members
     * @param integer $SubAccountCount Number of sub-accounts
     * @param integer $AbnormalSubUserCount Number of abnormal sub-accounts
     * @param array $GroupPermission Group Relationship Policy Permissions
     * @param array $MemberPermission Membership Policy Permissions
     * @param integer $GroupPayMode Group Payment Mode. 0: Self-payment; 1: Proxy Payment.
     * @param integer $MemberPayMode Personal Payment Mode. 0: Self-payment; 1: Proxy payment.
     * @param string $CFWProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param string $WAFProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param string $CWPProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param array $Departments Array of Collections for All Departments
     * @param string $MemberCreateTime Member Creation Time
     * @param string $CSIPProtect Advanced/Enterprise/Ultimate 
     * @param integer $QuotaConsumer 1 indicates the quota consumer.
     * @param integer $EnableAdminCount Number of activations by admin/delegated admin
     * @param array $CloudCountDesc Account Multi-Cloud Information Statistics, in array format. Refer to the description of CloudCountDesc for details.
     * @param integer $AdminCount Total number of admins/delegated admins
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
        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminUin",$param) and $param["AdminUin"] !== null) {
            $this->AdminUin = $param["AdminUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("SubAccountCount",$param) and $param["SubAccountCount"] !== null) {
            $this->SubAccountCount = $param["SubAccountCount"];
        }

        if (array_key_exists("AbnormalSubUserCount",$param) and $param["AbnormalSubUserCount"] !== null) {
            $this->AbnormalSubUserCount = $param["AbnormalSubUserCount"];
        }

        if (array_key_exists("GroupPermission",$param) and $param["GroupPermission"] !== null) {
            $this->GroupPermission = $param["GroupPermission"];
        }

        if (array_key_exists("MemberPermission",$param) and $param["MemberPermission"] !== null) {
            $this->MemberPermission = $param["MemberPermission"];
        }

        if (array_key_exists("GroupPayMode",$param) and $param["GroupPayMode"] !== null) {
            $this->GroupPayMode = $param["GroupPayMode"];
        }

        if (array_key_exists("MemberPayMode",$param) and $param["MemberPayMode"] !== null) {
            $this->MemberPayMode = $param["MemberPayMode"];
        }

        if (array_key_exists("CFWProtect",$param) and $param["CFWProtect"] !== null) {
            $this->CFWProtect = $param["CFWProtect"];
        }

        if (array_key_exists("WAFProtect",$param) and $param["WAFProtect"] !== null) {
            $this->WAFProtect = $param["WAFProtect"];
        }

        if (array_key_exists("CWPProtect",$param) and $param["CWPProtect"] !== null) {
            $this->CWPProtect = $param["CWPProtect"];
        }

        if (array_key_exists("Departments",$param) and $param["Departments"] !== null) {
            $this->Departments = $param["Departments"];
        }

        if (array_key_exists("MemberCreateTime",$param) and $param["MemberCreateTime"] !== null) {
            $this->MemberCreateTime = $param["MemberCreateTime"];
        }

        if (array_key_exists("CSIPProtect",$param) and $param["CSIPProtect"] !== null) {
            $this->CSIPProtect = $param["CSIPProtect"];
        }

        if (array_key_exists("QuotaConsumer",$param) and $param["QuotaConsumer"] !== null) {
            $this->QuotaConsumer = $param["QuotaConsumer"];
        }

        if (array_key_exists("EnableAdminCount",$param) and $param["EnableAdminCount"] !== null) {
            $this->EnableAdminCount = $param["EnableAdminCount"];
        }

        if (array_key_exists("CloudCountDesc",$param) and $param["CloudCountDesc"] !== null) {
            $this->CloudCountDesc = [];
            foreach ($param["CloudCountDesc"] as $key => $value){
                $obj = new CloudCountDesc();
                $obj->deserialize($value);
                array_push($this->CloudCountDesc, $obj);
            }
        }

        if (array_key_exists("AdminCount",$param) and $param["AdminCount"] !== null) {
            $this->AdminCount = $param["AdminCount"];
        }
    }
}
