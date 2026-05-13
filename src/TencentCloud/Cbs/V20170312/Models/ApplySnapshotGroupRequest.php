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
 * ApplySnapshotGroup request structure.
 *
 * @method string getSnapshotGroupId() Obtain Specifies the snapshot group ID rolled back.
 * @method void setSnapshotGroupId(string $SnapshotGroupId) Set Specifies the snapshot group ID rolled back.
 * @method array getApplyDisks() Obtain Specifies the snapshot ID associated with the rollback snapshot group and the original cloud disk ID list of the corresponding snapshot.
 * @method void setApplyDisks(array $ApplyDisks) Set Specifies the snapshot ID associated with the rollback snapshot group and the original cloud disk ID list of the corresponding snapshot.
 * @method boolean getAutoStopInstance() Obtain Specifies whether to perform automatic shutdown before rollback.
 * @method void setAutoStopInstance(boolean $AutoStopInstance) Set Specifies whether to perform automatic shutdown before rollback.
 * @method boolean getAutoStartInstance() Obtain Specifies whether to automatically start after completion.
 * @method void setAutoStartInstance(boolean $AutoStartInstance) Set Specifies whether to automatically start after completion.
 */
class ApplySnapshotGroupRequest extends AbstractModel
{
    /**
     * @var string Specifies the snapshot group ID rolled back.
     */
    public $SnapshotGroupId;

    /**
     * @var array Specifies the snapshot ID associated with the rollback snapshot group and the original cloud disk ID list of the corresponding snapshot.
     */
    public $ApplyDisks;

    /**
     * @var boolean Specifies whether to perform automatic shutdown before rollback.
     */
    public $AutoStopInstance;

    /**
     * @var boolean Specifies whether to automatically start after completion.
     */
    public $AutoStartInstance;

    /**
     * @param string $SnapshotGroupId Specifies the snapshot group ID rolled back.
     * @param array $ApplyDisks Specifies the snapshot ID associated with the rollback snapshot group and the original cloud disk ID list of the corresponding snapshot.
     * @param boolean $AutoStopInstance Specifies whether to perform automatic shutdown before rollback.
     * @param boolean $AutoStartInstance Specifies whether to automatically start after completion.
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
        if (array_key_exists("SnapshotGroupId",$param) and $param["SnapshotGroupId"] !== null) {
            $this->SnapshotGroupId = $param["SnapshotGroupId"];
        }

        if (array_key_exists("ApplyDisks",$param) and $param["ApplyDisks"] !== null) {
            $this->ApplyDisks = [];
            foreach ($param["ApplyDisks"] as $key => $value){
                $obj = new ApplyDisk();
                $obj->deserialize($value);
                array_push($this->ApplyDisks, $obj);
            }
        }

        if (array_key_exists("AutoStopInstance",$param) and $param["AutoStopInstance"] !== null) {
            $this->AutoStopInstance = $param["AutoStopInstance"];
        }

        if (array_key_exists("AutoStartInstance",$param) and $param["AutoStartInstance"] !== null) {
            $this->AutoStartInstance = $param["AutoStartInstance"];
        }
    }
}
