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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message trace.
 *
 * @method string getStage() Obtain Message handling phase. valid values are as follows:.

-Produces messages.

-Persists message storage.

-Consumes messages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStage(string $Stage) Set Message handling phase. valid values are as follows:.

-Produces messages.

-Persists message storage.

-Consumes messages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getData() Obtain Track details

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(string $Data) Set Track details

Note: This field may return null, indicating that no valid values can be obtained.
 */
class MessageTraceItem extends AbstractModel
{
    /**
     * @var string Message handling phase. valid values are as follows:.

-Produces messages.

-Persists message storage.

-Consumes messages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stage;

    /**
     * @var string Track details

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @param string $Stage Message handling phase. valid values are as follows:.

-Produces messages.

-Persists message storage.

-Consumes messages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Data Track details

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
