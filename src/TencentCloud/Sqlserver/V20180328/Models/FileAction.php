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
 * Information of allowed operation
 *
 * @method array getAllAction() Obtain Allowed operations. Valid values: `view` (view list), `remark` (modify remark), `deploy` (deploy files), `delete` (delete files).
 * @method void setAllAction(array $AllAction) Set Allowed operations. Valid values: `view` (view list), `remark` (modify remark), `deploy` (deploy files), `delete` (delete files).
 * @method array getAllowedAction() Obtain Operation allowed in the current status. If the subset of `AllAction` is empty, no operations will be allowed.
 * @method void setAllowedAction(array $AllowedAction) Set Operation allowed in the current status. If the subset of `AllAction` is empty, no operations will be allowed.
 */
class FileAction extends AbstractModel
{
    /**
     * @var array Allowed operations. Valid values: `view` (view list), `remark` (modify remark), `deploy` (deploy files), `delete` (delete files).
     */
    public $AllAction;

    /**
     * @var array Operation allowed in the current status. If the subset of `AllAction` is empty, no operations will be allowed.
     */
    public $AllowedAction;

    /**
     * @param array $AllAction Allowed operations. Valid values: `view` (view list), `remark` (modify remark), `deploy` (deploy files), `delete` (delete files).
     * @param array $AllowedAction Operation allowed in the current status. If the subset of `AllAction` is empty, no operations will be allowed.
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
