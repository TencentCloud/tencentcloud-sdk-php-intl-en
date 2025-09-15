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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddNodeResourceConfig request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method string getResourceType() Obtain Node type: Core, Task, and Router.
 * @method void setResourceType(string $ResourceType) Set Node type: Core, Task, and Router.
 * @method Resource getResourceConfig() Obtain Resource details.
 * @method void setResourceConfig(Resource $ResourceConfig) Set Resource details.
 * @method integer getPayMode() Obtain Payment mode.
 * @method void setPayMode(integer $PayMode) Set Payment mode.
 * @method string getIsDefault() Obtain Whether default configuration applies, DEFAULT or BACKUP. If it is not specified, the default configuration does not apply.
 * @method void setIsDefault(string $IsDefault) Set Whether default configuration applies, DEFAULT or BACKUP. If it is not specified, the default configuration does not apply.
 * @method integer getZoneId() Obtain Region ID.
 * @method void setZoneId(integer $ZoneId) Set Region ID.
 * @method array getMultipleResourceConfig() Obtain When multiple specifications are added, details of the first specifications are in the ResourceConfig parameter, and those of the second to n-th are in the MultipleResourceConfig parameter.
 * @method void setMultipleResourceConfig(array $MultipleResourceConfig) Set When multiple specifications are added, details of the first specifications are in the ResourceConfig parameter, and those of the second to n-th are in the MultipleResourceConfig parameter.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 * @method string getHardwareResourceType() Obtain Hardware type.
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Hardware type.
 */
class AddNodeResourceConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var string Node type: Core, Task, and Router.
     */
    public $ResourceType;

    /**
     * @var Resource Resource details.
     */
    public $ResourceConfig;

    /**
     * @var integer Payment mode.
     */
    public $PayMode;

    /**
     * @var string Whether default configuration applies, DEFAULT or BACKUP. If it is not specified, the default configuration does not apply.
     */
    public $IsDefault;

    /**
     * @var integer Region ID.
     */
    public $ZoneId;

    /**
     * @var array When multiple specifications are added, details of the first specifications are in the ResourceConfig parameter, and those of the second to n-th are in the MultipleResourceConfig parameter.
     */
    public $MultipleResourceConfig;

    /**
     * @var string The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @var string Hardware type.
     */
    public $HardwareResourceType;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param string $ResourceType Node type: Core, Task, and Router.
     * @param Resource $ResourceConfig Resource details.
     * @param integer $PayMode Payment mode.
     * @param string $IsDefault Whether default configuration applies, DEFAULT or BACKUP. If it is not specified, the default configuration does not apply.
     * @param integer $ZoneId Region ID.
     * @param array $MultipleResourceConfig When multiple specifications are added, details of the first specifications are in the ResourceConfig parameter, and those of the second to n-th are in the MultipleResourceConfig parameter.
     * @param string $ResourceBaseType The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     * @param string $ComputeResourceId Computing resource ID.
     * @param string $HardwareResourceType Hardware type.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new Resource();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("MultipleResourceConfig",$param) and $param["MultipleResourceConfig"] !== null) {
            $this->MultipleResourceConfig = [];
            foreach ($param["MultipleResourceConfig"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->MultipleResourceConfig, $obj);
            }
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }
    }
}
