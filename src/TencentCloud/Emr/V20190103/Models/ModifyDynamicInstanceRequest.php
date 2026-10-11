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
 * ModifyDynamicInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>EMR cluster ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>EMR cluster ID.</p>
 * @method string getServiceName() Obtain <p>Name of the service that supports DynamicInstance.</p>
 * @method void setServiceName(string $ServiceName) Set <p>Name of the service that supports DynamicInstance.</p>
 * @method string getDynamicInstanceType() Obtain <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
 * @method void setDynamicInstanceType(string $DynamicInstanceType) Set <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
 * @method integer getDynamicInstanceId() Obtain <p>DynamicInstance ID.</p>
 * @method void setDynamicInstanceId(integer $DynamicInstanceId) Set <p>DynamicInstance ID.</p>
 * @method ModifyDynamicInstanceForm getDynamicInstanceForm() Obtain <p>Updated form configuration (the latest content must be passed for each update field, and it must be complete).</p>
 * @method void setDynamicInstanceForm(ModifyDynamicInstanceForm $DynamicInstanceForm) Set <p>Updated form configuration (the latest content must be passed for each update field, and it must be complete).</p>
 * @method string getDynamicInstanceYaml() Obtain <p>Updates the YAML configuration.</p>
 * @method void setDynamicInstanceYaml(string $DynamicInstanceYaml) Set <p>Updates the YAML configuration.</p>
 */
class ModifyDynamicInstanceRequest extends AbstractModel
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
     * @var integer <p>DynamicInstance ID.</p>
     */
    public $DynamicInstanceId;

    /**
     * @var ModifyDynamicInstanceForm <p>Updated form configuration (the latest content must be passed for each update field, and it must be complete).</p>
     */
    public $DynamicInstanceForm;

    /**
     * @var string <p>Updates the YAML configuration.</p>
     */
    public $DynamicInstanceYaml;

    /**
     * @param string $InstanceId <p>EMR cluster ID.</p>
     * @param string $ServiceName <p>Name of the service that supports DynamicInstance.</p>
     * @param string $DynamicInstanceType <p>DynamicInstance type.</p><p>Enumeration values:</p><ul><li>RayCluster: RayCluster type</li></ul>
     * @param integer $DynamicInstanceId <p>DynamicInstance ID.</p>
     * @param ModifyDynamicInstanceForm $DynamicInstanceForm <p>Updated form configuration (the latest content must be passed for each update field, and it must be complete).</p>
     * @param string $DynamicInstanceYaml <p>Updates the YAML configuration.</p>
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

        if (array_key_exists("DynamicInstanceId",$param) and $param["DynamicInstanceId"] !== null) {
            $this->DynamicInstanceId = $param["DynamicInstanceId"];
        }

        if (array_key_exists("DynamicInstanceForm",$param) and $param["DynamicInstanceForm"] !== null) {
            $this->DynamicInstanceForm = new ModifyDynamicInstanceForm();
            $this->DynamicInstanceForm->deserialize($param["DynamicInstanceForm"]);
        }

        if (array_key_exists("DynamicInstanceYaml",$param) and $param["DynamicInstanceYaml"] !== null) {
            $this->DynamicInstanceYaml = $param["DynamicInstanceYaml"];
        }
    }
}
