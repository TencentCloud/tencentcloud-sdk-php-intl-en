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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tencent Healthcare Omics Platform environment details
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getName() Obtain Environment name
 * @method void setName(string $Name) Set Environment name
 * @method string getDescription() Obtain Environment description information
 * @method void setDescription(string $Description) Set Environment description information
 * @method string getRegion() Obtain Environment region
 * @method void setRegion(string $Region) Set Environment region
 * @method string getType() Obtain Environment type. Valid values:
- KUBERNETES: Kubernetes container cluster
- HPC:HPC HCC 
 * @method void setType(string $Type) Set Environment type. Valid values:
- KUBERNETES: Kubernetes container cluster
- HPC:HPC HCC 
 * @method string getStatus() Obtain Environment status. Valid values:
- INITIALIZING: Creating
- INITIALIZATION_ERROR: Creation failed
- RUNNING: Running
- ERROR: Exceptional
- DELETING: Deleting
- DELETE_ERROR: Deletion failed.
 * @method void setStatus(string $Status) Set Environment status. Valid values:
- INITIALIZING: Creating
- INITIALIZATION_ERROR: Creation failed
- RUNNING: Running
- ERROR: Exceptional
- DELETING: Deleting
- DELETE_ERROR: Deletion failed.
 * @method boolean getAvailable() Obtain Whether the environment is available. The environment needs to be available before computing runs can be delivered.
 * @method void setAvailable(boolean $Available) Set Whether the environment is available. The environment needs to be available before computing runs can be delivered.
 * @method boolean getIsDefault() Obtain Whether the environment is the default environment.
 * @method void setIsDefault(boolean $IsDefault) Set Whether the environment is the default environment.
 * @method boolean getIsManaged() Obtain Whether the environment is a managed environment.
 * @method void setIsManaged(boolean $IsManaged) Set Whether the environment is a managed environment.
 * @method string getMessage() Obtain Environment information
 * @method void setMessage(string $Message) Set Environment information
 * @method ResourceIds getResourceIds() Obtain Cloud resource ID
 * @method void setResourceIds(ResourceIds $ResourceIds) Set Cloud resource ID
 * @method string getLastWorkflowUuid() Obtain The UUID of the previous workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastWorkflowUuid(string $LastWorkflowUuid) Set The UUID of the previous workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreationTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreationTime(string $CreationTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Environment extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Environment name
     */
    public $Name;

    /**
     * @var string Environment description information
     */
    public $Description;

    /**
     * @var string Environment region
     */
    public $Region;

    /**
     * @var string Environment type. Valid values:
- KUBERNETES: Kubernetes container cluster
- HPC:HPC HCC 
     */
    public $Type;

    /**
     * @var string Environment status. Valid values:
- INITIALIZING: Creating
- INITIALIZATION_ERROR: Creation failed
- RUNNING: Running
- ERROR: Exceptional
- DELETING: Deleting
- DELETE_ERROR: Deletion failed.
     */
    public $Status;

    /**
     * @var boolean Whether the environment is available. The environment needs to be available before computing runs can be delivered.
     */
    public $Available;

    /**
     * @var boolean Whether the environment is the default environment.
     */
    public $IsDefault;

    /**
     * @var boolean Whether the environment is a managed environment.
     */
    public $IsManaged;

    /**
     * @var string Environment information
     */
    public $Message;

    /**
     * @var ResourceIds Cloud resource ID
     */
    public $ResourceIds;

    /**
     * @var string The UUID of the previous workflow
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastWorkflowUuid;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreationTime;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $Name Environment name
     * @param string $Description Environment description information
     * @param string $Region Environment region
     * @param string $Type Environment type. Valid values:
- KUBERNETES: Kubernetes container cluster
- HPC:HPC HCC 
     * @param string $Status Environment status. Valid values:
- INITIALIZING: Creating
- INITIALIZATION_ERROR: Creation failed
- RUNNING: Running
- ERROR: Exceptional
- DELETING: Deleting
- DELETE_ERROR: Deletion failed.
     * @param boolean $Available Whether the environment is available. The environment needs to be available before computing runs can be delivered.
     * @param boolean $IsDefault Whether the environment is the default environment.
     * @param boolean $IsManaged Whether the environment is a managed environment.
     * @param string $Message Environment information
     * @param ResourceIds $ResourceIds Cloud resource ID
     * @param string $LastWorkflowUuid The UUID of the previous workflow
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreationTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("IsManaged",$param) and $param["IsManaged"] !== null) {
            $this->IsManaged = $param["IsManaged"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = new ResourceIds();
            $this->ResourceIds->deserialize($param["ResourceIds"]);
        }

        if (array_key_exists("LastWorkflowUuid",$param) and $param["LastWorkflowUuid"] !== null) {
            $this->LastWorkflowUuid = $param["LastWorkflowUuid"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }
    }
}
