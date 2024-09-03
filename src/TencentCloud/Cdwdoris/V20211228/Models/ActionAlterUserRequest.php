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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActionAlterUser request structure.
 *
 * @method UserInfo getUserInfo() Obtain User information
 * @method void setUserInfo(UserInfo $UserInfo) Set User information
 * @method string getApiType() Obtain API type
 * @method void setApiType(string $ApiType) Set API type
 * @method integer getUserPrivilege() Obtain User permission type. 0: ordinary user; 1: administrator.
 * @method void setUserPrivilege(integer $UserPrivilege) Set User permission type. 0: ordinary user; 1: administrator.
 */
class ActionAlterUserRequest extends AbstractModel
{
    /**
     * @var UserInfo User information
     */
    public $UserInfo;

    /**
     * @var string API type
     */
    public $ApiType;

    /**
     * @var integer User permission type. 0: ordinary user; 1: administrator.
     */
    public $UserPrivilege;

    /**
     * @param UserInfo $UserInfo User information
     * @param string $ApiType API type
     * @param integer $UserPrivilege User permission type. 0: ordinary user; 1: administrator.
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("UserPrivilege",$param) and $param["UserPrivilege"] !== null) {
            $this->UserPrivilege = $param["UserPrivilege"];
        }
    }
}
