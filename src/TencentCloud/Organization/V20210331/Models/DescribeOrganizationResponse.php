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
 * DescribeOrganization response structure.
 *
 * @method integer getOrgId() Obtain Organization ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgId(integer $OrgId) Set Organization ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostUin() Obtain Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostUin(integer $HostUin) Set Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNickName() Obtain Creator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNickName(string $NickName) Set Creator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrgType() Obtain Organization type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgType(integer $OrgType) Set Organization type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsManager() Obtain Whether the member is the organization admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsManager(boolean $IsManager) Set Whether the member is the organization admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrgPolicyType() Obtain Policy type. Valid values: `Financial` (finance management).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPolicyType(string $OrgPolicyType) Set Policy type. Valid values: `Financial` (finance management).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrgPolicyName() Obtain Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPolicyName(string $OrgPolicyName) Set Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOrgPermission() Obtain List of member financial permissions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPermission(array $OrgPermission) Set List of member financial permissions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRootNodeId() Obtain Organization root node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRootNodeId(integer $RootNodeId) Set Organization root node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Organization creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Organization creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJoinTime() Obtain Member joining time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJoinTime(string $JoinTime) Set Member joining time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsAllowQuit() Obtain Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAllowQuit(string $IsAllowQuit) Set Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayUin() Obtain Payer UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayUin(string $PayUin) Set Payer UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayName() Obtain Payer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayName(string $PayName) Set Payer name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsAssignManager() Obtain Whether the member is the trusted service admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAssignManager(boolean $IsAssignManager) Set Whether the member is the trusted service admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsAuthManager() Obtain Whether the member is the verified entity admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAuthManager(boolean $IsAuthManager) Set Whether the member is the verified entity admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeOrganizationResponse extends AbstractModel
{
    /**
     * @var integer Organization ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgId;

    /**
     * @var integer Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostUin;

    /**
     * @var string Creator name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NickName;

    /**
     * @var integer Organization type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgType;

    /**
     * @var boolean Whether the member is the organization admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsManager;

    /**
     * @var string Policy type. Valid values: `Financial` (finance management).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPolicyType;

    /**
     * @var string Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPolicyName;

    /**
     * @var array List of member financial permissions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPermission;

    /**
     * @var integer Organization root node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RootNodeId;

    /**
     * @var string Organization creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Member joining time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JoinTime;

    /**
     * @var string Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAllowQuit;

    /**
     * @var string Payer UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayUin;

    /**
     * @var string Payer name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayName;

    /**
     * @var boolean Whether the member is the trusted service admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAssignManager;

    /**
     * @var boolean Whether the member is the verified entity admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAuthManager;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $OrgId Organization ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostUin Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NickName Creator name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrgType Organization type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsManager Whether the member is the organization admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrgPolicyType Policy type. Valid values: `Financial` (finance management).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrgPolicyName Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OrgPermission List of member financial permissions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RootNodeId Organization root node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Organization creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JoinTime Member joining time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsAllowQuit Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayUin Payer UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayName Payer name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsAssignManager Whether the member is the trusted service admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsAuthManager Whether the member is the verified entity admin. Valid values: `true` (yes); `false` (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("HostUin",$param) and $param["HostUin"] !== null) {
            $this->HostUin = $param["HostUin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
        }

        if (array_key_exists("OrgPolicyType",$param) and $param["OrgPolicyType"] !== null) {
            $this->OrgPolicyType = $param["OrgPolicyType"];
        }

        if (array_key_exists("OrgPolicyName",$param) and $param["OrgPolicyName"] !== null) {
            $this->OrgPolicyName = $param["OrgPolicyName"];
        }

        if (array_key_exists("OrgPermission",$param) and $param["OrgPermission"] !== null) {
            $this->OrgPermission = [];
            foreach ($param["OrgPermission"] as $key => $value){
                $obj = new OrgPermission();
                $obj->deserialize($value);
                array_push($this->OrgPermission, $obj);
            }
        }

        if (array_key_exists("RootNodeId",$param) and $param["RootNodeId"] !== null) {
            $this->RootNodeId = $param["RootNodeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("IsAssignManager",$param) and $param["IsAssignManager"] !== null) {
            $this->IsAssignManager = $param["IsAssignManager"];
        }

        if (array_key_exists("IsAuthManager",$param) and $param["IsAuthManager"] !== null) {
            $this->IsAuthManager = $param["IsAuthManager"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
