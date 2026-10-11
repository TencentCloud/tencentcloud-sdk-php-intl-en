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
 * Deployment information of the role.
 *
 * @method string getComponentName() Obtain Role name.
 * @method void setComponentName(string $ComponentName) Set Role name.
 * @method array getDeployHostUuidList() Obtain List of UUIDs of nodes to be installed.
 * @method void setDeployHostUuidList(array $DeployHostUuidList) Set List of UUIDs of nodes to be installed.
 */
class ComponentDeployInfo extends AbstractModel
{
    /**
     * @var string Role name.
     */
    public $ComponentName;

    /**
     * @var array List of UUIDs of nodes to be installed.
     */
    public $DeployHostUuidList;

    /**
     * @param string $ComponentName Role name.
     * @param array $DeployHostUuidList List of UUIDs of nodes to be installed.
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("DeployHostUuidList",$param) and $param["DeployHostUuidList"] !== null) {
            $this->DeployHostUuidList = $param["DeployHostUuidList"];
        }
    }
}
