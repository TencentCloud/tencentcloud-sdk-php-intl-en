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
 * ModifyServiceAccount request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getName() Obtain Service account name
 * @method void setName(string $Name) Set Service account name
 * @method string getDescription() Obtain Service account description
 * @method void setDescription(string $Description) Set Service account description
 * @method integer getDuration() Obtain Validity in days starting from the current day, It takes a higher priority than `ExpiresAt`.
 * @method void setDuration(integer $Duration) Set Validity in days starting from the current day, It takes a higher priority than `ExpiresAt`.
 * @method integer getExpiresAt() Obtain Expiry time (timestamp, in milliseconds)
 * @method void setExpiresAt(integer $ExpiresAt) Set Expiry time (timestamp, in milliseconds)
 * @method boolean getDisable() Obtain Whether to disable the service account
 * @method void setDisable(boolean $Disable) Set Whether to disable the service account
 * @method array getPermissions() Obtain Policy list
 * @method void setPermissions(array $Permissions) Set Policy list
 */
class ModifyServiceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Service account name
     */
    public $Name;

    /**
     * @var string Service account description
     */
    public $Description;

    /**
     * @var integer Validity in days starting from the current day, It takes a higher priority than `ExpiresAt`.
     */
    public $Duration;

    /**
     * @var integer Expiry time (timestamp, in milliseconds)
     */
    public $ExpiresAt;

    /**
     * @var boolean Whether to disable the service account
     */
    public $Disable;

    /**
     * @var array Policy list
     */
    public $Permissions;

    /**
     * @param string $RegistryId Instance ID
     * @param string $Name Service account name
     * @param string $Description Service account description
     * @param integer $Duration Validity in days starting from the current day, It takes a higher priority than `ExpiresAt`.
     * @param integer $ExpiresAt Expiry time (timestamp, in milliseconds)
     * @param boolean $Disable Whether to disable the service account
     * @param array $Permissions Policy list
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
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
