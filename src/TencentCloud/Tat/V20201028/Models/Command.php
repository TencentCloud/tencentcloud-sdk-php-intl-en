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
 * Command details.
 *
 * @method string getCommandId() Obtain <p>Command ID.</p>.
 * @method void setCommandId(string $CommandId) Set <p>Command ID.</p>.
 * @method string getCommandName() Obtain <P>Command name.</p>.
 * @method void setCommandName(string $CommandName) Set <P>Command name.</p>.
 * @method string getDescription() Obtain <P>Command description.</p>.
 * @method void setDescription(string $Description) Set <P>Command description.</p>.
 * @method string getContent() Obtain <p>The Base64-encoded command content.</p>.
 * @method void setContent(string $Content) Set <p>The Base64-encoded command content.</p>.
 * @method string getCommandType() Obtain <p>Command type. value is one of SHELL, POWERSHELL, BAT.</p>.
 * @method void setCommandType(string $CommandType) Set <p>Command type. value is one of SHELL, POWERSHELL, BAT.</p>.
 * @method string getWorkingDirectory() Obtain <P>Command execution path.</p>.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set <P>Command execution path.</p>.
 * @method integer getTimeout() Obtain <p>Command timeout time.</p><p>unit: seconds.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
 * @method void setTimeout(integer $Timeout) Set <p>Command timeout time.</p><p>unit: seconds.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
 * @method string getCreatedTime() Obtain <p>Command creation time. the format is YYYY-MM-DDThh:MM:ssZ.</p>.
 * @method void setCreatedTime(string $CreatedTime) Set <p>Command creation time. the format is YYYY-MM-DDThh:MM:ssZ.</p>.
 * @method string getUpdatedTime() Obtain <p>Command last update time. format: YYYY-MM-DDThh:MM:ssZ.</p>.
 * @method void setUpdatedTime(string $UpdatedTime) Set <p>Command last update time. format: YYYY-MM-DDThh:MM:ssZ.</p>.
 * @method boolean getEnableParameter() Obtain <P>Whether to enable the custom parameter feature.</p>.
 * @method void setEnableParameter(boolean $EnableParameter) Set <P>Whether to enable the custom parameter feature.</p>.
 * @method string getDefaultParameters() Obtain <P>Default value of custom parameter.</p>.
 * @method void setDefaultParameters(string $DefaultParameters) Set <P>Default value of custom parameter.</p>.
 * @method array getDefaultParameterConfs() Obtain <P>Default value of custom parameters.</p>.
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) Set <P>Default value of custom parameters.</p>.
 * @method array getScenes() Obtain <P>Command association scenarios</p>.
 * @method void setScenes(array $Scenes) Set <P>Command association scenarios</p>.
 * @method string getFormattedDescription() Obtain <P>Structured description of the command. public commands have values, and user commands are empty strings.</p>.
 * @method void setFormattedDescription(string $FormattedDescription) Set <P>Structured description of the command. public commands have values, and user commands are empty strings.</p>.
 * @method string getCreatedBy() Obtain <p>Command creator.</p><p>enumeration value:</p><ul><li>TAT: public command</li><li>USER: personal creation command</li></ul>.
 * @method void setCreatedBy(string $CreatedBy) Set <p>Command creator.</p><p>enumeration value:</p><ul><li>TAT: public command</li><li>USER: personal creation command</li></ul>.
 * @method array getTags() Obtain <P>Tag list associated with the command.</p>.
 * @method void setTags(array $Tags) Set <P>Tag list associated with the command.</p>.
 * @method string getUsername() Obtain <P>Username to run command on the instance.</p>.
 * @method void setUsername(string $Username) Set <P>Username to run command on the instance.</p>.
 * @method string getOutputCOSBucketUrl() Obtain <P>The cos bucket address for log upload.</p>.
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set <P>The cos bucket address for log upload.</p>.
 * @method string getOutputCOSKeyPrefix() Obtain <P>Directory of logs in the cos bucket.</p>.
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set <P>Directory of logs in the cos bucket.</p>.
 */
