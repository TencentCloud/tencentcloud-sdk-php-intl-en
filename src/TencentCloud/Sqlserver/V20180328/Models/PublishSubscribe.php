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
 * Pub/Sub Object
 *
 * @method integer getId() Obtain Pub/Sub ID
 * @method void setId(integer $Id) Set Pub/Sub ID
 * @method string getName() Obtain Pub/Sub Name
 * @method void setName(string $Name) Set Pub/Sub Name
 * @method string getPublishInstanceId() Obtain Published Instance ID
 * @method void setPublishInstanceId(string $PublishInstanceId) Set Published Instance ID
 * @method string getPublishInstanceName() Obtain Published Instance Name
 * @method void setPublishInstanceName(string $PublishInstanceName) Set Published Instance Name
 * @method string getPublishInstanceIp() Obtain Published Instance IP
 * @method void setPublishInstanceIp(string $PublishInstanceIp) Set Published Instance IP
 * @method string getSubscribeInstanceId() Obtain Subscription Instance ID
 * @method void setSubscribeInstanceId(string $SubscribeInstanceId) Set Subscription Instance ID
 * @method string getSubscribeInstanceName() Obtain Subscription Instance Name
 * @method void setSubscribeInstanceName(string $SubscribeInstanceName) Set Subscription Instance Name
 * @method string getSubscribeInstanceIp() Obtain Subscription Instance IP
 * @method void setSubscribeInstanceIp(string $SubscribeInstanceIp) Set Subscription Instance IP
 * @method array getDatabaseTupleSet() Obtain Publication-Subscription Relationship Collection of Database
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) Set Publication-Subscription Relationship Collection of Database
 */
class PublishSubscribe extends AbstractModel
{
    /**
     * @var integer Pub/Sub ID
     */
    public $Id;

    /**
     * @var string Pub/Sub Name
     */
    public $Name;

    /**
     * @var string Published Instance ID
     */
    public $PublishInstanceId;

    /**
     * @var string Published Instance Name
     */
    public $PublishInstanceName;

    /**
     * @var string Published Instance IP
     */
    public $PublishInstanceIp;

    /**
     * @var string Subscription Instance ID
     */
    public $SubscribeInstanceId;

    /**
     * @var string Subscription Instance Name
     */
    public $SubscribeInstanceName;

    /**
     * @var string Subscription Instance IP
     */
    public $SubscribeInstanceIp;

    /**
     * @var array Publication-Subscription Relationship Collection of Database
     */
    public $DatabaseTupleSet;

    /**
     * @param integer $Id Pub/Sub ID
     * @param string $Name Pub/Sub Name
     * @param string $PublishInstanceId Published Instance ID
     * @param string $PublishInstanceName Published Instance Name
     * @param string $PublishInstanceIp Published Instance IP
     * @param string $SubscribeInstanceId Subscription Instance ID
     * @param string $SubscribeInstanceName Subscription Instance Name
     * @param string $SubscribeInstanceIp Subscription Instance IP
     * @param array $DatabaseTupleSet Publication-Subscription Relationship Collection of Database
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublishInstanceId",$param) and $param["PublishInstanceId"] !== null) {
            $this->PublishInstanceId = $param["PublishInstanceId"];
        }

        if (array_key_exists("PublishInstanceName",$param) and $param["PublishInstanceName"] !== null) {
            $this->PublishInstanceName = $param["PublishInstanceName"];
        }

        if (array_key_exists("PublishInstanceIp",$param) and $param["PublishInstanceIp"] !== null) {
            $this->PublishInstanceIp = $param["PublishInstanceIp"];
        }

        if (array_key_exists("SubscribeInstanceId",$param) and $param["SubscribeInstanceId"] !== null) {
            $this->SubscribeInstanceId = $param["SubscribeInstanceId"];
        }

        if (array_key_exists("SubscribeInstanceName",$param) and $param["SubscribeInstanceName"] !== null) {
            $this->SubscribeInstanceName = $param["SubscribeInstanceName"];
        }

        if (array_key_exists("SubscribeInstanceIp",$param) and $param["SubscribeInstanceIp"] !== null) {
            $this->SubscribeInstanceIp = $param["SubscribeInstanceIp"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new DatabaseTupleStatus();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }
    }
}
