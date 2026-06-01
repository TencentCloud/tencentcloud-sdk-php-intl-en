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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slave server information
 *
 * @method SlaveInstanceInfo getFirst() Obtain <p>Secondary server information of the top spot</p>
 * @method void setFirst(SlaveInstanceInfo $First) Set <p>Secondary server information of the top spot</p>
 * @method SlaveInstanceInfo getSecond() Obtain <p>Second standby machine information</p>
 * @method void setSecond(SlaveInstanceInfo $Second) Set <p>Second standby machine information</p>
 */
class SlaveInfo extends AbstractModel
{
    /**
     * @var SlaveInstanceInfo <p>Secondary server information of the top spot</p>
     */
    public $First;

    /**
     * @var SlaveInstanceInfo <p>Second standby machine information</p>
     */
    public $Second;

    /**
     * @param SlaveInstanceInfo $First <p>Secondary server information of the top spot</p>
     * @param SlaveInstanceInfo $Second <p>Second standby machine information</p>
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
        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = new SlaveInstanceInfo();
            $this->First->deserialize($param["First"]);
        }

        if (array_key_exists("Second",$param) and $param["Second"] !== null) {
            $this->Second = new SlaveInstanceInfo();
            $this->Second->deserialize($param["Second"]);
        }
    }
}
