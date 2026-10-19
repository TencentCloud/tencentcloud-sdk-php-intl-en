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
 * cos call log
 *
 * @method integer getInvokeTimestamp() Obtain Call timestamp
 * @method void setInvokeTimestamp(integer $InvokeTimestamp) Set Call timestamp
 * @method string getRequestId() Obtain Request ID
 * @method void setRequestId(string $RequestId) Set Request ID
 * @method string getRequestContent() Obtain Request content in base64 json structure
 * @method void setRequestContent(string $RequestContent) Set Request content in base64 json structure
 */
class CosInvokeLog extends AbstractModel
{
    /**
     * @var integer Call timestamp
     */
    public $InvokeTimestamp;

    /**
     * @var string Request ID
     */
    public $RequestId;

    /**
     * @var string Request content in base64 json structure
     */
    public $RequestContent;

    /**
     * @param integer $InvokeTimestamp Call timestamp
     * @param string $RequestId Request ID
     * @param string $RequestContent Request content in base64 json structure
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RequestContent",$param) and $param["RequestContent"] !== null) {
            $this->RequestContent = $param["RequestContent"];
        }
    }
}
