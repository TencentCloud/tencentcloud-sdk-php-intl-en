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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Other account information.
 *
 * @method string getOtherUin() Obtain UIN of another account.
 * @method void setOtherUin(string $OtherUin) Set UIN of another account.
 * @method string getRoleName() Obtain Authorized role name of another account.
 * @method void setRoleName(string $RoleName) Set Authorized role name of another account.
 */
class OtherAccountInfo extends AbstractModel
{
    /**
     * @var string UIN of another account.
     */
    public $OtherUin;

    /**
     * @var string Authorized role name of another account.
     */
    public $RoleName;

    /**
     * @param string $OtherUin UIN of another account.
     * @param string $RoleName Authorized role name of another account.
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
        if (array_key_exists("OtherUin",$param) and $param["OtherUin"] !== null) {
            $this->OtherUin = $param["OtherUin"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
