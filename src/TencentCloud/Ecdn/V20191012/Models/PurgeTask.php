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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purge task log details.
 *
 * @method string getTaskId() Obtain Purge task ID.
 * @method void setTaskId(string $TaskId) Set Purge task ID.
 * @method string getUrl() Obtain Purged URL.
 * @method void setUrl(string $Url) Set Purged URL.
 * @method string getStatus() Obtain Purge task status. fail: failed, done: succeeded, process: purging.
 * @method void setStatus(string $Status) Set Purge task status. fail: failed, done: succeeded, process: purging.
 * @method string getPurgeType() Obtain Purge type. url: URL purge; path: directory purge.
 * @method void setPurgeType(string $PurgeType) Set Purge type. url: URL purge; path: directory purge.
 * @method string getFlushType() Obtain Resource purge method. flush: purges updated resources, delete: purges all resources.
 * @method void setFlushType(string $FlushType) Set Resource purge method. flush: purges updated resources, delete: purges all resources.
 * @method string getCreateTime() Obtain Purge task submission time
 * @method void setCreateTime(string $CreateTime) Set Purge task submission time
 */
class PurgeTask extends AbstractModel
{
    /**
     * @var string Purge task ID.
     */
    public $TaskId;

    /**
     * @var string Purged URL.
     */
    public $Url;

    /**
     * @var string Purge task status. fail: failed, done: succeeded, process: purging.
     */
    public $Status;

    /**
     * @var string Purge type. url: URL purge; path: directory purge.
     */
    public $PurgeType;

    /**
     * @var string Resource purge method. flush: purges updated resources, delete: purges all resources.
     */
    public $FlushType;

    /**
     * @var string Purge task submission time
     */
    public $CreateTime;

    /**
     * @param string $TaskId Purge task ID.
     * @param string $Url Purged URL.
     * @param string $Status Purge task status. fail: failed, done: succeeded, process: purging.
     * @param string $PurgeType Purge type. url: URL purge; path: directory purge.
     * @param string $FlushType Resource purge method. flush: purges updated resources, delete: purges all resources.
     * @param string $CreateTime Purge task submission time
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
