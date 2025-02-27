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
 * DescribeHostUpdateRecordDetail request structure.
 *
 * @method string getDeployRecordId() Obtain Deployment record id, which is the record id returned by calling the UpdateCertificateInstance api, or the record id returned by calling the UpdateCertificateRecordRollback rollback api.
 * @method void setDeployRecordId(string $DeployRecordId) Set Deployment record id, which is the record id returned by calling the UpdateCertificateInstance api, or the record id returned by calling the UpdateCertificateRecordRollback rollback api.
 * @method string getLimit() Obtain Number of items per page. the default is 10. the maximum value is 200.
 * @method void setLimit(string $Limit) Set Number of items per page. the default is 10. the maximum value is 200.
 * @method string getOffset() Obtain Pagination offset, starting from 0. default is 0.
 * @method void setOffset(string $Offset) Set Pagination offset, starting from 0. default is 0.
 */
class DescribeHostUpdateRecordDetailRequest extends AbstractModel
{
    /**
     * @var string Deployment record id, which is the record id returned by calling the UpdateCertificateInstance api, or the record id returned by calling the UpdateCertificateRecordRollback rollback api.
     */
    public $DeployRecordId;

    /**
     * @var string Number of items per page. the default is 10. the maximum value is 200.
     */
    public $Limit;

    /**
     * @var string Pagination offset, starting from 0. default is 0.
     */
    public $Offset;

    /**
     * @param string $DeployRecordId Deployment record id, which is the record id returned by calling the UpdateCertificateInstance api, or the record id returned by calling the UpdateCertificateRecordRollback rollback api.
     * @param string $Limit Number of items per page. the default is 10. the maximum value is 200.
     * @param string $Offset Pagination offset, starting from 0. default is 0.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
