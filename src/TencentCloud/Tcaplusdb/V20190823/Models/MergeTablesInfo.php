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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request parameters used to merge tables
 *
 * @method CompareTablesInfo getMergeTables() Obtain Information of tables to be merged
 * @method void setMergeTables(CompareTablesInfo $MergeTables) Set Information of tables to be merged
 * @method boolean getCheckIndex() Obtain Whether to check indexes
 * @method void setCheckIndex(boolean $CheckIndex) Set Whether to check indexes
 */
class MergeTablesInfo extends AbstractModel
{
    /**
     * @var CompareTablesInfo Information of tables to be merged
     */
    public $MergeTables;

    /**
     * @var boolean Whether to check indexes
     */
    public $CheckIndex;

    /**
     * @param CompareTablesInfo $MergeTables Information of tables to be merged
     * @param boolean $CheckIndex Whether to check indexes
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
        if (array_key_exists("MergeTables",$param) and $param["MergeTables"] !== null) {
            $this->MergeTables = new CompareTablesInfo();
            $this->MergeTables->deserialize($param["MergeTables"]);
        }

        if (array_key_exists("CheckIndex",$param) and $param["CheckIndex"] !== null) {
            $this->CheckIndex = $param["CheckIndex"];
        }
    }
}
