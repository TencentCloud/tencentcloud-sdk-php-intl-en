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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log instance info
 *
 * @method string getInstanceName() Obtain <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain <p>Project ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain <p>Instance Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set <p>Instance Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngine() Obtain <p>Engine</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngine(string $Engine) Set <p>Engine</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineVersion() Obtain <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineVersion(string $EngineVersion) Set <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStatus() Obtain <p>Instance status</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportAudit() Obtain <p>Whether audit is supported. 1 means support, 0 means not supported.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportAudit(integer $IsSupportAudit) Set <p>Whether audit is supported. 1 means support, 0 means not supported.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getAuditType() Obtain <p>Log type</p><p>Enumeration value:</p><ul><li>complex: Granular audit</li><li>simple: Fast Audit</li></ul>
 * @method void setAuditType(string $AuditType) Set <p>Log type</p><p>Enumeration value:</p><ul><li>complex: Granular audit</li><li>simple: Fast Audit</li></ul>
 */
class LogInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer <p>Project ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var array <p>Instance Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string <p>Engine</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Engine;

    /**
     * @var string <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineVersion;

    /**
     * @var string <p>Instance status</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var integer <p>Whether audit is supported. 1 means support, 0 means not supported.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportAudit;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log type</p><p>Enumeration value:</p><ul><li>complex: Granular audit</li><li>simple: Fast Audit</li></ul>
     */
    public $AuditType;

    /**
     * @param string $InstanceName <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId <p>Project ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagList <p>Instance Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Engine <p>Engine</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineVersion <p>Engine version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStatus <p>Instance status</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportAudit <p>Whether audit is supported. 1 means support, 0 means not supported.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $AuditType <p>Log type</p><p>Enumeration value:</p><ul><li>complex: Granular audit</li><li>simple: Fast Audit</li></ul>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IsSupportAudit",$param) and $param["IsSupportAudit"] !== null) {
            $this->IsSupportAudit = $param["IsSupportAudit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }
    }
}
