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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the cross-region replication task
 *
 * @method string getSnapshotId() Obtain ID of the snapshot replica
 * @method void setSnapshotId(string $SnapshotId) Set ID of the snapshot replica
 * @method string getMessage() Obtain Error message. It’s null if the request succeeds.
 * @method void setMessage(string $Message) Set Error message. It’s null if the request succeeds.
 * @method string getCode() Obtain Error code. It’s `Success` if the request succeeds.
 * @method void setCode(string $Code) Set Error code. It’s `Success` if the request succeeds.
 * @method string getDestinationRegion() Obtain Destination region of the replication task
 * @method void setDestinationRegion(string $DestinationRegion) Set Destination region of the replication task
 */
class SnapshotCopyResult extends AbstractModel
{
    /**
     * @var string ID of the snapshot replica
     */
    public $SnapshotId;

    /**
     * @var string Error message. It’s null if the request succeeds.
     */
    public $Message;

    /**
     * @var string Error code. It’s `Success` if the request succeeds.
     */
    public $Code;

    /**
     * @var string Destination region of the replication task
     */
    public $DestinationRegion;

    /**
     * @param string $SnapshotId ID of the snapshot replica
     * @param string $Message Error message. It’s null if the request succeeds.
     * @param string $Code Error code. It’s `Success` if the request succeeds.
     * @param string $DestinationRegion Destination region of the replication task
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }
    }
}
