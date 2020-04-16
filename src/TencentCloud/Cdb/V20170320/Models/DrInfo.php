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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disaster recovery instance information
 *
 * @method integer getStatus() Obtain Disaster recovery instance status
 * @method void setStatus(integer $Status) Set Disaster recovery instance status
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method integer getSyncStatus() Obtain Instance sync status. Possible returned values include:
0 - disaster recovery not synced;
1 - disaster recovery syncing;
2 - disaster recovery synced successfully;
3 - disaster recovery sync failed;
4 - repairing disaster recovery sync;
 * @method void setSyncStatus(integer $SyncStatus) Set Instance sync status. Possible returned values include:
0 - disaster recovery not synced;
1 - disaster recovery syncing;
2 - disaster recovery synced successfully;
3 - disaster recovery sync failed;
4 - repairing disaster recovery sync;
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getInstanceType() Obtain Instance type
 * @method void setInstanceType(integer $InstanceType) Set Instance type
 */
class DrInfo extends AbstractModel
{
    /**
     * @var integer Disaster recovery instance status
     */
    public $Status;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var integer Instance sync status. Possible returned values include:
0 - disaster recovery not synced;
1 - disaster recovery syncing;
2 - disaster recovery synced successfully;
3 - disaster recovery sync failed;
4 - repairing disaster recovery sync;
     */
    public $SyncStatus;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Instance type
     */
    public $InstanceType;

    /**
     * @param integer $Status Disaster recovery instance status
     * @param string $Zone AZ information
     * @param string $InstanceId Instance ID
     * @param string $Region Region information
     * @param integer $SyncStatus Instance sync status. Possible returned values include:
0 - disaster recovery not synced;
1 - disaster recovery syncing;
2 - disaster recovery synced successfully;
3 - disaster recovery sync failed;
4 - repairing disaster recovery sync;
     * @param string $InstanceName Instance name
     * @param integer $InstanceType Instance type
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
