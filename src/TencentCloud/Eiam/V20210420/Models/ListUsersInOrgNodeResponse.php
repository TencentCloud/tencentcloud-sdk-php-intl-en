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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUsersInOrgNode response structure.
 *
 * @method array getOrgNodeChildUserInfo() Obtain User information list under the organization sub-node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeChildUserInfo(array $OrgNodeChildUserInfo) Set User information list under the organization sub-node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgNodeId() Obtain Organization node ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeId(string $OrgNodeId) Set Organization node ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserInfo() Obtain User information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserInfo(array $UserInfo) Set User information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalUserNum() Obtain Total number of users under the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalUserNum(integer $TotalUserNum) Set Total number of users under the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgNodeIdPath() Obtain Organization ID path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeIdPath(string $OrgNodeIdPath) Set Organization ID path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgNodeNamePath() Obtain Organization name path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeNamePath(string $OrgNodeNamePath) Set Organization name path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListUsersInOrgNodeResponse extends AbstractModel
{
    /**
     * @var array User information list under the organization sub-node.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeChildUserInfo;

    /**
     * @var string Organization node ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeId;

    /**
     * @var array User information list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserInfo;

    /**
     * @var integer Total number of users under the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalUserNum;

    /**
     * @var string Organization ID path.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeIdPath;

    /**
     * @var string Organization name path.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeNamePath;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $OrgNodeChildUserInfo User information list under the organization sub-node.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgNodeId Organization node ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserInfo User information list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalUserNum Total number of users under the current organization node.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgNodeIdPath Organization ID path.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgNodeNamePath Organization name path.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("OrgNodeChildUserInfo",$param) and $param["OrgNodeChildUserInfo"] !== null) {
            $this->OrgNodeChildUserInfo = [];
            foreach ($param["OrgNodeChildUserInfo"] as $key => $value){
                $obj = new OrgNodeChildUserInfo();
                $obj->deserialize($value);
                array_push($this->OrgNodeChildUserInfo, $obj);
            }
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = [];
            foreach ($param["UserInfo"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfo, $obj);
            }
        }

        if (array_key_exists("TotalUserNum",$param) and $param["TotalUserNum"] !== null) {
            $this->TotalUserNum = $param["TotalUserNum"];
        }

        if (array_key_exists("OrgNodeIdPath",$param) and $param["OrgNodeIdPath"] !== null) {
            $this->OrgNodeIdPath = $param["OrgNodeIdPath"];
        }

        if (array_key_exists("OrgNodeNamePath",$param) and $param["OrgNodeNamePath"] !== null) {
            $this->OrgNodeNamePath = $param["OrgNodeNamePath"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
