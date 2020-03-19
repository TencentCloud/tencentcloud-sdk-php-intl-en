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
 * @method string getTableGroupId() Obtain Table group ID
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID
 * @method string getTableGroupName() Obtain Table group name
 * @method void setTableGroupName(string $TableGroupName) Set Table group name
 * @method string getCreatedTime() Obtain Table group creation time
 * @method void setCreatedTime(string $CreatedTime) Set Table group creation time
 * @method integer getTableCount() Obtain Number of tables in table group
 * @method void setTableCount(integer $TableCount) Set Number of tables in table group
 * @method integer getTotalSize() Obtain Total table storage capacity in MB in table group
 * @method void setTotalSize(integer $TotalSize) Set Total table storage capacity in MB in table group
 */

/**
 *Table group details
 */
class TableGroupInfo extends AbstractModel
{
    /**
     * @var string Table group ID
     */
    public $TableGroupId;

    /**
     * @var string Table group name
     */
    public $TableGroupName;

    /**
     * @var string Table group creation time
     */
    public $CreatedTime;

    /**
     * @var integer Number of tables in table group
     */
    public $TableCount;

    /**
     * @var integer Total table storage capacity in MB in table group
     */
    public $TotalSize;
    /**
     * @param string $TableGroupId Table group ID
     * @param string $TableGroupName Table group name
     * @param string $CreatedTime Table group creation time
     * @param integer $TableCount Number of tables in table group
     * @param integer $TotalSize Total table storage capacity in MB in table group
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
