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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tenant basic information
 *
 * @method string getTenantId() Obtain Tenant IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTenantName() Obtain Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenantName(string $TenantName) Set Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDisplayName() Obtain Tenant display name, usually the Chinese name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Tenant display name, usually the Chinese name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUserId() Obtain Tenant Main Account
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUserId(string $OwnerUserId) Set Tenant Main Account
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain Tenant's additional configuration parameters, in JSON format string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set Tenant's additional configuration parameters, in JSON format string
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BaseTenant extends AbstractModel
{
    /**
     * @var string Tenant IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TenantId;

    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TenantName;

    /**
     * @var string Tenant display name, usually the Chinese name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DisplayName;

    /**
     * @var string RemarksNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Tenant Main Account
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUserId;

    /**
     * @var string Tenant's additional configuration parameters, in JSON format string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @param string $TenantId Tenant IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TenantName Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DisplayName Tenant display name, usually the Chinese name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description RemarksNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUserId Tenant Main Account
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params Tenant's additional configuration parameters, in JSON format string
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("TenantName",$param) and $param["TenantName"] !== null) {
            $this->TenantName = $param["TenantName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
