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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Number of hosts of the CVM instance type.
 *
 * @method integer getCloudFrom() Obtain <p>Server type</p>
 * @method void setCloudFrom(integer $CloudFrom) Set <p>Server type</p>
 * @method integer getMachineCnt() Obtain <p>Number of machines</p>
 * @method void setMachineCnt(integer $MachineCnt) Set <p>Number of machines</p>
 */
class CloudFromCnt extends AbstractModel
{
    /**
     * @var integer <p>Server type</p>
     */
    public $CloudFrom;

    /**
     * @var integer <p>Number of machines</p>
     */
    public $MachineCnt;

    /**
     * @param integer $CloudFrom <p>Server type</p>
     * @param integer $MachineCnt <p>Number of machines</p>
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
        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = $param["CloudFrom"];
        }

        if (array_key_exists("MachineCnt",$param) and $param["MachineCnt"] !== null) {
            $this->MachineCnt = $param["MachineCnt"];
        }
    }
}
