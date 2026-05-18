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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Total size of instance backup
 *
 * @method integer getSnapshotSize() Obtain Total size of full backup, in bytes
 * @method void setSnapshotSize(integer $SnapshotSize) Set Total size of full backup, in bytes
 * @method integer getOplogSize() Obtain Incremental backup total size
 * @method void setOplogSize(integer $OplogSize) Set Incremental backup total size
 * @method integer getFreeQuota() Obtain free quota
 * @method void setFreeQuota(integer $FreeQuota) Set free quota
 */
class BackupTotalSize extends AbstractModel
{
    /**
     * @var integer Total size of full backup, in bytes
     */
    public $SnapshotSize;

    /**
     * @var integer Incremental backup total size
     */
    public $OplogSize;

    /**
     * @var integer free quota
     */
    public $FreeQuota;

    /**
     * @param integer $SnapshotSize Total size of full backup, in bytes
     * @param integer $OplogSize Incremental backup total size
     * @param integer $FreeQuota free quota
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
        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }
    }
}
