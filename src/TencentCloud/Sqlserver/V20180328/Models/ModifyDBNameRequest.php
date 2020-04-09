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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBName request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getOldDBName() Obtain Old database name
 * @method void setOldDBName(string $OldDBName) Set Old database name
 * @method string getNewDBName() Obtain New name of database
 * @method void setNewDBName(string $NewDBName) Set New name of database
 */
class ModifyDBNameRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Old database name
     */
    public $OldDBName;

    /**
     * @var string New name of database
     */
    public $NewDBName;

    /**
     * @param string $InstanceId Instance ID
     * @param string $OldDBName Old database name
     * @param string $NewDBName New name of database
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

        if (array_key_exists("OldDBName",$param) and $param["OldDBName"] !== null) {
            $this->OldDBName = $param["OldDBName"];
        }

        if (array_key_exists("NewDBName",$param) and $param["NewDBName"] !== null) {
            $this->NewDBName = $param["NewDBName"];
        }
    }
}
