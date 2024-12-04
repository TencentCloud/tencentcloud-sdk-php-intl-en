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
 * The object of the data subscription is used in the ModifySubscribeObjects interface. Similar to the SubscribeObject structure, only the type and parameter names differ.
 *
 * @method integer getObjectsType() Obtain Subscription object type. Valid values: 0 (database); 1 (table, for mongo tasks, this corresponds to a collection).Note: mongo only supports full instance, single database or single collection subscription, so this field should not conflict with SubscribeObjectType. For example, when SubscribeObjectType=4, it means mongo single database subscription, then 0 should be passed in this field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectsType(integer $ObjectsType) Set Subscription object type. Valid values: 0 (database); 1 (table, for mongo tasks, this corresponds to a collection).Note: mongo only supports full instance, single database or single collection subscription, so this field should not conflict with SubscribeObjectType. For example, when SubscribeObjectType=4, it means mongo single database subscription, then 0 should be passed in this field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Subscription database nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Subscription database nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getTableNames() Obtain Name of the table (or collection) in the subscription database. If ObjectsType is 1, this field is required and not empty; 
 * @method void setTableNames(array $TableNames) Set Name of the table (or collection) in the subscription database. If ObjectsType is 1, this field is required and not empty; 
 */
class ModifiedSubscribeObject extends AbstractModel
{
    /**
     * @var integer Subscription object type. Valid values: 0 (database); 1 (table, for mongo tasks, this corresponds to a collection).Note: mongo only supports full instance, single database or single collection subscription, so this field should not conflict with SubscribeObjectType. For example, when SubscribeObjectType=4, it means mongo single database subscription, then 0 should be passed in this field.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectsType;

    /**
     * @var string Subscription database nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var array Name of the table (or collection) in the subscription database. If ObjectsType is 1, this field is required and not empty; 
     */
    public $TableNames;

    /**
     * @param integer $ObjectsType Subscription object type. Valid values: 0 (database); 1 (table, for mongo tasks, this corresponds to a collection).Note: mongo only supports full instance, single database or single collection subscription, so this field should not conflict with SubscribeObjectType. For example, when SubscribeObjectType=4, it means mongo single database subscription, then 0 should be passed in this field.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Subscription database nameNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $TableNames Name of the table (or collection) in the subscription database. If ObjectsType is 1, this field is required and not empty; 
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
        if (array_key_exists("ObjectsType",$param) and $param["ObjectsType"] !== null) {
            $this->ObjectsType = $param["ObjectsType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableNames",$param) and $param["TableNames"] !== null) {
            $this->TableNames = $param["TableNames"];
        }
    }
}
