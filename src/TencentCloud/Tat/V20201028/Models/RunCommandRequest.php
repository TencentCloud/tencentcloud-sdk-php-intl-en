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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunCommand request structure.
 *
 * @method string getContent() Obtain Base64-encoded command. The maximum length is 64 KB.
 * @method void setContent(string $Content) Set Base64-encoded command. The maximum length is 64 KB.
 * @method array getInstanceIds() Obtain Instance ID list for the command to be executed, with a cap of 200.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
-TAT register instance.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list for the command to be executed, with a cap of 200.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
-TAT register instance.
 * @method string getCommandName() Obtain Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method void setCommandName(string $CommandName) Set Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
 * @method string getDescription() Obtain Command description. The maximum length is 120 characters.
 * @method void setDescription(string $Description) Set Command description. The maximum length is 120 characters.
 * @method string getCommandType() Obtain Command type. currently supports SHELL, POWERSHELL, BAT. default: SHELL.
 * @method void setCommandType(string $CommandType) Set Command type. currently supports SHELL, POWERSHELL, BAT. default: SHELL.
 * @method string getWorkingDirectory() Obtain Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
 * @method integer getTimeout() Obtain Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
 * @method void setTimeout(integer $Timeout) Set Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
 * @method boolean getSaveCommand() Obtain Whether to save the command. value range:.
<li>true: save</li>.
<li>false: not saved.</li>.
The default value is false.
 * @method void setSaveCommand(boolean $SaveCommand) Set Whether to save the command. value range:.
<li>true: save</li>.
<li>false: not saved.</li>.
The default value is false.
 * @method boolean getEnableParameter() Obtain Whether to enable the custom parameter feature.
Once created, this value does not offer modification.
Valid values:.
<li>true: enable</li>.
<li>false: disabled.</li>.
The default value is false.
 * @method void setEnableParameter(boolean $EnableParameter) Set Whether to enable the custom parameter feature.
Once created, this value does not offer modification.
Valid values:.
<li>true: enable</li>.
<li>false: disabled.</li>.
The default value is false.
 * @method string getDefaultParameters() Obtain Enable the custom parameter feature. default value of the custom parameter. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
If Parameters is not provided, the default value here will be used to replace.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
 * @method void setDefaultParameters(string $DefaultParameters) Set Enable the custom parameter feature. default value of the custom parameter. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
If Parameters is not provided, the default value here will be used to replace.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
 * @method array getDefaultParameterConfs() Obtain Custom parameter array. if Parameters is not provided, the default value here will be used to replace. up to 20 custom Parameters are allowed.
If Parameters is not provided, the default value here will be used to replace.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) Set Custom parameter array. if Parameters is not provided, the default value here will be used to replace. up to 20 custom Parameters are allowed.
If Parameters is not provided, the default value here will be used to replace.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
 * @method string getParameters() Obtain Custom parameter of Command. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
If the parameter value is not provided, DefaultParameters or DefaultParameterConfs will be used.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
 * @method void setParameters(string $Parameters) Set Custom parameter of Command. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
If the parameter value is not provided, DefaultParameters or DefaultParameterConfs will be used.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
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
     * @var array Instance ID list for the command to be executed, with a cap of 200.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
-TAT register instance.
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
     * @var string Command type. currently supports SHELL, POWERSHELL, BAT. default: SHELL.
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
     * @var boolean Whether to save the command. value range:.
<li>true: save</li>.
<li>false: not saved.</li>.
The default value is false.
     */
    public $SaveCommand;

    /**
     * @var boolean Whether to enable the custom parameter feature.
Once created, this value does not offer modification.
Valid values:.
<li>true: enable</li>.
<li>false: disabled.</li>.
The default value is false.
     */
    public $EnableParameter;

    /**
     * @var string Enable the custom parameter feature. default value of the custom parameter. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
If Parameters is not provided, the default value here will be used to replace.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
     */
    public $DefaultParameters;

    /**
     * @var array Custom parameter array. if Parameters is not provided, the default value here will be used to replace. up to 20 custom Parameters are allowed.
If Parameters is not provided, the default value here will be used to replace.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
     */
    public $DefaultParameterConfs;

    /**
     * @var string Custom parameter of Command. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
If the parameter value is not provided, DefaultParameters or DefaultParameterConfs will be used.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
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
     * @param array $InstanceIds Instance ID list for the command to be executed, with a cap of 200.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
-TAT register instance.
     * @param string $CommandName Command name. The name can be up to 60 bytes, and contain [a-z], [A-Z], [0-9] and [_-.].
     * @param string $Description Command description. The maximum length is 120 characters.
     * @param string $CommandType Command type. currently supports SHELL, POWERSHELL, BAT. default: SHELL.
     * @param string $WorkingDirectory Command execution path. The default value is /root for `SHELL` commands and C:\Program Files\qcloud\tat_agent\workdir for `POWERSHELL` commands.
     * @param integer $Timeout Command timeout period. Default value: 60 seconds. Value range: [1, 86400].
     * @param boolean $SaveCommand Whether to save the command. value range:.
<li>true: save</li>.
<li>false: not saved.</li>.
The default value is false.
     * @param boolean $EnableParameter Whether to enable the custom parameter feature.
Once created, this value does not offer modification.
Valid values:.
<li>true: enable</li>.
<li>false: disabled.</li>.
The default value is false.
     * @param string $DefaultParameters Enable the custom parameter feature. default value of the custom parameter. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
If Parameters is not provided, the default value here will be used to replace.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
     * @param array $DefaultParameterConfs Custom parameter array. if Parameters is not provided, the default value here will be used to replace. up to 20 custom Parameters are allowed.
If Parameters is not provided, the default value here will be used to replace.
This parameter can be set only when the EnableParameter of the command is true.
Parameters must not be specified simultaneously `DefaultParameters` and `DefaultParameterConfs`.
     * @param string $Parameters Custom parameter of Command. field type is json encoded string. for example: {"varA": "222"}.
The key is the custom parameter name, and the value is the default. both kv are string-type.
This parameter can be set only when the EnableParameter of the command is true.
If the parameter value is not provided, DefaultParameters or DefaultParameterConfs will be used.
Custom parameters can be up to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
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

        if (array_key_exists("DefaultParameterConfs",$param) and $param["DefaultParameterConfs"] !== null) {
            $this->DefaultParameterConfs = [];
            foreach ($param["DefaultParameterConfs"] as $key => $value){
                $obj = new DefaultParameterConf();
                $obj->deserialize($value);
                array_push($this->DefaultParameterConfs, $obj);
            }
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
