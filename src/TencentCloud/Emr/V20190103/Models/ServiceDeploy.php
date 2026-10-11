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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node deployment configuration information, which is provided for the Terraform team.
 *
 * @method string getSoftwareName() Obtain <p>Component name.</p>
 * @method void setSoftwareName(string $SoftwareName) Set <p>Component name.</p>
 * @method array getRoles() Obtain <p>Role name under the component.</p>
 * @method void setRoles(array $Roles) Set <p>Role name under the component.</p>
 */
class ServiceDeploy extends AbstractModel
{
    /**
     * @var string <p>Component name.</p>
     */
    public $SoftwareName;

    /**
     * @var array <p>Role name under the component.</p>
     */
    public $Roles;

    /**
     * @param string $SoftwareName <p>Component name.</p>
     * @param array $Roles <p>Role name under the component.</p>
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
        if (array_key_exists("SoftwareName",$param) and $param["SoftwareName"] !== null) {
            $this->SoftwareName = $param["SoftwareName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }
    }
}
