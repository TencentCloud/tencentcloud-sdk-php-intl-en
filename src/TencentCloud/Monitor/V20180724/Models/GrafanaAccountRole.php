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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCMG account permission
 *
 * @method string getOrganization() Obtain Organization
 * @method void setOrganization(string $Organization) Set Organization
 * @method string getRole() Obtain Permission
 * @method void setRole(string $Role) Set Permission
 */
class GrafanaAccountRole extends AbstractModel
{
    /**
     * @var string Organization
     */
    public $Organization;

    /**
     * @var string Permission
     */
    public $Role;

    /**
     * @param string $Organization Organization
     * @param string $Role Permission
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
        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
