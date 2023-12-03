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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCertificateRecordRetry request structure.
 *
 * @method integer getDeployRecordId() Obtain To-be-redeployed record ID
 * @method void setDeployRecordId(integer $DeployRecordId) Set To-be-redeployed record ID
 * @method integer getDeployRecordDetailId() Obtain To-be-redeployed record detail ID
 * @method void setDeployRecordDetailId(integer $DeployRecordDetailId) Set To-be-redeployed record detail ID
 */
class UpdateCertificateRecordRetryRequest extends AbstractModel
{
    /**
     * @var integer To-be-redeployed record ID
     */
    public $DeployRecordId;

    /**
     * @var integer To-be-redeployed record detail ID
     */
    public $DeployRecordDetailId;

    /**
     * @param integer $DeployRecordId To-be-redeployed record ID
     * @param integer $DeployRecordDetailId To-be-redeployed record detail ID
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
