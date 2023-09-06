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
 * ModifyCustomAccount request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getName() Obtain Custom account name
 * @method void setName(string $Name) Set Custom account name
 * @method string getDescription() Obtain Custom account description
 * @method void setDescription(string $Description) Set Custom account description
 * @method integer getDuration() Obtain Validity in days starting from the current day. It takes a higher priority than `ExpiresAt`.
 * @method void setDuration(integer $Duration) Set Validity in days starting from the current day. It takes a higher priority than `ExpiresAt`.
 * @method integer getExpiresAt() Obtain Expiry time of the custom account (timestamp)
 * @method void setExpiresAt(integer $ExpiresAt) Set Expiry time of the custom account (timestamp)
 * @method boolean getDisable() Obtain Whether to disable the custom account
 * @method void setDisable(boolean $Disable) Set Whether to disable the custom account
 * @method array getPermissions() Obtain Policy list
 * @method void setPermissions(array $Permissions) Set Policy list
 */
class ModifyCustomAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Custom account name
     */
    public $Name;

    /**
     * @var string Custom account description
     */
    public $Description;

    /**
     * @var integer Validity in days starting from the current day. It takes a higher priority than `ExpiresAt`.
     */
    public $Duration;

    /**
     * @var integer Expiry time of the custom account (timestamp)
     */
    public $ExpiresAt;

    /**
     * @var boolean Whether to disable the custom account
     */
    public $Disable;

    /**
     * @var array Policy list
     */
    public $Permissions;

    /**
     * @param string $RegistryId Instance ID
     * @param string $Name Custom account name
     * @param string $Description Custom account description
     * @param integer $Duration Validity in days starting from the current day. It takes a higher priority than `ExpiresAt`.
     * @param integer $ExpiresAt Expiry time of the custom account (timestamp)
     * @param boolean $Disable Whether to disable the custom account
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
