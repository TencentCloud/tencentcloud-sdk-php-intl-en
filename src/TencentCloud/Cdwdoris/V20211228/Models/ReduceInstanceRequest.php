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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReduceInstance request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method array getDelHosts() Obtain Node list
 * @method void setDelHosts(array $DelHosts) Set Node list
 * @method string getType() Obtain Role (MATER/CORE), MASTER corresponds to FE, CORE corresponds to BE.
 * @method void setType(string $Type) Set Role (MATER/CORE), MASTER corresponds to FE, CORE corresponds to BE.
 * @method integer getHaType() Obtain High availability cluster type after scale-in. 0: non-high availability; 1: read high availability; 2: read-write high availability
 * @method void setHaType(integer $HaType) Set High availability cluster type after scale-in. 0: non-high availability; 1: read high availability; 2: read-write high availability
 */
class ReduceInstanceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var array Node list
     */
    public $DelHosts;

    /**
     * @var string Role (MATER/CORE), MASTER corresponds to FE, CORE corresponds to BE.
     */
    public $Type;

    /**
     * @var integer High availability cluster type after scale-in. 0: non-high availability; 1: read high availability; 2: read-write high availability
     */
    public $HaType;

    /**
     * @param string $InstanceId Cluster ID
     * @param array $DelHosts Node list
     * @param string $Type Role (MATER/CORE), MASTER corresponds to FE, CORE corresponds to BE.
     * @param integer $HaType High availability cluster type after scale-in. 0: non-high availability; 1: read high availability; 2: read-write high availability
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DelHosts",$param) and $param["DelHosts"] !== null) {
            $this->DelHosts = $param["DelHosts"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }
    }
}
