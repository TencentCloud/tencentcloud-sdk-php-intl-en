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
 * Execution activity details.
 *
 * @method string getInvocationId() Obtain Execution activity ID.
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID.
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
 * @method string getInvocationStatus() Obtain Execution task status. Valid values:
<li> PENDING: Pending 
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed
<li> TIMEOUT: Command timed out
<li> PARTIAL_FAILED: Partial failure
 * @method void setInvocationStatus(string $InvocationStatus) Set Execution task status. Valid values:
<li> PENDING: Pending 
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed
<li> TIMEOUT: Command timed out
<li> PARTIAL_FAILED: Partial failure
 * @method array getInvocationTaskBasicInfoSet() Obtain Execution task information list.
 * @method void setInvocationTaskBasicInfoSet(array $InvocationTaskBasicInfoSet) Set Execution task information list.
 * @method string getDescription() Obtain Execution activity description.
 * @method void setDescription(string $Description) Set Execution activity description.
 * @method string getStartTime() Obtain Start time of the execution activity.
 * @method void setStartTime(string $StartTime) Set Start time of the execution activity.
 * @method string getEndTime() Obtain End time of the execution activity.
 * @method void setEndTime(string $EndTime) Set End time of the execution activity.
 * @method string getCreatedTime() Obtain Time when the execution activity is created.
 * @method void setCreatedTime(string $CreatedTime) Set Time when the execution activity is created.
 * @method string getUpdatedTime() Obtain Time when the execution activity is updated.
 * @method void setUpdatedTime(string $UpdatedTime) Set Time when the execution activity is updated.
 * @method string getParameters() Obtain Values of custom parameters.
 * @method void setParameters(string $Parameters) Set Values of custom parameters.
 * @method string getDefaultParameters() Obtain Default custom parameter value.
 * @method void setDefaultParameters(string $DefaultParameters) Set Default custom parameter value.
 * @method string getInstanceKind() Obtain Type of the instance executing the command. Valid values: `CVM`, `LIGHTHOUSE`.
 * @method void setInstanceKind(string $InstanceKind) Set Type of the instance executing the command. Valid values: `CVM`, `LIGHTHOUSE`.
 * @method string getUsername() Obtain The user who executes the command on the instance.
 * @method void setUsername(string $Username) Set The user who executes the command on the instance.
 * @method string getInvocationSource() Obtain Invocation source.
 * @method void setInvocationSource(string $InvocationSource) Set Invocation source.
 * @method string getCommandContent() Obtain Base64-encoded command
 * @method void setCommandContent(string $CommandContent) Set Base64-encoded command
 * @method string getCommandType() Obtain Command type
 * @method void setCommandType(string $CommandType) Set Command type
 * @method integer getTimeout() Obtain Command timeout period, in seconds.
 * @method void setTimeout(integer $Timeout) Set Command timeout period, in seconds.
 * @method string getWorkingDirectory() Obtain Working directory for executing the command.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Working directory for executing the command.
 * @method string getOutputCOSBucketUrl() Obtain The COS bucket URL for uploading logs.
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set The COS bucket URL for uploading logs.
 * @method string getOutputCOSKeyPrefix() Obtain The COS bucket directory where the logs are saved.
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set The COS bucket directory where the logs are saved.
 */
class Invocation extends AbstractModel
{
    /**
     * @var string Execution activity ID.
     */
    public $InvocationId;

    /**
     * @var string Command ID.
     */
    public $CommandId;

    /**
     * @var string Execution task status. Valid values:
<li> PENDING: Pending 
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed
<li> TIMEOUT: Command timed out
<li> PARTIAL_FAILED: Partial failure
     */
    public $InvocationStatus;

    /**
     * @var array Execution task information list.
     */
    public $InvocationTaskBasicInfoSet;

    /**
     * @var string Execution activity description.
     */
    public $Description;

    /**
     * @var string Start time of the execution activity.
     */
    public $StartTime;

    /**
     * @var string End time of the execution activity.
     */
    public $EndTime;

    /**
     * @var string Time when the execution activity is created.
     */
    public $CreatedTime;

    /**
     * @var string Time when the execution activity is updated.
     */
    public $UpdatedTime;

    /**
     * @var string Values of custom parameters.
     */
    public $Parameters;

    /**
     * @var string Default custom parameter value.
     */
    public $DefaultParameters;

    /**
     * @var string Type of the instance executing the command. Valid values: `CVM`, `LIGHTHOUSE`.
     */
    public $InstanceKind;

    /**
     * @var string The user who executes the command on the instance.
     */
    public $Username;

    /**
     * @var string Invocation source.
     */
    public $InvocationSource;

    /**
     * @var string Base64-encoded command
     */
    public $CommandContent;

    /**
     * @var string Command type
     */
    public $CommandType;

    /**
     * @var integer Command timeout period, in seconds.
     */
    public $Timeout;

    /**
     * @var string Working directory for executing the command.
     */
    public $WorkingDirectory;

    /**
     * @var string The COS bucket URL for uploading logs.
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string The COS bucket directory where the logs are saved.
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $InvocationId Execution activity ID.
     * @param string $CommandId Command ID.
     * @param string $InvocationStatus Execution task status. Valid values:
<li> PENDING: Pending 
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed
<li> TIMEOUT: Command timed out
<li> PARTIAL_FAILED: Partial failure
     * @param array $InvocationTaskBasicInfoSet Execution task information list.
     * @param string $Description Execution activity description.
     * @param string $StartTime Start time of the execution activity.
     * @param string $EndTime End time of the execution activity.
     * @param string $CreatedTime Time when the execution activity is created.
     * @param string $UpdatedTime Time when the execution activity is updated.
     * @param string $Parameters Values of custom parameters.
     * @param string $DefaultParameters Default custom parameter value.
     * @param string $InstanceKind Type of the instance executing the command. Valid values: `CVM`, `LIGHTHOUSE`.
     * @param string $Username The user who executes the command on the instance.
     * @param string $InvocationSource Invocation source.
     * @param string $CommandContent Base64-encoded command
     * @param string $CommandType Command type
     * @param integer $Timeout Command timeout period, in seconds.
     * @param string $WorkingDirectory Working directory for executing the command.
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
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InvocationStatus",$param) and $param["InvocationStatus"] !== null) {
            $this->InvocationStatus = $param["InvocationStatus"];
        }

        if (array_key_exists("InvocationTaskBasicInfoSet",$param) and $param["InvocationTaskBasicInfoSet"] !== null) {
            $this->InvocationTaskBasicInfoSet = [];
            foreach ($param["InvocationTaskBasicInfoSet"] as $key => $value){
                $obj = new InvocationTaskBasicInfo();
                $obj->deserialize($value);
                array_push($this->InvocationTaskBasicInfoSet, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("InstanceKind",$param) and $param["InstanceKind"] !== null) {
            $this->InstanceKind = $param["InstanceKind"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("InvocationSource",$param) and $param["InvocationSource"] !== null) {
            $this->InvocationSource = $param["InvocationSource"];
        }

        if (array_key_exists("CommandContent",$param) and $param["CommandContent"] !== null) {
            $this->CommandContent = $param["CommandContent"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
