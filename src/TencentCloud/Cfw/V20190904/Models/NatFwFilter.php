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
 * The filter list displayed by the NAT firewall instance
 *
 * @method string getFilterType() Obtain Filter type, e.g., instance ID
 * @method void setFilterType(string $FilterType) Set Filter type, e.g., instance ID
 * @method string getFilterContent() Obtain Filtered content, separated with ","
 * @method void setFilterContent(string $FilterContent) Set Filtered content, separated with ","
 */
class NatFwFilter extends AbstractModel
{
    /**
     * @var string Filter type, e.g., instance ID
     */
    public $FilterType;

    /**
     * @var string Filtered content, separated with ","
     */
    public $FilterContent;

    /**
     * @param string $FilterType Filter type, e.g., instance ID
     * @param string $FilterContent Filtered content, separated with ","
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterContent",$param) and $param["FilterContent"] !== null) {
            $this->FilterContent = $param["FilterContent"];
        }
    }
}
