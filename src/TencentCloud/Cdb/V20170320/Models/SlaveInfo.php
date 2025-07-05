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
 * @method SlaveInstanceInfo getFirst() Obtain Information of secondary server 1
 * @method void setFirst(SlaveInstanceInfo $First) Set Information of secondary server 1
 * @method SlaveInstanceInfo getSecond() Obtain Information of secondary server 2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecond(SlaveInstanceInfo $Second) Set Information of secondary server 2
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SlaveInfo extends AbstractModel
{
    /**
     * @var SlaveInstanceInfo Information of secondary server 1
     */
    public $First;

    /**
     * @var SlaveInstanceInfo Information of secondary server 2
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Second;

    /**
     * @param SlaveInstanceInfo $First Information of secondary server 1
     * @param SlaveInstanceInfo $Second Information of secondary server 2
Note: This field may return null, indicating that no valid values can be obtained.
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
