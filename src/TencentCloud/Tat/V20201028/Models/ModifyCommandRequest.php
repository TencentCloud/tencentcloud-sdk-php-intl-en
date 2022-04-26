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
 * ModifyCommand request structure.
 *
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
 * @method string getCommandName() Obtain Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method void setCommandName(string $CommandName) Set Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method string getDescription() Obtain Command description. The maximum length is 120 characters.
 * @method void setDescription(string $Description) Set Command description. The maximum length is 120 characters.
 * @method string getContent() Obtain Base64-encoded command. The maximum length is 64 KB.
 * @method void setContent(string $Content) Set Base64-encoded command. The maximum length is 64 KB.
 * @method string getCommandType() Obtain Command type. `SHELL` and `POWERSHELL` are supported.
 * @method void setCommandType(string $CommandType) Set Command type. `SHELL` and `POWERSHELL` are supported.
 * @method string getWorkingDirectory() Obtain Command execution path.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Command execution path.
 * @method integer getTimeout() Obtain Command timeout period. Value range: [1, 86400].
 * @method void setTimeout(integer $Timeout) Set Command timeout period. Value range: [1, 86400].
 * @method string getDefaultParameters() Obtain The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
All parameters are overwritten. All default values are required for modification.
Modification is only allowed when `EnableParameter` is `true`.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method void setDefaultParameters(string $DefaultParameters) Set The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
All parameters are overwritten. All default values are required for modification.
Modification is only allowed when `EnableParameter` is `true`.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method string getUsername() Obtain The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user.
 * @method void setUsername(string $Username) Set The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user.
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
class ModifyCommandRequest extends AbstractModel
{
    /**
     * @var string Command ID.
     */
    public $CommandId;

    /**
     * @var string Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
     */
    public $CommandName;

    /**
     * @var string Command description. The maximum length is 120 characters.
     */
    public $Description;

    /**
     * @var string Base64-encoded command. The maximum length is 64 KB.
     */
    public $Content;

    /**
     * @var string Command type. `SHELL` and `POWERSHELL` are supported.
     */
    public $CommandType;

    /**
     * @var string Command execution path.
     */
    public $WorkingDirectory;

    /**
     * @var integer Command timeout period. Value range: [1, 86400].
     */
    public $Timeout;

    /**
     * @var string The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
All parameters are overwritten. All default values are required for modification.
Modification is only allowed when `EnableParameter` is `true`.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     */
    public $DefaultParameters;

    /**
     * @var string The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user.
     */
    public $Username;

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
     * @param string $CommandId Command ID.
     * @param string $CommandName Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
     * @param string $Description Command description. The maximum length is 120 characters.
     * @param string $Content Base64-encoded command. The maximum length is 64 KB.
     * @param string $CommandType Command type. `SHELL` and `POWERSHELL` are supported.
     * @param string $WorkingDirectory Command execution path.
     * @param integer $Timeout Command timeout period. Value range: [1, 86400].
     * @param string $DefaultParameters The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
All parameters are overwritten. All default values are required for modification.
Modification is only allowed when `EnableParameter` is `true`.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     * @param string $Username The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user.
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

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
