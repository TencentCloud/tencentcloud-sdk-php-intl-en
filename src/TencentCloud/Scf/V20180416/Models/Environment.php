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
 * Environment variable parameter of the function
 *
 * @method array getVariables() Obtain Environment variable array
 * @method void setVariables(array $Variables) Set Environment variable array
 */
class Environment extends AbstractModel
{
    /**
     * @var array Environment variable array
     */
    public $Variables;

    /**
     * @param array $Variables Environment variable array
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
        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }
    }
}
