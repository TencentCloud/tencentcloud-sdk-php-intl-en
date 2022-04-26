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
 * DescribeUserThirdPartyAccountInfo response structure.
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method array getThirdPartyAccounts() Obtain Third-Party account binding information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setThirdPartyAccounts(array $ThirdPartyAccounts) Set Third-Party account binding information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserThirdPartyAccountInfoResponse extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var array Third-Party account binding information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ThirdPartyAccounts;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UserId User ID.
     * @param string $UserName Username.
     * @param array $ThirdPartyAccounts Third-Party account binding information.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ThirdPartyAccounts",$param) and $param["ThirdPartyAccounts"] !== null) {
            $this->ThirdPartyAccounts = [];
            foreach ($param["ThirdPartyAccounts"] as $key => $value){
                $obj = new ThirdPartyAccountInfo();
                $obj->deserialize($value);
                array_push($this->ThirdPartyAccounts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
