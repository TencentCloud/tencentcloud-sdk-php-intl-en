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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database instance specification
 *
 * @method string getSpecCode() Obtain <p>Specification ID.</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Specification ID.</p>
 * @method integer getCPU() Obtain <p>CPU cores.</p>
 * @method void setCPU(integer $CPU) Set <p>CPU cores.</p>
 * @method integer getMemory() Obtain <p>Memory size, in MB.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size, in MB.</p>
 * @method integer getMaxStorage() Obtain <p>Maximum storage capacity supported by this specification, in GB.</p>
 * @method void setMaxStorage(integer $MaxStorage) Set <p>Maximum storage capacity supported by this specification, in GB.</p>
 * @method integer getMinStorage() Obtain <p>Minimum storage capacity supported by this specification, in GB.</p>
 * @method void setMinStorage(integer $MinStorage) Set <p>Minimum storage capacity supported by this specification, in GB.</p>
 * @method integer getQPS() Obtain <p>Estimated QPS of the specification.</p>
 * @method void setQPS(integer $QPS) Set <p>Estimated QPS of the specification.</p>
 */
class ClassInfo extends AbstractModel
{
    /**
     * @var string <p>Specification ID.</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>CPU cores.</p>
     */
    public $CPU;

    /**
     * @var integer <p>Memory size, in MB.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Maximum storage capacity supported by this specification, in GB.</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>Minimum storage capacity supported by this specification, in GB.</p>
     */
    public $MinStorage;

    /**
     * @var integer <p>Estimated QPS of the specification.</p>
     */
    public $QPS;

    /**
     * @param string $SpecCode <p>Specification ID.</p>
     * @param integer $CPU <p>CPU cores.</p>
     * @param integer $Memory <p>Memory size, in MB.</p>
     * @param integer $MaxStorage <p>Maximum storage capacity supported by this specification, in GB.</p>
     * @param integer $MinStorage <p>Minimum storage capacity supported by this specification, in GB.</p>
     * @param integer $QPS <p>Estimated QPS of the specification.</p>
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
