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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned list of eligible user data
 *
 * @method string getResourceId() Obtain Resource ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResourceType() Obtain Resource type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResource() Obtain Authorized resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResource(string $Resource) Set Authorized resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method InheritedForm getInheritedForm() Obtain Inheritance relationship
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInheritedForm(InheritedForm $InheritedForm) Set Inheritance relationship
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getApplicationAccounts() Obtain Application account
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationAccounts(array $ApplicationAccounts) Set Application account
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResourceName() Obtain Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AuthorizationUserResouceInfo extends AbstractModel
{
    /**
     * @var string Resource ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Resource type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Authorized resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var InheritedForm Inheritance relationship
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InheritedForm;

    /**
     * @var array Application account
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationAccounts;

    /**
     * @var string Resource name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceName;

    /**
     * @param string $ResourceId Resource ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceType Resource type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Resource Authorized resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param InheritedForm $InheritedForm Inheritance relationship
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ApplicationAccounts Application account
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceName Resource name
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("InheritedForm",$param) and $param["InheritedForm"] !== null) {
            $this->InheritedForm = new InheritedForm();
            $this->InheritedForm->deserialize($param["InheritedForm"]);
        }

        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
