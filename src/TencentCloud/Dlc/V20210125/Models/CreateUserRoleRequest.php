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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserRole request structure.
 *
 * @method string getArn() Obtain RoleArn info
 * @method void setArn(string $Arn) Set RoleArn info
 * @method string getDesc() Obtain Role description
 * @method void setDesc(string $Desc) Set Role description
 * @method string getName() Obtain Role name
 * @method void setName(string $Name) Set Role name
 * @method array getCosPermissionList() Obtain Authorized path list in cos
 * @method void setCosPermissionList(array $CosPermissionList) Set Authorized path list in cos
 * @method string getPermissionJson() Obtain cam policy json
 * @method void setPermissionJson(string $PermissionJson) Set cam policy json
 * @method integer getIsDefault() Obtain Whether resident is set to: 1 non-resident (default), 2 resident (only able to set one resident).
 * @method void setIsDefault(integer $IsDefault) Set Whether resident is set to: 1 non-resident (default), 2 resident (only able to set one resident).
 */
class CreateUserRoleRequest extends AbstractModel
{
    /**
     * @var string RoleArn info
     */
    public $Arn;

    /**
     * @var string Role description
     */
    public $Desc;

    /**
     * @var string Role name
     */
    public $Name;

    /**
     * @var array Authorized path list in cos
     */
    public $CosPermissionList;

    /**
     * @var string cam policy json
     */
    public $PermissionJson;

    /**
     * @var integer Whether resident is set to: 1 non-resident (default), 2 resident (only able to set one resident).
     */
    public $IsDefault;

    /**
     * @param string $Arn RoleArn info
     * @param string $Desc Role description
     * @param string $Name Role name
     * @param array $CosPermissionList Authorized path list in cos
     * @param string $PermissionJson cam policy json
     * @param integer $IsDefault Whether resident is set to: 1 non-resident (default), 2 resident (only able to set one resident).
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
        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CosPermissionList",$param) and $param["CosPermissionList"] !== null) {
            $this->CosPermissionList = [];
            foreach ($param["CosPermissionList"] as $key => $value){
                $obj = new CosPermission();
                $obj->deserialize($value);
                array_push($this->CosPermissionList, $obj);
            }
        }

        if (array_key_exists("PermissionJson",$param) and $param["PermissionJson"] !== null) {
            $this->PermissionJson = $param["PermissionJson"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
