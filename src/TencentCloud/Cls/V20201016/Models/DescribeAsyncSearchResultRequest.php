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
 * DescribeAsyncSearchResult request structure.
 *
 * @method string getAsyncSearchTaskId() Obtain Offline search task ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) Set Offline search task ID
 * @method string getTopicId() Obtain Logset ID
 * @method void setTopicId(string $TopicId) Set Logset ID
 * @method string getContext() Obtain This field is used to load more logs. Pass through the last `Context` value returned to get more log content.
 * @method void setContext(string $Context) Set This field is used to load more logs. Pass through the last `Context` value returned to get more log content.
 * @method integer getLimit() Obtain Number of logs returned in a single call. Default value: 20. Maximum value: 500
 * @method void setLimit(integer $Limit) Set Number of logs returned in a single call. Default value: 20. Maximum value: 500
 */
class DescribeAsyncSearchResultRequest extends AbstractModel
{
    /**
     * @var string Offline search task ID
     */
    public $AsyncSearchTaskId;

    /**
     * @var string Logset ID
     */
    public $TopicId;

    /**
     * @var string This field is used to load more logs. Pass through the last `Context` value returned to get more log content.
     */
    public $Context;

    /**
     * @var integer Number of logs returned in a single call. Default value: 20. Maximum value: 500
     */
    public $Limit;

    /**
     * @param string $AsyncSearchTaskId Offline search task ID
     * @param string $TopicId Logset ID
     * @param string $Context This field is used to load more logs. Pass through the last `Context` value returned to get more log content.
     * @param integer $Limit Number of logs returned in a single call. Default value: 20. Maximum value: 500
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
        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
