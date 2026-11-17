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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillSecScanResult request structure.
 *
 * @method string getServiceId() Obtain <p>Service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Service ID.</p>
 * @method string getContentHash() Obtain <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest. Strictly follow the ZIP packaging specifications in the documentation</p>
 * @method void setContentHash(string $ContentHash) Set <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest. Strictly follow the ZIP packaging specifications in the documentation</p>
 * @method string getLang() Obtain <p>Response language. Valid values: zh / en. Default value: zh</p>
 * @method void setLang(string $Lang) Set <p>Response language. Valid values: zh / en. Default value: zh</p>
 */
class DescribeSkillSecScanResultRequest extends AbstractModel
{
    /**
     * @var string <p>Service ID.</p>
     */
    public $ServiceId;

    /**
     * @var string <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest. Strictly follow the ZIP packaging specifications in the documentation</p>
     */
    public $ContentHash;

    /**
     * @var string <p>Response language. Valid values: zh / en. Default value: zh</p>
     */
    public $Lang;

    /**
     * @param string $ServiceId <p>Service ID.</p>
     * @param string $ContentHash <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest. Strictly follow the ZIP packaging specifications in the documentation</p>
     * @param string $Lang <p>Response language. Valid values: zh / en. Default value: zh</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
