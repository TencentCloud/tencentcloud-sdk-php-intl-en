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
 * CreatePublishSubscribe request structure.
 *
 * @method string getPublishInstanceId() Obtain Publishing instance ID. For example, mssql-j8kv137v.
 * @method void setPublishInstanceId(string $PublishInstanceId) Set Publishing instance ID. For example, mssql-j8kv137v.
 * @method string getSubscribeInstanceId() Obtain Subscription instance ID. For example, mssql-j8kv137v.
 * @method void setSubscribeInstanceId(string $SubscribeInstanceId) Set Subscription instance ID. For example, mssql-j8kv137v.
 * @method array getDatabaseTupleSet() Obtain Publish/subscribe relationship collection of the database.
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) Set Publish/subscribe relationship collection of the database.
 * @method string getPublishSubscribeName() Obtain Publish/subscribe name. The default value is default_name.
 * @method void setPublishSubscribeName(string $PublishSubscribeName) Set Publish/subscribe name. The default value is default_name.
 */
class CreatePublishSubscribeRequest extends AbstractModel
{
    /**
     * @var string Publishing instance ID. For example, mssql-j8kv137v.
     */
    public $PublishInstanceId;

    /**
     * @var string Subscription instance ID. For example, mssql-j8kv137v.
     */
    public $SubscribeInstanceId;

    /**
     * @var array Publish/subscribe relationship collection of the database.
     */
    public $DatabaseTupleSet;

    /**
     * @var string Publish/subscribe name. The default value is default_name.
     */
    public $PublishSubscribeName;

    /**
     * @param string $PublishInstanceId Publishing instance ID. For example, mssql-j8kv137v.
     * @param string $SubscribeInstanceId Subscription instance ID. For example, mssql-j8kv137v.
     * @param array $DatabaseTupleSet Publish/subscribe relationship collection of the database.
     * @param string $PublishSubscribeName Publish/subscribe name. The default value is default_name.
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
        if (array_key_exists("PublishInstanceId",$param) and $param["PublishInstanceId"] !== null) {
            $this->PublishInstanceId = $param["PublishInstanceId"];
        }

        if (array_key_exists("SubscribeInstanceId",$param) and $param["SubscribeInstanceId"] !== null) {
            $this->SubscribeInstanceId = $param["SubscribeInstanceId"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new DatabaseTuple();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }

        if (array_key_exists("PublishSubscribeName",$param) and $param["PublishSubscribeName"] !== null) {
            $this->PublishSubscribeName = $param["PublishSubscribeName"];
        }
    }
}
