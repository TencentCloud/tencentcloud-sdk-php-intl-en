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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDiskBackup request structure.
 *
 * @method string getDiskId() Obtain Name of the cloud disk for which to create a backup point.
 * @method void setDiskId(string $DiskId) Set Name of the cloud disk for which to create a backup point.
 * @method string getDiskBackupName() Obtain Name of the cloud disk backup point, which can contain up to 100 characters.
 * @method void setDiskBackupName(string $DiskBackupName) Set Name of the cloud disk backup point, which can contain up to 100 characters.
 */
class CreateDiskBackupRequest extends AbstractModel
{
    /**
     * @var string Name of the cloud disk for which to create a backup point.
     */
    public $DiskId;

    /**
     * @var string Name of the cloud disk backup point, which can contain up to 100 characters.
     */
    public $DiskBackupName;

    /**
     * @param string $DiskId Name of the cloud disk for which to create a backup point.
     * @param string $DiskBackupName Name of the cloud disk backup point, which can contain up to 100 characters.
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }
    }
}
