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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtectMode request structure.
 *
 * @method integer getProtectMode() Obtain Data replication method, defaults to 0. Supported values include: 0 - asynchronous replication, 1 - semi-sync replication, 2 - strong sync replication.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication method, defaults to 0. Supported values include: 0 - asynchronous replication, 1 - semi-sync replication, 2 - strong sync replication.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 */
class ModifyProtectModeRequest extends AbstractModel
{
    /**
     * @var integer Data replication method, defaults to 0. Supported values include: 0 - asynchronous replication, 1 - semi-sync replication, 2 - strong sync replication.
     */
    public $ProtectMode;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @param integer $ProtectMode Data replication method, defaults to 0. Supported values include: 0 - asynchronous replication, 1 - semi-sync replication, 2 - strong sync replication.
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
