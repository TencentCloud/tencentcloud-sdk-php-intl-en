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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGroupNew request structure.
 *
 * @method string getQueryType() Obtain Query type. Network–VPC; business recognition–resource; resource tag–tag
 * @method void setQueryType(string $QueryType) Set Query type. Network–VPC; business recognition–resource; resource tag–tag
 * @method string getGroupId() Obtain Asset group ID, 0: all asset group IDs
 * @method void setGroupId(string $GroupId) Set Asset group ID, 0: all asset group IDs
 * @method string getShowType() Obtain all: all, including subgroups; own: my asset groups only
 * @method void setShowType(string $ShowType) Set all: all, including subgroups; own: my asset groups only
 */
class DescribeResourceGroupNewRequest extends AbstractModel
{
    /**
     * @var string Query type. Network–VPC; business recognition–resource; resource tag–tag
     */
    public $QueryType;

    /**
     * @var string Asset group ID, 0: all asset group IDs
     */
    public $GroupId;

    /**
     * @var string all: all, including subgroups; own: my asset groups only
     */
    public $ShowType;

    /**
     * @param string $QueryType Query type. Network–VPC; business recognition–resource; resource tag–tag
     * @param string $GroupId Asset group ID, 0: all asset group IDs
     * @param string $ShowType all: all, including subgroups; own: my asset groups only
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
        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }
    }
}
