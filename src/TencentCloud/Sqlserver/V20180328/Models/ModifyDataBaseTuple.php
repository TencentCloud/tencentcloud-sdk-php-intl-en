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
 * @method DatabaseTuple getDatabaseTuple() Obtain 
 * @method void setDatabaseTuple(DatabaseTuple $DatabaseTuple) Set 
 * @method DatabaseTuple getNewDatabaseTuple() Obtain 
 * @method void setNewDatabaseTuple(DatabaseTuple $NewDatabaseTuple) Set 
 * @method boolean getDeleteDataBasesTuple() Obtain 
 * @method void setDeleteDataBasesTuple(boolean $DeleteDataBasesTuple) Set 
 */
class ModifyDataBaseTuple extends AbstractModel
{
    /**
     * @var DatabaseTuple 
     */
    public $DatabaseTuple;

    /**
     * @var DatabaseTuple 
     */
    public $NewDatabaseTuple;

    /**
     * @var boolean 
     */
    public $DeleteDataBasesTuple;

    /**
     * @param DatabaseTuple $DatabaseTuple 
     * @param DatabaseTuple $NewDatabaseTuple 
     * @param boolean $DeleteDataBasesTuple 
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
