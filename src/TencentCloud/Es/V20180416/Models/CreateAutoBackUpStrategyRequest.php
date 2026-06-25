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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoBackUpStrategy request structure.
 *
 * @method string getInstanceId() Obtain Instance name.
 * @method void setInstanceId(string $InstanceId) Set Instance name.
 * @method CosBackup getCosBackup() Obtain Policy information.
 * @method void setCosBackup(CosBackup $CosBackup) Set Policy information.
 */
class CreateAutoBackUpStrategyRequest extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceId;

    /**
     * @var CosBackup Policy information.
     */
    public $CosBackup;

    /**
     * @param string $InstanceId Instance name.
     * @param CosBackup $CosBackup Policy information.
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

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }
    }
}
