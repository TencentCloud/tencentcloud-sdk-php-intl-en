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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateInstance request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIdList() Obtain Instance ID array
 * @method void setInstanceIdList(array $InstanceIdList) Set Instance ID array
 * @method string getDbType() Obtain This parameter has been disused.
 * @method void setDbType(string $DbType) Set This parameter has been disused.
 * @method array getIsolateReasonTypes() Obtain Instance Refund Reason Types
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) Set Instance Refund Reason Types
 * @method string getIsolateReason() Obtain Instance Refund Reason Supplement
 * @method void setIsolateReason(string $IsolateReason) Set Instance Refund Reason Supplement
 * @method boolean getSaveBackup() Obtain Backup retention
 * @method void setSaveBackup(boolean $SaveBackup) Set Backup retention
 */
class IsolateInstanceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID array
     */
    public $InstanceIdList;

    /**
     * @var string This parameter has been disused.
     */
    public $DbType;

    /**
     * @var array Instance Refund Reason Types
     */
    public $IsolateReasonTypes;

    /**
     * @var string Instance Refund Reason Supplement
     */
    public $IsolateReason;

    /**
     * @var boolean Backup retention
     */
    public $SaveBackup;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIdList Instance ID array
     * @param string $DbType This parameter has been disused.
     * @param array $IsolateReasonTypes Instance Refund Reason Types
     * @param string $IsolateReason Instance Refund Reason Supplement
     * @param boolean $SaveBackup Backup retention
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("IsolateReasonTypes",$param) and $param["IsolateReasonTypes"] !== null) {
            $this->IsolateReasonTypes = $param["IsolateReasonTypes"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }

        if (array_key_exists("SaveBackup",$param) and $param["SaveBackup"] !== null) {
            $this->SaveBackup = $param["SaveBackup"];
        }
    }
}
