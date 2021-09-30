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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesLoginKeyPairAttribute request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. Each request can contain up to 100 instances at a time.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. Each request can contain up to 100 instances at a time.
 * @method string getPermitLogin() Obtain Whether to allow login with the default key pair. Valid values: YES: yes; NO: no.
 * @method void setPermitLogin(string $PermitLogin) Set Whether to allow login with the default key pair. Valid values: YES: yes; NO: no.
 */
class ModifyInstancesLoginKeyPairAttributeRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. Each request can contain up to 100 instances at a time.
     */
    public $InstanceIds;

    /**
     * @var string Whether to allow login with the default key pair. Valid values: YES: yes; NO: no.
     */
    public $PermitLogin;

    /**
     * @param array $InstanceIds Instance ID list. Each request can contain up to 100 instances at a time.
     * @param string $PermitLogin Whether to allow login with the default key pair. Valid values: YES: yes; NO: no.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("PermitLogin",$param) and $param["PermitLogin"] !== null) {
            $this->PermitLogin = $param["PermitLogin"];
        }
    }
}
