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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeCommand request structure.
 *
 * @method string getCommandId() Obtain ID of the command to be triggered.
 * @method void setCommandId(string $CommandId) Set ID of the command to be triggered.
 * @method array getInstanceIds() Obtain IDs of instances about to execute commands. At most 100 IDs are allowed.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of instances about to execute commands. At most 100 IDs are allowed.
 * @method string getParameters() Obtain Custom parameters of the command. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the DefaultParameters of the command is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method void setParameters(string $Parameters) Set Custom parameters of the command. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the DefaultParameters of the command is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method string getUsername() Obtain The username used to execute the command on the CVM or Lighthouse instance.
The principle of the least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. If this is not specified, the Username of the command is used by default.
 * @method void setUsername(string $Username) Set The username used to execute the command on the CVM or Lighthouse instance.
The principle of the least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. If this is not specified, the Username of the command is used by default.
 * @method string getWorkingDirectory() Obtain Execution path of the command. The WorkingDirectory of the command is used by default.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Execution path of the command. The WorkingDirectory of the command is used by default.
 * @method integer getTimeout() Obtain Command timeout period. Value range: [1, 86400]. The Timeout of the command is used by default.
 * @method void setTimeout(integer $Timeout) Set Command timeout period. Value range: [1, 86400]. The Timeout of the command is used by default.
 * @method string getOutputCOSBucketUrl() Obtain The COS bucket URL for uploading logs. The URL must start with `https`, such as `https://BucketName-123454321.cos.ap-beijing.myqcloud.com`.
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set The COS bucket URL for uploading logs. The URL must start with `https`, such as `https://BucketName-123454321.cos.ap-beijing.myqcloud.com`.
 * @method string getOutputCOSKeyPrefix() Obtain The COS bucket directory where the logs are saved. Check below for the rules of the directory name. 
1. It must be a combination of number, letters, and visible characters. Up to 60 characters are allowed.
2. Use a slash (/) to create a subdirectory.
3. ".." can not be used as the folder name. It cannot start with a slash (/), and cannot contain consecutive slashes.
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set The COS bucket directory where the logs are saved. Check below for the rules of the directory name. 
1. It must be a combination of number, letters, and visible characters. Up to 60 characters are allowed.
2. Use a slash (/) to create a subdirectory.
3. ".." can not be used as the folder name. It cannot start with a slash (/), and cannot contain consecutive slashes.
 */
class InvokeCommandRequest extends AbstractModel
{
    /**
     * @var string ID of the command to be triggered.
     */
    public $CommandId;

    /**
     * @var array IDs of instances about to execute commands. At most 100 IDs are allowed.
     */
    public $InstanceIds;

    /**
     * @var string Custom parameters of the command. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the DefaultParameters of the command is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     */
    public $Parameters;

    /**
     * @var string The username used to execute the command on the CVM or Lighthouse instance.
The principle of the least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. If this is not specified, the Username of the command is used by default.
     */
    public $Username;

    /**
     * @var string Execution path of the command. The WorkingDirectory of the command is used by default.
     */
    public $WorkingDirectory;

    /**
     * @var integer Command timeout period. Value range: [1, 86400]. The Timeout of the command is used by default.
     */
    public $Timeout;

    /**
     * @var string The COS bucket URL for uploading logs. The URL must start with `https`, such as `https://BucketName-123454321.cos.ap-beijing.myqcloud.com`.
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string The COS bucket directory where the logs are saved. Check below for the rules of the directory name. 
1. It must be a combination of number, letters, and visible characters. Up to 60 characters are allowed.
2. Use a slash (/) to create a subdirectory.
3. ".." can not be used as the folder name. It cannot start with a slash (/), and cannot contain consecutive slashes.
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId ID of the command to be triggered.
     * @param array $InstanceIds IDs of instances about to execute commands. At most 100 IDs are allowed.
     * @param string $Parameters Custom parameters of the command. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the DefaultParameters of the command is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     * @param string $Username The username used to execute the command on the CVM or Lighthouse instance.
The principle of the least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. If this is not specified, the Username of the command is used by default.
     * @param string $WorkingDirectory Execution path of the command. The WorkingDirectory of the command is used by default.
     * @param integer $Timeout Command timeout period. Value range: [1, 86400]. The Timeout of the command is used by default.
     * @param string $OutputCOSBucketUrl The COS bucket URL for uploading logs. The URL must start with `https`, such as `https://BucketName-123454321.cos.ap-beijing.myqcloud.com`.
     * @param string $OutputCOSKeyPrefix The COS bucket directory where the logs are saved. Check below for the rules of the directory name. 
1. It must be a combination of number, letters, and visible characters. Up to 60 characters are allowed.
2. Use a slash (/) to create a subdirectory.
3. ".." can not be used as the folder name. It cannot start with a slash (/), and cannot contain consecutive slashes.
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
