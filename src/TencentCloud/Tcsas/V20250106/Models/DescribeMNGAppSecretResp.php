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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for querying mini program secret keys
 *
 * @method integer getSecretStatus() Obtain <p>Mini game secret key status. Valid values: 0: Not generated; 1: Active; 2: Frozen.</p>
 * @method void setSecretStatus(integer $SecretStatus) Set <p>Mini game secret key status. Valid values: 0: Not generated; 1: Active; 2: Frozen.</p>
 * @method string getOpenServerURL() Obtain <p>Public service URL that developers need to access when integrating login, payment, and subscription message features.</p>
 * @method void setOpenServerURL(string $OpenServerURL) Set <p>Public service URL that developers need to access when integrating login, payment, and subscription message features.</p>
 */
class DescribeMNGAppSecretResp extends AbstractModel
{
    /**
     * @var integer <p>Mini game secret key status. Valid values: 0: Not generated; 1: Active; 2: Frozen.</p>
     */
    public $SecretStatus;

    /**
     * @var string <p>Public service URL that developers need to access when integrating login, payment, and subscription message features.</p>
     */
    public $OpenServerURL;

    /**
     * @param integer $SecretStatus <p>Mini game secret key status. Valid values: 0: Not generated; 1: Active; 2: Frozen.</p>
     * @param string $OpenServerURL <p>Public service URL that developers need to access when integrating login, payment, and subscription message features.</p>
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
        if (array_key_exists("SecretStatus",$param) and $param["SecretStatus"] !== null) {
            $this->SecretStatus = $param["SecretStatus"];
        }

        if (array_key_exists("OpenServerURL",$param) and $param["OpenServerURL"] !== null) {
            $this->OpenServerURL = $param["OpenServerURL"];
        }
    }
}
