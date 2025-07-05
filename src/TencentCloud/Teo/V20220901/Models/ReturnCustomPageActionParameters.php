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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional parameter for SecurityAction `ReturnCustomPage`.
 *
 * @method string getResponseCode() Obtain Response custom status code.
 * @method void setResponseCode(string $ResponseCode) Set Response custom status code.
 * @method string getErrorPageId() Obtain Response custom page ID.
 * @method void setErrorPageId(string $ErrorPageId) Set Response custom page ID.
 */
class ReturnCustomPageActionParameters extends AbstractModel
{
    /**
     * @var string Response custom status code.
     */
    public $ResponseCode;

    /**
     * @var string Response custom page ID.
     */
    public $ErrorPageId;

    /**
     * @param string $ResponseCode Response custom status code.
     * @param string $ErrorPageId Response custom page ID.
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
        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }
    }
}
