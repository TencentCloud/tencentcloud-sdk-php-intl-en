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
 * General log struct.
 *
 * @method string getTimestamp() Obtain Timestamp in milliseconds.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTimestamp(string $Timestamp) Set Timestamp in milliseconds.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSeverityText() Obtain Log level.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSeverityText(string $SeverityText) Set Log level.

Note: This field may return null, indicating that no valid value is found.
 * @method string getBody() Obtain Log output content.

Note: This field may return null, indicating that no valid value is found.
 * @method void setBody(string $Body) Set Log output content.

Note: This field may return null, indicating that no valid value is found.
 */
class NormalLog extends AbstractModel
{
    /**
     * @var string Timestamp in milliseconds.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Timestamp;

    /**
     * @var string Log level.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SeverityText;

    /**
     * @var string Log output content.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Body;

    /**
     * @param string $Timestamp Timestamp in milliseconds.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SeverityText Log level.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Body Log output content.

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

        if (array_key_exists("SeverityText",$param) and $param["SeverityText"] !== null) {
            $this->SeverityText = $param["SeverityText"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
