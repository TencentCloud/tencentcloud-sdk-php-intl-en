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
 * IsolateCluster request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getDbType() Obtain This parameter has been disused.
 * @method void setDbType(string $DbType) Set This parameter has been disused.
 * @method array getIsolateReasonTypes() Obtain Instance return reason type.
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) Set Instance return reason type.
 * @method string getIsolateReason() Obtain Instance return reason supplement.
 * @method void setIsolateReason(string $IsolateReason) Set Instance return reason supplement.
 * @method boolean getSaveBackup() Obtain Retain backup, true - Retained (incur fees).
 * @method void setSaveBackup(boolean $SaveBackup) Set Retain backup, true - Retained (incur fees).
 */
class IsolateClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string This parameter has been disused.
     */
    public $DbType;

    /**
     * @var array Instance return reason type.
     */
    public $IsolateReasonTypes;

    /**
     * @var string Instance return reason supplement.
     */
    public $IsolateReason;

    /**
     * @var boolean Retain backup, true - Retained (incur fees).
     */
    public $SaveBackup;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $DbType This parameter has been disused.
     * @param array $IsolateReasonTypes Instance return reason type.
     * @param string $IsolateReason Instance return reason supplement.
     * @param boolean $SaveBackup Retain backup, true - Retained (incur fees).
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
