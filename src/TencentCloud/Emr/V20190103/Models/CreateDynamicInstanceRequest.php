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
 * CreateDynamicInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>EMR cluster ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>EMR cluster ID.</p>
 * @method string getServiceName() Obtain <p>Name of the service that supports DynamicInstance.</p>
 * @method void setServiceName(string $ServiceName) Set <p>Name of the service that supports DynamicInstance.</p>
 * @method string getDynamicInstanceType() Obtain <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
 * @method void setDynamicInstanceType(string $DynamicInstanceType) Set <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
 * @method DynamicInstanceForm getDynamicInstanceForm() Obtain <p>Form creation information.</p>
 * @method void setDynamicInstanceForm(DynamicInstanceForm $DynamicInstanceForm) Set <p>Form creation information.</p>
 * @method string getDynamicInstanceYaml() Obtain <p>YAML creation information.</p>
 * @method void setDynamicInstanceYaml(string $DynamicInstanceYaml) Set <p>YAML creation information.</p>
 */
class CreateDynamicInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>EMR cluster ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Name of the service that supports DynamicInstance.</p>
     */
    public $ServiceName;

    /**
     * @var string <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
     */
    public $DynamicInstanceType;

    /**
     * @var DynamicInstanceForm <p>Form creation information.</p>
     */
    public $DynamicInstanceForm;

    /**
     * @var string <p>YAML creation information.</p>
     */
    public $DynamicInstanceYaml;

    /**
     * @param string $InstanceId <p>EMR cluster ID.</p>
     * @param string $ServiceName <p>Name of the service that supports DynamicInstance.</p>
     * @param string $DynamicInstanceType <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
     * @param DynamicInstanceForm $DynamicInstanceForm <p>Form creation information.</p>
     * @param string $DynamicInstanceYaml <p>YAML creation information.</p>
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("DynamicInstanceType",$param) and $param["DynamicInstanceType"] !== null) {
            $this->DynamicInstanceType = $param["DynamicInstanceType"];
        }

        if (array_key_exists("DynamicInstanceForm",$param) and $param["DynamicInstanceForm"] !== null) {
            $this->DynamicInstanceForm = new DynamicInstanceForm();
            $this->DynamicInstanceForm->deserialize($param["DynamicInstanceForm"]);
        }

        if (array_key_exists("DynamicInstanceYaml",$param) and $param["DynamicInstanceYaml"] !== null) {
            $this->DynamicInstanceYaml = $param["DynamicInstanceYaml"];
        }
    }
}
