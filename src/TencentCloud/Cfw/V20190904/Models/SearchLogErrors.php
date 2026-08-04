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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error information for multi-log topic search
 *
 * @method string getTopicId() Obtain Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCodeStr() Obtain Error code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set Error code.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SearchLogErrors extends AbstractModel
{
    /**
     * @var string Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string Error code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCodeStr;

    /**
     * @param string $TopicId Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCodeStr Error code.
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
