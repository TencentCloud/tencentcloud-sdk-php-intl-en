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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRemoteBackupConfig response structure.
 *
 * @method integer getExpireDays() Obtain Remote backup retention period in days
 * @method void setExpireDays(integer $ExpireDays) Set Remote backup retention period in days
 * @method string getRemoteBackupSave() Obtain Remote data backup. Valid values:`off` (disable), `on` (enable).
 * @method void setRemoteBackupSave(string $RemoteBackupSave) Set Remote data backup. Valid values:`off` (disable), `on` (enable).
 * @method string getRemoteBinlogSave() Obtain Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
 * @method void setRemoteBinlogSave(string $RemoteBinlogSave) Set Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
 * @method array getRemoteRegion() Obtain List of configured remote backup regions
 * @method void setRemoteRegion(array $RemoteRegion) Set List of configured remote backup regions
 * @method array getRegionList() Obtain List of remote backup regions
 * @method void setRegionList(array $RegionList) Set List of remote backup regions
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRemoteBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Remote backup retention period in days
     */
    public $ExpireDays;

    /**
     * @var string Remote data backup. Valid values:`off` (disable), `on` (enable).
     */
    public $RemoteBackupSave;

    /**
     * @var string Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
     */
    public $RemoteBinlogSave;

    /**
     * @var array List of configured remote backup regions
     */
    public $RemoteRegion;

    /**
     * @var array List of remote backup regions
     */
    public $RegionList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ExpireDays Remote backup retention period in days
     * @param string $RemoteBackupSave Remote data backup. Valid values:`off` (disable), `on` (enable).
     * @param string $RemoteBinlogSave Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
     * @param array $RemoteRegion List of configured remote backup regions
     * @param array $RegionList List of remote backup regions
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }

        if (array_key_exists("RemoteBackupSave",$param) and $param["RemoteBackupSave"] !== null) {
            $this->RemoteBackupSave = $param["RemoteBackupSave"];
        }

        if (array_key_exists("RemoteBinlogSave",$param) and $param["RemoteBinlogSave"] !== null) {
            $this->RemoteBinlogSave = $param["RemoteBinlogSave"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