class Command extends AbstractModel
{
    /**
     * @var string <p>Command ID.</p>.
     */
    public $CommandId;

    /**
     * @var string <P>Command name.</p>.
     */
    public $CommandName;

    /**
     * @var string <P>Command description.</p>.
     */
    public $Description;

    /**
     * @var string <p>The Base64-encoded command content.</p>.
     */
    public $Content;

    /**
     * @var string <p>Command type. value is one of SHELL, POWERSHELL, BAT.</p>.
     */
    public $CommandType;

    /**
     * @var string <P>Command execution path.</p>.
     */
    public $WorkingDirectory;

    /**
     * @var integer <p>Command timeout time.</p><p>unit: seconds.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
     */
    public $Timeout;

    /**
     * @var string <p>Command creation time. the format is YYYY-MM-DDThh:MM:ssZ.</p>.
     */
    public $CreatedTime;

    /**
     * @var string <p>Command last update time. format: YYYY-MM-DDThh:MM:ssZ.</p>.
     */
    public $UpdatedTime;

    /**
     * @var boolean <P>Whether to enable the custom parameter feature.</p>.
     */
    public $EnableParameter;

    /**
     * @var string <P>Default value of custom parameter.</p>.
     */
    public $DefaultParameters;

    /**
     * @var array <P>Default value of custom parameters.</p>.
     */
    public $DefaultParameterConfs;

    /**
     * @var array <P>Command association scenarios</p>.
     */
    public $Scenes;

    /**
     * @var string <P>Structured description of the command. public commands have values, and user commands are empty strings.</p>.
     */
    public $FormattedDescription;

    /**
     * @var string <p>Command creator.</p><p>enumeration value:</p><ul><li>TAT: public command</li><li>USER: personal creation command</li></ul>.
     */
    public $CreatedBy;

    /**
     * @var array <P>Tag list associated with the command.</p>.
     */
    public $Tags;

    /**
     * @var string <P>Username to run command on the instance.</p>.
     */
    public $Username;

    /**
     * @var string <P>The cos bucket address for log upload.</p>.
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string <P>Directory of logs in the cos bucket.</p>.
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId <p>Command ID.</p>.
     * @param string $CommandName <P>Command name.</p>.
     * @param string $Description <P>Command description.</p>.
     * @param string $Content <p>The Base64-encoded command content.</p>.
     * @param string $CommandType <p>Command type. value is one of SHELL, POWERSHELL, BAT.</p>.
     * @param string $WorkingDirectory <P>Command execution path.</p>.
     * @param integer $Timeout <p>Command timeout time.</p><p>unit: seconds.</p><p>when specifying the OutputCOSBucketUrl parameter, the timeout period includes the time taken to upload command output to COS.</p>.
     * @param string $CreatedTime <p>Command creation time. the format is YYYY-MM-DDThh:MM:ssZ.</p>.
     * @param string $UpdatedTime <p>Command last update time. format: YYYY-MM-DDThh:MM:ssZ.</p>.
     * @param boolean $EnableParameter <P>Whether to enable the custom parameter feature.</p>.
     * @param string $DefaultParameters <P>Default value of custom parameter.</p>.
     * @param array $DefaultParameterConfs <P>Default value of custom parameters.</p>.
     * @param array $Scenes <P>Command association scenarios</p>.
     * @param string $FormattedDescription <P>Structured description of the command. public commands have values, and user commands are empty strings.</p>.
     * @param string $CreatedBy <p>Command creator.</p><p>enumeration value:</p><ul><li>TAT: public command</li><li>USER: personal creation command</li></ul>.
     * @param array $Tags <P>Tag list associated with the command.</p>.
     * @param string $Username <P>Username to run command on the instance.</p>.
     * @param string $OutputCOSBucketUrl <P>The cos bucket address for log upload.</p>.
     * @param string $OutputCOSKeyPrefix <P>Directory of logs in the cos bucket.</p>.
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
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

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("FormattedDescription",$param) and $param["FormattedDescription"] !== null) {
            $this->FormattedDescription = $param["FormattedDescription"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
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
