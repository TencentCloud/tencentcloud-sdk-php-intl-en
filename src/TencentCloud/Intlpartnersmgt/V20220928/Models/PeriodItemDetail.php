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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost cycle entry info
 *
 * @method string getPeriod() Obtain <p>Date</p>
 * @method void setPeriod(string $Period) Set <p>Date</p>
 * @method string getCost() Obtain <p>Fee</p>
 * @method void setCost(string $Cost) Set <p>Fee</p>
 */
class PeriodItemDetail extends AbstractModel
{
    /**
     * @var string <p>Date</p>
     */
    public $Period;

    /**
     * @var string <p>Fee</p>
     */
    public $Cost;

    /**
     * @param string $Period <p>Date</p>
     * @param string $Cost <p>Fee</p>
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }
    }
}
