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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWebCallback request structure.
 *
 * @method string getWebCallbackId() Obtain ID of the alarm channel callback configuration. Search the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1) to get the ID of the alarm channel callback configuration.
 * @method void setWebCallbackId(string $WebCallbackId) Set ID of the alarm channel callback configuration. Search the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1) to get the ID of the alarm channel callback configuration.
 */
class DeleteWebCallbackRequest extends AbstractModel
{
    /**
     * @var string ID of the alarm channel callback configuration. Search the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1) to get the ID of the alarm channel callback configuration.
     */
    public $WebCallbackId;

    /**
     * @param string $WebCallbackId ID of the alarm channel callback configuration. Search the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1) to get the ID of the alarm channel callback configuration.
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
        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }
    }
}
