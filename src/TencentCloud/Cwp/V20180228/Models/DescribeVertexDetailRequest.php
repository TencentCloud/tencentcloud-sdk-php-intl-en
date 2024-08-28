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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVertexDetail request structure.
 *
 * @method array getVertexIds() Obtain Point ID list
 * @method void setVertexIds(array $VertexIds) Set Point ID list
 * @method string getIncidentId() Obtain Event ID
 * @method void setIncidentId(string $IncidentId) Set Event ID
 * @method string getTableName() Obtain The name of the table where the event occurred
 * @method void setTableName(string $TableName) Set The name of the table where the event occurred
 */
class DescribeVertexDetailRequest extends AbstractModel
{
    /**
     * @var array Point ID list
     */
    public $VertexIds;

    /**
     * @var string Event ID
     */
    public $IncidentId;

    /**
     * @var string The name of the table where the event occurred
     */
    public $TableName;

    /**
     * @param array $VertexIds Point ID list
     * @param string $IncidentId Event ID
     * @param string $TableName The name of the table where the event occurred
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
        if (array_key_exists("VertexIds",$param) and $param["VertexIds"] !== null) {
            $this->VertexIds = $param["VertexIds"];
        }

        if (array_key_exists("IncidentId",$param) and $param["IncidentId"] !== null) {
            $this->IncidentId = $param["IncidentId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
