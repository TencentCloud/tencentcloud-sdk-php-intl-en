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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database proxy specifications
 *
 * @method integer getCpu() Obtain Number of database proxy CPU cores
 * @method void setCpu(integer $Cpu) Set Number of database proxy CPU cores
 * @method integer getMem() Obtain Database proxy memory
 * @method void setMem(integer $Mem) Set Database proxy memory
 */
class ProxySpec extends AbstractModel
{
    /**
     * @var integer Number of database proxy CPU cores
     */
    public $Cpu;

    /**
     * @var integer Database proxy memory
     */
    public $Mem;

    /**
     * @param integer $Cpu Number of database proxy CPU cores
     * @param integer $Mem Database proxy memory
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

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}
