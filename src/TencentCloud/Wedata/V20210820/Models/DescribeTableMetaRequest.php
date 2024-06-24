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
 * DescribeTableMeta request structure.
 *
 * @method string getTableId() Obtain Unique Table ID
 * @method void setTableId(string $TableId) Set Unique Table ID
 * @method TableNameFilter getTableNameFilter() Obtain Query conditions by Name
 * @method void setTableNameFilter(TableNameFilter $TableNameFilter) Set Query conditions by Name
 * @method integer getTableFilterType() Obtain Query condition type: 0 by ID, 1 by Name, default is 0
 * @method void setTableFilterType(integer $TableFilterType) Set Query condition type: 0 by ID, 1 by Name, default is 0
 */
class DescribeTableMetaRequest extends AbstractModel
{
    /**
     * @var string Unique Table ID
     */
    public $TableId;

    /**
     * @var TableNameFilter Query conditions by Name
     */
    public $TableNameFilter;

    /**
     * @var integer Query condition type: 0 by ID, 1 by Name, default is 0
     */
    public $TableFilterType;

    /**
     * @param string $TableId Unique Table ID
     * @param TableNameFilter $TableNameFilter Query conditions by Name
     * @param integer $TableFilterType Query condition type: 0 by ID, 1 by Name, default is 0
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

        if (array_key_exists("TableNameFilter",$param) and $param["TableNameFilter"] !== null) {
            $this->TableNameFilter = new TableNameFilter();
            $this->TableNameFilter->deserialize($param["TableNameFilter"]);
        }

        if (array_key_exists("TableFilterType",$param) and $param["TableFilterType"] !== null) {
            $this->TableFilterType = $param["TableFilterType"];
        }
    }
}
