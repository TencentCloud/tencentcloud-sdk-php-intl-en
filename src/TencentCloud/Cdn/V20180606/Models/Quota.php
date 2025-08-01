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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purge/Prefetch available usage and quota
 *
 * @method integer getBatch() Obtain Quota limit for one batch submission request.
 * @method void setBatch(integer $Batch) Set Quota limit for one batch submission request.
 * @method integer getTotal() Obtain Daily submission quota limit.
 * @method void setTotal(integer $Total) Set Daily submission quota limit.
 * @method integer getAvailable() Obtain Remaining daily submission quota.
 * @method void setAvailable(integer $Available) Set Remaining daily submission quota.
 * @method string getArea() Obtain Quota region.
 * @method void setArea(string $Area) Set Quota region.
 */
class Quota extends AbstractModel
{
    /**
     * @var integer Quota limit for one batch submission request.
     */
    public $Batch;

    /**
     * @var integer Daily submission quota limit.
     */
    public $Total;

    /**
     * @var integer Remaining daily submission quota.
     */
    public $Available;

    /**
     * @var string Quota region.
     */
    public $Area;

    /**
     * @param integer $Batch Quota limit for one batch submission request.
     * @param integer $Total Daily submission quota limit.
     * @param integer $Available Remaining daily submission quota.
     * @param string $Area Quota region.
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
        if (array_key_exists("Batch",$param) and $param["Batch"] !== null) {
            $this->Batch = $param["Batch"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
