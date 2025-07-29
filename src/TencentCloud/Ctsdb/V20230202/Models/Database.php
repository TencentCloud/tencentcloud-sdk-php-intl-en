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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database-related information.
 *
 * @method string getClusterID() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterID(string $ClusterID) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Database name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Database name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCoolDownInDays() Obtain Cold storage time (days).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoolDownInDays(integer $CoolDownInDays) Set Cold storage time (days).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetentionInDays() Obtain Data retention time (days).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetentionInDays(integer $RetentionInDays) Set Data retention time (days).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. 0: initializing resources; 1: creating resources; 2: normal status; 3: deleting resources; 4: deleted resources; 5: disabling resources; 6: disabled resources; 7: abnormal resources, and manual operation is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status. 0: initializing resources; 1: creating resources; 2: normal status; 3: deleting resources; 4: deleted resources; 5: disabling resources; 6: disabled resources; 7: abnormal resources, and manual operation is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Database extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterID;

    /**
     * @var string Database name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Cold storage time (days).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoolDownInDays;

    /**
     * @var integer Data retention time (days).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetentionInDays;

    /**
     * @var string Remarks.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer Status. 0: initializing resources; 1: creating resources; 2: normal status; 3: deleting resources; 4: deleted resources; 5: disabling resources; 6: disabled resources; 7: abnormal resources, and manual operation is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @param string $ClusterID Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Database name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CoolDownInDays Cold storage time (days).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetentionInDays Data retention time (days).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. 0: initializing resources; 1: creating resources; 2: normal status; 3: deleting resources; 4: deleted resources; 5: disabling resources; 6: disabled resources; 7: abnormal resources, and manual operation is required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Last modification time.
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CoolDownInDays",$param) and $param["CoolDownInDays"] !== null) {
            $this->CoolDownInDays = $param["CoolDownInDays"];
        }

        if (array_key_exists("RetentionInDays",$param) and $param["RetentionInDays"] !== null) {
            $this->RetentionInDays = $param["RetentionInDays"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
