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
 * Topic information of log retrieval
 *
 * @method array getErrors() Obtain <p>Error information.</p>
 * @method void setErrors(array $Errors) Set <p>Error information.</p>
 * @method array getInfos() Obtain <p>Normal information</p>
 * @method void setInfos(array $Infos) Set <p>Normal information</p>
 */
class LogSearchTopics extends AbstractModel
{
    /**
     * @var array <p>Error information.</p>
     */
    public $Errors;

    /**
     * @var array <p>Normal information</p>
     */
    public $Infos;

    /**
     * @param array $Errors <p>Error information.</p>
     * @param array $Infos <p>Normal information</p>
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
        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new LogSearchErrors();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new LogSearchInfos();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
