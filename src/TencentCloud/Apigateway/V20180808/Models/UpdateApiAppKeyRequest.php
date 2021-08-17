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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiAppKey request structure.
 *
 * @method string getApiAppId() Obtain Unique application ID.
 * @method void setApiAppId(string $ApiAppId) Set Unique application ID.
 * @method string getApiAppKey() Obtain Application Key.
 * @method void setApiAppKey(string $ApiAppKey) Set Application Key.
 * @method string getApiAppSecret() Obtain Application Secret.
 * @method void setApiAppSecret(string $ApiAppSecret) Set Application Secret.
 */
class UpdateApiAppKeyRequest extends AbstractModel
{
    /**
     * @var string Unique application ID.
     */
    public $ApiAppId;

    /**
     * @var string Application Key.
     */
    public $ApiAppKey;

    /**
     * @var string Application Secret.
     */
    public $ApiAppSecret;

    /**
     * @param string $ApiAppId Unique application ID.
     * @param string $ApiAppKey Application Key.
     * @param string $ApiAppSecret Application Secret.
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
        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("ApiAppKey",$param) and $param["ApiAppKey"] !== null) {
            $this->ApiAppKey = $param["ApiAppKey"];
        }

        if (array_key_exists("ApiAppSecret",$param) and $param["ApiAppSecret"] !== null) {
            $this->ApiAppSecret = $param["ApiAppSecret"];
        }
    }
}
