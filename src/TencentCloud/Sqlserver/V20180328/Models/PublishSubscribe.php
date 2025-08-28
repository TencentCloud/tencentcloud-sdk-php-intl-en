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
 * 
 *
 * @method integer getId() Obtain 
 * @method void setId(integer $Id) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getPublishInstanceId() Obtain 
 * @method void setPublishInstanceId(string $PublishInstanceId) Set 
 * @method string getPublishInstanceName() Obtain 
 * @method void setPublishInstanceName(string $PublishInstanceName) Set 
 * @method string getPublishInstanceIp() Obtain 
 * @method void setPublishInstanceIp(string $PublishInstanceIp) Set 
 * @method string getSubscribeInstanceId() Obtain 
 * @method void setSubscribeInstanceId(string $SubscribeInstanceId) Set 
 * @method string getSubscribeInstanceName() Obtain 
 * @method void setSubscribeInstanceName(string $SubscribeInstanceName) Set 
 * @method string getSubscribeInstanceIp() Obtain 
 * @method void setSubscribeInstanceIp(string $SubscribeInstanceIp) Set 
 * @method array getDatabaseTupleSet() Obtain 
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) Set 
 */
class PublishSubscribe extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Id;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $PublishInstanceId;

    /**
     * @var string 
     */
    public $PublishInstanceName;

    /**
     * @var string 
     */
    public $PublishInstanceIp;

    /**
     * @var string 
     */
    public $SubscribeInstanceId;

    /**
     * @var string 
     */
    public $SubscribeInstanceName;

    /**
     * @var string 
     */
    public $SubscribeInstanceIp;

    /**
     * @var array 
     */
    public $DatabaseTupleSet;

    /**
     * @param integer $Id 
     * @param string $Name 
     * @param string $PublishInstanceId 
     * @param string $PublishInstanceName 
     * @param string $PublishInstanceIp 
     * @param string $SubscribeInstanceId 
     * @param string $SubscribeInstanceName 
     * @param string $SubscribeInstanceIp 
     * @param array $DatabaseTupleSet 
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
