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
 * Input rule. If an uploaded video hits the rule, the workflow will be triggered.
 *
 * @method string getType() Obtain The trigger type. Valid values:
<li>`CosFileUpload`: Tencent Cloud COS trigger.</li>
<li>`AwsS3FileUpload`: AWS S3 trigger. Currently, this type is only supported for transcoding tasks and schemes (not supported for workflows).</li>


 * @method void setType(string $Type) Set The trigger type. Valid values:
<li>`CosFileUpload`: Tencent Cloud COS trigger.</li>
<li>`AwsS3FileUpload`: AWS S3 trigger. Currently, this type is only supported for transcoding tasks and schemes (not supported for workflows).</li>


 * @method CosFileUploadTrigger getCosFileUploadTrigger() Obtain This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosFileUploadTrigger(CosFileUploadTrigger $CosFileUploadTrigger) Set This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AwsS3FileUploadTrigger getAwsS3FileUploadTrigger() Obtain The AWS S3 trigger. This parameter is valid and required if `Type` is `AwsS3FileUpload`.

Note: Currently, the key for the AWS S3 bucket, the trigger SQS queue, and the callback SQS queue must be the same.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAwsS3FileUploadTrigger(AwsS3FileUploadTrigger $AwsS3FileUploadTrigger) Set The AWS S3 trigger. This parameter is valid and required if `Type` is `AwsS3FileUpload`.

Note: Currently, the key for the AWS S3 bucket, the trigger SQS queue, and the callback SQS queue must be the same.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkflowTrigger extends AbstractModel
{
    /**
     * @var string The trigger type. Valid values:
<li>`CosFileUpload`: Tencent Cloud COS trigger.</li>
<li>`AwsS3FileUpload`: AWS S3 trigger. Currently, this type is only supported for transcoding tasks and schemes (not supported for workflows).</li>


     */
    public $Type;

    /**
     * @var CosFileUploadTrigger This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosFileUploadTrigger;

    /**
     * @var AwsS3FileUploadTrigger The AWS S3 trigger. This parameter is valid and required if `Type` is `AwsS3FileUpload`.

Note: Currently, the key for the AWS S3 bucket, the trigger SQS queue, and the callback SQS queue must be the same.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AwsS3FileUploadTrigger;

    /**
     * @param string $Type The trigger type. Valid values:
<li>`CosFileUpload`: Tencent Cloud COS trigger.</li>
<li>`AwsS3FileUpload`: AWS S3 trigger. Currently, this type is only supported for transcoding tasks and schemes (not supported for workflows).</li>


     * @param CosFileUploadTrigger $CosFileUploadTrigger This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AwsS3FileUploadTrigger $AwsS3FileUploadTrigger The AWS S3 trigger. This parameter is valid and required if `Type` is `AwsS3FileUpload`.

Note: Currently, the key for the AWS S3 bucket, the trigger SQS queue, and the callback SQS queue must be the same.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosFileUploadTrigger",$param) and $param["CosFileUploadTrigger"] !== null) {
            $this->CosFileUploadTrigger = new CosFileUploadTrigger();
            $this->CosFileUploadTrigger->deserialize($param["CosFileUploadTrigger"]);
        }

        if (array_key_exists("AwsS3FileUploadTrigger",$param) and $param["AwsS3FileUploadTrigger"] !== null) {
            $this->AwsS3FileUploadTrigger = new AwsS3FileUploadTrigger();
            $this->AwsS3FileUploadTrigger->deserialize($param["AwsS3FileUploadTrigger"]);
        }
    }
}
