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
 * 
 *
 * @method string getNickName() Obtain 
 * @method void setNickName(string $NickName) Set 
 * @method string getNodeName() Obtain 
 * @method void setNodeName(string $NodeName) Set 
 * @method string getRole() Obtain 
 * @method void setRole(string $Role) Set 
 * @method string getMemberId() Obtain 
 * @method void setMemberId(string $MemberId) Set 
 * @method string getJoinType() Obtain 
 * @method void setJoinType(string $JoinType) Set 
 * @method string getGroupName() Obtain 
 * @method void setGroupName(string $GroupName) Set 
 * @method string getAdminName() Obtain 
 * @method void setAdminName(string $AdminName) Set 
 * @method string getAdminUin() Obtain 
 * @method void setAdminUin(string $AdminUin) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method integer getNodeCount() Obtain 
 * @method void setNodeCount(integer $NodeCount) Set 
 * @method integer getMemberCount() Obtain 
 * @method void setMemberCount(integer $MemberCount) Set 
 * @method integer getSubAccountCount() Obtain 
 * @method void setSubAccountCount(integer $SubAccountCount) Set 
 * @method integer getAbnormalSubUserCount() Obtain 
 * @method void setAbnormalSubUserCount(integer $AbnormalSubUserCount) Set 
 * @method array getGroupPermission() Obtain 
 * @method void setGroupPermission(array $GroupPermission) Set 
 * @method array getMemberPermission() Obtain 
 * @method void setMemberPermission(array $MemberPermission) Set 
 * @method integer getGroupPayMode() Obtain 
 * @method void setGroupPayMode(integer $GroupPayMode) Set 
 * @method integer getMemberPayMode() Obtain 
 * @method void setMemberPayMode(integer $MemberPayMode) Set 
 * @method string getCFWProtect() Obtain 
 * @method void setCFWProtect(string $CFWProtect) Set 
 * @method string getWAFProtect() Obtain 
 * @method void setWAFProtect(string $WAFProtect) Set 
 * @method string getCWPProtect() Obtain 
 * @method void setCWPProtect(string $CWPProtect) Set 
 * @method array getDepartments() Obtain 
 * @method void setDepartments(array $Departments) Set 
 * @method string getMemberCreateTime() Obtain 
 * @method void setMemberCreateTime(string $MemberCreateTime) Set 
 * @method string getCSIPProtect() Obtain Advanced/Enterprise/Ultimate 
 * @method void setCSIPProtect(string $CSIPProtect) Set Advanced/Enterprise/Ultimate 
 * @method integer getQuotaConsumer() Obtain 
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 
 * @method integer getEnableAdminCount() Obtain 
 * @method void setEnableAdminCount(integer $EnableAdminCount) Set 
 * @method array getCloudCountDesc() Obtain 
 * @method void setCloudCountDesc(array $CloudCountDesc) Set 
 * @method integer getAdminCount() Obtain 
 * @method void setAdminCount(integer $AdminCount) Set 
 */
class OrganizationInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $NickName;

    /**
     * @var string 
     */
    public $NodeName;

    /**
     * @var string 
     */
    public $Role;

    /**
     * @var string 
     */
    public $MemberId;

    /**
     * @var string 
     */
    public $JoinType;

    /**
     * @var string 
     */
    public $GroupName;

    /**
     * @var string 
     */
    public $AdminName;

    /**
     * @var string 
     */
    public $AdminUin;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var integer 
     */
    public $NodeCount;

    /**
     * @var integer 
     */
    public $MemberCount;

    /**
     * @var integer 
     */
    public $SubAccountCount;

    /**
     * @var integer 
     */
    public $AbnormalSubUserCount;

    /**
     * @var array 
     */
    public $GroupPermission;

    /**
     * @var array 
     */
    public $MemberPermission;

    /**
     * @var integer 
     */
    public $GroupPayMode;

    /**
     * @var integer 
     */
    public $MemberPayMode;

    /**
     * @var string 
     */
    public $CFWProtect;

    /**
     * @var string 
     */
    public $WAFProtect;

    /**
     * @var string 
     */
    public $CWPProtect;

    /**
     * @var array 
     */
    public $Departments;

    /**
     * @var string 
     */
    public $MemberCreateTime;

    /**
     * @var string Advanced/Enterprise/Ultimate 
     */
    public $CSIPProtect;

    /**
     * @var integer 
     */
    public $QuotaConsumer;

    /**
     * @var integer 
     */
    public $EnableAdminCount;

    /**
     * @var array 
     */
    public $CloudCountDesc;

    /**
     * @var integer 
     */
    public $AdminCount;

    /**
     * @param string $NickName 
     * @param string $NodeName 
     * @param string $Role 
     * @param string $MemberId 
     * @param string $JoinType 
     * @param string $GroupName 
     * @param string $AdminName 
     * @param string $AdminUin 
     * @param string $CreateTime 
     * @param integer $NodeCount 
     * @param integer $MemberCount 
     * @param integer $SubAccountCount 
     * @param integer $AbnormalSubUserCount 
     * @param array $GroupPermission 
     * @param array $MemberPermission 
     * @param integer $GroupPayMode 
     * @param integer $MemberPayMode 
     * @param string $CFWProtect 
     * @param string $WAFProtect 
     * @param string $CWPProtect 
     * @param array $Departments 
     * @param string $MemberCreateTime 
     * @param string $CSIPProtect Advanced/Enterprise/Ultimate 
     * @param integer $QuotaConsumer 
     * @param integer $EnableAdminCount 
     * @param array $CloudCountDesc 
     * @param integer $AdminCount 
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
