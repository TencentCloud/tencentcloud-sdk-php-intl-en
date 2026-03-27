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
 * ModifyCommand request structure.
 *
 * @method string getCommandId() Obtain <p>Command ID. call the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands</a> api to query command details.</p>.
 * @method void setCommandId(string $CommandId) Set <p>Command ID. call the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands</a> api to query command details.</p>.
 * @method string getCommandName() Obtain <p>Command name. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 60 bytes.</p>.
 * @method void setCommandName(string $CommandName) Set <p>Command name. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 60 bytes.</p>.
 * @method string getDescription() Obtain <P>Command description. no more than 120 characters.</p>.
 * @method void setDescription(string $Description) Set <P>Command description. no more than 120 characters.</p>.
 * @method string getContent() Obtain <p>The Base64-encoded command content, length cannot exceed 64KB.</p>.
 * @method void setContent(string $Content) Set <p>The Base64-encoded command content, length cannot exceed 64KB.</p>.
 * @method string getCommandType() Obtain <p>Command type. currently supports SHELL, POWERSHELL, BAT.</p>.
 * @method void setCommandType(string $CommandType) Set <p>Command type. currently supports SHELL, POWERSHELL, BAT.</p>.
 * @method string getWorkingDirectory() Obtain <P>Command execution path.</p>.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set <P>Command execution path.</p>.
 * @method integer getTimeout() Obtain <p>Command timeout time.</p><p>value range: [1, 86400].</p><p>unit: seconds.</p><p>default value: 60.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
 * @method void setTimeout(integer $Timeout) Set <p>Command timeout time.</p><p>value range: [1, 86400].</p><p>unit: seconds.</p><p>default value: 60.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
 * @method string getDefaultParameters() Obtain <p>The default value of custom parameters when the custom parameter feature is enabled. the field type is a json-encoded string, for example: {"varA": "222"}.<br>parameters must not be specified simultaneously for <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>a comprehensive modification is applied, meaning all new default values must be provided when modifying.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings of the command through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>the key is the custom parameter name, and the value is the default value of this parameter. both key and value are string-type.<br>there is an upper limit of 20 custom parameters.<br>custom parameter names must meet the following requirements: the upper limit of character quantity is 64, and the optional range is [a-zA-Z0-9-_].</p>.
 * @method void setDefaultParameters(string $DefaultParameters) Set <p>The default value of custom parameters when the custom parameter feature is enabled. the field type is a json-encoded string, for example: {"varA": "222"}.<br>parameters must not be specified simultaneously for <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>a comprehensive modification is applied, meaning all new default values must be provided when modifying.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings of the command through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>the key is the custom parameter name, and the value is the default value of this parameter. both key and value are string-type.<br>there is an upper limit of 20 custom parameters.<br>custom parameter names must meet the following requirements: the upper limit of character quantity is 64, and the optional range is [a-zA-Z0-9-_].</p>.
 * @method array getDefaultParameterConfs() Obtain <p>Custom parameter array. if no parameter value is provided when invoking the command, the default value here will be used to replace it.<br>parameters do not support specifying both <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>up to 20 custom parameters are allowed.</p>.
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) Set <p>Custom parameter array. if no parameter value is provided when invoking the command, the default value here will be used to replace it.<br>parameters do not support specifying both <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>up to 20 custom parameters are allowed.</p>.
 * @method string getUsername() Obtain <p>The username to run commands in a CVM or Lighthouse instance.<br>using minimum permission to execute commands is the best practice for permission management. we recommend running cloud assistant commands as a regular user identity.</p>.
 * @method void setUsername(string $Username) Set <p>The username to run commands in a CVM or Lighthouse instance.<br>using minimum permission to execute commands is the best practice for permission management. we recommend running cloud assistant commands as a regular user identity.</p>.
 * @method string getOutputCOSBucketUrl() Obtain <p>Specifies the cos bucket address for the uploaded log, which must start with https, such as https://BucketName-123454321.cos.ap-beijing.myqcloud.com.</p>.
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set <p>Specifies the cos bucket address for the uploaded log, which must start with https, such as https://BucketName-123454321.cos.ap-beijing.myqcloud.com.</p>.
 * @method string getOutputCOSKeyPrefix() Obtain <P>Specify the directory for logs in the cos bucket. the directory naming has the following rules:</p><ol><li>use a combination of numbers, chinese and english, and visible characters, with a maximum length of 60.</li><li>use / to split the path and quickly create subdirectories.</li><li>consecutive / are not allowed; cannot start with /; cannot use .. as the folder name.</li></ol>.
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set <P>Specify the directory for logs in the cos bucket. the directory naming has the following rules:</p><ol><li>use a combination of numbers, chinese and english, and visible characters, with a maximum length of 60.</li><li>use / to split the path and quickly create subdirectories.</li><li>consecutive / are not allowed; cannot start with /; cannot use .. as the folder name.</li></ol>.
 */
class ModifyCommandRequest extends AbstractModel
{
    /**
     * @var string <p>Command ID. call the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands</a> api to query command details.</p>.
     */
    public $CommandId;

    /**
     * @var string <p>Command name. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 60 bytes.</p>.
     */
    public $CommandName;

