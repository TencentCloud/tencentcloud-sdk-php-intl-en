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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstancesPassword request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method string getPassword() Obtain Login password of the instance. The password requirements vary among different operating systems:
For a Linux instance, the password must be 8 to 30 characters in length; password with more than 12 characters is recommended. It cannot begin with "/", and must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/
For a Windows CVM, the password must be 12 to 30 characters in length. It cannot begin with "/" or contain a username. It must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;' <>,.?/<br><li>If the specified instances include both `Linux` and `Windows` instances, you will need to follow the password requirements for `Windows` instances.
 * @method void setPassword(string $Password) Set Login password of the instance. The password requirements vary among different operating systems:
For a Linux instance, the password must be 8 to 30 characters in length; password with more than 12 characters is recommended. It cannot begin with "/", and must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/
For a Windows CVM, the password must be 12 to 30 characters in length. It cannot begin with "/" or contain a username. It must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;' <>,.?/<br><li>If the specified instances include both `Linux` and `Windows` instances, you will need to follow the password requirements for `Windows` instances.
 * @method string getUserName() Obtain Username of the instance operating system for which the password needs to be reset. This parameter is limited to 64 characters.
 * @method void setUserName(string $UserName) Set Username of the instance operating system for which the password needs to be reset. This parameter is limited to 64 characters.
 * @method boolean getForceStop() Obtain Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
 * @method void setForceStop(boolean $ForceStop) Set Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
 */
class ResetInstancesPasswordRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var string Login password of the instance. The password requirements vary among different operating systems:
For a Linux instance, the password must be 8 to 30 characters in length; password with more than 12 characters is recommended. It cannot begin with "/", and must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/
For a Windows CVM, the password must be 12 to 30 characters in length. It cannot begin with "/" or contain a username. It must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;' <>,.?/<br><li>If the specified instances include both `Linux` and `Windows` instances, you will need to follow the password requirements for `Windows` instances.
     */
    public $Password;

    /**
     * @var string Username of the instance operating system for which the password needs to be reset. This parameter is limited to 64 characters.
     */
    public $UserName;

    /**
     * @var boolean Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
     */
    public $ForceStop;

    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     * @param string $Password Login password of the instance. The password requirements vary among different operating systems:
For a Linux instance, the password must be 8 to 30 characters in length; password with more than 12 characters is recommended. It cannot begin with "/", and must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/
For a Windows CVM, the password must be 12 to 30 characters in length. It cannot begin with "/" or contain a username. It must contain at least one character from three of the following categories: <br><li>Lowercase letters: [a-z]<br><li>Uppercase letters: [A-Z]<br><li>Numbers: 0-9<br><li>Special characters: ()\`\~!@#$%^&\*-+=\_|{}[]:;' <>,.?/<br><li>If the specified instances include both `Linux` and `Windows` instances, you will need to follow the password requirements for `Windows` instances.
     * @param string $UserName Username of the instance operating system for which the password needs to be reset. This parameter is limited to 64 characters.
     * @param boolean $ForceStop Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
