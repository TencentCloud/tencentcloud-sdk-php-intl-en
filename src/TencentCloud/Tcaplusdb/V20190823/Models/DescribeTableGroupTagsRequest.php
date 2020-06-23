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
 * DescribeTableGroupTags request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster where table group tags need to be queried
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster where table group tags need to be queried
 * @method array getTableGroupIds() Obtain The list of IDs of the table groups whose tags need to be queried
 * @method void setTableGroupIds(array $TableGroupIds) Set The list of IDs of the table groups whose tags need to be queried
 */
class DescribeTableGroupTagsRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster where table group tags need to be queried
     */
    public $ClusterId;

    /**
     * @var array The list of IDs of the table groups whose tags need to be queried
     */
    public $TableGroupIds;

    /**
     * @param string $ClusterId The ID of the cluster where table group tags need to be queried
     * @param array $TableGroupIds The list of IDs of the table groups whose tags need to be queried
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
    }
}
