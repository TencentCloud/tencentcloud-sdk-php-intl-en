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
 * RunCommand request structure.
 *
 * @method string getContent() Obtain Base64-encoded command. The maximum length is 64 KB.
 * @method void setContent(string $Content) Set Base64-encoded command. The maximum length is 64 KB.
 * @method array getInstanceIds() Obtain IDs of instances about to execute commands. Up to 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
 * @method void setInstanceIds(array $InstanceIds) Set IDs of instances about to execute commands. Up to 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
 * @method string getCommandName() Obtain Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method void setCommandName(string $CommandName) Set Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method string getDescription() Obtain Command description. The maximum length is 120 characters.
 * @method void setDescription(string $Description) Set Command description. The maximum length is 120 characters.
 * @method string getCommandType() Obtain Command type. `SHELL` and `POWERSHELL` are supported. The default value is `SHELL`.
 * @method void setCommandType(string $CommandType) Set Command type. `SHELL` and `POWERSHELL` are supported. The default value is `SHELL`.
 * @method string getWorkingDirectory() Obtain Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
 * @method integer getTimeout() Obtain Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
 * @method void setTimeout(integer $Timeout) Set Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
 * @method boolean getSaveCommand() Obtain Whether to save the command. Valid values:
<li> `True`: Save
<li> `False`: Do not save
The default value is `False`.
 * @method void setSaveCommand(boolean $SaveCommand) Set Whether to save the command. Valid values:
<li> `True`: Save
<li> `False`: Do not save
The default value is `False`.
 * @method boolean getEnableParameter() Obtain Whether to enable the custom parameter feature.
This cannot be modified once created.
Default value: `false`.
 * @method void setEnableParameter(boolean $EnableParameter) Set Whether to enable the custom parameter feature.
This cannot be modified once created.
Default value: `false`.
 * @method string getDefaultParameters() Obtain The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If Parameters is not provided, the default values specified here are used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method void setDefaultParameters(string $DefaultParameters) Set The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If Parameters is not provided, the default values specified here are used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method string getParameters() Obtain Custom parameters of `Command`. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the `DefaultParameters` is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method void setParameters(string $Parameters) Set Custom parameters of `Command`. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the `DefaultParameters` is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
 * @method array getTags() Obtain The tags of the command. It is available when `SaveCommand` is `True`. A maximum of 10 tags are allowed.
 * @method void setTags(array $Tags) Set The tags of the command. It is available when `SaveCommand` is `True`. A maximum of 10 tags are allowed.
 * @method string getUsername() Obtain The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. By default, the user `root` is used to execute commands on Linux and the user `System` is used on Windows.
 * @method void setUsername(string $Username) Set The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. By default, the user `root` is used to execute commands on Linux and the user `System` is used on Windows.
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
class RunCommandRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded command. The maximum length is 64 KB.
     */
    public $Content;

    /**
     * @var array IDs of instances about to execute commands. Up to 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
     */
    public $InstanceIds;

    /**
     * @var string Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
     */
    public $CommandName;

    /**
     * @var string Command description. The maximum length is 120 characters.
     */
    public $Description;

    /**
     * @var string Command type. `SHELL` and `POWERSHELL` are supported. The default value is `SHELL`.
     */
    public $CommandType;

    /**
     * @var string Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
     */
    public $WorkingDirectory;

    /**
     * @var integer Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
     */
    public $Timeout;

    /**
     * @var boolean Whether to save the command. Valid values:
<li> `True`: Save
<li> `False`: Do not save
The default value is `False`.
     */
    public $SaveCommand;

    /**
     * @var boolean Whether to enable the custom parameter feature.
This cannot be modified once created.
Default value: `false`.
     */
    public $EnableParameter;

    /**
     * @var string The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If Parameters is not provided, the default values specified here are used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     */
    public $DefaultParameters;

    /**
     * @var string Custom parameters of `Command`. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the `DefaultParameters` is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     */
    public $Parameters;

    /**
     * @var array The tags of the command. It is available when `SaveCommand` is `True`. A maximum of 10 tags are allowed.
     */
    public $Tags;

    /**
     * @var string The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. By default, the user `root` is used to execute commands on Linux and the user `System` is used on Windows.
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
     * @param string $Content Base64-encoded command. The maximum length is 64 KB.
     * @param array $InstanceIds IDs of instances about to execute commands. Up to 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
     * @param string $CommandName Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
     * @param string $Description Command description. The maximum length is 120 characters.
     * @param string $CommandType Command type. `SHELL` and `POWERSHELL` are supported. The default value is `SHELL`.
     * @param string $WorkingDirectory Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
     * @param integer $Timeout Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
     * @param boolean $SaveCommand Whether to save the command. Valid values:
<li> `True`: Save
<li> `False`: Do not save
The default value is `False`.
     * @param boolean $EnableParameter Whether to enable the custom parameter feature.
This cannot be modified once created.
Default value: `false`.
     * @param string $DefaultParameters The default value of the custom parameter value when it is enabled. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If Parameters is not provided, the default values specified here are used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     * @param string $Parameters Custom parameters of `Command`. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If no parameter value is provided, the `DefaultParameters` is used.
Up to 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can contain [a-z], [A-Z], [0-9] and [-_].
     * @param array $Tags The tags of the command. It is available when `SaveCommand` is `True`. A maximum of 10 tags are allowed.
     * @param string $Username The username used to execute the command on the CVM or Lighthouse instance.
The principle of least privilege is the best practice for permission management. We recommend you execute TAT commands as a general user. By default, the user `root` is used to execute commands on Linux and the user `System` is used on Windows.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("SaveCommand",$param) and $param["SaveCommand"] !== null) {
            $this->SaveCommand = $param["SaveCommand"];
        }

        if (array_key_exists("EnableParameter",$param) and $param["EnableParameter"] !== null) {
            $this->EnableParameter = $param["EnableParameter"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
