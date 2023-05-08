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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvCreateInfo response structure.
 *
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method string getEnvName() Obtain Compute environment name
 * @method void setEnvName(string $EnvName) Set Compute environment name
 * @method string getEnvDescription() Obtain Compute environment description
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnvDescription(string $EnvDescription) Set Compute environment description
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getEnvType() Obtain Compute environment type. Only `MANAGED` is supported
 * @method void setEnvType(string $EnvType) Set Compute environment type. Only `MANAGED` is supported
 * @method EnvData getEnvData() Obtain Compute environment parameter
 * @method void setEnvData(EnvData $EnvData) Set Compute environment parameter
 * @method array getMountDataDisks() Obtain Data disk mounting option
 * @method void setMountDataDisks(array $MountDataDisks) Set Data disk mounting option
 * @method array getInputMappings() Obtain Input mapping
 * @method void setInputMappings(array $InputMappings) Set Input mapping
 * @method array getAuthentications() Obtain Authorization information
 * @method void setAuthentications(array $Authentications) Set Authorization information
 * @method array getNotifications() Obtain Notification information
 * @method void setNotifications(array $Notifications) Set Notification information
 * @method integer getDesiredComputeNodeCount() Obtain Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) Set Number of desired compute nodes
 * @method array getTags() Obtain Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComputeEnvCreateInfoResponse extends AbstractModel
{
    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var string Compute environment name
     */
    public $EnvName;

    /**
     * @var string Compute environment description
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnvDescription;

    /**
     * @var string Compute environment type. Only `MANAGED` is supported
     */
    public $EnvType;

    /**
     * @var EnvData Compute environment parameter
     */
    public $EnvData;

    /**
     * @var array Data disk mounting option
     */
    public $MountDataDisks;

    /**
     * @var array Input mapping
     */
    public $InputMappings;

    /**
     * @var array Authorization information
     */
    public $Authentications;

    /**
     * @var array Notification information
     */
    public $Notifications;

    /**
     * @var integer Number of desired compute nodes
     */
    public $DesiredComputeNodeCount;

    /**
     * @var array Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $EnvId Compute environment ID
     * @param string $EnvName Compute environment name
     * @param string $EnvDescription Compute environment description
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $EnvType Compute environment type. Only `MANAGED` is supported
     * @param EnvData $EnvData Compute environment parameter
     * @param array $MountDataDisks Data disk mounting option
     * @param array $InputMappings Input mapping
     * @param array $Authentications Authorization information
     * @param array $Notifications Notification information
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
     * @param array $Tags Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = [];
            foreach ($param["Notifications"] as $key => $value){
                $obj = new Notification();
                $obj->deserialize($value);
                array_push($this->Notifications, $obj);
            }
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
