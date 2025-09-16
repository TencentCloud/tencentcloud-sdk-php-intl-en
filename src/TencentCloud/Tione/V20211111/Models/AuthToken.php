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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthToken data of an online service.
 *
 * @method AuthTokenBase getBase() Obtain AuthToken basic information.
 * @method void setBase(AuthTokenBase $Base) Set AuthToken basic information.
 * @method array getLimits() Obtain AuthToken throttling array.
 * @method void setLimits(array $Limits) Set AuthToken throttling array.
 */
class AuthToken extends AbstractModel
{
    /**
     * @var AuthTokenBase AuthToken basic information.
     */
    public $Base;

    /**
     * @var array AuthToken throttling array.
     */
    public $Limits;

    /**
     * @param AuthTokenBase $Base AuthToken basic information.
     * @param array $Limits AuthToken throttling array.
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
        if (array_key_exists("Base",$param) and $param["Base"] !== null) {
            $this->Base = new AuthTokenBase();
            $this->Base->deserialize($param["Base"]);
        }

        if (array_key_exists("Limits",$param) and $param["Limits"] !== null) {
            $this->Limits = [];
            foreach ($param["Limits"] as $key => $value){
                $obj = new AuthTokenLimit();
                $obj->deserialize($value);
                array_push($this->Limits, $obj);
            }
        }
    }
}
