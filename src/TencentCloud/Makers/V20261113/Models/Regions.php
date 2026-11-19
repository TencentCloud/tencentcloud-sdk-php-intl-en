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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project deployment region
 *
 * @method array getMainland() Obtain <p>Chinese mainland</p>
 * @method void setMainland(array $Mainland) Set <p>Chinese mainland</p>
 * @method array getOverseas() Obtain <p>Overseas region</p>
 * @method void setOverseas(array $Overseas) Set <p>Overseas region</p>
 */
class Regions extends AbstractModel
{
    /**
     * @var array <p>Chinese mainland</p>
     */
    public $Mainland;

    /**
     * @var array <p>Overseas region</p>
     */
    public $Overseas;

    /**
     * @param array $Mainland <p>Chinese mainland</p>
     * @param array $Overseas <p>Overseas region</p>
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
        if (array_key_exists("Mainland",$param) and $param["Mainland"] !== null) {
            $this->Mainland = $param["Mainland"];
        }

        if (array_key_exists("Overseas",$param) and $param["Overseas"] !== null) {
            $this->Overseas = $param["Overseas"];
        }
    }
}
