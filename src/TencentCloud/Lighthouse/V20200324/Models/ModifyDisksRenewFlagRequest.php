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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDisksRenewFlag request structure.
 *
 * @method array getDiskIds() Obtain List of cloud disk IDs.
 * @method void setDiskIds(array $DiskIds) Set List of cloud disk IDs.
 * @method string getRenewFlag() Obtain Whether Auto-Renewal is enabled 
 * @method void setRenewFlag(string $RenewFlag) Set Whether Auto-Renewal is enabled 
 */
class ModifyDisksRenewFlagRequest extends AbstractModel
{
    /**
     * @var array List of cloud disk IDs.
     */
    public $DiskIds;

    /**
     * @var string Whether Auto-Renewal is enabled 
     */
    public $RenewFlag;

    /**
     * @param array $DiskIds List of cloud disk IDs.
     * @param string $RenewFlag Whether Auto-Renewal is enabled 
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
