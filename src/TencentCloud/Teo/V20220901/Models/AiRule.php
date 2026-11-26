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
 * AI rule engine protection
 *
 * @method string getMode() Obtain AI rule engine status. Valid values:
<li> smart_status_close: off;</li>
<li> smart_status_open: block;</li>
<li> smart_status_observe: observation and disposition.</li>
 * @method void setMode(string $Mode) Set AI rule engine status. Valid values:
<li> smart_status_close: off;</li>
<li> smart_status_open: block;</li>
<li> smart_status_observe: observation and disposition.</li>
 */
class AiRule extends AbstractModel
{
    /**
     * @var string AI rule engine status. Valid values:
<li> smart_status_close: off;</li>
<li> smart_status_open: block;</li>
<li> smart_status_observe: observation and disposition.</li>
     */
    public $Mode;

    /**
     * @param string $Mode AI rule engine status. Valid values:
<li> smart_status_close: off;</li>
<li> smart_status_open: block;</li>
<li> smart_status_observe: observation and disposition.</li>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
