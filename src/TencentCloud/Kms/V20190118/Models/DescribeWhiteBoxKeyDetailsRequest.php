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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteBoxKeyDetails request structure.
 *
 * @method integer getKeyStatus() Obtain Filter: key status. 0: disabled, 1: enabled
 * @method void setKeyStatus(integer $KeyStatus) Set Filter: key status. 0: disabled, 1: enabled
 * @method integer getOffset() Obtain This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
 * @method void setOffset(integer $Offset) Set This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
 * @method integer getLimit() Obtain This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 0, indicating not to paginate.
 * @method void setLimit(integer $Limit) Set This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 0, indicating not to paginate.
 * @method array getTagFilters() Obtain Tag filter condition
 * @method void setTagFilters(array $TagFilters) Set Tag filter condition
 */
class DescribeWhiteBoxKeyDetailsRequest extends AbstractModel
{
    /**
     * @var integer Filter: key status. 0: disabled, 1: enabled
     */
    public $KeyStatus;

    /**
     * @var integer This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 0, indicating not to paginate.
     */
    public $Limit;

    /**
     * @var array Tag filter condition
     */
    public $TagFilters;

    /**
     * @param integer $KeyStatus Filter: key status. 0: disabled, 1: enabled
     * @param integer $Offset This parameter has the same meaning of the `Offset` in an SQL query, indicating that this acquisition starts from the "No. Offset value" element of the array arranged in a certain order. The default value is 0.
     * @param integer $Limit This parameter has the same meaning of the `Limit` in an SQL query, indicating that up to `Limit` value elements can be obtained in this request. The default value is 0, indicating not to paginate.
     * @param array $TagFilters Tag filter condition
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
        if (array_key_exists("KeyStatus",$param) and $param["KeyStatus"] !== null) {
            $this->KeyStatus = $param["KeyStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
