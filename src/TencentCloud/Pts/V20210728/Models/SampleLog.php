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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sampled request logs.
 *
 * @method string getTimestamp() Obtain Millisecond timestamp.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTimestamp(string $Timestamp) Set Millisecond timestamp.

Note: This field may return null, indicating that no valid value is found.
 * @method Attributes getAttributes() Obtain Log attributes.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAttributes(Attributes $Attributes) Set Log attributes.

Note: This field may return null, indicating that no valid value is found.
 * @method string getBody() Obtain Request in har format in log.

Note: This field may return null, indicating that no valid value is found.
 * @method void setBody(string $Body) Set Request in har format in log.

Note: This field may return null, indicating that no valid value is found.
 */
class SampleLog extends AbstractModel
{
    /**
     * @var string Millisecond timestamp.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Timestamp;

    /**
     * @var Attributes Log attributes.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Attributes;

    /**
     * @var string Request in har format in log.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Body;

    /**
     * @param string $Timestamp Millisecond timestamp.

Note: This field may return null, indicating that no valid value is found.
     * @param Attributes $Attributes Log attributes.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Body Request in har format in log.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = new Attributes();
            $this->Attributes->deserialize($param["Attributes"]);
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
