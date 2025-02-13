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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Property of the called.
 *
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method string getUUI() Obtain Accompanying data.
 * @method void setUUI(string $UUI) Set Accompanying data.
 * @method array getVariables() Obtain Parameter.
 * @method void setVariables(array $Variables) Set Parameter.
 */
class CalleeAttribute extends AbstractModel
{
    /**
     * @var string Called number.
     */
    public $Callee;

    /**
     * @var string Accompanying data.
     */
    public $UUI;

    /**
     * @var array Parameter.
     */
    public $Variables;

    /**
     * @param string $Callee Called number.
     * @param string $UUI Accompanying data.
     * @param array $Variables Parameter.
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
        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
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
