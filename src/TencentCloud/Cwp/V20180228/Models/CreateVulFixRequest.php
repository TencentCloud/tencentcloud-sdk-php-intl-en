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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulFix request structure.
 *
 * @method array getCreateVulFixTaskQuuids() Obtain List of hosts for which the vulnerability should be fixed
 * @method void setCreateVulFixTaskQuuids(array $CreateVulFixTaskQuuids) Set List of hosts for which the vulnerability should be fixed
 * @method integer getSaveDays() Obtain Snapshot retention days: 0 days indicates that no snapshot will be created. Hosts without a snapshot for 24 hours must have a snapshot created to be restored.
 * @method void setSaveDays(integer $SaveDays) Set Snapshot retention days: 0 days indicates that no snapshot will be created. Hosts without a snapshot for 24 hours must have a snapshot created to be restored.
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 */
class CreateVulFixRequest extends AbstractModel
{
    /**
     * @var array List of hosts for which the vulnerability should be fixed
     */
    public $CreateVulFixTaskQuuids;

    /**
     * @var integer Snapshot retention days: 0 days indicates that no snapshot will be created. Hosts without a snapshot for 24 hours must have a snapshot created to be restored.
     */
    public $SaveDays;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @param array $CreateVulFixTaskQuuids List of hosts for which the vulnerability should be fixed
     * @param integer $SaveDays Snapshot retention days: 0 days indicates that no snapshot will be created. Hosts without a snapshot for 24 hours must have a snapshot created to be restored.
     * @param string $SnapshotName Snapshot name
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
        if (array_key_exists("CreateVulFixTaskQuuids",$param) and $param["CreateVulFixTaskQuuids"] !== null) {
            $this->CreateVulFixTaskQuuids = [];
            foreach ($param["CreateVulFixTaskQuuids"] as $key => $value){
                $obj = new CreateVulFixTaskQuuids();
                $obj->deserialize($value);
                array_push($this->CreateVulFixTaskQuuids, $obj);
            }
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
