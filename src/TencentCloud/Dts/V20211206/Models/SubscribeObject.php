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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subscription database and table information, used to configure and query the subscription task interfaces.
 *
 * @method string getObjectType() Obtain Subscription data type. Valid values: database; table (if DatabaseType is mongodb, it means a collection).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectType(string $ObjectType) Set Subscription data type. Valid values: database; table (if DatabaseType is mongodb, it means a collection).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Subscribed database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Subscribed database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTables() Obtain Name of the table in the subscribed database. If DatabaseType is mongodb, fill in the collection name. MongoDB only supports subscribing to a single database or a single collection.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTables(array $Tables) Set Name of the table in the subscribed database. If DatabaseType is mongodb, fill in the collection name. MongoDB only supports subscribing to a single database or a single collection.Note: This field may return null, indicating that no valid values can be obtained.
 */
class SubscribeObject extends AbstractModel
{
    /**
     * @var string Subscription data type. Valid values: database; table (if DatabaseType is mongodb, it means a collection).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectType;

    /**
     * @var string Subscribed database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var array Name of the table in the subscribed database. If DatabaseType is mongodb, fill in the collection name. MongoDB only supports subscribing to a single database or a single collection.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tables;

    /**
     * @param string $ObjectType Subscription data type. Valid values: database; table (if DatabaseType is mongodb, it means a collection).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database Subscribed database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tables Name of the table in the subscribed database. If DatabaseType is mongodb, fill in the collection name. MongoDB only supports subscribing to a single database or a single collection.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }
    }
}
