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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSchedules request structure.
 *
 * @method array getScheduleIds() Obtain The IDs of the schemes to query. Array length limit: 100.
 * @method void setScheduleIds(array $ScheduleIds) Set The IDs of the schemes to query. Array length limit: 100.
 * @method string getTriggerType() Obtain The trigger type. Valid values:
<li>`CosFileUpload`: The scheme is triggered when a file is uploaded to Tencent Cloud Object Storage (COS).</li>
<li>`AwsS3FileUpload`: The scheme is triggered when a file is uploaded to AWS S3.</li>
If you do not specify this parameter or leave it empty, all schemes will be returned regardless of the trigger type.
 * @method void setTriggerType(string $TriggerType) Set The trigger type. Valid values:
<li>`CosFileUpload`: The scheme is triggered when a file is uploaded to Tencent Cloud Object Storage (COS).</li>
<li>`AwsS3FileUpload`: The scheme is triggered when a file is uploaded to AWS S3.</li>
If you do not specify this parameter or leave it empty, all schemes will be returned regardless of the trigger type.
 * @method string getStatus() Obtain The scheme status. Valid values:
<li>`Enabled`</li>
<li>`Disabled`</li>
If you do not specify this parameter, all schemes will be returned regardless of the status.
 * @method void setStatus(string $Status) Set The scheme status. Valid values:
<li>`Enabled`</li>
<li>`Disabled`</li>
If you do not specify this parameter, all schemes will be returned regardless of the status.
 * @method integer getOffset() Obtain The pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The pagination offset. Default value: 0.
 * @method integer getLimit() Obtain The maximum number of records to return. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The maximum number of records to return. Default value: 10. Maximum value: 100.
 */
class DescribeSchedulesRequest extends AbstractModel
{
    /**
     * @var array The IDs of the schemes to query. Array length limit: 100.
     */
    public $ScheduleIds;

    /**
     * @var string The trigger type. Valid values:
<li>`CosFileUpload`: The scheme is triggered when a file is uploaded to Tencent Cloud Object Storage (COS).</li>
<li>`AwsS3FileUpload`: The scheme is triggered when a file is uploaded to AWS S3.</li>
If you do not specify this parameter or leave it empty, all schemes will be returned regardless of the trigger type.
     */
    public $TriggerType;

    /**
     * @var string The scheme status. Valid values:
<li>`Enabled`</li>
<li>`Disabled`</li>
If you do not specify this parameter, all schemes will be returned regardless of the status.
     */
    public $Status;

    /**
     * @var integer The pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The maximum number of records to return. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $ScheduleIds The IDs of the schemes to query. Array length limit: 100.
     * @param string $TriggerType The trigger type. Valid values:
<li>`CosFileUpload`: The scheme is triggered when a file is uploaded to Tencent Cloud Object Storage (COS).</li>
<li>`AwsS3FileUpload`: The scheme is triggered when a file is uploaded to AWS S3.</li>
If you do not specify this parameter or leave it empty, all schemes will be returned regardless of the trigger type.
     * @param string $Status The scheme status. Valid values:
<li>`Enabled`</li>
<li>`Disabled`</li>
If you do not specify this parameter, all schemes will be returned regardless of the status.
     * @param integer $Offset The pagination offset. Default value: 0.
     * @param integer $Limit The maximum number of records to return. Default value: 10. Maximum value: 100.
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
        if (array_key_exists("ScheduleIds",$param) and $param["ScheduleIds"] !== null) {
            $this->ScheduleIds = $param["ScheduleIds"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
