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
 * Integrated cluster configuration.
 *
 * @method integer getBinlogSaveDays() Obtain Retention days of binlog. value range: 7-1830.
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) Set Retention days of binlog. value range: 7-1830.
 * @method integer getBackupSaveDays() Obtain Specifies the backup retention days. value range: 7-1830.
 * @method void setBackupSaveDays(integer $BackupSaveDays) Set Specifies the backup retention days. value range: 7-1830.
 * @method integer getSemiSyncTimeout() Obtain Specifies the semi-sync timeout period. value range: [1000,4294967295].
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) Set Specifies the semi-sync timeout period. value range: [1000,4294967295].
 * @method array getProxyEndPointConfigs() Obtain proxy connection address configuration message.
 * @method void setProxyEndPointConfigs(array $ProxyEndPointConfigs) Set proxy connection address configuration message.
 */
class IntegrateCreateClusterConfig extends AbstractModel
{
    /**
     * @var integer Retention days of binlog. value range: 7-1830.
     */
    public $BinlogSaveDays;

    /**
     * @var integer Specifies the backup retention days. value range: 7-1830.
     */
    public $BackupSaveDays;

    /**
     * @var integer Specifies the semi-sync timeout period. value range: [1000,4294967295].
     */
    public $SemiSyncTimeout;

    /**
     * @var array proxy connection address configuration message.
     */
    public $ProxyEndPointConfigs;

    /**
     * @param integer $BinlogSaveDays Retention days of binlog. value range: 7-1830.
     * @param integer $BackupSaveDays Specifies the backup retention days. value range: 7-1830.
     * @param integer $SemiSyncTimeout Specifies the semi-sync timeout period. value range: [1000,4294967295].
     * @param array $ProxyEndPointConfigs proxy connection address configuration message.
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
        if (array_key_exists("BinlogSaveDays",$param) and $param["BinlogSaveDays"] !== null) {
            $this->BinlogSaveDays = $param["BinlogSaveDays"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }

        if (array_key_exists("ProxyEndPointConfigs",$param) and $param["ProxyEndPointConfigs"] !== null) {
            $this->ProxyEndPointConfigs = [];
            foreach ($param["ProxyEndPointConfigs"] as $key => $value){
                $obj = new ProxyEndPointConfigInfo();
                $obj->deserialize($value);
                array_push($this->ProxyEndPointConfigs, $obj);
            }
        }
    }
}
