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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information required for uploading AIGC result files to COS. The LVB_QCSRole role needs to be created and authorized.
 *
 * @method string getCosBucketName() Obtain Name of the COS bucket to store to. This value is required if you need to store the results in COS. Example value: bucket.
 * @method void setCosBucketName(string $CosBucketName) Set Name of the COS bucket to store to. This value is required if you need to store the results in COS. Example value: bucket.
 * @method string getCosBucketRegion() Obtain Region of the COS bucket to store to. This is required if you need to upload the results to COS. Example value: ap-guangzhou.
 * @method void setCosBucketRegion(string $CosBucketRegion) Set Region of the COS bucket to store to. This is required if you need to upload the results to COS. Example value: ap-guangzhou.
 * @method string getCosBucketPath() Obtain Path of the COS bucket to store to.Optional.Example value: my_file.
 * @method void setCosBucketPath(string $CosBucketPath) Set Path of the COS bucket to store to.Optional.Example value: my_file.
 */
class AigcStoreCosParam extends AbstractModel
{
    /**
     * @var string Name of the COS bucket to store to. This value is required if you need to store the results in COS. Example value: bucket.
     */
    public $CosBucketName;

    /**
     * @var string Region of the COS bucket to store to. This is required if you need to upload the results to COS. Example value: ap-guangzhou.
     */
    public $CosBucketRegion;

    /**
     * @var string Path of the COS bucket to store to.Optional.Example value: my_file.
     */
    public $CosBucketPath;

    /**
     * @param string $CosBucketName Name of the COS bucket to store to. This value is required if you need to store the results in COS. Example value: bucket.
     * @param string $CosBucketRegion Region of the COS bucket to store to. This is required if you need to upload the results to COS. Example value: ap-guangzhou.
     * @param string $CosBucketPath Path of the COS bucket to store to.Optional.Example value: my_file.
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("CosBucketPath",$param) and $param["CosBucketPath"] !== null) {
            $this->CosBucketPath = $param["CosBucketPath"];
        }
    }
}
