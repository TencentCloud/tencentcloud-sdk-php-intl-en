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
 * @method array getInstanceIdList() Obtain Instance ID array, for example, ["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
 * @method void setInstanceIdList(array $InstanceIdList) Set Instance ID array, for example, ["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
 * @method string getDbType() Obtain This parameter has been deprecated.
 * @method void setDbType(string $DbType) Set This parameter has been deprecated.
 * @method array getIsolateReasonTypes() Obtain Refund reason type of the instance
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) Set Refund reason type of the instance
 * @method string getIsolateReason() Obtain Supplementary reason for instance return
 * @method void setIsolateReason(string $IsolateReason) Set Supplementary reason for instance return
 * @method boolean getSaveBackup() Obtain Retain backups
 * @method void setSaveBackup(boolean $SaveBackup) Set Retain backups
 */
class IsolateInstanceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID array, for example, ["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
     */
    public $InstanceIdList;

    /**
     * @var string This parameter has been deprecated.
     */
    public $DbType;

    /**
     * @var array Refund reason type of the instance
     */
    public $IsolateReasonTypes;

    /**
     * @var string Supplementary reason for instance return
     */
    public $IsolateReason;

    /**
     * @var boolean Retain backups
     */
    public $SaveBackup;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIdList Instance ID array, for example, ["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
     * @param string $DbType This parameter has been deprecated.
     * @param array $IsolateReasonTypes Refund reason type of the instance
     * @param string $IsolateReason Supplementary reason for instance return
     * @param boolean $SaveBackup Retain backups
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
