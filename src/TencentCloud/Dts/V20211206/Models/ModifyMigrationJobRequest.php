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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrationJob request structure.
 *
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getRunMode() Obtain Running mode. Valid values: `immediate`, `timed`.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `immediate`, `timed`.
 * @method MigrateOption getMigrateOption() Obtain Migration task configuration options, which describe how the task performs migration. The `RateLimitOption` option cannot be configured. To modify the speed limit settings of the task, use the `ModifyMigrateRateLimit` API after the task starts running.
 * @method void setMigrateOption(MigrateOption $MigrateOption) Set Migration task configuration options, which describe how the task performs migration. The `RateLimitOption` option cannot be configured. To modify the speed limit settings of the task, use the `ModifyMigrateRateLimit` API after the task starts running.
 * @method DBEndpointInfo getSrcInfo() Obtain Source instance information
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) Set Source instance information
 * @method DBEndpointInfo getDstInfo() Obtain Target instance information
 * @method void setDstInfo(DBEndpointInfo $DstInfo) Set Target instance information
 * @method string getJobName() Obtain Migration task name, which can contain up to 128 characters.
 * @method void setJobName(string $JobName) Set Migration task name, which can contain up to 128 characters.
 * @method string getExpectRunTime() Obtain Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
 * @method void setExpectRunTime(string $ExpectRunTime) Set Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 * @method integer getAutoRetryTimeRangeMinutes() Obtain Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) Set Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
 */
class ModifyMigrationJobRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Running mode. Valid values: `immediate`, `timed`.
     */
    public $RunMode;

    /**
     * @var MigrateOption Migration task configuration options, which describe how the task performs migration. The `RateLimitOption` option cannot be configured. To modify the speed limit settings of the task, use the `ModifyMigrateRateLimit` API after the task starts running.
     */
    public $MigrateOption;

    /**
     * @var DBEndpointInfo Source instance information
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo Target instance information
     */
    public $DstInfo;

    /**
     * @var string Migration task name, which can contain up to 128 characters.
     */
    public $JobName;

    /**
     * @var string Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
     */
    public $ExpectRunTime;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @var integer Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId Task ID
     * @param string $RunMode Running mode. Valid values: `immediate`, `timed`.
     * @param MigrateOption $MigrateOption Migration task configuration options, which describe how the task performs migration. The `RateLimitOption` option cannot be configured. To modify the speed limit settings of the task, use the `ModifyMigrateRateLimit` API after the task starts running.
     * @param DBEndpointInfo $SrcInfo Source instance information
     * @param DBEndpointInfo $DstInfo Target instance information
     * @param string $JobName Migration task name, which can contain up to 128 characters.
     * @param string $ExpectRunTime Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `timed`.
     * @param array $Tags Tag information
     * @param integer $AutoRetryTimeRangeMinutes Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DBEndpointInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DBEndpointInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
