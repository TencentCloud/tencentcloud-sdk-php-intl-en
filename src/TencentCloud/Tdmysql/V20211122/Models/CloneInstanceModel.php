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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clone instance object.
 *
 * @method string getCloneEndTime() Obtain Clone task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneEndTime(string $CloneEndTime) Set Clone task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCloneId() Obtain Clone record ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneId(integer $CloneId) Set Clone record ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneInsType() Obtain Clone instance type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneInsType(string $CloneInsType) Set Clone instance type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneInstanceId() Obtain Clone instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneInstanceId(string $CloneInstanceId) Set Clone instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCloneInstanceIsDeleted() Obtain Whether the clone instance is deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneInstanceIsDeleted(boolean $CloneInstanceIsDeleted) Set Whether the clone instance is deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCloneProgress() Obtain Task progress of clone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneProgress(float $CloneProgress) Set Task progress of clone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneStartTime() Obtain Task start time of the clone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneStartTime(string $CloneStartTime) Set Task start time of the clone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneStatus() Obtain Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneStatus(string $CloneStatus) Set Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneTime() Obtain Clone time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneTime(string $CloneTime) Set Clone time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloneType() Obtain Clone type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloneType(string $CloneType) Set Clone type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBType() Obtain Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBType(string $DBType) Set Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceInstanceId() Obtain Source instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceInstanceId(string $SourceInstanceId) Set Source instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CloneInstanceModel extends AbstractModel
{
    /**
     * @var string Clone task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneEndTime;

    /**
     * @var integer Clone record ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneId;

    /**
     * @var string Clone instance type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneInsType;

    /**
     * @var string Clone instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneInstanceId;

    /**
     * @var boolean Whether the clone instance is deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneInstanceIsDeleted;

    /**
     * @var float Task progress of clone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneProgress;

    /**
     * @var string Task start time of the clone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneStartTime;

    /**
     * @var string Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneStatus;

    /**
     * @var string Clone time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneTime;

    /**
     * @var string Clone type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloneType;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBType;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Source instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceInstanceId;

    /**
     * @param string $CloneEndTime Clone task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CloneId Clone record ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneInsType Clone instance type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneInstanceId Clone instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CloneInstanceIsDeleted Whether the clone instance is deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CloneProgress Task progress of clone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneStartTime Task start time of the clone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneStatus Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneTime Clone time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloneType Clone type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBType Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceInstanceId Source instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CloneEndTime",$param) and $param["CloneEndTime"] !== null) {
            $this->CloneEndTime = $param["CloneEndTime"];
        }

        if (array_key_exists("CloneId",$param) and $param["CloneId"] !== null) {
            $this->CloneId = $param["CloneId"];
        }

        if (array_key_exists("CloneInsType",$param) and $param["CloneInsType"] !== null) {
            $this->CloneInsType = $param["CloneInsType"];
        }

        if (array_key_exists("CloneInstanceId",$param) and $param["CloneInstanceId"] !== null) {
            $this->CloneInstanceId = $param["CloneInstanceId"];
        }

        if (array_key_exists("CloneInstanceIsDeleted",$param) and $param["CloneInstanceIsDeleted"] !== null) {
            $this->CloneInstanceIsDeleted = $param["CloneInstanceIsDeleted"];
        }

        if (array_key_exists("CloneProgress",$param) and $param["CloneProgress"] !== null) {
            $this->CloneProgress = $param["CloneProgress"];
        }

        if (array_key_exists("CloneStartTime",$param) and $param["CloneStartTime"] !== null) {
            $this->CloneStartTime = $param["CloneStartTime"];
        }

        if (array_key_exists("CloneStatus",$param) and $param["CloneStatus"] !== null) {
            $this->CloneStatus = $param["CloneStatus"];
        }

        if (array_key_exists("CloneTime",$param) and $param["CloneTime"] !== null) {
            $this->CloneTime = $param["CloneTime"];
        }

        if (array_key_exists("CloneType",$param) and $param["CloneType"] !== null) {
            $this->CloneType = $param["CloneType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }
    }
}
