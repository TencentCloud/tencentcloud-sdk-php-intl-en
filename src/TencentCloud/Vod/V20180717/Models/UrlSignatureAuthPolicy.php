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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key hotlink protection information for generating the signature
 *
 * @method string getStatus() Obtain Whether to enable or disable [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986). Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
 * @method void setStatus(string $Status) Set Whether to enable or disable [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986). Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
 * @method string getEncryptedKey() Obtain The key for generating the signature of [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986).
`EncryptedKey` can contain 8-40 bytes, and cannot contain non-printable characters.
 * @method void setEncryptedKey(string $EncryptedKey) Set The key for generating the signature of [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986).
`EncryptedKey` can contain 8-40 bytes, and cannot contain non-printable characters.
 */
class UrlSignatureAuthPolicy extends AbstractModel
{
    /**
     * @var string Whether to enable or disable [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986). Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
     */
    public $Status;

    /**
     * @var string The key for generating the signature of [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986).
`EncryptedKey` can contain 8-40 bytes, and cannot contain non-printable characters.
     */
    public $EncryptedKey;

    /**
     * @param string $Status Whether to enable or disable [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986). Valid values:
<li>`Enabled`: enable</li>
<li>`Disabled`: disable</li>
     * @param string $EncryptedKey The key for generating the signature of [key hotlink protection](https://intl.cloud.tencent.com/document/product/266/33986).
`EncryptedKey` can contain 8-40 bytes, and cannot contain non-printable characters.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EncryptedKey",$param) and $param["EncryptedKey"] !== null) {
            $this->EncryptedKey = $param["EncryptedKey"];
        }
    }
}
