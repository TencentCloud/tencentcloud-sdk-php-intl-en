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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service account
 *
 * @method string getName() Obtain Service account name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Service account name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDisable() Obtain Whether to disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDisable(boolean $Disable) Set Whether to disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getExpiresAt() Obtain Expiry time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExpiresAt(integer $ExpiresAt) Set Expiry time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPermissions() Obtain Policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPermissions(array $Permissions) Set Policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ServiceAccount extends AbstractModel
{
    /**
     * @var string Service account name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Description
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var boolean Whether to disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Disable;

    /**
     * @var integer Expiry time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExpiresAt;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array Policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Permissions;

    /**
     * @param string $Name Service account name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Disable Whether to disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ExpiresAt Expiry time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Permissions Policy
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new Permission();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
