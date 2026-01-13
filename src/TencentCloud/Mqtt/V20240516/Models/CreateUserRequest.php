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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method string getUsername() Obtain Specifies the username, which cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 32 characters.
 * @method void setUsername(string $Username) Set Specifies the username, which cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 32 characters.
 * @method string getPassword() Obtain Specifies the password. if this field is empty, the backend performs default generation. when using a user-defined password, the value cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 64 characters.
 * @method void setPassword(string $Password) Set Specifies the password. if this field is empty, the backend performs default generation. when using a user-defined password, the value cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 64 characters.
 * @method string getRemark() Obtain Specifies the remark with length not exceeding 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark with length not exceeding 128 characters.
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.
     */
    public $InstanceId;

    /**
     * @var string Specifies the username, which cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 32 characters.
     */
    public $Username;

    /**
     * @var string Specifies the password. if this field is empty, the backend performs default generation. when using a user-defined password, the value cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 64 characters.
     */
    public $Password;

    /**
     * @var string Specifies the remark with length not exceeding 128 characters.
     */
    public $Remark;

    /**
     * @param string $InstanceId Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.
     * @param string $Username Specifies the username, which cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 32 characters.
     * @param string $Password Specifies the password. if this field is empty, the backend performs default generation. when using a user-defined password, the value cannot be empty, only supports numbers, uppercase and lowercase letters, and separators ("_", "-"), and must not exceed 64 characters.
     * @param string $Remark Specifies the remark with length not exceeding 128 characters.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
