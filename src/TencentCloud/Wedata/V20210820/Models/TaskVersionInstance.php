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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Instance Basic Information
 *
 * @method integer getInstanceVersion() Obtain Instance Version Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceVersion(integer $InstanceVersion) Set Instance Version Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVersionDesc() Obtain Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVersionDesc(string $VersionDesc) Set Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getChangeType() Obtain 0, "Add",1, "Modify"
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChangeType(integer $ChangeType) Set 0, "Add",1, "Modify"
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubmitterUin() Obtain Version Submitter UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmitterUin(string $SubmitterUin) Set Version Submitter UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceDate() Obtain Submission Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceDate(string $InstanceDate) Set Submission Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInstanceStatus() Obtain 0, "Disabled",1, "Enabled (Production)"
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceStatus(integer $InstanceStatus) Set 0, "Disabled",1, "Enabled (Production)"
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskVersionInstance extends AbstractModel
{
    /**
     * @var integer Instance Version Number
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceVersion;

    /**
     * @var string Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VersionDesc;

    /**
     * @var integer 0, "Add",1, "Modify"
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChangeType;

    /**
     * @var string Version Submitter UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubmitterUin;

    /**
     * @var string Submission Date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceDate;

    /**
     * @var integer 0, "Disabled",1, "Enabled (Production)"
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceStatus;

    /**
     * @param integer $InstanceVersion Instance Version Number
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $VersionDesc Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ChangeType 0, "Add",1, "Modify"
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubmitterUin Version Submitter UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceDate Submission Date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InstanceStatus 0, "Disabled",1, "Enabled (Production)"
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("SubmitterUin",$param) and $param["SubmitterUin"] !== null) {
            $this->SubmitterUin = $param["SubmitterUin"];
        }

        if (array_key_exists("InstanceDate",$param) and $param["InstanceDate"] !== null) {
            $this->InstanceDate = $param["InstanceDate"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
