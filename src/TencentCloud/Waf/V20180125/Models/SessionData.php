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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter Wrapping
 *
 * @method array getRes() Obtain Session definition
 * @method void setRes(array $Res) Set Session definition
 */
class SessionData extends AbstractModel
{
    /**
     * @var array Session definition
     */
    public $Res;

    /**
     * @param array $Res Session definition
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
        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = [];
            foreach ($param["Res"] as $key => $value){
                $obj = new SessionItem();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }
    }
}
