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
 * DescribeAsyncContextResult request structure.
 *
 * @method string getAsyncContextTaskId() Obtain Offline search task ID
 * @method void setAsyncContextTaskId(string $AsyncContextTaskId) Set Offline search task ID
 * @method string getPkgId() Obtain Log package number
 * @method void setPkgId(string $PkgId) Set Log package number
 * @method string getPkgLogId() Obtain Log number in log package
 * @method void setPkgLogId(string $PkgLogId) Set Log number in log package
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getPrevLogs() Obtain Number of previous logs. Default value: 10
 * @method void setPrevLogs(integer $PrevLogs) Set Number of previous logs. Default value: 10
 * @method integer getNextLogs() Obtain Number of next logs. Default value: 10
 * @method void setNextLogs(integer $NextLogs) Set Number of next logs. Default value: 10
 */
class DescribeAsyncContextResultRequest extends AbstractModel
{
    /**
     * @var string Offline search task ID
     */
    public $AsyncContextTaskId;

    /**
     * @var string Log package number
     */
    public $PkgId;

    /**
     * @var string Log number in log package
     */
    public $PkgLogId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Number of previous logs. Default value: 10
     */
    public $PrevLogs;

    /**
     * @var integer Number of next logs. Default value: 10
     */
    public $NextLogs;

    /**
     * @param string $AsyncContextTaskId Offline search task ID
     * @param string $PkgId Log package number
     * @param string $PkgLogId Log number in log package
     * @param string $TopicId Log topic ID
     * @param integer $PrevLogs Number of previous logs. Default value: 10
     * @param integer $NextLogs Number of next logs. Default value: 10
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
        if (array_key_exists("AsyncContextTaskId",$param) and $param["AsyncContextTaskId"] !== null) {
            $this->AsyncContextTaskId = $param["AsyncContextTaskId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
        }
    }
}
