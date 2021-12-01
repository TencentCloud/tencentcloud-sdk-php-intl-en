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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddressTemplates request structure.
 *
 * @method array getFilters() Obtain Filters
<li>address-template-name - IP address template name.</li>
<li>address-template-id - IP address template ID, such as `ipm-mdunqeb6`.</li>
<li>address-ip - IP address.</li>
 * @method void setFilters(array $Filters) Set Filters
<li>address-template-name - IP address template name.</li>
<li>address-template-id - IP address template ID, such as `ipm-mdunqeb6`.</li>
<li>address-ip - IP address.</li>
 * @method string getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(string $Offset) Set Offset. The default value is 0.
 * @method string getLimit() Obtain Number of values to be returned. The default value is 20. Maximum is 100.
 * @method void setLimit(string $Limit) Set Number of values to be returned. The default value is 20. Maximum is 100.
 */
class DescribeAddressTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filters
<li>address-template-name - IP address template name.</li>
<li>address-template-id - IP address template ID, such as `ipm-mdunqeb6`.</li>
<li>address-ip - IP address.</li>
     */
    public $Filters;

    /**
     * @var string Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var string Number of values to be returned. The default value is 20. Maximum is 100.
     */
    public $Limit;

    /**
     * @param array $Filters Filters
<li>address-template-name - IP address template name.</li>
<li>address-template-id - IP address template ID, such as `ipm-mdunqeb6`.</li>
<li>address-ip - IP address.</li>
     * @param string $Offset Offset. The default value is 0.
     * @param string $Limit Number of values to be returned. The default value is 20. Maximum is 100.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
