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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User tag info
 *
 * @method integer getId() Obtain tag ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set tag ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Tag name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Tag name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Tag value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Tag value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsExternalManage() Obtain Managed or not
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsExternalManage(boolean $IsExternalManage) Set Managed or not
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getManagePlatform() Obtain Tag hosting platform
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagePlatform(string $ManagePlatform) Set Tag hosting platform
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImportType() Obtain Import type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImportType(string $ImportType) Set Import type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserTagInfo extends AbstractModel
{
    /**
     * @var integer tag ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Tag name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Tag value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var boolean Managed or not
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsExternalManage;

    /**
     * @var string Tag hosting platform
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagePlatform;

    /**
     * @var string Import type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImportType;

    /**
     * @param integer $Id tag ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Tag name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Tag value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsExternalManage Managed or not
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ManagePlatform Tag hosting platform
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImportType Import type
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("IsExternalManage",$param) and $param["IsExternalManage"] !== null) {
            $this->IsExternalManage = $param["IsExternalManage"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }
    }
}
