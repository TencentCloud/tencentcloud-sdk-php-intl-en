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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quality Overview Table Ranking Elements
 *
 * @method string getTableId() Obtain Table Id
 * @method void setTableId(string $TableId) Set Table Id
 * @method string getTableName() Obtain Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCnt() Obtain Number
 * @method void setCnt(integer $Cnt) Set Number
 */
class TopTableStatItem extends AbstractModel
{
    /**
     * @var string Table Id
     */
    public $TableId;

    /**
     * @var string Table nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var integer Number
     */
    public $Cnt;

    /**
     * @param string $TableId Table Id
     * @param string $TableName Table nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Cnt Number
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }
    }
}
