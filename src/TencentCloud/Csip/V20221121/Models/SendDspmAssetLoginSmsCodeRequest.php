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
 * SendDspmAssetLoginSmsCode request structure.
 *
 * @method string getPersonId() Obtain Individual ID
 * @method void setPersonId(string $PersonId) Set Individual ID
 * @method string getAssetId() Obtain Database asset id
 * @method void setAssetId(string $AssetId) Set Database asset id
 * @method string getHost() Obtain Host. Default: '%'.
 * @method void setHost(string $Host) Set Host. Default: '%'.
 */
class SendDspmAssetLoginSmsCodeRequest extends AbstractModel
{
    /**
     * @var string Individual ID
     */
    public $PersonId;

    /**
     * @var string Database asset id
     */
    public $AssetId;

    /**
     * @var string Host. Default: '%'.
     */
    public $Host;

    /**
     * @param string $PersonId Individual ID
     * @param string $AssetId Database asset id
     * @param string $Host Host. Default: '%'.
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
