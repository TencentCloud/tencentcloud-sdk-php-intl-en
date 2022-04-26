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
 * Command details.
 *
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
 * @method string getCommandName() Obtain Command name.
 * @method void setCommandName(string $CommandName) Set Command name.
 * @method string getDescription() Obtain Command description.
 * @method void setDescription(string $Description) Set Command description.
 * @method string getContent() Obtain Base64-encoded command.
 * @method void setContent(string $Content) Set Base64-encoded command.
 * @method string getCommandType() Obtain Command type.
 * @method void setCommandType(string $CommandType) Set Command type.
 * @method string getWorkingDirectory() Obtain Command execution path.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Command execution path.
 * @method integer getTimeout() Obtain Command timeout period.
 * @method void setTimeout(integer $Timeout) Set Command timeout period.
 * @method string getCreatedTime() Obtain Command creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Command creation time.
 * @method string getUpdatedTime() Obtain Command update time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Command update time.
 * @method boolean getEnableParameter() Obtain Whether to enable the custom parameter feature.
 * @method void setEnableParameter(boolean $EnableParameter) Set Whether to enable the custom parameter feature.
 * @method string getDefaultParameters() Obtain Default custom parameter value.
 * @method void setDefaultParameters(string $DefaultParameters) Set Default custom parameter value.
 * @method string getFormattedDescription() Obtain Formatted description of the command. This parameter is an empty string for user commands and contains values for public commands.
 * @method void setFormattedDescription(string $FormattedDescription) Set Formatted description of the command. This parameter is an empty string for user commands and contains values for public commands.
 * @method string getCreatedBy() Obtain Command creator. `TAT` indicates a public command and `USER` indicates a personal command.
 * @method void setCreatedBy(string $CreatedBy) Set Command creator. `TAT` indicates a public command and `USER` indicates a personal command.
 * @method array getTags() Obtain The list of tags bound to the command.
 * @method void setTags(array $Tags) Set The list of tags bound to the command.
 * @method string getUsername() Obtain The user who executes the command on the instance.
 * @method void setUsername(string $Username) Set The user who executes the command on the instance.
 * @method string getOutputCOSBucketUrl() Obtain The COS bucket URL for uploading logs.
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set The COS bucket URL for uploading logs.
 * @method string getOutputCOSKeyPrefix() Obtain The COS bucket directory where the logs are saved.
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set The COS bucket directory where the logs are saved.
 */
class Command extends AbstractModel
{
    /**
     * @var string Command ID.
     */
    public $CommandId;

    /**
     * @var string Command name.
     */
    public $CommandName;

    /**
     * @var string Command description.
     */
    public $Description;

    /**
     * @var string Base64-encoded command.
     */
    public $Content;

    /**
     * @var string Command type.
     */
    public $CommandType;

    /**
     * @var string Command execution path.
     */
    public $WorkingDirectory;

    /**
     * @var integer Command timeout period.
     */
    public $Timeout;

    /**
     * @var string Command creation time.
     */
    public $CreatedTime;

    /**
     * @var string Command update time.
     */
    public $UpdatedTime;

    /**
     * @var boolean Whether to enable the custom parameter feature.
     */
    public $EnableParameter;

    /**
     * @var string Default custom parameter value.
     */
    public $DefaultParameters;

    /**
     * @var string Formatted description of the command. This parameter is an empty string for user commands and contains values for public commands.
     */
    public $FormattedDescription;

    /**
     * @var string Command creator. `TAT` indicates a public command and `USER` indicates a personal command.
     */
    public $CreatedBy;

    /**
     * @var array The list of tags bound to the command.
     */
    public $Tags;

    /**
     * @var string The user who executes the command on the instance.
     */
    public $Username;

    /**
     * @var string The COS bucket URL for uploading logs.
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string The COS bucket directory where the logs are saved.
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId Command ID.
     * @param string $CommandName Command name.
     * @param string $Description Command description.
     * @param string $Content Base64-encoded command.
     * @param string $CommandType Command type.
     * @param string $WorkingDirectory Command execution path.
     * @param integer $Timeout Command timeout period.
     * @param string $CreatedTime Command creation time.
     * @param string $UpdatedTime Command update time.
     * @param boolean $EnableParameter Whether to enable the custom parameter feature.
     * @param string $DefaultParameters Default custom parameter value.
     * @param string $FormattedDescription Formatted description of the command. This parameter is an empty string for user commands and contains values for public commands.
     * @param string $CreatedBy Command creator. `TAT` indicates a public command and `USER` indicates a personal command.
     * @param array $Tags The list of tags bound to the command.
     * @param string $Username The user who executes the command on the instance.
     * @param string $OutputCOSBucketUrl The COS bucket URL for uploading logs.
     * @param string $OutputCOSKeyPrefix The COS bucket directory where the logs are saved.
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
