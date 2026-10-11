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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Console role information (external standard version, decoupled from internal Role)
 *
 * @method RoleBasicInfo getBasicInfo() Obtain Basic information about the role
 * @method void setBasicInfo(RoleBasicInfo $BasicInfo) Set Basic information about the role
 * @method RoleMetaData getMetaData() Obtain Role meta-information.
 * @method void setMetaData(RoleMetaData $MetaData) Set Role meta-information.
 * @method array getPermissions() Obtain Role permission
 * @method void setPermissions(array $Permissions) Set Role permission
 */
class ConsoleRoleInfo extends AbstractModel
{
    /**
     * @var RoleBasicInfo Basic information about the role
     */
    public $BasicInfo;

    /**
     * @var RoleMetaData Role meta-information.
     */
    public $MetaData;

    /**
     * @var array Role permission
     */
    public $Permissions;

    /**
     * @param RoleBasicInfo $BasicInfo Basic information about the role
     * @param RoleMetaData $MetaData Role meta-information.
     * @param array $Permissions Role permission
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new RoleBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new RoleMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new RolePermission();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
