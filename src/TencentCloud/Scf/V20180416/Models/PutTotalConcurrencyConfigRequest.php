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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutTotalConcurrencyConfig request structure.
 *
 * @method integer getTotalConcurrencyMem() Obtain Account concurrency memory quota. Note: the lower limit for the account concurrency memory quota is the user's total concurrency memory used + 12800
 * @method void setTotalConcurrencyMem(integer $TotalConcurrencyMem) Set Account concurrency memory quota. Note: the lower limit for the account concurrency memory quota is the user's total concurrency memory used + 12800
 * @method string getNamespace() Obtain Namespace. Default value: `default`
 * @method void setNamespace(string $Namespace) Set Namespace. Default value: `default`
 */
class PutTotalConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var integer Account concurrency memory quota. Note: the lower limit for the account concurrency memory quota is the user's total concurrency memory used + 12800
     */
    public $TotalConcurrencyMem;

    /**
     * @var string Namespace. Default value: `default`
     */
    public $Namespace;

    /**
     * @param integer $TotalConcurrencyMem Account concurrency memory quota. Note: the lower limit for the account concurrency memory quota is the user's total concurrency memory used + 12800
     * @param string $Namespace Namespace. Default value: `default`
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
        if (array_key_exists("TotalConcurrencyMem",$param) and $param["TotalConcurrencyMem"] !== null) {
            $this->TotalConcurrencyMem = $param["TotalConcurrencyMem"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
