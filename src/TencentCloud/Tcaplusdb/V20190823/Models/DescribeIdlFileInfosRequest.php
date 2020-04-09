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
 * DescribeIdlFileInfos request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where a file resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a file resides
 * @method array getTableGroupIds() Obtain ID of the table group where a file resides
 * @method void setTableGroupIds(array $TableGroupIds) Set ID of the table group where a file resides
 * @method array getIdlFileIds() Obtain File ID list
 * @method void setIdlFileIds(array $IdlFileIds) Set File ID list
 * @method integer getOffset() Obtain Query list offset
 * @method void setOffset(integer $Offset) Set Query list offset
 * @method integer getLimit() Obtain Number of returned results in query list
 * @method void setLimit(integer $Limit) Set Number of returned results in query list
 */
class DescribeIdlFileInfosRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where a file resides
     */
    public $ClusterId;

    /**
     * @var array ID of the table group where a file resides
     */
    public $TableGroupIds;

    /**
     * @var array File ID list
     */
    public $IdlFileIds;

    /**
     * @var integer Query list offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results in query list
     */
    public $Limit;

    /**
     * @param string $ClusterId ID of the cluster where a file resides
     * @param array $TableGroupIds ID of the table group where a file resides
     * @param array $IdlFileIds File ID list
     * @param integer $Offset Query list offset
     * @param integer $Limit Number of returned results in query list
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupIds",$param) and $param["TableGroupIds"] !== null) {
            $this->TableGroupIds = $param["TableGroupIds"];
        }

        if (array_key_exists("IdlFileIds",$param) and $param["IdlFileIds"] !== null) {
            $this->IdlFileIds = $param["IdlFileIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
