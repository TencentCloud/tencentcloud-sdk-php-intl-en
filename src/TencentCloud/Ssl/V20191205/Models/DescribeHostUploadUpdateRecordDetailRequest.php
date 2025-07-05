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
 * DescribeHostUploadUpdateRecordDetail request structure.
 *
 * @method integer getDeployRecordId() Obtain Hosting record ID.
 * @method void setDeployRecordId(integer $DeployRecordId) Set Hosting record ID.
 * @method integer getLimit() Obtain Number of items per page. default is 10, maximum is 200. exceeds 200 will be set to 200.
 * @method void setLimit(integer $Limit) Set Number of items per page. default is 10, maximum is 200. exceeds 200 will be set to 200.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeHostUploadUpdateRecordDetailRequest extends AbstractModel
{
    /**
     * @var integer Hosting record ID.
     */
    public $DeployRecordId;

    /**
     * @var integer Number of items per page. default is 10, maximum is 200. exceeds 200 will be set to 200.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param integer $DeployRecordId Hosting record ID.
     * @param integer $Limit Number of items per page. default is 10, maximum is 200. exceeds 200 will be set to 200.
     * @param integer $Offset Offset. Default value: 0.
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
