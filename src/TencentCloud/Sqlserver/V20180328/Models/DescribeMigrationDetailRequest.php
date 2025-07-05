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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationDetail request structure.
 *
 * @method integer getMigrateId() Obtain Migration task ID
 * @method void setMigrateId(integer $MigrateId) Set Migration task ID
 */
class DescribeMigrationDetailRequest extends AbstractModel
{
    /**
     * @var integer Migration task ID
     */
    public $MigrateId;

    /**
     * @param integer $MigrateId Migration task ID
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
        if (array_key_exists("MigrateId",$param) and $param["MigrateId"] !== null) {
            $this->MigrateId = $param["MigrateId"];
        }
    }
}
