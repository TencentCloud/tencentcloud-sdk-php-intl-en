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
 * Database Subscription Publication Relationship Collection to be Modified
 *
 * @method DatabaseTuple getDatabaseTuple() Obtain Subscription Relationship to be Modified
 * @method void setDatabaseTuple(DatabaseTuple $DatabaseTuple) Set Subscription Relationship to be Modified
 * @method DatabaseTuple getNewDatabaseTuple() Obtain Modified subscription relationship. Takes effect when DeleteDataBasesTuple is false
 * @method void setNewDatabaseTuple(DatabaseTuple $NewDatabaseTuple) Set Modified subscription relationship. Takes effect when DeleteDataBasesTuple is false
 * @method boolean getDeleteDataBasesTuple() Obtain Whether to delete the subscription relationship. When this option is true, NewDatabaseTuple is invalid
 * @method void setDeleteDataBasesTuple(boolean $DeleteDataBasesTuple) Set Whether to delete the subscription relationship. When this option is true, NewDatabaseTuple is invalid
 */
class ModifyDataBaseTuple extends AbstractModel
{
    /**
     * @var DatabaseTuple Subscription Relationship to be Modified
     */
    public $DatabaseTuple;

    /**
     * @var DatabaseTuple Modified subscription relationship. Takes effect when DeleteDataBasesTuple is false
     */
    public $NewDatabaseTuple;

    /**
     * @var boolean Whether to delete the subscription relationship. When this option is true, NewDatabaseTuple is invalid
     */
    public $DeleteDataBasesTuple;

    /**
     * @param DatabaseTuple $DatabaseTuple Subscription Relationship to be Modified
     * @param DatabaseTuple $NewDatabaseTuple Modified subscription relationship. Takes effect when DeleteDataBasesTuple is false
     * @param boolean $DeleteDataBasesTuple Whether to delete the subscription relationship. When this option is true, NewDatabaseTuple is invalid
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
        if (array_key_exists("DatabaseTuple",$param) and $param["DatabaseTuple"] !== null) {
            $this->DatabaseTuple = new DatabaseTuple();
            $this->DatabaseTuple->deserialize($param["DatabaseTuple"]);
        }

        if (array_key_exists("NewDatabaseTuple",$param) and $param["NewDatabaseTuple"] !== null) {
            $this->NewDatabaseTuple = new DatabaseTuple();
            $this->NewDatabaseTuple->deserialize($param["NewDatabaseTuple"]);
        }

        if (array_key_exists("DeleteDataBasesTuple",$param) and $param["DeleteDataBasesTuple"] !== null) {
            $this->DeleteDataBasesTuple = $param["DeleteDataBasesTuple"];
        }
    }
}
