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
 * ModifySnapshotAttribute request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID. can be queried via DescribeSnapshots (https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1).
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID. can be queried via DescribeSnapshots (https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1).
 * @method boolean getIsPermanent() Obtain Snapshot retention mode. Valid values: `FALSE`: non-permanent retention; `TRUE`: permanent retention.
 * @method void setIsPermanent(boolean $IsPermanent) Set Snapshot retention mode. Valid values: `FALSE`: non-permanent retention; `TRUE`: permanent retention.
 * @method string getSnapshotName() Obtain Name of new snapshot. Maximum length is 60 bytes.
 * @method void setSnapshotName(string $SnapshotName) Set Name of new snapshot. Maximum length is 60 bytes.
 * @method string getDeadline() Obtain Specifies the snapshot expiration time. the snapshot will be simultaneously set to the non-permanent retention method. snapshots exceeding the expiry time will be automatically deleted. note: this parameter is valid only when IsPermanent is False.
 * @method void setDeadline(string $Deadline) Set Specifies the snapshot expiration time. the snapshot will be simultaneously set to the non-permanent retention method. snapshots exceeding the expiry time will be automatically deleted. note: this parameter is valid only when IsPermanent is False.
 */
class ModifySnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID. can be queried via DescribeSnapshots (https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1).
     */
    public $SnapshotId;

    /**
     * @var boolean Snapshot retention mode. Valid values: `FALSE`: non-permanent retention; `TRUE`: permanent retention.
     */
    public $IsPermanent;

    /**
     * @var string Name of new snapshot. Maximum length is 60 bytes.
     */
    public $SnapshotName;

    /**
     * @var string Specifies the snapshot expiration time. the snapshot will be simultaneously set to the non-permanent retention method. snapshots exceeding the expiry time will be automatically deleted. note: this parameter is valid only when IsPermanent is False.
     */
    public $Deadline;

    /**
     * @param string $SnapshotId Snapshot ID. can be queried via DescribeSnapshots (https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1).
     * @param boolean $IsPermanent Snapshot retention mode. Valid values: `FALSE`: non-permanent retention; `TRUE`: permanent retention.
     * @param string $SnapshotName Name of new snapshot. Maximum length is 60 bytes.
     * @param string $Deadline Specifies the snapshot expiration time. the snapshot will be simultaneously set to the non-permanent retention method. snapshots exceeding the expiry time will be automatically deleted. note: this parameter is valid only when IsPermanent is False.
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

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
