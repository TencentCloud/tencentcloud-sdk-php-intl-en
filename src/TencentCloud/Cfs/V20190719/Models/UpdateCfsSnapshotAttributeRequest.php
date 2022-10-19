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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsSnapshotAttribute request structure.
 *
 * @method string getSnapshotId() Obtain File system snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set File system snapshot ID
 * @method string getSnapshotName() Obtain File system snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set File system snapshot name
 * @method integer getAliveDays() Obtain File system snapshot retention period in days
 * @method void setAliveDays(integer $AliveDays) Set File system snapshot retention period in days
 */
class UpdateCfsSnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string File system snapshot ID
     */
    public $SnapshotId;

    /**
     * @var string File system snapshot name
     */
    public $SnapshotName;

    /**
     * @var integer File system snapshot retention period in days
     */
    public $AliveDays;

    /**
     * @param string $SnapshotId File system snapshot ID
     * @param string $SnapshotName File system snapshot name
     * @param integer $AliveDays File system snapshot retention period in days
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }
    }
}
