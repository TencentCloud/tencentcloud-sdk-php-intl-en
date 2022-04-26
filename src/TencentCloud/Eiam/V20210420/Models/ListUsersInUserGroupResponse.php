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
 * ListUsersInUserGroup response structure.
 *
 * @method string getUserGroupId() Obtain User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserInfo() Obtain Returned user information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserInfo(array $UserInfo) Set Returned user information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalNum() Obtain Total number of returned user information items.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalNum(integer $TotalNum) Set Total number of returned user information items.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListUsersInUserGroupResponse extends AbstractModel
{
    /**
     * @var string User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupId;

    /**
     * @var array Returned user information list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserInfo;

    /**
     * @var integer Total number of returned user information items.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UserGroupId User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserInfo Returned user information list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalNum Total number of returned user information items.
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = [];
            foreach ($param["UserInfo"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfo, $obj);
            }
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
