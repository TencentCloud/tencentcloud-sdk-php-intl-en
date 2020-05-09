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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID.
 * @method void setGroupId(integer $GroupId) Set Policy group ID.
 * @method integer getLimit() Obtain Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method integer getOffset() Obtain Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method void setOffset(integer $Offset) Set Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method array getDimensions() Obtain Dimensions of filtering objects.
 * @method void setDimensions(array $Dimensions) Set Dimensions of filtering objects.
 */
class DescribeBindingPolicyObjectListRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID.
     */
    public $GroupId;

    /**
     * @var integer Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Parameter offset on each page. The value starts from 0 and the default value is 0.
     */
    public $Offset;

    /**
     * @var array Dimensions of filtering objects.
     */
    public $Dimensions;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $GroupId Policy group ID.
     * @param integer $Limit Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     * @param integer $Offset Parameter offset on each page. The value starts from 0 and the default value is 0.
     * @param array $Dimensions Dimensions of filtering objects.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
