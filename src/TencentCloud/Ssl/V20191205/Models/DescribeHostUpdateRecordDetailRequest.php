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
 * @method string getDeployRecordId() Obtain One-click update record ID
 * @method void setDeployRecordId(string $DeployRecordId) Set One-click update record ID
 * @method string getLimit() Obtain Number per page, 10 by default.
 * @method void setLimit(string $Limit) Set Number per page, 10 by default.
 * @method string getOffset() Obtain Paging offset, starting from 0
 * @method void setOffset(string $Offset) Set Paging offset, starting from 0
 */
class DescribeHostUpdateRecordDetailRequest extends AbstractModel
{
    /**
     * @var string One-click update record ID
     */
    public $DeployRecordId;

    /**
     * @var string Number per page, 10 by default.
     */
    public $Limit;

    /**
     * @var string Paging offset, starting from 0
     */
    public $Offset;

    /**
     * @param string $DeployRecordId One-click update record ID
     * @param string $Limit Number per page, 10 by default.
     * @param string $Offset Paging offset, starting from 0
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
