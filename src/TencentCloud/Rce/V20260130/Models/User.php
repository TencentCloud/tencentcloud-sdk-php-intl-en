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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The detail information of the user
 *
 * @method string getUserLevel() Obtain <p>The level of the user in your system</p>
 * @method void setUserLevel(string $UserLevel) Set <p>The level of the user in your system</p>
 * @method CreditPoint getUserPoint() Obtain <p>The point of the user in your system</p>
 * @method void setUserPoint(CreditPoint $UserPoint) Set <p>The point of the user in your system</p>
 * @method string getUserType() Obtain <p>The type of the user in your system</p>
 * @method void setUserType(string $UserType) Set <p>The type of the user in your system</p>
 */
class User extends AbstractModel
{
    /**
     * @var string <p>The level of the user in your system</p>
     */
    public $UserLevel;

    /**
     * @var CreditPoint <p>The point of the user in your system</p>
     */
    public $UserPoint;

    /**
     * @var string <p>The type of the user in your system</p>
     */
    public $UserType;

    /**
     * @param string $UserLevel <p>The level of the user in your system</p>
     * @param CreditPoint $UserPoint <p>The point of the user in your system</p>
     * @param string $UserType <p>The type of the user in your system</p>
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
        if (array_key_exists("UserLevel",$param) and $param["UserLevel"] !== null) {
            $this->UserLevel = $param["UserLevel"];
        }

        if (array_key_exists("UserPoint",$param) and $param["UserPoint"] !== null) {
            $this->UserPoint = new CreditPoint();
            $this->UserPoint->deserialize($param["UserPoint"]);
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
