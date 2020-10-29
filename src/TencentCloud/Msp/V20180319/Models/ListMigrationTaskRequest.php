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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListMigrationTask request structure.
 *
 * @method integer getOffset() Obtain The initial number of records, default value: 0
 * @method void setOffset(integer $Offset) Set The initial number of records, default value: 0
 * @method integer getLimit() Obtain Number of records, default value: 10
 * @method void setLimit(integer $Limit) Set Number of records, default value: 10
 * @method integer getProjectId() Obtain Project ID, the default value is empty.
 * @method void setProjectId(integer $ProjectId) Set Project ID, the default value is empty.
 */
class ListMigrationTaskRequest extends AbstractModel
{
    /**
     * @var integer The initial number of records, default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of records, default value: 10
     */
    public $Limit;

    /**
     * @var integer Project ID, the default value is empty.
     */
    public $ProjectId;

    /**
     * @param integer $Offset The initial number of records, default value: 0
     * @param integer $Limit Number of records, default value: 10
     * @param integer $ProjectId Project ID, the default value is empty.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
