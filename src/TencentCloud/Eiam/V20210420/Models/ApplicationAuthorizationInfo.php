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
 * Application information list.
 *
 * @method array getApplicationAccounts() Obtain List of the user's accounts under authorized applications
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationAccounts(array $ApplicationAccounts) Set List of the user's accounts under authorized applications
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method InheritedForm getInheritedForm() Obtain List of IDs of the user's user groups and organization nodes that have access to the application.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInheritedForm(InheritedForm $InheritedForm) Set List of IDs of the user's user groups and organization nodes that have access to the application.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Application creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Application creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApplicationAuthorizationInfo extends AbstractModel
{
    /**
     * @var array List of the user's accounts under authorized applications
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationAccounts;

    /**
     * @var string Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var InheritedForm List of IDs of the user's user groups and organization nodes that have access to the application.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InheritedForm;

    /**
     * @var string Application name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Application creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @param array $ApplicationAccounts List of the user's accounts under authorized applications
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param InheritedForm $InheritedForm List of IDs of the user's user groups and organization nodes that have access to the application.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Application creation time.
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
        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("InheritedForm",$param) and $param["InheritedForm"] !== null) {
            $this->InheritedForm = new InheritedForm();
            $this->InheritedForm->deserialize($param["InheritedForm"]);
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
