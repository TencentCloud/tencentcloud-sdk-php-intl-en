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
 * ModifyApiApp request structure.
 *
 * @method string getApiAppId() Obtain Unique application ID.
 * @method void setApiAppId(string $ApiAppId) Set Unique application ID.
 * @method string getApiAppName() Obtain Modified application name
 * @method void setApiAppName(string $ApiAppName) Set Modified application name
 * @method string getApiAppDesc() Obtain Modified application description
 * @method void setApiAppDesc(string $ApiAppDesc) Set Modified application description
 */
class ModifyApiAppRequest extends AbstractModel
{
    /**
     * @var string Unique application ID.
     */
    public $ApiAppId;

    /**
     * @var string Modified application name
     */
    public $ApiAppName;

    /**
     * @var string Modified application description
     */
    public $ApiAppDesc;

    /**
     * @param string $ApiAppId Unique application ID.
     * @param string $ApiAppName Modified application name
     * @param string $ApiAppDesc Modified application description
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

        if (array_key_exists("ApiAppName",$param) and $param["ApiAppName"] !== null) {
            $this->ApiAppName = $param["ApiAppName"];
        }

        if (array_key_exists("ApiAppDesc",$param) and $param["ApiAppDesc"] !== null) {
            $this->ApiAppDesc = $param["ApiAppDesc"];
        }
    }
}
