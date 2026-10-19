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
 * cos call detailed information
 *
 * @method integer getInvokeTimestamp() Obtain Call time.
 * @method void setInvokeTimestamp(integer $InvokeTimestamp) Set Call time.
 * @method string getInvokeRequestId() Obtain Request ID
 * @method void setInvokeRequestId(string $InvokeRequestId) Set Request ID
 * @method string getInvokeContent() Obtain Call content
 * @method void setInvokeContent(string $InvokeContent) Set Call content
 */
class CosInvokeDetailInfo extends AbstractModel
{
    /**
     * @var integer Call time.
     */
    public $InvokeTimestamp;

    /**
     * @var string Request ID
     */
    public $InvokeRequestId;

    /**
     * @var string Call content
     */
    public $InvokeContent;

    /**
     * @param integer $InvokeTimestamp Call time.
     * @param string $InvokeRequestId Request ID
     * @param string $InvokeContent Call content
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
        if (array_key_exists("InvokeTimestamp",$param) and $param["InvokeTimestamp"] !== null) {
            $this->InvokeTimestamp = $param["InvokeTimestamp"];
        }

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }

        if (array_key_exists("InvokeContent",$param) and $param["InvokeContent"] !== null) {
            $this->InvokeContent = $param["InvokeContent"];
        }
    }
}
