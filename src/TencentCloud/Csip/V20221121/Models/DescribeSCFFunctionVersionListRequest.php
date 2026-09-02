<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSCFFunctionVersionList request structure.
 *
 * @method string getSCFRegion() Obtain SCF region
Parameter format: Tencent Cloud standard Region, for example, ap-guangzhou.
 * @method void setSCFRegion(string $SCFRegion) Set SCF region
Parameter format: Tencent Cloud standard Region, for example, ap-guangzhou.
 * @method string getNamespace() Obtain Namespace name
Value reference: obtain through the DescribeSCFNamespaceList API.
 * @method void setNamespace(string $Namespace) Set Namespace name
Value reference: obtain through the DescribeSCFNamespaceList API.
 * @method string getFunctionName() Obtain Function name
Value reference: obtain through the DescribeSCFFunctionList API.
 * @method void setFunctionName(string $FunctionName) Set Function name
Value reference: obtain through the DescribeSCFFunctionList API.
 * @method integer getLimit() Obtain Number of items per page
Value range: [1, 100].
Default value: 20
 * @method void setLimit(integer $Limit) Set Number of items per page
Value range: [1, 100].
Default value: 20
 * @method integer getOffset() Obtain Pagination offset.
Valid values: [0, +∞)
Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination offset.
Valid values: [0, +∞)
Default value: 0
 */
class DescribeSCFFunctionVersionListRequest extends AbstractModel
{
    /**
     * @var string SCF region
Parameter format: Tencent Cloud standard Region, for example, ap-guangzhou.
     */
    public $SCFRegion;

    /**
     * @var string Namespace name
Value reference: obtain through the DescribeSCFNamespaceList API.
     */
    public $Namespace;

    /**
     * @var string Function name
Value reference: obtain through the DescribeSCFFunctionList API.
     */
    public $FunctionName;

    /**
     * @var integer Number of items per page
Value range: [1, 100].
Default value: 20
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
Valid values: [0, +∞)
Default value: 0
     */
    public $Offset;

    /**
     * @param string $SCFRegion SCF region
Parameter format: Tencent Cloud standard Region, for example, ap-guangzhou.
     * @param string $Namespace Namespace name
Value reference: obtain through the DescribeSCFNamespaceList API.
     * @param string $FunctionName Function name
Value reference: obtain through the DescribeSCFFunctionList API.
     * @param integer $Limit Number of items per page
Value range: [1, 100].
Default value: 20
     * @param integer $Offset Pagination offset.
Valid values: [0, +∞)
Default value: 0
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
        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
