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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data flow information.
 *
 * @method string getDataFlowId() Obtain Data flow manage ID.
 * @method void setDataFlowId(string $DataFlowId) Set Data flow manage ID.
 * @method string getDataFlowName() Obtain Data flow name.
 * @method void setDataFlowName(string $DataFlowName) Set Data flow name.
 * @method string getSourceStorageType() Obtain Source data type.
 * @method void setSourceStorageType(string $SourceStorageType) Set Source data type.
 * @method string getSourceStorageAddress() Obtain Source storage address.
 * @method void setSourceStorageAddress(string $SourceStorageAddress) Set Source storage address.
 * @method string getSourcePath() Obtain Source path.
 * @method void setSourcePath(string $SourcePath) Set Source path.
 * @method string getTargetPath() Obtain Directory path.
 * @method void setTargetPath(string $TargetPath) Set Directory path.
 * @method string getStatus() Obtain available: effective.
pending: configuring.
unavailable.
Deleting: deleting.
 * @method void setStatus(string $Status) Set available: effective.
pending: configuring.
unavailable.
Deleting: deleting.
 * @method string getCreationTime() Obtain Creation time.
 * @method void setCreationTime(string $CreationTime) Set Creation time.
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getAutoRefresh() Obtain 0: disable auto-update.

1: enable auto-update.
 * @method void setAutoRefresh(integer $AutoRefresh) Set 0: disable auto-update.

1: enable auto-update.
 * @method string getUserKafkaTopic() Obtain Topic Parameter used by KafkaConsumer during consumption
 * @method void setUserKafkaTopic(string $UserKafkaTopic) Set Topic Parameter used by KafkaConsumer during consumption
 * @method string getServerAddr() Obtain Service address.
 * @method void setServerAddr(string $ServerAddr) Set Service address.
 * @method string getUserName() Obtain Kafka consuming user name.
 * @method void setUserName(string $UserName) Set Kafka consuming user name.
 * @method string getAutoRefreshStatus() Obtain Auto refresh status, available: in effect.
pending: configuring.
unavailable.
 * @method void setAutoRefreshStatus(string $AutoRefreshStatus) Set Auto refresh status, available: in effect.
pending: configuring.
unavailable.
 * @method string getAutoRefreshTime() Obtain Automatically refresh start time.
 * @method void setAutoRefreshTime(string $AutoRefreshTime) Set Automatically refresh start time.
 */
class DataFlowInfo extends AbstractModel
{
    /**
     * @var string Data flow manage ID.
     */
    public $DataFlowId;

    /**
     * @var string Data flow name.
     */
    public $DataFlowName;

    /**
     * @var string Source data type.
     */
    public $SourceStorageType;

    /**
     * @var string Source storage address.
     */
    public $SourceStorageAddress;

    /**
     * @var string Source path.
     */
    public $SourcePath;

    /**
     * @var string Directory path.
     */
    public $TargetPath;

    /**
     * @var string available: effective.
pending: configuring.
unavailable.
Deleting: deleting.
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $CreationTime;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var integer 0: disable auto-update.

1: enable auto-update.
     */
    public $AutoRefresh;

    /**
     * @var string Topic Parameter used by KafkaConsumer during consumption
     */
    public $UserKafkaTopic;

    /**
     * @var string Service address.
     */
    public $ServerAddr;

    /**
     * @var string Kafka consuming user name.
     */
    public $UserName;

    /**
     * @var string Auto refresh status, available: in effect.
pending: configuring.
unavailable.
     */
    public $AutoRefreshStatus;

    /**
     * @var string Automatically refresh start time.
     */
    public $AutoRefreshTime;

    /**
     * @param string $DataFlowId Data flow manage ID.
     * @param string $DataFlowName Data flow name.
     * @param string $SourceStorageType Source data type.
     * @param string $SourceStorageAddress Source storage address.
     * @param string $SourcePath Source path.
     * @param string $TargetPath Directory path.
     * @param string $Status available: effective.
pending: configuring.
unavailable.
Deleting: deleting.
     * @param string $CreationTime Creation time.
     * @param string $FileSystemId File system ID
     * @param integer $AutoRefresh 0: disable auto-update.

1: enable auto-update.
     * @param string $UserKafkaTopic Topic Parameter used by KafkaConsumer during consumption
     * @param string $ServerAddr Service address.
     * @param string $UserName Kafka consuming user name.
     * @param string $AutoRefreshStatus Auto refresh status, available: in effect.
pending: configuring.
unavailable.
     * @param string $AutoRefreshTime Automatically refresh start time.
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
        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("SourceStorageType",$param) and $param["SourceStorageType"] !== null) {
            $this->SourceStorageType = $param["SourceStorageType"];
        }

        if (array_key_exists("SourceStorageAddress",$param) and $param["SourceStorageAddress"] !== null) {
            $this->SourceStorageAddress = $param["SourceStorageAddress"];
        }

        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
        }

        if (array_key_exists("UserKafkaTopic",$param) and $param["UserKafkaTopic"] !== null) {
            $this->UserKafkaTopic = $param["UserKafkaTopic"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AutoRefreshStatus",$param) and $param["AutoRefreshStatus"] !== null) {
            $this->AutoRefreshStatus = $param["AutoRefreshStatus"];
        }

        if (array_key_exists("AutoRefreshTime",$param) and $param["AutoRefreshTime"] !== null) {
            $this->AutoRefreshTime = $param["AutoRefreshTime"];
        }
    }
}