    /**
     * @var string <P>Command description. no more than 120 characters.</p>.
     */
    public $Description;

    /**
     * @var string <p>The Base64-encoded command content, length cannot exceed 64KB.</p>.
     */
    public $Content;

    /**
     * @var string <p>Command type. currently supports SHELL, POWERSHELL, BAT.</p>.
     */
    public $CommandType;

    /**
     * @var string <P>Command execution path.</p>.
     */
    public $WorkingDirectory;

    /**
     * @var integer <p>Command timeout time.</p><p>value range: [1, 86400].</p><p>unit: seconds.</p><p>default value: 60.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
     */
    public $Timeout;

    /**
     * @var string <p>The default value of custom parameters when the custom parameter feature is enabled. the field type is a json-encoded string, for example: {"varA": "222"}.<br>parameters must not be specified simultaneously for <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>a comprehensive modification is applied, meaning all new default values must be provided when modifying.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings of the command through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>the key is the custom parameter name, and the value is the default value of this parameter. both key and value are string-type.<br>there is an upper limit of 20 custom parameters.<br>custom parameter names must meet the following requirements: the upper limit of character quantity is 64, and the optional range is [a-zA-Z0-9-_].</p>.
     */
    public $DefaultParameters;

    /**
     * @var array <p>Custom parameter array. if no parameter value is provided when invoking the command, the default value here will be used to replace it.<br>parameters do not support specifying both <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>up to 20 custom parameters are allowed.</p>.
     */
    public $DefaultParameterConfs;

    /**
     * @var string <p>The username to run commands in a CVM or Lighthouse instance.<br>using minimum permission to execute commands is the best practice for permission management. we recommend running cloud assistant commands as a regular user identity.</p>.
     */
    public $Username;

    /**
     * @var string <p>Specifies the cos bucket address for the uploaded log, which must start with https, such as https://BucketName-123454321.cos.ap-beijing.myqcloud.com.</p>.
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string <P>Specify the directory for logs in the cos bucket. the directory naming has the following rules:</p><ol><li>use a combination of numbers, chinese and english, and visible characters, with a maximum length of 60.</li><li>use / to split the path and quickly create subdirectories.</li><li>consecutive / are not allowed; cannot start with /; cannot use .. as the folder name.</li></ol>.
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId <p>Command ID. call the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands</a> api to query command details.</p>.
     * @param string $CommandName <p>Command name. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 60 bytes.</p>.
     * @param string $Description <P>Command description. no more than 120 characters.</p>.
     * @param string $Content <p>The Base64-encoded command content, length cannot exceed 64KB.</p>.
     * @param string $CommandType <p>Command type. currently supports SHELL, POWERSHELL, BAT.</p>.
     * @param string $WorkingDirectory <P>Command execution path.</p>.
     * @param integer $Timeout <p>Command timeout time.</p><p>value range: [1, 86400].</p><p>unit: seconds.</p><p>default value: 60.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
     * @param string $DefaultParameters <p>The default value of custom parameters when the custom parameter feature is enabled. the field type is a json-encoded string, for example: {"varA": "222"}.<br>parameters must not be specified simultaneously for <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>a comprehensive modification is applied, meaning all new default values must be provided when modifying.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings of the command through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>the key is the custom parameter name, and the value is the default value of this parameter. both key and value are string-type.<br>there is an upper limit of 20 custom parameters.<br>custom parameter names must meet the following requirements: the upper limit of character quantity is 64, and the optional range is [a-zA-Z0-9-_].</p>.
     * @param array $DefaultParameterConfs <p>Custom parameter array. if no parameter value is provided when invoking the command, the default value here will be used to replace it.<br>parameters do not support specifying both <code>DefaultParameters</code> and <code>DefaultParameterConfs</code>.<br>this parameter can be modified only when EnableParameter of the command is true. obtain the EnableParameter settings through the <a href="https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1">DescribeCommands (query command details)</a> api.<br>up to 20 custom parameters are allowed.</p>.
     * @param string $Username <p>The username to run commands in a CVM or Lighthouse instance.<br>using minimum permission to execute commands is the best practice for permission management. we recommend running cloud assistant commands as a regular user identity.</p>.
     * @param string $OutputCOSBucketUrl <p>Specifies the cos bucket address for the uploaded log, which must start with https, such as https://BucketName-123454321.cos.ap-beijing.myqcloud.com.</p>.
     * @param string $OutputCOSKeyPrefix <P>Specify the directory for logs in the cos bucket. the directory naming has the following rules:</p><ol><li>use a combination of numbers, chinese and english, and visible characters, with a maximum length of 60.</li><li>use / to split the path and quickly create subdirectories.</li><li>consecutive / are not allowed; cannot start with /; cannot use .. as the folder name.</li></ol>.
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

        if (array_key_exists("DefaultParameterConfs",$param) and $param["DefaultParameterConfs"] !== null) {
            $this->DefaultParameterConfs = [];
            foreach ($param["DefaultParameterConfs"] as $key => $value){
                $obj = new DefaultParameterConf();
                $obj->deserialize($value);
                array_push($this->DefaultParameterConfs, $obj);
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
