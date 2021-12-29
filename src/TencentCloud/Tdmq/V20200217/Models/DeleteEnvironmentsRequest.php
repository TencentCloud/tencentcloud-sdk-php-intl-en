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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEnvironments request structure.
 *
 * @method array getEnvironmentIds() Obtain Array of environments (namespaces). Up to 20 environments can be deleted at a time.
 * @method void setEnvironmentIds(array $EnvironmentIds) Set Array of environments (namespaces). Up to 20 environments can be deleted at a time.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 */
class DeleteEnvironmentsRequest extends AbstractModel
{
    /**
     * @var array Array of environments (namespaces). Up to 20 environments can be deleted at a time.
     */
    public $EnvironmentIds;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @param array $EnvironmentIds Array of environments (namespaces). Up to 20 environments can be deleted at a time.
     * @param string $ClusterId Pulsar cluster ID
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
        if (array_key_exists("EnvironmentIds",$param) and $param["EnvironmentIds"] !== null) {
            $this->EnvironmentIds = $param["EnvironmentIds"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
