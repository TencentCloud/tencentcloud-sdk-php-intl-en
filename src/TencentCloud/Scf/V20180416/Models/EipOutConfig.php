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
 * EipOutConfig
 *
 * @method string getEipFixed() Obtain It specifies whether the IP is fixed. The value is `TRUE` or `FALSE`.
 * @method void setEipFixed(string $EipFixed) Set It specifies whether the IP is fixed. The value is `TRUE` or `FALSE`.
 * @method array getEips() Obtain IP list
 * @method void setEips(array $Eips) Set IP list
 */
class EipOutConfig extends AbstractModel
{
    /**
     * @var string It specifies whether the IP is fixed. The value is `TRUE` or `FALSE`.
     */
    public $EipFixed;

    /**
     * @var array IP list
     */
    public $Eips;

    /**
     * @param string $EipFixed It specifies whether the IP is fixed. The value is `TRUE` or `FALSE`.
     * @param array $Eips IP list
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
        if (array_key_exists("EipFixed",$param) and $param["EipFixed"] !== null) {
            $this->EipFixed = $param["EipFixed"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }
    }
}
