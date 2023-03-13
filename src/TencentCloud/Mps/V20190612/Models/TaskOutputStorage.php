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
 * The information of the media processing output object.
 *
 * @method string getType() Obtain The storage type for a media processing output file. Valid values:
<li>`COS`: Tencent Cloud COS</li>
<li>`>AWS-S3`: AWS S3. This type is only supported for AWS tasks, and the output bucket must be in the same region as the bucket of the source file.</li>
 * @method void setType(string $Type) Set The storage type for a media processing output file. Valid values:
<li>`COS`: Tencent Cloud COS</li>
<li>`>AWS-S3`: AWS S3. This type is only supported for AWS tasks, and the output bucket must be in the same region as the bucket of the source file.</li>
 * @method CosOutputStorage getCosOutputStorage() Obtain The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method S3OutputStorage getS3OutputStorage() Obtain The AWS S3 bucket to save the output file. This parameter is required if `Type` is `AWS-S3`.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setS3OutputStorage(S3OutputStorage $S3OutputStorage) Set The AWS S3 bucket to save the output file. This parameter is required if `Type` is `AWS-S3`.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string The storage type for a media processing output file. Valid values:
<li>`COS`: Tencent Cloud COS</li>
<li>`>AWS-S3`: AWS S3. This type is only supported for AWS tasks, and the output bucket must be in the same region as the bucket of the source file.</li>
     */
    public $Type;

    /**
     * @var CosOutputStorage The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CosOutputStorage;

    /**
     * @var S3OutputStorage The AWS S3 bucket to save the output file. This parameter is required if `Type` is `AWS-S3`.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $S3OutputStorage;

    /**
     * @param string $Type The storage type for a media processing output file. Valid values:
<li>`COS`: Tencent Cloud COS</li>
<li>`>AWS-S3`: AWS S3. This type is only supported for AWS tasks, and the output bucket must be in the same region as the bucket of the source file.</li>
     * @param CosOutputStorage $CosOutputStorage The location to save the output object in COS. This parameter is valid and required when `Type` is COS.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param S3OutputStorage $S3OutputStorage The AWS S3 bucket to save the output file. This parameter is required if `Type` is `AWS-S3`.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorage();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }

        if (array_key_exists("S3OutputStorage",$param) and $param["S3OutputStorage"] !== null) {
            $this->S3OutputStorage = new S3OutputStorage();
            $this->S3OutputStorage->deserialize($param["S3OutputStorage"]);
        }
    }
}
