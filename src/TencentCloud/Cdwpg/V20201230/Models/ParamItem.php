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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParamItem information
 *
 * @method string getNodeType() Obtain Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeType(string $NodeType) Set Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Node name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetails() Obtain Parameter information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetails(array $Details) Set Parameter information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamItem extends AbstractModel
{
    /**
     * @var string Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeType;

    /**
     * @var string Node name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @var integer Number of parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Parameter information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Details;

    /**
     * @param string $NodeType Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Node name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Details Parameter information.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ParamDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
