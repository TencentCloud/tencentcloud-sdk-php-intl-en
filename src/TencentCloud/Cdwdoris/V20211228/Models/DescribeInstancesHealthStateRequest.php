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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesHealthState request structure.
 *
 * @method string getInstanceID() Obtain Cluster ID
 * @method void setInstanceID(string $InstanceID) Set Cluster ID
 * @method string getInput() Obtain If this parameter is left blank, all clusters corresponding to the current appId are involved. Otherwise, a specific cluster is involved.
 * @method void setInput(string $Input) Set If this parameter is left blank, all clusters corresponding to the current appId are involved. Otherwise, a specific cluster is involved.
 */
class DescribeInstancesHealthStateRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     * @deprecated
     */
    public $InstanceID;

    /**
     * @var string If this parameter is left blank, all clusters corresponding to the current appId are involved. Otherwise, a specific cluster is involved.
     */
    public $Input;

    /**
     * @param string $InstanceID Cluster ID
     * @param string $Input If this parameter is left blank, all clusters corresponding to the current appId are involved. Otherwise, a specific cluster is involved.
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }
    }
}
