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
 * ModifyDatabaseCDC request structure.
 *
 * @method array getDBNames() Obtain Array of database names
 * @method void setDBNames(array $DBNames) Set Array of database names
 * @method string getModifyType() Obtain Enable or disable CDC. Valid values: `enable`, `disable`
 * @method void setModifyType(string $ModifyType) Set Enable or disable CDC. Valid values: `enable`, `disable`
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class ModifyDatabaseCDCRequest extends AbstractModel
{
    /**
     * @var array Array of database names
     */
    public $DBNames;

    /**
     * @var string Enable or disable CDC. Valid values: `enable`, `disable`
     */
    public $ModifyType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param array $DBNames Array of database names
     * @param string $ModifyType Enable or disable CDC. Valid values: `enable`, `disable`
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("DBNames",$param) and $param["DBNames"] !== null) {
            $this->DBNames = $param["DBNames"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
