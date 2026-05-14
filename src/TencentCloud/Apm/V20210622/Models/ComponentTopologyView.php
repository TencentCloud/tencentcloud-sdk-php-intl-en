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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Contains the quantity of node component types in the view.
 *
 * @method integer getService() Obtain Number of nodes at the service level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setService(integer $Service) Set Number of nodes at the service level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDatabase() Obtain Node count of the database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(integer $Database) Set Node count of the database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMQ() Obtain Node count of the message queue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMQ(integer $MQ) Set Node count of the message queue.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComponentTopologyView extends AbstractModel
{
    /**
     * @var integer Number of nodes at the service level.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Service;

    /**
     * @var integer Node count of the database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var integer Node count of the message queue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MQ;

    /**
     * @param integer $Service Number of nodes at the service level.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Database Node count of the database.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MQ Node count of the message queue.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("MQ",$param) and $param["MQ"] !== null) {
            $this->MQ = $param["MQ"];
        }
    }
}
