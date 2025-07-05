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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserGroupsOfUser response structure.
 *
 * @method array getUserGroupIds() Obtain List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupIds(array $UserGroupIds) Set List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserGroupInfoList() Obtain List of information of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupInfoList(array $UserGroupInfoList) Set List of information of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of returned user group information items.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of returned user group information items.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListUserGroupsOfUserResponse extends AbstractModel
{
    /**
     * @var array List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupIds;

    /**
     * @var string User ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var array List of information of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupInfoList;

    /**
     * @var integer Total number of returned user group information items.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $UserGroupIds List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserGroupInfoList List of information of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of returned user group information items.
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
        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserGroupInfoList",$param) and $param["UserGroupInfoList"] !== null) {
            $this->UserGroupInfoList = [];
            foreach ($param["UserGroupInfoList"] as $key => $value){
                $obj = new UserGroupInfo();
                $obj->deserialize($value);
                array_push($this->UserGroupInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
