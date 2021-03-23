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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBBackups request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
 * @method integer getBackupMethod() Obtain Backup mode. Valid values: `0` (logical backup), `1` (physical backup), `2` (both modes). Default value: `0`.
 * @method void setBackupMethod(integer $BackupMethod) Set Backup mode. Valid values: `0` (logical backup), `1` (physical backup), `2` (both modes). Default value: `0`.
 * @method integer getLimit() Obtain Number of entries per page. Maximum value: `100`. If this parameter is left empty, all entries will be returned.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Maximum value: `100`. If this parameter is left empty, all entries will be returned.
 * @method integer getOffset() Obtain Pagination offset, starting from `0`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from `0`. Default value: `0`.
 */
class DescribeDBBackupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
     */
    public $InstanceId;

    /**
     * @var integer Backup mode. Valid values: `0` (logical backup), `1` (physical backup), `2` (both modes). Default value: `0`.
     */
    public $BackupMethod;

    /**
     * @var integer Number of entries per page. Maximum value: `100`. If this parameter is left empty, all entries will be returned.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, starting from `0`. Default value: `0`.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
     * @param integer $BackupMethod Backup mode. Valid values: `0` (logical backup), `1` (physical backup), `2` (both modes). Default value: `0`.
     * @param integer $Limit Number of entries per page. Maximum value: `100`. If this parameter is left empty, all entries will be returned.
     * @param integer $Offset Pagination offset, starting from `0`. Default value: `0`.
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
