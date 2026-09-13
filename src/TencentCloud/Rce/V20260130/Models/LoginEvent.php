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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login event detail
 *
 * @method User getUserInfo() Obtain <p>Basic user information</p>
 * @method void setUserInfo(User $UserInfo) Set <p>Basic user information</p>
 * @method string getUserLoginName() Obtain <p>The user name entered when the user logged in</p>
 * @method void setUserLoginName(string $UserLoginName) Set <p>The user name entered when the user logged in</p>
 * @method Result getLoginResult() Obtain <p>Login result</p>
 * @method void setLoginResult(Result $LoginResult) Set <p>Login result</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class LoginEvent extends AbstractModel
{
    /**
     * @var User <p>Basic user information</p>
     */
    public $UserInfo;

    /**
     * @var string <p>The user name entered when the user logged in</p>
     */
    public $UserLoginName;

    /**
     * @var Result <p>Login result</p>
     */
    public $LoginResult;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param User $UserInfo <p>Basic user information</p>
     * @param string $UserLoginName <p>The user name entered when the user logged in</p>
     * @param Result $LoginResult <p>Login result</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("UserLoginName",$param) and $param["UserLoginName"] !== null) {
            $this->UserLoginName = $param["UserLoginName"];
        }

        if (array_key_exists("LoginResult",$param) and $param["LoginResult"] !== null) {
            $this->LoginResult = new Result();
            $this->LoginResult->deserialize($param["LoginResult"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
