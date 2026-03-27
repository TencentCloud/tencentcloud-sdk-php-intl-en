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
 * Group account details
 *
 * @method string getNickName() Obtain Member account name
 * @method void setNickName(string $NickName) Set Member account name
 * @method string getNodeName() Obtain Department node name, department of account
 * @method void setNodeName(string $NodeName) Set Department node name, department of account
 * @method string getRole() Obtain Member/Admin/DelegatedAdmin/EntityAdmin; Member/Admin/DelegatedAdmin/EntityAdmin
 * @method void setRole(string $Role) Set Member/Admin/DelegatedAdmin/EntityAdmin; Member/Admin/DelegatedAdmin/EntityAdmin
 * @method string getMemberId() Obtain Member account id
 * @method void setMemberId(string $MemberId) Set Member account id
 * @method string getJoinType() Obtain account joining method,create/invite
 * @method void setJoinType(string $JoinType) Set account joining method,create/invite
 * @method string getGroupName() Obtain Group name
 * @method void setGroupName(string $GroupName) Set Group name
 * @method string getAdminName() Obtain Admin account name
 * @method void setAdminName(string $AdminName) Set Admin account name
 * @method string getAdminUin() Obtain Admin Uin
 * @method void setAdminUin(string $AdminUin) Set Admin Uin
 * @method string getCreateTime() Obtain Creation Time
 * @method void setCreateTime(string $CreateTime) Set Creation Time
 * @method integer getNodeCount() Obtain Number of departments
 * @method void setNodeCount(integer $NodeCount) Set Number of departments
 * @method integer getMemberCount() Obtain Number of members
 * @method void setMemberCount(integer $MemberCount) Set Number of members
 * @method integer getSubAccountCount() Obtain Sub-account count
 * @method void setSubAccountCount(integer $SubAccountCount) Set Sub-account count
 * @method integer getAbnormalSubUserCount() Obtain Abnormal sub-account quantity
 * @method void setAbnormalSubUserCount(integer $AbnormalSubUserCount) Set Abnormal sub-account quantity
 * @method array getGroupPermission() Obtain Organization Relationship Policy Permissions
 * @method void setGroupPermission(array $GroupPermission) Set Organization Relationship Policy Permissions
 * @method array getMemberPermission() Obtain Membership Policy Permissions
 * @method void setMemberPermission(array $MemberPermission) Set Membership Policy Permissions
 * @method integer getGroupPayMode() Obtain Organization Billing Mode; 0/Self-paid, 1/Proxy-paid
 * @method void setGroupPayMode(integer $GroupPayMode) Set Organization Billing Mode; 0/Self-paid, 1/Proxy-paid
 * @method integer getMemberPayMode() Obtain Personal Billing Mode; 0/Self-paid, 1/Proxy-paid
 * @method void setMemberPayMode(integer $MemberPayMode) Set Personal Billing Mode; 0/Self-paid, 1/Proxy-paid
 * @method string getCFWProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setCFWProtect(string $CFWProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method string getWAFProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setWAFProtect(string $WAFProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method string getCWPProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setCWPProtect(string $CWPProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method array getDepartments() Obtain Array of all departments
 * @method void setDepartments(array $Departments) Set Array of all departments
 * @method string getMemberCreateTime() Obtain Member Creation Time
 * @method void setMemberCreateTime(string $MemberCreateTime) Set Member Creation Time
 * @method string getCSIPProtect() Obtain Advanced/Enterprise/Ultimate 
 * @method void setCSIPProtect(string $CSIPProtect) Set Advanced/Enterprise/Ultimate 
 * @method integer getQuotaConsumer() Obtain 1 indicates the quota consumer
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 1 indicates the quota consumer
 * @method integer getEnableAdminCount() Obtain Number of enabled Admin/Delegated Admin accounts
 * @method void setEnableAdminCount(integer $EnableAdminCount) Set Number of enabled Admin/Delegated Admin accounts
 * @method array getCloudCountDesc() Obtain Multi-cloud account statistics in array format. Refer to the CloudCountDesc description for details.
 * @method void setCloudCountDesc(array $CloudCountDesc) Set Multi-cloud account statistics in array format. Refer to the CloudCountDesc description for details.
 * @method integer getAdminCount() Obtain Total Number of Admin/Delegated Admin Accounts
 * @method void setAdminCount(integer $AdminCount) Set Total Number of Admin/Delegated Admin Accounts
 */
class OrganizationInfo extends AbstractModel
{
    /**
     * @var string Member account name
     */
    public $NickName;

    /**
     * @var string Department node name, department of account
     */
    public $NodeName;

    /**
     * @var string Member/Admin/DelegatedAdmin/EntityAdmin; Member/Admin/DelegatedAdmin/EntityAdmin
     */
    public $Role;

    /**
     * @var string Member account id
     */
    public $MemberId;

    /**
     * @var string account joining method,create/invite
     */
    public $JoinType;

    /**
     * @var string Group name
     */
    public $GroupName;

    /**
     * @var string Admin account name
     */
    public $AdminName;

    /**
     * @var string Admin Uin
     */
    public $AdminUin;

    /**
     * @var string Creation Time
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
     * @var integer Sub-account count
     */
    public $SubAccountCount;

    /**
     * @var integer Abnormal sub-account quantity
     */
    public $AbnormalSubUserCount;

    /**
     * @var array Organization Relationship Policy Permissions
     */
    public $GroupPermission;

    /**
     * @var array Membership Policy Permissions
     */
    public $MemberPermission;

    /**
     * @var integer Organization Billing Mode; 0/Self-paid, 1/Proxy-paid
     */
    public $GroupPayMode;

    /**
     * @var integer Personal Billing Mode; 0/Self-paid, 1/Proxy-paid
     */
    public $MemberPayMode;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $CFWProtect;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $WAFProtect;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $CWPProtect;

    /**
     * @var array Array of all departments
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
     * @var integer 1 indicates the quota consumer
     */
    public $QuotaConsumer;

    /**
     * @var integer Number of enabled Admin/Delegated Admin accounts
     */
    public $EnableAdminCount;

    /**
     * @var array Multi-cloud account statistics in array format. Refer to the CloudCountDesc description for details.
     */
    public $CloudCountDesc;

    /**
     * @var integer Total Number of Admin/Delegated Admin Accounts
     */
    public $AdminCount;

    /**
     * @param string $NickName Member account name
     * @param string $NodeName Department node name, department of account
     * @param string $Role Member/Admin/DelegatedAdmin/EntityAdmin; Member/Admin/DelegatedAdmin/EntityAdmin
     * @param string $MemberId Member account id
     * @param string $JoinType account joining method,create/invite
     * @param string $GroupName Group name
     * @param string $AdminName Admin account name
     * @param string $AdminUin Admin Uin
     * @param string $CreateTime Creation Time
     * @param integer $NodeCount Number of departments
     * @param integer $MemberCount Number of members
     * @param integer $SubAccountCount Sub-account count
     * @param integer $AbnormalSubUserCount Abnormal sub-account quantity
     * @param array $GroupPermission Organization Relationship Policy Permissions
     * @param array $MemberPermission Membership Policy Permissions
     * @param integer $GroupPayMode Organization Billing Mode; 0/Self-paid, 1/Proxy-paid
     * @param integer $MemberPayMode Personal Billing Mode; 0/Self-paid, 1/Proxy-paid
     * @param string $CFWProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param string $WAFProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param string $CWPProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param array $Departments Array of all departments
     * @param string $MemberCreateTime Member Creation Time
     * @param string $CSIPProtect Advanced/Enterprise/Ultimate 
     * @param integer $QuotaConsumer 1 indicates the quota consumer
     * @param integer $EnableAdminCount Number of enabled Admin/Delegated Admin accounts
     * @param array $CloudCountDesc Multi-cloud account statistics in array format. Refer to the CloudCountDesc description for details.
     * @param integer $AdminCount Total Number of Admin/Delegated Admin Accounts
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
