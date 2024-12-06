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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyJavaMemShellsStatus request structure.
 *
 * @method integer getStatus() Obtain Target Processing Status: 0 - Pending, 1 - Allowlisted, 2 - Deleted, 3 - Ignored, 4 - Manually Processed
 * @method void setStatus(integer $Status) Set Target Processing Status: 0 - Pending, 1 - Allowlisted, 2 - Deleted, 3 - Ignored, 4 - Manually Processed
 * @method array getIds() Obtain Event ID Array
 * @method void setIds(array $Ids) Set Event ID Array
 */
class ModifyJavaMemShellsStatusRequest extends AbstractModel
{
    /**
     * @var integer Target Processing Status: 0 - Pending, 1 - Allowlisted, 2 - Deleted, 3 - Ignored, 4 - Manually Processed
     */
    public $Status;

    /**
     * @var array Event ID Array
     */
    public $Ids;

    /**
     * @param integer $Status Target Processing Status: 0 - Pending, 1 - Allowlisted, 2 - Deleted, 3 - Ignored, 4 - Manually Processed
     * @param array $Ids Event ID Array
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
