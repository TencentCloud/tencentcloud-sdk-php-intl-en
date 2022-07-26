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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authentication information for accessing K8s
 *
 * @method string getCACert() Obtain CA root certificate
 * @method void setCACert(string $CACert) Set CA root certificate
 * @method string getToken() Obtain Token for authentication
 * @method void setToken(string $Token) Set Token for authentication
 */
class ClusterCredential extends AbstractModel
{
    /**
     * @var string CA root certificate
     */
    public $CACert;

    /**
     * @var string Token for authentication
     */
    public $Token;

    /**
     * @param string $CACert CA root certificate
     * @param string $Token Token for authentication
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
        if (array_key_exists("CACert",$param) and $param["CACert"] !== null) {
            $this->CACert = $param["CACert"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
