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
 * ModifyDBRemark request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-rljoi3bf
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-rljoi3bf
 * @method array getDBRemarks() Obtain Array of database names and remarks, where each element contains a database name and the corresponding remarks
 * @method void setDBRemarks(array $DBRemarks) Set Array of database names and remarks, where each element contains a database name and the corresponding remarks
 */
class ModifyDBRemarkRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-rljoi3bf
     */
    public $InstanceId;

    /**
     * @var array Array of database names and remarks, where each element contains a database name and the corresponding remarks
     */
    public $DBRemarks;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-rljoi3bf
     * @param array $DBRemarks Array of database names and remarks, where each element contains a database name and the corresponding remarks
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

        if (array_key_exists("DBRemarks",$param) and $param["DBRemarks"] !== null) {
            $this->DBRemarks = [];
            foreach ($param["DBRemarks"] as $key => $value){
                $obj = new DBRemark();
                $obj->deserialize($value);
                array_push($this->DBRemarks, $obj);
            }
        }
    }
}
