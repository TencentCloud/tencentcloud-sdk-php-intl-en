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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulFixTask request structure.
 *
 * @method array getFixItems() Obtain <p>Repair item list, each item specifies a vulnerability/KB patch and its hosts requiring fixing<br>Input parameter limit: No more than 100 items, total number of instances not more than 5000</p>
 * @method void setFixItems(array $FixItems) Set <p>Repair item list, each item specifies a vulnerability/KB patch and its hosts requiring fixing<br>Input parameter limit: No more than 100 items, total number of instances not more than 5000</p>
 * @method integer getTimeout() Obtain <p>Maximum repair time<br>Measurement unit: second<br>Default value: 3600</p>
 * @method void setTimeout(integer $Timeout) Set <p>Maximum repair time<br>Measurement unit: second<br>Default value: 3600</p>
 * @method boolean getCreateSnapshot() Obtain <p>Whether to create a disk snapshot before repair<br>Default value: false</p>
 * @method void setCreateSnapshot(boolean $CreateSnapshot) Set <p>Whether to create a disk snapshot before repair<br>Default value: false</p>
 * @method string getSnapshotName() Obtain <p>Snapshot name. Valid when CreateSnapshot is true.<br>Input parameter limit: Up to 128 characters.</p>
 * @method void setSnapshotName(string $SnapshotName) Set <p>Snapshot name. Valid when CreateSnapshot is true.<br>Input parameter limit: Up to 128 characters.</p>
 * @method integer getSaveDays() Obtain <p>Snapshot retention days. Valid when CreateSnapshot is true.</p>
 * @method void setSaveDays(integer $SaveDays) Set <p>Snapshot retention days. Valid when CreateSnapshot is true.</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class CreateVulFixTaskRequest extends AbstractModel
{
    /**
     * @var array <p>Repair item list, each item specifies a vulnerability/KB patch and its hosts requiring fixing<br>Input parameter limit: No more than 100 items, total number of instances not more than 5000</p>
     */
    public $FixItems;

    /**
     * @var integer <p>Maximum repair time<br>Measurement unit: second<br>Default value: 3600</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>Whether to create a disk snapshot before repair<br>Default value: false</p>
     */
    public $CreateSnapshot;

    /**
     * @var string <p>Snapshot name. Valid when CreateSnapshot is true.<br>Input parameter limit: Up to 128 characters.</p>
     */
    public $SnapshotName;

    /**
     * @var integer <p>Snapshot retention days. Valid when CreateSnapshot is true.</p>
     */
    public $SaveDays;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param array $FixItems <p>Repair item list, each item specifies a vulnerability/KB patch and its hosts requiring fixing<br>Input parameter limit: No more than 100 items, total number of instances not more than 5000</p>
     * @param integer $Timeout <p>Maximum repair time<br>Measurement unit: second<br>Default value: 3600</p>
     * @param boolean $CreateSnapshot <p>Whether to create a disk snapshot before repair<br>Default value: false</p>
     * @param string $SnapshotName <p>Snapshot name. Valid when CreateSnapshot is true.<br>Input parameter limit: Up to 128 characters.</p>
     * @param integer $SaveDays <p>Snapshot retention days. Valid when CreateSnapshot is true.</p>
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("FixItems",$param) and $param["FixItems"] !== null) {
            $this->FixItems = [];
            foreach ($param["FixItems"] as $key => $value){
                $obj = new VulFixItem();
                $obj->deserialize($value);
                array_push($this->FixItems, $obj);
            }
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CreateSnapshot",$param) and $param["CreateSnapshot"] !== null) {
            $this->CreateSnapshot = $param["CreateSnapshot"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
