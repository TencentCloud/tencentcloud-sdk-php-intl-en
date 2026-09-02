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
 * Log retrieval error message
 *
 * @method string getTopicId() Obtain <p>Topic</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic</p>
 * @method string getErrorMsg() Obtain <p>Error information.</p>
 * @method void setErrorMsg(string $ErrorMsg) Set <p>Error information.</p>
 * @method string getErrorCodeStr() Obtain <p>Error information.</p>
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set <p>Error information.</p>
 */
class LogSearchErrors extends AbstractModel
{
    /**
     * @var string <p>Topic</p>
     */
    public $TopicId;

    /**
     * @var string <p>Error information.</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>Error information.</p>
     */
    public $ErrorCodeStr;

    /**
     * @param string $TopicId <p>Topic</p>
     * @param string $ErrorMsg <p>Error information.</p>
     * @param string $ErrorCodeStr <p>Error information.</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }
    }
}
