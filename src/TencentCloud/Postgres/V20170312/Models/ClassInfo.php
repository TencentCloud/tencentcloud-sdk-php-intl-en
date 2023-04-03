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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database instance specification
 *
 * @method string getSpecCode() Obtain Specification ID
 * @method void setSpecCode(string $SpecCode) Set Specification ID
 * @method integer getCPU() Obtain Number of CPU cores
 * @method void setCPU(integer $CPU) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory size in MB
 * @method void setMemory(integer $Memory) Set Memory size in MB
 * @method integer getMaxStorage() Obtain Maximum storage capacity in GB supported by this specification
 * @method void setMaxStorage(integer $MaxStorage) Set Maximum storage capacity in GB supported by this specification
 * @method integer getMinStorage() Obtain Minimum storage capacity in GB supported by this specification
 * @method void setMinStorage(integer $MinStorage) Set Minimum storage capacity in GB supported by this specification
 * @method integer getQPS() Obtain Estimated QPS for this specification
 * @method void setQPS(integer $QPS) Set Estimated QPS for this specification
 */
class ClassInfo extends AbstractModel
{
    /**
     * @var string Specification ID
     */
    public $SpecCode;

    /**
     * @var integer Number of CPU cores
     */
    public $CPU;

    /**
     * @var integer Memory size in MB
     */
    public $Memory;

    /**
     * @var integer Maximum storage capacity in GB supported by this specification
     */
    public $MaxStorage;

    /**
     * @var integer Minimum storage capacity in GB supported by this specification
     */
    public $MinStorage;

    /**
     * @var integer Estimated QPS for this specification
     */
    public $QPS;

    /**
     * @param string $SpecCode Specification ID
     * @param integer $CPU Number of CPU cores
     * @param integer $Memory Memory size in MB
     * @param integer $MaxStorage Maximum storage capacity in GB supported by this specification
     * @param integer $MinStorage Minimum storage capacity in GB supported by this specification
     * @param integer $QPS Estimated QPS for this specification
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }
    }
}
