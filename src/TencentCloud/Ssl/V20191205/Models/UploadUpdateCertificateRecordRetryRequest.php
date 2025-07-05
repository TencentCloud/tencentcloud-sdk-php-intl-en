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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadUpdateCertificateRecordRetry request structure.
 *
 * @method integer getDeployRecordId() Obtain Retry deployment record ID, obtained through UpdateCertificateInstance to get the deployment record ID. If this parameter is not provided, DeployRecordDetailId must be provided.
 * @method void setDeployRecordId(integer $DeployRecordId) Set Retry deployment record ID, obtained through UpdateCertificateInstance to get the deployment record ID. If this parameter is not provided, DeployRecordDetailId must be provided.
 * @method integer getDeployRecordDetailId() Obtain Retry deployment record detail ID, obtained through the DescribeHostUpdateRecordDetail API. If this parameter is not provided, DeployRecordId must be provided.
 * @method void setDeployRecordDetailId(integer $DeployRecordDetailId) Set Retry deployment record detail ID, obtained through the DescribeHostUpdateRecordDetail API. If this parameter is not provided, DeployRecordId must be provided.
 */
class UploadUpdateCertificateRecordRetryRequest extends AbstractModel
{
    /**
     * @var integer Retry deployment record ID, obtained through UpdateCertificateInstance to get the deployment record ID. If this parameter is not provided, DeployRecordDetailId must be provided.
     */
    public $DeployRecordId;

    /**
     * @var integer Retry deployment record detail ID, obtained through the DescribeHostUpdateRecordDetail API. If this parameter is not provided, DeployRecordId must be provided.
     */
    public $DeployRecordDetailId;

    /**
     * @param integer $DeployRecordId Retry deployment record ID, obtained through UpdateCertificateInstance to get the deployment record ID. If this parameter is not provided, DeployRecordDetailId must be provided.
     * @param integer $DeployRecordDetailId Retry deployment record detail ID, obtained through the DescribeHostUpdateRecordDetail API. If this parameter is not provided, DeployRecordId must be provided.
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
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("DeployRecordDetailId",$param) and $param["DeployRecordDetailId"] !== null) {
            $this->DeployRecordDetailId = $param["DeployRecordDetailId"];
        }
    }
}
