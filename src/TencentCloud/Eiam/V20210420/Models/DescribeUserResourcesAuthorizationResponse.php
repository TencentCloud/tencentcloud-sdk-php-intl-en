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
 * DescribeUserResourcesAuthorization response structure.
 *
 * @method string getApplicationId() Obtain Unique application ID.
 * @method void setApplicationId(string $ApplicationId) Set Unique application ID.
 * @method array getApplicationAccounts() Obtain Application account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationAccounts(array $ApplicationAccounts) Set Application account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain Unique ID of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set Unique ID of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAuthorizationUserResourceList() Obtain Returned resource list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizationUserResourceList(array $AuthorizationUserResourceList) Set Returned resource list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserResourcesAuthorizationResponse extends AbstractModel
{
    /**
     * @var string Unique application ID.
     */
    public $ApplicationId;

    /**
     * @var array Application account.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationAccounts;

    /**
     * @var string Unique ID of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Username of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var array Returned resource list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizationUserResourceList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ApplicationId Unique application ID.
     * @param array $ApplicationAccounts Application account.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserId Unique ID of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username of the authorized user.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AuthorizationUserResourceList Returned resource list.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AuthorizationUserResourceList",$param) and $param["AuthorizationUserResourceList"] !== null) {
            $this->AuthorizationUserResourceList = [];
            foreach ($param["AuthorizationUserResourceList"] as $key => $value){
                $obj = new AuthorizationUserResouceInfo();
                $obj->deserialize($value);
                array_push($this->AuthorizationUserResourceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
