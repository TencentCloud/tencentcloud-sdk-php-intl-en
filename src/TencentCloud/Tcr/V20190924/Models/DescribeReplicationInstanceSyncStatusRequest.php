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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationInstanceSyncStatus request structure.
 *
 * @method string getRegistryId() Obtain Master instance ID
 * @method void setRegistryId(string $RegistryId) Set Master instance ID
 * @method string getReplicationRegistryId() Obtain Replication instance ID
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) Set Replication instance ID
 * @method integer getReplicationRegionId() Obtain Region ID of the replication instance
 * @method void setReplicationRegionId(integer $ReplicationRegionId) Set Region ID of the replication instance
 * @method boolean getShowReplicationLog() Obtain Whether to show the synchronization log
 * @method void setShowReplicationLog(boolean $ShowReplicationLog) Set Whether to show the synchronization log
 * @method integer getOffset() Obtain Page offset for log display. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset for log display. Default value: 0
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 5, maximum value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 5, maximum value: 20.
 */
class DescribeReplicationInstanceSyncStatusRequest extends AbstractModel
{
    /**
     * @var string Master instance ID
     */
    public $RegistryId;

    /**
     * @var string Replication instance ID
     */
    public $ReplicationRegistryId;

    /**
     * @var integer Region ID of the replication instance
     */
    public $ReplicationRegionId;

    /**
     * @var boolean Whether to show the synchronization log
     */
    public $ShowReplicationLog;

    /**
     * @var integer Page offset for log display. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: 5, maximum value: 20.
     */
    public $Limit;

    /**
     * @param string $RegistryId Master instance ID
     * @param string $ReplicationRegistryId Replication instance ID
     * @param integer $ReplicationRegionId Region ID of the replication instance
     * @param boolean $ShowReplicationLog Whether to show the synchronization log
     * @param integer $Offset Page offset for log display. Default value: 0
     * @param integer $Limit Maximum number of output entries. Default value: 5, maximum value: 20.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("ReplicationRegistryId",$param) and $param["ReplicationRegistryId"] !== null) {
            $this->ReplicationRegistryId = $param["ReplicationRegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }

        if (array_key_exists("ShowReplicationLog",$param) and $param["ShowReplicationLog"] !== null) {
            $this->ShowReplicationLog = $param["ShowReplicationLog"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
