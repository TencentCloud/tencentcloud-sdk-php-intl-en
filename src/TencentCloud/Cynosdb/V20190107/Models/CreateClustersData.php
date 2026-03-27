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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster Creation Task Information
 *
 * @method integer getCpu() Obtain Instance CPU
 * @method void setCpu(integer $Cpu) Set Instance CPU
 * @method integer getMemory() Obtain Instance Memory
 * @method void setMemory(integer $Memory) Set Instance Memory
 * @method integer getStorageLimit() Obtain Cluster storage limit
 * @method void setStorageLimit(integer $StorageLimit) Set Cluster storage limit
 */
class CreateClustersData extends AbstractModel
{
    /**
     * @var integer Instance CPU
     */
    public $Cpu;

    /**
     * @var integer Instance Memory
     */
    public $Memory;

    /**
     * @var integer Cluster storage limit
     */
    public $StorageLimit;

    /**
     * @param integer $Cpu Instance CPU
     * @param integer $Memory Instance Memory
     * @param integer $StorageLimit Cluster storage limit
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }
    }
}
