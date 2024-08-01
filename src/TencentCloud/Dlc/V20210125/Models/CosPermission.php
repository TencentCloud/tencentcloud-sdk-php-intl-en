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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS permissions
 *
 * @method string getCosPath() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosPath(string $CosPath) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPermissions() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissions(array $Permissions) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class CosPermission extends AbstractModel
{
    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosPath;

    /**
     * @var array Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Permissions;

    /**
     * @param string $CosPath Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Permissions Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
