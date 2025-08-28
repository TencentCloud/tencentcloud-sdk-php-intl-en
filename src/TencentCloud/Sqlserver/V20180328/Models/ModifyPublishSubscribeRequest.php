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
 * ModifyPublishSubscribe request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example: mssql-dg32dcv.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example: mssql-dg32dcv.
 * @method integer getPublishSubscribeId() Obtain Publish/subscribe ID.
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) Set Publish/subscribe ID.
 * @method array getDatabaseTupleSet() Obtain Publish/subscribe relationship collection of the database to be modified.
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) Set Publish/subscribe relationship collection of the database to be modified.
 */
class ModifyPublishSubscribeRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example: mssql-dg32dcv.
     */
    public $InstanceId;

    /**
     * @var integer Publish/subscribe ID.
     */
    public $PublishSubscribeId;

    /**
     * @var array Publish/subscribe relationship collection of the database to be modified.
     */
    public $DatabaseTupleSet;

    /**
     * @param string $InstanceId Instance ID. For example: mssql-dg32dcv.
     * @param integer $PublishSubscribeId Publish/subscribe ID.
     * @param array $DatabaseTupleSet Publish/subscribe relationship collection of the database to be modified.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new ModifyDataBaseTuple();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }
    }
}
