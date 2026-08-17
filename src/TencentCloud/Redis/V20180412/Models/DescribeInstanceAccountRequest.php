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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method integer getLimit() Obtain <p>Page size. Default value: 20; minimum value: 1; maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Page size. Default value: 20; minimum value: 1; maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Pagination offset.</p><ul><li>Parameter value: Multiple of Limit, offset=limit*(page number-1).</li><li>Default value: 0.</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.</p><ul><li>Parameter value: Multiple of Limit, offset=limit*(page number-1).</li><li>Default value: 0.</li></ul>
 */
class DescribeInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Page size. Default value: 20; minimum value: 1; maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset.</p><ul><li>Parameter value: Multiple of Limit, offset=limit*(page number-1).</li><li>Default value: 0.</li></ul>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param integer $Limit <p>Page size. Default value: 20; minimum value: 1; maximum value: 100.</p>
     * @param integer $Offset <p>Pagination offset.</p><ul><li>Parameter value: Multiple of Limit, offset=limit*(page number-1).</li><li>Default value: 0.</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
