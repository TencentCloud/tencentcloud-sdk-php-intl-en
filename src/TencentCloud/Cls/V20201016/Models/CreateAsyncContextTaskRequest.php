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
 * CreateAsyncContextTask request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getTime() Obtain Log time in milliseconds
 * @method void setTime(integer $Time) Set Log time in milliseconds
 * @method string getPkgId() Obtain Log package number
 * @method void setPkgId(string $PkgId) Set Log package number
 * @method string getPkgLogId() Obtain Log number in log package
 * @method void setPkgLogId(string $PkgLogId) Set Log number in log package
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getAsyncSearchTaskId() Obtain Offline search task ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) Set Offline search task ID
 */
class CreateAsyncContextTaskRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Log time in milliseconds
     */
    public $Time;

    /**
     * @var string Log package number
     */
    public $PkgId;

    /**
     * @var string Log number in log package
     */
    public $PkgLogId;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Offline search task ID
     */
    public $AsyncSearchTaskId;

    /**
     * @param string $TopicId Log topic ID
     * @param integer $Time Log time in milliseconds
     * @param string $PkgId Log package number
     * @param string $PkgLogId Log number in log package
     * @param string $LogsetId Logset ID
     * @param string $AsyncSearchTaskId Offline search task ID
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }
    }
}
