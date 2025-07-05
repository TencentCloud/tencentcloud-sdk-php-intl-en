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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsersForUserManager response structure.
 *
 * @method integer getTotalCnt() Obtain Total number
 * @method void setTotalCnt(integer $TotalCnt) Set Total number
 * @method array getUserManagerUserList() Obtain User information list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserManagerUserList(array $UserManagerUserList) Set User information list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUsersForUserManagerResponse extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCnt;

    /**
     * @var array User information list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserManagerUserList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt Total number
     * @param array $UserManagerUserList User information list
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("UserManagerUserList",$param) and $param["UserManagerUserList"] !== null) {
            $this->UserManagerUserList = [];
            foreach ($param["UserManagerUserList"] as $key => $value){
                $obj = new UserManagerUserBriefInfo();
                $obj->deserialize($value);
                array_push($this->UserManagerUserList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
