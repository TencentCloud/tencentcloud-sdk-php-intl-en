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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration source address information.
 *
 * @method string getEndpoint() Obtain Address information, supporting domain names or IP addresses.
 * @method void setEndpoint(string $Endpoint) Set Address information, supporting domain names or IP addresses.
 * @method array getStandbyEndpointSet() Obtain Backup address information.
 * @method void setStandbyEndpointSet(array $StandbyEndpointSet) Set Backup address information.
 */
class IncrementalMigrationHttpEndpointInfo extends AbstractModel
{
    /**
     * @var string Address information, supporting domain names or IP addresses.
     */
    public $Endpoint;

    /**
     * @var array Backup address information.
     */
    public $StandbyEndpointSet;

    /**
     * @param string $Endpoint Address information, supporting domain names or IP addresses.
     * @param array $StandbyEndpointSet Backup address information.
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("StandbyEndpointSet",$param) and $param["StandbyEndpointSet"] !== null) {
            $this->StandbyEndpointSet = $param["StandbyEndpointSet"];
        }
    }
}
