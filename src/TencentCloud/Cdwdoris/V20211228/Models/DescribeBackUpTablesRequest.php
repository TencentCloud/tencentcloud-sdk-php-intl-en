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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpTables request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getBackupType() Obtain It is 0 by default. It is 1 when a one-time backup of the remote doris is performed. It is 2 when one-time COS recovery is performed.
 * @method void setBackupType(integer $BackupType) Set It is 0 by default. It is 1 when a one-time backup of the remote doris is performed. It is 2 when one-time COS recovery is performed.
 * @method DorisSourceInfo getDorisSourceInfo() Obtain Connection information of the remote doris cluster
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) Set Connection information of the remote doris cluster
 * @method CosSourceInfo getCosSourceInfo() Obtain COS information
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) Set COS information
 */
class DescribeBackUpTablesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer It is 0 by default. It is 1 when a one-time backup of the remote doris is performed. It is 2 when one-time COS recovery is performed.
     */
    public $BackupType;

    /**
     * @var DorisSourceInfo Connection information of the remote doris cluster
     */
    public $DorisSourceInfo;

    /**
     * @var CosSourceInfo COS information
     */
    public $CosSourceInfo;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $BackupType It is 0 by default. It is 1 when a one-time backup of the remote doris is performed. It is 2 when one-time COS recovery is performed.
     * @param DorisSourceInfo $DorisSourceInfo Connection information of the remote doris cluster
     * @param CosSourceInfo $CosSourceInfo COS information
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }
    }
}
