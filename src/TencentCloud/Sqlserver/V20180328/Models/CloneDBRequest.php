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
 * CloneDB request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-j8kv137v
 * @method array getRenameRestore() Obtain Clone and rename the databases specified in `ReNameRestoreDatabase`. Please note that the clones must be renamed.
 * @method void setRenameRestore(array $RenameRestore) Set Clone and rename the databases specified in `ReNameRestoreDatabase`. Please note that the clones must be renamed.
 */
class CloneDBRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var array Clone and rename the databases specified in `ReNameRestoreDatabase`. Please note that the clones must be renamed.
     */
    public $RenameRestore;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-j8kv137v
     * @param array $RenameRestore Clone and rename the databases specified in `ReNameRestoreDatabase`. Please note that the clones must be renamed.
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

        if (array_key_exists("RenameRestore",$param) and $param["RenameRestore"] !== null) {
            $this->RenameRestore = [];
            foreach ($param["RenameRestore"] as $key => $value){
                $obj = new RenameRestoreDatabase();
                $obj->deserialize($value);
                array_push($this->RenameRestore, $obj);
            }
        }
    }
}
