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
 * Cloud account user information
 *
 * @method string getUin() Obtain Account UIN
 * @method void setUin(string $Uin) Set Account UIN
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getUserType() Obtain Type of user. 1: root account, 2: sub-user
 * @method void setUserType(integer $UserType) Set Type of user. 1: root account, 2: sub-user
 */
class DspmUinUser extends AbstractModel
{
    /**
     * @var string Account UIN
     */
    public $Uin;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Type of user. 1: root account, 2: sub-user
     */
    public $UserType;

    /**
     * @param string $Uin Account UIN
     * @param string $Name Name
     * @param integer $UserType Type of user. 1: root account, 2: sub-user
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
