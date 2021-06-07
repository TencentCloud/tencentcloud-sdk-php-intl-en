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
 * Compare the meta information of two tables
 *
 * @method string getSrcTableClusterId() Obtain Cluster ID of the source table
 * @method void setSrcTableClusterId(string $SrcTableClusterId) Set Cluster ID of the source table
 * @method string getSrcTableGroupId() Obtain Table group ID of the source table
 * @method void setSrcTableGroupId(string $SrcTableGroupId) Set Table group ID of the source table
 * @method string getSrcTableName() Obtain Source table name
 * @method void setSrcTableName(string $SrcTableName) Set Source table name
 * @method string getDstTableClusterId() Obtain Cluster ID of the target table
 * @method void setDstTableClusterId(string $DstTableClusterId) Set Cluster ID of the target table
 * @method string getDstTableGroupId() Obtain Table group ID of the target table
 * @method void setDstTableGroupId(string $DstTableGroupId) Set Table group ID of the target table
 * @method string getDstTableName() Obtain Target table name
 * @method void setDstTableName(string $DstTableName) Set Target table name
 * @method string getSrcTableInstanceId() Obtain Source table ID
 * @method void setSrcTableInstanceId(string $SrcTableInstanceId) Set Source table ID
 * @method string getDstTableInstanceId() Obtain Target table ID
 * @method void setDstTableInstanceId(string $DstTableInstanceId) Set Target table ID
 */
class CompareTablesInfo extends AbstractModel
{
    /**
     * @var string Cluster ID of the source table
     */
    public $SrcTableClusterId;

    /**
     * @var string Table group ID of the source table
     */
    public $SrcTableGroupId;

    /**
     * @var string Source table name
     */
    public $SrcTableName;

    /**
     * @var string Cluster ID of the target table
     */
    public $DstTableClusterId;

    /**
     * @var string Table group ID of the target table
     */
    public $DstTableGroupId;

    /**
     * @var string Target table name
     */
    public $DstTableName;

    /**
     * @var string Source table ID
     */
    public $SrcTableInstanceId;

    /**
     * @var string Target table ID
     */
    public $DstTableInstanceId;

    /**
     * @param string $SrcTableClusterId Cluster ID of the source table
     * @param string $SrcTableGroupId Table group ID of the source table
     * @param string $SrcTableName Source table name
     * @param string $DstTableClusterId Cluster ID of the target table
     * @param string $DstTableGroupId Table group ID of the target table
     * @param string $DstTableName Target table name
     * @param string $SrcTableInstanceId Source table ID
     * @param string $DstTableInstanceId Target table ID
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
        if (array_key_exists("SrcTableClusterId",$param) and $param["SrcTableClusterId"] !== null) {
            $this->SrcTableClusterId = $param["SrcTableClusterId"];
        }

        if (array_key_exists("SrcTableGroupId",$param) and $param["SrcTableGroupId"] !== null) {
            $this->SrcTableGroupId = $param["SrcTableGroupId"];
        }

        if (array_key_exists("SrcTableName",$param) and $param["SrcTableName"] !== null) {
            $this->SrcTableName = $param["SrcTableName"];
        }

        if (array_key_exists("DstTableClusterId",$param) and $param["DstTableClusterId"] !== null) {
            $this->DstTableClusterId = $param["DstTableClusterId"];
        }

        if (array_key_exists("DstTableGroupId",$param) and $param["DstTableGroupId"] !== null) {
            $this->DstTableGroupId = $param["DstTableGroupId"];
        }

        if (array_key_exists("DstTableName",$param) and $param["DstTableName"] !== null) {
            $this->DstTableName = $param["DstTableName"];
        }

        if (array_key_exists("SrcTableInstanceId",$param) and $param["SrcTableInstanceId"] !== null) {
            $this->SrcTableInstanceId = $param["SrcTableInstanceId"];
        }

        if (array_key_exists("DstTableInstanceId",$param) and $param["DstTableInstanceId"] !== null) {
            $this->DstTableInstanceId = $param["DstTableInstanceId"];
        }
    }
}
