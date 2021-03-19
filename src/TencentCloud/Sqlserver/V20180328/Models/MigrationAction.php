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
 * Operation allowed by a cold backup import task
 *
 * @method array getAllAction() Obtain All the allowed operations. Values include: view (viewing a task), modify (modifying a task), start (starting a task), incremental (creating an incremental task), delete (deleting a task), and upload (obtaining the upload permission).
 * @method void setAllAction(array $AllAction) Set All the allowed operations. Values include: view (viewing a task), modify (modifying a task), start (starting a task), incremental (creating an incremental task), delete (deleting a task), and upload (obtaining the upload permission).
 * @method array getAllowedAction() Obtain Operation allowed in the current status. If the subset of AllAction is left empty, no operations will be allowed.
 * @method void setAllowedAction(array $AllowedAction) Set Operation allowed in the current status. If the subset of AllAction is left empty, no operations will be allowed.
 */
class MigrationAction extends AbstractModel
{
    /**
     * @var array All the allowed operations. Values include: view (viewing a task), modify (modifying a task), start (starting a task), incremental (creating an incremental task), delete (deleting a task), and upload (obtaining the upload permission).
     */
    public $AllAction;

    /**
     * @var array Operation allowed in the current status. If the subset of AllAction is left empty, no operations will be allowed.
     */
    public $AllowedAction;

    /**
     * @param array $AllAction All the allowed operations. Values include: view (viewing a task), modify (modifying a task), start (starting a task), incremental (creating an incremental task), delete (deleting a task), and upload (obtaining the upload permission).
     * @param array $AllowedAction Operation allowed in the current status. If the subset of AllAction is left empty, no operations will be allowed.
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
        if (array_key_exists("AllAction",$param) and $param["AllAction"] !== null) {
            $this->AllAction = $param["AllAction"];
        }

        if (array_key_exists("AllowedAction",$param) and $param["AllowedAction"] !== null) {
            $this->AllowedAction = $param["AllowedAction"];
        }
    }
}
