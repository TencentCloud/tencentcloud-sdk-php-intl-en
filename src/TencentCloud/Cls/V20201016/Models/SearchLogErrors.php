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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error information for multi-log topic search
 *
 * @method string getTopicId() Obtain Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain Error MessageNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set Error MessageNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCodeStr() Obtain Error CodeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set Error CodeNote: This field may return null, indicating that no valid values can be obtained.
 */
class SearchLogErrors extends AbstractModel
{
    /**
     * @var string Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Error MessageNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string Error CodeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCodeStr;

    /**
     * @param string $TopicId Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg Error MessageNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCodeStr Error CodeNote: This field may return null, indicating that no valid values can be obtained.
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
