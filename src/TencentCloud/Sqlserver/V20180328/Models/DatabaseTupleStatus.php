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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This data structure represents two databases with a publish-subscribe relationship, along with the status information of that relationship between them.
 *
 * @method string getPublishDatabase() Obtain Publish Database Name
 * @method void setPublishDatabase(string $PublishDatabase) Set Publish Database Name
 * @method string getSubscribeDatabase() Obtain Subscription Database Name
 * @method void setSubscribeDatabase(string $SubscribeDatabase) Set Subscription Database Name
 * @method string getLastSyncTime() Obtain Latest Synchronization Time
 * @method void setLastSyncTime(string $LastSyncTime) Set Latest Synchronization Time
 * @method string getStatus() Obtain Publish/Subscribe Status Between Databases: running, success, fail, unknow
 * @method void setStatus(string $Status) Set Publish/Subscribe Status Between Databases: running, success, fail, unknow
 */
class DatabaseTupleStatus extends AbstractModel
{
    /**
     * @var string Publish Database Name
     */
    public $PublishDatabase;

    /**
     * @var string Subscription Database Name
     */
    public $SubscribeDatabase;

    /**
     * @var string Latest Synchronization Time
     */
    public $LastSyncTime;

    /**
     * @var string Publish/Subscribe Status Between Databases: running, success, fail, unknow
     */
    public $Status;

    /**
     * @param string $PublishDatabase Publish Database Name
     * @param string $SubscribeDatabase Subscription Database Name
     * @param string $LastSyncTime Latest Synchronization Time
     * @param string $Status Publish/Subscribe Status Between Databases: running, success, fail, unknow
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
        if (array_key_exists("PublishDatabase",$param) and $param["PublishDatabase"] !== null) {
            $this->PublishDatabase = $param["PublishDatabase"];
        }

        if (array_key_exists("SubscribeDatabase",$param) and $param["SubscribeDatabase"] !== null) {
            $this->SubscribeDatabase = $param["SubscribeDatabase"];
        }

        if (array_key_exists("LastSyncTime",$param) and $param["LastSyncTime"] !== null) {
            $this->LastSyncTime = $param["LastSyncTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
